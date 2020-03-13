<?php

namespace App\Http\Controllers;

use App\Forms\PostForm;
//use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Service\AddToDB;
//use Illuminate\Support\Facades\Auth;
use App\Service\UpdateToDB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;

class PostController extends Controller
{

    /**
     * @var FormBuilder
     */
    private $formBuilder;
    /**
     * @var AddToDB
     */
    private $AddToDB;
    /**
     * @var UpdateToDB
     */
    private $UpdateToDB;

    public function __construct(FormBuilder $formBuilder, AddToDB $AddToDB, UpdateToDB $UpdateToDB){

        $this-> formBuilder = $formBuilder;
        $this-> AddToDB = $AddToDB;
        $this-> UpdateToDB = $UpdateToDB;

    }

    public function index() {
        $posts = Post::all();

        if (empty($posts)) {
            return view('articles/error', [
                'message' => 'Aucun Article'
            ]);
        }

        return view('articles/article', [
            'posts' => $posts,
        ]);
    }

    public function create() {
        $form = $this->getFormEmpty();

        return view('articles/create', [
            'form' => $form,
            'success' => null,
            'message' => null
        ]);
    }

    public function store () {
        $form = $this->getFormEmpty();
        $allowed = array('png','jpg', 'jpeg');
        $file = null;

        if ($_FILES['url_image']['error'] !== 4) {

            $file = $_FILES['url_image']['name'];
            $file_extension = pathinfo($_FILES['url_image']['name'], PATHINFO_EXTENSION);

            if (!in_array(strtolower($file_extension), $allowed)) {
                return view('articles/create', [
                    'form' => $form,
                    'success' => false,
                    'message' => 'Le fichier n\'est pas une image'
                ]);
            }

            if ($_FILES['url_image']['error'] !== 0) {
                return view('articles/create', [
                    'form' => $form,
                    'success' => false,
                    'message' => 'Le fichier pèse trop lourd'
                ]);
            }

            $uplaodDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $_FILES['url_image']['name'];
            $upload = move_uploaded_file($_FILES['url_image']['tmp_name'], $uplaodDir);
        }

        $addPost = $this->AddToDB->AddArticle($_POST, $file);
        $response = json_decode($addPost, true);

        return view('articles/create', [
            'form' => $form,
            'success' => $response['success'],
            'message' => $response['message']
        ]);
    }

    public function main() {

        $user_id = Auth::User()['id'];
        $posts = Post::where('user_id', $user_id)->get();

        if (empty($posts)) {
            return view('articles/error', [
                'message' => 'Aucun Article'
            ]);
        }

        return view('articles/article', [
            'posts' => $posts,
        ]);
    }

    public function show($id) {
        $id = (int) $id;

        if ($id == 0) {
            return view('articles/error', [
                'message' => 'Cet Article n\'existe pas'
            ]);
        }

        $post = Post::find($id);

        if (empty($post)) {
            return view('articles/error', [
                'message' => 'Cet Article n\'existe pas'
            ]);
        }

        $user = User::find($post['user_id']);
        $connectedUser = Auth::User();

        return view('articles/id', [
            'post' => $post,
            'user' => $user,
            'connectedUser' => $connectedUser
        ]);
    }

    public function edit($id) {
        $model = Post::find($id);
        $form = $this->getForm($model);

        return view('articles/create', [
            'form' => $form,
            'success' => null,
            'message' => null
        ]);
    }

    public function update(Request $request, $id) {

        $form = $this->getFormEmpty();
        $allowed = array('png','jpg', 'jpeg');
        $file = null;

        if ($_FILES['url_image']['error'] !== 4) {

            $file = $_FILES['url_image']['name'];
            $file_extension = pathinfo($_FILES['url_image']['name'], PATHINFO_EXTENSION);

            if (!in_array(strtolower($file_extension), $allowed)) {
                return view('articles/create', [
                    'form' => $form,
                    'success' => false,
                    'message' => 'Le fichier n\'est pas une image'
                ]);
            }

            if ($_FILES['url_image']['error'] !== 0) {
                return view('articles/create', [
                    'form' => $form,
                    'success' => false,
                    'message' => 'Le fichier pèse trop lourd'
                ]);
            }

            $uplaodDir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $_FILES['url_image']['name'];
            $upload = move_uploaded_file($_FILES['url_image']['tmp_name'], $uplaodDir);

        } else {

          $post = Post::find($id);
          $file = $post['url_image'];

        }

        $addPost = $this->UpdateToDB->UpdateArticle($_POST, $file, $id);
        $response = json_decode($addPost, true);

        return view('articles/create', [
            'form' => $form,
            'success' => $response['success'],
            'message' => $response['message']
        ]);
    }

    public function destroy($id) {
        dd('oui');
        $post = Post::find($id);
        $user_id = Auth::User()['id'];

        if (Auth::User() != null && $user_id == $post['user_id']){
            Post::destroy($id);
            return view('home');
        }

        return view('articles/error', [
            'message' => 'vous n\'avez pas le droit de supprimer cet Article'
        ]);
    }

    private function getFormEmpty(){
        return $this->formBuilder->create(PostForm::class, ['method' => 'POST']);
    }

    private function getForm($model){
        return $this->formBuilder->create(PostForm::class, ['method' => 'PUT','model' => $model]);
    }
}

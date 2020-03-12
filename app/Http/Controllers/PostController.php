<?php

namespace App\Http\Controllers;

use App\Forms\ArticleForm;
use App\Model\Post as Post;
use App\Service\AddToDB;
use http\Client\Request;
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

    public function __construct(FormBuilder $formBuilder, AddToDB $AddToDB){

        $this-> formBuilder = $formBuilder;
        $this-> AddToDB = $AddToDB;

    }


    public function all()
    {
        $post = Post::all();

        return view('articles/article', [
            'post' => $post,
        ]);
    }

    public function id($id)
    {
        $id =(int) $id;

        if ($id == 0) {
            return view('articles/id', [
                'post' => 'false',
            ]);
        }

        $post = Post::find($id);

        if (empty($post)) {
            $post = 'false';
        }

        return view('articles/id', [
            'post' => $post,
        ]);
    }

    public function index () {

        $form = $this->getForm();

        return view('articles/create', [
            'form' => $form,
            'success' => null,
            'message' => null
        ]);

    }

    public function store ()
    {
        $form = $this->getForm();
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

    private function getForm(){
        return $this->formBuilder->create(ArticleForm::class, []);
    }
}

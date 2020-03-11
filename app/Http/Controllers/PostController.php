<?php

namespace App\Http\Controllers;

//use App\Forms\OrderForm;
use App\Model\Post as Post;
//use Kris\LaravelFormBuilder\FormBuilder;

class PostController extends Controller
{

//    /**
//     * @var FormBuilder
//    */
//    private $formBuilder;
//
//    public function __construct(FormBuilder $formBuilder){
//        $this-> formBuilder = $formBuilder;
//    }

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

        return view('articles/article', [
            'post' => $post,
        ]);
    }

    public function create ()
    {
//        $form = $this->getForm();
//        $form->redirectIfNotValid();
//
//        $post = Post::create([
//            'title' => $form,
//            'object' => 'faux',
//            'text' => 'vrai'
//        ]);
//
//        $post->save();
//
//        $postRespnse = Post::all();
//
//        return view('test', [
//            'post' => $postRespnse,
//        ]);
    }

//    private function getForm(){
//        return $this->formBuilder->create(OrderForm::class, []);
//    }
}

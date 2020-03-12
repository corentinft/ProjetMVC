<?php

namespace App\Service;

use App\Model\Post as Post;
use Illuminate\Support\Facades\Auth;

class AddToDB
{
    public function AddArticle($form, $file = null)
    {
        if (Auth::User() == null) {
            return json_encode([
                'success' => false,
                'message' => 'Il faut être connecté pour pouvoir publier un article'
            ]);
        }

        $id_user = Auth::User()['id'];

        Post::create([
            'title' => $form['title'],
            'object' => $form['object'],
            'text' => $form['text'],
            'url_image' => $file,
            'user_id' => $id_user
        ]);


        return json_encode([
            'success' => true,
            'message' => 'L\'article a bien été publié !'
        ]);
    }

}

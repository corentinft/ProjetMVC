<?php

namespace App\Service;

use App\Model\Post as Post;
use Illuminate\Support\Facades\Auth;

class UpdateToDB
{
    public function UpdateArticle($form, $file = null, $id)
    {
        if (Auth::User() == null) {
            return json_encode([
                'success' => false,
                'message' => 'Il faut être connecté pour pouvoir modifier un article'
            ]);
        }

        Post::find($id)->update([
            'title' => $form['title'],
            'object' => $form['object'],
            'text' => $form['text'],
            'url_image' => $file,
        ]);

        return json_encode([
            'success' => true,
            'message' => 'L\'article a bien été modifié !'
        ]);
    }

}

<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PostForm extends Form
{
    public function buildForm()
    {
        $this -> formOptions = [
            'method' => 'POST',
            'files' => true
        ];

        $this
            -> add('title', 'text', [
                'label' => 'Titre',
                'rules' => 'required|max:255'])
            -> add('object', 'text', [
                'label' => 'Chapeau',
                'rules' => 'required|max:255'])
            -> add('text', 'textarea', [
                'label' => 'Corp de l\'article',
                'rules' => 'required'])
            -> add('url_image', 'file', [
                'label' => 'Image',
                'rules' => 'maxSize:2M'])
            -> add('submit', 'submit', [
                'label' => 'Publier!']);
    }
}

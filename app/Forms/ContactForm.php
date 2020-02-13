<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ContactForm extends Form
{
    public function buildForm()
    {
        $this -> formOptions = [
            'method' => 'POST'
        ];

        $this
            -> add('firstname', 'text', [
                'label' => 'Prénom',
                'rules' => 'required|max:255'])
            -> add('lastname', 'text', [
                'label' => 'Nom',
                'rules' => 'required|max:255'])
            -> add('email', 'email', [
                'label' => 'Email',
                'rules' => 'required|max:255|email:rfc,dns'])
            -> add('message', 'textarea', [
                'label' => 'Message',
                'rules' => 'required|min:30'])
            -> add('submit', 'submit', [
                'label' => 'Envoyer!']);
    }
}

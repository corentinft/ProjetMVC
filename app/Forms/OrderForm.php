<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class OrderForm extends Form
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
            -> add('phone', 'text', [
                'label' => 'Téléphone',
                'rules' => 'required|min:10'])
            -> add('email', 'email', [
                'label' => 'Email',
                'rules' => 'required|max:255|email:rfc,dns'])
            -> add('model', 'select', [
                'choices' => ['Eg' => 'Eurogame', 'Mg' => 'Multi Game' , 'Ng' => 'Newgame N\'style'],
                'label' => 'Model de borne',
                'rules' => 'required'])
            -> add('theme', 'select', [
                'choices' => ['Px' => 'Pixel', 'Rg' => 'RetroGaming' , 'Nn' => 'Neon', 'Md' => 'Moderne'],
                'label' => 'Thème de la borne',
                'rules' => 'required'])
            -> add('submit', 'submit', [
                'label' => 'Envoyer!']);
    }
}

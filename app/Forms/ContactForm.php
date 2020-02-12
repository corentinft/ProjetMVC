<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ContactForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('firstname', 'text', [
                'label' => 'Prénom'])
            ->add('lastname', 'text', [
                'label' => 'Nom'])
            ->add('email', 'email', [
                'label' => 'Email'])
            ->add('message', 'textarea', [
                'label' => 'Message'])
            ->add('submit', 'submit', [
                'label' => 'Envoyer!']);
    }
}

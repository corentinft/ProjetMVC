<?php

namespace App\Http\Controllers;

use App\Forms\ContactForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class ContactController extends Controller {

    public function index (FormBuilder $formBuilder) {

        $form = $formBuilder->create(ContactForm::class, []);
        return view('contact', ['form' => $form]);

    }

}

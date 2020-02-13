<?php

namespace App\Http\Controllers;

use App\Forms\OrderForm;
use App\Service\SendMail;
use Kris\LaravelFormBuilder\FormBuilder;

class OrderController extends Controller {

    /**
     * @var FormBuilder
     */
    private $formBuilder;
    /**
     * @var SendMail
     */
    private $sendMail;

    public function __construct(FormBuilder $formBuilder, SendMail $sendMail){

        $this-> formBuilder = $formBuilder;
        $this-> sendMail = $sendMail;

    }

    public function index () {

        $form = $this->getForm();
        return view('order', [
            'form' => $form,
            'success' => null,
            'message' => null
        ]);

    }

    public function store (){

        $form = $this->getForm();
        $form->redirectIfNotValid();
        $mail = $this->sendMail->OrderMail($form->getFieldValues(), false);
        $mail = $this->sendMail->OrderMail($form->getFieldValues(), true);
        $response = json_decode($mail, true);
        return view('order', [
            'form' => $form,
            'success' => $response['success'],
            'message' => $response['message']
        ]);

    }

    private function getForm(){

        return $this->formBuilder->create(OrderForm::class, []);

    }

}

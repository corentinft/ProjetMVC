<?php

namespace App\Service;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Mail
 *
 */
class SendMail
{
    public function thanksForContactMail($form)
    {
        if (empty($form['email']) || $form['email'] == null) {
            return json_encode([
                'success' => false,
                'message' => 'Adresse Email invalide'
            ]);
        }

        Mail::to($form['email'])->send(new ContactMail($form));

        return json_encode([
            'success' => true,
            'message' => 'Le Formulaire de contact a bien été envoyé !'
        ]);
    }
}

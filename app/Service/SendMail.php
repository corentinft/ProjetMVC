<?php

namespace App\Service;

use App\Mail\ContactMail;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;


/**
 * Mail for Admin
 *
 */
class SendMail
{
    public function ContactMail($form, $admin)
    {
        $form['admin'] = $admin;

        if (empty($form['email']) || $form['email'] == null) {
            return json_encode([
                'success' => false,
                'message' => 'Adresse Email invalide'
            ]);
        }

        Mail::to($form['email'])->send(new ContactMail($form));

        return json_encode([
            'success' => true,
            'message' => 'Le formulaire de contact a bien été envoyé !'
        ]);
    }

    public function OrderMail($form, $admin)
    {
        $form['admin'] = $admin;

        if (empty($form['email']) || $form['email'] == null) {
            return json_encode([
                'success' => false,
                'message' => 'Adresse Email invalide'
            ]);
        }

        if (empty($form['phone']) || $form['phone'] == null) {
            return json_encode([
                'success' => false,
                'message' => 'Téléphone invalide'
            ]);
        }

        Mail::to($form['email'])->send(new OrderMail($form));

        return json_encode([
            'success' => true,
            'message' => 'Le Formulaire de contact a bien été envoyé !'
        ]);
    }
}

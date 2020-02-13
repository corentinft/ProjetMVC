@if ($data['admin'])
    Nouveau Message reçu de {{ $data['firstname'] }} {{ $data['lastname'] }},

    From : {{ $data['email'] }}

    Numéro de téléphone : {{ $data['phone'] }}

    Model = {{ $data['model'] }}

    Theme = {{ $data['theme'] }}

@else
    Bonjour {{ $data['firstname'] }} {{ $data['lastname'] }},

    Nous avons bien reçu votre commande, nous reprendrons contact avec vous au {{ $data['phone'] }} dans les plus bref delais.

    Cordialement,

    ARCADIA
@endif

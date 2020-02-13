@if ($data['admin'])
    Nouveau Message reçu de {{ $data['firstname'] }} {{ $data['lastname'] }},

    From : {{ $data['email'] }}

    Message :

    {{ $data['message'] }}

@else
    Bonjour {{ $data['firstname'] }} {{ $data['lastname'] }},

    Nous avons bien reçu votre message, nous vous répondrons dans les plus bref delais.

    Cordialement,

    ARCADIA
@endif

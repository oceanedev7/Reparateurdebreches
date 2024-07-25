@extends('layouts.base_admin')

@section('title', 'Dashboard')

@section('content')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Demande de contact</title>
</head>

<body>

    <h1 class="text-center font-black text-3xl text-bleu-fonce p-16">Demandes de contact</h1>

    @if (isset($emails) && count($emails) > 0)
        @foreach ($emails as $contact)
            <div class="bg-white p-6 mb-6 shadow-lg rounded-lg border border-gris-clair">
                <p class="text-bleu-fonce font-semibold"><strong>Prénom:</strong> {{ $contact['prenom'] }}</p>
                <p class="text-bleu-fonce font-semibold"><strong>Nom:</strong> {{ $contact['nom'] }}</p>
                <p class="text-bleu-fonce font-semibold"><strong>Email:</strong> {{ $contact['email'] }}</p>
                <p class="text-bleu-fonce font-semibold"><strong>Message:</strong> {{ $contact['message'] }}</p>
                <hr class="mt-4 border-t-2 border-gris-clair">
                @php
                    $expediteur = urlencode($contact['email']);
                    $sujet = urlencode('Message de' . " " . $contact['prenom'] . " " . $contact['nom']);
                    $message = urlencode("{$contact['message']}");
                    $lienGmail = "https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={$expediteur}&su={$sujet}&body={$message}";
                @endphp
                <a href="{{ $lienGmail }}"
                    class="text-bleu-fonce font-semibold underline mt-4 inline-block items-center space-x-2"
                    target="_blank">
                    Répondre à cette demande
                    <i class="fa-solid fa-envelope ml-2"></i>
                </a>
            </div>
        @endforeach
    @endif
</body>

</html>
@endsection

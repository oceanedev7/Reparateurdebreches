@extends('layouts.base_admin')

@section('title', 'Dashboard-Valider adhérent')
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
    <title></title>
</head>

<body>

    <div class="overflow-x-auto mt-8  space-y-6 my-14">

        <h1 class="text-center font-black text-xl text-bleu-fonce">VALIDER UN ADHÉRENT</h1>

        <table class="min-w-full border-collapse border border-gris-clair">
            <thead>
                <tr class="bg-bleu-clair text-bleu-fonce">
                    <th class="border border-gris-clair px-4 py-2">Nom</th>
                    <th class="border border-gris-clair px-4 py-2">Prénom</th>
                    <th class="border border-gris-clair px-4 py-2">Genre</th>
                    <th class="border border-gris-clair px-4 py-2">Date de naissance</th>
                    <th class="border border-gris-clair px-4 py-2">Adresse e-mail</th>
                    <th class="border border-gris-clair px-4 py-2">Numéro de téléphone</th>
                    <th class="border border-gris-clair px-4 py-2">Adresse postale</th>
                    <th class="border border-gris-clair px-4 py-2">Ville</th>
                    <th class="border border-gris-clair px-4 py-2">Code postal</th>
                    <th class="border border-gris-clair px-4 py-2">Pays</th>
                    <th class="border border-gris-clair px-4 py-2">Valider</th>
                    <th class="border border-gris-clair px-4 py-2">Refuser</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inscriptions as $inscription)
                    <tr class="even:bg-gris-clair odd:bg-white text-bleu-fonce">
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->nom}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->prenom}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->genre}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->date_naissance}} </td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->email}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->numero_telephone}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->adresse_postale}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->ville}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->code_postal}}</td>
                        <td class="border border-gris-clair px-4 py-2">{{$inscription->pays}}</td>
                        <td class="border border-gris-clair px-4 py-2 text-center text-green-600">
                            <a href="{{ route('validerinscription', $inscription->id) }}"><i
                                    class="fa-solid fa-square-check"></i></a>
                        </td>
                        <td class="border border-gris-clair px-4 py-2 text-center text-red-600">
                            <a href="{{route('supprimerdemandeadherent', $inscription->id)}}"><i
                                    class="fa-solid fa-square-xmark"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
@endsection
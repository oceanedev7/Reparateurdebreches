@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Actualités')</title>
</head>
<body>

    @section('content')
    <div class="flex items-center justify-center bg-bleu-fonce">
        <h1 class="font-bold text-5xl absolute text-white z-10">ACTUALITÉS</h1>
        <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/actus.jpg') }}" alt="">
    </div>
    @endsection


@section('main')

<div class="grid grid-cols-3 gap-12 p-20 justify-center ">

            <a  href="{{route('actu')}}" class="bg-bleu-fonce rounded-lg h-80 w-80 ">
                <img class="w-full rounded-lg object-cover h-3/5" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
                <div class="font-bold text-lg ml-10 mt-2"> TITRE </div>
                <div class="ml-6 mt-2 h-mx-12 truncate"> Nous proposons des services d’assistance pour les gestes de la vie courante (courses, ménage, préparation des repas…) afin de faciliter le quotidien des seniors.
                    Elles peuvent également proposer un service d’accompagnement pour garantir l'accès aux soins et aux loisirs. </div>
            </a>

</div>



@endsection





</body>
</html>

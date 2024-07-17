@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Évènement')</title>
</head>
<body>
    @section('content')
    <div class="flex items-center justify-center bg-bleu-fonce">
        <h1 class="font-bold text-5xl absolute text-white z-10">ÉVÈNEMENT</h1>
        <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/evenement.jpg') }}" alt="">
    </div>
    @endsection

    
        @section('main')

        <div class="w-full flex justify-center">
            <div class="flex flex-col text-justify p-24 space-y-20 max-w-6xl">
                <div class="space-y-14 text-center">
                    <div class="text-bleu-fonce font-black text-4xl">titre</div>
                    <div class="text-bleu-fonce text-lg text-justify">
                        Contenu
                    </div>
                </div>
            </div>
        </div>
        
        @endsection
    




</body>
</html>
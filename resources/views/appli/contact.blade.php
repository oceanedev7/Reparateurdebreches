@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Nous contacter')</title>
</head>
<body>


    @section('content')
<div class="flex items-center justify-center bg-bleu-fonce">
    <h1 class="font-bold text-5xl absolute text-white z-10">NOUS CONTACTER</h1>
    <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/contact.jpg') }}" alt="">
</div>
@endsection

@section('main')

<div class="w-full pb-24">
    <div class="flex flex-col ml-24 mr-24 text-justify p-12  space-y-16">

        <div class="space-y-6"> 
        <div class="text-bleu-fonce font-black text-3xl"> NOUS CONTACTER </div>
        <div class="ml-10">
            Pour toute demande de renseignements, merci de compléter ce formulaire.
        </div>
        </div>

    </div>

<form method="post" action="{{route('contact')}}" class="w-full max-w-xl flex flex-col mx-auto space-y-4">
    @csrf
    
    <label>Nom</label>
    <input  name="nom" class="border-bleu rounded-lg border-2" type="text">

    <label>Prénom</label>
    <input name="prenom" class="border-bleu rounded-lg border-2" type="text">
    
    <label>Adresse e-mail</label>
    <input name="email" class="border-bleu rounded-lg border-2" type="text">
    
    <label>Message</label>
    <textarea name="message" class="border-bleu rounded-lg border-2 resize-none h-44	" ></textarea>

    <div class="flex flex-row space-x-4 space-y-4"> 
     <input class="mt-6" type="checkbox" name="" id=""> 
     <div> En envoyant ce formulaire, j’accepte que mes données personnelles 
            soient utilisées pour mener à bien ma demande
    </div>

    </div>

    <div class="flex justify-end">
        <button class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold">ENVOYER</button>
    </div>

</form>














</div>

@endsection

    
</body>
</html>
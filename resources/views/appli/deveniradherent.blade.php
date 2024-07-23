@extends('layouts.vue')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>

    @section('title', 'Devenir adhérent')

@section('content')
<div class="flex items-center justify-center bg-bleu-fonce">
    <h1 class="font-bold text-5xl absolute text-white z-10">DEVENIR ADHÉRENT</h1>
    <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/deveniradherent.jpg') }}" alt="">
</div>

@endsection

@section('main')
<a href="{{route('accueil')}}" class="underline text-bleu-fonce"><i class="fa-solid fa-arrow-left underline mt-8 ml-8 text-bleu-fonce"></i> Retour à la page d'accueil </a>

<div class="w-full ">
    <div class="flex flex-col ml-24 mr-24 text-justify p-24 space-y-20">

        <div class="space-y-6"> 
        <div class="text-bleu-fonce font-black text-xl ml-10"> QUI PEUT ADHÉRER ?</div>
        <div  class="text-bleu-fonce">
            L’adhésion peut s’effectuer par simple demande.
            Généralement, les futurs membres sont tenus de prendre connaissance des statuts et du règlement intérieur de l’association. 
            Une cotisation peut également être demandée à l’adhésion si les statuts le prévoient. 
            Une association peut également demander à ce que les nouveaux membres remplissent un bulletin d’inscription.
            Si les statuts ne prévoient aucune durée maximale d’adhésion avant laquelle cette dernière devra être renouvelée, 
            les nouveaux membres sont alors considérés comme membres jusqu’à la dissolution de l’association ou le départ des membres.
        </div>
        </div>

        <div class="space-y-6">
        <div class="text-bleu-fonce font-black text-xl ml-10">POURQUOI ADHÉRER ?</div>
        <div class="text-bleu-fonce">
            En principe, les personnes qui s’engagent dans une association sont des personnes qui ont le désir d’être utile et d’agir pour les autres.
            En effet, aider les autres, défendre des intérêts qui vous sont chers ainsi que d’apporter de l’aide à la société sur un sujet précis, sont des formes de motivation qui poussent à s’engager dans une association.
            C’est un projet personnel que vous faites non seulement pour sortir de votre zone de confort mais aussi pour s’ouvrir aux autres et avoir plus confiance en vous.
            De plus, s’engager dans une association implique également de découvrir des nouvelles perspectives et d’élargir ces compétences.
        </div>
        </div>
    </div>
</div>


<div>
    <div class="text-center text-bleu-fonce font-black text-4xl mb-6"> FORMULAIRE D'INSCRIPTION </div>

    <div class="px-24 pb-24">
        <form  method="post" action="{{ route('nouveladherent') }}"   class="w-full max-w-xl flex flex-col mx-auto space-y-6">
            @csrf

            <div class="flex flex-row space-x-4">
                <input name="nom" class="flex-grow bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Nom" type="text">
                <input name="prenom" class="flex-grow bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Prénom" type="text">
                <select name="genre" class="flex-grow bg-bleu placeholder:text-bleu-fonce border-none rounded-lg">
                    <option>--</option>
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                </select>
            </div>

            <input name="date_naissance" class="bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Date de naissance" type="date">
            <input name="email" class="bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Adresse e-mail" type="text">
            <input name="numero_telephone" class="bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Numéro de téléphone" type="text">
            <input name="adresse_postale" class="bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Adresse postale" type="text">

            <div class="flex flex-row space-x-4">
                <input  name="ville" class="w-1/3 bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Ville" type="text">
                <input  name="code_postal" class="w-1/3 bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Code postal" type="text">
                <input  name="pays" class="w-1/3 bg-bleu placeholder:text-bleu-fonce border-none rounded-lg" placeholder="Pays" type="text">
            </div>

            <div class="flex justify-end">
                <button class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold">JE M'INSCRIS</button>
            </div>
        </form>
    </div>
</div>






@endsection


</body>
</html>
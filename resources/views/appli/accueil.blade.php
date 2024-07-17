@extends('layouts.base')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('Accueil')</title>
</head>
<body>
    <main>
@section('content')
<div class="w-full h-screen ">
    <div class="text-center text-bleu-fonce font-black text-4xl p-7 mt-12"> QUI SOMMES-NOUS ? </div>

<div class="flex flex-row">

    <div class="relative ml-20 mt-20 h-80 w-96">
        <div class="bg-bleu-fonce rounded-lg absolute top-0 left-0 h-full w-full"></div>
        <img class="transition-transform duration-300 ease-in-out transform hover:translate-x-2 hover:-translate-y-2 rounded-lg object-cover relative bottom-6 left-6 h-full w-full z-10 mb-44" src="{{ Storage::url('images/quisommesnous.png') }}" alt="">
    </div>
    

    <div class="text-bleu-fonce text-base flex items-center max-w-lg ml-40 mt-12"> 

        L’association “Réparateurs de Brèches Martinique” par leur dynamisme intervient au domicile des seniors mais aussi à l’hôpital ou encore en maison de retraite/EHPAD pour leur apporter de la compagnie, faire de la lecture, jouer à des jeux de société pour personnes âgées ou l’organisation de sorties. 
        Nous participons à l'animation de la vie locale en proposant des actions et des activités sociales, culturelles, sportives, environnementales. Nous contribuons à une vie locale citoyenne et solidaire.
        
    </div>
</div>
</div>

<div class="w-full h-screen ">
    <div class="text-center text-bleu-fonce font-black text-4xl p-7"> CE QUI NOUS ANIME </div>
    <div class="text-center relative top-4"> Notre association est animée par une force d'engagement et de solidarité, <br/> nous contribuons à améliorer le bien-être et la qualité de vie des seniors souvent fragilisée. 
       <br/> Notre association a pour but l'épanouissement  de nos aînés, le développement et le renforcement des actions de solidarité. </div>

       <div class="justify-items-center grid grid-cols-2 gap-y-6 relative top-20">
    
          <div class="text-right text-sm max-w-sm absolute top-2 left-6 "> 
            Nos bénévoles apportent compagnie et soutien aux personnes âgées esseulées, favorisant des moments d'échange et de partage. 
            Des ateliers, sorties culturelles ou de loisirs sont organisés afin de rompre la solitude et encourager les interactions sociales.
           </div>
           <div class="text-right text-sm max-w-sm absolute top-36 left-6 "> 
                Nous proposons des services d’assistance pour les gestes de la vie courante (courses, ménage, préparation des repas…) afin de faciliter le quotidien des seniors. 
                Elles peuvent également proposer un service d’accompagnement pour garantir l'accès aux soins et aux loisirs.
            </div>  
            <div class="text-left text-sm max-w-sm absolute top-2 right-6 "> 
                Nous établissons des groupes de paroles pour permettre aux proches aidants d’échanger et de partager leurs expériences afin de sortir de 
                l'isolement et se sentir compris et soutenus. Ils peuvent également bénéficier de conseils pratiques ou de soutien psychologique.
            </div> 
            <div class="text-left text-sm max-w-sm absolute top-[152px] right-6 "> 
                Dans le cadre de campagnes de sensibilisation et d’informations, nous luttons contre les préjugés et les discriminations liées à l'âge, 
                et faisons la promotion d'une image positive de la vieillesse. 
            </div> 


            <div class="bg-bleu-clair rounded-lg h-28 w-28 ml-96 flex items-center justify-center text-bleu-fonce text-4xl">
                <i class="fa-solid fa-puzzle-piece transition-transform duration-300 ease-in-out transform hover:scale-125"></i>
            </div>
            <div class="bg-bleu-clair rounded-lg h-28 w-28 mr-96 flex items-center justify-center text-bleu-fonce text-4xl">
                <i class="fa-solid fa-comments transition-transform duration-300 ease-in-out transform hover:scale-125"></i>
            </div>
            <div class="bg-bleu-clair rounded-lg h-28 w-28 ml-96 flex items-center justify-center text-bleu-fonce text-4xl">
                <i class="fa-solid fa-basket-shopping transition-transform duration-300 ease-in-out transform hover:scale-125"></i>
            </div>
            <div class="bg-bleu-clair rounded-lg h-28 w-28 mr-96 flex items-center justify-center text-bleu-fonce text-4xl">
                <i class="fa-solid fa-file-lines transition-transform duration-300 ease-in-out transform hover:scale-125"></i>
            </div>
            
            
            
            
            
            
            
      </div>
</div>


<div class="w-full h-screen">

    <div class="h-2/5 p-7">
          <div class="text-center font-bold text-4xl ml-64"> ...à la une </div>
          <div class="text-center text-bleu-fonce font-black text-5xl"> ACTUALITÉS </div> 
          <div class="flex flex-row space-x-16">   
            
            <a class="bg-bleu-fonce rounded-lg h-80 w-80 absolute left-12 mt-10">
                <img class="w-full rounded-lg object-cover h-3/5" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
                <div class="font-bold text-lg ml-10 mt-2"> TITRE </div>
                <div class="ml-6 mt-2 h-mx-12 truncate"> Nous proposons des services d’assistance pour les gestes de la vie courante (courses, ménage, préparation des repas…) afin de faciliter le quotidien des seniors. 
                    Elles peuvent également proposer un service d’accompagnement pour garantir l'accès aux soins et aux loisirs. </div>
            </a>
             
            <a class="bg-gris-clair rounded-lg h-80 w-80 absolute mt-10 left-96">
                <img class="w-full rounded-lg object-cover h-3/5" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
                <div class="font-bold text-lg ml-10 mt-2"> TITRE </div>
                <div class="ml-6 mt-2 h-mx-12 truncate"> Nous proposons des services d’assistance pour les gestes de la vie courante (courses, ménage, préparation des repas…) afin de faciliter le quotidien des seniors. 
                    Elles peuvent également proposer un service d’accompagnement pour garantir l'accès aux soins et aux loisirs. </div>
            </a>
        
            <a class="bg-gris-fonce rounded-lg h-80 w-80 absolute right-12 mt-10">
                <img class="w-full rounded-lg object-cover h-3/5" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
                <div class="font-bold text-lg ml-10 mt-2"> TITRE </div>
                <div class="ml-6 mt-2 h-mx-12 truncate"> Nous proposons des services d’assistance pour les gestes de la vie courante (courses, ménage, préparation des repas…) afin de faciliter le quotidien des seniors. 
                    Elles peuvent également proposer un service d’accompagnement pour garantir l'accès aux soins et aux loisirs. </div>
            </a>

          </div> 
    </div>

    <div class="bg-bleu-clair h-3/5">
        <button class="">
            <a href="{{route('les-actus')}}" class="bg-white text-bleu-fonce py-2 px-6 text-center rounded text-lg font-bold absolute right-12 mt-64">+ voir toutes les actualités</a>
          </button>
    </div>


</div>

<div class="w-full h-screen">

<div class="bg-bleu-clair h-2/4 flex flex-row space-x-36"> 
    <div class="relative top-8">
    <div class=" font-bold text-4xl ml-24"> rendez-vous </div>
    <div class=" text-white font-black text-5xl ml-24 "> AGENDA </div>
    </div>

   <div class="flex flex-row space-x-16 mt-40">
    <a class="bg-bleu-fonce rounded-lg h-60 w-80 absolute left-12 mt-10  ">
        <img class="w-full rounded-lg object-cover h-full opacity-40" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
        <div class="relative bottom-44 left-4 mt-20 flex flex-col">
        <div class="text-white font-black text-2xl ml-6 mt-2"> TITRE </div>
        <div class="text-white font-bold ml-6 text-2xl h-mx-12 truncate">12/08/2024 </div>
        </div>
    </a>

    <a class="bg-bleu-fonce rounded-lg h-60 w-80 absolute mt-10 left-96 ">
        <img class="w-full rounded-lg object-cover h-full opacity-40" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
        <div class="relative bottom-44 left-4 mt-20 flex flex-col ">
        <div class="text-white font-black text-2xl ml-6 mt-2"> TITRE </div>
        <div class="text-white font-bold ml-6 text-2xl h-mx-12 truncate">12/08/2024 </div>
        </div>
    </a>

    <a class="bg-bleu-fonce rounded-lg h-60 w-80 absolute right-12 mt-10 ">
        <img class="w-full rounded-lg object-cover h-full opacity-40" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
        <div class="relative bottom-44 left-4 mt-20 flex flex-col ">
        <div class="text-white font-black text-2xl ml-6 mt-2"> TITRE </div>
        <div class="text-white font-bold ml-6 text-2xl h-mx-12 truncate">12/08/2024 </div>
        </div>
    </a>
</div>
</div>

<div class="h-2/4"> 
<button>
    <a href="{{route('agenda')}}" class="bg-bleu-clair text-bleu-fonce py-2 px-4 text-center rounded text-lg font-bold absolute right-12 mt-40">+ voir tous les évènements</a>
  </button>
</div>
</div>

<div class="h-96 w-full">
    <div class="text-center text-bleu-fonce font-black text-5xl"> ILS NOUS SOUTIENNENT </div> 

<div class="max-h-24 flex flex-row">
    <img class="max-h-24" src="{{ Storage::url('images/logogammvert.png') }}" alt="">
    <img class="max-h-24" src="{{ Storage::url('images/logoctm.png') }}" alt="">
    <img class="max-h-24" src="{{ Storage::url('images/logocarrefour.png') }}" alt="">
    <img class="max-h-24" src="{{ Storage::url('images/logoleclerc.png') }}" alt="">
    <img class="max-h-12" src="{{ Storage::url('images/logodecathlon.png') }}" alt="">
    <img class="max-h-24" src="{{ Storage::url('images/logocultura.jpg') }}" alt="">
</div> 
</div>



@endsection
    </main>
</body>
</html>

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
          <div class="flex flex-row justify-center space-x-8 mt-12">
            @foreach($actualites as $actualite)
                <a class="bg-white rounded-lg max-w-xs h-80 flex flex-col" href="{{ route('actu', $actualite->id) }}">
                    <img class="w-full rounded-lg object-cover h-3/5" src="{{ Storage::url($actualite->photo) }}" alt="{{ $actualite->titre }}">
                    <div class="font-bold text-lg text-center px-2 mt-4 ">{{ $actualite->titre }}</div>
                    <div class=" max-w-xs truncate mt-2 ml-4">{{ $actualite->contenu }}</div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="bg-bleu-clair h-3/5">
        <button class="">
            <a href="{{route('les-actus')}}" class="bg-white text-bleu-fonce py-2 px-6 text-center rounded text-lg font-bold absolute right-12 mt-64">+ voir toutes les actualités</a>
          </button>
    </div>


</div>

<div class="w-full h-screen">

    <div class="bg-bleu-clair h-2/4 flex flex-col items-start px-24"> 
       
        <div class="mt-8 mb-10">
       
            <div class="font-bold text-4xl">rendez-vous</div>
            <div class="text-white font-black text-5xl">AGENDA</div>
        </div>
    
        <div class="flex flex-row justify-center space-x-8">
            @foreach($evenements as $evenement)
            <a href="{{ route('evenement', $evenement->id) }}" class="bg-bleu-fonce rounded-lg h-60 w-80 relative">
                <img class="w-full rounded-lg object-cover h-full opacity-40" src="{{ Storage::url($evenement->photo) }}" alt="">
                <div class="absolute bottom-4 left-4 flex flex-col">
                    <div class="text-white font-black text-2xl mt-2"> {{ $evenement->titre }} </div>
                    <div class="text-white font-bold text-xl mt-2 truncate"> {{ $evenement->date }} </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

<div class="h-2/4"> 
<button>
    <a href="{{route('agenda')}}" class="bg-bleu-clair text-bleu-fonce py-2 px-4 text-center rounded text-lg font-bold absolute right-12 mt-40">+ voir tous les évènements</a>
  </button>
</div>
</div>

<div class="h-80 w-full">
    <div class="text-center text-bleu-fonce font-black text-5xl"> ILS NOUS SOUTIENNENT </div> 

<div class="overflow-hidden whitespace-nowrap relative top-16 ">
    <div class="flex items-center animate-caroussel">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logogammvert.png') }}" alt="Logo Gamm Vert">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logoctm.png') }}" alt="Logo CTM">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logocarrefour.png') }}" alt="Logo Carrefour">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logoleclerc.png') }}" alt="Logo Leclerc">
      <img class="max-h-12 mx-2" src="{{ Storage::url('images/logodecathlon.png') }}" alt="Logo Decathlon">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logocultura.jpg') }}" alt="Logo Cultura">

      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logogammvert.png') }}" alt="Logo Gamm Vert">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logoctm.png') }}" alt="Logo CTM">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logocarrefour.png') }}" alt="Logo Carrefour">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logoleclerc.png') }}" alt="Logo Leclerc">
      <img class="max-h-12 mx-2" src="{{ Storage::url('images/logodecathlon.png') }}" alt="Logo Decathlon">
      <img class="max-h-24 mx-2" src="{{ Storage::url('images/logocultura.jpg') }}" alt="Logo Cultura">
    </div>
  </div>

</div>


<button onclick="backToTop()" id="bouton" class="fixed bottom-4 right-4 z-50 text-gris-fonce text-3xl"><i class="fa-solid fa-circle-arrow-up"></i></button>
  


@endsection
    </main>

    <script>

var bouton = document.getElementById("bouton");

function scroll() {
  if (document.documentElement.scrollTop > 50) {
    bouton.style.display = "block";
  } else {
    bouton.style.display = "none";
  }
}

function backToTop() {
  document.documentElement.scrollTop = 0; 
}
</script>
</body>
</html>

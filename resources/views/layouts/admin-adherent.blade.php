<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
    {{-- <nav class=" h-24  m-0 p-0 w-full flex items-center">
<div class="h-44 w-48 ml-12 py-10 z-10 ">
 <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logo1.png') }}" alt="">
</div>

<div class="flex  w-full justify-around	items-center	">
       <div class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between	">
        <a> ACCUEIL </a>
        <a> ARTICLES</a>
        <a > NOUS CONTACTER</a>
       </div>

       <div class=" flex justify-between space-x-12">
        <a class="bg-bleu-fonce text-white py-2 ps-5 pe-4 rounded text-lg "><i class="fa-solid fa-user"></i> </a>
        <a class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold"> DEVENIR ADHERENT</a>
        <a class="bg-bleu text-bleu-fonce py-2 px-4 text-center  rounded text-lg font-bold">FAIRE UN DON </a>
       </div>
</div>
      

    </nav> --}}
    {{-- <div class="flex items-center justify-between h-24">

        <div class="h-44 w-48 ml-12 py-10 z-10 ">
            <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logo1.png') }}" alt="">
        </div>

        <a href="" class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between"> ACCUEIL </a>
        <a  href="" class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between"> ARTICLES</a>
        <a href="" class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between"> NOUS CONTACTER</a>

        <div class="mt-5 flex lg:ml-4 lg:mt-0 mr-12">

          <span class="hidden sm:block">
            <a href="" class="bg-bleu-fonce text-white py-2 ps-4 pe-4 rounded text-lg "><i class="fa-solid fa-user"></i> </a>
         </span>
      
          <button class="ml-3 hidden sm:block">
            <a href="" class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold"> DEVENIR ADHERENT</a>
          </button>
      
          <button class="sm:ml-3  hidden sm:block">
            <a href="" class="bg-bleu text-bleu-fonce py-2 px-4 text-center  rounded text-lg font-bold">FAIRE UN DON </a>
          </button>
      
          <!-- Dropdown -->
          <div class="relative ml-3 sm:hidden">
            <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                <i class="fa-solid fa-bars"></i>
              <svg class="-mr-1 ml-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
      
            <!--
              Dropdown menu, show/hide based on menu state.
      
              Entering: "transition ease-out duration-200"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div class=" flex flex-col  absolute right-0 z-10 -mr-1 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="mobile-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a class=" text-bleu-fonce text-lg font-bold">Se connecter </a>
            <a class=" text-bleu-fonce  text-lg font-bold">Devenir adhérent</a>
            <a class="text-bleu-fonce text-lg font-bold">Faire un don</a>
            </div>
          </div>
        </div>
      </div> --}}
      
    <header class="">

        <div class="flex items-center justify-between h-1/5	">

            <div class="h-44 w-48 ml-12 py-6 z-10 ">
                <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logonavbar.png') }}" alt="">
            </div>
    </header>

    <main>
        @yield('content')
    </main>
        
    <footer class="bg-bleu-fonce w-full h-20 pt-6 mt-4 text-center text-white">
        &copy; Réparateurs de brèches 2024 | Tous droits réservés.
    </footer>
    
    
    

</body>
</html>
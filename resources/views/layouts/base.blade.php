
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
<<<<<<< HEAD

=======
      
>>>>>>> main

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
<<<<<<< HEAD

          <button class="ml-3 hidden sm:block">
            <a href="" class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold"> DEVENIR ADHERENT</a>
          </button>

          <button class="sm:ml-3  hidden sm:block">
            <a href="" class="bg-bleu text-bleu-fonce py-2 px-4 text-center  rounded text-lg font-bold">FAIRE UN DON </a>
          </button>

=======
      
          <button class="ml-3 hidden sm:block">
            <a href="" class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold"> DEVENIR ADHERENT</a>
          </button>
      
          <button class="sm:ml-3  hidden sm:block">
            <a href="" class="bg-bleu text-bleu-fonce py-2 px-4 text-center  rounded text-lg font-bold">FAIRE UN DON </a>
          </button>
      
>>>>>>> main
          <!-- Dropdown -->
          <div class="relative ml-3 sm:hidden">
            <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                <i class="fa-solid fa-bars"></i>
              <svg class="-mr-1 ml-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
<<<<<<< HEAD

            <!--
              Dropdown menu, show/hide based on menu state.

=======
      
            <!--
              Dropdown menu, show/hide based on menu state.
      
>>>>>>> main
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
<<<<<<< HEAD

=======
      
>>>>>>> main
    <header class="">

        <div class="flex items-center justify-between h-1/5	">

            <div class="h-44 w-48 ml-12 py-6 z-10 ">
                <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logonavbar.png') }}" alt="">
            </div>
<<<<<<< HEAD

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

=======
    
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
          
>>>>>>> main
              <!-- Dropdown -->
              <div class="relative ml-3 sm:hidden">
                <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                    <i class="fa-solid fa-bars"></i>
                  <svg class="-mr-1 ml-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </button>
<<<<<<< HEAD

                <!--
                  Dropdown menu, show/hide based on menu state.

=======
          
                <!--
                  Dropdown menu, show/hide based on menu state.
          
>>>>>>> main
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
          </div>
<<<<<<< HEAD

=======
          
>>>>>>> main

    </header>

    <main>
        @yield('content')
    </main>
<<<<<<< HEAD

=======
        
>>>>>>> main
    <footer class="bg-bleu-fonce w-full h-80 flex flex-wrap items-center justify-between p-8 relative">
        <div class="absolute top-[-2.5rem] left-1/2 transform -translate-x-1/2 z-10 text-center">
            <div class="bg-bleu-clair h-20 p-4 rounded-lg text-white flex items-center justify-center space-x-4">
                <p class="text-base font-bold text-bleu-fonce">Inscrivez-vous et restez <br/> informé de nos actualités !</p>
                <input type="email" placeholder="Adresse email" class="p-2 rounded border-none	"/>
                <button class="ml-3 hidden sm:block">
                    <a href="" class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-base font-bold"> Je m'inscris </a>
                  </button>
            </div>
        </div>
<<<<<<< HEAD

        <div class="flex items-center justify-center lg:justify-start w-full lg:w-auto mb-8 lg:mb-0">
            <img class="h-44 w-48 " src="{{ Storage::url('images/logofooter.png') }}" alt="">
        </div>

=======
    
        <div class="flex items-center justify-center lg:justify-start w-full lg:w-auto mb-8 lg:mb-0">
            <img class="h-44 w-48 " src="{{ Storage::url('images/logofooter.png') }}" alt="">
        </div>
        
>>>>>>> main
        <div class="flex-1 flex flex-col text-white text-left my-8 max-w-sm mr-14">
            Chez Réparateur de Brèches, nous sommes dédiés à reconnecter les générations et à renforcer
            les liens sociaux avec nos aînés. Ensemble, construisons un avenir solidaire et bienveillant.
        </div>
<<<<<<< HEAD

=======
    
>>>>>>> main
        <div class="flex flex-row space-x-8 mt-8 lg:mt-0 mr-16" >
            <div class="mr-6">
            <div class="flex flex-col items-center lg:items-start">
                <div class="font-black text-white text-lg mb-4">Contact</div>
<<<<<<< HEAD

                <div class="flex items-center mb-2">
                    <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text-base text-white">12 Rue des Colibris,<br/>Quartier Paradis, 97232 Lamentin</div>
                </div>

=======
                
                <div class="flex items-center mb-2">
                    <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                        <i class="fa-solid fa-location-dot"></i>                   
                    </div>
                    <div class="text-base text-white">12 Rue des Colibris,<br/>Quartier Paradis, 97232 Lamentin</div>
                </div>
    
>>>>>>> main
                <div class="flex items-center mb-2">
                    <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="text-base text-white">0596 65 87 95</div>
                </div>
<<<<<<< HEAD

=======
                
>>>>>>> main
                <div class="flex items-center">
                    <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text-base text-white">reparateurs@de-breches.org</div>
                </div>
            </div>
            </div>
<<<<<<< HEAD

            <div class="flex flex-col items-center">
                <div class="font-bold text-white text-lg mb-4">Suivez-nous</div>
                <div class="flex space-x-2">
=======
        
            <div class="flex flex-col items-center">
                <div class="font-bold text-white text-lg mb-4">Suivez-nous</div> 
                <div class="flex space-x-2">   
>>>>>>> main
                    <a href="#" class="w-8 h-8 bg-white text-white bg-opacity-30 rounded-md flex items-center justify-center">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-8 h-8 bg-white text-white bg-opacity-30 rounded-md flex items-center justify-center">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
<<<<<<< HEAD

=======
        
>>>>>>> main
        <div class="absolute bottom-0 left-0 space-x-32 w-full text-center py-4 bg-bleu-fonce">
            <a href="#" class="text-sm text-white mx-2">Mentions légales</a>
            <a href="#" class="text-sm text-white mx-2">CGV</a>
            <a href="#" class="text-sm text-white mx-2">Confidentialités</a>
            <a href="#" class="text-sm text-white mx-2">Plan du site</a>
        </div>
    </footer>
<<<<<<< HEAD




</body>
</html>
=======
    
    
    

</body>
</html>
>>>>>>> main

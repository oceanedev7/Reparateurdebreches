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
    <div class="flex items-center justify-between	h-44">

        <div class="h-44 w-48 ml-12 py-6 z-10 ">
          <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]"
            src="{{ Storage::url('images/logonavbar.png') }}" alt="logo">
        </div>
    
        <!-- Dropdown -->
        
      
         
        <div class="relative ml-3 z-10 flex  items-center md:order-2 space-x-2 md:space-x-0 rtl:space-x-reverse">
          
        
         
          <div class=" hidden w-full" id="navbar-hamburger" style="margin-top:350px; margin-right:5px;">
            <ul class=" font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 p-3 space-y-1">
              <li>
                <a href="{{route('espaceadherent')}}"
                  class="block py-2 px-3 text-white bg-bleu-fonce rounded dark:bg-bleu-fonce" aria-current="page">Acceuil</a>
              </li>
              <li>
                <a href="#"
                  class="block py-2 px-3 text-bleu-fonce rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
                  les articles</a>
              </li>
              <li>
                <a href="{{route('event')}}"
                  class="block py-2 px-3 text-bleu-fonce rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
                  les évènements</a>
              </li>
              </li>
              <li>
                <a href=""
                  class="block py-2 px-3 text-bleu-fonce rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Paramètres</a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
    
                  <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                    {{ __('Deconnexion') }}
                  </x-dropdown-link>
                </form>
              </li>
            </ul>
          </div>
          <button data-collapse-toggle="navbar-hamburger" type="button"
            class="  inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-white rounded-lg  bg-bleu-fonce hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:text-white dark:hover:bg-bleu dark:focus:ring-bleu-clair"
            aria-controls="navbar-hamburger" aria-expanded="false" style="margin-right:15px;">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>
      </div>
    <main>
        <div class="flex items-center justify-center bg-bleu-fonce">
            <h1 class="font-bold text-6xl absolute text-white z-10">ESPACE ADHERENT</h1>
                <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/maison.png') }}" alt="">
        </div>

        <div class="flex flex-col ml-32 mr-32 text-justify p-24 space-y-10 text-bleu-fonce">
            <div class="text-5xl font-black ml-10 space-y-6">Bienvenue sur votre <br> espace adhérent...
            </div>
                <div class="ml-32">Nous sommes ravis de vous accueillir au sein de notre association dédiée aux personnes âgées. Votre adhésion marque le début d’une belle aventure au sein d’une communauté chaleureuse et bienveillante.
                    Notre mission est de vous offrir un espace de convivialité, de partage et de soutien où chacun peut s’épanouir. Grâce à une variété d’activités culturelles, sociales et de loisirs, nous espérons enrichir votre quotidien et créer des liens précieux entre nos membres.
                    Nous vous invitons à participer à nos prochaines rencontres et événements, qui sont des occasions idéales pour faire connaissance et s’intégrer pleinement à notre groupe.
                    Dans cet espace vous pourrez ajouter des articles et inscrire des personnes agées dans nos évènements.
                </div>
        </div>

        <div class="flex flex-row space-x-36 py-18 mb-20 max-w-full max-h-full justify-center">
            <div class="w-[320px] h-[240px] hover:bg-bleu-fonce bg-bleu-fonce rounded-lg relative"><a href="">
                <img class="h-60 w-80 object-cover absolute" src="{{ Storage::url('images/article.png') }}" alt="">
                <div class="font-bold w-full p-4 rounded-b-lg hover:bg-bleu-fonce text-3xl text-white bg-bleu-fonce pl-4 absolute bg-opacity-65 bottom-0">GERER LES <br> ARTICLES</div>
            </a></div>
            
            <div class="w-[320px] h-[240px] hover:bg-bleu-fonce bg-bleu-fonce rounded-lg relative"><a href="{{ route('event') }}">
                <img class="h-60 w-80 object-cover absolute" src="{{ Storage::url('images/anim.png') }}" alt="">
                <div class="font-bold w-full text-3xl p-4 rounded-b-lg text-white bg-bleu-fonce pl-4 hover:bg-bleu-fonce absolute bg-opacity-65 bottom-0">GERER LES EVENEMENTS</div>
            </a></div>
        
        </div>

    </main>  
    <footer class="bg-bleu-fonce w-full h-20 pt-6 mt-4 text-center text-white">
        &copy; Réparateurs de brèches 2024 | Tous droits réservés.
    </footer>
</body>
</html>
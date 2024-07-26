<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body>


    <div class="flex items-center justify-between	h-44">

        <div class="h-44 w-48 ml-12 py-6 z-10 ">
          <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]"
            src="{{ Storage::url('images/logonavbar.png') }}" alt="logo">
        </div>
    
        <!-- Dropdown -->
        
      
         
        <div class="relative ml-3 z-10 flex items-center md:order-2 space-x-2 md:space-x-0 rtl:space-x-reverse">
          
        
         
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
                d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
          </button>
        </div>
      </div>
    <main>
        <div class="flex items-center justify-center bg-bleu-fonce mb-6">
            <h1 class="font-bold text-6xl absolute text-white z-10">ESPACE ADHERENT</h1>
                <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/maison.png') }}" alt="">
        </div>

        <a href="{{route('event')}}" class="underline"><i class="fa-solid fa-arrow-left underline"></i> Retour à la page d'accueil </a>

        <h1 class="font-bold text-4xl text-bleu-fonce text-center py-10 mb-4">INSCRIRE UN(E) PARTICIPANT(E)</h1>

        <livewire:registration />

        {{-- <form method="POST" action="{{ route('formulaire') }}">
            @csrf
            <div class="max-w-sm mx-auto">
                <div class="flex flex-row space-x-10 justify-center mb-6">
                    <div class="">
                        <input type="text" id="nom" class="bg-bleu border-none text-black text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-black dark:text-white placeholder-bleu-fonce dark:focus:ring-blue-500" placeholder="Nom" name="nom" required />
                    </div>
                    <div class="">
                        <input type="text" id="prenom" class="bg-bleu text-black border-none text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-black dark:text-white placeholder-bleu-fonce dark:focus:ring-blue-500" placeholder="Prénom" name="prenom" required />
                    </div>
                </div>
                <div class="mb-6">
                    <input type="email" id="email" class="bg-bleu text-gray-900 border-none text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white placeholder-bleu-fonce dark:focus:ring-blue-500" placeholder="Adresse e-mail" name="email"/>
                </div>
                <div class="max-w-sm mx-auto">
                    <div class="">
                        <input type="text" id="numero_telephone" aria-describedby="helper-text-explanation" class="bg-bleu text-gray-900 text-sm rounded-lg p-2.5 focus:ring-blue-500 border-none block w-full dark:bg-gray-700 dark:placeholder-bleu-fonce placeholder-bleu-fonce dark:text-white dark:focus:ring-blue-500" placeholder="Numéro de téléphone" name="numero_telephone" required />
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white mt-6 mb-20 border-none bg-bleu-fonce hover:bg-bleu-fonce focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center mb-2 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 placeholder-bleu-fonce dark:focus:ring-blue-800 hover:opacity-80">AJOUTER</button>
                </div>
            </div>
        </form> --}}

    <div class="flex justify-center pb-20">
        <div class="bg-bleu-fonce w-[750px] text-center rounded-lg pt-4">
            <h2 class="text-white text-2xl font-bold pb-2">LISTE DES INSCRITS</h2>
            {{-- <hr class="border-t-2 border-white w-3/4 mx-auto"> --}}
            <div class="grid grid-cols-4 text-white font-bold justify-center pr-16 p-2">
                <span>Nom</span>
                <span>Prénom</span>
                <span>Email</span>
                <span>Numéro de téléphone</span>
            </div>
            <div class="border-t border-white w-3/4 mx-auto p-4"></div>
            {{-- @if (isset($inscrits) && count($inscrits)>0) --}}
            @foreach ($inscrits as $form)
            <div class="text-white grid grid-cols-4 justify-center pr-10 mb-2">
                <div class="">{{$form->$nom}}</div>
                <div>{{$form->$prenom}}</div> 
                <div>{{$form->$email}}</div>
                <div class="">{{$form->$numero_telephone}}<a href="{{ route('deleteinscrit', $form->id) }}"><i class="fa-solid pl-4 fa-trash"></i></a></div>
            </div>
         @endforeach
        {{-- @endif   --}}
        </div>
    </div>

</main>

    <footer class="bg-bleu-fonce w-full h-20 pt-6 mt-4 text-center text-white">
        &copy; Réparateurs de brèches 2024 | Tous droits réservés.
    </footer>

    @livewireScripts
</body>
</html>
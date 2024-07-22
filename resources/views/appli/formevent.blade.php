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
        <div class="contenair">
            <div class="flex justify-between items-center h-32">
                <div class="h-44 w-48 ml-12 py-6 z-10">
                    <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logonavbar.png') }}" alt="">
                </div>
                <div class="flex">
                </div>
    
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-bleu-fonce hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                {{-- <div>{{ Auth::user()->name }}</div> --}}
    
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profil') }}
                            </x-dropdown-link>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Se déconnecter') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
    
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
    
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    {{-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}
                </div>
    
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profil') }}
                    </x-responsive-nav-link>
    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Se déconnecter') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    <header class="">
            <div class="mt-5 flex lg:ml-4 lg:mt-0 mr-12">
              <!-- Dropdown -->
              <div class="relative ml-3 sm:hidden">
                <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400" id="mobile-menu-button" aria-expanded="false" aria-haspopup="true">
                    <i class="fa-solid fa-bars"></i>
                  <svg class="-mr-1 ml-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
        </div>
    </header>
    <main>
        <div class="flex items-center justify-center bg-bleu-fonce mb-6">
            <h1 class="font-bold text-6xl absolute text-white z-10">ESPACE ADHERENT</h1>
                <img class="h-96 w-full object-cover opacity-40" src="{{ Storage::url('images/maison.png') }}" alt="">
        </div>

        <h1 class="font-bold text-4xl text-bleu-fonce text-center py-10 mb-4">INSCRIRE UN(E) PARTICIPANT(E)</h1>

        
        <form method="POST" action="{{ route('formulaire') }}">
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
        </form>
    <div class="flex justify-center pb-20">
        <div class="bg-bleu-fonce h-40 w-[650px] text-center rounded-lg pt-4">
            <h2 class="text-white text-2xl font-bold pb-2">LISTE DES INSCRITS</h2>
            {{-- <hr class="border-t-2 border-white w-3/4 mx-auto"> --}}
            <div class="flex flex-row space-x-24 text-white font-bold justify-center">
                <span>Nom</span>
                <span>Prénom</span>
                <span>Email</span>
                <span>Numéro de téléphone</span>
            </div>
            <div class="border-t border-white w-3/4 mx-auto p-2"></div>
            @if (isset($inscrits) && count($inscrits)>0)
            @foreach ($inscrits as $form)
            <div class="text-white flex flex-row justify-center ">
                <ul class="">{{$form->nom}}</ul>
                <ul>{{$form->prenom}}</ul> 
                <ul>{{$form->email}}</ul> 
                <ul class="">{{$form->numero_telephone}}</ul>
            </div>  
        </div>
    </div>
    
    
    @endforeach
    @endif
</main>

    <footer class="bg-bleu-fonce w-full h-20 pt-6 mt-4 text-center text-white">
        &copy; Réparateurs de brèches 2024 | Tous droits réservés.
    </footer>
</body>
</html>
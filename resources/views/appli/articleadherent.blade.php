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
    <div class="flex items-center justify-between h-44">

        <div class="h-44 w-48 ml-12 py-6 z-10">
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
                <a href="{{route('articleadherent')}}"
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
    </main>

    <form enctype="multipart/form-data" class="max-w-sm mx-auto" method="post" action="{{route('newArticleadherent')}}">
        @csrf
        
        <div class="flex justify-center mb-9 pr-1 ">
             <input name="photo" class="block w-15 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file"  accept="image/*">
        </div>
            <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                <input name="titre" type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        
            <div class="mb-5">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></textarea>
            </div>
            <div class="flex justify-center mb-5 pr-1">
        
                <button  type="submit" class="  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
        
            </div>
        </form>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-5 justify-items-center">
@if (isset($articles)&& count($articles)>0)
@foreach ($articles as $article)
        <div>
            <h5 class="text-center text-2xl font-bold">{{$article->titre}}</h5>
            <img class="h-40  rounded-lg" src="{{ Storage::url($article->photo) }}" alt="">
            <div> {{$article->description}} </div>
            {{-- <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 mr-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">modifier</a> --}}
            <a href="{{route ('deleteArticleadherent', $article->id) }}" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-1 mr-1 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">supprimer</a>
        </div>
        </div>
@endforeach
@endif

<footer class="bg-bleu-fonce w-full h-20 pt-6 mt-4 text-center text-white">
         &copy; Réparateurs de brèches 2024 | Tous droits réservés.
</footer>
</body>
</html>
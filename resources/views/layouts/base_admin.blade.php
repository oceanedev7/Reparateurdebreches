<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a href="{{route('dashboard2')}}"
              class="block py-2 px-3 text-white bg-bleu-fonce rounded dark:bg-bleu-fonce" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Statistiques</a>
          </li>

          <li>
            <a href="{{route('dashboard_actualite')}}"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
              les actualités</a>
          </li>
          <li>
            <a href="{{route('dashboard_evenement')}}"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
              les évènements</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
              les newsletters</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
              les articles</a>
          </li>
          <li>
            <a href="{{route('dashboardValidationAdherent')}}"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Gérer
              les adhérents</a>
          </li>
          <li>
            <a href="{{route('contactmail')}}"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Demande
              de contact
            </a>
          </li>
          <li>
            <a href="{{route('dashboard_parametre')}}"
              class="block py-2 px-3 text-white rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Paramètres</a>
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
  <div class="flex items-center justify-center bg-bleu-fonce">
    <h1 class="font-bold text-6xl absolute text-black" style="font-size:100px;">ADMINISTRATEUR</h1>
    <img class=" w-full object-cover" style="height:250px; opacity:0.5;" src="{{ Storage::url('Images/pikaso_texttoimage_35mm-film-photography-Grouping-of-hardcover-books-.jpg') }}"
      alt="book">
  </div>

</body>

<main>
  @yield('content')
</main>

<footer class="bg-bleu-fonce w-full h-10 flex flex-wrap items-center  p-8 relative">


  <div class="absolute bottom-0 left-0  w-full text-center py-4 bg-bleu-fonce">
    <a href="#" class="text-lg text-white mx-2">Réparateur de brèches 2024</a>
    <a href="#" class="text-lg text-white mx-2">-</a>
    <a href="#" class="text-lg text-white mx-2">Tous droits réservés</a>

  </div>
</footer>




</body>

</html>

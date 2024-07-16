
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

    <header class="">

        <div class="flex items-center justify-between h-44" >

            <div class="h-44 w-48 ml-12 py-6 z-10 ">
                <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logonavbar.png') }}" alt="">
            </div>





            <div class="flex items-center md:order-2 space-x-4 md:space-x-0 rtl:space-x-reverse " >
          <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex  p-2 w-10 h-10  text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-hamburger" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
          </button>
          <div class="hidden w-25" id="navbar-hamburger" style="margin-top: 330px;">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
              <li>
                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Accueil</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Articles</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Evenement</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Newsletters</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Actualité</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Adhérents</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Statistique</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Déconnexion</a>
              </li>
            </ul>
          </div>

    </header>
    <div class="flex items-center justify-center bg-bleu-fonce ">
        <h1 class="font-bold text-xl absolute text-white" style="font-size: 80px;">ADMINISTRATEUR</h1>
        <img class=" w-full  opacity-30 object-cover" style="height:250px; opacity:0.4;" src="{{ Storage::url('Images/pikaso_texttoimage_35mm-film-photography-Grouping-of-hardcover-books-.jpg ') }}" alt="">

    </div>

    <main>
        @yield('content')

    </main>

    <footer class="bg-bleu-fonce w-full h-10 flex flex-wrap items-center justify-between p-8 relative">


        <div class="absolute bottom-0 left-0 w-full text-center py-4 bg-bleu-fonce">
            <a href="#" class="text-sm text-white mx-2">Réparateur de breches 2024</a>
            <a href="#" class="text-sm text-white mx-2">-</a>
            <a href="#" class="text-sm text-white mx-2">tous droits réservés</a>
        </div>
    </footer>




</body>
</html>

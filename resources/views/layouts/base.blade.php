<!DOCTYPE html>
<html lang="fr">

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

     <div class="flex items-center justify-between h-24">

        <div class="h-44 w-48 ml-12 mb-20 py-10 z-10 ">
            <img class="h-44 w-48 rounded shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)]" src="{{ Storage::url('images/logonavbar.png') }}" alt="">
        </div>

        <div class="flex flex-row items-center justify-center mb-12">

          <div class="flex flex-row space-x-8 mr-4">
        <a href="{{route ('accueil')}}" class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between"> ACCUEIL </a>
        <a  href="{{route ('all-articles')}}" class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between"> ARTICLES</a>
        <a href="{{route ('contact')}}" class="text-bleu-fonce font-black space-x-48 text-xl font-sans flex justify-between"> NOUS CONTACTER</a>
          </div>

            <div class="mt-5 flex lg:ml-4 lg:mt-0 mr-12">

          <span class="hidden sm:block">
            <a href="{{route ('login')}}" class="bg-bleu-fonce text-white py-2 ps-4 pe-4 rounded text-lg "><i class="fa-solid fa-user"></i> </a>
         </span>

          <button class="ml-3 hidden sm:block">
            <a href="{{route ('deveniradherent')}}" class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-lg font-bold"> DEVENIR ADHERENT</a>
          </button>

          <button class="sm:ml-3  hidden sm:block">
            <a href="" class="bg-bleu text-bleu-fonce py-2 px-4 text-center  rounded text-lg font-bold">FAIRE UN DON </a>
          </button>

            </div>
        </div>
      </div> 

    <header class="">
            <div class="relative items-center mb-10 flex flex-row">
         <img class="w-full object-cover h-4/5" src="{{ Storage::url('images/header-home.jpg') }}" alt="">
    </header>





        <main>
            @yield('content')
        </main>

        <footer class="bg-bleu-fonce w-full h-80 flex flex-wrap items-center justify-between p-8 relative">
            <div class="absolute top-[-2.5rem] left-1/2 transform -translate-x-1/2 z-10 text-center">
                <div class="bg-bleu-clair h-20 p-4 rounded-lg  flex items-center justify-center space-x-4">
                    <p class="text-base font-bold text-bleu-fonce">Inscrivez-vous et restez <br /> informé de nos
                        actualités !</p>
                    <form>
                        <input type="email" placeholder="Adresse email" class="p-2 rounded border-none " />
                        <button class="ml-3">
                            <a href=""
                                class="bg-bleu-fonce text-white py-2 px-4 text-center rounded text-base font-bold">
                                Je m'inscris </a>
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex items-center justify-center lg:justify-start w-full lg:w-auto mb-8 lg:mb-0">
                <img class="h-44 w-48 " src="{{ Storage::url('images/logofooter.png') }}" alt="">
            </div>

            <div class="flex-1 flex flex-col text-white text-left my-8 max-w-sm mr-14">
                Chez Réparateur de Brèches, nous sommes dédiés à reconnecter les générations et à renforcer
                les liens sociaux avec nos aînés. Ensemble, construisons un avenir solidaire et bienveillant.
            </div>

            <div class="flex flex-row space-x-8 mt-8 lg:mt-0 mr-16">
                <div class="mr-6">
                    <div class="flex flex-col items-center lg:items-start">
                        <div class="font-black text-white text-lg mb-4">Contact</div>

                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="text-base text-white">12 Rue des Colibris,<br />Quartier Paradis, 97232 Lamentin
                            </div>
                        </div>

                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="text-base text-white">0596 65 87 95</div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-8 h-8 text-white rounded-md flex items-center justify-center mr-2">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <div class="font-bold text-white text-lg mb-4">Suivez-nous</div>
                    <div class="flex space-x-2">
                        <a href="https://www.facebook.com"
                            class="w-8 h-8 bg-white text-white bg-opacity-30 rounded-md flex items-center justify-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com"
                            class="w-8 h-8 bg-white text-white bg-opacity-30 rounded-md flex items-center justify-center">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 space-x-32 w-full text-center py-4 bg-bleu-fonce">
                <a href="{{ route('mentionslegales') }}" class="text-sm text-white mx-2">Mentions légales</a>
                <a href="{{ route('cgv') }}" class="text-sm text-white mx-2">CGV</a>
                <a href="{{ route('confidentialites') }}" class="text-sm text-white mx-2">Confidentialités</a>
            </div>
        </footer>




</body>

</html>
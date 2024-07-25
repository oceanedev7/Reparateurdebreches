@extends('layouts.base_admin')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-5xl mx-auto my-14">
    <div class="flex flex-col justify-between items-end">
        <h2 class="font-bold text-6xl  text-bleu-fonce my-14 " style="font-size:80px; width:1020px;">
            Bienvenue
            sur votre
            espace
            administrateur ...</h2>
        <p class="text-justify  text-bleu-fonce my-14" style="font-size:20px; width:700px;">Lorem, ipsum dolor sit
            amet
            consectetur
            adipisicing elit. Esse iure
            molestiae dicta dolor distinctio odio
            omnis accusamus corporis incidunt reprehenderit, eum cum, vel neque aperiam laborum unde laboriosam minima
            molestias. Blanditiis, distinctio adipisci odit suscipit repellendus, voluptate fuga ipsa voluptatibus
            accusamus laudantium modi. Ad neque possimus voluptates voluptas dignissimos, suscipit reiciendis velit id.
            Nisi cumque vitae cupiditate nobis, maiores fugit? Nisi alias neque dolorum sed temporibus corporis
            explicabo ea veritatis corrupti delectus, ad accusantium beatae reiciendis repudiandae quo consectetur
            doloribus natus modi, tempore amet sint dolore, provident cupiditate! Provident sapiente mollitia voluptate
            assumenda eum, iure quas possimus illum saepe et illo eos impedit ut quasi perspiciatis unde deserunt neque
            magnam odio voluptatem sunt, nesciunt, culpa eveniet error.
        </p>
    </div>
    <div class="flex   items-center justify-between flex-wrap">
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="#">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        ACCEDER AUX STATISTIQUES</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('dashboard_actualite')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        GERER LES ACTUALITES</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('dashboard_evenement')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        GERER LES EVENEMENTS</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('dashboard_newsletter')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        GERER LES NEWSLETTERS</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('dashboard_article')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        GERER LES ARTICLES</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('dashboardValidationAdherent')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        GERER LES ADHERENTS</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('contactmail')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        DEMANDE DE CONTACT</h5>
                </div>
            </a>
        </div>
        <div
            class="my-14 max-w-md bg-white border border-bleu-fonce rounded-lg shadow-xl hover:bg-bleu focus:outline-none focus:ring-2 focus:ring-bleu-fonce dark:hover:bg-bleu dark:focus:ring-bleu-clair hover:scale-105">
            <a href="{{route('dashboard_parametre')}}">
                <img class="rounded-t-lg w-full object-cover" style="height:200px;"
                    src="{{ Storage::url('images/quisommesnous.png') }}" alt="reunion" />

                <div class="p-5 bg-bleu-fonce">

                    <h5 class="mb-2 text-5xl font-bold tracking-tight text-gray-900 dark:text-white">
                        PARAMETRES DU COMPTE</h5>
                </div>
            </a>
        </div>
    </div>

</div>


@endsection
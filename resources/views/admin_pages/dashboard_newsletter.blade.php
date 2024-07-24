@extends('layouts.base_admin')

@section('content')
    <div class="p-5 text-center ">
         <h5 class="mb-2   text-6xl font-bold tracking-wide " style="font-size: 35px; color:#2563EB" >INSCRIRE A LA NEWSLETTERS</h5>
    </div>

    <div class="relative flex justify-center space-x-10 ">
        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-25 text-sm  text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="@ Email" />
        <input type="text" id="floating_outlined" class="block px-3.5 pb-2.5 pt-4 w-25 text-sm  text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Date d'inscription" />
    </div>

    <div class="p-5 text-center ">
        <h5 class="mb-2   text-6xl font-bold tracking-wide " style="font-size: 30px; color:#2563EB" >ENVOYER UNE NEWSLETTER</h5>
    </div>

    <div class="flex justify-center mb-9 pr-1 ">
        <input class="block w-80 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
   </div>

    <div class="mb-6 relative flex justify-center">
        <input class="block mb-2 text-sm font-medium w-80  text-gray-900 dark:text-white rounded-lg border-1 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Titre"/>
    </div>
    <div class="mb-6 relative flex justify-center">
        <textarea id="message" rows="4" class="block p-2.5 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></textarea>
    </div>
    <div class="flex justify-center mb-1 pr-1 ">
        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Envoyer
        </button>

    </div>
@endsection





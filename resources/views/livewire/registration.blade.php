<div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:pt-0">
            <h1 class="text-3xl font-semibold">Registration Form</h1>
        </div>
    
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-4">
                <div class="col-start-2 col-span-2 p-6">
                    <form wire:submit.prevent="submit" method="POST">
    
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="firstName" class="block text-sm font-medium text-gray-700">First name</label>
                                    <input type="text" wire:model="nom" id="firstName" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('firstName') <span ...>{{ $message }}</span> @enderror
                                </div>
    
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                    <input type="text" wire:model="prenom" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('lastName') <span ...>{{ $message }}</span> @enderror
                                </div>
    
                                <div class="col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                    <input type="text" wire:model="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Numero de telephone</label>
                                    <input type="text" wire:model="numero_telephone" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                            </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Submit
                                </button>
                            </div>
                        </div>
    
                    </form>
    
                </div>
    
            </div>
        </div>
    
    </div>
</div>

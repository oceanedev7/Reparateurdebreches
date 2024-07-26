<div>
    <form wire:submit method="POST" action="{{ route('formulaire') }}">
        @csrf
        <div class="max-w-sm mx-auto">
            <div class="flex flex-row space-x-10 justify-center mb-6">
                <div class="">
                    <input type="text" id="nom" class="bg-bleu border-none text-black text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-black dark:text-white placeholder-bleu-fonce dark:focus:ring-blue-500" placeholder="Nom" wire:model="nom" required />
                </div>
                <div class="">
                    <input type="text" id="prenom" class="bg-bleu text-black border-none text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-black dark:text-white placeholder-bleu-fonce dark:focus:ring-blue-500" placeholder="Prénom" wire:model="prenom" required />
                </div>
            </div>
            <div class="mb-6">
                <input type="email" id="email" class="bg-bleu text-gray-900 border-none text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white placeholder-bleu-fonce dark:focus:ring-blue-500" placeholder="Adresse e-mail" wire:model="email"/>
            </div>
            <div class="max-w-sm mx-auto">
                <div class="">
                    <input type="text" id="numero_telephone" aria-describedby="helper-text-explanation" class="bg-bleu text-gray-900 text-sm rounded-lg p-2.5 focus:ring-blue-500 border-none block w-full dark:bg-gray-700 dark:placeholder-bleu-fonce placeholder-bleu-fonce dark:text-white dark:focus:ring-blue-500" placeholder="Numéro de téléphone" wire:model="numero_telephone" required />
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white mt-6 mb-20 border-none bg-bleu-fonce hover:bg-bleu-fonce focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center mb-2 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 placeholder-bleu-fonce dark:focus:ring-blue-800 hover:opacity-80">AJOUTER</button>
            </div>
        </div>
    </form>
</div>

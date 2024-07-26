<?php

namespace App\Livewire;

use Livewire\Component;

class Registration extends Component
{

    public $nom;

    public $prenom;

    public $email;

    public $numero_telephone;
    public $validatedData;

    protected $rules = [
        'nom' => 'required|max:20',
        'prenom' => 'required|max:20',
        'email' => 'required|email',
        'numero_telephone' => 'required|max:100',
    ];

    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }

    public function submit() {

        $validatedData = $this->validate();
        dd( $validatedData );
    }

    public function render()
    {
        return view('livewire.registration', ['inscrits'=>$validatedData]);
    }
}

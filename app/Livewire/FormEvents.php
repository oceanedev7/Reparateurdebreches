<?php

namespace App\Livewire;

use App\Models\formevents as ModelsFormevents;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;


class FormEvents extends Component
{
   
        #[Validate('required|string')]
        public $nom = '';

        #[Validate('required|string')]
        public $prenom = '';

        #[Validate('required|string')]
        public $email = '';

        #[Validate('required|string')]
        public $numero_telephone = '';

        
        public function store() 
        {
            $this->validate();
     
            formevents::create($this->all());
        }
    

        public function save()
        {
            $this->form->store(); 
     
            return $this->view('livewire.form-events');
        }

    public function render()
    {
        return view('livewire.form-events');
    }
}

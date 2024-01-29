<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;
    use WithPagination;

    public function render()
    {
        
        $contacts = Contact::paginate(5);

        return view('contacts.contacts', compact('contacts'));
    }
}

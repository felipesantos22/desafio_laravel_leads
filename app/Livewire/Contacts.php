<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $phone;
    public $contactId;
    public $showUpdateModal = false;

    public function render()
    {

        $contacts = Contact::paginate(5);

        return view('contacts.contacts', compact('contacts'));
    }

    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        $this->render();
    }

    public function openUpdateModal($id)
    {
        $this->contactId = $id;
        $contact = Contact::findOrFail($id);
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->showUpdateModal = true;
    }

    public function closeUpdateModal()
    {
        $this->showUpdateModal = false;
    }

    public function updateContact()
    {
        $id = $this->contactId; 
    
        $contact = Contact::findOrFail($id);
    
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contact,email,' . $id,
            'phone' => 'required|string|max:20',
        ]);
    
        $contact->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
    
        $this->closeUpdateModal(); 
        $this->render();
    }
}

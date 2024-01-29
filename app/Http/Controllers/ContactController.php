<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $contacts = $this->contact->all();
        return $contacts;
    }
 

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:contact',
                'phone' => 'required|unique:contact',
                'city' => 'required',
                'message' => 'required',
            ]);

            $contact = $this->contact->create($validated);
            return $contact;

        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function show($id)
    {
        $contact = $this->contact->find($id);
        if ($contact === null) {
            return response()->json(['message' => 'Contact not found.'], 404);
        }
        return $contact;
    }

    public function update($id, Request $request)
    {
        $contact = $this->contact->find($id);
        if ($contact === null) {
            return response()->json(['message' => 'Contact not found.'], 404);
        }

        try {
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|unique:contact',
                'phone' => 'required',
                'city' => 'required',
                'message' => 'required',
            ]);
            $contact->update($validated);
            return response()->json(['message' => 'Contact updated.']);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function destroy($id)
    {
        $contact = $this->contact->find($id);
        if ($contact === null) {
            return response()->json(['message' => 'Contact not found.'], 404);
        }
        $contact->delete($id);
        return response()->json(['message' => 'Contact deleted.']);
    }

    //Route Web
    public function storeWeb(Request $request)
    {
        $contact = $this->contact::create($request->all());
        return redirect('/');
    }

    //Route Web
    public function indexWeb()
    {
        $contact = $this->contact->all();
        return view("contact", compact("contact"));
    }

      //Route Web
    //   public function create()
    //   {
    //       return view('welcome');
    //   }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
            'phone_number' => 'required|string',
            'message' => 'nullable|string',
        ]);

        $contact = Contact::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'company' => $validated['company'],
            'phone_number' => $validated['phone_number'],
            'message' => $validated['message'] ?? null,
        ]);

        return back()->with('status', 'Contact submitted successfully!');
    }

    public function destroy($id)
    {
        $contact = \App\Models\Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin')->with('success', 'Contact deleted successfully!');
    }

    public function show($id)
    {
        $contact = \App\Models\Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }
}

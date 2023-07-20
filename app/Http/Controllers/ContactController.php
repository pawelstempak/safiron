<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PostRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        $contact = Contact::find(1);

        return view('contactform', [
            'siedziba' => $contact->siedziba,
            'telefon' => $contact->telefon,
            'email' => $contact->email,
        ]);
    }
    public function store()
    {
        
    }
    public function send(PostRequest $request):RedirectResponse
    {
        $validated = $request->validated();

        Mail::to(env('MAIL_CONTACT_FORM_EMAIL_ADDRESS'))->send(new ContactForm($validated['name'], $validated['email'], $validated['phone'], $validated['content']));

        return redirect('/contact');
    }
}

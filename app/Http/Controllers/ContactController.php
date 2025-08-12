<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Contact;

class ContactController extends Controller
{

    public function submit(Request $request)
{
    // Règles de validation


    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'message' => 'required|string',
    ]);

    // Traitement des données (ex: envoi d'email ou sauvegarde en DB)
    // Mail::to('contact@exemple.com')->send(new ContactMail($validatedData));

    // Enregistrement dans la base de données
    Contact::create($validatedData);

    // Envoi de l'email
    Mail::to('doumbehenrylarousse@gmail.com')->send(new ContactMail($validatedData));
    // Redirection avec un message de succès
    return back()->with('success', 'Message envoyé avec succès!');


}
}

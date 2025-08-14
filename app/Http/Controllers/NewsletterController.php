<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validation
        $request->validate([
            'newsletter' => 'required|newsletter|unique:newsletters,email'
        ]);

        // Sauvegarde dans la base
        $subscriber = Newsletter::create([
            'email' => $request->email
        ]);

        // Envoi email de bienvenue
        Mail::to($subscriber->email)->send(new NewsletterMail());

        // Envoie l'email a l'utilisateur
        Mail::to('doumbehenrylarousse@gmail.com')->send(new NewsletterMail());

        return back()->with('success', 'Merci pour votre abonnement à notre newsletter !');
    }
}

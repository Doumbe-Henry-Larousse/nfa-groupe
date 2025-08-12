<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;
use App\Mail\DevisMail;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{


public function show()
{
    return view('pages.devis'); // ou un autre nom de vue si besoin
}


public function submit(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string|max:20',
        'type_service' => 'required|string',
        'date' => 'required|date',
        'heure' => 'required|date_format:H:i',
        'paiement' => 'required|string|max:255',
        'detail' => 'required|string|max:255',
    ]);

    // Enregistrement dans la base de données
    //Devis::create($request->all());

    // Envoi d’email
    Mail::to('doumbehenrylarousse@gmail.com')->send(new DevisMail($validatedData));

    
    // Redirection avec un message de succès
    //return response()->json(['success' => 'Demande de devis envoyée avec succès.']);
    return back()->with(['success' => 'Demande de devis envoyée avec succès.']);
}

}

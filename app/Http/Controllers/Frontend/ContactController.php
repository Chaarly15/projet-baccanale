<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Afficher le formulaire de contact
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * Traiter l'envoi du formulaire de contact
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'subject.required' => 'Le sujet est obligatoire.',
            'message.required' => 'Le message est obligatoire.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.',
        ]);

        // Sauvegarder le contact en base de données
        Contact::create($validated);

        // Optionnel : Envoyer un email de notification
        // Mail::to('contact@baccanale-ci.com')->send(new ContactMail($validated));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
    }

    /**
     * Afficher la page de demande de devis
     */
    public function devis()
    {
        return view('frontend.contact.devis');
    }

    /**
     * Traiter la demande de devis
     */
    public function storeDevis(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'project_type' => 'required|string|max:255',
            'surface' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:2000',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'project_type.required' => 'Le type de projet est obligatoire.',
            'description.required' => 'La description du projet est obligatoire.',
        ]);

        // Sauvegarder la demande de devis
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => 'Demande de devis - ' . $validated['project_type'],
            'message' => "Téléphone: " . ($validated['phone'] ?? 'Non renseigné') . "\n" .
                        "Entreprise: " . ($validated['company'] ?? 'Non renseignée') . "\n" .
                        "Type de projet: " . $validated['project_type'] . "\n" .
                        "Surface: " . ($validated['surface'] ?? 'Non renseignée') . " m²\n\n" .
                        "Description:\n" . $validated['description']
        ]);

        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès. Nous vous contacterons rapidement.');
    }
}

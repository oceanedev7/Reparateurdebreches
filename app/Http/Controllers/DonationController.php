<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Stripe\Stripe;
use Stripe\Charge;

class DonationController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'payment_method' => 'required',
            'stripeToken' => 'required',
        ]);
        if ($request->payment_method == 'CB') {
        Stripe::setApiKey(env('STRIPE_SECRET'));


            $charge = Charge::create([
                'amount' => $request->input('amount') * 100, // montant en cents
                'currency' => 'eur',
                'description' => 'Donation from' . $request->email,
                'source' => $request->stripeToken,
                'receipt_email' => $request->input('email'),
            ]);

        } else if ($request->payment_method == 'PayPal') {
            // Traiter le paiement PayPal
        }
// Enregistrez la donation dans la base de données
            $donation = new Donation();
            $donation->name = $request->name;
            $donation->email = $request->email;
            $donation->amount = $request->amount;
            $donation->user_id = Auth::id();  // Relier la donation à l'utilisateur connecté
            $donation->save();


            return redirect()->route('donation.form')->with('success', 'Merci pour votre don!');// Rediriger vers la page de confirmation ou afficher un message de succès

            return back()->withErrors(['message' => 'Erreur lors du traitement du paiement: ' . $e->getMessage()]);
        }
    }


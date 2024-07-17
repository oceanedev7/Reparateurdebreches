<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class DonationController extends Controller
{
    public function showForm()
    {
        return view('donations.form');
    }

    public function processDonation(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'name' => 'required|string',
            'email' => 'required|email',
            'payment_method' => 'required',
        ]);

        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            Charge::create([
                'amount' => $request->input('amount') * 100, // montant en cents
                'currency' => 'eur',
                'description' => 'Donation',
                'source' => $request->input('payment_method'),
                'receipt_email' => $request->input('email'),
            ]);

            return redirect()->route('donation.form')->with('success', 'Merci pour votre don!');
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Erreur lors du traitement du paiement: ' . $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Stripe\Stripe;
use Stripe\Charge;

class DonationController extends Controller
{
    public function create()
    {
        return view('donations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'payment_method' => 'required',
            'stripeToken' => 'required',
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $charge = Charge::create([
                'amount' => $request->input('amount') * 100, // montant en cents
                'currency' => 'eur',
                'description' => 'Donation from' . $request->email,
                'source' => $request->stripeToken,
                'receipt_email' => $request->input('email'),
            ]);

            $donation = new Donation();
            $donation->name = $request->name;
            $donation->email = $request->email;
            $donation->amount = $request->amount;
            $donation->stripe_payment_id = $charge->id;
            $donation->save();

            return redirect()->route('donation.form')->with('success', 'Merci pour votre don!');
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Erreur lors du traitement du paiement: ' . $e->getMessage()]);
        }
    }
}

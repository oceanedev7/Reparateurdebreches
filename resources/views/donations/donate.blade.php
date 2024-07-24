@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Faire un don</h1>
    <p>Phasellus eu orci nec mi pellentesque sollicitudin non non leo...</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('donate.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <h2>Mon don</h2>
                <div>
                    <input type="radio" id="amount10" name="amount" value="10">
                    <label for="amount10">10€</label>
                </div>
                <div>
                    <input type="radio" id="amount20" name="amount" value="20">
                    <label for="amount20">20€</label>
                </div>
                <div>
                    <input type="radio" id="amount50" name="amount" value="50">
                    <label for="amount50">50€</label>
                </div>
                <div>
                    <input type="radio" id="amount100" name="amount" value="100">
                    <label for="amount100">100€</label>
                </div>
                <div>
                    <input type="text" id="amountOther" name="amount" placeholder="Montant libre">
                </div>
            </div>
            <div class="col-md-4">
                <h2>Mes coordonnées</h2>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="col-md-4">
                <h2>Mon règlement</h2>
                <div class="form-group">
                    <input type="radio" id="paymentCB" name="payment_method" value="CB" required>
                    <label for="paymentCB">Carte bancaire</label>
                </div>
                <div class="form-group">
                    <input type="radio" id="paymentPaypal" name="payment_method" value="PayPal" required>
                    <label for="paymentPaypal">PayPal</label>
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Stripe.js integration code here
</script>

@endsection

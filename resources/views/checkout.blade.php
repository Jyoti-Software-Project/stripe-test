<!DOCTYPE html>
<html>
<head>
    <title>Stripe Checkout</title>
</head>
<body>
    <h1>Buy Product (₹50)</h1>
    <form action="{{ route('checkout.session') }}" method="POST">
        @csrf
        <button type="submit">Pay with Stripe</button>
    </form>
</body>
</html>

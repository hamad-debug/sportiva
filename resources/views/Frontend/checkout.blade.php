<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>

<h2>Checkout</h2>

<form action="{{ url('/checkout') }}" method="POST">
    @csrf

    <input type="text" name="customer_name" placeholder="Name" required><br><br>

    <input type="text" name="phone" placeholder="Phone" required><br><br>

    <textarea name="address" placeholder="Address" required></textarea><br><br>

    <button type="submit">Place Order</button>

</form>

</body>
</html>
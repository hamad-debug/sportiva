<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
</head>
<body>

<h2>Your Shopping Cart</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

@if(empty($cart))
    <p>Your cart is empty.</p>
    <a href="{{ url('/') }}">Continue Shopping</a>
@else

<form action="{{ url('/cart/update') }}" method="POST">
    @csrf

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>

        @php $total = 0; @endphp

        @foreach($cart as $id => $item)

            @php
                $subtotal = $item['price'] * $item['quantity'];
                $total += $subtotal;
            @endphp

            <tr>
                <td>
                    @if(!empty($item['image']))
                        <img src="{{ asset('uploads/'.$item['image']) }}" width="60">
                    @endif
                </td>

                <td>{{ $item['name'] }}</td>

                <td>{{ $item['price'] }}</td>

                <td>
                    <input type="number" name="quantity[{{ $id }}]" value="{{ $item['quantity'] }}" min="1">
                </td>

                <td>{{ $subtotal }}</td>

                <td>
                    <a href="{{ url('/cart/remove/'.$id) }}" style="color:red;">Remove</a>
                </td>
            </tr>

        @endforeach

        <tr>
            <td colspan="4"><strong>Total</strong></td>
            <td colspan="2"><strong>{{ $total }}</strong></td>
        </tr>

    </table>

    <br>

    <button type="submit">Update Cart</button>
</form>

<br>
<a href="{{ url('/') }}">← Continue Shopping</a>

@endif

</body>
</html>
</body>
</html>
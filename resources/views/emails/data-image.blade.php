<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Test</title>
</head>
<body>
    <img style="width:50px; height:50px;" src="{{ $message->embed(public_path('images/logo.png')) }}" alt="Invoice Logo">
    <h1>Thank you for your order</h1>
    <p>Order Id:{{ $orderid }}</p>
    <p>Order Total:{{ $ordertotal }}</p>
    <p>Thank You</p>
</body>
</html>
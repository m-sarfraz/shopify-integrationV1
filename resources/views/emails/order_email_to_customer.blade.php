<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    <ul style="list-style:none;">
        <li>Hi, {{ $data->customer->first_name." ".$data->customer->last_name }} your order has been submitted successfully</li>
        <li>Order Number:#{{$data->order_number}}</li>
        <li>Order Amount: ${{$data->total}}</li>
        <li>If you have query about order please contact at info@oneoncraft.com</li>
        <li>Thanks</li>
    </ul>
</body>
</html>
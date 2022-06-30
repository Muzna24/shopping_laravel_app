<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Orders</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

</head>
<body>
<div class="container">
<div class="row pt-5">
    <h3 align="center">Orders </h3>
    <div class="row pt-5">
<table border="2">
    <tr>
        <td> Order ID</td>
        <td>customer Name</td>
        <td>customer Email</td>
        <td>customer Address</td>
        <td>customer Phone</td>
        <td>Order status</td>   
    </tr>
 
    @foreach($orders as $order)
    <tr>
        <td>
            {{ $order->id }}
        </td>
        <td>
            {{ $order->customer_name }}
        </td>
        <td>
            {{ $order->customer_email }}
        </td>
        <td>
            {{ $order->customer_address }}
        </td>
        <td>
            {{ $order->customer_phone }}
        </td>
        <td>
<!--<select name="order_status" id="order_status">
    <option value=" in_progress">{{ $order->status }}</option>
    <option value="ready">Ready</option>
    <option value="completed">Completed</option>
  </select>
-->        
            {{ $order->status }}
        </td>
        <td>
            <a href="/order-edit/{{ $order->id }}" class="btn btn-primary">Edit</a>
        </td>
        </tr>   
    @endforeach
      
</table>  
</div>

</div></div>
 @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    
</body>
</html>
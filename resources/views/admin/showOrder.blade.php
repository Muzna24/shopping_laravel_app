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
<h3 >Orders </h3>

    <div class="row pt-5">
    <table border ="1" width="200"  cellpadding="10"   >

    <tr>
        <td> Order ID</td>
        <td>customer Details</td>
        <td>Products</td>
        <td>Order status</td>   
    </tr>
 
    @foreach($orders as $order)
    <tr>
        <td>
        <input type="text" class="form-control" id="order_id"  name="order_id" value="{{ $order->id}}"> 
        </td>
        <td>
    <ul><li>
Name:
                <input type="text" class="form-control" id="name"  name="name" value="{{ $order->customer_name }}">
</li><li> Email:   
                <input type="text" class="form-control" id="email"  name="email" value="{{ $order->customer_email  }}">
</li><li>   Address:
                <input type="text" class="form-control" id="address"  name="address" value="{{ $order->customer_address  }}">
</li><li>  Phone:
                <input type="text" class="form-control" id="phone"  name="phone" value="{{ $order->customer_phone  }}">
</li></ul>
            </td>
            @foreach($products as $product)

@if($order->product_id === $product->id)

<td>               
<img src="{{asset('images')}}/{{$product->image}}" style="width: 3rem; alt="...">

{{$product->name}}  </td>

@endif

@endforeach
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
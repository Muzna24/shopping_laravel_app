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
    

        <div>Name : {{Auth::user()->name}}</div> 
      

<table border="2">
    <tr>
        <td> Order ID</td>
        <td>Order Status</td>
        <td>Product Name</td>
        <td>customer Address</td>
        <td>customer Phone</td>
        <td>Date of Order</td>

    </tr>
   
    @foreach($users as $user)
    
        
    @foreach($user->orders as $order)
    <tr>
     @if (Auth::user()->id === $order->user_id)
    <td>{{$order->id}}</td>
    <td>{{$order->status}}</td>
    @foreach($products as $product)

    @if($order->product_id === $product->id)

    <td>               
<img src="{{asset('images')}}/{{$product->image}}" style="width: 3rem; alt="...">

 {{$product->name}}  </td>

    @endif

    @endforeach
    <td>{{$order->customer_address	}}</td>

    <td>{{$order->customer_phone}}</td>
    <td>{{$order->created_at}}</td>




    
@endif   
                
          

            @endforeach
            @endforeach

</tr>   
</table>  
</div>

</div></div>
 @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    
</body>
</html>
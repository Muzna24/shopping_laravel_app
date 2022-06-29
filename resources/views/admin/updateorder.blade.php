<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>update Order</title>

<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

<link rel="stylesheet" href="{{ asset('css/templatemo-hexashop.css') }}">

<link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
</head>
<body>
<table border ="2">
          
<form method="post" action="" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
    <tr>
        <td> Order ID</td>
        <td>customer Name</td>
        <td>customer Email</td>
        <td>customer Addrss</td>
        <td>customer Phone</td>
        <td>Order status</td>   
    </tr>
    <tr> 
        @foreach($orders as $order)
            <td>
                <input type="text" class="form-control" id="order_id"  name="order_id" value="{{ $order->id}}"> 
            </td>
            <td>
                <input type="text" class="form-control" id="name"  name="name" value="{{ $order->customer_name }}">
            </td>
           
            <td>
                <input type="text" class="form-control" id="email"  name="email" value="{{ $order->customer_email  }}">
            </td>
            <td>
                <input type="text" class="form-control" id="address"  name="address" value="{{ $order->customer_address  }}">
            </td>
            <td>
                <input type="text" class="form-control" id="phone"  name="phone" value="{{ $order->customer_phone  }}">
            </td>
       
            <td>
            <select name="ostatus" id="ostatus" >
                <option value="In progress">In progress</option>
                <option value="ready">Ready</option>
                <option value="completed">completed</option>
            
            </select>
            </td>  
      
            <td >
            <button type="submit" class="btn btn-primary">Update Order Status</button>
            </td>
        @endforeach
    </tr>

    </form>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</table>
</body>
</html>
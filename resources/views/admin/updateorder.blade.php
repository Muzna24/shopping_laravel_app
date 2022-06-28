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
        <td>customer ID</td>
        <td>Product ID</td>
        <td>Order status</td>   
</tr>
        <tr>
           
                <td>
                    

                <input type="hidden" class="form-control" id="product_name"  name="name" value="{{ $order->id}}">
                {{$order->id}}
           
            </td>
       
            <td>
                <label for="name" class="form-label">Customer ID</label>
            </td>
            <td>
                <input type="hidden" class="form-control" id="cid"  name="cid" value="{{ $order->customer_id }}">
                {{ $order->customer_id }}
            </td>
           
            <td>
                <input type="hidden" class="form-control" id="qantity"  name="pid" value="{{ $order->product_id }}">
                {{ $order->product_id }}
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
        </tr>

    </form>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</table>
</body>
</html>
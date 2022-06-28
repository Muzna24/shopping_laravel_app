<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>update product</title>

    <!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

<link rel="stylesheet" href="{{ asset('css/templatemo-hexashop.css') }}">

<link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
        <tr>
            <td>
                <label for="name" class="form-label">Product Name</label></td><td>
                <input type="text" class="form-control" id="product_name"  name="name" value="{{ $product->name }}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="name" class="form-label">Price</label>
            </td>
            <td>
                <input type="text" class="form-control" id="price"  name="price" value="{{ $product->price }}">OMR
            </td>
            <td>
                <label for="qantinty" class="form-label">Qantity</label>
            </td>
            <td>
                <input type="number" class="form-control" id="qantity"  name="count" value="{{ $product->count }}">
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
            <select name="category" id="category" >
                <option value="{{ $product->category }}">Men</option>
                <option value="{{ $product->category }}">Womans</option>
                <option value="{{ $product->category }}">Kids</option>
            
            </select>
            </td>  
        </tr>
        <tr>
            <td>
            <label for="name" class="form-label">Description</label>
            </td>
            <td>
                <textarea id="description" name="description" rows="4" cols="50">{{ $product->description }} </textarea> 
            </td>
        </tr>
        <tr>
            <td>
                <label for="formFile" class="form-label">Product Image</label>
            </td>
                <td><input class="form-control" type="file" id="formFile" name="image" value="{{ $product->image }}">
            </td>
        </tr>
        <tr >
            <td colspan='2' align='center'>
            <button type="submit" class="btn btn-primary">Update product</button>
            </td>
        </tr>
    <table>
    </form>

    

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/accordions.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('js/slick.js') }}"></script> 
    <script src="{{ asset('js/lightbox.js') }}"></script> 
    <script src="{{ asset('js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
</body>
</html>
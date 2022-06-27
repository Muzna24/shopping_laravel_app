<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">




<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

<link rel="stylesheet" href="{{ asset('css/templatemo-hexashop.css') }}">

<link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    
</head>
<body>
  <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>
    {{$error}}
</li>
    @endforeach
</ul>
</div>
    <form method="post" action="/add-product/add" enctype="multipart/form-data">
    @csrf
    <table>
      <tr>
        <td>
    <label for="name" class="form-label">Product Name</label></td><td>
    <input type="text" class="form-control" id="product_name"  name="product_name"></td>
    
</tr>
  <tr>
    <td>
    <label for="name" class="form-label">Price</label>
</td><td>
    <input type="text" class="form-control" id="price"  name="price">OMR
</td>
  <td><label for="qantinty" class="form-label">Qantity</label>
</td><td> <input type="number" class="form-control" id="qantity"  name="qantity">
</td></tr>
<tr>
  <td>Category</td>
  <td>
  <select name="category" id="category">
    <option value="mans">Mans</option>
    <option value="Womans">Womans</option>
    <option value="Kids">Kids</option>
  
  </select>
</td>  
</tr>
<tr><td>
    <label for="name" class="form-label">Description</label>
</td><td><textarea id="description" name="description" rows="4" cols="50"> </textarea> 
</td></tr>
  <tr><td>
  <label for="formFile" class="form-label">Product Image</label>
</td><td><input class="form-control" type="file" id="formFile" name="product_Image">
</td></tr>
<tr >
  <td colspan='2' align='center'>
  <button type="submit" class="btn btn-primary">Add product</button>
</td>
</tr>
<table>
 </form>
 @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>
</html>
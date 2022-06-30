<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
</head>
<body>
    <div class="container">
        <ul class="navbar-nav ml-auto">
           
                <li class="nav-item">
                    <a id="navbarDropdown" class="nav-link" href="{{ url('/home') }}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                        Home
                    </a>
                </li>
        </ul>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card card-head">
                <h4 class="text-center">Import & Export orders</h4>
            </div>
            <div class="card card-body">
                <div class="row">
                    <div class="col-4"><h6>Imort order</h6></div>
                    <div class="col-4"><a href="order" class="btn btn-primary">Export</a></div>
                </div>
                <div class="row">
                    <hr>
                </div>
                <div class="row">
                    <div class="col-4"><h6>Imort order</h6></div>
                    <div class="col-3">
                        <form action="/issue/import" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="excelFile" id="excelFile">
                            <input class="btn btn-primary" type="submit" value="Import">
                            </form>
                    </div>
                </div>
                
            @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
            </div>
        </div>
    </div>


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
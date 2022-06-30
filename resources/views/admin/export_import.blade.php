<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card card-body">
            <form action="/issue/import" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="excelFile" id="excelFile">
            <input type="submit" value="Submit">
            </form>
            @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
            </div>
        </div>
    </div>
</body>
</html>
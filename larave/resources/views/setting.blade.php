<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logovstore.png">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>VStore | Setting</title>
</head>
<body>
    <h1 class="display-1" style="text-align: center;">V-Store</h1>
    <div class="d-grid gap-2">
        <a class="btn btn-outline-primary" type="button" href="{{ url('/about')}}">about</a>
    </div><br><br>
    <div style="text-align: right;">
        <form action="{{ route('logout') }}" method="post">@csrf<button type="sumbit" class="btn btn-outline-danger" href="{{ route('logout') }}">Log out</button></form>
        <a type="button" class="btn btn-outline-dark" href="{{ url('/home')}}">Back</a>
    </div><br>

    </div>
    <script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
</body>
</html>

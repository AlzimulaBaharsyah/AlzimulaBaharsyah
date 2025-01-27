<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logovstore.png">
    <title>VStore | Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="display-1" style="text-align: center;">Account</h1>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="example@email.com" value="{{ Auth::user()->email }}">
        </div>
        <div class="col-12">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Username" value="{{ Auth::user()->name }}">
        </div>
        <div class="col-12">
            <a type="submit" class="btn btn-outline-success" href="{{ url('/home')}}">Home</a>
    </form><br>

    </div>
    <script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

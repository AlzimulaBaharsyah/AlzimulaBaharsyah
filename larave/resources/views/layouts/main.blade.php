<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="icon" href="{{ url('/larave/public/img/logovstore.png') }}">
        <title>VStore | </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home')}}">V-STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">V-STORE</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <li class="nav-item dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Jenis Barang
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li>
                            <form action="{{ url('/pod') }}" method="get">
                            <input type="hidden" name="nama" class="form-control" value="pod">
                            <button class="dropdown-item">POD</button>
                            </form>
                        </li>
                        <li>
                            <form action="{{ url('/mod')}}" method="get">
                                <input type="hidden" name="nama" class="form-control" value="mod">
                                <button class="dropdown-item">MOD</button>
                            </form>
                        <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ url('/rda')}}" method="get">
                                <input type="hidden" name="nama" class="form-control" value="rda">
                                <button class="dropdown-item">RDA/RTA</button>
                                </form>
                        </li>
                    </ul>
                    </li>
                </ul><br>
                <li class="nav-item dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Aksesoris
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li>
                        <form action="{{ url('/coil')}}" method="get">
                            <input type="hidden" name="nama" class="form-control" value="coil">
                            <button class="dropdown-item">coil</button>
                            </form>
                    </li>
                    <li>
                        <form action="{{ url('/baterai')}}" method="get">
                            <input type="hidden" name="nama" class="form-control" value="baterai">
                            <button class="dropdown-item">baterai</button>
                            </form>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ url('/liquid')}}" method="get">
                            <input type="hidden" name="nama" class="form-control" value="liquid">
                            <button class="dropdown-item">liquid</button>
                            </form>
                    </li>
                    </ul>
                </li>
                </ul><br>
                <li class="nav-item dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Navigation
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('/setting')}}">Setting</a></li>
                    <li><a class="dropdown-item" href="{{ url('/account')}}">Account</a></li>
                    <li><form action="{{ route('logout') }}" method="post">@csrf<button type="sumbit" class="dropdown-item" href="{{ route('logout') }}">Log out</button></form></li>
                    <li>
                    </ul>
                </li>
                </ul>
                </div>
            </div>
            </div>
        </nav>
        <div class="container">
            @yield('container')
        </div>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p><a href="{{ url('/home">Visit the homepage</a> or read our <a href="https://www.youtube.com/watch?v=TcwcMTweBNI">getting started guide</a>.</p>
                </div>
        </footer>
    </div>
    <script>
    function darkMode() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>

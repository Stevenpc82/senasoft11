<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
<div>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                <h2>Atletico nacional</h2>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{url('/')}}" class="nav-link px-2 link-dark">Inicio</a></li>
                <li><a href="{{url('equip')}}" class="nav-link px-2 link-dark">Equipo</a></li>
                <li><a href="{{url('abaut')}}" class="nav-link px-2 link-dark">About</a></li>
            </ul>


        </header>
    </div>
    <main>
        <div class="container py-4">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Equipo</h1>
                    <p class="col-md-8 fs-4">Cuenta la historia… que hace 73 años en una lejana provincia llamada Antioquia,
                        comenzaba a escribirse uno de los más brillantes capítulos del Fútbol profesional en Colombia.


                        Un grupo de visionarios fundaban, contra viento y marea, el Club Atlético Municipal, uno de los dos
                        equipos, que en aquel entonces, representarían a la región en el torneo de la DIMAYOR.</p>
                    <a class=" btn btn-outline-secondary " href="{{url('equip')}}">Ir a mas>></a>
                </div>
            </div>
            <div class="text text-center">
                <div class="row align-items-md-stretch">
                    <div>
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h2>Redes</h2>
                            <a class=" btn btn-outline-secondary p-3" href="https://es-la.facebook.com/nacionaloficial/">Facebook</a>
                            <a class=" btn btn-outline-secondary p-3" href="https://www.instagram.com/nacionaloficial/?hl=es-la">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021
            </footer>
        </div>
    </main>
</div>



</body>
</html>

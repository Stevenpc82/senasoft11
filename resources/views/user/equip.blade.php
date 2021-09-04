<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Equipo</title>
</head>
<body>

<div>
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"/>
                </svg>
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


            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Dorlan Pabón</h2>
                        <p>Pabón quiere liderar el ataque en este nuevo proyecto del 'verdolaga' de la mano del técnico
                            Alejandro Restrepo, quien le dará mayor cabida a los jugadores de las inferiores e intentará
                            potenciar el estilo de juego para recuperar la filosofía del club que tanto ha dado a
                            conocer en el pasado.

                            Sin embargo, las noticias sobre Pabón no son buenas, porque el jugador tuvo una lesión que
                            imposibilita que pueda actuar todavía en la liga. Pese a que ya está inscrito en Nacional,
                            Dorlan no puede actuar hasta recuperarse por completo. Según se conoció por parte del
                            entrenador, el futbolista podría estar cerca de tres semanas fueras de las canchas.</p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Andrés Andrade</h2>
                        <p>Nacido en Cali, Colombia. Realizó toda su formación deportiva en el Deportivo Cali, al ver
                            que no se le daban las cosas para debutar decide ir al fútbol Uruguayo específicamente al
                            Nacional de Montevideo equipo con el que estuvo un par de meses pero sin jugar ya que el
                            'Azucarero' nunca envió la transferencia.</p>

                    </div>
                </div>
            </div>
            <br>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Baldomero Perlaza</h2>
                        <p>Baldedios Perlaza Perlaza es un futbolista colombiano. Juega de centrocampista y su equipo
                            actual es el Atlético Nacional de la Categoría Primera A de Colombia.​ </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>Aldair Quintana</h2>
                        <p>Aldair Alejandro Quintana Rojas es un futbolista colombiano. Juega de arquero y su equipo
                            actual es el Atlético Nacional de la Categoría Primera A de Colombia. </p>

                    </div>
                </div>
                <div class="text text-center p-4"> <a class=" btn btn-outline-secondary " href="{{url('/')}}"><< Volver al inicio</a></div>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021
            </footer>
        </div>
    </main>
</div>
</body>
</html>

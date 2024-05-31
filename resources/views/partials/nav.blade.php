<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ setActivo('home') }}">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ setActivo('nosotros') }}">
                        <a class="nav-link" href="nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item {{ setActivo('servicios') }}">
                        <a class="nav-link" href="servicios">Servicios</a>
                    </li>
                    <li class="nav-item {{ setActivo('contacto') }}">
                        <a class="nav-link" href="contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>

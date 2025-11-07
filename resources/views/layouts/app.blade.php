<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Gestion Escolar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="d-flex flex-column min-vh-100">
    <main class="flex-fill">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary-shadow-sm">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">Gestión escolar</a>
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('alumnos.index') }}" class="nav-link">Alumnos</a>
                    <a href="{{ route('actividades.index') }}" class="nav-link">Actividades</a>
                    <a href="{{ route('inscripciones.index') }}" class="nav-link">Inscripciones</a>
                </div>
            </div>
        </nav>

    </main>
    
</body>
</html>
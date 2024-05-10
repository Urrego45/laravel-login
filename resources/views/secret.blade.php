<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina privada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                Página privada @auth {{Auth::user()->name}} @endauth
            </a>
            <div class="col-md-3 text-end">
                <a href="{{route('logout')}}">
                    <button type="button" class="btn btn-outline-primary me-2">Salir</button>
                </a>
            </div>
        </header>
    </div>
    <article class="container">
        <h2>Tu seccion privada</h2>
    </article>
</body>
</html>
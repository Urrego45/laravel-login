<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container align-center p-5">
        <form action="{{route('validar-registro')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="emailInput" required autocomplete="disable">
            </div>

            <div class="mb-3">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="passwordInput" required autocomplete="disable">
            </div>

            <div class="mb-3">
                <label for="userInput" class="form-label">Nombre</label>
                <input type="user" class="form-control" name="name" id="userInput" required autocomplete="disable">
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </main>
    
</body>
</html>
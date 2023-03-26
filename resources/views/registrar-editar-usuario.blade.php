<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href='{{ asset('css/estilostablas.css') }}'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="shortcut icon"
        href="https://png.pngtree.com/png-clipart/20200701/big/pngtree-beautiful-starry-sky-galaxy-png-image_5417472.png"
        type="image/x-icon">
</head>

<body>
    <header>
        @include('pantillas.navbar')
    </header>
    <div class="container">
        @include('sweetalert::alert')  
        <div class="card bg-transparent border-0">
            <h1 class="text-center my-5">✨Registro De Nuevo Usuario✨</h1>
            <form action="{{Route('resgistrar_usuario')}}" method="POST">
            @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre">
                    <label for="nombre_usuario">Nombre De Usuario</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Nombre">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Nombre">
                    <label for="apellidos">Apellidos</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico">
                    <label for="correo">Correo electrónico</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                    <label for="contraseña">Contraseña</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="rol" name="rol">
                        <option selected disabled>Selecciona un rol</option>
                        <option value=3>Supersu</option>
                        <option value=2>Admin</option>
                        <option value=1>Visitante</option>
                    </select>
                    <label for="rol">Rol</label>
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

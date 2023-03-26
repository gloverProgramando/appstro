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
        <div class="card bg-transparent border-0">
            <h1 class="text-center my-5">✨Registro De Nuevo Astro✨</h1>
            <form action="{{Route('registrar_planeta')}}" method="POST">
            @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre_astro" name="nombre_astro" placeholder="Nombre">
                    <label for="nombre_astro">Nombre De Astro</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="descripcion"  name="descripcion" placeholder="Nombre">
                    <label for="descripcion">Descripcion</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="rol" name="composicion">
                        <option selected disabled>Tipo de astro</option>
                        <option value=1>metano</option>
                    </select>
                    <label for="rol">Rol</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="distancia" name="distancia" placeholder="distancia">
                    <label for="disancia">Distancia (km)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="URL" name="URL" placeholder="URL">
                    <label for="URL">Imagen (URL)</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="rol" name="type_astro">
                        <option selected disabled>Tipo de astro</option>
                        <option value=1>Planetas</option>
                        <option value=2>Estrellas</option>
                        <option value=3>Cometas</option>
                        <option value=4>Satelites</option>
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

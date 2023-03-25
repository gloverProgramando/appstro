<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://png.pngtree.com/png-clipart/20200701/big/pngtree-beautiful-starry-sky-galaxy-png-image_5417472.png" type="image/x-icon">
    <title>usuarios</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href='{{ asset('css/estilostablas.css') }}'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.dataTables.min.css" />
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

</head>

<body>
    <header>
        @include('pantillas.navbar')
    </header>
    @include('sweetalert::alert') 
    <div class="container-fluid d-flex align-items-center justify-content-center" style="padding: 5%">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
                <div class="contenido">
                    <h2>Usuarios en plataforma</h2>
                    <button onclick="mensaje()">mensaje</button>
                </div>
            </div>
            <table id="usuarios" class="table table-striped">
                <thead>
                    <tr>
                        <th> Nombre </th>
                        <th> Correo </th>
                        <th> Tipo de usuario</th>
                        <th> Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $usuario)
                        <tr>
                            <td>{{ $usuario['first_name'] . ' ' . $usuario['lastname'] }}</td>
                            <td>{{ $usuario['email'] }}</td>
                            <td>{{ $usuario['user_type'] }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="" style="padding: 1%">
                                    @csrf
                                    <button type="submit" class="btn btn-info btnCambiarC" > Editar <i
                                            class="zmdi zmdi-edit"></i></button>
                                </form>
                                <form action="" style="padding: 1%">
                                    @csrf
                                    <button type="submit" class="btn btn-info btnCambiarC" > Eliminar <i
                                            class="zmdi zmdi-edit"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#usuarios').DataTable({
            dom: "Bfrtip",
            buttons: {
                dom: {
                    button: {
                        className: 'btn'
                    }
                }
            },
            "columnDefs": [{
            "targets": "_all",
            "className": "text-center"
            }]
        });
    });
</script>
<script>
function mensaje(){
swal(‘Mensaje Simple!’,’texto adicional en el mensaje’,’success’);
}
</script>
</html>

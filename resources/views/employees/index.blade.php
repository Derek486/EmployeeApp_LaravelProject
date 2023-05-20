@extends('app')

@section('search')

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <form class="form-inline my-2 my-lg-0" method="get" action="index.php">
                <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Id Empleado" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </ul>
    </div>

@endsection

@section('content')

    {{-- Formulario para añadir empleados --}}

    <div class="col-md-5">
        <div class="card">
            <div class="card-body">

                <form id="emp-form" action="/employee-insert" method="POST">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="firstName" placeholder="Nombres" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastName" placeholder="Apellidos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="dni" placeholder="DNI" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="salary" placeholder="Salario" class="form-control" min="0" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="cellphone" placeholder="Telefono" class="form-control" min="900000000" required>
                    </div>
                    <input type="hidden" id="prodId">
                    <button type="submit" class="btn btn-primary btn-block text-center">Guardar Empleado</button>

                </form>

            </div>
        </div>
    </div>

    {{-- Tabla --}}

    <div class="col-md-7">
        <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>DNI</td>
                <td>Salario</td>
                <td>Telefono</td>
            </tr>
        </thead>
        <tbody id="employees">

            @foreach ($employees as $employee)

            <tr>
                <td>{{ $employee -> id }}</td>
                <td>{{ $employee -> firstName }}</td>
                <td>{{ $employee -> lastName }}</td>
                <td>{{ $employee -> dni }}</td>
                <td>{{ $employee -> salary }}</td>
                <td>{{ $employee -> cellphone }}</td>
                <td>
                    <a
                        class="btn btn-success pt-2 pb-2 pl-3 pr-3"
                        href="">Editar
                    </a>
                </td>
                <td>
                    <a
                        onclick="return confirm('Estas seguro de eliminar?');"
                        class="btn btn-danger pt-2 pb-2 pl-3 pr-3"
                        href="">Eliminar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection

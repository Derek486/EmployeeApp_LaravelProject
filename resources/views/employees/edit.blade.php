@extends('layouts.employee')

@section('content')

    @section('class-center')
        justify-content-center
    @endsection

    <div class="col-md-5">
        <div class="card">
            <div class="card-body">

                <!-- FORMULARIO PARA EDITAR EMPLEADO -->
                <form id="emp-form" action="{{ route('employees.update', ['id' => $employee -> id]) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-4">Id</span>
                        <input type="number" name="id" placeholder="Id" class="form-control" readonly
                        value="{{ $employee -> id }}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-4">Nombres</span>
                        <input type="text" name="name" placeholder="Nombres" class="form-control"
                        value="{{ $employee -> name }}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-4">Apellidos</span>
                        <input type="text" name="lastName" placeholder="Apellidos" class="form-control"
                        value="{{ $employee -> lastName }}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-4">DNI</span>
                        <input type="number" name="dni" placeholder="DNI" class="form-control"
                        value="{{ $employee -> dni }}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-4">Salario</span>
                        <input type="number" name="salary" placeholder="Salario" class="form-control" min="0" step="0.01"
                        value="{{ $employee -> salary }}">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-4">Telefono</span>
                        <input type="number" name="cellphone" placeholder="Telefono" class="form-control" min="900000000"
                        value="{{ $employee -> cellphone}}">
                    </div>

                    <input type="hidden" id="prodId">

                    <button type="submit" class="btn btn-primary btn-block text-center">Editar Empleado</button>

                </form>

                <a class="btn btn-danger btn-block text-center mt-2" href="/employees">Cancelar</a>

            </div>
        </div>
    </div>

@endsection

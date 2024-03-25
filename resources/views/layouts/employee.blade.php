@extends('app')

@section('main')
    <!-- NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Employee App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Búsqueda de empleado --}}
        @yield('search')

    </nav>

    <div class="container">
        <div class="row p-4 @yield('class-center')">

            <!-- Aquí el contenido-->
            @yield('content')

        </div>
    </div>
@endsection
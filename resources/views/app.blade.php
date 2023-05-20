<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <title>Employee App CRUD</title>
</head>
<body>
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
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">

                        <!-- Aquí el contenido -->
                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@extends('app')

@section('main')
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <form class="card" action="@yield('route')" method="POST">
            @csrf
            <header class="card-header bg-dark">
                <p class="m-0 fs-2 fw-bold text-center text-white">@yield('title')</p>
            </header>
            <div class="card-body">
                @yield('form')
            </div>
            <footer class="card-footer d-flex justify-content-between align-items-center">
                @yield('footer')
            </footer>
        </form>
    </div>
@endsection
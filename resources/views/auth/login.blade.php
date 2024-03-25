@extends('layouts.auth') 

@section('title')
    Login
@endsection

@section('route')
    {{ route('login.store') }}
@endsection

@section('form')
    <section class="input-group">
        <label for="email" class="input-group-text col-4">Email</label>
        <input id="email" name="email" type="text" class="form-control" required>
    </section>
    <section class="input-group">
        <label for="password" class="input-group-text col-4">Password</label>
        <input id="password" name="password" type="password" class="form-control" required>
    </section>
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif    
@endsection

@section('footer')
    <p>
        Don't have an account? 
        <a href="{{ route('register') }}" class="link">Register</a>
    </p>
    <button type="submit" class="btn py-2 px-3 btn-dark">Login</button>
@endsection
@extends('layouts.auth') 

@section('title')
    Register
@endsection

@section('route')
    {{ route('register.store') }}
@endsection

@section('form')
    <section class="input-group">
        <label for="email" class="input-group-text col-4">Email</label>
        <input id="email" type="text" name="email" class="form-control" required>
    </section>
    @error('email')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <section class="input-group">
        <label for="password" class="input-group-text col-4">Password</label>
        <input id="password" type="password" name="password" class="form-control" required>
    </section>
    @error('password')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <section class="input-group">
        <label for="password_confirmation" class="input-group-text col-4 text-wrap">Confirm password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
    </section>
    @error('password_confirmation')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
@endsection

@section('footer')
    <p>
        Already has an account? 
        <a href="{{ route('login') }}" class="link">Login</a>
    </p>
    <button type="submit" class="btn py-2 px-3 btn-dark">Register</button>
@endsection
@extends('layout')

@section('title', 'Sign Up')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/sign.css') }}">
@endsection

@section('content')
<form action="{{ route('register') }}" method="POST" class="sign-box">
    @csrf

    <h2>Reset Password</h2>

    <div class="form-group">
      <label for="email">Enter email</label>
      <input type="email" class="form-control" name="email" required>
    </div>

    <div class="form-group">
      <label for="password">Enter password</label>
      <input type="password" class="form-control" name="password" required>
    </div>

    <div class="form-group">
      <label for="confirm-password">Confirm password</label>
      <input type="password" class="form-control" name="password_confirmation" required>
    </div>
    <button class="sign-btn">Sign up</button>

</form>
@endsection
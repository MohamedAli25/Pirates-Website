@extends('layout')

@section('title', 'Sign Up')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/sign.css') }}">
@endsection

@section('content')
<form action="{{ route('password.email') }}" method="POST" class="sign-box">
    @csrf

    <h2>Reset Password</h2>
    <div class="form-group">
      <label for="email">Enter email</label>
      <input type="email" class="form-control" name="email" required>
    </div>
    <button class="sign-btn">Send Password Reset Link</button>

</form>
@endsection
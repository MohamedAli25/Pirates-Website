@extends('layout')

@section('title', 'Sign Up')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/sign.css') }}">
@endsection

@section('content')
<form action="#" method="post" class="sign-box">

    <h2>Sign Up</h2>

    <div class="form-group">
      <label for="email">Enter email</label>
      <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
      <label for="password">Enter password</label>
      <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
      <label for="confirm-password">Confirm password</label>
      <input type="password" class="form-control" name="confirm-password">
    </div>
    <button class="sign-btn">Sign up</button>

</form>
@endsection
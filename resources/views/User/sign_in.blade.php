@extends('layout')

@section('title', 'Sign In')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/sign.css') }}">
@endsection

@section('content')
<form action="#" method="post" class="sign-box">
  @csrf

    <h2>Sign In</h2>

    <div class="form-group">
      <label for="email">Enter email</label>
      <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
      <label for="password">Enter password</label>
      <input type="password" class="form-control" name="password">
    </div>

    <button class="sign-btn">Sign in</button>
    <div>
      <span>Don't have an account?</span>
      <a id="a" href="index2.html"> Sign up now</a>
    </div>

</form>
@endsection
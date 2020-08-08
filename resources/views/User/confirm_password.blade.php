@extends('layout')

@section('title', 'Sign Up')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/sign.css') }}">
@endsection

@section('content')
<form action="{{ route('password.confirm') }}" method="POST" class="sign-box">
    @csrf

    <h2>Confirm Password</h2>


    <div class="form-group">
      <label for="password">Enter password</label>
      <input type="password" class="form-control" name="password" required>
    </div>
    <button class="sign-btn">Confirm Password</button>
    <div>
        <a id="a" href="{{ route('password.request') }}">Forgot Your Password?</a>
    </div>

</form>
@endsection
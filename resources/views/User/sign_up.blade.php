@extends('layout')

@section('title', 'Sign Up')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/sign.css') }}">
@endsection

@section('content')
<form action="{{ route('register') }}" method="POST" class="sign-box">
    @csrf

    <h2>Sign Up</h2>

    <div class="form-group">
      <label for="first_name">Enter first name</label>
      <input type="text" class="form-control" name="first_name" required>
    </div>

    <div class="form-group">
      <label for="last_name">Enter last name</label>
      <input type="text" class="form-control" name="last_name" required>
    </div>

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

    <div class="form-group">
      <label for="university">Enter university</label>
      <input type="text" class="form-control" name="university" required>
    </div>

    <div class="form-group">
      <label for="faculty">Enter faculty</label>
      <input type="text" class="form-control" name="faculty" required>
    </div>

    <div class="form-group">
      <label for="department">Enter department</label>
      <input type="text" class="form-control" name="department">
    </div>

    <div class="form-group">
      <label for="academic_year">Enter academic year</label>
      <input type="text" class="form-control" name="academic_year" required>
    </div>
    <button class="sign-btn">Sign up</button>

</form>
@endsection
@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Create a Position')

@section('css')
    <link rel="stylesheet" href="/css/position/create.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Create a Position</h2>
            </div>
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="name">Enter Position Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Position Name">
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
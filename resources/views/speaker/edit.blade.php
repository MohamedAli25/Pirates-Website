@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Edit a Speaker')

@section('css')
    <link rel="stylesheet" href="/css/speaker/edit.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Edit a Speaker</h2>
            </div>
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="name">Enter Speaker Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Speaker Name">
                </div>
                <div class="form-group">
                  <label for="description">Enter Speaker Description</label>
                  <textarea class="form-control" id="description" name="description" placeholder="Speaker Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Upload Speaker Photo</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
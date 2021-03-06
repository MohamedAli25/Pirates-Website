@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Create an Event')

@section('css')
    <link rel="stylesheet" href="/css/event/create.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Create an Event</h2>
            </div>
            <form action="/event" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Enter Event Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Event Name">
                </div>
                <div class="form-group">
                    <label for="name">Enter Event Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Event Description"></textarea>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="shown" name="shown">
                    <label class="form-check-label" for="shown">Show</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="available" name="available">
                    <label class="form-check-label" for="available">Available</label>
                </div>
                <div class="form-group mt-3">
                    <label for="photo">Event Photo</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
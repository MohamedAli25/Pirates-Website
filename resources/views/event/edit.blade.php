@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Edit an Event')

@section('css')
    <link rel="stylesheet" href="/css/event/edit.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Edit an Event</h2>
            </div>
            <form action="#">
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
                    <input type="checkbox" class="form-check-input" id="show">
                    <label class="form-check-label" for="show">Show</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="available">
                    <label class="form-check-label" for="available">Available</label>
                </div>
                <div class="form-group mt-3">
                    <label for="photo">Event Photo</label>
                    <input type="file" class="form-control-file" id="photo">
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Create a Preference')

@section('css')
    <link rel="stylesheet" href="/css/preference/create.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Create a Preference</h2>
            </div>
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="name">Enter Preference Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Preference Name">
                </div>
                <div class="form-group">
                    <label for="name">Enter Preference Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Event Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="event">Choose Event</label>
                    <select class="form-control" id="event">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="show">
                    <label class="form-check-label" for="show">Show</label>
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
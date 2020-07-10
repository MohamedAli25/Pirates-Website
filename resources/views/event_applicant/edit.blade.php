@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Edit Event Applicant')

@section('css')
    <link rel="stylesheet" href="/css/event_applicant/edit.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Edit Event Applicant</h2>
            </div>
            <form action="#">
                @csrf
                <div class="form-group">
                    <label for="name">Enter User Email</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="User Email">
                </div>
                <div class="form-group">
                  <label for="event">Choose Event</label>
                  <select class="form-control" id="event" name="event">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="time_slot">Choose Time Slot</label>
                  <select class="form-control" id="time_slot" name="time_slot">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="first_preference">Choose First Preference</label>
                  <select class="form-control" id="first_preference" id="first_preference">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="second_preference">Choose Second Preference</label>
                  <select class="form-control" id="second_preference" id="second_preference">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
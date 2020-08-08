@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | Apply to {{ $event->name }}')

@section('css')
    <link rel="stylesheet" href="/css/event_applicant/create.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">Apply to {{ $event->name }}</h2>
            </div>
            <form action="/event-applicant" method="POST">
                @csrf
                
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <div class="form-group">
                  <label for="time_slot">Choose Time Slot</label>
                  <select class="form-control" id="time_slot" name="time_slot">
                    @foreach ($timeSlots as $timeSlot)
                        <option value="{{ $timeSlot->id }}">{{ $timeSlot->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="first_preference">Choose First Preference</label>
                  <select class="form-control" id="first_preference" name="first_preference">
                    @foreach ($preferences as $preference)
                        <option value="{{ $preference->id }}">{{ $preference->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="second_preference">Choose Second Preference</label>
                  <select class="form-control" id="second_preference" name="second_preference">
                    @foreach ($preferences as $preference)
                        <option value="{{ $preference->id }}">{{ $preference->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="d-flex justify-content-center align-items -center">
                    <button type="submit" class="form-btn-bg button">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
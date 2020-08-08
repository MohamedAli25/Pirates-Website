@extends('layout')

@section('title', 'Pirates Egypt | {{ $event->name }}')

@section('css')
    <link rel="stylesheet" href="/css/event/show_one_detailed.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h1 class="page-heading">{{ $event->name }}</h1>
            </div>
            <div class="event-description-img">
                <div class="event-description">
                    <h3 class="event-description-heading">Description</h3>
                    <p class="event-description-text">
                        {{ $event->description }}
                    </p>
                </div>
                <div class="event-img-container">
                    <img src="/{{ $event->photo }}" alt="{{ $event->name }}">
                </div>
            </div>
            <div class="button-group">
                    <a href="/event-applicant/create?event_id={{ $event->id }}" class="form-btn button">Enroll</a>
                    <a href="/event/{{ $event->id }}/edit" class="form-btn button">Edit</a>
                    <form action="/event/{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
    
                        <input type="submit" value="Delete" class="form-btn button">
                    </form>
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('title', 'Pirates Egypt | Events')

@section('css')
    <link rel="stylesheet" href="/css/event/show_all.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h1 class="page-heading">Events</h1>
            </div>
            <div class="events">
                @foreach ($events as $event)
                    <div class="event">
                        <div class="event-img-container">
                            <div class="event-img" style="background-image: url('/{{ $event->photo }}')"></div>
                        </div>
                        <div class="event-body">
                            <div class="available">
                                <i class="fa fa-user"></i>
                                <p class="is-available">{{ $event->available ? "Available" : "Unavailable" }}</p>
                            </div>
                        <h5 class="event-name">{{ $event->name }}</h5>
                        <p class="event-description">{{ $event->description }}</p>
                        <a href="/event/{{ $event->id }}" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('title', 'Pirates Egypt | {{ $event->name }}')

@section('css')
    <link rel="stylesheet" href="/css/event/show_one.css">
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
            @if (!$didApply)
                <div class="form-btn-wrapper">
                    <a href="/event-applicant/create?event_id={{ $event->id }}" class="form-btn button">Enroll</a>
                </div>
            @endif
        </div>
    </div>
@endsection
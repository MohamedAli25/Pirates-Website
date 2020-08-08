@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | {{ $eventApplicant->user()->name() }}')

@section('css')
    <link rel="stylesheet" href="/css/event_applicant/show_one.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">{{ $eventApplicant->user()->name() }}</h2>
            </div>
            <p>Name: {{ $eventApplicant->user()->name }}</p>
            <p>Time Slot: {{ $eventApplicant->timeSlot()->name }}</p>
            <p>First Preference: {{ $eventApplicant->firstPreference()->name }}</p>
            <p>Second Preference: {{ $eventApplicant->secondPreference()->name }}</p>
            <p>University: {{ $eventApplicant->user()->university }}</p>
            <p>Faculty: {{ $eventApplicant->user()->faculty }}</p>
            <p>Department: {{ $eventApplicant->user()->department }}</p>
            <p>Academic Year: {{ $eventApplicant->user()->academic_year }}</p>
            <a href="/event-applicant/{{ $eventApplicant->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/event-applicant/{{ $eventApplicant->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection
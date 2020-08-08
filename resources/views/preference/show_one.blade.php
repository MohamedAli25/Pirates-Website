@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | {{ $preference->name }}')

@section('css')
    <link rel="stylesheet" href="/css/preference/show_one.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">{{ $preference->name }}</h2>
            </div>
            <p>Name: {{ $eventApplicant->user()->name }}</p>
            <p>Number of First Preference Applicants: {{ count($eventApplicant->firstPreferenceApplicants()) }}</p>
            <p>Number of Second Preference Applicants: {{ count($eventApplicant->secondPreferenceApplicants()) }}</p>
            <a href="/preference/{{ $preference->id }}/edit" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
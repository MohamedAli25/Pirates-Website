@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | {{ $event->name }} Preferences')

@section('css')
    <link rel="stylesheet" href="/css/preference/show_all.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">{{ $event->name }} Preferences</h2>
            </div>
            <ul class="list-group">
              @foreach ($preferences as $preference)
                <li class="list-group-item"><a href="/preference/{{ $preference->id }}">{{ $preference->name }}</a></li>
              @endforeach
            </ul>
        </div>
    </div>
@endsection
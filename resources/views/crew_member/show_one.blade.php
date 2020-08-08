@extends('layout')

@section('html-class', 'html-bg')

@section('body-class', 'body-transparent')

@section('title', 'Pirates Egypt | {{ $crewMember->user()->name() }}')

@section('css')
    <link rel="stylesheet" href="/css/crew_member/show_one.css">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="heading-wrapper">
                <h2 class="heading-undelined">{{ $crewMember->user()->name() }}</h2>
            </div>
            <p>Name: {{ $crewMember->user()->name() }}</p>
            <p>Email: {{ $crewMember->user()->email }}</p>
            <p>Committee: {{ $crewMember->committee()->name }}</p>
            <p>Position: {{ $crewMember->position()->name }}</p>
            <a href="/crew-member/{{ $crewMember->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/crew-member/{{ $crewMember->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    </div>
@endsection
@extends('layout')

@section('title', 'Contact us')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/contact.css') }}">
@endsection

@section('content')
<h1>CONTACT US</h1>
    <div class="president">
        <div class="img">
            
            <img src="{{ asset('Images/parallax1.jpg') }}" alt="">
        </div>
        <div class="text">
            <h2>PRESIDENT</h2>
            <h4>Name: Mohamed Motamed</h4>
            <h4>Email: username@example.com</h4>
        </div>
    </div>
    <div class="clr"></div>
    <div class="head-pr">
        <div class="img">
            <img src="{{ asset('Images/parallax1.jpg') }}" alt="">
        </div>
        <div class="text">
                <h2>HEAD-PR</h2>
                <h4>Name: Pr Head</h4>
                <h4>Email: username@example.com</h4>    
        </div>
    </div>   
    <div class="clr"></div>
    <div class="head-fr">
        <div class="img">
            <img src="{{ asset('Images/parallax1.jpg') }}" alt="">
        </div>
        <div class="text">
                <h2>HEAD-FR</h2>
                <h4>Name: Ahmed Reda</h4>
                <h4>Email: username@example.com</h4>    
        </div>
    </div>
@endsection
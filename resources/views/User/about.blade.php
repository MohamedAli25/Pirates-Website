@extends('layout')

@section('title', 'Pirates Egypt | About')

@section('css')
    <link rel="stylesheet" href="/css/User/about.css">
@endsection

@section('content')
    <div id="about">
        <div class="container">
            <h1 class="header">Who <span>We Are?</span></h1>
            <hr class="dotted-hr">
            <div class="content row">
                <div class="content-photo col-md-6 px-4">
                    <img src="/images/about-page-photo.jpg" class="img-fluid">
                </div>
                <div class="content-text col-md-6 px-4">
                    <h3 class="about-part-header">What We Do for You?</h3>
                    <p class="about-part-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestias saepe est voluptatibus explicabo dolor eveniet hic, ipsam quis accusantium veritatis, reiciendis non, sapiente harum voluptates. Fugiat officia cupiditate laboriosam!</p>
                    <h3 class="about-part-header">Lorem ipsum dolor sit amet consectetur.</h3>
                    <p class="about-part-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur molestias saepe est voluptatibus explicabo dolor eveniet hic, ipsam quis accusantium veritatis, reiciendis non, sapiente harum voluptates. Fugiat officia cupiditate laboriosam!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('title', 'Contact us')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/User/contact.css') }}">
@endsection

@section('content')
    <div id="contact">
        <div class="purple-overlay">
            <div class="container">
                <h1 class="contact-main-header">Contact Us</h1>
                <div class="content row">
                    <div class="col-md-6 contact-form">
                        <h2 class="contact-part-header">Send Message Us</h2>
                        <form action="#">
                            @csrf
                            <div class="form-group mb-5">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group mb-5">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group mb-5">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="form-btn button">Send  Message</button>
                        </form>
                    </div>
                    <div class="col-md-6 contact-text">
                        <h2 class="contact-part-header">Get in Touch</h2>
                        <p class="contact-part-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium officiis, veniam doloribus repellendus dolorem eos nihil quo officia temporibus adipisci dolores quia omnis velit fuga ex saepe libero voluptate. Beatae.</p>
                        <ul class="contact-info">
                            <li><ion-icon name="location-outline"></ion-icon>329 WASHINGTON ST BOSTON, MA 02108</li>
                            <li><ion-icon name="call-outline"></ion-icon>(617) 557-0089</li>
                            <li><ion-icon name="mail-outline"></ion-icon>contact@example.com</li>
                        </ul>
                        <ul class="social-icons">
                            <li class="social-icon"><ion-icon name="logo-facebook"></ion-icon></li>
                            <li class="social-icon"><ion-icon name="logo-instagram"></ion-icon></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('title', 'Pirates Egypt | Home')

@section('css')
    <link rel="stylesheet" href="/css/User/home_page.css">
@endsection

@section('content')
    {{-- Section: Showcase --}}
    <div id="showcase">
        <div class="showcase-content">
            <h1 class="showcase-title">Pirates Egypt</h1>
            <h3 class="showcase-slogan">Lead by Example</h3>
        </div>
    </div>

    {{-- Section: About --}}
    <div id="about">
        <div class="light-overlay">
            <div class="container">
                <h1 class="about-title">About Us</h1>
                <p class="about-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, dolore aliquam eaque doloribus repellat similique.</p>
                <div class="row about-content">
                    <div class="px-4 col-md-4">
                        <div class="about-part mission-part">
                            <div class="about-part-photo">
                                <div class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                            </div>
                            <div class="about-part-text">
                                <h2>Our Mission</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis distinctio quidem pariatur, inventore ea quas atque officia neque commodi doloribus, quae cum enim voluptatibus beatae nam laborum, optio perspiciatis reiciendis!</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="px-4 col-md-4">
                    <div class="about-part plan-part">
                        <div class="about-part-photo">
                            <div class="icon"><i class="fa fa-list-ul" aria-hidden="true"></i></div>
                        </div>
                        <div class="about-part-text">
                            <h2>Our Plan</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis distinctio quidem pariatur, inventore ea quas atque officia neque commodi doloribus, quae cum enim voluptatibus beatae nam laborum, optio perspiciatis reiciendis!</p>
                        </div>
                    </div>
                </div>
                
                <div class="px-4 col-md-4">
                    <div class="about-part vision-part">
                        <div class="about-part-photo">
                            <div class="icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
                        </div>
                        <div class="about-part-text">
                            <h2>Our Vision</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis distinctio quidem pariatur, inventore ea quas atque officia neque commodi doloribus, quae cum enim voluptatibus beatae nam laborum, optio perspiciatis reiciendis!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section: Services --}}
    <div id="services">
        <div class="container">
        <h1 class="services-title">Services</h1>
        <p class="services-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est repudiandae quod voluptatum, laborum minima corrupti mollitia necessitatibus alias illum dicta?</p>
        <div class="services-content">
            <div class="service">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <div class="service-text">
                    <h3 class="service-title">Lorem, ipsum.</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eum quaerat, rerum laborum ex illum error saepe placeat recusandae. Atque.</p>
                </div>
            </div>
            <div class="service">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <div class="service-text">
                    <h3 class="service-title">Lorem, ipsum.</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eum quaerat, rerum laborum ex illum error saepe placeat recusandae. Atque.</p>
                </div>
            </div>
            <div class="service">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <div class="service-text">
                    <h3 class="service-title">Lorem, ipsum.</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eum quaerat, rerum laborum ex illum error saepe placeat recusandae. Atque.</p>
                </div>
            </div>
            <div class="service">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <div class="service-text">
                    <h3 class="service-title">Lorem, ipsum.</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eum quaerat, rerum laborum ex illum error saepe placeat recusandae. Atque.</p>
                </div>
            </div>
            <div class="service">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <div class="service-text">
                    <h3 class="service-title">Lorem, ipsum.</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eum quaerat, rerum laborum ex illum error saepe placeat recusandae. Atque.</p>
                </div>
            </div>
            <div class="service">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                <div class="service-text">
                    <h3 class="service-title">Lorem, ipsum.</h3>
                    <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eum quaerat, rerum laborum ex illum error saepe placeat recusandae. Atque.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Section: Call to Action --}}
    <div id="call-to-action">
        <div class="purple-overlay">
            <div class="container">
                <h1 class="title">Call to Action</h1>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis porro quaerat sed nemo similique amet? Necessitatibus sapiente sed dolorem dicta?</p>
                <button>CALL TO ACTION</button>
            </div>
        </div>
    </div>

    {{-- Section: Facts --}}
    <div id="facts">
        <div class="container">
            <h1 class="title">Facts</h1>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis porro quaerat sed nemo similique amet? Necessitatibus sapiente sed dolorem dicta?</p>
            <div class="content">
                <div class="fact">
                    <p class="fact-number">274</p>
                    <p class="fact-title">Clients</p>
                </div>
                <div class="fact">
                    <p class="fact-number">421</p>
                    <p class="fact-title">Projects</p>
                </div>
                <div class="fact">
                    <p class="fact-number">1,364</p>
                    <p class="fact-title">Hours Of Support</p>
                </div>
                <div class="fact">
                    <p class="fact-number">18</p>
                    <p class="fact-title">Hard Workers</p>
                </div>
            </div>
        </div>
    </div>
@endsection
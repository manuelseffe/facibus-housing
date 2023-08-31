@extends('layout.app')

@section('content')

<div class="nav-container">

    @include('partials._menubar')

</div>

<header class="top-container bg-color" style="background-image:url('{{asset('img/about_hero.png') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-container mb-4">
        
                    <h1 class="heading color-theme">
                        <span class="">Everyone</span>
                        <span class="">deserves a roof</span>
                        <span> over their head for housing </span>
                    </h1>
            
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</header>

<section class="supportQuote">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="supportQuote-sidepoll"> <img src="{{ asset('img/sidepoll.png') }}" alt=""></span>
                <span class="supportQuote-sidepoll">
                    <p class="paragraph"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, vero. </p>
                </span>
            </div>
            <div class="col-md-6">
                <p class="paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aut iusto modi in error assumenda ullam asperiores temporibus non ad, nostrum blanditiis ipsa libero quam dignissimos? Tempore incidunt eum reprehenderit.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ourStory hasWhite">
    <div class="container">
        <div class="row alignedCenter mb-5">
            <div class="col-md-6">
                <h3 class="title green caplock mb-4">Our Story</h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt maxime dolorum animi dolore eaque necessitatibus voluptatibus ad excepturi accusantium maiores! Vero, magni soluta modi eaque doloribus quasi dolor voluptates est.
                </p>
            </div>
            <div class="col-md-6">
                <div class="ourStoryImage">
                    <img src="{{ asset('img/ourStoryImage.png') }}" alt="Our Story Image">
                </div>
            </div>
        </div>
        <div class="row alignedCenter mb-5">
            <div class="col-md-6">
                <div class="ourStoryImage">
                    <img src="{{ asset('img/abstract-searching.gif') }}" alt="Our Story Image">
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="title green caplock mb-4">Our Vision</h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt maxime dolorum animi dolore eaque necessitatibus voluptatibus ad excepturi accusantium maiores! Vero, magni soluta modi eaque doloribus quasi dolor voluptates est.
                </p>
            </div>
        </div>
        <div class="row alignedCenter mb-5">
            <div class="col-md-6">
                <h3 class="title green caplock mb-4">Our Mission</h3>
                <p class="paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt maxime dolorum animi dolore eaque necessitatibus voluptatibus ad excepturi accusantium maiores! Vero, magni soluta modi eaque doloribus quasi dolor voluptates est.
                </p>
            </div>
            <div class="col-md-6">
                <div class="ourStoryImage">
                    <img src="{{ asset('img/abstract-delivery.gif') }}" alt="Our Story Image">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
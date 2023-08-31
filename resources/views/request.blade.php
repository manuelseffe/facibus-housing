@extends('layout.app')

@section('content')

    <div class="nav-container">
        @include('partials._menubar')
    </div>



    <header class="bg-color" style="padding-top: 13rem">
        <div class="container" style="padding-bottom:5rem">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/group230.png') }}" alt="" srcset="">
                </div>
                <div class="col-md-8">
                    <h1 class="heading">
                        <span class="black">lend a helping hand</span> Change someone's life!
                    </h1>
                    <p class="paragraph mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quasi natus, eos facilis nam dolores aut quam, repudiandae id a, distinctio itaque repellendus nisi! At modi nesciunt tempora corporis. Magnam.</p>
                    <button class="btn btnColor">Find a Beneficiary</button>
                </div>
            </div>
        </div>
    </header>

    <section class="mvpSupporter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-box">
                        <img src="{{ asset('img/bg.jpg') }}" class="image" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="heading-3">Spotlight on this month's MVP Supporter</h2>
                    <span><strong>Miss Nne Collins</strong></span><br><br>
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo nulla libero eius velit reiciendis perspiciatis, quo in id, beatae debitis corrupti sapiente explicabo nemo! Ipsam sed voluptates nesciunt reprehenderit?</p>
                </div>
            </div>
        </div>
    </section>
    <section class="activeSupport">
        <div class="container">
            <h2 class="heading-2 mb-0">Active requests that need you support</h2>
            <p class="paragraph">make a difference for these individuals who are seeking support to pay their rent</p>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="campaign-container">
                        <div class="image-box">
                            <img src="img/image1.jpeg" alt="">
                            <div class="iconandlocation-wrapper">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i> Lagos</span>
                            </div>
                        </div><br>
                        <h3 class="campaign-title">A little Assistance Needed</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-container">
                        <div class="image-box">
                            <img src="img/image1.jpeg" alt="">
                            <div class="iconandlocation-wrapper">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i> Lagos</span>
                            </div>
                        </div><br>
                        <h3 class="campaign-title">Project Nirvana</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-container">
                        <div class="image-box">
                            <img src="img/image1.jpeg" alt="">
                            <div class="iconandlocation-wrapper">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i> Lagos</span>
                            </div>
                        </div><br>
                        <h3 class="campaign-title">A Better Home for the Nonger Family</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="campaign-container">
                        <div class="image-box">
                            <img src="img/image1.jpeg" alt="">
                            <div class="iconandlocation-wrapper">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i> Lagos</span>
                            </div>
                        </div><br>
                        <h3 class="campaign-title">A little Assistance Needed</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-container">
                        <div class="image-box">
                            <img src="img/image1.jpeg" alt="">
                            <div class="iconandlocation-wrapper">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i> Lagos</span>
                            </div>
                        </div><br>
                        <h3 class="campaign-title">Project Nirvana</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="campaign-container">
                        <div class="image-box">
                            <img src="img/image1.jpeg" alt="">
                            <div class="iconandlocation-wrapper">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i> Lagos</span>
                            </div>
                        </div><br>
                        <h3 class="campaign-title">A Better Home for the Nonger Family</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
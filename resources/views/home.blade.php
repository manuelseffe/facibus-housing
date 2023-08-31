@extends('layout.app')

@section('content')
   
<div class="nav-container">
    @include('partials._menubar')
</div>

<div class="container">
    <header style="padding-top: 7rem">
        <div class="row alignedCenter">
            <div class="col-md-6">
                <div class="top-container">
        
                    <h1 class="heading">
                        <span class="black">We are a</span> social fund raising
                        <span class="black">platform for</span> housing
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Ullam, inventore unde? Non magni animi aliquam sequi. Earum
                        pariatur minima totam quos corrupti amet eum expedita! Vitae
                        illo suscipit eveniet quaerat. Atque ipsum aliquam dolorum
                        veniam eius, rem non maiores molestias.
                    </p>
                </div><br><br>
                <div class="button-container ">
                    <a href="/campaign/create" class="btn btn__btnColor">Make a request</a>
                    <a href="/about" class="btn btn__gray">Get more info</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="img/bg.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </header>
</div>

<section class="solution">
    <div class="container">
        <div class="row main-area-top backg" style="background-image: url('./img/Group223.png');">
            <div class="col-md-4">
                <h2 class="heading-2"> We have best solution <br>for your housing hassel</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nam maxime
                    atque labore. Corrupti iste labore. Corrupti iste</p>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
   

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="image"><img src="img/bg.jpg" alt="" srcset=""></div>
            </div>
            <div class="col-md-7 alignCenter">
                <h2 class="heading-3 green"> Make a Request for a Course</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga vel
                    accusamus reiciendis facilis consectetur eveniet! Itaque quod repellendus doloribus reiciendis
                    voluptatem? Eius quo accusamus pariatur tempore eos? Neque recusandae quibusdam cumque? Sit
                    tempora voluptates distinctio odio, quos nobis dolores nisi sint unde tenetur quod
                    necessitatibus ipsam fugiat, dolore voluptatem harum esse amet adipisci porro dignissimos enim a
                    ad voluptate.
                </p>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-7 alignCenter">
                <h2 class="heading-3 green"> Our Support Community</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga vel
                    accusamus reiciendis facilis consectetur eveniet! Itaque quod repellendus doloribus reiciendis
                    voluptatem? Eius quo accusamus pariatur tempore eos? Neque recusandae quibusdam cumque? Sit
                    tempora voluptates distinctio odio, quos nobis dolores nisi sint unde tenetur quod
                    necessitatibus ipsam fugiat, dolore voluptatem harum esse amet adipisci porro dignissimos enim a
                    ad voluptate.
                </p>
            </div>
            <div class="col-md-5">
                <div class="image"><img src="img/bg.jpg" alt="" srcset=""></div>
            </div>
    
        </div>
    
        <div class="row">
            <div class="col-md-5">
                <div class="image"><img src="img/bg.jpg" alt="" srcset=""></div>
            </div>
            <div class="col-md-7 alignCenter">
                <h2 class="heading-3 green"> Receive Funds raised <br>from your request</h2>
                <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga vel
                    accusamus reiciendis facilis consectetur eveniet! Itaque quod repellendus doloribus reiciendis
                    voluptatem? Eius quo accusamus pariatur tempore eos? Neque recusandae quibusdam cumque? Sit
                    tempora voluptates distinctio odio, quos nobis dolores nisi sint unde tenetur quod
                    necessitatibus ipsam fugiat, dolore voluptatem harum esse amet adipisci porro dignissimos enim a
                    ad voluptate.
                </p>
            </div>
        </div>
</section>
        
    
<section class="activeSupport">
        <div class="container-fluid pt-30">
            <span class="paragraph bold green">ACTIVE REQUEST</span>
            <h2 class="heading-2"><span class="block">Checkout these request to she who</span><span class="block"> you can support</span></h2>
    
            <div class="row">
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
                        <h3 class="campaign-title">A little Assistance Needed</h3>
                        <div class="amountToGo">
                            <span class="paragraph">N30,000 to go</span>
                        </div><br>
                        <p class="paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam sunt quibusdam repudiandae, hic soluta ex nihil fugiat ad nisi totam.<a class="green" href="#">Know More</a></p><br>
                        <button class="btn btnColor">View Campaign  <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
   

@endsection



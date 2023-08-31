@extends('layout.app')

@section('content')

<div class="nav-container">

    @include('partials._menubar')

</div>
<div class="contact">
    <div class="container">
        <div class="contact__texbox hasCenter">
            <h1 class="heading contactHero__heading">Contact us</h1>
            <p class="paragraph">Ask us any question and we will get back to you soon!</p>
        </div>
    </div>
</div>
<section class="contact__body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="heading-2 contact__heading">Get in touch </h2>
                <p class="paragraph">Our frendly team would love to hear from you</p><br>

                <div class="contact__form">
                    <div class="row">
                        <div class="col">
                            <label for="firstname">First name
                                <input type="text" name="" id="" class="form-control" placeholder="First name">
                            </label>
                        </div>
                        <div class="col">
                            <label for="lastname">Last name
                                <input type="text" name="" id="" class="form-control" placeholder="Last name">
                            </label>
                        </div>
                    </div>
                    <label for="email">Email
                        <input type="email" name="" id="" class="form-control" placeholder="name@company.com">
                    </label>
                    <label for="email">Phone number
                        <input type="text" name="" id="" class="form-control" placeholder="phone number">
                    </label>
                    <label for="textarea">Message
                        <textarea name="" id="" class="form-control" placeholder="message"></textarea>
                    </label>
                 
                </div>
               
            </div>
            <div class="col-md-6">
                <div class="contact__image">
                    <img src="{{ asset('img/contact_image.png') }}" class="img-fluid" alt="Contact Facibus.co" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
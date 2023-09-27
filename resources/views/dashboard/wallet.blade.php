@extends('layout.dashboard', ['title' => 'Personal Wallet'])

@section('content')

<section class="container wallet-top">
        <div class="_heading">
            <h1>Personal Wallet</h1>
        </div>

        <div class="row">
            @if (true)
            
            <div class="col-md-7">
                <div class="request-card">
                    <div class="request__image">
                        <img src="{{ asset('img/request.png') }}" alt="" class="images">
                    </div>
                    <div class="request__title">Urgent need to rent a studio apartment</div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="request__details">
                    <div class="request__title-small">Urgent need to rent a studio apartment</div>
                    <div class="request__amount-receive">
                        <span>Amount receive</span>
                        <span>N 400,000.00</span>
                    </div>
                    <button class="btn btn_request">Request Disbursal</button>
                </div>
            </div>
                
            @else

            <div class="col-md-7">
                <div class="request">
                    <div class="request__image">
                        <img src="{{ asset('') }}" alt="">
                    </div>
                    <div class="request__title"></div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="request__details">
                    <div class="request__title-small"></div>
                    <div class="request__amount-receive">
                        <span>Amount receive</span>
                        <span>N 0.00</span>
                    </div>
                    <button class="btn btn_request">Request Disbursal</button>
                </div>
            </div>            
            @endif
        </div>
</section>

<section class="container wallet-bottom">
    <div class="_heading">
        <h1>Disbursement History</h1>
    </div>
    <div class="wallet-bottom__bg">
        <div class="history-top mb-5">
            <div class="searchbox">
                <input type="text" name="" id="" class="form-control" placeholder=' &#128269 Search by request title'> 
                <div class="icon"></i></div>
            </div>
            <div class="downloadReport">
                <a  class="downloadbtn" href="{{ url('/') }}">
                    <i class="fa fa-download"></i>
                    Download PDF Report
                </a>
            </div>
        </div>
        <div class="history-bottom">
            <div class="table">
                <table class="table">
                    <thead>
                        <td>Title</td>
                        <td>Billing Date</td>
                        <td>Status</td>
                        <td>Amount</td>
                    </thead>
                    <tbody>
                        <td>Urgent need for rent a studio apartment</td>
                        <td>20/01/2023</td>
                        <td>
                            <div class="pendingIndicator">
                                <span>&#149;</span>
                                <span>pending</span>
                            </div>
                        </td>
                        <td><b>N400,000.00</b></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

    
@endsection
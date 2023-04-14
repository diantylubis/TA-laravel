@extends('layouts.appcheckout')

@section('title')
<title>destination ceckout</title>

@endsection

@section('bootstrap')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@endsection


@section('content')
<div class="checkout-detail">
    <div class="container">
        <div class="content1">
            <button><i class="fa-regular fa-circle-left"></i> Explore Now</button>
            <p>Checkout details</p>
            <button>First Step</button>
        </div>
    </div>
</div>

<div class="travel-order">
    <div class="container">
        <div class="content1">
            <div class="content-top">
                <div class="content">
                    <p>Travel order</p>
                </div>
            </div>
            <hr>
            <div class="content-bootom">
                <div class="coll" >
                    <img src="gambar/dicovery/Rectangle 29.png" alt="">
                    <p>Nusa Penida, Bali <br><span>Destination</span></p>
                </div>
                <div class="coll">
                    <p>Rp. 1.000.000 / pax</p>
                </div>
                <div class="coll">
                    <p>Tickets for </p>
                    <input class="form-control date" type="date" aria-label="default input example" />
                </div>
                <div class="coll">
                    <p>Tickets</p>
                    <input class="form-control tickets" type="number" aria-label="default input example" min="1" />
                </div>
            </div>
        </div>
    </div>
</div>

<form action="">
    <div class="billing-detail">
        <div class="container">
            <div class="cardd mt-3">
                <div class="row bill">
                    <div class="col-12 mt-3"><p>Billing details</p></div>
                    <div>
                        <hr/>
                    </div>
                    <div class="form-checkout mt-2 mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="input" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="text" />
                            </div>
                            <div class="col-md-6">
                                <label for="input" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="text2" />
                            </div>
                            <div class="col-12">
                                <label for="inputemail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputemail4" />
                            </div>
                            <div class="col-12">
                                <label for="input" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phone-number" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>

<div class="container">
<a href="{{url('summary')}}"> <button type="submit" class="btn btn-success btn-checkout mt-4 w-100">Checkout</button>

</div>

@endsection

@extends('layouts.appcheckout')

@section('title')
    <title>destination-summary</title>
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

<div class="summary-detail" style="margin-top: 15px;">
    <div class="container">
        <div class="card card-checkout">
            <div class="row">
                <div class="col-lg-12 text-center p-3">
                    <div class="foto-checkout2">
                        <img src="gambar/checkout/summary.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-lg-3 mt-2">
                    <label for="">Destination</label>
                    <h5>Nusa Penida, Bali</h5>
                </div>
                <div class="col-lg-3 mt-2">
                    <label for="datepicker" class="me-2">Tickets date</label>
                    <!-- <input type="date" id="datepicker" name="datepicker"> -->
                    <input class="form-control w-50" type="date" placeholder="" aria-label="default input example" />
                </div>
                <div class="col-lg-3 mt-2">
                    <label for="quantity" class="me-2">Tickets quantity</label>
                    <!-- <input type="number" id="quantity" name="quantity" min="1"> -->
                    <input class="form-control w-25" type="number" placeholder="" aria-label="default input example" min="1" />
                </div>
                <div class="col-lg-3 mt-2">
                    <label for="">Total Price</label>
                    <h5>Rp.2.000.000</h5>
                </div>
            </div>
            <div class="mx-3 me-3">
                <hr />
            </div>
            <div class="row p-3">
                <div class="col-lg-3 mt-2">
                    <label for="firstname-checkout" class="firstname">First Name</label>
                    <!-- <input class="form-control" id="firstname" type="text" placeholder="" aria-label="default input example"> -->
                    <h5>Rylan</h5>
                </div>
                <div class="col-lg-3 mt-2">
                    <label for="lastname-checkout" class="lastname">Last Name</label>
                    <!-- <input class="form-control" id="lastname" type="text" placeholder="" aria-label="default input example"> -->
                    <h5>Ristia</h5>
                </div>
                <div class="col-lg-3 mt-2">
                    <label for="email-checkout" class="email">Email</label>
                    <!-- <input class="form-control" id="email" type="email" placeholder="" aria-label="default input example"> -->
                    <h5>rylanristia@gmail.com</h5>
                </div>
                <div class="col-lg-3 mt-2">
                    <label for="phone-number" class="phone-number">Phone Number</label>
                    <!-- <input class="form-control" id="phone-number" type="number" placeholder="" aria-label="default input example"> -->
                    <h5>0857 8554 8877</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="agree-summary">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <div class="checkbox d-flex">
              <input type="checkbox" class="checkbox-checkout" />
              <label for="" class="mx-3">Agree to our terms and condition.</label>
                      </div>
                  </div>
                  <div class="col-lg-12 mt-3">
                      <p>
                          Destination trip can be used as much as you order the ticket. Check again your summary order before continue your order. After you finish your payment, every tickets will be shown in your ticket page and sent into your email (include with destination
                          tickets, acomodation, and hotel).
                      </p>
                  </div>
              </div>
              <a href="{{url('ordersuccess')}}">
              <button type="submit" class="btn btn-success btn-checkout mt-4 w-100">
          Checkout
        </button></a>
    </div>
</div>

@endsection

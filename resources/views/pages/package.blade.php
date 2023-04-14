@extends('layouts.app')

@section('title')
<title>Package</title>
@endsection

@section('content')
<div class="section-top">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1>Travel Package</h1>
                <p>Looking for the perfect travel package? Look no further! We offer both open trips and private trips to [Destination], so you can choose the option that best suits your needs.</p>
                <button>Explore Now <i class="fa-regular fa-circle-right"></i></button>
            </div>
            <div class="content-right">
                <img src="gambar/package/Group 24.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="section-private-trip">
    <div class="container">
        <div class="section-private-trip1">
            <div class="content1">
                <p>Solo Traveler</p>
                <h3>Private Trip Experience</h3>
            </div>
            <div class="content2">
                <div class="content-left">
                    <button><i class="fa-regular fa-calendar" style="color: #ffffff;"></i> Choose your own date</button>
                    <button><i class="fa-solid fa-user-group" style="color: #ffffff;"></i> Solo or intimate group</button>
                    <button><i class="fa-solid fa-hotel" style="color: #ffffff;"></i> Custom destination</button>
                </div>
                <div class="content-right">
                    <p>Our team of experts will work with you to create a custom itinerary based on your interests, preferences, and travel style. Whether you're interested in exploring the local culture, indulging in delicious cuisine, or embarking on an adventurous outdoor excursion, we'll create a trip that's tailored to your specific needs.</p>
                </div>
            </div>
        </div>
        <div class="section-private-trip2">
            <div class="content1">
                <h3>Wonderful Place</h3>
                <p>Any destination you want</p>
            </div>
            <div class="content2">
                <div class="gambar">
                    <img src="gambar/package/Rectangle 29.png" alt="">
                    <p><span>Bali Indonesia</span></p>
                </div>
               <div class="gambar">
                     <img src="gambar/package/Rectangle 29 (1).png" alt="">
                     <p><span>Nusa Penida</span></p>
               </div>
                <div class="gambar">
                    <img src="gambar/package/Rectangle 29 (2).png" alt="">
                    <p><span>Yogyakarta</span></p>
                </div>
                <div class="gambar">
                    <img src="gambar/package/Rectangle 29 (3).png" alt="">
                    <p><span>Bandung</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-private-trip background-section-private-trip">
    <div class="container">
        <div class="section-private-trip1">
            <div class="content1">
                <p>Solo Traveler</p>
                <h3>Private Trip Experience</h3>
            </div>
            <div class="content2">
                <div class="content-left">
                    <button><i class="fa-regular fa-calendar" style="color: #ffffff;"></i> Choose your own date</button>
                    <button><i class="fa-solid fa-user-group" style="color: #ffffff;"></i> Solo or intimate group</button>
                    <button><i class="fa-solid fa-hotel" style="color: #ffffff;"></i> Custom destination</button>
                </div>
                <div class="content-right">
                    <p>Our team of experts will work with you to create a custom itinerary based on your interests, preferences, and travel style. Whether you're interested in exploring the local culture, indulging in delicious cuisine, or embarking on an adventurous outdoor excursion, we'll create a trip that's tailored to your specific needs.</p>
                </div>
            </div>
        </div>
        <div class="section-private-trip2">
            <div class="content1">
                <h3>Wonderful Place</h3>
                <p>Any destination you want</p>
            </div>
            <div class="content2">
                <div class="gambar">
                    <img src="gambar/package/Rectangle 29.png" alt="">
                    <p><span>Bali Indonesia</span></p>
                </div>
               <div class="gambar">
                     <img src="gambar/package/Rectangle 29 (1).png" alt="">
                     <p><span>Nusa Penida</span></p>
               </div>
                <div class="gambar">
                    <img src="gambar/package/Rectangle 29 (2).png" alt="">
                    <p><span>Yogyakarta</span></p>
                </div>
                <div class="gambar">
                    <img src="gambar/package/Rectangle 29 (3).png" alt="">
                    <p><span>Bandung</span></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-discount">
    <div class="content1">
        <div class="content-left">
            <h1>Get 15% <span>for your</span> first trip</h1>
            <p>Attention all first-time travelers! We're excited to offer an exclusive discount just for you. Book your first trip with us today and receive 10% off your entire journey.</p>
        </div>
        <div class="content-right">
            <div><button>Register</button></div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title')
<title>About-Us</title>
@endsection

@section('content')
<div class="section-top">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1>Travelark</h1>
                <p>Travelark is a technology company that provides a comprehensive suite of services and solutions to travel agents and tour operators. Based in Indonesia, the company was founded with the mission of revolutionizing the travel industry by leveraging the latest technologies and innovative ideas.</p>
                <button>Find out who we are <i class="fa-regular fa-circle-right"></i></button>
            </div>
            <div class="content-right right-content">
                <div class="border bodir">
                    <img src="gambar/about-us/Rectangle 49.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="our-value">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <h1><span>Our value</span> <br>for our Travelers</h1>
                <p>We offer a wide range of services and have many choices of travel packages to accompany your trip. In addition, we also uphold corporate values.</p>
            </div>
            <div class="content-right">
                <div class="col1">
                    <div class="card">
                        <p><i class="fa-solid fa-heart" style="color: #e6783d;"></i> Our Ethics</p>
                        <p>Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                </div>
                <div class="col2">
                    <div class="card">
                        <p><img src="gambar/dicovery/Group 10.png" alt=""> Our Ethics</p>
                        <p>Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                    <div class="card">
                        <p><img src="gambar/dicovery/Group 10 (1).png" alt=""> Our Ethics</p>
                        <p>Prioritizing Happy Traveling, Upholding Culture</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-our-package">
    <div class="content1">
        <h2>Our Package</h2>
        <p>More than one destination you will visit</p>
    </div>
    <div class="content2">
        <div class="card card1">
            <p><span>1st Package</span></p>
            <h4>Private Trip</h4>
            <p>Enjoy the luxury of having your own private guide, who will take you to hidden gems and off-the-beaten-path locations that you won't find in any guidebook.</p>
            <img class="awan1" src="gambar/dicovery/awan.png" alt="">
            <img class="awan2" src="gambar/dicovery/awan.png" alt="">
            <img class="awan3" src="gambar/dicovery/awan.png" alt="">
            <img class="awan4" src="gambar/dicovery/awan.png" alt="">
            <img class="awan5" src="gambar/dicovery/awan.png" alt="">
        </div>
        <div class="card card2">
            <p>2nd Package</p>
            <h4><span>Open Trip</span></h4>
            <p>With an open trip, you'll have the opportunity to connect with travelers from all over the world, creating lifelong friendships and unforgettable memories. </p>
            <img class="awan1" src="gambar/dicovery/awan.png" alt="">
            <img class="awan2" src="gambar/dicovery/awan.png" alt="">
            <img class="awan3" src="gambar/dicovery/awan.png" alt="">
            <img class="awan4" src="gambar/dicovery/awan.png" alt="">
            <img class="awan5" src="gambar/dicovery/awan.png" alt="">
        </div>
    </div>
</div>

<div class="section-most-popular" style="margin-top: 100px;">
    <div class="container">
        <div class="content1">
            <div class="content-left">
                <p>Recommend</p>
                <h3>Most Picked Destination</h3>
            </div>
            <div class="content-right">
                <div><a href="#"><button>Register</button></a></div>
            </div>
        </div>
        <div class="content2">
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29.png" alt="">
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29 (1).png" alt="">
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29 (2).png" alt="">
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
            <div class="gambar">
                <img src="gambar/dicovery/Rectangle 29 (3).png" alt="">
                <p> <span>Nusa Penida</span> <br> Kelungkung, Bali</p>
            </div>
        </div>
    </div>
</div>

<div class="section-your-help">
    <form action="">
        <div class="wrap">
            <div class="your-help">
                <h2>Need our help?</h2>
                <p>Contact us freely to get any information you need</p>
            </div>
            <div class="content1">
                <div class="content-left">
                    <div><label for="username">First name</label></div>
                    <div> <input type="text"></div>
                </div>
                <div class="content-right">
                    <div><label for="Company-name">Last name</label></div>
                    <div> <input type="text"></div>
                </div>
            </div>
            <div class="content-bottom">
                <div><label for="Company-address">Email</label></div>
                <div> <input type="text"></div>
                <div><label for="PIC number">Phone number</label></div>
                <div> <input type="text"></div>
                <div><label for="Request service">Message</label></div>
                <div> <input type="text"></div>
            </div>
        </div>
    </form>
</div>
@endsection
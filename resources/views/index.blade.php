@extends('layouts.app')
@section('script')
    <script>
        $(function () {

            'use strict';

            var winH = $(window).height();

            $('header').height(winH);

            $('header .container > div').css('top', (winH / 2) - ($('header .container > div').height() / 2));

            $('.navbar ul li a.search').on('click', function (e) {
                e.preventDefault();
            });
            $('.navbar a.search').on('click', function () {
                $('.navbar form').fadeToggle();
            });

            $('.navbar ul.navbar-nav li a').on('click', function (e) {

                var getAttr = $(this).attr('href');

                e.preventDefault();
                $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
            });
        })
    </script>
@endsection

@section('content')
    <header id="home">
        <div class="overlay">
            <div class="container">
                <div>
                    <h1><span>Poverty Cracker</span><br>Easiest Way To Donate.</h1>
                    <p>Now you can check & donate easily online, without the need of going by your self.<br>You can also
                        choose in which way your money would go through.<br><span>✔</span> <span>Trusted</span> by most
                        common charities.<br><span>✔</span>
                        <span>Approved</span> by common known laws.</p>
                </div>
            </div>
        </div>
    </header>

    <div class="services" id="service">
        <div class="container">
            <h2 class="text-capitalize">Enjoy <span>Donating</span></h2>
            <p>We can help you to donate in different areas</p>
        </div>
        <div class="small-container">
            <div id="slideToNext" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <span>Life Improvement</span>
                        <img src="imgs/smile-kids-happy-smiling-people-girl-cute-portrait-happiness.jpg"
                             class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <span>Water Connection</span>
                        <img src="imgs/Oasis65_copy.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <span>Education</span>
                        <img src="imgs/teacher-4784916_960_720.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slideToNext" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left fa-2x"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slideToNext" role="button" data-slide="next">
                    <i class="fas fa-chevron-right fa-2x"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="charities" id="charities">
        <h2 class="text-center">Top <span>Charities</span></h2>
        <p class="text-center">From your hand to them.</p>
        <div class="container">
            <div class="item">
                <img src="imgs/Freedom_for_animals_logo.png">
                <h5 class="text-uppercase">Freedom for animals</h5>
            </div>
            <div class="item">
                <img src="imgs/Resala.png">
                <h5 class="text-uppercase">Resala</h5>
            </div>
            <div class="item">
                <img src="imgs/699d3f07-6134-4e57-b903-5eeb824a8881.png">
                <h5 class="text-uppercase">Mind</h5>
            </div>
            <div class="item">
                <img src="imgs/Swiss_Barakah_charity_logo-01.png">
                <h5 class="text-uppercase">Swiss Barakah</h5>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="statistics text-capitalize text-center font-weight-bold">
        <span>Achievement Center</span>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <i class="fas fa-money-bill fa-3x"></i>
                <h3>425K</h3>
                <p>Collected</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <i class="fas fa-building fa-3x"></i>
                <h3>125</h3>
                <p>Charity</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <i class="fa fa-user fa-3x"></i>
                <h3>325</h3>
                <p>Philanthropist</p>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <i class="fas fa-hands-helping fa-3x"></i>
                <h3>120</h3>
                <p>Life Changed</p>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="violet-overlay">
            <div class="container">
                <h2 class="text-center">Get in touch</h2>
                <div class="contact-form">
                    <form>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Phone">
                        <textarea placeholder="Message"></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
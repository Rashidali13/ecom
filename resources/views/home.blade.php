@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-lg-10">
        <div class="home-slider">
            <div class="smoothslides" id="smoothslider">
                <img src="{{ asset('public/assets/img/slider-image.png') }}" alt="">
                <img src="{{ asset('public/assets/img/slider-image.png') }}" alt="">
                <img src="{{ asset('public/assets/img/slider-image.png') }}" alt="">
            </div>
        </div>

        <div class="column">
            <div class="box">
                <div class="feature-icon">
                    <h2>10%<br>off</h2>
                </div>
                <div class="image-box">
                    <img src="{{ asset('public/assets/img/poster-03.png') }}" alt="">
                </div>
                <div class="text">
                    <h2>Coroplast Signs 4mm</h2>
                    <a href="#" class="btn btn-primary">shop now</a>
                </div>
            </div>
            <div class="box">
                <div class="feature-icon">
                    <h2>10%<br>off</h2>
                </div>
                <div class="image-box">
                    <img src="{{ asset('public/assets/img/poster-02.png') }}" alt="">
                </div>
                <div class="text">
                    <h2>Door Hangers</h2>
                    <a href="#" class="btn btn-primary">shop now</a>
                </div>
            </div>
            <div class="box">
                <div class="feature-icon">
                    <h2>10%<br>off</h2>
                </div>
                <div class="image-box">
                    <img src="{{ asset('public/assets/img/poster-01.png') }}" alt="">
                </div>
                <div class="text">
                    <h2>Large Format Posters</h2>
                    <a href="#" class="btn btn-primary">shop now</a>
                </div>
            </div>
        </div>
        <div class="chose">
            <div class="heading-text">
                <h2>Why choose H&M Designers?</h2>
            </div>
            <div class="block">
                <div class="image-holder">
                    <img src="{{ asset('public/assets/img/pig.png') }}" alt="">
                </div>
                <div class="info">
                    <h2>Make more money with low trade pricing</h2>
                </div>
            </div>

            <div class="block">
                <div class="image-holder">
                    <img src="{{ asset('public/assets/img/awad.png') }}" alt="">
                </div>
                <div class="info">
                    <h2>Become a one-stop shop for all your clients' printing needs</h2>
                </div>
            </div>

            <div class="block">
                <div class="image-holder">
                    <img src="{{ asset('public/assets/img/clock.png') }}" alt="">
                </div>
                <div class="info">
                    <h2>Get repeat orders by delivering high-quality products on time</h2>
                </div>
            </div>
        </div>
        <div class="chose">
            <div class="heading-text">
                <h2>Our promise to you:</h2>
            </div>
            <div class="block">
                <div class="image-holder">
                    <img src="{{ asset('public/assets/img/click.png') }}" alt="">
                </div>
                <div class="info">
                    <h2>On time delivery anywhere in Canada</h2>
                </div>
            </div>

            <div class="block">
                <div class="image-holder">
                    <img src="{{ asset('public/assets/img/click.png') }}" alt="">
                </div>
                <div class="info">
                    <h2>No hidden costs, no delays, & no paperwork</h2>
                </div>
            </div>

            <div class="block">
                <div class="image-holder">
                    <img src="{{ asset('public/assets/img/click.png') }}" alt="">
                </div>
                <div class="info">
                    <h2>24/7 live order tracking</h2>
                </div>
            </div>
        </div>
    </div>


@endsection

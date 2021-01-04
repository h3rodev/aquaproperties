@extends('layouts.index')

@section('title', 'Home')

@section('banner-slider')
    <div id="homeCarousel" class="height-100-banner">
        <div class="homebanner">
            @include('banners.index')
        </div>
    </div>
@stop

@section('content')
    <section>
        <div class="slider-holder mb-3">
            <div class="container">    
                <div class="leaderboard-banner">
                    @include('banners.leaderboard')
                </div>
            </div> 
        </div>
    </section>
    <section>
        @include('properties.featured-properties')
    </section>

    <section>
        <div class="luxury-selections">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="selections-holder" style="background-image: url(../img/luxury-cover-image-1.jpg);">
                            <a href="#">
                            <img class="responsive-img" src="../img/svg/the-selection-logo-white.svg" alt="">
                            <h4 class="comingsoon">Coming Soon</h4>
                            </a>
                            
                            <div class="slideroverlay"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="selections-holder" style="background-image: url(../img/luxury-cover-image.jpg);">
                            <a href="#">
                            <img class="responsive-img" src="../img/svg/market-watcher-logo-white.svg" alt="">
                            <h4 class="comingsoon">Coming Soon</h4>
                            </a>
                            
                            <div class="slideroverlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
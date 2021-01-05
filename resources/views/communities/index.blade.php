@extends('layouts.index')

<?php 
    $pagetitle = setting('site.developers_seo_title');
?>

@section('title', $pagetitle )

@section('banner-slider')
<div class="image-spacer-banner">
    <img src="../img/community-main-banner.jpg" alt="{{ $pagetitle }}">
</div>
@stop


@section('content')

<section id="offplan-areas-holder" class="bg-white new-section-title">
    <div class="container">
        <div class="row no-bp">
            <div class="col-md-9">
                <h1 class="text-aqua-blue font-weight-normal">The Best Communities to Live in Dubai</h1>
                <h5>Explore Dubai communities and find the one that caters best to your needs</h5>
            </div>
            <div class="col-md-3">
                <nav class="breadcrumb-holder">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/dubai-communities">Dubai Communities</a></li>
                        </ol>
                </nav>
            </div>
        </div>
        <hr class="title-hr">
    
        <span class="spacer-80"></span>
        @foreach($communities as $community)
        <div class="row">
            <div class="col-md-6">
                <div class="image-holder logo-holder">
                    <a href="/dubai-communities/{{ $community->slug }}" target="_blank">
                        <img src="/{{ $community->main_image }}" alt="{{ $community->name }}">
                    </a> 
                </div>
            </div>
            <div class="col-md-6 area-info-holder ">
                <div class="area-info">
                    <h3>{{ $community->name }}</h3>
                    <h4>by {{ $community->master_developer }}</h4>
                    <p>{!! $community->excerpt !!}</p>
                    <a class="btn aqua-btn-outline-gray" href="/dubai-communities/{{ $community->slug }}" target="_blank">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="contact-us-holder">
                    <iframe
                        width="100%"
                        height="450"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsF0s-gHbwok2megHTkehrb5QWMw99z70&q=Aqua Properties" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-5">
                <div class="registration-form">
                    <h4>Register Your Interest</h4>
                    <form>
                        <div class="form-group">
                            <!-- <label for="fullname">Full Name</label> -->
                            <input type="text" class="form-control" id="fullname" aria-describedby="fullnamelHelp" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <!-- <label for="email">Email address</label> -->
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <!-- <label for="email">Phone</label> -->
                            <input type="tel" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="Phone with country code">
                        </div>
                        <small class="form-text text-muted">Please note that if the contact details entered are incorrect you will not be able to receive the project’s information. We respect your privacy and your contact details will not be passed on to any third-party companies.</small>

                        <button type="submit" class="btn aqua-btn-outline-gray">Register Now</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section
@stop
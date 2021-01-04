@extends('layouts.index')

<?php 
    $pagetitle = setting('site.projects_seo_title');
?>

@section('title', $pagetitle )

@section('banner-slider')
<div class="section-banner small-banner" style="background:url('../img/projects-main-bg.jpg')">
<div class="slideroverlay"></div>
    <div class="container banner-content">
        <h1 class="main-title">Exclusive Projects & Developments</h1>
        <h2 class="main-title">by AQUA Properties</h2>
    </div>
</div>
@stop


@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/projects">Projects</a></li>
        </ol>
    </div>
</nav>
<section id="offplan-areas-holder">
    <div class="container">

        @foreach($projects as $project)
        <div class="row">
            <div class="col-md-6">
                <div class="image-holder logo-holder">
                    @if($project->project_logo != '')
                    <img class="project-logo developer-logo" src="/{{ $project->project_logo }}" alt="{{ $project->project_name }}">
                    @endif
                    <a href="/projects/{{ $project->slug }}" target="_blank">
                        <img src="/{{ $project->featured_image }}" alt="{{ $project->project_name }}">
                    </a> 
                </div>
            </div>
            <div class="col-md-6 area-info-holder ">
                <div class="area-info">
                    <h3>{{ $project->project_name }}</h3>
                    <h4>by {{ $project->developer }}</h4>
                    <p>{!! $project->excerpt !!}</p>
                    <a class="btn aqua-btn-outline-gray" href="/projects/{{ $project->slug }}" target="_blank">
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
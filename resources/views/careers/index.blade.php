@extends('layouts.index')

@section('title', 'Careers at AQUA Properties')

@section('banner-slider')
<div class="image-spacer-banner">
    <img src="../img/new-about-banner.jpg">
</div>
@stop

@section('content')

<section class="bg-white new-section-title">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-aqua-blue font-weight-normal h1-section-title">Take your career to the next level</h1>
                <h5>Seize a multitude of opportunities we provide and become part of our success</h5>
            </div>
            <div class="col-md-4">
                <nav class="breadcrumb-holder">
                    <div class="container">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/join-our-team">Join Our Team</a></li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
        <hr class="title-hr">

            <h2>Why Join AQUA Properties</h2>
            <p>By joining AQUA Properties, you would be part of an award-winning team and have a chance to work in a stimulating multinational environment that values hard work and talent.</p>
            <p>Our modern spacious head office, ideally located on Sheikh Zayed Road, employs over 120 skilled professionals whose professional growth is of great importance to us.</p>
            <p>We are proud to be affiliated with esteemed companies locally and worldwide, so the opportunities to expand your knowledge and excel in your career are endless.</p>

    </div>
</section>

    <section id="offplan-areas-holder">
        <div class="container">
        <span class="spacer-80"></span>
            @foreach($perks as $perk)
            <div class="row">
                <div class="col-md-6">
                    <div class="image-holder logo-holder">
                        <a href="/join-our-team/aqua/{{ $perk->slug }}" target="_blank">
                            <img src="{{ $perk->image }}" alt="{{ $perk->title }}">
                        </a> 
                    </div>
                </div>
                <div class="col-md-6 area-info-holder ">
                    <div class="area-info">
                        <h3>{{ $perk->title }}</h3>
                        <p>{!! $perk->body !!}</p>
                        <a class="btn aqua-btn-outline-gray" href="/join-our-team/aqua/{{ $perk->slug }}" target="_blank">
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
                <div class="col-md-4">
                    <div class="card testimonial-card mt-3">
                        <!-- <div class="card-up aqua-gray"></div> -->

                        <div class="avatar mx-auto white">
                            <a data-toggle="collapse" href="#platform" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="../img/aqua-platform.svg" class="rounded-circle" alt="Platform" />
                            </a>
                        </div>

                        <div class="card-body aqua-card mb-4">
                            <a data-toggle="collapse" href="#platform" role="button" aria-expanded="false" aria-controls="collapseExample"><h4 class="card-title text-aqua-blue">Platform</h4></a>
                            We are always up to date with the newest technologies and marketing tools. Our agents benefit from using our own CRM and full support
                            <div class="collapse" id="platform">
                            they get from our award-winning marketing team and back office. Our additional advantage lies in the fact that we provide A to Z in-house real estate services for our clientele.
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card mt-3">
                        <!-- <div class="card-up aqua-gray"></div> -->

                        <div class="avatar mx-auto white">
                            <a data-toggle="collapse" href="#environment" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="../img/aqua-environment.svg" class="rounded-circle" alt="Environment" />
                            </a>
                        </div>

                        <div class="card-body aqua-card mb-4">
                            <a data-toggle="collapse" href="#environment" role="button" aria-expanded="false" aria-controls="collapseExample"><h4 class="card-title text-aqua-blue">Environment</h4></a>
                            With over 20 different nationalities onboard, we pride ourselves with a multicultural stimulating office vibe. Our spacious office on Sheikh Zayed Road,
                        
                            <div class="collapse" id="environment">
                            equipped with a salon, pool room and other common areas, combined with a supportive environment, allows our employees to have the right balance between work and play.
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card mt-3">
                        <!-- <div class="card-up aqua-gray"></div> -->

                        <div class="avatar mx-auto white">
                            <a data-toggle="collapse" href="#benefits" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="../img/aqua-benefits.svg" class="rounded-circle" alt="Benefits" />
                            </a>
                        </div>

                        <div class="card-body aqua-card mb-4">
                            <a data-toggle="collapse" href="#benefits" role="button" aria-expanded="false" aria-controls="collapseExample"><h4 class="card-title text-aqua-blue">Benefits</h4></a>
                            We believe a happy employee is a good employee. Therefore, we ease our agents' work by providing qualified leads and full marketing support.
                            <div class="collapse" id="benefits">
                            In addition, to sponsoring their residency visa, offering RERA support, giving them access to our training academy and providing them with medical insurance. Furthermore, we reward the best achievers with numerous performance-based incentives.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3>Job Vacancies</h3>
            
            <p>We are always on the lookout for hardworking and talented professionals. If you feel that you can contribute to our team and be a part of our future success, feel free to upload your CV.</p>
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
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsF0s-gHbwok2megHTkehrb5QWMw99z70&q=AQUA Properties Head Office" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-5">
                <div class="registration-form">
                    <h4>Send Application</h4>
                    <form>
                        <div class="form-group">
                            <!-- <label for="fullname">Full Name</label> -->
                            <input value="<?php echo isset($_GET['full_name']) ? $_GET['full_name'] : ''; ?>" name="full_name" type="text" class="form-control" id="fullname" aria-describedby="fullnamelHelp" placeholder="Enter Full Name" required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <!-- <label for="email">Email address</label> -->
                            <input value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                            <input type="file" name="cv" class="form-control-file" id="cv">
                        </div>

                        <button type="submit" class="btn aqua-btn-outline-gray">Apply</button>
                        
                        <small class="form-text text-muted">Please note that if the contact details entered are incorrect you will not be able to receive the project’s information. We respect your privacy and your contact details will not be passed on to any third-party companies.</small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@extends('layouts.index')

@section('title', $perk->title . ' - Careers')

@section('banner-slider')
<div class="image-spacer-banner">
    <img src="/img/new-about-banner.jpg">
</div>
@stop

@section('content')

<section class="bg-white new-section-title">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-aqua-blue font-weight-normal h1-section-title">{{ $perk->title }}</h1>
                <h5>Take your career to the next level</h5>
            </div>
            <div class="col-md-4">
                <nav class="breadcrumb-holder">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/join-our-team">Join Our Team</a></li>
                            <li class="breadcrumb-item"><a href="/join-our-team/aqua/{{ $perk->slug }}">Join Our Team</a></li>
                        </ol>
                </nav>
            </div>
        </div>
        <hr class="title-hr">
        @if( $perk->video_link != '' )
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $perk->video_link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <span class="spacer-30"></span>
            @endif

            @if( $perk->gallery != '' )
                <div class="row">
                    @foreach( explode(',', str_replace('"', '',  str_replace(']', '', str_replace('[', '', $perk->gallery ) ) ) ) as $gallery )
                        <a href="https://aquaproperties.app/{{  $gallery }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 ligthbox-holder">
                            <img class="img-thumbnail" src="https://aquaproperties.app/{{  $gallery }}" alt="{{ $perk->title }}">
                        </a>
                    @endforeach
                </div>
            @endif

            
            {!! $perk->body !!}
    </div>
</section>


    <section>
        <div class="container">
            <h3>Why Join AQUA Properties</h3>
            <p>By joining AQUA Properties, you would be part of an award-winning team and have a chance to work in a stimulating multinational environment that values hard work and talent.</p>
            <p>Our modern spacious head office, ideally located on Sheikh Zayed Road, employs over 120 skilled professionals whose professional growth is of great importance to us.</p>
            <p>We are proud to be affiliated with esteemed companies locally and worldwide, so the opportunities to expand your knowledge and excel in your career are endless.</p>
        </div>
    </section>


    <section>
        <div class="container">
            <h3>Job Vacancies</h3>
            
            <p>We are always on the lookout for hardworking and talented professionals. If you feel that you can contribute to our team and be a part of our future success, feel free to upload your CV.</p>
        </div>
    </section>
@stop
@extends('layouts.index')

<?php 
    $pagetitle = setting('site.0ffplan_seo_title');
?>

@section('title', $pagetitle )


@section('banner-slider')
<div class="section-banner small-banner" style="background:url('../img/banner-3.jpg')">

    <div class="container banner-content">
        <h1 class="main-title">Selection of the Best Off-plan Projects in Dubai</h1>
        <h2 class="main-title">INVEST IN UPCOMING DEVELOPMENTS AND GET YOUR APARTMENT, VILLA OR A TOWNHOUSE</h2>
    </div>
</div>
@stop

@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/off-plan-properties-dubai">Off-plan communities in Dubai</a></li>
        </ol>
    </div>
</nav>

<section>
    <div class="container">
        <p>AQUA Properties offer an impeccable array of off plan properties in Dubai. Backed by the latest information, these project developments are launched by Dubai’s most trusted developers. Off plan properties in Dubai play a major role in strengthening this sector in dxb Dubai off plan. Dubai’s growing economy and profitable returns on off plan properties investment makes it an ideal choice for those looking to invest in the real estate sector. </p>
        <p>Due to the booming economy, the value of dubai off plan property is likely to increase in the years to come even though the property is offered at a notably lower price. Investors can choose to put their completed properties up for rent and will benefit from the monthly income. This rental income is a major advantage in the region as it will provide financial security as well as a foundation in this dynamic city.  Offering attractive and flexible payments schemes, new off plan projects are the way forward in real estate investments.</p>
        <p>With numerous new off plan projects being announced almost every month, AQUA Properties is here to assist you to identify the smart investment opportunities available in Dubai off plan. Additionally, our line-up of experienced property specialists will help you find exactly what you’re looking for.</p>
    </div>
</section>

<section id="offplan-areas-holder">
    <div class="container">
        <h2>Featured Off Plan Areas In Dubai</h2>
        <span class="spacer-80"></span>
        @foreach($areas as $area)
        <div class="row">
            <div class="col-md-6">
                <div class="image-holder">
                    <a href="/off-plan-properties-dubai/{{ $area->slug }}">
                        <img src="{{ $area->featured_image }}" alt="{{ $area->area_name }}">
                    </a> 
                </div>
            </div>
            <div class="col-md-6 area-info-holder ">
                <div class="area-info">
                    <h3>{{ $area->area_name }}</h3>
                    <h4>by {{ $area->developer }}</h4>
                    <p>{!! $area->excerpt !!}</p>
                    <a class="btn aqua-btn-outline-gray" href="/off-plan-properties-dubai/{{ $area->slug }}">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</section>

@stop
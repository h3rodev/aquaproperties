@extends('layouts.index')

<?php 
    $pagetitle = setting('site.developers_seo_title');
?>

@section('title', $pagetitle )

@section('banner-slider')
<div class="section-banner small-banner" style="background:url('../img/banner-2.jpg')">
    <div class="container banner-content">
        <h1 class="main-title">Find the Right Community to Invest in Dubai</h1>
        <h2 class="main-title">Discover the most popular developments to buy a property in the UAE</h2>
    </div>
</div>
@stop




@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/real-estate-developers-in-dubai">Dubai Developers</a></li>
        </ol>
    </div>
</nav>
<section id="offplan-areas-holder">
    <div class="container">
        @foreach($developers as $developer)
        <div class="row">
            <div class="col-md-6">
                <div class="image-holder logo-holder">
                    <img class="developer-logo" src="{{ $developer->logo }}" alt="{{ $developer->name }}">
                    <a href="/real-estate-developers-in-dubai/{{ $developer->slug }}" target="_blank">
                        <img src="{{ $developer->featured_image }}" alt="{{ $developer->name }}">
                        
                    </a> 
                </div>
            </div>
            <div class="col-md-6 area-info-holder ">
                <div class="area-info">
                    
                    <h3>{{ $developer->name }}</h3>
                    <p>{!! $developer->excerpt !!}</p>
                    <a class="btn aqua-btn-outline-gray" href="/real-estate-developers-in-dubai/{{ $developer->slug }}" target="_blank">
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
        <p>Despite some yesteryear economic challenges in UAE, land continues to be one among the foremost robust and resilient industries within the country. Dubai has been among the highest emirates that is still thriving with the important estate business, because it has proven to be adaptive to the some temporary while some perpetual changes in the market. While property selling is undergoing major changes within the region, the playing field has been leveled for both big also as small property developers in Dubai, each catering to different market segments.</p>
        <p>In the recent year, there has been a big shift on the demand for land property. The sales trend has changed from high-end or luxury properties to low-priced middle-class properties. This is why established and new property developers alike have now shifted to making quality yet affordable homes, hotels or commercial spaces to ride with evolving land market. Dubai has been a home to a big number of local and international land developers that are providing the simplest quality services to its clients. Industry giants in Dubai include Emaar Properties, which has been a uniform frontrunner in terms of market price , assets, profits and revenues. Following suit at the top developers list are DAMAC Properties, Nakheel, Dubai Properties and many established firms based at the emirate.</p>
        <p>While profit figures are notably higher for these giant names in Dubai, there also are some newly established developers that are now carving a reputation and place for themselves within the market. Albeit lagging behind in terms of years of industry experience, these smaller firms have made their real estate projects attractive to their clients by highlighting each of the properties’ unique features, special amenities and facilities, flexible payment plans and other benefits.</p>
        <p>When buying property in Dubai, land investors or buyers are advised not only to see on the features and specifications of the property, but also to seem into the background information and history of the property developers in Dubai. It also helps to look at the developers’ other projects to compare and contrast individual features, prices and payment plan options.</p>
        <p>AQUAProperties.com provides you a comprehensive list of the emirate’s most trusted and sought-after property developers in Dubai that are officially registered with the Dubai Land Department (DLD). We provide you complete information about the developer’s history, its mission and vision, as well as its portfolio of off plan and ready projects. Simply explore through this page to seek out the developer which will provide you your property of choice.</p>
    </div>
</section>
@stop
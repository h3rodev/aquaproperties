@extends('layouts.index')
<?php 
    $pagetitle = $post->seo_title;
?>
@section('title', $pagetitle)

@section('banner-slider')
<div class="section-banner small-banner" style="background:url('/{{ $post->image }}')">
    <div class="slideroverlay"></div>
    <div class="container banner-content">
        <h2 class="main-title">News</h2>
        <h1 class="main-title">{{ $post->title }}</h1>
    </div>
</div>

@stop

@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">News</a></li>
            <li class="breadcrumb-item"><a href="/news/{{ $post->slug }}">{{ $post->title }}</a></li>
        </ol>
    </div>
</nav>

<section id="offplan-areas-holder">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="/{{ $post->image }}" alt="" class="card-img-top">
                <div class="card">
                    <div class="card-body">
                    {!! $post->body !!}

                        <div class="fb-comments" data-lazy="true" data-href="https://aquaproperties.com/news/{{ $post->slug }}" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 post-sidebar">
                <aside>
                    <div class="card">
                        <div class="card-body">
                            <h4>About AQUA Properties</h4>
                            <p>Founded in 2005, AQUA Properties established its position on the market as a renowned, award-winning real estate company. <a href="/about-us">Read more</a></p>
                        </div>
                    </div>
                </aside>

                <aside>
                    <div class="card">
                        <div class="card-body">
                            <h4>Follow Us</h4>
                            <iframe name="f314a6e80ed9e" height="220px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.10/plugins/page.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df19a15f059d6794%26domain%3Daquaproperties.com%26origin%3Dhttps%253A%252F%252Faquaproperties.com%252Ff18bc247f66747c%26relation%3Dparent.parent&amp;container_width=500&amp;height=220&amp;hide_cover=false&amp;hide_cta=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Faquaproperties%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=500px" style="border: none; visibility: visible; width: 100%; height: 130px;" class=""></iframe>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        
    </div>
</section>


@stop
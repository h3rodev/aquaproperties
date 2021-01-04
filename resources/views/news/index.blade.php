@extends('layouts.index')
<?php 
    $pagetitle = setting('site.news_seo_title');
?>
@section('title', $pagetitle)

@section('banner-slider')
<div class="image-spacer-banner">
    <img src="../img/new-news-banner.jpg">
</div>
@stop

@section('content')
<section class="bg-white new-section-title">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-aqua-blue font-weight-normal h1-section-title">News</h1>
                <h5></h5>
            </div>
            <div class="col-md-4">
                <nav class="breadcrumb-holder">
                    <div class="container">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/news">News</a></li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
        <hr class="title-hr">
        @foreach($news as $item)
            <div class="row pb-5 mb-5">
                <div class="col-md-6">
                    <div class="image-holder">
                        <a href="/news/{{ $item->slug }}">
                            <img src="{{ $item->image }}" alt="{{ $item->title }}">
                        </a> 
                    </div>
                </div>
                <div class="col-md-6 area-info-holder ">
                    <div class="area-info">
                        <h3>{{ $item->title }}</h3>
                        <p>{!! $item->excerpt !!}</p>
                        <a class="btn aqua-btn-outline-gray" href="/news/{{ $item->slug }}">
                            Read more
                        </a>
                    </div>
                </div>

            </div>
            
        @endforeach
        <div class="pagination-holder">
            {{ $news->links() }}
        </div>
    </div>
</section>
@stop
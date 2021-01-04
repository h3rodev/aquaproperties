@extends('layouts.index')

@section('title', 'The Selection by AQUA Properties')




@section('banner-slider')
<div class="custome-video-bg section-banner">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TqvAt2jBPjo?t=30&autoplay=1&loop=1&enablejsapi=1"></iframe>
    </div>
    <div class="video-gradient-bg">
        <img src="/img/svg/the-selection-logo-white.svg" alt="The Selection By AQUA Properties">
    </div>
</div>
@stop

@section('content')
    <section class="bg-white">
        <nav class="breadcrumb-holder">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/the-selection">The Selection by AQUA Properties</a></li>
                    <?php
                        if( isset( $cat ) && $cat != '%' ){
                            ?>
                                <li class="breadcrumb-item"><a href="/the-selection/{{ $cat }}-for-{{$for ?? ''}}-in-dubai">{{  str_replace('_', ' ', $cat) }}</a></li>
                            <?php
                        } else {}
                    ?>
            
                    <?php
                        if( isset( $for ) && $for != '%'){
                            if( isset( $cat ) && $cat != '%' ){
                                ?>
                                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai">for {{ $for ?? '' }} in Dubai</a></li>
                            <?php
                                
                            } else {
                                ?>
                                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai">for {{ $for ?? '' }}</a></li>
                            <?php
                            }
                        }
                    ?>

                    <?php
                        if( isset( $loc_name ) && $loc_name != '%'){
                            ?>
                                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}">{{  str_replace('-', ' ', $loc_name) }}</a></li>
                            <?php
                        }
                    ?>

                    <?php
                        if( isset( $sub_loc_name ) && $sub_loc_name != '%'){
                            ?>
                                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}">{{  str_replace('-', ' ', $sub_loc_name) }}</a></li>
                            <?php
                        }
                    ?>
                
                </ol>
            </div>
        </nav>
            <div class="container">

                <h1 class="main-title">
                <?php
                    if( isset( $cat ) && $cat != '%' ){
                        ?>
                            {{  str_replace('_', ' ', $cat) }} 
                        <?php
                    } else {
                        ?>The Selection by AQUA Properties<?php
                    }
                ?>

                <?php
                    if( isset( $for ) && $for != '%'){
                        if( isset( $cat ) && $cat != '%' ){
                            ?>for {{ $for ?? '' }} in Dubai<?php
                            
                        } else {
                            ?>for {{ $for ?? '' }}<?php
                        }
                    }
                ?>

                <?php
                    if( isset( $loc_name ) && $loc_name != '%'){
                        ?>
                            {{  str_replace('-', ' ', $loc_name) }}
                        <?php
                    }
                ?>

                <?php
                    if( isset( $sub_loc_name ) && $sub_loc_name != '%'){
                        ?>
                            {{  str_replace('-', ' ', $sub_loc_name) }}
                        <?php
                    }
                ?>
            </h1>

            {!! $community_desc['community_desc'] ?? '' !!}
            <hr class="title-hr">
        </div>

        <div class="featured-properties">
            <div class="container">
                <div class="featured-properties-slider">
                    @foreach($luxApartments as $property)
                        @include('the-selection.item')
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@stop

<style>
body {
    background-color:#f5f5f5 !important;
}
.property-button {
    background-color: #191919 !important;
}
.card-footer > p.listing-card-price {
    color:#191919 !important;
}
.page-item .page-link {
    color: #191919 !important;
}
.page-item.active .page-link {
    color: #fff !important;
    background-color: #191919 !important;
    border-color: #191919 !important;
}
.is-latest.property-item-card {
    border: 5px solid #191919 !important;
}
.footer-newsletter.aqua-blue {
    background-color: #191919 !important;
}
.navbar-brand img {
    filter: grayscale(1);
}
.slick-dots li.slick-active button:before {
    color: #000 !important;
    opacity: 1 !important;
}
.breadcrumb {
    margin-bottom:0px !important;
}

.listing-card-price {
    color:#191919 !important;
}

</style>    

<?php
    if( isset($_GET['theme']) && $_GET['theme'] == 'dark'){
        ?>
        <style>
        body {
            background-color:#000 !important;
        } 
        .slick-dots li.slick-active button:before {
            color: #e5e5e5 !important;
            opacity: 1 !important;
        }
        .property-item-card, .card-footer {
            background-color:#000 !important;
        }
        .card-footer .listing-card-price, .listing-location a {
            color:#fff !important;
        }
        .featured-properties > .container > h3 {
            color:#e5e5e5;
        }
        nav.bg-white {
            background-color:#000 !important;
        }
        body .footer {
            background-color:#000 !important;
        }
        .breadcrumb-holder, .breadcrumb {
            background-color:#191919 !important;
        }
        .amenity-item span {
            background-color:#191919 !important;
            color:#fff !important;
        }
        .card-body-divider {
            background-color:#e5e5e5 !important;
        }
        </style>
        
        <?php
    }
?>
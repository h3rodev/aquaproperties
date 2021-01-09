@extends('layouts.index')

<?php 
    //$_cat = $cat ?? 'Properties in Dubai';

    //$_for = $for ? 'for '.$for : '';

    $baseTitle = "Dubai's best pick of apartments, villas, townhouses & office";
    $pagetitle = $baseTitle;
?>


@section('title', $pagetitle )

@section('banner-slider')
<div class="section-banner" style="background:url('/img/banner-2.jpg')">
    <div class="container banner-content">

    </div>
</div>
@stop

@section('content')

<!-- <div id="map" class="mb-0 mt-0 seach-map"></div> -->

<section class="bg-white">
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/properties">Properties in Dubai</a></li>
        <?php
            if( isset( $cat ) && $cat != '%' ){
                ?>
                    <li class="breadcrumb-item"><a href="/{{ $cat }}-for-{{$for ?? ''}}-in-dubai">{{  str_replace('_', ' ', $cat) }}</a></li>
                <?php
            } else {}
        ?>

    <?php
        if( isset( $for ) && $for != '%'){
            if( isset( $cat ) && $cat != '%' ){
                ?>
                <li class="breadcrumb-item"><a href="/{{  $cat }}-for-{{$for ?? ''}}-in-dubai">for {{ $for ?? '' }} in Dubai</a></li>
            <?php
                
            } else {
                ?>
                <li class="breadcrumb-item"><a href="/property-for-{{$for ?? ''}}-in-dubai">for {{ $for ?? '' }}</a></li>
            <?php
            }
        }
    ?>

    <?php
        if( isset( $loc_name ) && $loc_name != '%' && $loc_name != ''){
            ?>
                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}">{{  str_replace('-', ' ', $loc_name) }}</a></li>
            <?php
        }
    ?>

    <?php
        if( isset( $sub_loc_name ) && $sub_loc_name != '%' && $sub_loc_name != $loc_name && $sub_loc_name != ''){
            ?>
                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}">{{  str_replace('-', ' ', $sub_loc_name) }}</a></li>
            <?php
        }
    ?>

    <?php
        if( isset( $loc_area_name ) && $loc_area_name != '%'){
            ?>
                <li class="breadcrumb-item"><a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}//{{ $loc_area_name }}">{{  str_replace('-', ' ', $loc_area_name) }}</a></li>
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
                    ?>Properties in Dubai<?php
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
                if( isset( $loc_area_name ) && $loc_area_name != '%'){
                    ?>
                        {{  str_replace('-', ' ', $loc_area_name) }}
                    <?php
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
                if( isset( $sub_loc_name ) && $sub_loc_name != '%' && $sub_loc_name != $loc_name){
                    ?>
                        {{  str_replace('-', ' ', $sub_loc_name) }}
                    <?php
                }
            ?>
        </h1>


        {!! $community_desc['community_desc'] ?? '' !!}
        <hr class="title-hr">

        <div class="custome-serach">
            @include('partial.custom-search')
        </div>

    </div>
</section>

<section>
    <div class="container">
        @if(count( $properties ) > 0)
            <div class="row row-cols-1 row-cols-md-3">
                @foreach( $properties as $property )
                    <div class="col mb-4">
                        @include('properties.item')
                    </div>
                @endforeach
            </div>
        @else
        <section>
            <h3>No Property result for your query</h3>
            <p>Please try a differnt keywords...</p>
        </section>
        @endif
        <div class="pagination-holder">
            {!! $properties->appends(request()->input())->links(); !!}
        </div>

        @if($pagecontents ?? '')
            <div class="card mt-5">
                <div class="card-body">
                    {!! $pagecontents['body'] !!}
                </div>
            </div>
        @endif
    </div>
</section>

@stop
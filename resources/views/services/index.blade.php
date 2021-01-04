@extends('layouts.index')

@section('title', 'AQUA Properties Services')

@section('banner-slider')
<div class="section-banner" style="background:url('../img/services-banner.jpg')">
    <div class="container banner-content">
    <h1>Real Estate Services</h1>
        <h2>by AQUA Properties</h2>
    </div>
</div>
@stop

@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/services">Services</a></li>
        </ol>
    </div>
</nav>


<section>
    <div class="container">
        <h3>Our Services</h3>
        <div class="row row-cols-1 row-cols-md-3">
        @foreach( $services as $service )
            <div class="col mb-4">
                @include('services.item')
            </div>
        @endforeach
        
        </div>
        <div class="pagination-holder">
            {{ $services->links() }}
        </div>
    </div>
</section>
@stop

<style>
    .header {
        padding:1.25rem;
    }
    .property-listing-title {
        text-transform: uppercase;
        font-size: 32px;
    }
    .breadcrumb li {
        text-transform: uppercase;
    }
    .breadcrumb li a{
        color: #808080;
    }
</style>    
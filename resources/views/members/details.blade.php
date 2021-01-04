@extends('layouts.index')

@section('title', $member->private_name )


@section('banner-slider')   
<div class="image-spacer-banner">
    <img src="../img/new-about-banner.jpg" alt="{{ $member->private_name }}">
</div>
@stop

@section('content')

    <section class="bg-white new-section-title">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-aqua-blue font-weight-normal">{{ $member->private_name }}</h1>
                    <h5>{{ $member->job_title }} at AQUA Properties</h5>
                </div>
                <div class="col-md-5">
                    <nav class="breadcrumb-holder">
                        <div class="container">
                            <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/team">Team</a></li>
            <li class="breadcrumb-item"><a href="/team/{{ $member->slug }}">{{ $member->private_name }}</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <hr class="title-hr">
        <div class="jumbotron text-center hoverable p-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="view overlay">
                        @if ($member->profile_picture)
                            <img src="{{ $member->profile_picture }}" class="no-scale-img " alt="{{ $member->private_name }}" />
                        @else
                            <img src="/{{ setting('admin.icon_image') }}" class="no-scale-img " alt="{{ $member->private_name }}" />
                        @endif
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 text-md-left">
                    <div class="card no-bg">
                        <div class="aqua-card card-body">

                            <ul class="list-group list-group-flush">
                                @if( $member->broker_number != '' )
                                    <li class="list-group-item">RERA No. <span class="float-right">{{ $member->broker_number }}</span></li>
                                @endif
                                @if( $member->mobile != '' )
                                    <li class="list-group-item">Mobile <span class="float-right">{{ $member->mobile }}</span></li>
                                @endif
                                    <li class="list-group-item">Contact <span class="float-right">971 4 518 7555</span></li>
                                @if( $member->email != '' )
                                    <li class="list-group-item">Email <span class="float-right">{{ $member->email }}</span></li>
                                @endif
                                @if( $member->languages != '' )
                                    <li class="list-group-item">Languages <span class="float-right">{{ $member->languages }}</span></li>
                                @else
                                    <li class="list-group-item">Language <span class="float-right">English</span></li>
                                @endif
                                @if( $member->locations != '' )
                                    <li class="list-group-item">Locations <span class="float-right">{{ $member->locations }}</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if( $member->description != '' )
                <h4 class="text-md-left mt-5">{{ $member->private_name }}</h4>
                <p class="font-weight-normal text-md-left mt-2">{!! $member->description !!}</p>
            @endif
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach( $agentProperties as $property )
                <div class="col mb-4">
                    @include('properties.item')
                </div>
            @endforeach
        </div>
        <div class="pagination-holder">
            {{ $agentProperties->links() }}
        </div>
    </div
</section>
@stop
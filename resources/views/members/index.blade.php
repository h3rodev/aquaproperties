@extends('layouts.index')

@section('title', 'Team AQUA Properties')

@section('banner-slider')   
<div class="image-spacer-banner">
<img src="../img/new-about-banner.jpg" alt="About AQUA Properties">
</div>
@stop

@section('content')
<section class="bg-white new-section-title">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-aqua-blue font-weight-normal">Meet Team AQUA Properties</h1>
                    <!-- <h5>Our Strength Lies In Diversity, Professionalism and Team Spirit</h5> -->
                </div>
                <div class="col-md-5">
                    <nav class="breadcrumb-holder">
                        <div class="container">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/about-us">Team AQUA Properties</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <hr class="title-hr">
            <h3>Choose Department</h3>
            <div class="filter-selection pb-5">
                <!-- <a class="btn aqua-btn-gray <?php if( isset($_GET['department']) && $_GET['department'] == 'management'){ echo 'active'; } ?>" href="?department=management" role="button">Management</a> -->
                <a class="btn aqua-btn-gray <?php if( isset($_GET['department']) && $_GET['department'] == 'sales'){ echo 'active'; } ?>" href="?department=sales" role="button">Sales</a>
                <a class="btn aqua-btn-gray <?php if( isset($_GET['department']) && $_GET['department'] == 'leasing'){ echo 'active'; } ?>" href="?department=leasing" role="button">Leasing</a>
                <a class="btn aqua-btn-gray <?php if( isset($_GET['department']) && $_GET['department'] == 'Off+Plan+Department'){ echo 'active'; } ?>" href="?department=Off+Plan+Department" role="button">Off Plan</a>
                <a class="btn aqua-btn-gray <?php if( isset($_GET['department']) && $_GET['department'] == 'international'){ echo 'international'; } ?>" href="?department=international" role="button">International</a>
            </div>

        <div class="row row-cols-1 row-cols-md-3">
        @foreach( $members as $member )
            <div class="col mb-4">
                <!-- Card -->
                <div class="card testimonial-card mb-5">

                    <!-- Background color -->
                    <div class="card-up aqua-gray"></div>

                    <!-- Avatar -->
                    <div class="avatar mx-auto white">
                        <a href="/team/{{ $member->slug }}">
                        @if ($member->profile_picture)
                            <img src="{{ $member->profile_picture }}" class="rounded-circle" alt="{{ $member->private_name }}" />
                        @else
                            <img src="/{{ setting('admin.icon_image') }}" class="rounded-circle" alt="{{ $member->private_name }}" />
                        @endif
                        </a>
                    </div>

                    <!-- Content -->
                    <div class="card-body">
                    <!-- Name -->
                    <h4 class="card-title text-aqua-blue">{{ $member->private_name }}</h4>
                    
       
                    <!-- Subtitle -->
    
                    <h6 class="font-weight">{{ $member->job_title }}</h6>
                    
                    <!-- Text -->
                    <p class="card-text">{{ $member->broker_number }}</p>

                    <!-- Facebook -->
                    <!-- <a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a> -->
                    <!-- Twitter -->
                    <!-- <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a> -->
                    <!-- Google + -->
                    <!-- <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a> -->

                    </div>

                </div>
            <!-- Card -->
            </div>
        @endforeach
        </div>

    </div>


</section>
@stop
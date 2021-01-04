@extends('layouts.index')

<?php 
    $pagetitle = $developer->seo_title ? $developer->seo_title : $developer->name .' community';
?>

@section('title', $pagetitle )

@section('banner-slider')
<div class="full-image-spacer" style="background:url('/{{ $developer->featured_image }}')">

    <div class="container banner-content">
    
        <div class="row">
            <div class="col-md-7">
                <h1>{{ $developer->name }}</h1>
                <h2>{{ $developer->sub_title }}</h2>
            </div>
            <div class="col-md-5">
                <div class="registration-form">
                    <h4>Register Your Interest</h4>
                    <form id='developerinquiry'>
                        <div class="form-group">
                            <input value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" name="name" type="text" class="form-control" id="name" aria-describedby="fullnamelHelp" placeholder="Enter Full Name" required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                        <input value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="required" aria-required="true">
                        </div>
                        <div class="form-group">
                        <input value="<?php echo isset($_GET['phone_number']) ? $_GET['phone_number'] : ''; ?>" name="phone_number" type="tel" class="form-control" id="phone_number" aria-describedby="phoneHelp" placeholder="Phone with country code" required="required" aria-required="true">
                        </div>
                        <small class="form-text text-muted">Please note that if the contact details entered are incorrect you will not be able to receive the project’s information. We respect your privacy and your contact details will not be passed on to any third-party companies.</small>

                        <input value="<?php echo isset($_GET['subject']) ? $_GET['subject'] : $pagetitle; ?>" name="subject" type="hidden" id="subject">
                        <input value="<?php echo isset($_GET['source']) ? $_GET['source'] : ''; ?>" name="source" type="hidden" id="source">
                        <input value="<?php echo isset($_GET['sub_source']) ? $_GET['sub_source'] : ''; ?>" name="sub_source" type="hidden" id="sub_source">
                        <input value="<?php echo isset($_GET['campaign']) ? $_GET['campaign'] : ''; ?>" name="campaign" type="hidden" id="campaign">
                        <input value="<?php echo isset($_GET['medium']) ? $_GET['medium'] : ''; ?>" name="medium" type="hidden" id="medium">
                        <input value="<?php echo isset($_GET['reference_number']) ? $_GET['reference_number'] : ''; ?>" name="reference_number" type="hidden" id="reference_number">
                        <input value="<?php echo isset($_GET['agent']) ? $_GET['agent'] : ''; ?>" name="agent" type="hidden" id="agent">

                        <button type="submit" class="btn aqua-btn-outline-gray">Register Now</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@stop


@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/real-estate-developers-in-dubai">Dubai Developers</a></li>
            <li class="breadcrumb-item"><a href="/real-estate-developers-in-dubai/{{ $developer->slug }}">{{ $developer->name }}</a></li>
        </ol>
    </div>
</nav>
<section>
    <div class="container">
    <img src="/{{ $developer->logo }}" alt="{{ $developer->name }}" class="developer-logo-image">
    {!! $developer->main_description !!}

    @php
        $brochure = explode(',' , $developer->brochure_url );
        $floor_plans = explode(',' , $developer->floor_plans_url );

        $brochureLink =  str_replace('"', '', str_replace('[{"download_link":"','',$brochure[0]) );

        $floowPlanLink = str_replace('"', '', str_replace('[{"download_link":"','',$floor_plans[0]) );
    @endphp
    
    @if( $brochureLink != '[]' || $floowPlanLink != '[]' )
    <div class="row">
        @if( $brochureLink != '[]' )
        <div class="col-md-3">
            <a href="/{{ $brochureLink }}" target="_blank" class="btn aqua-btn-outline-gray waves-effect waves-light">Download Brochure</a>
        </div> 
        @endif
        @if( $floowPlanLink != '[]' )
        <div class="col-md-3">
            <a href="/{{ $floowPlanLink }}" target="_blank" class="btn aqua-btn-outline-gray waves-effect waves-light">Download Floor Plans</a>
        </div>
        @endif
    </div>
    @endif
    </div>
</section>

@if($developer->features != '')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $developer->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">    
                {!! $developer->features !!}
            </div>
        </div>

    </div>
</section>
@endif

@if($developer->project_details != '')
    <section class="aqua-white">
        <div class="container">
        {!! $developer->project_details !!}
        </div>
    </section>
@endif

@if($developer->description != '')
<section>
    <div class="container">
    {!! $developer->description !!}
    </div>
</section>
@endif


@if( count($communities) > 0 )
    <section>
        <div class="container">
            @if( count($communities) > 1 )
                <h3>Off Plan Communities by {{ $developer->name}} </h3>
                <span class="spacer-80"></span>
            @else
                <h3>Off Plan Community by {{ $developer->name}} </h3>
                <span class="spacer-80"></span>
            @endif
            <div class="row">
                @foreach($communities as $community)
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <a href="/off-plan-properties-dubai/{{ $community->slug }}">
                                <img class="card-img-top" src="/{{ $community->featured_image }}" alt="{{ $community->area_name }}">
                            </a>
                            <div class="off-plan card-body">
                                <h5 class="card-title">{{ $community->area_name }}</h5>
                                <!-- @if($community->sub_title)
                                    <h6 class="card-text">{{ $community->sub_title }}</h6>
                                @endif -->
                                <p class="card-text">by {{ $community->developer }}</p>
                                <a class="btn aqua-btn-outline-gray" href="/off-plan-properties-dubai/{{ $community->slug }}">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif



<section>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="contact-us-holder">
                    <iframe
                        width="100%"
                        height="450"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsF0s-gHbwok2megHTkehrb5QWMw99z70&q={{ $developer->location }}" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-5">
                <div class="registration-form">
                    <h4>Register Your Interest</h4>
                    <form id="footerinquiry">
                        <div class="form-group">
                            <input value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" name="name" type="text" class="form-control" id="fname" aria-describedby="fullnamelHelp" placeholder="Enter Full Name" required="required" aria-required="true">                        
                        </div>
                        <div class="form-group">
                            <input value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" name="email" type="email" class="form-control" id="femail" aria-describedby="emailHelp" placeholder="Enter email" required="required" aria-required="true">                        
                        </div>
                        <div class="form-group">
                            <input value="<?php echo isset($_GET['phone_number']) ? $_GET['phone_number'] : ''; ?>" name="phone_number" type="tel" class="form-control" id="fphone_number" aria-describedby="phoneHelp" placeholder="Phone with country code" required="required" aria-required="true">                        
                        </div>
                        <small class="form-text text-muted">Please note that if the contact details entered are incorrect you will not be able to receive the project’s information. We respect your privacy and your contact details will not be passed on to any third-party companies.</small>
                        
                        <input value="<?php echo isset($_GET['subject']) ? $_GET['subject'] : $pagetitle; ?>" name="subject" type="hidden" id="fsubject">
                        <input value="<?php echo isset($_GET['source']) ? $_GET['source'] : ''; ?>" name="source" type="hidden" id="fsource">
                        <input value="<?php echo isset($_GET['sub_source']) ? $_GET['sub_source'] : ''; ?>" name="sub_source" type="hidden" id="fsub_source">
                        <input value="<?php echo isset($_GET['campaign']) ? $_GET['campaign'] : ''; ?>" name="campaign" type="hidden" id="fcampaign">
                        <input value="<?php echo isset($_GET['medium']) ? $_GET['medium'] : ''; ?>" name="medium" type="hidden" id="fmedium">
                        <input value="<?php echo isset($_GET['reference_number']) ? $_GET['reference_number'] : ''; ?>" name="reference_number" type="hidden" id="freference_number">
                        <input value="<?php echo isset($_GET['agent']) ? $_GET['agent'] : ''; ?>" name="agent" type="hidden" id="fagent">

                        <button type="submit" class="btn aqua-btn-outline-gray">Register Now</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">
    jQuery('#developerinquiry').on('submit',function(event){
        event.preventDefault();

        let name = jQuery('#name').val();
        let email = jQuery('#email').val();
        let phone_number = jQuery('#phone_number').val();
        let subject = jQuery('#subject').val();
        let message = jQuery('#message').val();

        let source = jQuery('#source').val();
        let sub_source = jQuery('#sub_source').val();
        let campaign = jQuery('#campaign').val();
        let medium = jQuery('#medium').val();
        let reference_number = jQuery('#reference_number').val();
        let agent = jQuery('#agent').val();

        jQuery.ajax({
            url: "/form-submit",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                mobile_number:phone_number,
                message:message,
                subject:subject ? subject : $pagetitle,
                source:source ? source : 'Organic',
                sub_source:sub_source ? sub_source : 'Developer Page',
                campaign:campaign ? campaign : 'Generic',
                medium:medium ? medium : 'Website',
                reference_number:reference_number,
                agent:agent,
            },
            success:function(response){
                location.href = '/thank-you/?name='+name+'&subject='+subject;
                console.log(response);
            },
        });
    });


    jQuery('#footerinquiry').on('submit',function(event){
        event.preventDefault();

        let name = jQuery('#fname').val();
        let email = jQuery('#femail').val();
        let phone_number = jQuery('#fphone_number').val();
        let subject = jQuery('#fsubject').val();
        let message = jQuery('#fmessage').val();

        let source = jQuery('#fsource').val();
        let sub_source = jQuery('#fsub_source').val();
        let campaign = jQuery('#fcampaign').val();
        let medium = jQuery('#fmedium').val();
        let reference_number = jQuery('#freference_number').val();
        let agent = jQuery('#fagent').val();

        jQuery.ajax({
            url: "/form-submit",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                mobile_number:phone_number,
                message:message,
                subject:subject ? subject : $pagetitle,
                source:source ? source : 'Organic',
                sub_source:sub_source ? sub_source : 'Developer Page',
                campaign:campaign ? campaign : 'Generic',
                medium:medium ? medium : 'Website',
                reference_number:reference_number,
                agent:agent,
            },
            success:function(response){
                location.href = '/thank-you/?name='+name+'&subject='+subject;
                console.log(response);
            },
        });
    });
</script>
@stop
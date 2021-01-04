@extends('layouts.index')

<?php 
    $pagetitle = $offplan->seo_title;
?>

@section('title', $pagetitle )

@section('banner-slider')
<div class="full-image-spacer" style="background:url('/{{ $offplan->featured_image }}')">
    <div class="container banner-content">
    
        <div class="row">
            <div class="col-md-7">
                <h1>{{ $offplan->project_name }}</h1>
                <h2>{{ $offplan->sub_title }}</h2>
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
            <li class="breadcrumb-item"><a href="/off-plan-properties-dubai">Off-plan communities in Dubai</a></li>
            <li class="breadcrumb-item"><a href="/off-plan-properties-dubai/{{ $offplan->slug }}">{{ $offplan->project_name }}</a></li>
        </ol>
    </div>
</nav>
<section>
    <div class="container">
    <h2>{{ $offplan->project_name }}</h2>
    {!! $offplan->main_description !!}

    @php
        $brochure = explode(',' , $offplan->brochure_url );
        $floor_plans = explode(',' , $offplan->floor_plans_url );

        $brochureLink =  str_replace('"', '', str_replace('[{"download_link":"','',$brochure[0]) );

        $floowPlanLink = str_replace('"', '', str_replace('[{"download_link":"','',$floor_plans[0]) );
    @endphp
    
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

    </div>
</section>


@if($offplan->features != '')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $offplan->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">    
                {!! $offplan->features !!}
            </div>
        </div>

    </div>
</section>
@endif

@if($offplan->project_details != '')
    <section>
        <div class="container">
        {!! $offplan->project_details !!}
        </div>
    </section>
@endif

@if($offplan->gallery != '')
    <section>
        <div class="container">
            <h3>Gallery</h3>
            <div class="row">
                @foreach( explode(',', str_replace('"', '',  str_replace(']', '', str_replace('[', '', $offplan->gallery ) ) ) ) as $gallery )
                    <a href="https://aquaproperties.app/{{  $gallery }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 ligthbox-holder">
                        <img class="img-thumbnail" src="https://aquaproperties.app/{{  $gallery }}" alt="{{ $offplan->project_name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif

@if($offplan->floor_plans != '')
    <section>
        <div class="container">
            <h3>Floor Plans</h3>
            <div class="row">
                @foreach( explode(',', str_replace('"', '',  str_replace(']', '', str_replace('[', '', $offplan->floor_plans ) ) ) ) as $floor_plan )
                    <a href="https://aquaproperties.app/{{  $floor_plan }}" data-toggle="lightbox" data-gallery="floor-plans" class="col-md-4 ligthbox-holder">
                        <img class="img-thumbnail" src="https://aquaproperties.app/{{  $floor_plan }}" alt="{{ $offplan->project_name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif


@if($offplan->description != '')
<section>
    <div class="container">
    {!! $offplan->description !!}
    </div>
</section>
@endif

@if($offplan->payment_plan != '')
<section>
    <div class="container">
    {!! $offplan->payment_plan !!}
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
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsF0s-gHbwok2megHTkehrb5QWMw99z70&q={{ $offplan->location }}" allowfullscreen>
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
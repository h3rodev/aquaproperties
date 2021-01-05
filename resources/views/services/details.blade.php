@extends('layouts.index')

@section('title', $service->title )

@section('banner-slider')
<div class="section-banner"  style="background:url('/{{ $service->featured_image }}')">
    <div class="container banner-content">

    </div>
</div>
@stop

@section('content')

<section class="bg-white new-section-title">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-aqua-blue font-weight-normal h1-section-title">{{ $service->title }}</h1>
                <h5>{{ $service->sub_title }}</h5>
            </div>
            <div class="col-md-5">
                <nav class="breadcrumb-holder">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/services/">Services</a></li>
                            <li class="breadcrumb-item"><a href="{{ $service->slug }}">{{ $service->title }}</a></li>
                        </ol>
                </nav>
            </div>
        </div>
        <hr class="title-hr">
        {!! $service->body !!}
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="contact-us-holder">
                    <iframe
                        width="100%"
                        height="450"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsF0s-gHbwok2megHTkehrb5QWMw99z70&q=AQUA Properties Head Office" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-5">
                <div class="registration-form">
                    <h4>Register Your Interest</h4>
                    <p>To receive full details about AQUA Properties {{ $service->title }} Services, simply complete the form below</p>
                    <form id="contactForm">
                        <div class="form-group">
                            <input value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" name="name" type="text" class="form-control" id="name" aria-describedby="fullnamelHelp" placeholder="Enter Full Name" required="required" aria-required="true">
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="required" aria-required="true">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input value="<?php echo isset($_GET['phone_number']) ? $_GET['phone_number'] : ''; ?>" name="phone_number" type="tel" class="form-control" id="phone_number" aria-describedby="phoneHelp" placeholder="Phone with country code" required="required" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" type="texarea" class="form-control" id="message" placeholder="Message" rows="3"><?php echo $service->title. ' Inquiry'; ?></textarea>
                        </div>
                        
                        
                        <small class="form-text text-muted">Please note that if the contact details entered are incorrect you will not be able to receive the project’s information. We respect your privacy and your contact details will not be passed on to any third-party companies.</small>

                        <input value="<?php echo $service->title. ' Inquiry'; ?>" name="subject" type="hidden" id="subject">
                        <input value="<?php echo isset($_GET['source']) ? $_GET['source'] : ''; ?>" name="source" type="hidden" id="source">
                        <input value="<?php echo isset($_GET['sub_source']) ? $_GET['sub_source'] : ''; ?>" name="sub_source" type="hidden" id="sub_source">
                        <input value="<?php echo isset($_GET['campaign']) ? $_GET['campaign'] : ''; ?>" name="campaign" type="hidden" id="campaign">
                        <input value="<?php echo isset($_GET['medium']) ? $_GET['medium'] : ''; ?>" name="medium" type="hidden" id="medium">
                        <input value="<?php echo isset($_GET['reference_number']) ? $_GET['reference_number'] : ''; ?>" name="reference_number" type="hidden" id="reference_number">
                        <input value="<?php echo isset($_GET['agent']) ? $_GET['agent'] : ''; ?>" name="agent" type="hidden" id="agent">
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn aqua-btn-blue">Inquire Now</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">
    jQuery('#contactForm').on('submit',function(event){
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
                subject:subject,
                source:source ? source : 'Organic',
                sub_source:sub_source ? sub_source : 'Services',
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

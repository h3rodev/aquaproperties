@extends('layouts.index')

<?php 
    $pagetitle = $community->seo_title ? $community->seo_title : $community->name .' Community Guide';
?>

@section('title', $pagetitle )


@section('banner-slider')
<div class="image-spacer-banner">
    <img src="/{{ $community->featured_image }}" alt="{{ $pagetitle }}">
</div>
@stop

@section('content')


<section class="bg-white new-section-title">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-aqua-blue font-weight-normal">{{ $community->name }}</h1>
                @if($community->master_developer != '')
                    <h5>{{ $community->master_developer }} Community Guide</h5>
                @endif
            </div>
            <div class="col-md-4">
                <nav class="breadcrumb-holder">
                    <div class="container">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/dubai-communities">Dubai Communities</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $community->name }}</a></li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
        <hr class="title-hr">

        <div class="row">
            <div class="col-md-6">
                <article>
                    <h4 class="text-aqua-blue">General Description</h4>
                    <span class="spacer-30"></span>
                    <table>
                        <tbody>
                            <tr>
                                <td>Community Name</td>
                                <td>{{ $community->name }}</td>
                            </tr>
                            <tr>
                                <td>Master Developer</td>
                                <td>{{ $community->master_developer }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <span class="spacer-30"></span>
                    @if($community->description != '')
                        {!! $community->description !!}
                    @endif
                </article>
                @if($community->location_overview != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Location Overview</h4>
                    <span class="spacer-10"></span>
                    {!! $community->location_overview !!}
                </article>
                @endif

                @if($community->sub_communities != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Sub Communities</h4>
                    <span class="spacer-10"></span>
                    {!! $community->sub_communities !!}
                </article>
                @endif

                @if($community->educational_institutions != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Educational Institutions</h4>
                    <span class="spacer-10"></span>
                    {!! $community->educational_institutions !!}
                </article>
                @endif

                @if($community->healthcare_institutions != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Healthcare Institutions</h4>
                    <span class="spacer-10"></span>
                    {!! $community->healthcare_institutions !!}
                </article>
                @endif

                @if($community->entertainment_leisure != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Entertainment & Leisure</h4>
                    <span class="spacer-10"></span>
                    {!! $community->entertainment_leisure !!}
                </article>
                @endif

                @if($community->hospitality != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Hospitality</h4>
                    <span class="spacer-10"></span>
                    {!! $community->hospitality !!}
                </article>
                @endif

                @if($community->public_transport != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Public Transport</h4>
                    <span class="spacer-10"></span>
                    {!! $community->public_transport !!}
                </article>
                @endif

                @if($community->status != '')
                <article>
                    <span class="spacer-30"></span>
                    <h4 class="text-aqua-blue">Status</h4>
                    <span class="spacer-10"></span>
                    {!! $community->status !!}
                </article>
                @endif
                
            </div>
            <div class="col-md-6">
                @if($community->description != '')
                    <img class="img-fluid no-scale-img" src="/{{ $community->main_image }}" alt="{{ $community->name }}">
                @endif
            </div>
        </div>
        
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
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBsF0s-gHbwok2megHTkehrb5QWMw99z70&q={{ $community->map_location }}" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-5">
                <div class="registration-form">
                    <h4>Contact AQUA Properties</h4>
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
                            <textarea name="message" type="texarea" class="form-control" id="message" placeholder="Message" rows="3"><?php echo isset($_GET['message']) ? $_GET['message'] : $pagetitle . ' Inquiry '; ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn aqua-btn-outline-gray">Send</button>
                            </div>
                            <div class="col"></div>
                        </div>
                        
                        <small class="form-text text-muted">Please note that if the contact details entered are incorrect you will not be able to receive the project’s information. We respect your privacy and your contact details will not be passed on to any third-party companies.</small>

                        <input value="<?php echo isset($_GET['subject']) ? $_GET['subject'] : $pagetitle; ?>" name="subject" type="hidden" id="subject">
                        <input value="<?php echo isset($_GET['source']) ? $_GET['source'] : ''; ?>" name="source" type="hidden" id="source">
                        <input value="<?php echo isset($_GET['sub_source']) ? $_GET['sub_source'] : ''; ?>" name="sub_source" type="hidden" id="sub_source">
                        <input value="<?php echo isset($_GET['campaign']) ? $_GET['campaign'] : ''; ?>" name="campaign" type="hidden" id="campaign">
                        <input value="<?php echo isset($_GET['medium']) ? $_GET['medium'] : ''; ?>" name="medium" type="hidden" id="medium">
                        <input value="<?php echo isset($_GET['reference_number']) ? $_GET['reference_number'] : ''; ?>" name="reference_number" type="hidden" id="reference_number">
                        <input value="<?php echo isset($_GET['agent']) ? $_GET['agent'] : ''; ?>" name="agent" type="hidden" id="agent">
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
                subject:subject ? subject : $pagetitle,
                source:source ? source : 'Organic',
                sub_source:sub_source ? sub_source : 'Contact Us',
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
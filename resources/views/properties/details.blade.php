@extends('layouts.index')

@php
$pagetitle = $property['title']. ' ' .$property['category_name']. ' for ' .$property['property_for'].' in ' . str_replace('-', ' ', ucwords( $property['sub_loc_name'] ) ). ', ' .str_replace('-', ' ', ucwords( $property['loc_name'] ) );
@endphp

@section('title', $pagetitle )

@section('banner-slider')
<div class="section-banner" style="background:url('{{ explode("|",$property['images_path'] )[0] }}')">
       
    <div class="container banner-content">
        <span class="spacer-100"></span>
        <h1 class="main-title">{!! $property['title'] !!}</h1>
        <h2 class="main-title">{{ str_replace('-', ' ', ucwords( $property['sub_loc_name'] ) ) }}, {{ str_replace('-', ' ', ucwords( $property['loc_name'] ) ) }}</h2>
    </div>
    <div class="slideroverlay"></div> 
</div>
@stop


@section('content')
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

<div class="property-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="property-card property-detail">
                    <span class="spacer-50"></span>
                    <h4 class="listing-location">
                    <?php
                        if( isset( $loc_name ) && $loc_name != '%' && $loc_name != ''){
                            ?>
                                <a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}">{{  str_replace('-', ' ', $loc_name) }}</a>
                            <?php
                        }
                    ?>

                    <?php
                        if( isset( $sub_loc_name ) && $sub_loc_name != '%' && $sub_loc_name != $loc_name && $sub_loc_name != ''){
                            ?>
                                <a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}">{{  str_replace('-', ' ', $sub_loc_name) }}</a>
                            <?php
                        }
                    ?>

                    <?php
                        if( isset( $loc_area_name ) && $loc_area_name != '%'){
                            ?>
                                <a href="/{{  $cat ?? 'properties'}}-for-{{$for ?? ''}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}//{{ $loc_area_name }}">{{  str_replace('-', ' ', $loc_area_name) }}</a>
                            <?php
                        }
                    ?>
                    </h4>
                    <h5 class="listing-card-price">AED {{ number_format($property['price']) }} <?php echo $property['property_for'] == 'rent' ? '/ '.$property['frequency'] : ''; ?></h5>
                    
                    <div class="property-details-gallery mt-3">
                        <div class="row">
                            <div class="col-md-9 main-gallery">
                                <div>
                                    <a href="{{ explode("|",$property['images_path'] )[0] }}" data-toggle="lightbox" data-gallery="gallery"> <image class="responsive-img img-fluid" src={{ explode("|",$property['images_path'] )[0] }} alt={!! $property['title'] !!} /></a>
                                </div>
                            </div>

                            <div class="col-md-3 side-gallery">

                            <?php $count = 0; ?>

                            @foreach( explode("|",$property['images_path'] ) as $gallery_item )

                                <?php if($count == 3) break; ?>
                                    <a href="{{ $gallery_item  }}" data-toggle="lightbox" data-gallery="gallery"> <image class="img-fluid" src={{ $gallery_item }} alt={!! $property['title'] !!} /></a>
                                <?php $count++; ?>

                                @endforeach
                            </div>
                            @foreach( explode("|",$property['images_path'] ) as $gallery_item )
                                @if( strpos( $gallery_item, '.jpg' ) !== false )
                                    <a style="display:none;" href="{{ $gallery_item }}" data-toggle="lightbox" data-gallery="gallery"> <image class="img-fluid" src={{ $gallery_item }} alt={!! $property['title'] !!} /></a>
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <ul class="item-details details-list mb-3">
                        <li class="details-item"><span>{{ substr($property['category_name'], 0, -1) }}</span></li>
                        <li class="details-item"><span>For {{ $property['property_for'] }}</span></li>
                        @if($property['beds'] == 1)
                            <li class="details-item"><span class="details-item-name">{{ $property['beds'] }} bed</span></li>
                        @elseif($property['beds'] >= 2)
                            <li class="details-item"><span class="details-item-name">{{ $property['beds'] }} beds</span></li>
                            @elseif($property['beds'] == 0)
                            <li class="details-item"><span class="details-item-name">Studio</span></li>
                        @else
                        @endif
                        
                        @if($property['baths'] == 1)
                            <li class="details-item"><span class="details-item-name">{{ $property['baths'] }} baths</span></li>
                        @elseif($property['baths'] >= 2)
                            <li class="details-item"><span class="details-item-name">{{ $property['baths'] }} baths</span></li>
                        @else
                        @endif

                        @if($property['build_up_area'])
                            <li class="details-item"><span class="details-item-name">{{ $property['build_up_area'] }} sqft</span></li>
                        @endif

                        @if($property['view'])
                            <li class="details-item"><span class="details-item-name">{!! str_replace('view', '', $property['view']) !!} view</span></li>
                        @endif
                        
                        <li class="details-item"><span class="details-item-name">Ref: #{{ $property['reference'] }}</span></li>
                    </ul>
                    <hr>
                    <div class="property-details">                        
                        <h5 class="listing-location">Property description</h5>
                        <div class="property-overview">{!! str_replace('.','<li>', $property['description'] ) !!}</div>
                    </div>
                    <hr>
                    <div class="ameninties-section">
                        <h5 class="listing-location">Amenities</h5>
                            <ul class="item-details amenities-list amenities-list-column ">
                                @foreach( explode("|", $property['residential_amenities'] ) as $amenity )
                                    <li class="amenity-item-dot"><span class="amenity-item-name">{{ $amenity }}</span></li>
                                @endforeach
                            </ul>
                        <hr />
                    </div>

                    <div class="ameninties-section">
                        <h5 class="listing-location">Features</h5>
                            <ul class="item-details amenities-list amenities-list-column">
                                @foreach( explode("|", $property['residential_features'] ) as $amenity )
                                    <li class="amenity-item-dot"><span class="amenity-item-name">{{ $amenity }}</span></li>
                                @endforeach
                            </ul>
                    </div>

                    <div class="property-map pt-4 mb-4">
                        <h5 class="listing-location">Location</h5>
                        <div id="map"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="property-sidebar">
                    <div class="card testimonial-card">

                        <!-- Background color -->
                        <div class="card-up aqua-blue"></div>

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

                        <div class="card-body">
                            <h4 class="card-title">{{ $member->private_name }}</h4>
                            <p>{{ $member->job_title }}</p>
                            <hr>
                        </div>

                        <div class="card-footer">
                            <!-- <a type="button" class="btn-floating btn-fb">BRN: {{ $member->broker_number }}</a> -->
                            @if( $property['property_for'] == 'sale' )
                                <a type="button" class="btn-floating btn btn-fb" target="_blank" href="https://wa.me/971564096610?text=Hi! I saw a property on your website with reference %23{{ $property['reference'] }}. I would like to know if it's still available for {{ $property['property_for'] }}?"><i class="fab fa-whatsapp"></i></a>
                            @else
                                <a type="button" class="btn-floating btn btn-fb" target="_blank" href="https://wa.me/971569321557?text=Hi! I saw a property on your website with reference %23{{ $property['reference'] }}. I would like to know if it's still available for {{ $property['property_for'] }}?"><i class="fab fa-whatsapp"></i></a>
                            @endif
                            
                            <a type="button" class="btn-floating btn btn-phone"><i class="fas fa-phone"></i></a>
                            <a type="button"
                            class="btn-small btn inquiry-btn" 
                            href="#property-inquiry-dropdown" 
                            data-toggle="collapse"
                            aria-expanded="true">Arrange a viewing</a>
                            
                            <a type="button" href="/team/{{ $member->slug }}" class="btn-small btn">Listings</a>
                        </div>
                        
                        <div class="card-body collapse text-left pb-4 aqua-gray-light show" id="property-inquiry-dropdown">
                            <h5 class="listing-card-price">I am just a click away! Just fill in your details below.</h5>
                            <hr>
                            <form id="propertyinquiry">
                                <div class="form-group">
                                <input value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" name="name" type="text" class="form-control" id="name" aria-describedby="fullnamelHelp" placeholder="Enter Full Name" required="required" aria-required="true">
                                </div>
                                <div class="form-group">
                                <input value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="required" aria-required="true">
                                </div>
                                <div class="form-group">
                                <input value="<?php echo isset($_GET['phone_number']) ? $_GET['phone_number'] : ''; ?>" name="phone_number" type="tel" class="form-control" id="phone_number" aria-describedby="phoneHelp" placeholder="Phone with country code" required="required" aria-required="true">
                                </div>

                                <input type='text' class="form-control" id='daypicker' name='daypicker' placeholder="Pick your preferred date and time"/>

                                <small id="emailHelp" class="form-text text-muted mb-3">We'll never share your information with anyone else.</small>

                                <input value="<?php echo isset($_GET['subject']) ? $_GET['subject'] : $pagetitle; ?>" name="subject" type="hidden" id="subject">
                                <input value="<?php echo isset($_GET['source']) ? $_GET['source'] : ''; ?>" name="source" type="hidden" id="source">
                                <input value="<?php echo isset($_GET['sub_source']) ? $_GET['sub_source'] : ''; ?>" name="sub_source" type="hidden" id="sub_source">
                                <input value="<?php echo isset($_GET['campaign']) ? $_GET['campaign'] : ''; ?>" name="campaign" type="hidden" id="campaign">
                                <input value="<?php echo isset($_GET['medium']) ? $_GET['medium'] : ''; ?>" name="medium" type="hidden" id="medium">
                                <input value="<?php echo $property['reference']; ?>" name="reference_number" type="hidden" id="reference_number">
                                <input value="<?php echo $member->private_name; ?>" name="agent" type="hidden" id="agent">
                                <input value="<?php echo $property['assigned_to_reference']; ?>" name="agentid" type="hidden" id="agentid">

                                <button type="submit" class="custom-btn btn btn-primary aqua-blue btn-block">Book now</button>
                            </form>
                        </div>
                        
                    </div>

                    <div class="selections-holder mb-4" style="background-image: url(/img/luxury-cover-image-1.jpg);">
                        <a href="#">
                            <img class="responsive-img" src="/img/svg/the-selection-logo-white.svg" alt="">
                        </a>
                        <div class="slideroverlay"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="featured-properties pt-6 pb-6 aqua-gray-light">
        <div class="container">
            <h3>Similar Properties</h3>
            <div class="similar-properties-slider">
                @foreach($simpPoperties as $property)
                    @include('properties.item')
                @endforeach
            </div>
        </div>
    </div>

</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


<script>
    function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
    center: {
        lat:  {{ $property['loc_latitude'] }}, 
        lng: {{ $property['loc_longitude'] }} 
    },
    zoom: 14,
    styles: [
        {elementType: 'geometry', stylers: [{color: '#f5f5f5'}]},
        {elementType: 'labels.text.stroke', stylers: [{visibility: "off"}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#e5e1919195e5'}]},
        {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{color: '#808080'}]
        },
        {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#ffffff'}]
        },
        {
        featureType: 'road',
        elementType: 'geometry.stroke',
        stylers: [{color: '#f5f5f5'}]
        },
        {
        featureType: 'road',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{color: '#ffffff'}]
        },
        {
        featureType: 'road.highway',
        elementType: 'geometry.stroke',
        stylers: [{visibility: "off"}]
        },
        {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'transit',
        elementType: 'geometry',
        stylers: [{color: '#f5f5f5'}]
        },
        {
        featureType: 'transit.station',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#e2e2e2'}]
        },
        {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#191919'}]
        },
        {
        featureType: 'water',
        elementType: 'labels.text.stroke',
        stylers: [{color: '#808080'}]
        },
        {
        featureType: "poi.business",
        stylers: [{ visibility: "off" }]
        },
        {
        featureType: "transit",
        elementType: "labels.icon",
        stylers: [{ visibility: "off" }]
        }
    
    ]

    });

    var marker = new google.maps.Marker({
        position: {
            lat:  {{ $property['loc_latitude'] }}, 
            lng: {{ $property['loc_longitude'] }} 
        },
        map: map,
        title: '{{ $property['title'] }}',
        icon: '/img/map/single-family-home-map-icon.png'
    });
    }
</script>

<script type="text/javascript">
    jQuery('#propertyinquiry').on('submit',function(event){
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
        let agentid = jQuery('#agentid').val();
        let _daypicker = jQuery('#daypicker').val();

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
                sendToRex();
                // location.href = '/thank-you/?name='+name+'&subject='+subject;
                // console.log(response);
            },
        });
        function sendToRex() {
            jQuery.ajax({
                url: "https://api.rexcrm.com/leads",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    'name':name,
                    'email':email,
                    'mobile':phone_number,
                    'country': 'United Arab Emirates',
                    subject:subject ? subject : $pagetitle,
                    'source':source ? source : 'Organic',
                    'sub_source':sub_source ? sub_source : 'Website Listing',
                    'campaign':campaign ? campaign : 'Generic',
                    'medium':medium ? medium : 'Website',
                    'listing_reference':reference_number,
                    'agent_reference':agentid,
                    'notes': 'Would like to book a booking on '+ _daypicker
                },
                success:function(response){
                    location.href = '/thank-you/?name='+name+'&subject='+subject;
                    console.log(response);
                },
            });
        }

    });
</script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAASCnNDb_7JnYj4YKICOKikkzICRSxej8&callback=initMap"></script>
@stop
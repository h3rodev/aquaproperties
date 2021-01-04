@extends('layouts.index')

@php
$pagetitle = $property['title']. ' ' .$property['category_name']. ' for ' .$property['property_for'].' in ' . $property['sub_loc_name']. ', ' .$property['loc_name'];
@endphp

@section('title', $pagetitle )

@section('content')
<nav class="breadcrumb-holder">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            @if($cat ?? 'properties')
                <li class="breadcrumb-item"><a href="/the-selection/">The Selection by AQUA Properties</a></li>
            @endif
            @if($for ?? '')
                <li class="breadcrumb-item"><a href="/the-selection/{{  $cat ?? 'properties'}}-for-{{$for}}-in-dubai">{{  $cat ?? 'properties'}} for {{ $for }} in dubai</a></li>
            @endif
            
            @if($loc_name ?? '')
                <li class="breadcrumb-item"><a href="/the-selection/{{  $cat ?? 'properties'}}-for-{{$for}}-in-dubai-{{ $loc_name }}">{{  str_replace('-', ' ', $loc_name) }}</a></li>
            @endif

            @if($sub_loc_name ?? '')
                <li class="breadcrumb-item"><a href="/the-selection/{{  $cat ?? 'properties'}}-for-{{$for}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}">{{  str_replace('-', ' ', $sub_loc_name) }}</a></li>
            @endif
            @if($property['reference'] ?? '')
                <li class="breadcrumb-item"><a href="/the-selection/{{  $cat ?? 'properties'}}-for-{{$for}}-in-dubai-{{ $loc_name }}/{{ $sub_loc_name }}/{{  $property['reference'] }}">{{ $property['reference'] }}</a></li>
            @endif
        </ol>
    </div>
</nav>

<div class="property-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="property-card">
                    
                    <h4 class="listing-location">{{ str_replace('-', ' ', ucwords( $property['sub_loc_name'] ) ) }}, {{ str_replace('-', ' ', ucwords( $property['loc_name'] ) ) }}</h4>
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

                        <div class="card-up aqua-blue"></div>

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
                            <a type="button" class="btn-floating btn-fb">BRN: {{ $member->broker_number }}</a>
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
                            aria-expanded="true">Inquire</a>
                            
                            <a type="button" href="/team/{{ $member->slug }}" class="btn-small btn">View Listings</a>
                        </div>
                        <div class="card-body collapse text-left pb-4 aqua-white show" id="property-inquiry-dropdown">
                            <h5 class="listing-card-price">I am just a click away! Just fill in your details below.</h5>
                            <hr>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="phone" placeholder="Enter Phone">
                                </div>
                                <small id="emailHelp" class="form-text text-muted mb-3">We'll never share your information with anyone else.</small>
                                <button type="submit" class="custom-btn btn btn-primary aqua-black btn-block">Submit</button>
                            </form>
                        </div>
                        
                    </div>

                    <div class="selections-holder mt-4 mb-4" style="background-image: url(/img/luxury-cover-image-1.jpg);">
                        <a href="/the-selection/"><img class="responsive-img" src="/img/svg/the-selection-logo-white.svg" alt=""></a>
                        <div class="slideroverlay"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="featured-properties pt-4 pb-4 aqua-gray-light">
        <div class="container">
            <h5 class="listing-location">Similar Properties</h5>
            <div class="similar-properties-slider">
                @foreach($simpPoperties as $property)
                    @include('properties.item')
                @endforeach
            </div>
        </div>
    </div>

</div>
@stop



<style>

.amenity-item span {
    font-size: 14px !important;
}

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

.custome-video-bg {
    height: 250px !important;
    margin-bottom: 20px;
}

.card-up.aqua-blue {
    background-color: #191919 !important;
}

.amenity-item-dot::before{
    content: "■ ";
    color: #808080 !important;
}

.custom-btn:hover {
    background-color: #808080 !important;
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
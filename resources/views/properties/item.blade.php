@if($property['is_latest'] ==1)
<div class="property-item-card is-latest">
@else
<div class="property-item-card">
@endif

    @if($property['is_featured'] == 1)
        <span class="aqua-blue custom-badge badge badge-pill badge-primary">Featured</span>
    @endif
    @if($property['is_latest'] ==1)
        <span class="property-for aqua-blue custom-badge badge badge-pill badge-primary">Latest</span>
    @endif
    <div class="gallery" aria-live="polite">
        @php 
            $gallery_items = explode("|",$property['images_path'] ); 
        @endphp
        <div><a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai-{{ $property['loc_name'] }}/{{ $property['sub_loc_name'] }}/{{ $property['loc_area_name'] }}/ref-{{ strtolower( $property['reference'] ) }}"><image class="img-fluid" src={{ $gallery_items[0] }} alt={!! $property['title'] !!} /></a></div>
    </div>

    <div class="card-body">
        <ul class="details-list">
            <li class="details-item"><a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai/"><span>{{ str_replace('_', ' ', $property['category_name'] ) }}</span></a></li>
            @if($property['beds'] == 0)
                <li class="details-item"><span class="details-item-name">studio</span></li>
            @elseif($property['beds'] == 1)
                <li class="details-item"><span class="details-item-name">{{ $property['beds'] }} bed</span></li>
            @else
                <li class="details-item"><span class="details-item-name">{{ $property['beds'] }} beds</span></li>
            @endif
            
            @if($property['baths'] >= 2 )
                <li class="details-item"><span class="details-item-name">{{ $property['baths'] }} baths</span></li>
            @elseif($property['baths'] == 1)
                <li class="details-item"><span class="details-item-name">{{ $property['baths'] }} bath</span></li>
            @else
            @endif
            
            @if( $property['build_up_area'] )
                <li class="details-item"><span class="details-item-name">{{ $property['build_up_area'] }} sqft</span></li>
            @endif
            
            
        </ul>
        <h5 class="listing-location">
            @if($property['loc_area_name'] && $property['loc_name'] != '')
            <a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai-{{ $property['loc_name'] }}/{{ $property['sub_loc_name'] }}/{{ $property['loc_area_name'] }}">
                {{ str_replace('-', ' ', ucwords( $property['loc_area_name'] ) ) }}
            </a>,
            @else
            <a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai-{{ $property['loc_name'] }}/{{ $property['sub_loc_name'] }}/{{ $property['loc_area_name'] }}">
                {{ str_replace('-', ' ', ucwords( $property['loc_area_name'] ) ) }}
            </a>
            @endif

            @if($property['loc_name'])
            <a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai-{{ $property['loc_name'] }}">
            {{ str_replace('-', ' ', ucwords( $property['loc_name'] ) ) }}
            </a>
            @endif

            @if($property['sub_loc_name'] != $property['sub_loc_name']),
            <a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai-{{ $property['loc_name'] }}/{{ $property['sub_loc_name'] }}">
            {{ str_replace('-', ' ', ucwords( $property['sub_loc_name'] ) ) }}
            </a>
            @endif

            
        </h5>
        <ul class="amenities-list">

            <?php $count = 0; ?>
            @foreach( $amenities as $amenity )
                @if($amenity->reference == $property['reference'])
                    <?php if($count == 1) break; ?>
                        <li class="amenity-item"><span class="amenity-item-name">{{ $amenity->title }}</span></li>
                    <?php $count++; ?>
                @endif
            @endforeach
            <li class="amenity-item"><span class="amenity-item-name"><?php echo "+ " . count( explode("|", $property['residential_amenities'] ) ) . " more"; ?></span></li>
        
        </ul>
        <!-- <hr class="card-body-divider"> -->
    </div>
    <div class="card-footer">
        <p class="listing-card-price">AED {{ number_format($property['price']) }} <?php echo $property['property_for'] == 'rent' ? '/ '.$property['frequency'] : ''; ?></p>
        <div aria-disabled="true" role="button" tabindex="0" class="property-button">
            <a href="/{{ $property['category_name'] }}-for-{{ $property['property_for'] }}-in-dubai-{{ $property['loc_name'] }}/{{ $property['sub_loc_name'] }}/{{ $property['loc_area_name'] }}/ref-{{ strtolower( $property['reference'] ) }}">
                <div class="text-layer">
                    <div class="icon-wrapper "><i class="fas fa-search"></i></div>
                    <div class="text-part"><span>View Details</span></div>
                </div>
            </a>
        </div>
    </div>
</div>

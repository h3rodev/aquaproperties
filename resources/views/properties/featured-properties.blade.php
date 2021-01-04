<div class="featured-properties">
    <div class="container">
        <h5>Featured Properties For Sale <span class="float-right"><a href="/property-for-sale-in-dubai/" target="_blank">View all</a></span></h5>
        <div class="featured-properties-slider">
            @foreach($featuredForSale as $property)
                @include('properties.item')
            @endforeach
        </div>
    </div>
</div>

<div class="featured-properties">
    <div class="container">
        <h5>Featured Properties For Rent <span class="float-right"><a href="/property-for-rent-in-dubai/" target="_blank">View all</a></span></h5>
        <div class="featured-properties-slider">
            @foreach($featuredForRent as $property)
                @include('properties.item')
            @endforeach
        </div>
    </div>
</div>
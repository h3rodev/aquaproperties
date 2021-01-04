<div class="card">
    <div class="card-body">
        <a title="AQUA Properties {{ $service->title }}" href="/services/{{ $service->slug }}"><img src="/{{ $service->section_icon }}" alt="AQUA Properties {{ $service->title }}"></a>
        <h5 class="listing-location mb-3 mt-3">{{ $service->title }}</h5>
        <p>
            {{ $service->excerpt }}
        </p>
    </div>

    <div class="card-footer">
        <p class="listing-card-price"></p>
        <div aria-disabled="true" role="button" tabindex="0" class="property-button aqua-gray">
            <a title="AQUA Properties {{ $service->title }}" href="/services/{{ $service->slug }}">
                <div class="text-layer">
                    <div class="icon-wrapper "><i class="fas fa-chevron-right"></i></div>
                    <div class="text-part"><span>Read more</span></div>
                </div>
            </a>
        </div>
    </div>
</div>
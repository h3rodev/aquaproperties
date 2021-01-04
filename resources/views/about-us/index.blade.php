@extends('layouts.index')

@section('title', 'About AQUA Properties')

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
                    <h1 class="text-aqua-blue font-weight-normal">About Us</h1>
                    <h5>Our Strength Lies In Diversity, Professionalism and Team Spirit</h5>
                </div>
                <div class="col-md-5">
                    <nav class="breadcrumb-holder">
                        <div class="container">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/about-us">About AQUA Properties</a></li>
                            </ol>
                        </div>
                    </nav>
                </div>
            </div>
            <hr class="title-hr">
            <p>Founded in 2005, AQUA Properties established its position on the market as a renowned, award-winning real estate company thanks to its innovative, creative and forward-thinking approach. Located in a modern, spacious oﬃce on Sheikh Zayed road, AQUA Properties oﬀers expert property advice with their large multinational team of RERA certiﬁed professionals who are highly trained and committed to giving the best customized service to their clients combined with transparency, discretion, and clear communication.</p>
            <p>AQUA Properties oﬀers a wide range of property services across all property types and sectors including property marketing, brokerage, leasing, property management, project planning, and development, contracting, homeowner’s association, and the most exciting one by far – Global REIT, the world’s ﬁrst ever blockchain-based REIT. Whether you are looking for a place to create your ideal home or just a good investment opportunity, AQUA Properties is a full-service real estate company providing clients personalized and valuable up-to-date market data and trends.</p>
            <span class="spacer-20"></span>
            <figure class="figure">
                <img src="../img/aqua-team.png" class="figure-img responsive-img" alt="Our strength lies in diversity, professionalism and team spirit">
            </figure>
            <span class="spacer-60"></span>
            <div class="row">
                <div class="col-md-4">
                    <a data-toggle="collapse" href="#vision" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h3 class="card-title">Vision</h3>
                    </a>
                    To be the leader in the real estate market by delivering excellent customer service through our reliable and exceptional certified team
                    
                    <div class="collapse" id="vision">
                    </div>
                </div>
                <div class="col-md-4">
                    <a data-toggle="collapse" href="#mission" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h3 class="card-title">Mission</h3>
                    </a>
                    Our mission is to be a regulated property organization in the emerging real estate industry of Dubai. Our focus is to be the best breed in customer service, having absolute 
                    
                    <div class="collapse" id="mission">market knowledge and staying ahead of trends by offering property solutions that are simple yet effective to our investors and end users alike and by encouraging innovation in all areas of business.
                    </div>
                </div>
                <div class="col-md-4">
                    <a data-toggle="collapse" href="#values" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h3 class="card-title">Values</h3>
                    </a>
                    <strong>We add value to every aspect of our business:</strong><br>
                            - Ensuring optimal returns and give the first-class service to our clients<br>
                            
                    <div class="collapse" id="values">
                        
                        - Finding an ideal home for our residents and facilitating their move-in process<br>
                        - Providing a stimulating environment for our multinational team in order to ensure their professional and personal growth<br>
                        - Showing commitment and reliability to our many partners

                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    <section class="aqua-gray-light">
        <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                @foreach( $services as $service )
                    <div class="col mb-4">
                        @include('services.item')
                    </div>
                @endforeach
                
                </div>
                <div class="pagination-holder">
                    {{ $services->links() }}
                </div>
 
        </div>
    </section>
    <div class="section-image-spacer" style="background:url('../img/power-in-numbers.jpg')">
        <div class="container banner-content">
            <h3 class="text-aqua-white">Our Numbers Speak For Themselves</h3>
            <div class="row" id="power-in-numbers">
                <div class="col-md-3">
                    <h2 class="font-weight-bold">6K+</h2>
                    <h6 class="text-aqua-white">Properties Sold</h6>
                </div>
                <div class="col-md-3">
                    <h2 class="font-weight-bold">13K+</h2>
                    <h6 class="text-aqua-white">Rented Out</h6>
                </div>
                <div class="col-md-3">
                    <h2 class="font-weight-bold">20+</h2>
                    <h6 class="text-aqua-white">Awards</h6>
                </div>
                <div class="col-md-3">
                    <h2 class="font-weight-bold">150+</h2>
                    <h6 class="text-aqua-white">Agents</h6>
                </div>
            </div>
           
        </div>
    </div>
    <section>
        <div class="container">
                <h3>Corporate Events</h3>
                <p>AQUA Properties prides itself for delivering beyond clients’ expectations. Therefore, we thrive to provide our loyal clientele with project information in a timely and accurate manner. By hosting corporate events on a regular basis, we give our potential investors an opportunity to learn about Dubai’s best upcoming projects firsthand and on time. Held in a relaxed atmosphere, with a given possibility to talk directly with both the developer and our experienced and highly qualified team members, our corporate events give our clients the opportunity to choose the best investment deal for themselves.</p>
                <p>Other than that, we host brokers’ events, giving our colleagues the opportunity to benefit from our incentive schemes.</p>
                <p>Quality networking, exchange of timely information and exclusive deals are key drivers of our successful corporate events.</p>
        </div>
    </section>
    <div class="section-image-spacer" style="background:url('../img/new-awards.png')">
    </div>

    
@stop
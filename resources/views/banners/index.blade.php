@if($banners ?? '')
    <?php if($banners ?? '')
        foreach ($banners as $key => $item) {
            ?>
                <div id="homebanner" class="slide " style="background:url( ./{{ $item->image }} )">
                    <div class="content container-fluid">
                        <span class="nmt-10">
                        <h2 data-animation="animated fadeInLeft ">{!! $item->title !!}</h2>
                        <h2 data-animation="animated fadeInLeft ">{!! $item->caption !!}</h2>
                        </span>
                        <nav>

                            @foreach(explode('|', $item->linkto) as $link)
                                <a href="{{ $link  }}" target="_blank" class="inlinebtn btn btn-outline-primary" >{{ strtoupper( str_replace('/',' ', str_replace('-', ' ', $link) )) }}</a>
                            @endforeach
<!--                             
                            <a href="" target="_blank" class="inlinebtn btn btn-outline-primary" data-animation="animated fadeInLeft">Property For Rent</a>
                            <a href="/" target="_blank" class="inlinebtn btn btn-outline-primary" data-animation="animated fadeInLeft">Off Plan Projects</a> -->
                        </nav>
                    </div>
                    <!-- <div class="slideroverlay"></div> -->

                    <div class="header-social follow-us-on-social">
                        <h5>Stay connected</h5>
                        <ul class="social-icons-holder">
                            <li><a target="_blank" href="https://www.facebook.com/aquaproperties/"><i class="customfab fab fa-fab fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/2887822/admin/"><i class="customfab fab fa-fab fa-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/aquaproperties"><i class="customfab fab fa-fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/aquapropertiesdubai/"><i class="customfab fab fa-fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCKFjL5RvMKmTxFGw0DrFINQ?sub_confirmation=1"><i class="customfab fab fa-fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php
        }
    ?>
@endif
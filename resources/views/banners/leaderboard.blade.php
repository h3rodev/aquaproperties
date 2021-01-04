@if($offplanBanners ?? '')
    <?php if($offplanBanners ?? '')
        foreach ($offplanBanners as $key => $item) {
            ?>
                <div class="slide">
                    <a href="{{ $item->linkto }}" target="_blank"><img src="{{ $item->image }}" alt="{{ $item->title }}"></a>
                </div>
            <?php
        }
    ?>
@endif

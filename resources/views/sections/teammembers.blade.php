<div class="inner">
    <div class="teammembersContent">

        <div class="outerSwiperBox">
            <div class="swiper partnerSwiper">
                <div class="swiper-wrapper">
                    @if($data['website_options']->working_with)
                    @foreach ($data['website_options']->working_with as $image)
                    <div class="swiper-slide"><img src="{!! $image['sizes']['medium'] !!}" alt="{{ $image['alt'] }}"></div>
                    @endforeach
                    @endif
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</div>

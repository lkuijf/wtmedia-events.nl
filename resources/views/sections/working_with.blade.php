<div class="inner">
    <div class="workingWithContent">
        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                @if($data['website_options']->working_with)
                @foreach ($data['website_options']->working_with as $image)
                <div class="swiper-slide"><img src="{!! $image['url'] !!}" alt="{{ $image['alt'] }}"></div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

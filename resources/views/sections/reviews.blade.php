<div class="inner">
    <div class="reviewsContent">
        @if($reviews && count($reviews))
            @foreach ($reviews as $review)
                <div>
                    <article class="notClickable">
                        @if (isset($review->image[0]) && isset($review->image[0]['sizes']))
                            <img src="{{ $review->image[0]['sizes']['medium_large'] }}" alt="{{ $review->image[0]['alt'] }}">
                        @else
                            <img src="{{ $review->image[0]['url'] }}" alt="{{ $review->image[0]['alt'] }}">
                        @endif
                        @if ($review->leading_title)<h3>{{ $review->leading_title }}</h3>@endif
                        <div>
                            <div>{!! $review->text !!}</div>
                        </div>
                        {{-- @if ($review->by)<p>{{ $review->by }}</p>@endif --}}
                        <p><a href="" class="reviewShowMoreToggle">Lees meer</a></p>
                    </article>
                </div>
            @endforeach
        @endif
    </div>
</div>

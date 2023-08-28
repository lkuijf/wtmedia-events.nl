<div class="inner">
    <div class="reviewsContent">
        @if($reviews && count($reviews))
            @foreach ($reviews as $review)
                <article>
                    @if (isset($review->image[0]) && isset($review->image[0]['sizes']))
                        <img src="{{ $review->image[0]['sizes']['medium_large'] }}" alt="{{ $review->image[0]['alt'] }}" loading="lazy">
                    @else
                        <img src="{{ $review->image[0]['url'] }}" alt="{{ $review->image[0]['alt'] }}" loading="lazy">
                    @endif
                    @if ($review->leading_title)<h3>{{ $review->leading_title }}</h3>@endif
                    <p>{!! $review->text !!}</p>
                    {{-- @if ($review->by)<p>{{ $review->by }}</p>@endif --}}
                </article>
            @endforeach
        @endif
    </div>
</div>
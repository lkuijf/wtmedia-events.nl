<div class="inner">
    <div class="casesContent">
        {{-- @if($data['website_options']->events)
            @foreach ($data['website_options']->events as $image)
            <img src="{!! $image['sizes']['medium_large'] !!}" alt="{{ $image['alt'] }}">
            @endforeach
        @endif --}}
        @if($cases && count($cases))
            @foreach ($cases as $case)
                <a href="{{ url('diensten/' . $case->categories[0]->slug . '/' . $case->slug) }}">{{ $case->title }}
                @if (isset($case->gallery[0]) && isset($case->gallery[0]['sizes']))
                    <img src="{{ $case->gallery[0]['sizes']['medium'] }}" alt="{{ $case->gallery[0]['alt'] }}">
                @else
                    <img src="{{ $case->gallery[0]['url'] }}" alt="{{ $case->gallery[0]['alt'] }}">
                @endif
                </a>
            @endforeach
        @endif
    </div>
</div>

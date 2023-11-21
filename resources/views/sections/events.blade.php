<div class="inner">
    <div class="casesContent">
        @if($cases && count($cases))
            @foreach ($cases as $case)
                <div>
                    <a href="{{ url('diensten/' . $case->categories[0]->slug . '/' . $case->slug) }}">
                        <div>
                            <p>{{ $case->title }}</p>
                            <p>{{ $case->categories[0]->name }}</p>
                        </div>
                        @if (isset($case->card_image[0]) && isset($case->card_image[0]['sizes']))
                            <img src="{{ $case->card_image[0]['sizes']['medium_large'] }}" alt="{{ $case->card_image[0]['alt'] }}">
                        @else
                            <img src="{{ $case->card_image[0]['url'] }}" alt="{{ $case->card_image[0]['alt'] }}">
                        @endif
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>

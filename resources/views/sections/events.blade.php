<div class="inner">
    <div class="casesContent">
        @if($data['website_options']->events)
            @foreach ($data['website_options']->events as $image)
            <img src="{!! $image['sizes']['medium_large'] !!}" alt="{{ $image['alt'] }}">
            @endforeach
        @endif
    </div>
</div>

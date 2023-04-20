<div class="inner">
    <div class="eventsContent">
        @if($data['website_options']->events)
            @foreach ($data['website_options']->events as $image)
            <img src="{!! $image['url'] !!}" alt="{{ $image['alt'] }}">
            @endforeach
        @endif
    </div>
</div>

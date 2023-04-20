<div class="hero">
    <div class="heroOverlay">
        <div>
            @if (isset($title) && $title)
                <h1>{!! $title !!}</h1>
            @endif
            @if (isset($text) && $text)
                <p>{!! $text !!}</p>
            @endif
            @if (isset($email) && $email && isset($phone) && $phone)
            <div class="makeContact">
                @if (isset($email) && $email)
                    <a href="mailto:{{ $email }}" class="email">Stuur een e-mail</a>
                @endif
                @if (isset($phone) && $phone)
                    <a href="tel:{{ $phone }}" class="phone"><span>Bel ons</span></a>
                @endif
            </div>
            @endif
        </div>
    </div>
    <div class="heroImages zoom">
        <div>
            @if (isset($images))
            @foreach ($images as $image)
                @if ($image['url'])<img src="{!! $image['url'] !!}" alt="{{ $image['alt'] }}">@endif
            @endforeach
            @endif
        </div>
    </div>
</div>

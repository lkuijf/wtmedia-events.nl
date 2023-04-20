<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['head_title'] }}</title>
    <meta name="description" content="{{ $data['meta_description'] }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Karla:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @yield('after_body_tag')

    <header class="headerOuter">
        {{-- <div class="inner"> --}}
            <div class="headerInnerWrap">
                <div class="mainLogoWrap"><img src="{{ asset('statics/wt-media-events-logo.png') }}" alt="WT Media & Events"></div>
                <nav class="mainNav">
                    <input type="checkbox" id="burger-check">
                    <label for="burger-check" class="burger-label">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    {!! $data['html_menu'] !!}
                </nav>
            </div>
        {{-- </div> --}}
    </header>

    <div class="contentWrapper">
        @yield('content')

        {{-- <div class="inner">
            <div class="pricing3Column">
                @for ($x=0;$x<3;$x++)  
                <article>
                    <div>
                        <h3>Package</h3>
                        <p>Placerat vestibulum lectus mauris ultrices eros. Tincidunt eget nullam non nisi est sit amet facilisis. Nulla porttitor massa id neque aliquam vestibulum. Nam libero justo laoreet sit. Convallis convallis tellus id interdum velit laoreet id donec ultrices. Amet tellus cras adipiscing enim eu turpis. Aliquam purus sit amet luctus venenatis. Purus semper eget duis at tellus at urna condimentum mattis. Eget velit aliquet sagittis id consectetur purus ut faucibus pulvinar. Velit egestas dui id ornare arcu odio. Lacus sed viverra tellus in hac habitasse platea dictumst.</p>
                        <div>
                            <p></p>
                            <p><span><strong>Per maand</strong><br>&euro;399,-</span></p>
                        </div>
                    </div>
                </article>
                @endfor
            </div>
        </div> --}}

    </div>
    
    <footer>
        f
    </footer>

    <a href="" id="toTop"></a>
    
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('before_closing_body_tag')
</body>
</html>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['head_title'] }}</title>
    <meta name="description" content="{{ $data['meta_description'] }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @yield('after_body_tag')

    <header class="headerOuter">
        <div class="inner">
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
        </div>
    </header>

    <div class="contentWrapper">
        @yield('content')
    </div>
    
    <footer>
        f
    </footer>

    <a href="" id="toTop"></a>
    
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('before_closing_body_tag')
</body>
</html>
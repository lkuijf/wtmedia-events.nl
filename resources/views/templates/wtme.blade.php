<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['website_options']->meta_title }}</title>
    <meta name="description" content="{{ $data['website_options']->meta_description }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Karla:wght@200&display=swap" rel="stylesheet">
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @yield('after_body_tag')
    @if(session('success'))
        <div class="alert alert-success">
            <div><p class="thumbsUpIcon"></p></div>
            {{-- @if(session('success') == 'contact')<div><p>{{ $data['website_options']->form_success }}</p></div>@endif --}}
            @if(session('success') == 'subscription')<div><p>{{ $data['website_options']->form_subscription_success }}</p></div>@endif
            {{-- <div><p>Gelukt</p></div> --}}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <div><p class="exclamationTriangleIcon"></p></div>
            <div><p>{{ $data['website_options']->form_error }}</p></div>
            {{-- <div><p>MISlukt</p></div> --}}
        </div>
    @endif



    <header class="headerOuter">
        {{-- <div class="inner"> --}}
            <div class="headerInnerWrap">
                <div class="mainLogoWrap"><a href="{{ url()->route('home') }}"><img src="{{ asset('statics/wt-media-events-logo.png') }}" alt="WT Media & Events"></a></div>
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
        @include('snippets.subscription-form')
    </div>
    
    <div class="inner">
        <footer>
            <div class="ftr">
                <div class="footerContact">
                    <img src="{{ asset('statics/wt-media-events-logo.png') }}" alt="WT Media & Events">
                    <a href="javascript:void(0)">CONTACT</a>
                </div>
                <nav>
                    {!! $data['html_menu'] !!}
                </nav>
            </div>
            <div class="btm">
                <p>&copy; W.T. Media &amp; Events | <a href="javascript:void(0);">Privacy Policy</a> | {{ date('Y') }} All Rights Reserved</p>
                <p class="socials">
                    <a href="javascript:void(0)" class="ig"><img src="{{ asset('statics/instagram.png') }}" alt="Instagram"></a>
                    <a href="javascript:void(0)" class="fb"><img src="{{ asset('statics/facebook.png') }}" alt="Facebook"></a>
                    <a href="javascript:void(0)" class="li"><img src="{{ asset('statics/linkedin.png') }}" alt="LinkedIn"></a>
                </p>
            </div>
        </footer>
    </div>

    <a href="" id="toTop"></a>
    
    <script src="{{ asset('js/script.js') }}"></script>
    @if($errors->any())
    <script>
        const errors = document.querySelectorAll('.error');
        errors.forEach((el) => {
            const err = document.createElement('span');
            err.classList.add('errMsg');
            err.innerHTML = el.dataset.errMsg;
            el.appendChild(err);
        });
    </script>
    @endif
    @yield('before_closing_body_tag')
</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    
    @yield('swipper')
    @yield('link')

</head>
<body>
    <nav class="navbar">
        <div class="header-left">
            <div class="navbar-brand">
                <a href="#">Azzama</a>
            </div>
            <ul class="navbar-menu">
                <li class="navbar-item">
                    <a href="#">Hijab</a>
                </li>
                <li class="navbar-item">
                    <a href="#">Dress</a>
                </li>
                <li class="navbar-item">
                    <a href="#">Article</a>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <div class="navbar-icons">
                <a href="#">
                    <svg width="20" height="20" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="-1.5" x2="6.46502" y2="-1.5"
                            transform="matrix(0.773392 0.633928 -0.646417 0.762984 20 20.9019)" stroke="black"
                            stroke-width="3" />
                        <path
                            d="M23.5 12.2951C23.5 18.2337 18.5986 23.0901 12.5 23.0901C6.4014 23.0901 1.5 18.2337 1.5 12.2951C1.5 6.3564 6.4014 1.5 12.5 1.5C18.5986 1.5 23.5 6.3564 23.5 12.2951Z"
                            stroke="black" stroke-width="3" />
                    </svg>
                </a>
                <a href="#">
                    <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 0C14.1576 0 15.7473 0.65848 16.9194 1.83058C18.0915 3.00268 18.75 4.5924 18.75 6.25C18.75 7.9076 18.0915 9.49732 16.9194 10.6694C15.7473 11.8415 14.1576 12.5 12.5 12.5C10.8424 12.5 9.25268 11.8415 8.08058 10.6694C6.90848 9.49732 6.25 7.9076 6.25 6.25C6.25 4.5924 6.90848 3.00268 8.08058 1.83058C9.25268 0.65848 10.8424 0 12.5 0ZM12.5 3.125C11.6712 3.125 10.8763 3.45424 10.2903 4.04029C9.70424 4.62634 9.375 5.4212 9.375 6.25C9.375 7.0788 9.70424 7.87366 10.2903 8.45971C10.8763 9.04576 11.6712 9.375 12.5 9.375C13.3288 9.375 14.1237 9.04576 14.7097 8.45971C15.2958 7.87366 15.625 7.0788 15.625 6.25C15.625 5.4212 15.2958 4.62634 14.7097 4.04029C14.1237 3.45424 13.3288 3.125 12.5 3.125ZM12.5 14.0625C16.6719 14.0625 25 16.1406 25 20.3125V25H0V20.3125C0 16.1406 8.32813 14.0625 12.5 14.0625ZM12.5 17.0312C7.85938 17.0312 2.96875 19.3125 2.96875 20.3125V22.0313H22.0313V20.3125C22.0313 19.3125 17.1406 17.0312 12.5 17.0312Z"
                            fill="black" />
                    </svg>
                </a>
            </div>
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        console.log('test')

    </script>
</body>
</html>

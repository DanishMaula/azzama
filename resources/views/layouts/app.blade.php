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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    <link href="{{ asset('css/article.css') }}" rel="stylesheet">
    
    @yield('swipper')

    @yield('link')
    @yield('hijab')

</head>

<body>
    <nav class="navbar">
        <div class="header-left">
            <div class="navbar-brand">
                <a href="/">Azzama</a>
            </div>
            <ul class="navbar-menu" style="margin: 0;">
                <li class="navbar-item">
                    <a href="/hijab">Hijab</a>
                </li>
                <li class="navbar-item">
                    <a href="#">Dress</a>
                </li>
                <li class="navbar-item">
                    <a href="/article">Article</a>
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
                {{-- <a href="/login">
                    <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 0C14.1576 0 15.7473 0.65848 16.9194 1.83058C18.0915 3.00268 18.75 4.5924 18.75 6.25C18.75 7.9076 18.0915 9.49732 16.9194 10.6694C15.7473 11.8415 14.1576 12.5 12.5 12.5C10.8424 12.5 9.25268 11.8415 8.08058 10.6694C6.90848 9.49732 6.25 7.9076 6.25 6.25C6.25 4.5924 6.90848 3.00268 8.08058 1.83058C9.25268 0.65848 10.8424 0 12.5 0ZM12.5 3.125C11.6712 3.125 10.8763 3.45424 10.2903 4.04029C9.70424 4.62634 9.375 5.4212 9.375 6.25C9.375 7.0788 9.70424 7.87366 10.2903 8.45971C10.8763 9.04576 11.6712 9.375 12.5 9.375C13.3288 9.375 14.1237 9.04576 14.7097 8.45971C15.2958 7.87366 15.625 7.0788 15.625 6.25C15.625 5.4212 15.2958 4.62634 14.7097 4.04029C14.1237 3.45424 13.3288 3.125 12.5 3.125ZM12.5 14.0625C16.6719 14.0625 25 16.1406 25 20.3125V25H0V20.3125C0 16.1406 8.32813 14.0625 12.5 14.0625ZM12.5 17.0312C7.85938 17.0312 2.96875 19.3125 2.96875 20.3125V22.0313H22.0313V20.3125C22.0313 19.3125 17.1406 17.0312 12.5 17.0312Z"
                            fill="black" />
                    </svg>
                </a> --}}
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
        <main class="pb-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="about">
                <p class="title-about">AZZAMA</p>
                <p class="desc-about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, aliquam ducimus. Aperiam, quis
                    perferendis pariatur explicabo repudiandae nisi voluptas commodi maxime possimus voluptatem fugit
                    exercitationem nesciunt veniam magnam doloribus aliquam.
                </p>
            </div>
            <div class="menu">
                <div class="item contact">
                    <button type="button" class="title">
                        <p>Contact</p>
                        <span class="title-btn">+</span>
                    </button>
                    <p class="desc">Whatsapp : 0821-1747-5525</p>
                </div>
                <div class="item store">
                    <button type="button" class="title">
                        <p>Store Location</p>
                        <span class="title-btn">+</span>
                    </button>
                    <p class="desc">Azzama Muslimah Store, Perumahan Duta Bumi 2 Blok 2A no 22, Harapan Indah, Kota Bks,
                        Jawa Barat 17131, Indonesia</p>
                </div>
                <div class="item follow">
                    <button type="button" class="title">
                        <p>Follow Us</p>
                        <span class="title-btn">+</span>
                    </button>
                    <div class="desc">
                        <div class="follows">
                            <a href="https://www.instagram.com/azzamaa.id/" class="instagram" target="_blank"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 16 16">
                                    <path fill="#fefdf3"
                                        d="M8 0C5.829 0 5.556.01 4.703.048C3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7C.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297c.04.852.174 1.433.372 1.942c.205.526.478.972.923 1.417c.444.445.89.719 1.416.923c.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417c.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046c.78.035 1.204.166 1.486.275c.373.145.64.319.92.599c.28.28.453.546.598.92c.11.281.24.705.275 1.485c.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598c-.28.11-.704.24-1.485.276c-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598a2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485c-.038-.843-.046-1.096-.046-3.233c0-2.136.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486c.145-.373.319-.64.599-.92c.28-.28.546-.453.92-.598c.282-.11.705-.24 1.485-.276c.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92a.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217a4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334a2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>
                            <a href="https://shopee.co.id/azzama.id" class="shopee" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                    <path fill="#fefdf3"
                                        d="M15.941 17.963c.23-1.879-.98-3.077-4.175-4.097c-1.548-.528-2.277-1.22-2.26-2.171c.065-1.056 1.048-1.825 2.352-1.85a5.29 5.29 0 0 1 2.883.89c.116.072.197.06.263-.04c.09-.144.315-.493.39-.62c.051-.08.061-.186-.068-.28c-.185-.137-.704-.415-.983-.532a6.47 6.47 0 0 0-2.511-.514c-1.91.008-3.413 1.215-3.54 2.826c-.081 1.163.495 2.107 1.73 2.827c.263.152 1.68.716 2.244.892c1.774.552 2.695 1.542 2.478 2.697c-.197 1.047-1.299 1.724-2.818 1.744c-1.203-.046-2.287-.537-3.127-1.19l-.141-.11c-.104-.08-.218-.075-.287.03c-.05.077-.376.547-.458.67c-.077.108-.035.168.045.234c.35.293.817.613 1.134.775a6.71 6.71 0 0 0 2.829.727a4.905 4.905 0 0 0 2.075-.354c1.095-.465 1.803-1.394 1.945-2.554zM12 1.401c-2.068 0-3.754 1.95-3.833 4.39h7.665C15.751 3.35 14.066 1.4 12 1.4zm7.851 22.598l-.08.001l-15.784-.002c-1.074-.04-1.863-.91-1.971-1.991l-.01-.195l-.707-15.526a.459.459 0 0 1 .45-.494h4.975C6.845 2.568 9.16 0 12 0c2.838 0 5.153 2.569 5.275 5.79h4.968a.459.459 0 0 1 .458.483l-.773 15.588l-.007.131c-.094 1.094-.979 1.977-2.07 2.006z" />
                                </svg>
                            </a>
                            <a href="" class="tiktok" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                                    <path fill="#fefdf3"
                                        d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p>@copyright 2023 azzama muslimah</p>
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>

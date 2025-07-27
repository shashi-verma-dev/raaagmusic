<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <meta name="title" content="@yield('meta_title', 'RaaagMusic - Personalized Songs for Every Emotion & Occasion')">
    <meta name="description" content="@yield('description', 'Create custom, heartfelt songs for birthdays, anniversaries, proposals, weddings, or any mood. Make your moments unforgettable with RaaagMusic.')">
    <meta name="keywords" content="@yield('keywords', 'RaaagMusic, custom songs, personalized music, song gifts, birthday song, anniversary song, proposal music, wedding song')">
    <meta name="author" content="@yield('author', 'RaaagMusic')">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('meta_title', 'RaaagMusic - Personalized Songs for Every Emotion & Occasion')">
    <meta property="og:description" content="@yield('meta_description', 'Custom songs crafted for your unique stories. Perfect for birthdays, proposals, weddings, and more.')">
    <meta property="og:image" content="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('meta_title', 'RaaagMusic - Personalized Songs for Every Emotion & Occasion')">
    <meta name="twitter:description" content="@yield('meta_description', 'Custom songs crafted for your unique stories. Perfect for birthdays, proposals, weddings, and more.')">
    <meta name="twitter:image"
        content="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}">

    <meta property="og:url" content="@yield('meta_url', url()->current())">

    <title>@yield('title', 'Byrd Pro Graphics')</title>

    <!-- <link rel="canonical" href="https://themephi.net" /> -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}" />
    <link rel="apple-touch-icon"
        href="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}" />

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script> --}}

    {{-- <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/backtotop.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/mycss.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/custom_css.css') }}" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <!-- Add Bootstrap Icons (optional, lightweight) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Dynamic CSS Section -->
    @stack('extracss')

</head>

<body>

    @if (session('success'))
        <div id="popup-success" class="popup-alert-manual success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="popup-error" class="popup-alert-manual error">
            {{ session('error') }}
        </div>
    @endif


    <!-- back to top start -->
    <!-- Back to Top Button -->
    <div class="progress-wrap2">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>

    </div>
    <!-- back to top end -->

    <!-- whats app icon -->
    <div class="progress_wrap11">
        <a href="https://wa.me/917851827504" target="_blank" title="Chat with us on WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" width="45.65" height="46" viewBox="0 0 256 258">
                <defs>
                    <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
                        <stop offset="0%" stop-color="#1faf38" />
                        <stop offset="100%" stop-color="#60d669" />
                    </linearGradient>
                    <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
                        <stop offset="0%" stop-color="#f9f9f9" />
                        <stop offset="100%" stop-color="#fff" />
                    </linearGradient>
                </defs>
                <path fill="url(#logosWhatsappIcon0)"
                    d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                <path fill="url(#logosWhatsappIcon1)"
                    d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                <path fill="#fff"
                    d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
            </svg>
        </a>
    </div>
    <!-- whats app icon end -->


    <!-- modal-search-start -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <a href="javascript:void(0)" type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <input type="text" placeholder="Search here..." />
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- modal-search-end -->

    <!-- 🎁 Coupon Code Banner -->
    <div class="coupon-bar text-center">
        🎁 Use code <strong>SONG20</strong> at checkout to get <strong>20% OFF</strong>
    </div>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a href="{{ route('/') }}" class=""><img
                    src="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}"
                    alt="logo" style="height: 70px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('how-it-works') }}">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sample Songs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('track-your-song')}}">Track Your Song</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link create-btn" href="#">Create Your Song</a> --}}
                        <button class="create-btn cysbtn"><a href="{{ route('create-your-song') }}"
                                style="color: white;text-decoration:none;"> Create Your Song </a></button>

                    </li>
                    <li class="nav-item">
                        <div class="navspacediv"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cart-icon" href="#">
                            {{-- <i class="fas fa-shopping-cart"></i> --}}
                            <img src="{{ asset('public/frontend/assets/images/index_page_image/music_cart.png') }}"
                                height="25px" alt="">

                            <span class="cart-count">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





    @yield('content')



    @php
        use App\Models\Settings;
        $setting = Settings::first();
    @endphp




    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 text-center">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('public/frontend/assets/images/index_page_icons/logoWithoutBG.png') }}"
                            alt="logo" style="width: 120px;">
                    </a>
                    <p class="footer-text mt-2">
                        Creating personalized songs that capture the essence of your most precious moments.<br>

                    </p>
                </div>
                <div class="col-md-4 col-lg-2 mb-4">
                    <h4 class="footer-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Wedding Songs</a></li>
                        <li><a href="#">Corporate Music</a></li>
                        <li><a href="#">Anniversary Songs</a></li>
                        <li><a href="#">Custom Jingles</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-2 mb-4">
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Process</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <h4 class="footer-title">Contact</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="#e95f5f" fill-opacity="0"
                            d="M12 8c0 0 0 0 0.76 -1c0.88 -1.16 2.18 -2 3.74 -2c2.49 0 4.5 2.01 4.5 4.5c0 0.93 -0.28 1.79 -0.76 2.5c-0.81 1.21 -8.24 9 -8.24 9c0 0 -7.43 -7.79 -8.24 -9c-0.48 -0.71 -0.76 -1.57 -0.76 -2.5c0 -2.49 2.01 -4.5 4.5 -4.5c1.56 0 2.87 0.84 3.74 2c0.76 1 0.76 1 0.76 1Z">
                            <animate fill="freeze" attributeName="fill-opacity" begin="0.7s" dur="0.15s"
                                values="0;0.15" />
                        </path>
                        <path fill="none" stroke="#e95f5f" stroke-dasharray="32" stroke-dashoffset="32"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c0 0 0 0 -0.76 -1c-0.88 -1.16 -2.18 -2 -3.74 -2c-2.49 0 -4.5 2.01 -4.5 4.5c0 0.93 0.28 1.79 0.76 2.5c0.81 1.21 8.24 9 8.24 9M12 8c0 0 0 0 0.76 -1c0.88 -1.16 2.18 -2 3.74 -2c2.49 0 4.5 2.01 4.5 4.5c0 0.93 -0.28 1.79 -0.76 2.5c-0.81 1.21 -8.24 9 -8.24 9">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.7s"
                                values="32;0" />
                        </path>
                    </svg> Made with love in Nashville !


                    <br>
                    <ul class="footer-links">
                        <li>
                            <div class="social-icons">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                            </div>
                        </li>

                        <li><a href="#"><i class="fas fa-phone me-2"></i>+91 785-1827-504</a></li>
                        <li><a href="#"><i class="fas fa-envelope me-2"></i>raaagmusicgift@gmail.com</a></li>

                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="mb-0">© 2025 Raaag Music. All rights reserved. <a href="#"
                        class="text-white-50">Privacy Policy</a> | <a href="#" class="text-white-50">Terms of
                        Service</a> |</p>
                <p class="mb-0">Made with love in Nashville</p>
            </div>
        </div>
    </footer>


    <!-- footer area end -->
    </div>
    </div>
    </div>
    <!-- jQuery Js -->
    {{-- <script src="{{ asset('public/frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/chroma.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/nice-select.min.js') }}"></script>
    
    <script src="{{ asset('public/frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/js/myjs.js') }}"></script> --}}

     <script src="{{ asset('public/frontend/assets/js/custom_js.js') }}"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Scripts -->
    @stack('extrajs')
</body>

</html>

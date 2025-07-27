<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Dynamic Meta Tags -->
    <meta name="description" content="@yield('description', 'Default description for Byrd Pro Graphics.')">
    <meta name="keywords" content="@yield('keywords', 'graphics, design, custom artwork, branding, painting, digital art')">
    <meta name="author" content="@yield('author', 'Byrd Pro Graphics')">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="@yield('meta_title', 'Byrd Pro Graphics')">
    <meta property="og:description" content="@yield('meta_description', 'Default description for Byrd Pro Graphics.')">
    <meta property="og:url" content="@yield('meta_url', url()->current())">

    <title>@yield('title', 'Byrd Pro Graphics')</title>

    <!-- <link rel="canonical" href="https://themephi.net" /> -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/assets/my_images/logo_icon.svg') }}" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/assets/my_images/logo_icon.svg') }}" />

    <!-- Stylesheets -->

    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/backtotop.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mycss.css') }}" /> --}}
     <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4a6bff;
            --secondary-color: #ff6b6b;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
            --text-color: #333;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
        }
        
        /* Navbar styles */
        .navbar {
            transition: all 0.3s ease;
            padding: 15px 0;
        }
        
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: var(--primary-color);
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            color: var(--dark-color);
        }
        
        .nav-link:hover {
            color: var(--primary-color);
        }
        
        .cart-icon {
            position: relative;
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Hero section */
        .hero-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 100px 0 0px;
            text-align: center;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--dark-color);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: var(--text-color);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 4px;
        }
        
        .btn-outline-secondary {
            border-color: var(--primary-color);
            color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 4px;
        }
        
        .btn-outline-secondary:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* .btn-outline-secondary {
            border-color: var(--primary-color);
            color: var(--primary-color);
            padding: 5px 15px;
            font-weight: 500;
            border-radius: 10px;
        } */


.custom_btn{
    border-radius: 4px;
    margin-top: 15px;
}
        
        
       
        
        /* Stats section */
        .stats-section {
            padding: 60px 0;
            background-color: white;
        }
        
        .stat-item {
            text-align: center;
            /* padding: 20px; */
            margin-top: 30px;
        }
        
        .stat-number {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1rem;
            color: var(--text-color);
        }
        
        /* Features section */
        .features-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
            color: var(--dark-color);
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-color);
            max-width: 700px;
            margin: 0 auto 50px;
            text-align: center;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            height: 100%;

        }
        
        .feature-card:hover {
            transform: translateY(-7px);
            cursor: pointer;
         box-shadow: 2px 48px 123px -56px rgba(73,85,223,0.58);
-webkit-box-shadow: 2px 48px 123px -56px rgba(73,85,223,0.58);
-moz-box-shadow: 2px 48px 123px -56px rgba(73,85,223,0.58);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .feature-text {
            color: var(--text-color);
        }
        
        /* Samples section */
        /* .samples-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .sample-card {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .sample-card:hover {
            transform: translateY(-5px);
        }
        
        .sample-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .sample-body {
            padding: 20px;
        }
        
        .sample-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark-color);
        }
        
        .sample-text {
            color: var(--text-color);
            margin-bottom: 15px;
        } */




   /* Main Styles */
.samples-section {
  padding: 80px 0;
  background-color: white;
}

.sample-card {
  border-radius: 10px;
  background: white;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.171);
  padding: 20px;
  height: 100%;
  transition: transform 0.3s ease;
}

.sample-card:hover {
  transform: translateY(-7px);
}

.sample-header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 15px;
}

.song-duration {
  font-size: 0.8rem;
  color: #666;
}

.song-tag {
  font-size: 0.8rem;
  padding: 3px 10px;
  border-radius: 20px;
  font-weight: 600;
}

.song-tag.romantic {
  background: #ffebee;
  color: #d32f2f;
}

.song-tag.inspiring {
  background: #e8f5e9;
  color: #2e7d32;
}

.song-tag.nostalgic {
  background: #fff3e0;
  color: #e65100;
}

.sample-title {
  font-size: 1.3rem;
  font-weight: 600;
  margin-bottom: 10px;
  color: #000;
}

.sample-text {
  color: #666;
  margin-bottom: 15px;
  font-size: 0.9rem;
}

.sample-actions {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
}

.like-btn {
  background: none;
  border: none;
  color: #d32f2f;
  cursor: pointer;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
  gap: 5px;
}

.learn-more {
  color: #0a58ca;
  text-decoration: none;
  font-size: 0.9rem;
}

audio {
  width: 100%;
  margin-top: 10px;
}

/* Slider Functionality */
.card-wrapper {
  flex: 0 0 33.3333%;
  padding: 10px;
  box-sizing: border-box;
}

#card-track {
  display: flex;
  transition: transform 0.5s ease;
  will-change: transform;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .card-wrapper {
    flex: 0 0 100%;
  }
}

@media (min-width: 769px) and (max-width: 991px) {
  .card-wrapper {
    flex: 0 0 50%;
  }
}

/* Navigation Buttons */
#prevBtn, #nextBtn {
  border: none;
  background: white;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
}

.imggraphic {
  background: linear-gradient(to bottom right, #6c7eff, #7085ff); /* match the blue gradient */
  border-radius: 12px;
  height: 140px;
  display: flex;
  margin-bottom: 30px;
  justify-content: center;
  align-items: center;
  position: relative;
}

/* Optional glowing effect */
.imggraphic::after {
  content: "";
  position: absolute;
  width: 140px;
  height: 140px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(120,130,255,0.3) 0%, transparent 70%);
  z-index: 1;
}

.play-button {
  width: 50px;
  height: 50px;
  background-color: #434de4;
  color: white;
  font-size: 1.2rem;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  position: relative;
}

.song-tag.romantic {
  background: #f2f3fe;
  color: #000;
  font-size: 0.8rem;
  padding: 4px 10px;
  border-radius: 12px;
  float: right;
}

        
        /* Testimonials section */
        .testimonials-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .testimonial-name {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        .testimonial-role {
            color: var(--primary-color);
            font-size: 0.9rem;
        }
        
        .testimonial-text {
            color: var(--text-color);
            font-style: italic;
        }
        
        .rating {
            color: #ffc107;
            margin-top: 15px;
        }
        
        /* CTA section */
        .cta-section {
            padding: 80px 0;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
        }
        
        .cta-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.1rem;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .btn-light {
            background-color: white;
            color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 50px;
        }
        
        /* Pricing section */
        .pricing-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .pricing-card {
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            border: 1px solid #eee;
        }
        
        .pricing-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-color);
            box-shadow: 2px 2px 25px 2px rgba(73,85,223,0.32);
-webkit-box-shadow: 2px 2px 25px 2px rgba(73,85,223,0.32);
-moz-box-shadow: 2px 2px 25px 2px rgba(73,85,223,0.32);
        }

        .btnhover{
          box-shadow: 2px 3px 25px -3px rgba(73,85,223,0.72);
-webkit-box-shadow: 2px 3px 25px -3px rgba(73,85,223,0.72);
-moz-box-shadow: 2px 3px 25px -3px rgba(73,85,223,0.72);
        }
        
        .pricing-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--dark-color);
            text-align: center;
        }
        
        .pricing-features {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
        }
        
        .pricing-features li {
            padding: 8px 0;
            color: var(--text-color);
        }
        
        .pricing-features li:before {
            content: "✓";
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .delivery-time {
            font-size: 0.9rem;
            color: var(--text-color);
            text-align: center;
            margin-top: 20px;
        }
        
        /* FAQ section */
        .faq-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        
        .accordion-button {
            font-weight: 500;
            padding: 15px 20px;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: rgba(74, 107, 255, 0.1);
            color: var(--primary-color);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(74, 107, 255, 0.25);
        }
        
        /* Contact section */
        .contact-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .contact-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .contact-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--dark-color);
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-icon {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-right: 10px;
            width: 20px;
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(74, 107, 255, 0.25);
        }
        
        /* Footer */
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-text {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 20px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icon {
            color: white;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        
        .social-icon:hover {
            color: var(--primary-color);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 1.7rem;
            }
            
            .navbar-brand {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 80px 0 60px;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .stat-number {
                font-size:18px;
            }
            
            .feature-card, .testimonial-card, .pricing-card {
                padding: 20px;
            }
        }

        
.progress_wrap11 {
    position: fixed;
    left: 30px;
    bottom: 30px;
    height: 46px;
    width: 46px;
    cursor: pointer;
    display: block;
    border-radius: 50px;
    /* box-shadow: inset 0 0 0 2px rgba(95, 58, 252, 0.2); */
    z-index: 99;
    /* opacity: 1; */
    /* visibility: hidden; */
        transform: translateY(15px);
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    /* padding: 8px; */
}
/* Back to Top Button */
.progress-wrap2 {
    position: fixed;
    right: 30px;
    bottom: 30px;
    height: 46px;
    width: 46px;
    cursor: pointer;
    display: block;
    border-radius: 50px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    background: var(--primary-color);
    opacity: 0;
    visibility: hidden;
    transform: translateY(15px);
    transition: all 0.3s ease;
    z-index: 999;
}

.progress-wrap2::after {
    position: absolute;
     content: '❯';
    transform: rotate(-90deg);
    text-align: center;
    line-height: 46px;
    font-size: 24px;
    color: white;
    left: 0;
    top: 0;
    height: 46px;
    width: 46px;
    cursor: pointer;
    display: block;
    z-index: 1;
    transition: all 0.3s ease;
}

.progress-wrap2:hover::after {
    transform: translateY(-3px) rotate(-90deg);
}

.progress-wrap2.active-progress {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.progress-wrap2 svg {
    width: 100%;
    height: 100%;
    position: relative;
    top: 0;
    left: 0;
    transform: rotate(-90deg);
}

.progress-wrap2 svg path {
    fill: none;
    stroke: var(--primary-color);
    stroke-width: 4;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

.navspacediv{
    height: 100%;
    width: 100px;
}

.gradient-text {
  background: linear-gradient(to right, #4f5bc5, #8d6ee0); /* adjust colors */
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

.emotional_conncetion{
    display: inline-block;
    padding: 0px 18px 10px 18px;
    background: #ffc1073b;
    border-radius: 50px;
    border: 1px solid #ffc107f5;
}

.emotional_touch{
    display: inline-block;
    padding: 0px 15px 8px 15px;
    background: #d7443e3d;
    border-radius: 50px;
    border: 1px solid #d7443e;
}

.heartdiv{
     display: inline-block;
    padding: 0px 17px 8px 17px;
   background: #e7889d7a;
    border-radius: 50px;
    border: 1px solid #d7443e;
}

    </style>

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
        <a href="https://wa.me/919116454142" target="_blank" title="Chat with us on WhatsApp">
           <svg xmlns="http://www.w3.org/2000/svg" width="45.65" height="46" viewBox="0 0 256 258"><defs><linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#1faf38"/><stop offset="100%" stop-color="#60d669"/></linearGradient><linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%"><stop offset="0%" stop-color="#f9f9f9"/><stop offset="100%" stop-color="#fff"/></linearGradient></defs><path fill="url(#logosWhatsappIcon0)" d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004"/><path fill="url(#logosWhatsappIcon1)" d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z"/><path fill="#fff" d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64"/></svg>
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
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SongCraft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">How it Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sample Songs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Track Your Song</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Your Song</a>
                    </li>
                      <li class="nav-item">
                  <div class="navspacediv"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cart-icon" href="#">
                            <i class="fas fa-shopping-cart"></i>
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



    <!-- footer area start -->
    {{-- <footer class="h5_footer-area">
        <div class="h5_footer-top pt-120 pb-80">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7 tp_has_fade_anim" data-fade-from="left">
                        <div class="h5_footer-widget mb-40">
                            <div class="h5_footer-logo" style="margin-bottom:0px !important;">
                                <a href="{{ route('/') }}"><img src="{{ asset('frontend/assets/my_images/logo_icon.svg') }}" alt="logo" class="logoimgfooter"></a>
                            </div>
                            <p class="h5_footer-widget-text">
                                Transform your ideas into stunning visuals with high-quality designs that
                                inspire, captivate, and elevate your creative projects effortlessly.
                            </p>
                            <div class="h5_footer-widget-social">
                                <a href="{{ $setting->insta_link }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>

                                <a href="{{ $setting->x_link }}" target="_blank" class="svg-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <path fill="#878fa4" d="M9.294 6.928L14.357 1h-1.2L8.762 6.147L5.25 1H1.2l5.31 7.784L1.2 15h1.2l4.642-5.436L10.751 15h4.05zM7.651 8.852l-.538-.775L2.832 1.91h1.843l3.454 4.977l.538.775l4.491 6.47h-1.843z" stroke-width="0.5" stroke="#878fa4" />
                                    </svg>
                                </a>
                                <a href="{{ $setting->fb_link }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $setting->pinterest_link }}" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
                                <a href="{{ $setting->linkedin_link }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 tp_has_fade_anim" data-fade-from="left" data-delay=".8">
                        <div class="h5_footer-widget mb-35">
                            <h5 class="h5_footer-widget-title">Quick Links</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="">Images</a>
                                </li>
                                <li>
                                    <a href="">Icons</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 d-flex justify-content-lg-center justify-content-xl-start order-sm-3 order-md-2 tp_has_fade_anim" data-fade-from="left" data-delay="1.1">
                        <div class="h5_footer-widget mb-35">
                            <h5 class="h5_footer-widget-title">Other Links </h5>
                            <ul>
                                <li>
                                    <a href="{{ route('terms') }}">Teams & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('copyright-info') }}">Copyright Information</a>
                                </li>
                                <li>
                                    <a href="{{ route('cockies-policy') }}">Cookies policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}">FAQ</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7 order-sm-2 order-md-3 tp_has_fade_anim" data-fade-from="left" data-delay="1.3">
                        <div class="h5_footer-widget mb-35">
                            <h5 class="h5_footer-widget-title">Contact Info.</h5>

                            <p class="h5_footer-widget-text">
                                @if (!empty($setting->address))
                                {{ $setting->address }}<br><br>
                                @endif

                                @if (!empty($setting->email1))
                                E-Mail : <a href="mailto:{{ $setting->email1 }}">{{ $setting->email1 }}</a><br><br>
                                @endif

                                @if (!empty($setting->email2))
                                E-Mail : <a href="mailto:{{ $setting->email2 }}">{{ $setting->email2 }}</a><br><br>
                                @endif

                                @if (!empty($setting->number1))
                                Number : <a href="tel:{{ $setting->number1 }}">{{ $setting->number1 }}</a><br>
                                @endif

                                @if (!empty($setting->number2))
                                Number : <a href="tel:{{ $setting->number2 }}">{{ $setting->number2 }}</a>
                                @endif
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h5_footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="h5_footer-bottom-copyright d-flex justify-content-center justify-content-md-start">
                            <p>&copy; 2025 All Rights Reserved by byrdprographics. </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="h5_footer-bottom-menu d-flex justify-content-center justify-content-md-end">
                          
                            <ul>
                                <li><a href="#">Dev. Shashi Verma. </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="footer-title">Melodic Memories</h3>
                    <p class="footer-text">Creating personalized songs that capture the essence of your most precious moments. Where every melody tells a story. <br> <br>
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#e95f5f" fill-opacity="0" d="M12 8c0 0 0 0 0.76 -1c0.88 -1.16 2.18 -2 3.74 -2c2.49 0 4.5 2.01 4.5 4.5c0 0.93 -0.28 1.79 -0.76 2.5c-0.81 1.21 -8.24 9 -8.24 9c0 0 -7.43 -7.79 -8.24 -9c-0.48 -0.71 -0.76 -1.57 -0.76 -2.5c0 -2.49 2.01 -4.5 4.5 -4.5c1.56 0 2.87 0.84 3.74 2c0.76 1 0.76 1 0.76 1Z"><animate fill="freeze" attributeName="fill-opacity" begin="0.7s" dur="0.15s" values="0;0.15"/></path><path fill="none" stroke="#e95f5f" stroke-dasharray="32" stroke-dashoffset="32" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c0 0 0 0 -0.76 -1c-0.88 -1.16 -2.18 -2 -3.74 -2c-2.49 0 -4.5 2.01 -4.5 4.5c0 0.93 0.28 1.79 0.76 2.5c0.81 1.21 8.24 9 8.24 9M12 8c0 0 0 0 0.76 -1c0.88 -1.16 2.18 -2 3.74 -2c2.49 0 4.5 2.01 4.5 4.5c0 0.93 -0.28 1.79 -0.76 2.5c-0.81 1.21 -8.24 9 -8.24 9"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.7s" values="32;0"/></path></svg> Made with love in Nashville !
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
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
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-phone me-2"></i>+1 (555) 123-4567</a></li>
                        <li><a href="#"><i class="fas fa-envelope me-2"></i>hello@melodicmemories.com</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt me-2"></i>Nashville, TN</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="mb-0">© 2025 Melodic Memories. All rights reserved. <a href="#" class="text-white-50">Privacy Policy</a> | <a href="#" class="text-white-50">Terms of Service</a> | <a href="#" class="text-white-50">Cookie Policy</a></p>
                <p class="mb-0">Made with love in Nashville</p>
            </div>
        </div>
    </footer>

   
    <!-- footer area end -->
    </div>
    </div>
    </div>
    <!-- jQuery Js -->
    {{-- <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/chroma.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.min.js') }}"></script>
    
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/myjs.js') }}"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                let successPopup = document.getElementById('popup-success');
                let errorPopup = document.getElementById('popup-error');

                [successPopup, errorPopup].forEach(function(popup) {
                    if (popup) {
                        popup.style.transition = "opacity 0.5s ease";
                        popup.style.opacity = "0";
                        setTimeout(() => popup.remove(), 500);
                    }
                });
            }, 3000);
        });
    </script>





 <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Like button functionality
        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            });
        });

        // Back to Top Button
const backToTopButton = document.querySelector('.progress-wrap2');

window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    
    // Navbar scroll effect (existing code)
    const navbar = document.querySelector('.navbar');
    if (scrollPosition > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
    
    // Back to Top button show/hide
    if (scrollPosition > 300) {
        backToTopButton.classList.add('active-progress');
    } else {
        backToTopButton.classList.remove('active-progress');
    }
    
    // Calculate scroll progress for the circle (optional)
    const scrollHeight = document.documentElement.scrollHeight;
    const clientHeight = document.documentElement.clientHeight;
    const scrollPercent = (scrollPosition / (scrollHeight - clientHeight)) * 100;
    const path = backToTopButton.querySelector('path');
    const pathLength = path.getTotalLength();
    path.style.strokeDasharray = pathLength;
    path.style.strokeDashoffset = pathLength - (pathLength * scrollPercent / 100);
});

// Click event for Back to Top button
backToTopButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});



const track = document.getElementById('card-track');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let index = 0;

  const cardCount = track.children.length;
  const visibleCards = window.innerWidth < 768 ? 1 : (window.innerWidth < 992 ? 2 : 3);
  const maxIndex = cardCount - visibleCards;

  function updateSlider() {
    const cardWidth = track.querySelector('.card-wrapper').offsetWidth;
    track.style.transform = `translateX(-${index * cardWidth}px)`;
  }

  nextBtn.addEventListener('click', () => {
    if (index < maxIndex) {
      index++;
      updateSlider();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (index > 0) {
      index--;
      updateSlider();
    }
  });

  window.addEventListener('resize', () => {
    updateSlider(); // Recalculate on resize
  });
    </script>

</body>

</html>
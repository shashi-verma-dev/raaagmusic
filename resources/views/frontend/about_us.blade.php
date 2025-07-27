@extends('layouts.frontend_app')

@section('title', 'About Us - Byrd Pro Graphics')

@section('meta_title', 'Welcome to Byrd Pro Graphics')
@section('meta_description', 'Explore our custom graphic designs, paintings, and more.')
@section('meta_keywords', 'graphic design, custom artwork, paintings, digital art')
@section('meta_url', url('/'))

@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default"
            data-background="{{ asset('public/frontend/assets/images/breadcrumb/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">About Us</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="{{route('/')}}"><i class="fa-light fa-house"></i>Home</a>
                                <span>About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
           
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- about area start -->
        <section class="h2_about-area pt-140 pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="h2_about-img mb-40">
                            <img src="{{ asset('public/frontend/assets/images/about/home2/bg.png') }}" alt="Image Not Found"
                                class="inner-img-1 tp_fade_right">
                            <img src="{{ asset('public/frontend/assets/images/about/home2/bg-2.png') }}"
                                alt="Image Not Found" class="inner-img-2 tp_fade_bottom">
                            <img src="{{ asset('public/frontend/assets/images/about/home2/shape.png') }}"
                                alt="Image Not Found" class="inner-img-shape">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="h2_about-content mb-40">
                            <div class="inner_section-area mb-40">
                            
                                <span class="inner_section-subtitle tp_subtitle_anim">Who We Are?</span>
                                <h2
                                    class="inner_section-title tp_title_slideup inner_section-title tp_title_slideup-big mb-25">
                                    What Makes By Rd Prographics Different?
                                </h2>

                                <p class="inner_section-text tp_fade_bottom">
                                    At By Rd Prographics, we are passionate about empowering designers, creators, and
                                    businesses with high-quality digital assets.
                                    Whether you're looking for sleek <strong>JPG</strong>, crisp <strong>PNG</strong>,
                                    scalable <strong>SVG</strong>, or professional <strong>CDR</strong> files, we’ve got you
                                    covered.
                                    <br>Explore a curated library of both <strong>free and premium files</strong> crafted to
                                    help you elevate your creative projects effortlessly.
                                </p>
                                <p class="inner_section-text mt-10 tp_fade_bottom">
                                    What sets us apart is our dedication to quality, variety, and accessibility. From logos
                                    and illustrations to editable vectors and templates,
                                    every asset is made with precision and creativity. Whether you're a beginner or a pro,
                                    By Rd Prographics is your go-to destination for digital design excellence.
                                </p>

                                {{-- <a href="#" class="theme-btn-2 tp_fade_bottom">Explore Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- about area end -->
        <!-- assistant area start -->
        <section class="h4_assistant-area">
            <div class="container">
                <div class="row g-0">
                    <div class="col-xl-6">
                        <div class="h4_assistant-wrap">
                            <ul class="nav nav-tabs h4_assistant-top" id="myTab" role="tablist">
                                <li class="nav-item tp_has_fade_anim" data-fade-from="bottom" role="presentation">
                                    <a href="#" class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" role="tab" aria-controls="home-tab-pane"
                                        aria-selected="true">ABOUT OWNER</a>
                                </li>
                                <li class="nav-item tp_has_fade_anim" data-fade-from="bottom" data-delay=".8"
                                    role="presentation">
                                    <a href="#" class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" role="tab" aria-controls="profile-tab-pane"
                                        aria-selected="false">VISION & MISSION</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <div class="h4_assistant-content">
                                        <h3 class="h4_assistant-content-title tp_has_text_reveal_anim">Roshan Mourya.</h3>
                                        <p class="tp_fade_bottom" style="margin-bottom:15px !important;">A passionate and
                                            creative Graphic Designer with 4 years of experience, specializing in visual
                                            storytelling, branding, and digital design. I have worked with 4+ companies,
                                            crafting compelling designs that enhance brand identity and engagement. Skilled
                                            in Adobe Creative Suite, UI/UX, and print media, I bring innovative ideas to
                                            life with precision and creativity.</p>
                                        <a href="https://www.instagram.com/roshanmourya0/"
                                            style="display:inline-block;">@Instagram</a> &nbsp &nbsp
                                        <a href="#" style="display:inline-block;">@LinkedIn</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <div class="h4_assistant-content" style="margin-top: 23px !important;">
                                        {{-- <h3 class="h4_assistant-content-title tp_has_text_reveal_anim">DataPulse Tracking
                                            Analytics
                                            For Informed Decisions.</h3> --}}
                                        <p class="tp_fade_bottom" style="margin-bottom:15px !important;"><span
                                                style="font-size:20px;font-weight:bold;color:white;">Vision</span> To
                                            become the go-to platform for high-quality digital assets, empowering creators,
                                            designers, and businesses with a vast collection of images, SVGs, PSDs, and
                                            other design resources for seamless creativity and innovation. </p>

                                        <p class="tp_fade_bottom" style="margin-bottom:15px !important;"> <span
                                                style="font-size:20px;font-weight:bold;color:white;">Mission</span> To
                                            become a go-to platform for designers and creators, providing high-quality
                                            digital assets that inspire innovation. We aim to enhance creativity, streamline
                                            workflows, and ensure easy access to premium resources, helping users bring
                                            their ideas to life effortlessly.</p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="h4_assistant-img bg-default"
                            data-background="{{ asset('public/frontend/assets/my_images/user.jpg') }}">
                            <img src="{{ asset('public/frontend/assets/my_images/user.jpg') }}" alt=""
                                class="tp_fade_left" style="border-radius: 0px 20px 20px 0px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- assistant area end -->
        <!-- feature area start -->
        <section class="inner_feature-area pt-140 pb-140">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="inner_feature-content mb-50 mb-md-0">
                            <div class="inner_section-area mb-20">
                                <span class="inner_section-subtitle tp_subtitle_anim">Features</span>
                                <h2 class="inner_section-title tp_title_slideup mb-30">
                                    Start Using By Rd Prographics for better images and icons</h2>
                                <p class="inner_section-text tp_fade_bottom">We've done it carefully and simply. Combined
                                    with the ingredients makes for beautiful landings.</p>
                            </div>
                            <ul class="inner_feature-content-list tp_fade_bottom">
                                <li>Budget Friendly Assets</li>
                                <li>Best Quality</li>
                                <li>Minimum File Size</li>
                                <li>Your One Stop Solution</li>
                                <li>Quick Support</li>
                            </ul>
                            {{-- <a href="#" class="theme-btn-2 tp_fade_bottom">Explore More</a> --}}
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="inner_feature-img tp_fade_left">
                            <img src="{{ asset('public/frontend/assets/images/feature/innerPage/1.png') }}"
                                alt="Image Not Found">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature area end -->


    </main>


@endsection

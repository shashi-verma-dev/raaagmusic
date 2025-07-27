@extends('layouts.frontend_app')

@section('title', 'Cockies Policy - Byrd Pro Graphics')

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
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">Cockies Policy</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="{{route('/')}}"><i class="fa-light fa-house"></i>Home</a>
                                <span>Cockies Policy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
            </div>
        </section>
        <section class="h2_about-area pt-140 pb-100">
            <div class="container">
                <div class="row align-items-center">
                  
                    <div class="col-12">
                        <div class="h2_about-content mb-40">
                            <div class="inner_section-area mb-40">
                                <h2
                                    class="inner_section-title tp_title_slideup inner_section-title tp_title_slideup-big mb-25">
                                Cockies Policy
                                </h2>

                                <p class="inner_section-text tp_fade_bottom">
                                  ByrdProGraphics uses cookies to enhance your browsing experience, analyze site traffic, and personalize content. Cookies are small text files stored on your device that help us remember your preferences, and improve overall functionality. By continuing to use our website, you consent to the use of cookies in accordance with this policy. You can disable cookies through your browser settings, but some features of the site may not function properly as a result. We do not use cookies to collect sensitive personal information without your consent.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
        </section>
      

    </main>


@endsection

@extends('layouts.frontend_app')

@section('title', 'Terms And Conditions - Byrd Pro Graphics')

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
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">Terms And Conditions</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="{{route('/')}}"><i class="fa-light fa-house"></i>Home</a>
                                <span>Terms And Conditions</span>
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
                                Terms And Conditions
                                </h2>

                                <p class="inner_section-text tp_fade_bottom">
                                  By using byrdprographics (https://byrdprographics.com), you agree to our terms of service. All downloadable content including images, SVGs, CDR files, PSD files, and other graphic assets are either free or paid and come with specific usage rights. Free files may be used for personal and limited commercial use, while paid assets are licensed for single-user use and must not be resold or redistributed. All content remains the intellectual property of ByrdProGraphics or its creators. Purchases are non-refundable except in cases of duplicate transactions or technical issues. We are not liable for misuse of our content. By accessing our site, creating an account, or downloading files, you agree to comply with these terms and our privacy practices.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
        </section>
      

    </main>


@endsection

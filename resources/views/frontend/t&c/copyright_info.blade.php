@extends('layouts.frontend_app')

@section('title', 'Copyright Information - Byrd Pro Graphics')

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
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">Copyright Information</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="{{route('/')}}"><i class="fa-light fa-house"></i>Home</a>
                                <span>Copyright Information</span>
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
                                Copyright Information
                                </h2>

                                <p class="inner_section-text tp_fade_bottom">
                                 All content available on ByrdProGraphics, including but not limited to images, SVGs, CDR files, PSD files, designs, logos, and text, is the intellectual property of ByrdProGraphics or its respective creators and is protected under applicable copyright laws. Unauthorized copying, reproduction, distribution, resale, or modification of any content is strictly prohibited. Purchased assets are licensed for personal or commercial use as per the terms specified, but ownership remains with the original creator. If you believe any content on our site infringes your copyright, please contact us immediately for review and resolution. 
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
        </section>
      

    </main>


@endsection

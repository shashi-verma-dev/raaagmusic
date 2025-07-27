@extends('layouts.frontend_app')

@section('title', 'Home - Byrd Pro Graphics')

@section('meta_title', 'Welcome to Byrd Pro Graphics')
@section('meta_description', 'Explore our custom graphic designs, paintings, and more.')
@section('meta_keywords', 'graphic design, custom artwork, paintings, digital art')
@section('meta_image', asset('images/home-banner.jpg'))
@section('meta_url', url('/'))

@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/images/breadcrumb/breadcrumb-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">Page not Found</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="template/aidoodleh/aidoodle/index.html"><i class="fa-light fa-house"></i>Home</a>
                                <span>404</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
                <img src="template/aidoodleh/aidoodle/assets/images/breadcrumb/shape-1.png" alt=""
                    class="breadcrumb-shape-1" data-speed="0.9">
                <img src="template/aidoodleh/aidoodle/assets/images/breadcrumb/shape-2.png" alt=""
                    class="breadcrumb-shape-2" data-speed="0.8">
                <img src="template/aidoodleh/aidoodle/assets/images/breadcrumb/shape-3.png" alt=""
                    class="breadcrumb-shape-3" data-speed="0.9">
                <img src="template/aidoodleh/aidoodle/assets/images/breadcrumb/circle.png" alt=""
                    class="breadcrumb-shape-4">
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- error area start -->
        <section class="error-area pt-140 pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="error-wrap text-center">
                            <div class="error-img mb-60 tp_fade_bottom">
                                <img src="template/aidoodleh/aidoodle/assets/images/bg/404.png" alt="">
                            </div>
                            <div class="error-content">
                                <h2 class="error-content-title tp_has_text_reveal_anim">Opos! Nothing Was Found</h2>
                                <p class="tp_desc_anim">Something went wrong, Looks like this page doesn't <br>
                                    exist anymore.</p>
                                <a href="template/aidoodleh/aidoodle/index.html" class="theme-btn-2 tp_fade_bottom">Go Back
                                    Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- error area end -->
    </main>
@endsection

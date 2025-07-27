@extends('layouts.frontend_app')

@section('title', 'Privacy Policy - Byrd Pro Graphics')

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
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">Privacy Policy</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="{{route('/')}}"><i class="fa-light fa-house"></i>Home</a>
                                <span>Privacy Policy</span>
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
                                Privacy Policy
                                </h2>

                                <p class="inner_section-text tp_fade_bottom">
                                  ByrdProGraphics respects your privacy and is committed to protecting your personal information. We collect basic data such as your name, email address, or contact us. This information is used only to provide and improve our services, and send occasional updates. We do not sell or share your data with third parties except when required by law or necessary for payment processing. Your information is stored securely, and you have the right to access or request deletion of your data at any time. By using our website, you agree to this privacy policy.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
        </section>
      

    </main>


@endsection

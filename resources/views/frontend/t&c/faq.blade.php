@extends('layouts.frontend_app')

@section('title', 'Frequently Asked Questions - Byrd Pro Graphics')

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
                            <h2 class="breadcrumb-title tp_has_text_reveal_anim">Frequently Asked Questions</h2>
                            <div class="breadcrumb-list tp_fade_left">
                                <a href="{{ route('/') }}"><i class="fa-light fa-house"></i>Home</a>
                                <span>Frequently Asked Questions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape">
            </div>
        </section>
      
     <section class="h2_faq-area pb-110 pt-110">
    <div class="container">
       
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-xl-10">
                <div class="h2_faq-wrap tp_fade_bottom">
                    <div class="h2_faq-content">
                        <div class="accordion" id="Expp">
                            @foreach ($faq_data as $index => $faq)
                                <div class="accordion-item mb-30">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#Expp">
                                        <div class="accordion-body">
                                            <p>{!! nl2br(e($faq->answer)) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    </main>


@endsection

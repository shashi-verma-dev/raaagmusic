@extends('layouts.frontend_app')

@section('title', 'Manage Your Account - Byrd Pro Graphics')

@section('meta_title', 'Welcome to Byrd Pro Graphics')
@section('meta_description', 'Explore our custom graphic designs, paintings, and more.')
@section('meta_keywords', 'graphic design, custom artwork, paintings, digital art')
@section('meta_url', url('/'))

@section('content')
<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg-default" data-background="{{ asset('public/frontend/assets/images/breadcrumb/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="breadcrumb-title tp_has_text_reveal_anim">Manage Your Account</h2>
                        <div class="breadcrumb-list tp_fade_left">
                            <a href="{{ route('/') }}"><i class="fa-light fa-house"></i>Home</a>
                            <span>Manage Your Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape">
        </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- contact area start -->
    <section class="contact-area pt-140 pb-140">
        <div class="container">
            
            <div class="contact-bottom pt-105">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-bottom-left">
                            <div class="inner_section-area mb-50">
                                {{-- <span class="inner_section-subtitle tp_subtitle_anim"></span> --}}
                                <h2 class="inner_section-title tp_title_slideup mb-0">Add More Amount</h2>
                            </div>
                            <div class="contact-map tp_fade_right">
                          <svg xmlns="http://www.w3.org/2000/svg" width="450" height="450" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path fill="#000" d="M13 14h1v1h-1zm1 1h1v1h-1zm0 1h1v1h-1zm2 0h1v1h-1zm0 1h1v1h-1zm-3-1h1v1h-1zm2 0h1v1h-1zm0 1h1v1h-1zm3-1h1v1h-1zm0-1h1v1h-1zm1-1h1v1h-1zm-2 2h1v1h-1zm0 1h1v1h-1zm-1 1h1v1h-1zm-1 0h1v1h-1zm2 0h1v1h-1zm1 0h1v1h-1zm-2 1h1v1h-1zm-2 0h1v1h-1zm1 0h1v1h-1zm-2 0h1v1h-1zm0 1h1v1h-1zm1 1h1v1h-1zm1 0h1v1h-1zm2 0h1v1h-1zm1 0h1v1h-1zm-1-2h1v1h-1zm1 0h1v1h-1zm1-1h1v1h-1zm0-1h1v1h-1zm0 3h1v1h-1zm0-1h1v1h-1zm1-1h1v1h-1zm0-1h1v1h-1zm1 3h1v1h-1zm0-2h1v1h-1zm0 1h1v1h-1zm-2-3h1v1h-1zm-6 1h1v1h-1zm-1 0h1v1h-1zm0 1h1v1h-1zm2 0h1v1h-1zm-3 0h1v1h-1zm2 0h1v1h-1zm-2 1h1v1h-1zm0 1h1v1h-1zm0-19h1v1h-1zm1 1h1v1h-1zm-1 2h1v1h-1zm1 1h1v1h-1zm-1 1h1v1h-1zm1 0h1v1h-1zm0 1h1v1h-1zm0 1h1v1h-1zm-1 1h1v1h-1zm1 0h1v1h-1zm-1 1h1v1h-1zM1 11h1v1H1zm1 1h1v1H2zm2-1h1v1H4zm0 1h1v1H4zm1-1h1v1H5zm1 1h1v1H6zm1-1h1v1H7zm1 1h1v1H8zm0-1h1v1H8zm1 0h1v1H9zm1 0h1v1h-1zm1 1h1v1h-1zm2 0h1v1h-1zm1-1h1v1h-1zm1 0h1v1h-1zm1 0h1v1h-1zm-1 2h1v1h-1zm-2 9h1v1h-1zm-1 0h1v1h-1zm0-9h1v1h-1zm-1 0h1v1h-1zm0 1h1v1h-1zm0 1h1v1h-1zm11-1h1v1h-1zm-1 1h1v1h-1zm1 2h1v1h-1zm-5-4h1v1h-1zm1-1h1v1h-1zm4 0h1v1h-1zm0 1h1v1h-1zm-1 0h1v1h-1zm1 8h1v1h-1zm-1 1h1v1h-1zm-2 0h1v1h-1zm3 0h1v1h-1z"/><path stroke="#000" stroke-width="2" d="M15 2h7v7h-7zM2 2h7v7H2zm0 13h7v7H2zM18 5h1v1h-1zM5 5h1v1H5zm0 13h1v1H5z"/></g></svg>
                           <br>
                         <span style="color:red;">   scan the qr code and pay then share the payment screen shot on this number     <a href="https://wa.me/919116454142" target="_blank" title="Chat with us on WhatsApp"> +91 9116454142 </a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 tp_fade_left">
                        <div class="contact-form mt-40 mt-lg-0">
                            <h3 class="contact-form-title">Update Your Information.</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                            <form action="{{ route('update-user-info') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" name="name" placeholder="Your Name" value="{{auth()->user()->name}}" required>
                                            <i class="fa-light fa-user"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="email" name="email" placeholder="Your Email" value="{{auth()->user()->email}}" required>
                                            <i class="fa-light fa-envelope"></i>
                                        </div>
                                    </div>

                                       <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" name="password" placeholder="Update Your Password (min character 4)" value="" >
                                            <i class="fa-light fa-password"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form-item pt-10">
                                            <button type="submit">Submit Form</button>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->


   
</main>
@endsection

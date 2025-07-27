@extends('layouts.frontend_app')

@section('title', 'Contact Us - Byrd Pro Graphics')

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
                        <h2 class="breadcrumb-title tp_has_text_reveal_anim">Contact Us</h2>
                        <div class="breadcrumb-list tp_fade_left">
                            <a href="{{ route('/') }}"><i class="fa-light fa-house"></i>Home</a>
                            <span>Contact Us</span>
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
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-6">
                    <div class="inner_section-area mb-50 text-center">
                        <span class="inner_section-subtitle tp_subtitle_anim">LET’S TALK</span>
                        <h2 class="inner_section-title tp_title_slideup mb-30">Feel Free To Reach Us.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30 tp_fade_left" data-fade-from="left">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-message-lines"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="contact-content-title">Chat with us.</h4>
                            <p> @if (!empty($setting->timing))
                                {{ $setting->timing }}<br><br>
                                @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 tp_fade_left" data-fade-from="left" data-delay=".6">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-phone-arrow-up-right"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="contact-content-title">Give us a call</h4>
                            @if (!empty($setting->number1))
                            <a href="tel:{{ $setting->number1 }}">{{ $setting->number1 }}</a><br>
                            @endif

                            @if (!empty($setting->number2))
                            , <a href="tel:{{ $setting->number2 }}">{{ $setting->number2 }}</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30 tp_fade_left" data-fade-from="left" data-delay=".9">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope-open"></i>
                        </div>
                        <div class="contact-content">
                            <h4 class="contact-content-title">Email with us.</h4>
                            @if (!empty($setting->email1))
                            <a href="mailto:{{ $setting->email1 }}">{{ $setting->email1 }}</a><br><br>
                            @endif

                            @if (!empty($setting->email2))
                            , <a href="mailto:{{ $setting->email2 }}">{{ $setting->email2 }}</a><br><br>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-bottom pt-105">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-bottom-left">
                            <div class="inner_section-area mb-50">
                                <span class="inner_section-subtitle tp_subtitle_anim">GET IN TOUCH</span>
                                <h2 class="inner_section-title tp_title_slideup mb-0">Connect with & ignite <br> the
                                    conversation!</h2>
                            </div>
                            <div class="contact-map tp_fade_right">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14222.68671809556!2d75.7592371354168!3d26.977294598672017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db25b05ef8c4f%3A0xa37155327f1e5d87!2sJai%20Nagar%2C%20Murlipura%2C%20Jaipur%2C%20Rajasthan%20302039!5e0!3m2!1sen!2sin!4v1745154048038!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 tp_fade_left">
                        <div class="contact-form mt-40 mt-lg-0">
                            <h3 class="contact-form-title">Fillup the form</h3>


                            <form action="{{ route('contact-submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                            <i class="fa-light fa-user"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                            <i class="fa-light fa-envelope"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" name="mobile" placeholder="Phone Number" value="{{ old('mobile') }}" required>
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="contact-form-item mb-25">
                                            <textarea name="message" placeholder="Type your message" required>{{ old('message') }}</textarea>
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


    <!-- Custom Modal -->
    <div id="customMessageModalBox" class="custom-message-modal-overlay" style="display:none;">
        <div class="custom-message-modal-container">
            <span class="custom-message-close-btn" onclick="closeCustomMessageModal()">&times;</span>

            @if (session('success'))
            <div class="custom-message-content custom-message-success" style="color:white !important">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="custom-message-content custom-message-error" style="color:white !important">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

    <style>
        .custom-message-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            /* Full screen width */
            height: 100px;
            /* Full screen height */
            background: #1b2a52;
            /* prettier gradient background */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            backdrop-filter: blur(6px);
            /* adds a subtle blur effect */
        }

        .custom-message-modal-container {

            padding: 20px 30px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            position: relative;
            animation: slideDown 0.4s ease;
        }

        @keyframes slideDownMessage {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .custom-message-close-btn {
            position: absolute;
            top: 8px;
            right: 12px;

            color: white;
            cursor: pointer;
        }

        .custom-message-error ul {
            padding-left: 20px;
            margin: 0;
        }

    </style>

    <script>
        function closeCustomMessageModal() {
            document.getElementById("customMessageModalBox").style.display = "none";
        }

        window.addEventListener("load", function() {
            @if(session('success') || $errors -> any())
            let customModal = document.getElementById("customMessageModalBox");
            if (customModal) {
                customModal.style.display = "flex";
                setTimeout(closeCustomMessageModal, 5000);
            }
            @endif
        });

    </script>

</main>
@endsection

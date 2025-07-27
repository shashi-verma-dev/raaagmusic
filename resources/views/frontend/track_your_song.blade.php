@extends('layouts.frontend_master')

@section('title', 'Track Your Song - RaaagMusic | Real-Time Order Updates & Status')
@section('description',
    'Easily track the progress of your custom song order on RaaagMusic. Get real-time updates from
    script writing to final delivery. Stay informed and excited every step of the way.')
@section('keywords',
    'track song order, RaaagMusic order status, song progress, custom song updates, music production
    tracking, personalized song journey, track my RaaagMusic song')

@push('extracss')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endpush
   
@section('content')
    <div class="container track_song_section" style="margin-top: 150px">
        <div class="track-song-wrapper animate__animated animate__fadeInUp row g-0">
            <!-- Left Info Section -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="track-song-info">
                    <div class="track-song-info-content">
                        <h2>Track Your Song</h2>
                        <p>We're turning your story into a beautiful melody. Enter your details below to see the progress of
                            your custom song creation.</p>

                        <form class="track-song-form" onsubmit="event.preventDefault(); trackSong();">
                            <div class="form-group">
                                <label for="track-song-orderId">Order ID</label>
                                <i class="fas fa-receipt form-icon"></i>
                                <input type="text" id="track-song-orderId" placeholder="e.g. ORD_12345 " required />
                            </div>

                            <div class="form-group">
                                <label for="track-song-mobileNo">Phone Number</label>
                                <i class="fas fa-mobile-alt form-icon"></i>
                                <input type="text" id="track-song-mobileNo" placeholder="Enter registered phone number"
                                    required />
                            </div>

                            <button type="submit">
                                <i class="fas fa-search"></i> Track My Song
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Timeline Section -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="track-song-progress">
                    <div class="order-status">Enter your details to track</div>
                    {{-- <div class="order-id-display" id="order-id-display" style="display: none;"></div> --}}

                    <div class="track-song-timeline">
                        <div class="track-song-step" id="track-song-step1">
                            <div class="track-song-label">
                                <span class="track-song-icon"><i class="fas fa-receipt"></i></span>
                                Order Received
                            </div>
                        </div>
                        <div class="track-song-step" id="track-song-step2">
                            <div class="track-song-label">
                                <span class="track-song-icon"><i class="fas fa-pen-nib"></i></span>
                                Lyrics Crafting
                            </div>
                        </div>
                        <div class="track-song-step" id="track-song-step3">
                            <div class="track-song-label">
                                <span class="track-song-icon"><i class="fas fa-microphone"></i></span>
                                Music Composition
                            </div>
                        </div>
                        <div class="track-song-step" id="track-song-step4">
                            <div class="track-song-label">
                                <span class="track-song-icon"><i class="fas fa-sliders-h"></i></span>
                                Recording & Production
                            </div>
                        </div>
                        <div class="track-song-step" id="track-song-step5">
                            <div class="track-song-label">
                                <span class="track-song-icon"><i class="fas fa-music"></i></span>
                                Final Delivery
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="contact-support">
                        Questions about your order? <a href="#"><i class="fas fa-headset"></i> Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@push('extrajs')
    <script>
        function trackSong() {
            const orderId = document.getElementById("track-song-orderId").value.trim();
            const mobileNo = document.getElementById("track-song-mobileNo").value.trim();

            if (!orderId || !mobileNo) {
                alert("Please enter both Order ID and Mobile Number.");
                return;
            }

            // Display order ID
            // const orderIdDisplay = document.getElementById("order-id-display");
            // orderIdDisplay.textContent = `Order: ${orderId}`;
            // orderIdDisplay.style.display = "inline-block";

            // Update status text
            document.querySelector(".order-status").textContent = "Your Song Progress";
            document.querySelector(".order-status").classList.add("animate__animated", "animate__pulse");

            // Reset all steps
            for (let i = 1; i <= 5; i++) {
                const step = document.getElementById(`track-song-step${i}`);
                step.classList.remove("completed", "active");
                step.style.opacity = "0.5";
            }

            // Simulate backend progress with random current step
            const currentStep = Math.floor(Math.random() * 5) + 1;
            const completionDate = new Date();
            completionDate.setDate(completionDate.getDate() + (5 - currentStep) + Math.floor(Math.random() * 3));

            document.getElementById("completion-date").textContent =
                completionDate.toLocaleDateString('en-US', {
                    weekday: 'long',
                    month: 'long',
                    day: 'numeric'
                });

            // Animate steps
            for (let i = 1; i <= currentStep; i++) {
                setTimeout(() => {
                    const step = document.getElementById(`track-song-step${i}`);

                    if (i === currentStep) {
                        step.classList.add("active");

                    } else {
                        step.classList.add("completed");
                    }

                    step.classList.add("animate__animated", "animate__fadeIn");
                }, i * 400);
            }
        }
    </script>
    @endpush
@endsection

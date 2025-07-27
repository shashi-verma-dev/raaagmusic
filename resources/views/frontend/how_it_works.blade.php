@extends('layouts.frontend_master')

@section('title', 'How It Works - RaaagMusic | Create Your Own Custom Song Easily')
@section('description',
    'Discover how RaaagMusic turns your story into a one-of-a-kind song. From sharing your idea to
    receiving a studio-quality track — it’s easy, fast, and magical.')

@section('keywords',
    'how it works RaaagMusic, custom song process, create personalized song, song creation steps,
    unique gift idea, AI music with human touch, personalized music guide')


@section('content')



    <div class="how_it_page_hero">
        <h1>Create a Song That Tells Your Story</h1>
        <p>From your memories to music – we bring your emotions to life with a custom song.</p>
        <a href="{{route('create-your-song')}}" class="how_it_page_cta_button">Create Your Song</a>
    </div>

    <section class="how_it_page_steps">
        <h2>How It Works</h2>
        <div class="how_it_page_step_wrapper">
            <div class="how_it_page_step"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="600">
                <div class="how_it_page_step_icon">📖</div>
                <h3>1. Share Your Story</h3>
                <p>Tell us about your memories, emotions, and preferences using our detailed form.</p>
            </div>
            <div class="how_it_page_step"  data-aos="fade-up" data-aos-delay="150" data-aos-duration="600">
                <div class="how_it_page_step_icon">🎵</div>
                <h3>2. We Create Magic</h3>
                <p>Our expert musicians compose, write lyrics, and record your personalized song.</p>
            </div>
            <div class="how_it_page_step"  data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="how_it_page_step_icon">🎁</div>
                <h3>3. Receive Your Song</h3>
                <p>Your custom song is delivered on time, polished and ready to impress!</p>
            </div>
        </div>
    </section>

    <section class="how_it_page_why_us">
        <h2>Why Choose RAAAG Music?</h2>
        <ul>
            <li>🎤 100% Original Music & Lyrics</li>
            <li>💎Premium Quality Songs</li>
            <li>💌 Personalized with Emotions</li>
            <li>⏱ Fast & On-Time Delivery</li>
            <li>🌟 Satisfaction Guaranteed</li>
        </ul>
    </section>


    <section class="how_it_page_testimonials">
        <h2  style="text-align: center;" >What Our Customers Say</h2>
         <div class="custom-testimonials-slider">
                    <button class="custom-testimonials-nav custom-testimonials-prev" aria-label="Previous testimonial">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div class="custom-testimonials-track">

                        <div class="custom-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-testimonial-header">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah"
                                    class="custom-testimonial-img">
                                <div>
                                    <h4 class="custom-testimonial-name">Sarah & Michael</h4>
                                    <p class="custom-testimonial-role">Wedding</p>
                                </div>
                            </div>
                            <p class="custom-testimonial-text">"Our wedding song was absolutely perfect! It captured our
                                love story beautifully and had every guest in tears. The process was seamless and the final
                                result exceeded our expectations."</p>
                            <div class="custom-testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>

                        <div class="custom-testimonial-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="custom-testimonial-header">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jennifer"
                                    class="custom-testimonial-img">
                                <div>
                                    <h4 class="custom-testimonial-name">Jennifer & David</h4>
                                    <p class="custom-testimonial-role">25th Anniversary</p>
                                </div>
                            </div>
                            <p class="custom-testimonial-text">"What a beautiful way to celebrate 25 years together! The
                                song told our story perfectly, from our first date to becoming grandparents. Truly magical."
                            </p>
                            <div class="custom-testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>

                        <div class="custom-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-testimonial-header">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="TechFlow"
                                    class="custom-testimonial-img">
                                <div>
                                    <h4 class="custom-testimonial-name">TechFlow Corp</h4>
                                    <p class="custom-testimonial-role">Corporate Launch</p>
                                </div>
                            </div>
                            <p class="custom-testimonial-text">"The custom anthem for our product launch was incredible. It
                                perfectly embodied our company values and energized our entire team. Highly professional
                                service!"</p>
                            <div class="custom-testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>

                        <div class="custom-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="custom-testimonial-header">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Robert"
                                    class="custom-testimonial-img">
                                <div>
                                    <h4 class="custom-testimonial-name">Robert Johnson</h4>
                                    <p class="custom-testimonial-role">Birthday Surprise</p>
                                </div>
                            </div>
                            <p class="custom-testimonial-text">"I surprised my wife with a song for her 40th birthday. The
                                lyrics captured our journey together perfectly. She was moved to tears - best gift I've ever
                                given!"</p>
                            <div class="custom-testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <button class="custom-testimonials-nav custom-testimonials-next" aria-label="Next testimonial">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
    </section>


    <section class="how_it_page_cta_final">
        <h2>Every Memory Has a Melody</h2>
        <p>Let us turn your unforgettable moments into a song that speaks from the heart.</p>
        <a href="{{route('create-your-song')}}" class="how_it_page_cta_button">Create Your Song Now</a>
    </section>

@endsection

@extends('layouts.frontend_master')

@section('title', 'Home - RaaagMusic | Custom Songs for Every Occasion')
@section('description',
    'Create your own personalized song for birthdays, anniversaries, weddings, or just to express
    your feelings. RaaagMusic helps you turn emotions into unforgettable melodies.')
@section('keywords',
    'RaaagMusic, custom song, personalized music, birthday gift song, anniversary music, wedding
    proposal song, unique gifts, emotional music')

@section('content')
    @if ($Website_status->status == 1)

        <!-- Hero Section -->
        <section class="hero-section">


            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12">

                        <div class="floating-icons " id="floatingIcons"></div>
                    </div>
                </div>
            </div>

            <div class="container hero_container">
                <div class="row" style="text-align: left;">
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <img src="{{ asset('public/frontend/assets/images/index_page_image/hero_img2.jpg') }}"
                            style="border-top-left-radius: 16px; border-top-right-radius: 16px;" width="100%">
                        {{-- Call the audio player with audio file --}}
                        <div id="nexus-audio-player" class="nexus-player">
                            <div class="nexus-waveform" id="nexus-waveform">
                                @for ($i = 0; $i < 30; $i++)
                                    <div class="nexus-wave-bar"></div>
                                @endfor
                            </div>
                            <div class="nexus-controls">
                                <button id="nexus-prev-btn" class="nexus-control-btn" aria-label="Previous track">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 6V18M17 6L11 12L17 18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                                <button id="nexus-play-btn" class="nexus-control-btn nexus-play-btn"
                                    aria-label="Play/pause">
                                    <svg class="play-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 5V19L19 12L8 5Z" fill="currentColor" />
                                    </svg>
                                    <svg class="pause-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <rect x="6" y="5" width="4" height="14" fill="currentColor" />
                                        <rect x="14" y="5" width="4" height="14" fill="currentColor" />
                                    </svg>
                                </button>
                                <button id="nexus-next-btn" class="nexus-control-btn" aria-label="Next track">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 6L12 12L6 18M18 6V18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                                <span class="raag-tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 1024 1024">
                                        <path fill="#fff"
                                            d="M512 64a448 448 0 1 1 0 896.064A448 448 0 0 1 512 64m67.2 275.072c33.28 0 60.288-23.104 60.288-57.344s-27.072-57.344-60.288-57.344c-33.28 0-60.16 23.104-60.16 57.344s26.88 57.344 60.16 57.344M590.912 699.2c0-6.848 2.368-24.64 1.024-34.752l-52.608 60.544c-10.88 11.456-24.512 19.392-30.912 17.28a12.99 12.99 0 0 1-8.256-14.72l87.68-276.992c7.168-35.136-12.544-67.2-54.336-71.296c-44.096 0-108.992 44.736-148.48 101.504c0 6.784-1.28 23.68 0.064 33.792l52.544-60.608c10.88-11.328 23.552-19.328 29.952-17.152a12.8 12.8 0 0 1 7.808 16.128L388.48 728.576c-10.048 32.256 8.96 63.872 55.04 71.04c67.84 0 107.904-43.648 147.456-100.416z" />
                                    </svg>
                                    <span class="raag-tooltip-text">Raksha Bandhan Special Song</span>
                                </span>

                            </div>
                            <audio id="nexus-audio-element"
                                src="{{ asset('public/frontend/assets/sample_songs/rakshabandhan_gift_sonali.mp3') }}"></audio>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 herosection_mobile" data-aos="fade-up">

                        <span style="display: inline-flex; align-items: center; color: #ed860b; font-weight: bold;">
                            <img src="{{ asset('public/frontend/assets/lotti_animations/loading.gif') }}" height="80px"
                                style="position: absolute;margin-left:-30px;"> <span style="margin-left: 30px;"> Custom Song
                                Creation</span></span>
                        <h1 class="hero-title gradient-text">Turn Your Memories <br> Into Music</h1>

                        {{-- <p class="fw-bold fst-italic">
                            "Express your emotions through melody — create a personalized song in minutes with studio-quality sound, all within budget. A one-of-a-kind gift they’ll never forget!"
                        </p> --}}

                        <p class="hero-subtitle fw-bold fst-italic">"Professional custom song creation for weddings,
                            corporate events, and
                            special occasions. Let us craft the perfect soundtrack for your most important moments."</p>
                        <div class="d-flex  gap-3">
                            <a href="#" class="create-btn  btnhover" style="text-decoration: none;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#fff"
                                        d="M12 8.5V7.486m0 .264c0-2.9 2.35-5.25 5.25-5.25s5.25 2.382 5.25 5.282c0 1.56-.687 3.055-1.88 4.062l-5.657 4.776A8.35 8.35 0 0 0 12 23a8.35 8.35 0 0 0-2.963-6.38L3.38 11.844A5.33 5.33 0 0 1 1.5 7.782c0-2.9 2.35-5.282 5.25-5.282S12 4.85 12 7.75Z"
                                        stroke-width="1" />
                                </svg> Create Your
                                Song</a>
                            <a href="#sample_song_section" class="create-btn2" style="text-decoration: none;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path
                                            d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                        <path fill="#7a38d2"
                                            d="M19.026 2.27a1.5 1.5 0 0 1 1.968 1.292l.006.132v3.585a2 2 0 0 1-1.218 1.84l-.15.057L15 10.721V17.5l-.005.212a4.5 4.5 0 1 1-2.214-4.092l.219.138V6.44a3 3 0 0 1 1.88-2.782l.171-.064zM10.5 15a2.5 2.5 0 1 0 2.495 2.664L13 17.5a2.5 2.5 0 0 0-2.5-2.5M7 1a1 1 0 0 1 .946.677l.13.378a3 3 0 0 0 1.869 1.87l.378.129a1 1 0 0 1 0 1.892l-.378.13a3 3 0 0 0-1.87 1.869l-.129.378a1 1 0 0 1-1.892 0l-.13-.378a3 3 0 0 0-1.869-1.87l-.378-.129a1 1 0 0 1 0-1.892l.378-.13a3 3 0 0 0 1.87-1.869l.129-.378A1 1 0 0 1 7 1m12 3.387l-3.316 1.106a1 1 0 0 0-.677.832L15 6.441v2.171l4-1.333zm-12-.19A5 5 0 0 1 6.196 5q.448.355.804.804q.355-.448.804-.804A5 5 0 0 1 7 4.196" />
                                    </g>
                                </svg> Samples Songs</a>
                        </div>
                        {{-- 
                        <div class="container">
                            <div class="row">
                                <div class="col-4 col-md-4 col-sm-6">
                                    <div class="stat-item">
                                        <div class="stat-number">150+</div>
                                        <div class="stat-label">Songs Created</div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-sm-6">
                                    <div class="stat-item">
                                        <div class="stat-number">95%</div>
                                        <div class="stat-label">Happy Clients</div>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-sm-6">
                                    <div class="stat-item">
                                        <div class="stat-number">03+</div>
                                        <div class="stat-label">Months</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <br><br>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        {{-- <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Songs Created</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-item">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">

                <h2 class="section-title">Why Clients <span class="gradient-text"> Choose Us </span></h2>
                <p class="section-subtitle">Experience the magic of personalized music that captures the essence of your
                    special moments</p>

                <div class="row">

                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="900">
                        <div class="feature-card">
                            <div class="feature-icon">
                                {{-- <i class="fas fa-heart"></i> --}}
                                <div class="emotional_touch">
                                    <img src="{{ asset('public/frontend/assets/images/index_page_icons/emotional_touch.png') }}"
                                        width="38px" alt="">
                                </div>
                            </div>
                            <h3 class="feature-title">Emotional Connection</h3>
                            <p class="feature-text">Our songs create deep emotional bonds that last a lifetime</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mobile_margin_mid_section" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="900">
                        <div class="feature-card">
                            <div class="feature-icon">
                                {{-- <i class="fas fa-star"></i> --}}
                                <div class="emotional_conncetion">
                                    <img src="{{ asset('public/frontend/assets/images/index_page_icons/crown.png') }}"
                                        width="35px" alt="">
                                </div>
                            </div>
                            <h3 class="feature-title">Premium Quality</h3>
                            <p class="feature-text">Professional-grade production with attention to every detail</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="900">
                        <div class="feature-card">
                            <div class="feature-icon">
                                {{-- <i class="fas fa-user-edit"></i> --}}
                                <div class="heartdiv">
                                    <img src="{{ asset('public/frontend/assets/images/index_page_icons/heart.png') }}"
                                        width="35px" alt="">
                                </div>
                            </div>
                            <h3 class="feature-title">Personal Touch</h3>
                            <p class="feature-text">Every song is uniquely crafted to tell your personal story</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Samples Section -->
        {{-- <section class="samples-section">
        <div class="container">
            <h2 class="section-title">Sample Creations</h2>
            <p class="section-subtitle">Listen to examples of our custom songs and discover the perfect style for your occasion</p>
            
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="sample-card">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Forever Yours" class="sample-img">
                        <div class="sample-body">
                            <h3 class="sample-title">Forever Yours</h3>
                            <p class="sample-text">A romantic ballad celebrating eternal love</p>
                            <div class="d-flex justify-content-between align-items-center">
                               <audio controls>
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sample-card">
                        <img src="https://images.unsplash.com/photo-1468164016595-6108e4c60c8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Together We Rise" class="sample-img">
                        <div class="sample-body">
                            <h3 class="sample-title">Together We Rise</h3>
                            <p class="sample-text">An inspiring anthem for team achievement</p>
                            <div class="d-flex justify-content-between align-items-center">
                               <audio controls>
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
      </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sample-card">
                        <img src="https://images.unsplash.com/photo-1518621736915-f3b1c41bfd00?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Golden Memories" class="sample-img">
                        <div class="sample-body">
                            <h3 class="sample-title">Golden Memories</h3>
                            <p class="sample-text">A nostalgic journey through decades of love</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <audio controls>
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="sample-card">
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="New Beginnings" class="sample-img">
                        <div class="sample-body">
                            <h3 class="sample-title">New Beginnings</h3>
                            <p class="sample-text">A forward-looking piece about innovation</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <audio controls>
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- Samples Section with Carousel -->
        <section class="samples-section" id="sample_song_section">
            <div class="container">
                <h2 class="section-title text-center">Sample <span class="gradient-text">Creations</span></h2>
                <p class="section-subtitle text-center">Listen to examples of our custom songs and discover the perfect
                    style for your occasion</p>

                <div class="position-relative">
                    <!-- Wrapper -->
                    <div class="overflow-hidden">
                        <div class="d-flex transition" id="card-track">
                            <!-- Card 1 -->
                            <div class="card-wrapper">
                                <div class="sample-card">
                                    <div class="sample-header">
                                        <span class="song-duration">Wedding • 3:45</span>
                                        <span class="song-tag romantic">Romantic</span>
                                    </div>
                                    <div class="imggraphic position-relative"
                                        style="overflow: hidden; background-image: url('{{ asset('public/frontend/assets/images/index_page_image/weddingjpg.jpg') }}'); background-size: cover; background-position: center; height: 150px;">
                                        <!-- Optional overlay or play button here -->
                                    </div>
                                    <div class="sample-body">
                                        <h3 class="sample-title">Forever Yours</h3>
                                        <p class="sample-text">A romantic ballad celebrating eternal love</p>
                                        {{-- <div class="sample-actions">
                                            <a href="#" class="learn-more" title="The lyrics generated by AI">lyrics
                                                By AI </a> &nbsp
                                            <a href="#" class="learn-more" title="The song sung by AI">Sung By AI
                                            </a>
                                            &nbsp
                                            <a href="#" class="learn-more"
                                                title="The final amount of song including free addons">Price : 300 INR.</a>
                                        </div> --}}
                                        <audio controls>
                                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card-wrapper">
                                <div class="sample-card">
                                    <div class="sample-header">
                                        <span class="song-duration">Romantic • 4:12</span>
                                        <span class="song-tag inspiring">Inspiring</span>
                                    </div>
                                    <div class="imggraphic position-relative"
                                        style="overflow: hidden; background-image: url('{{ asset('public/frontend/assets/images/index_page_image/romanticjpg.jpg') }}'); background-size: cover; background-position: center; height: 150px;">
                                        <!-- Optional overlay or play button here -->
                                    </div>
                                    <div class="sample-body">
                                        <h3 class="sample-title">Together We Rise</h3>
                                        <p class="sample-text">An inspiring anthem for team achievement</p>
                                        {{-- <div class="sample-actions">
                                            <a href="#" class="learn-more"
                                                title="The lyrics generated by AI">lyrics By AI </a> &nbsp
                                            <a href="#" class="learn-more" title="The song sung by AI">Sung By AI
                                            </a> &nbsp
                                            <a href="#" class="learn-more"
                                                title="The final amount of song including free addons">Price : 300 INR.</a>
                                        </div> --}}
                                        <audio controls>
                                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card-wrapper">
                                <div class="sample-card">
                                    <div class="sample-header">
                                        <span class="song-duration">Anniversary • 4:30</span>
                                        <span class="song-tag nostalgic">Nostalgic</span>
                                    </div>
                                    <div class="imggraphic position-relative"
                                        style="overflow: hidden; background-image: url('{{ asset('public/frontend/assets/images/index_page_image/anniversary.jpg') }}'); background-size: cover; background-position: center; height: 150px;">
                                        <!-- Optional overlay or play button here -->
                                    </div>
                                    <div class="sample-body">
                                        <h3 class="sample-title">Golden Memories</h3>
                                        <p class="sample-text">A nostalgic journey through decades of love</p>
                                        {{-- <div class="sample-actions">
                                            <a href="#" class="learn-more"
                                                title="The lyrics generated by AI">lyrics By AI </a> &nbsp
                                            <a href="#" class="learn-more" title="The song sung by AI">Sung By AI
                                            </a> &nbsp
                                            <a href="#" class="learn-more"
                                                title="The final amount of song including free addons">Price : 300 INR.</a>
                                        </div> --}}
                                        <audio controls>
                                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card-wrapper">
                                <div class="sample-card">
                                    <div class="sample-header">
                                        <span class="song-duration">Birthday • 4:30</span>
                                        <span class="song-tag nostalgic">Nostalgic</span>
                                    </div>
                                    <div class="imggraphic position-relative"
                                        style="overflow: hidden; background-image: url('{{ asset('public/frontend/assets/images/index_page_image/birthday.jpg') }}'); background-size: cover; background-position: center; height: 150px;">
                                        <!-- Optional overlay or play button here -->
                                    </div>
                                    <div class="sample-body">
                                        <h3 class="sample-title">Golden Memories</h3>
                                        <p class="sample-text">A nostalgic journey through decades of love</p>
                                        {{-- <div class="sample-actions">
                                            <a href="#" class="learn-more"
                                                title="The lyrics generated by AI">lyrics By AI </a> &nbsp
                                            <a href="#" class="learn-more" title="The song sung by AI">Sung By AI
                                            </a> &nbsp
                                            <a href="#" class="learn-more"
                                                title="The final amount of song including free addons">Price : 300 INR.</a>
                                        </div> --}}
                                        <audio controls>
                                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>


                            <!-- Card 3 -->
                            <div class="card-wrapper">
                                <div class="sample-card">
                                    <div class="sample-header">
                                        <span class="song-duration">Anniversary • 4:30</span>
                                        <span class="song-tag nostalgic">Nostalgic</span>
                                    </div>
                                    <div class="imggraphic position-relative">
                                        <div class="play-button">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                    <div class="sample-body">
                                        <h3 class="sample-title">Golden Memories</h3>
                                        <p class="sample-text">A nostalgic journey through decades of love</p>
                                        {{-- <div class="sample-actions">
                                            <a href="#" class="learn-more"
                                                title="The lyrics generated by AI">lyrics By AI </a> &nbsp
                                            <a href="#" class="learn-more" title="The song sung by AI">Sung By AI
                                            </a> &nbsp
                                            <a href="#" class="learn-more"
                                                title="The final amount of song including free addons">Price : 300 INR.</a>
                                        </div> --}}
                                        <audio controls>
                                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3"
                                                type="audio/mpeg">
                                        </audio>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="position-absolute top-50 start-0 translate-middle-y" id="prevBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="#0a58ca">
                            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
                        </svg>
                    </button>
                    <button class="position-absolute top-50 end-0 translate-middle-y" id="nextBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="#0a58ca">
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>


        <section class="pricing-section1" id="pricing-cards">
            <div class="container-fluid">
                <h2 class="section-title" style="
  font-size: 40px;
  margin-bottom: 40px;">Choose your Package <span
                        class="gradient-text">As Your Need</span></h2>

                <div class="pricing-wrapper">

                    <!-- Pocket-Friendly AI Song -->
                    <div class="pricing-cardd card-basic purple-border" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="200">
                        <div class="badge">BUDGET FRIENDLY</div>
                        <div class="card-header">
                            <h3>Budget-Friendly AI Song</h3>
                            <span class="price">Starting at ₹399</span>
                        </div>
                        <table class="features-table-basic">
                            <tbody>
                                <tr>
                                    <td class="label">🖊️ Lyrics by:</td>
                                    <td class="value">AI</td>
                                </tr>
                                <tr>
                                    <td class="label">🎶 Singing by:</td>
                                    <td class="value">AI Voice</td>
                                </tr>
                                <tr>
                                    <td class="label">Delivery Time:</td>
                                    <td class="value">1-3 Days</td>
                                </tr>
                                <tr>
                                    <td class="label">Customization:</td>
                                    <td class="value">Basic</td>
                                </tr>
                                <tr>
                                    <td class="label">Revisions:</td>
                                    <td class="value">Lyrics - 1, Song - 1</td>
                                </tr>
                                <tr>
                                    <td class="label">Languages:</td>
                                    <td class="value">Hindi, English</td>
                                </tr>
                                <tr>
                                    <td class="label">Lyrics PDF:</td>
                                    <td class="value">FREE ✔️</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="heightdiv1"></div>

                        <audio controls class="audio-sample">
                            <source src="#" type="audio/mpeg" />
                        </audio>
                        <a href="{{ route('create-your-song') }}" class="create-btn">Create Your Song</a>
                    </div>

                    <!-- Artist AI Fusion Song -->
                    <div class="pricing-cardd card-value silver-border" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="400">
                        <div class="badge orange">VALUE FOR MONEY</div>
                        <div class="card-header">
                            <h3>Artist Meets AI Song</h3>
                            <span class="price">Starting at ₹799</span>
                        </div>
                        <table class="features-table-value">
                            <tbody>
                                <tr>
                                    <td class="label">🖊️ Lyrics by:</td>
                                    <td class="value">Professional Lyricist</td>
                                </tr>
                                <tr>
                                    <td class="label">🎶 Singing by:</td>
                                    <td class="value">AI Voice (premium Voice)</td>
                                </tr>
                                <tr>
                                    <td class="label">Delivery Time:</td>
                                    <td class="value">2-4 Days</td>
                                </tr>
                                <tr>
                                    <td class="label">Customization:</td>
                                    <td class="value">High</td>
                                </tr>
                                <tr>
                                    <td class="label">Revisions:</td>
                                    <td class="value">Lyrics - Unlimited, Song - 1</td>
                                </tr>
                                <tr>
                                    <td class="label">Languages:</td>
                                    <td class="value">Hindi, English</td>
                                </tr>
                                <tr>
                                    <td class="label">Lyrics PDF:</td>
                                    <td class="value">FREE ✔️</td>
                                </tr>
                                <tr>
                                    <td class="label">Cover Art:</td>
                                    <td class="value">FREE ✔️</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="heightdiv2"></div>
                        <audio controls class="audio-sample">
                            <source src="#" type="audio/mpeg" />
                        </audio>
                        <a href="{{ route('create-your-song') }}" class="create-btn">Create Your Song</a>
                    </div>

                    <!-- 100% Artist Song -->
                    <div class="pricing-cardd card-premium gold-border" data-aos="flip-left"
                        data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-delay="600">
                        <div class="badge green">BEST SELLER</div>
                        <div class="card-header">
                            <h3>Human-Touched Melody Song</h3>
                            <span class="price">Starting at ₹1499</span>
                        </div>
                        <table class="features-table-premium">
                            <tbody>
                                <tr>
                                    <td class="label">🖊️ Lyrics by:</td>
                                    <td class="value">Professional Lyricist</td>
                                </tr>
                                <tr>
                                    <td class="label">🎶 Singing by:</td>
                                    <td class="value">Ai Voice (like real artist)</td>
                                </tr>
                                <tr>
                                    <td class="label">Delivery Time:</td>
                                    <td class="value">2-7 Days</td>
                                </tr>
                                <tr>
                                    <td class="label">Customization:</td>
                                    <td class="value">Premium</td>
                                </tr>
                                <tr>
                                    <td class="label">Revisions:</td>
                                    <td class="value">Until 100% Satisfaction</td>
                                </tr>
                                <tr>
                                    <td class="label">Languages:</td>
                                    <td class="value">Hindi, English</td>
                                </tr>
                                <tr>
                                    <td class="label">Lyrics PDF:</td>
                                    <td class="value">FREE ✔️</td>
                                </tr>
                                <tr>
                                    <td class="label">Cover Art:</td>
                                    <td class="value">FREE ✔️</td>
                                </tr>
                                <tr>
                                    <td class="label">Photo Lyrrical Video:</td>
                                    <td class="value">FREE ✔️</td>
                                </tr>
                            </tbody>

                        </table>

                        <audio controls class="audio-sample">
                            <source src="#" type="audio/mpeg" />
                        </audio>
                        <a href="{{ route('create-your-song') }}" class="create-btn">Create Your Song</a>
                    </div>

                </div>
            </div>
        </section>




        <!-- Testimonials Section -->
        <section class="custom-testimonials-section">
            <div class="custom-testimonials-container">
                <h2 class="custom-testimonials-title">What Our <span class="custom-testimonials-gradient">Clients
                        Say</span></h2>
                <p class="custom-testimonials-subtitle">Real stories from real people whose special moments we've had the
                    honor to soundtrack</p>

                <div class="custom-testimonials-slider">
                    <button class="custom-testimonials-nav custom-testimonials-prev" aria-label="Previous testimonial">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <div class="custom-testimonials-track">

                        @foreach ($testimonials_data as $testimonial)
                            <div class="custom-testimonial-card" data-aos="fade-up" data-aos-delay="100" style="    background: linear-gradient(to left, #a95fd245, #5e2dd875);">
                                <div class="custom-testimonial-header">
                                    <div>
                                        <h4 class="custom-testimonial-name">{{ $testimonial->name }}. &nbsp <span class="song-tag nostalgic">{{ $testimonial->post }}</span></h4>
                                        {{-- <p class="custom-testimonial-role song-tag nostalgic" style="color: black;">{{ $testimonial->post }}</p> --}}
                                    </div>
                                </div>
                                <p class="custom-testimonial-text" style="color: black;">{{ $testimonial->message }}</p>
                                <div class="custom-testimonial-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star{{ $i <= $testimonial->stars ? '' : '-o' }}"></i>
                                    @endfor
                                </div>
                            </div>
                        @endforeach



                    </div>

                    <button class="custom-testimonials-nav custom-testimonials-next" aria-label="Next testimonial">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Start Your Musical Journey</h2>
                <p class="cta-text">Choose your occasion and let us create something extraordinary just for you</p>
                <a href="{{ route('create-your-song') }}" class="btn-light">Create Your Song</a>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="pricing-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card">
                            <div class="feature-item d-flex align-items-center gap-3">
                                <div class="feature-icon">
                                    <div class="emotional_touch1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <path fill="#ef2b4c"
                                                d="M4.24 12.25a4.2 4.2 0 0 1-1.24-3A4.25 4.25 0 0 1 7.25 5c1.58 0 2.96.86 3.69 2.14h1.12A4.24 4.24 0 0 1 15.75 5A4.25 4.25 0 0 1 20 9.25c0 1.17-.5 2.25-1.24 3L11.5 19.5zm15.22.71C20.41 12 21 10.7 21 9.25A5.25 5.25 0 0 0 15.75 4c-1.75 0-3.3.85-4.25 2.17A5.22 5.22 0 0 0 7.25 4A5.25 5.25 0 0 0 2 9.25c0 1.45.59 2.75 1.54 3.71l7.96 7.96z" />
                                        </svg>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="pricing-title gradient-text mb-1">Wedding Songs Enquiries</h3>
                                    <p class="mb-0">Create the perfect soundtrack for your special day</p>
                                </div>
                            </div>


                            <ul class="pricing-features">
                                <li>First Dance Songs</li>
                                <li>Ceremony Music</li>
                                <li>Reception Entertainment</li>
                                <li>Family Dedications</li>
                            </ul>
                            {{-- <p class="text-center"><i class="fas fa-check-circle text-primary me-2"></i>Free consultation included</p> --}}
                            <p class="delivery-time"><i class="fas fa-clock me-2"></i>2-3 weeks delivery time</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btnhover" style="border-radius:4px;">Enquire
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card">

                            <div class="feature-item d-flex align-items-center gap-3">
                                <div class="feature-icon">
                                    <div class="emotional_touch2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="#2b5def" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <rect width="16" height="20" x="4" y="2" rx="2"
                                                    ry="2" />
                                                <path
                                                    d="M9 22v-4h6v4M8 6h.01M16 6h.01M12 6h.01M12 10h.01M12 14h.01M16 10h.01M16 14h.01M8 10h.01M8 14h.01" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="pricing-title gradient-text mb-1">Corporate Events Enquiries</h3>
                                    <p class="mb-0">Professional music for business occasions</p>
                                </div>
                            </div>


                            <ul class="pricing-features">
                                <li>Company Anthems</li>
                                <li>Product Launch Music</li>
                                <li>Team Building Songs</li>
                                <li>Brand Jingles</li>
                            </ul>
                            {{-- <p class="text-center"><i class="fas fa-check-circle text-primary me-2"></i>Free consultation included</p> --}}
                            <p class="delivery-time"><i class="fas fa-clock me-2"></i>2-3 weeks delivery time</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary btnhover" style="border-radius:4px;">Enquire
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="text-center mt-4">
                <p>Need something different? We create custom songs for all occasions.</p>
            </div> --}}
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <h2 class="section-title">Frequently Asked <span class="gradient-text"> Questions </span> </h2>
                <p class="section-subtitle">Everything you need to know about our custom song creation process</p>

                <div class="accordion" id="faqAccordion">
                    @foreach ($faq_data as $key => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $key }}">
                                <button class="accordion-button {{ $key != 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"
                                    aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $key }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $key }}"
                                class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $key }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="text-center mt-5">
                    <p>Still have questions? We're here to help!</p>
                    <a href="#" class="btn btn-primary"><i class="fas fa-phone me-2"></i>Call Now</a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="container">
                <h2 class="section-title">Let's Create <span class="gradient-text"> Together </span></h2>
                <p class="section-subtitle">Ready to turn your story into music? Get in touch and let's discuss your vision
                </p>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-card">
                            <h3 class="contact-title">Send Us a Message</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select form-control">
                                            <option selected>Select event type</option>
                                            <option>Wedding</option>
                                            <option>Anniversary</option>
                                            <option>Corporate Event</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Event Date (dd/mm/yyyy)">
                                <textarea class="form-control" rows="4"
                                    placeholder="Share details about your event, the story you want to tell, preferred music style, and any specific requirements..."></textarea>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="mb-0">We typically respond to all inquiries within 24 hours.</p>
                                    <button type="submit" class="btn btn-primary"> <svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11zm7.318-19.539l-10.94 10.939" />
                                        </svg> &nbsp Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-card">
                            <h3 class="contact-title">Get in Touch</h3>
                            <div class="contact-info">
                                <div class="contact-info-item">
                                    <i class="fas fa-phone contact-icon"></i>
                                    <span>+1 (555) 123-4567</span>
                                </div>
                                <div class="contact-info-item">
                                    <i class="fas fa-envelope contact-icon"></i>
                                    <span>hello@melodicmemories.com</span>
                                </div>


                            </div>

                        </div>
                        <div class="contact-card">
                            <h3 class="contact-title">Quick Response</h3>


                            <div class="contact-info-item">
                                <span>Schedule Your Events / Connect With Us.</span>
                            </div>

                            <div class="text-center">
                                <a href="#" class="btn btn-primary custom_btn">Schedule Your Event</a>
                            </div>

                            <div class="text-center">
                                <a href="#" class="btn btn-outline-secondary custom_btn">Contact Us Now</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <style>
            .modal-backdrop.show {
                opacity: 0 !important;
            }

            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
            }
        </style>
        <!-- Modal -->
        <div class="modal fade" id="maintenanceModal" tabindex="-1" aria-labelledby="maintenanceModalLabel"
            aria-hidden="true" style="    background: rgb(204 200 207 / 52%);">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title w-100" id="maintenanceModalLabel">⚠️ Website Is Under Maintenance</h5>
                    </div>
                    <div class="modal-body">
                        {{ $Website_status->note }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap Modal Script -->
        <script>
            window.onload = function() {
                const modal = new bootstrap.Modal(document.getElementById('maintenanceModal'), {
                    backdrop: 'static', // Prevent closing by clicking outside
                    keyboard: false // Prevent closing by pressing ESC
                });
                modal.show();
            };
        </script>

    @endif
@endsection

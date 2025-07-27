@extends('layouts.frontend_master')

@section('title', 'Raagmusic Create your song')
@section('description', 'Raagmusic Create your song')
@section('keywords', 'Raagmusic Create your song')

@section('content')
    <!-- Hero Section -->
    <section class="create_song_page-hero">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">


                <!-- Left GIF -->
                <div class="col-12 col-md-2 mb-4 mb-md-0 d-flex justify-content-center">

                </div>

                <!-- Center Content -->
                <div class="col-12 col-md-8" style="text-align: center;">
                    <h1 class="display-4 fw-bold color-white">Create Your Perfect Song</h1>
                    <p class="lead">Turn your memories into melodies with our personalized song.</p>
                    <div class="mt-4">
                        <span class="create_song_page-badge mb-2">✨ Professional Quality</span>
                        <span class="create_song_page-badge mb-2">🎵 Multiple Languages</span>
                        <span class="create_song_page-badge mb-2">❤️ Personalized Lyrics</span>
                    </div>
                </div>

                <!-- Right GIF -->
                <div class="col-12 col-md-2 mb-4 mb-md-0 d-flex justify-content-center p-4">
                    <img src="{{ asset('frontend/assets/lotti_animations/Music_Player.gif') }}" class="img-fluid"
                        style="max-height: 320px;" alt="Music Playing">
                </div>


            </div>
        </div>
    </section>


    <!-- Main Content -->
    <section class="py-5 create_your_section">
        <div class="container-fluid">
            <div class="row g-5 padding_manage_create_song">
                <!-- Left Column: Form -->
                <div class="col-xl-7">
                    <div class="create_song_page-form-section">


                        <form class="mx-auto" style="max-width: 800px;">
                            <div class="text-center">
                                <div class="p-4 shadow"
                                    style="background: linear-gradient(135deg, #f324244d, #e8dcdf); border-radius: 10px;">
                                    <h4 class="text-center gradient-text fw-bold">
                                        <i class="bi bi-music-note-beamed text-danger"></i> Create Your Personalized Song
                                    </h4>
                                    <p class="text-center text-muted fw-bold" style="font-size: 1rem;">
                                        Fill out the details below and we'll create a personalized song just for you
                                    </p>
                                </div>
                            </div>
                            <br>

                            <!-- 1. Select Segment -->
                            <div class="mb-4">
                                <label class="form-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24">
                                        <path fill="#edc221"
                                            d="M6 20q-.425 0-.712-.288T5 19t.288-.712T6 18h12q.425 0 .713.288T19 19t-.288.713T18 20zm.7-3.5q-.725 0-1.287-.475t-.688-1.2l-1-6.35q-.05 0-.112.013T3.5 8.5q-.625 0-1.062-.437T2 7t.438-1.062T3.5 5.5t1.063.438T5 7q0 .175-.038.325t-.087.275L8 9l3.125-4.275q-.275-.2-.45-.525t-.175-.7q0-.625.438-1.063T12 2t1.063.438T13.5 3.5q0 .375-.175.7t-.45.525L16 9l3.125-1.4q-.05-.125-.088-.275T19 7q0-.625.438-1.063T20.5 5.5t1.063.438T22 7t-.437 1.063T20.5 8.5q-.05 0-.112-.012t-.113-.013l-1 6.35q-.125.725-.687 1.2T17.3 16.5zm0-2h10.6l.65-4.175l-1.15.5q-.65.275-1.325.1t-1.1-.75L12 6.9l-2.375 3.275q-.425.575-1.1.75t-1.325-.1l-1.15-.5zm5.3 0" />
                                    </svg> Select Segment <span class="text-danger">*</span>
                                </label>
                                <input type="hidden" id="segment_input" name="segment" value="Full-Artist">
                                <div class="chip-group">
                                    <div class="chip active" data-group="segment" data-value="Full-Artist"
                                        onclick="activateChip('segment', this)">Full-Artist ₹1499</div>
                                    <div class="chip" data-group="segment" data-value="Ai-Fusion"
                                        onclick="activateChip('segment', this)">Ai-Fusion ₹799</div>
                                    <div class="chip" data-group="segment" data-value="Pocket-Friendly-Ai"
                                        onclick="activateChip('segment', this)">Pocket-Ai ₹399</div>
                                </div>
                            </div>

                            <!-- 2. Mobile Number -->
                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-phone text-primary"></i> Your Mobile Number
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mobile" placeholder="e.g. 9876543210"
                                    required>
                            </div>

                            <!-- 3. Song Mood -->
                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-disc-fill text-info"></i> Choose Song Mood <span
                                        class="text-danger">*</span></label>
                                <input type="hidden" id="mood_input" name="mood" value="">
                                <div class="chip-group">
                                    <div class="chip active" data-group="mood" data-value="Happy"
                                        onclick="activateChip('mood', this)">Happy</div>
                                    <div class="chip " data-group="mood" data-value="Romantic"
                                        onclick="activateChip('mood', this)">Romantic</div>
                                    <div class="chip" data-group="mood" data-value="Emotional"
                                        onclick="activateChip('mood', this)">Emotional</div>
                                    <div class="chip" data-group="mood" data-value="Celebration"
                                        onclick="activateChip('mood', this)">Celebration</div>
                                    <div class="chip" data-group="mood" data-value="Motivational"
                                        onclick="activateChip('mood', this)">Motivational</div>
                                    <div class="chip" data-group="mood" data-value="Sad"
                                        onclick="activateChip('mood', this)">Sad</div>
                                </div>
                            </div>

                            <!-- 4. Occasion -->
                            {{-- <div class="mb-4">
                                <label class="form-label"><i class="bi bi-gift text-warning"></i> Choose Song Occasion<span
                                        class="text-danger">*</span></label>
                                <input type="hidden" id="occasion_input" name="occasion" value="Birthday">
                                <div class="chip-group">
                                   <div class="chip" data-group="occasion" data-value="Anniversary"
                                        onclick="activateChip('occasion', this)">Anniversary</div>
                                    <div class="chip active" data-group="occasion" data-value="Birthday"
                                        onclick="activateChip('occasion', this)">Birthday</div>
                                     <div class="chip" data-group="occasion" data-value="Proposal"
                                        onclick="activateChip('occasion', this)">Proposal</div>

                                    <div class="chip" data-group="occasion" data-value="Wedding"
                                        onclick="activateChip('occasion', this)">Wedding</div>
                                  
                                    <div class="chip" data-group="occasion" data-value="Other"
                                        onclick="activateChip('occasion', this)">Other</div>
                                </div>
                            </div> --}}
                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="bi bi-gift text-warning"></i> Choose Song Occasion <span
                                        class="text-danger">*</span>
                                </label>

                                <!-- Hidden input to store selected occasion -->
                                <input type="hidden" id="occasion_input" name="occasion" value="Birthday">

                                <!-- Chip options -->
                                <div class="chip-group">
                                    <div class="chip" data-group="occasion" data-value="Anniversary"
                                        onclick="activateChip('occasion', this)">Anniversary</div>
                                    <div class="chip active" data-group="occasion" data-value="Birthday"
                                        onclick="activateChip('occasion', this)">Birthday</div>
                                    <div class="chip" data-group="occasion" data-value="Proposal"
                                        onclick="activateChip('occasion', this)">Proposal</div>
                                    <div class="chip" data-group="occasion" data-value="Wedding"
                                        onclick="activateChip('occasion', this)">Wedding</div>
                                    <div class="chip" data-group="occasion" data-value="Other"
                                        onclick="activateChip('occasion', this)">Other</div>
                                </div>

                                <!-- This input shows only if "Other" is selected -->
                                <div id="other_occasion_input" class="mt-3" style="display: none;">
                                    <input type="text" name="other_occasion" class="form-control"
                                        placeholder="Please specify the occasion">
                                </div>
                            </div>

                            <!-- 5. Duration -->
                            {{-- POCKET FRIENDLY  --}}
                            {{-- <div class="mb-4">
                                <label class="form-label"><i class="bi bi-hourglass-split text-secondary"></i> Choose Song
                                    Duration<span class="text-danger">*</span></label>
                                <input type="hidden" id="duration_input" name="duration" value="1 minute">
                                <div class="chip-group">
                                    <div class="chip active" data-group="duration" data-value="2 - 3 Minutes 399"
                                        onclick="activateChip('duration', this)">2 - 3 Minutes Default</div>
                                    <div class="chip " data-group="duration" data-value="3 - 4 Minutes 499"
                                        onclick="activateChip('duration', this)">3 - 4 Minutes (Rs 100  EXTRA)   </div>
                                </div>
                            </div> --}}

                            {{-- AI Fusion  --}}
                             {{-- <div class="mb-4">
                                <label class="form-label"><i class="bi bi-hourglass-split text-secondary"></i> Choose Song
                                    Duration<span class="text-danger">*</span></label>
                                <input type="hidden" id="duration_input" name="duration" value="1 minute">
                                <div class="chip-group">
                                   <div class="chipactive" data-group="duration" data-value="1 - 2 Minutes 799"
                                        onclick="activateChip('duration', this)">1 - 2 Minutes Default</div>
                                    <div class="chip " data-group="duration" data-value="2 - 3 Minutes 948"
                                        onclick="activateChip('duration', this)">2 - 3 Minutes (Rs 149  EXTRA)   </div>
                                        <div class="chip " data-group="duration" data-value="3 - 4 Minutes 1048"
                                        onclick="activateChip('duration', this)">3 - 4 Minutes (Rs 249  EXTRA)   </div>
                                </div>
                            </div> --}}

{{-- Full Artist  --}}
                             <div class="mb-4">
                                <label class="form-label"><i class="bi bi-hourglass-split text-secondary"></i> Choose Song
                                    Duration<span class="text-danger">*</span></label>
                                <input type="hidden" id="duration_input" name="duration" value="1 minute">
                               <div class="chip-group">
                                   <div class="chip active" data-group="duration" data-value="1 - 2 Minutes 1499"
                                        onclick="activateChip('duration', this)">1 - 2 Minutes Default</div>
                                    <div class="chip " data-group="duration" data-value="2 - 3 Minutes 1648"
                                        onclick="activateChip('duration', this)">2 - 3 Minutes (Rs 149  EXTRA)   </div>
                                        <div class="chip " data-group="duration" data-value="3 - 4 Minutes 1748"
                                        onclick="activateChip('duration', this)">3 - 4 Minutes (Rs 249  EXTRA)   </div>
                                </div>
                            </div>

                            <!-- 6. Delivery -->
                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-clock-history text-dark"></i>Choose Song
                                    Delivery Timeline
                                    <span class="text-danger">*</span></label>
                                <input type="hidden" id="timeline_input" name="timeline" value="24 Hours">
                                <div class="chip-group">
                                    <div class="chip active" data-group="timeline" data-value="24 Hours"
                                        onclick="activateChip('timeline', this)">24 Hours</div>
                                    <div class="chip" data-group="timeline" data-value="2-3 Days"
                                        onclick="activateChip('timeline', this)">2-3 Days</div>
                                    <div class="chip" data-group="timeline" data-value="1 Week"
                                        onclick="activateChip('timeline', this)">1 Week</div>
                                </div>
                            </div>

                            <!-- 7. Language -->
                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-translate text-primary"></i> Language Preference
                                    <span class="text-danger">*</span></label>
                                <input type="hidden" id="language_input" name="language" value="Hindi">
                                <div class="chip-group">
                                    <div class="chip active" data-group="language" data-value="Hindi"
                                        onclick="activateChip('language', this)">Hindi</div>
                                    <div class="chip" data-group="language" data-value="English"
                                        onclick="activateChip('language', this)">English</div>
                                    <div class="chip" data-group="language" data-value="Mix (Hindi Primary)"
                                        onclick="activateChip('language', this)">Mix (Hindi Primary)</div>
                                    <div class="chip" data-group="language" data-value="Mix (English Primary)"
                                        onclick="activateChip('language', this)">Mix (English Primary)</div>
                                </div>
                            </div>

                            <!-- 8. Artist -->
                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-person-lines-fill text-success"></i> Preferred
                                    Song
                                    Artist</label>
                                <input type="hidden" id="artist_input" name="artist" value="Male">
                                <div class="chip-group">
                                    <div class="chip active" data-group="artist" data-value="Male"
                                        onclick="activateChip('artist', this)">Male</div>
                                    <div class="chip" data-group="artist" data-value="Female"
                                        onclick="activateChip('artist', this)">Female</div>
                                    <div class="chip" data-group="artist" data-value="Both"
                                        onclick="activateChip('artist', this)">Both</div>
                                </div>
                            </div>

                            <!-- TEXTAREAS -->
                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-stars text-info"></i> Enter Who is the song for?
                                    And who is it from?</label>
                                <textarea class="form-control" rows="2" name="dedicated_to"
                                    placeholder="Tell us the name of the person you're dedicating the song to, and your name so we know who it's from.?"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-geo-alt text-danger"></i> Where did you both
                                    first meet?</label>
                                <textarea class="form-control" rows="2" name="first_meet"
                                    placeholder="Tell us the place or situation where you met for the first time?"></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-heart-fill text-danger"></i> What do they like?
                                    What makes them special?</label>
                                <textarea class="form-control" rows="2" name="likes"
                                    placeholder="Mention their favorite things, hobbies, or any unique qualities you love about them."></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-pencil-square text-success"></i> Lyrics
                                    Suggestions / Any lines or words you want in the song</label>
                                <textarea class="form-control" rows="2" name="lyrics"
                                    placeholder="Share special phrases, names, or anything you'd like to include in the lyrics."></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label"><i class="bi bi-journal-text text-primary"></i> Your Story
                                    <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3" name="story" placeholder="Tell us the story in detail" required></textarea>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="create-btn ">
                                    <i class="bi bi-music-note-list"></i> Submit & Start Your Song
                                </button>
                            </div>

                            <p class="text-muted mt-2 small text-center">
                                <i class="bi bi-info-circle-fill text-secondary"></i> We’ll review your request and contact
                                you within 6-12 hours.
                            </p>
                        </form>



                    </div>
                </div>

                <!-- Right Column: Slider & Testimonials -->
                <div class="col-xl-5">
                    <div id="create_song_page-carousel" class="carousel slide mb-4" data-bs-ride="carousel"
                        data-bs-interval="2000">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="{{ asset('frontend\assets\images\index_page_image\guitar-hands.jpg') }}"
                                    class="d-block w-100 rounded" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                    <h5>Crafted With Heart</h5>
                                    <p>Every song is carefully composed and performed by talented artists who understand
                                        your moments.</p>
                                </div>
                            </div>
                            <!-- Add more carousel-item blocks if needed -->

                            <div class="carousel-item ">
                                <img src="{{ asset('frontend\assets\images\index_page_image\couple-dancing.jpg') }}"
                                    class="d-block w-100 rounded" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                                    <h5>Crafted With Heart</h5>
                                    <p>Every song is carefully composed and performed by talented artists who understand
                                        your moments.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#create_song_page-carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#create_song_page-carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <div class="bg-white p-3 rounded shadow-sm">
                        <h2 class="fw-bold mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                                <path fill="#7a38d2"
                                    d="M4 17.17L5.17 16H20V4H4zm6.43-8.74L12 5l1.57 3.43L17 10l-3.43 1.57L12 15l-1.57-3.43L7 10z"
                                    opacity="0.15" />
                                <path fill="#7a38d2"
                                    d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 14H5.17L4 17.17V4h16z" />
                                <path fill="#7a38d2"
                                    d="m12 15l1.57-3.43L17 10l-3.43-1.57L12 5l-1.57 3.43L7 10l3.43 1.57z" />
                            </svg>
                            &nbsp; What Our Customers Say
                        </h2>

                        <div class="mb-3">
                            <strong class="">Riya & Aarav</strong> <small
                                class="text-muted song-tag inspiring">Wedding Anniversary</small>
                            <p class="mb-1 fst-italic">“Our song felt like it was straight out of a movie. Every lyric
                                brought back
                                beautiful memories.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Priya Sharma</strong> <small class="text-muted song-tag nostalgic">Birthday
                                Gift</small>
                            <p class="mb-1 fst-italic">“I gifted this to my sister and she had tears of joy. It was so
                                personal and
                                touching.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>

                        <hr>
                        <div class="mb-3">
                            <strong>Neha & Rohit</strong> <small class="text-muted song-tag romantic">Proposal Song</small>
                            <p class="mb-1 fst-italic">“I proposed with the custom song playing in the background. She said
                                yes
                                instantly!”</p>
                            <span class="text-warning">★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Ankit Verma</strong> <small class="text-muted song-tag inspiring">Mother’s Day</small>
                            <p class="mb-1 fst-italic">“My mom couldn’t believe the song was made just for her. It made her
                                feel so
                                special.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Megha Kapoor</strong> <small class="text-muted song-tag nostalgic">Farewell
                                Gift</small>
                            <p class="mb-1 fst-italic">“I gave this to my best friend moving abroad. It perfectly captured
                                our
                                friendship.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Aditya R.</strong> <small class="text-muted song-tag inspiring">Romantic
                                Surprise</small>
                            <p class="mb-1 fst-italic">“The melody, the lyrics — everything was so beautifully done. My
                                girlfriend
                                was blown away.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Kavita & Deepak</strong> <small class="text-muted song-tag nostalgic">25th
                                Anniversary</small>
                            <p class="mb-1 fst-italic">“After 25 years, this song reminded us of our journey together. We
                                played it
                                at our celebration!”</p>
                            <span class="text-warning">★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Sneha Nair</strong> <small class="text-muted song-tag romantic">Baby Shower</small>
                            <p class="mb-1 fst-italic">“The custom lullaby brought everyone to tears at the baby shower. It
                                was such
                                a beautiful gift.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <strong>Rajeev & Anjali</strong> <small class="text-muted song-tag inspiring">Parents'
                                Anniversary</small>
                            <p class="mb-1 fst-italic">“We surprised our parents with a song that told their love story —
                                they
                                couldn't stop smiling.”</p>
                            <span class="text-warning">★★★★★</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="bg-white py-5">
        <div class="container text-center">
            <h2 class="mb-5 fw-bold">How It Works</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="create_song_page-how-it-works-icon mx-auto">1</div>
                    <h5 class="mt-3 fw-semibold">Share Your Story</h5>
                    <p>Fill out our detailed form with your memories and preferences.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="create_song_page-how-it-works-icon mx-auto">2</div>
                    <h5 class="mt-3 fw-semibold">We Create Magic</h5>
                    <p>Our talented musicians compose and record your song.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="create_song_page-how-it-works-icon mx-auto">3</div>
                    <h5 class="mt-3 fw-semibold">Receive Your Song</h5>
                    <p>Get your personalized song delivered on time.</p>
                </div>
            </div>
        </div>
    </section>



@endsection

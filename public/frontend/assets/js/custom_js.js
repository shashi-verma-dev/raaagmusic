   
      const icons = ['🎵', '🎧', '💖', '🎶', '❤️', '💿'];
        const floatingIconsContainer = document.getElementById('floatingIcons');

        function createIcon() {
            const span = document.createElement('span');
            const icon = icons[Math.floor(Math.random() * icons.length)];
            span.textContent = icon;
            span.style.left = Math.random() * 90 + 'vw';
            span.style.fontSize = (Math.random() * 20 + 15) + 'px';
            span.style.animationDuration = (Math.random() * 20 + 5) + 's';

            // Add animation classes
            if (icon === '❤️' || icon === '💖') {
                span.classList.add('heartbeat');
            } else {
                span.classList.add('rotate');
            }

            floatingIconsContainer.appendChild(span);

            setTimeout(() => {
                span.remove();
            }, 15000);
        }

        setInterval(createIcon, 300);

         document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                let successPopup = document.getElementById('popup-success');
                let errorPopup = document.getElementById('popup-error');

                [successPopup, errorPopup].forEach(function(popup) {
                    if (popup) {
                        popup.style.transition = "opacity 0.5s ease";
                        popup.style.opacity = "0";
                        setTimeout(() => popup.remove(), 500);
                    }
                });
            }, 3000);
        });
   
   // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 25) {
                navbar.classList.add('scrolled');
                navbar.style.top = '0';
            } else {
                navbar.classList.remove('scrolled');
                navbar.style.top = '35px';
            }
        });

        // Like button functionality
        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            });
        });

        // Back to Top Button
        const backToTopButton = document.querySelector('.progress-wrap2');

        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;

            // Navbar scroll effect (existing code)
            const navbar = document.querySelector('.navbar');
            if (scrollPosition > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Back to Top button show/hide
            if (scrollPosition > 300) {
                backToTopButton.classList.add('active-progress');
            } else {
                backToTopButton.classList.remove('active-progress');
            }

            // Calculate scroll progress for the circle (optional)
            const scrollHeight = document.documentElement.scrollHeight;
            const clientHeight = document.documentElement.clientHeight;
            const scrollPercent = (scrollPosition / (scrollHeight - clientHeight)) * 100;
            const path = backToTopButton.querySelector('path');
            const pathLength = path.getTotalLength();
            path.style.strokeDasharray = pathLength;
            path.style.strokeDashoffset = pathLength - (pathLength * scrollPercent / 100);
        });

        // Click event for Back to Top button
        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });



        const track = document.getElementById('card-track');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let index = 0;

        const cardCount = track.children.length;
        const visibleCards = window.innerWidth < 768 ? 1 : (window.innerWidth < 992 ? 2 : 3);
        const maxIndex = cardCount - visibleCards;

        function updateSlider() {
            const cardWidth = track.querySelector('.card-wrapper').offsetWidth;
            track.style.transform = `translateX(-${index * cardWidth}px)`;
        }

        nextBtn.addEventListener('click', () => {
            if (index < maxIndex) {
                index++;
                updateSlider();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (index > 0) {
                index--;
                updateSlider();
            }
        });

        window.addEventListener('resize', () => {
            updateSlider(); // Recalculate on resize
        });


         document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.custom-testimonials-track');
            const cards = document.querySelectorAll('.custom-testimonial-card');
            const prevBtn = document.querySelector('.custom-testimonials-prev');
            const nextBtn = document.querySelector('.custom-testimonials-next');

            let currentIndex = 0;
            const cardWidth = cards[0].offsetWidth + 20; // width + margin

            function updateSlider() {
                slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

                // Disable prev button if at start
                prevBtn.disabled = currentIndex === 0;

                // Disable next button if at end (showing last two cards)
                nextBtn.disabled = currentIndex >= cards.length - 2;
            }

            prevBtn.addEventListener('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
                }
            });

            nextBtn.addEventListener('click', function() {
                if (currentIndex < cards.length - 2) {
                    currentIndex++;
                    updateSlider();
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                const newCardWidth = cards[0].offsetWidth + 20;
                if (newCardWidth !== cardWidth) {
                    cardWidth = newCardWidth;
                    updateSlider();
                }
            });

            // Initialize
            updateSlider();
        });



          let isRecording = false;
        let recognition;

        function toggleRecording(btn) {
            const box = document.querySelector("#recordBox span");

            // Check browser support
            if (!("webkitSpeechRecognition" in window)) {
                alert("Voice input not supported in this browser.");
                return;
            }

            if (!recognition) {
                recognition = new webkitSpeechRecognition();
                recognition.lang = "en-IN";
                recognition.continuous = false;
                recognition.interimResults = false;

                recognition.onresult = function(event) {
                    const transcript = event.results[0][0].transcript;
                    document.getElementById("storyText").value += transcript + " ";
                };

                recognition.onerror = function(event) {
                    alert("Microphone error: " + event.error);
                };

                recognition.onend = function() {
                    isRecording = false;
                    btn.innerHTML = `<i class="fas fa-microphone"></i> Speak`;
                    box.style.display = "none";
                };
            }

            if (!isRecording) {
                recognition.start();
                isRecording = true;
                btn.innerHTML = `<i class="fas fa-microphone-slash"></i> Stop`;
                box.style.display = "inline-block";
            } else {
                recognition.stop();
            }
        }

        // function activateChip(groupName, element) {
        //     const chips = document.querySelectorAll(`[data-group='${groupName}']`);
        //     chips.forEach(chip => chip.classList.remove('active'));
        //     element.classList.add('active');

        //     const hiddenInput = document.querySelector(`#${groupName}_input`);
        //     hiddenInput.value = element.dataset.value;
        // }

        function activateChip(groupName, element) {
            const chips = document.querySelectorAll(`[data-group='${groupName}']`);
            chips.forEach(chip => chip.classList.remove('active'));
            element.classList.add('active');

            const hiddenInput = document.querySelector(`#${groupName}_input`);
            hiddenInput.value = element.dataset.value;

            // Handle special case for "Other" option (for occasion)
            if (groupName === 'occasion') {
                const otherInput = document.getElementById('other_occasion_input');
                if (element.dataset.value === 'Other') {
                    otherInput.style.display = 'block';
                } else {
                    otherInput.style.display = 'none';
                    const otherText = otherInput.querySelector('input');
                    if (otherText) otherText.value = '';
                }
            }
        }
        document.addEventListener('DOMContentLoaded', function() {

            const player = document.getElementById('nexus-audio-player');
            const audio = document.getElementById('nexus-audio-element');
            const playBtn = document.getElementById('nexus-play-btn');
            const prevBtn = document.getElementById('nexus-prev-btn');
            const nextBtn = document.getElementById('nexus-next-btn');
            const currentTimeEl = document.getElementById('nexus-current-time');
            const durationEl = document.getElementById('nexus-duration');
            const playIcon = playBtn.querySelector('.play-icon');
            const pauseIcon = playBtn.querySelector('.pause-icon');

            function formatTime(seconds) {
                const mins = Math.floor(seconds / 60);
                const secs = Math.floor(seconds % 60);
                return `${mins}:${secs < 10 ? '0' : ''}${secs}`;
            }

            function updateTime() {
                currentTimeEl.textContent = formatTime(audio.currentTime);
                durationEl.textContent = formatTime(audio.duration || 0);
            }

            function autoPlay() {
                audio.play();
                player.classList.add('playing');
                playIcon.style.display = 'none';
                pauseIcon.style.display = 'block';
            }

            function togglePlay() {
                if (audio.paused) {
                    audio.play();
                    player.classList.add('playing');
                    playIcon.style.display = 'none';
                    pauseIcon.style.display = 'block';
                } else {
                    audio.pause();
                    player.classList.remove('playing');
                    playIcon.style.display = 'block';
                    pauseIcon.style.display = 'none';
                }
            }

            playBtn.addEventListener('click', togglePlay);
            //  prevBtn.addEventListener('click', () => audio.currentTime = 0);
            //  nextBtn.addEventListener('click', () => audio.currentTime = audio.duration - 5);
            prevBtn.addEventListener('click', () => {
                audio.currentTime = Math.max(audio.currentTime - 10, 0); // Go back 10 sec, minimum 0
            });

            nextBtn.addEventListener('click', () => {
                audio.currentTime = Math.min(audio.currentTime + 10, audio
                    .duration); // Go forward 10 sec, max duration
            });

            audio.addEventListener('timeupdate', updateTime);
            audio.addEventListener('loadedmetadata', updateTime);
            audio.addEventListener('ended', () => {
                player.classList.remove('playing');
                playIcon.style.display = 'block';
                pauseIcon.style.display = 'none';
            });

            updateTime();
        });
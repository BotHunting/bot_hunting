<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bot Hunting Company Limited</title>
    <link rel="icon" href="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/BH.png?v=1723717480291"
        type="image/png" />
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Background Music -->
    <audio id="bgMusic" loop>
        <source src="bio.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Music Control Button -->
    <button id="musicToggle" class="music-toggle">
        <i class="fas fa-volume-up"></i>
    </button>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/BH.png?v=1723717480291"
                    alt="Logo" width="40" class="me-2" />
                Bot Hunting
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <div class="profile-wrapper">
                        <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/faris.jpg?v=1744796696157"
                            alt="Foto Profil Faris" class="profile-image animate__animated animate__fadeInLeft" />
                        <div class="profile-badge">
                            <span class="badge bg-success">Available for Freelance</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 text-center text-lg-start animate__animated animate__fadeInRight">
                    <h1 class="display-4 fw-bold mb-3">Faris Al-Zubaidi</h1>
                    <p class="lead typed-text mb-4"></p>
                    <p class="bio mb-4">
                        Sedang mendalami sistem informasi, terutama terkait transportasi
                        dan pengujian kendaraan.
                    </p>

                    <!-- Social Links -->
                    <div class="social-links-wrapper">
                        <div
                            class="social-links d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
                            <a href="https://github.com/BotHunting" target="_blank" class="social-link"
                                data-tooltip="Follow on GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.tiktok.com/@bot.hunting" target="_blank" class="social-link"
                                data-tooltip="Follow on TikTok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://www.instagram.com/bot.hunting" target="_blank" class="social-link"
                                data-tooltip="Follow on Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.facebook.com/b0t.hunting/" target="_blank" class="social-link"
                                data-tooltip="Follow on Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/@bot.hunting" target="_blank" class="social-link"
                                data-tooltip="Subscribe on YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.twitch.tv/bot_hunting" target="_blank" class="social-link"
                                data-tooltip="Follow on Twitch">
                                <i class="fab fa-twitch"></i>
                            </a>
                            <a href="https://x.com/bot_hunting" target="_blank" class="social-link"
                                data-tooltip="Follow on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://shopee.co.id/nia_junaidi" target="_blank" class="social-link"
                                data-tooltip="Shop on Shopee">
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                            <a href="https://discord.gg/a4tEY45Trz" target="_blank" class="social-link"
                                data-tooltip="Join Discord">
                                <i class="fab fa-discord"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="cta-buttons mt-5 d-flex justify-content-center justify-content-lg-start gap-3">
                        <a href="#portfolio" class="btn btn-primary btn-lg">View Portfolio</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">My Portfolio</h2>
            <div class="row g-4">
                <!-- HRM Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/sim-sa.png?v=1723717495983"
                                alt="SIM HR Management" />
                            <div class="portfolio-overlay">
                                <h5>SIM Human Resource Management</h5>
                                <p>Sistem Informasi CV. Saksana Antakara</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/hrm" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://southern-rough-war.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dishub Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/sim-dishub.png?v=1723717493246"
                                alt="SIM Dishub" />
                            <div class="portfolio-overlay">
                                <h5>SIM Dishub</h5>
                                <p>Sistem Informasi Dinas Perhubungan Fakfak</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/sim_dishub" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://rigorous-cyclic-psychiatrist.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Perpustakaan Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/perpus.png?v=1723717487437"
                                alt="Perpustakaan" />
                            <div class="portfolio-overlay">
                                <h5>Perpustakaan</h5>
                                <p>Website Management Perpustakaan</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/perpus_web" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://abrasive-glamorous-heath.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rekom PKB Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/rekom-pkb.jpg?v=1723717489779"
                                alt="Rekom PKB" />
                            <div class="portfolio-overlay">
                                <h5>Rekom PKB</h5>
                                <p>Sistem Informasi Rekom UPT PKB Gresik</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/uptpkb" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://superficial-unequaled-anemone.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCTV Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/cctv.png?v=1744629948090"
                                alt="CCTV" />
                            <div class="portfolio-overlay">
                                <h5>CCTV</h5>
                                <p>CCTV Kantoor</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/cctv" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://vigorous-subdued-clementine.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Webcam Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/webcam.PNG?v=1746560169667"
                                alt="Webcam" />
                            <div class="portfolio-overlay">
                                <h5>Webcam</h5>
                                <p>Webcam Deteksi Wajah</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/webcam" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://automatic-alpine-morning.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hotel Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/hotel.png?v=1747037403923"
                                alt="Aplikasi Hotel" />
                            <div class="portfolio-overlay">
                                <h5>Hotel Management System</h5>
                                <p>Sistem Informasi Manajemen Hotel</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/Aplikasi-Hotel" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://your-hotel-demo-url.com" class="btn btn-light" target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wedding Project -->
                <div class="col-md-4">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <img src="https://cdn.glitch.global/acbb2462-e675-4bbe-9083-50441cd316fd/wedding.png?v=1747736014920"
                                alt="Wedding Invitation" />
                            <div class="portfolio-overlay">
                                <h5>Digital Wedding Invitation</h5>
                                <p>Website Undangan Pernikahan Digital</p>
                                <div class="portfolio-buttons">
                                    <a href="https://github.com/BotHunting/wedding" class="btn btn-light me-2"
                                        target="_blank">
                                        <i class="fab fa-github"></i> Source Code
                                    </a>
                                    <a href="https://boggy-tidal-sesame.glitch.me/" class="btn btn-light"
                                        target="_blank">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <div class="contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <div class="contact-details">
                                            <h5>Email</h5>
                                            <p>bot.hunting101@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-phone"></i>
                                        <div class="contact-details">
                                            <h5>Phone</h5>
                                            <p>0812-9032-0438</p>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="contact-details">
                                            <h5>Location</h5>
                                            <p>Gresik, East Java, Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="support-section">
                                    <h4>Support My Work</h4>
                                    <p>If you find my work helpful, consider supporting me!</p>
                                    <div class="support-buttons">
                                        <a href="https://trakteer.id/hunty/tip" target="_blank" class="btn btn-support">
                                            <img src="https://cdn.trakteer.id/images/embed/trbtn-icon.png"
                                                alt="Trakteer" height="28" />
                                            Support on Trakteer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trakteer iframe -->
    <div class="trakteer-container">
        <iframe
            src="https://stream.trakteer.id/notification/index.html?key=trstream-Q3jtXqcxH7niIZL0itlg&unit=Pentol&mod=3&hash=eml73oqgxdx5d9qb"
            frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-brand">
                        <img src="https://cdn.glitch.global/c5170534-8998-4d7f-90e2-39122dc32f5e/BH.png?v=1723717480291"
                            alt="Logo" width="40" class="me-2" />
                        <h5>Bot Hunting</h5>
                    </div>
                    <p class="footer-text">
                        Creating innovative solutions through technology
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-title">Follow Me</h5>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/bot.hunting" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@bot.hunting" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://www.tiktok.com/@bot.hunting" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="text-center mb-0">
                    Copyright &copy;
                    <?php echo date("Y"); ?>
                    Bot Hunting Company Limited. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://assets.trakteer.id/js/trbtn-overlay.min.js"></script>
    <script type="text/javascript" class="troverlay">
        (function () {
            var trbtnId = trbtnOverlay.init(
                "Support Me",
                "#FFC147",
                "https://trakteer.id/hunty/tip/embed/modal",
                "https://cdn.trakteer.id/images/embed/trbtn-icon.png?date=18-11-2023",
                "35",
                "floating-right"
            );
            trbtnOverlay.draw(trbtnId);
        })();
    </script>
    <script>
        $(document).ready(function () {
            // Animasi masuk pada card
            $(".card").each(function (index) {
                $(this).addClass("animate__delay-" + (index + 1) + "s");
            });
        });

        // Add to your existing scripts
        document.addEventListener("DOMContentLoaded", function () {
            const texts = ["Web Developer", "Freelancer", "Content Creator"];
            let count = 0;
            let index = 0;
            let currentText = "";
            let letter = "";

            (function type() {
                if (count === texts.length) {
                    count = 0;
                }
                currentText = texts[count];
                letter = currentText.slice(0, ++index);

                document.querySelector(".typed-text").textContent = letter;
                if (letter.length === currentText.length) {
                    count++;
                    index = 0;
                    setTimeout(type, 2000);
                } else {
                    setTimeout(type, 100);
                }
            })();
        });
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5075215899146567"
        crossorigin="anonymous"></script>
    <!-- Uptime monitoring -->
    <script>
        setInterval(function () {
            fetch('https://flying-classy-sage.glitch.me/ping')
                .then(response => console.log('Site is online'))
                .catch(error => console.error('Connection error:', error));
        }, 300000); // Ping every 5 minutes
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const music = document.getElementById('bgMusic');
            const musicToggle = document.getElementById('musicToggle');
            let isPlaying = false;

            // Function to handle music toggle
            function toggleMusic() {
                if (isPlaying) {
                    music.pause();
                    musicToggle.classList.add('muted');
                } else {
                    music.play();
                    musicToggle.classList.remove('muted');
                }
                isPlaying = !isPlaying;
            }

            // Add click event listener to button
            musicToggle.addEventListener('click', toggleMusic);

            // Add user interaction requirement notice
            const playPromise = music.play();
            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    console.log("Autoplay started");
                }).catch(error => {
                    console.log("Autoplay prevented");
                });
            }
        });
    </script>
</body>

</html>
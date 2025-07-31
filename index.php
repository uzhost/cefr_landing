<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEFR Uzbekistan - Master Your Language Skills</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- AOS Animation CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            line-height: 1.6;
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff, #00d4ff);
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/random/1920x1080/?language') no-repeat center center/cover;
            opacity: 0.3;
            transition: opacity 0.5s ease;
        }
        .hero-section:hover::before {
            opacity: 0.4;
        }
        .navbar {
            transition: all 0.3s ease;
            padding: 15px 0;
        }
        .navbar.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
        }
        .nav-link {
            font-weight: 500;
            margin-left: 20px;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #007bff !important;
        }
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            background: white;
        }
        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        .cta-button {
            background: #ff6b6b;
            border: none;
            padding: 15px 35px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            background: #ff8787;
            transform: scale(1.05);
        }
        .section-title {
            font-weight: 700;
            position: relative;
            margin-bottom: 60px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #007bff;
            border-radius: 2px;
        }
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .accordion-button {
            font-weight: 600;
            background: #f8f9fa !important;
        }
        footer {
            background: #212529;
            color: white;
            padding: 60px 0;
        }
        footer a {
            color: #00d4ff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #ff6b6b;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0,123,255,0.25);
        }
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            .navbar-brand {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">CEFR.uz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cefr-levels">CEFR Levels</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-center">
        <div class="container position-relative">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Master Your Language Skills with CEFR.uz</h1>
            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">Achieve global language proficiency with our certified CEFR programs in Uzbekistan. Join thousands of learners on their journey to fluency!</p>
            <a href="#contact" class="btn cta-button" data-aos="zoom-in" data-aos-delay="200">Start Your Journey</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">About CEFR.uz</h2>
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <p class="lead">CEFR.uz is your premier destination for language mastery in Uzbekistan. We specialize in providing internationally recognized CEFR certifications and comprehensive language training programs.</p>
                    <p>With a team of certified instructors and cutting-edge learning methodologies, we help students of all levels achieve fluency in English, French, German, and more. Our mission is to empower you with the skills to communicate confidently in a global world.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="https://source.unsplash.com/random/600x400/?education" alt="Language Education" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- CEFR Levels Section -->
    <section id="cefr-levels" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">CEFR Levels Explained</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card card p-4 text-center">
                        <h4>A1-A2: Beginner</h4>
                        <p>Learn basic phrases, introduce yourself, and handle simple everyday interactions.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card card p-4 text-center">
                        <h4>B1-B2: Intermediate</h4>
                        <p>Communicate effectively in familiar situations and understand the main ideas of complex texts.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card card p-4 text-center">
                        <h4>C1-C2: Advanced</h4>
                        <p>Achieve fluency, express ideas spontaneously, and use the language flexibly in professional and academic settings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card card p-4 text-center">
                        <h4>CEFR Certification</h4>
                        <p>Get certified in A1 to C2 levels with our comprehensive testing and preparation courses tailored to your needs.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card card p-4 text-center">
                        <h4>Language Courses</h4>
                        <p>Master English, French, German, and more with our interactive classes led by expert instructors.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card card p-4 text-center">
                        <h4>Online Learning</h4>
                        <p>Access our courses anytime, anywhere with our user-friendly online platform and mobile app.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">What Our Students Say</h2>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card text-center">
                        <p>"CEFR.uz helped me achieve my B2 certification in just 6 months! The instructors are amazing."</p>
                        <h5>– Aisha K., Tashkent</h5>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card text-center">
                        <p>"The online platform is so convenient. I can learn at my own pace and still get personalized feedback."</p>
                        <h5>– Jamshid M., Samarkand</h5>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card text-center">
                        <p>"Thanks to CEFR.uz, I’m now confident speaking English in my workplace!"</p>
                        <h5>– Nodira S., Bukhara</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What is CEFR?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The CEFR (Common European Framework of Reference for Languages) is an international standard for describing language ability on a six-point scale, from A1 (beginner) to C2 (proficient).
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            How long does it take to get certified?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The time varies depending on your current level and target certification. On average, it takes 3-6 months to progress one CEFR level with regular study.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Are online courses as effective as in-person classes?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! Our online courses are designed to be highly interactive, with live sessions, personalized feedback, and engaging materials to ensure effective learning.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center section-title" data-aos="fade-up">Contact Us</h2>
            <div class="row">
                <div class="col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="card p-4 shadow">
                        <form onsubmit="handleSubmit(event)" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Your message" required></textarea>
                                <div class="invalid-feedback">Please enter a message.</div>
                            </div>
                            <button type="submit" class="btn cta-button w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 CEFR.uz. All Rights Reserved.</p>
            <p class="mb-2"><a href="/cdn-cgi/l/email-protection#abc2c5cdc4ebc8cecd99c2959a" class="text-decoration-none"><span class="__cf_email__" data-cfemail="244d4a424b6447494a5e0a515e">[email&#160;protected]</span></a> | +998 71 123 4567</p>
            <p><a href="#home">Home</a> | <a href="#about">About</a> | <a href="#services">Services</a> | <a href="#contact">Contact</a></p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS with custom settings
        AOS.init({
            duration: 1200,
            easing: 'ease-out-quart',
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Form submission handler with enhanced feedback
        function handleSubmit(event) {
            event.preventDefault();
            const form = event.target;
            if (form.checkValidity()) {
                const name = form.querySelector('#name').value;
                alert(`Thank you, ${name}! Your message has been sent. We'll get back to you soon.`);
                form.reset();
                form.classList.remove('was-validated');
            } else {
                form.classList.add('was-validated');
            }
        }
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'967f609629e1341d',t:'MTc1Mzk4ODgzMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
</body>
</html>

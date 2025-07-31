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
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(135deg, #007bff, #00d4ff);
            color: white;
            padding: 100px 0;
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
            opacity: 0.2;
        }
        .navbar {
            transition: background-color 0.3s ease;
        }
        .navbar.scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .cta-button {
            background: #ff6b6b;
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            transition: background 0.3s ease;
        }
        .cta-button:hover {
            background: #ff8787;
        }
        footer {
            background: #212529;
            color: white;
            padding: 50px 0;
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
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section text-center">
        <div class="container position-relative">
            <h1 class="display-4 fw-bold mb-4" data-aos="fade-up">Master Your Language Skills with CEFR.uz</h1>
            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">Achieve global language proficiency with our certified CEFR programs in Uzbekistan.</p>
            <a href="#contact" class="btn cta-button" data-aos="zoom-in" data-aos-delay="200">Get Started Now</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">About CEFR.uz</h2>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <p>We are dedicated to helping you achieve fluency and certification in languages through the Common European Framework of Reference for Languages (CEFR). Our expert instructors and tailored programs ensure you reach your goals.</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="https://source.unsplash.com/random/600x400/?education" alt="Language Education" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card card p-4 text-center">
                        <h4>CEFR Certification</h4>
                        <p>Get certified in A1 to C2 levels with our comprehensive testing and preparation courses.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card card p-4 text-center">
                        <h4>Language Courses</h4>
                        <p>Learn English, French, German, and more with our interactive and immersive classes.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card card p-4 text-center">
                        <h4>Online Learning</h4>
                        <p>Access our courses anytime, anywhere with our flexible online platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Contact Us</h2>
            <div class="row">
                <div class="col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="card p-4">
                        <div onsubmit="handleSubmit(event)" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn cta-button w-100">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2025 CEFR.uz. All Rights Reserved.</p>
            <p><a href="mailto:info@cefr.uz" class="text-white">info@cefr.uz</a> | +998 71 123 4567</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({ duration: 1000, once: true });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Form submission handler
        function handleSubmit(event) {
            event.preventDefault();
            const form = event.target;
            if (form.checkValidity()) {
                alert('Thank you for your message! We will get back to you soon.');
                form.reset();
            } else {
                form.classList.add('was-validated');
            }
        }
    </script>
</body>
</html>

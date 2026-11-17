@extends('layouts.app')

@section('title', 'Home | My Portfolio')

@section('content')

     
        @include('components.navbar')

        <!--  Hero Section -->

        <section id="home" class="hero-section">

            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <p class="hero-subtitle">HELLO, I'M</p>

                        <h1 class="hero-title">
                            Abu Bakar Miaji
                        </h1>

                        <h3 class="hero-designation">
                            Software Developer
                        </h3>

                        <p class="hero-description">
                            I am a passionate software developer interested in
                            building modern, responsive and user-friendly web applications.
                        </p>

                        <div class="hero-buttons">

                            <a href="#projects" class="btn btn-primary">
                                View My Projects
                            </a>

                            <a href="#contact" class="btn btn-danger">
                                Contact Me
                            </a>

                        </div>

                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6">

                        <div class="hero-image text-center">

                            <img src="{{ asset('images/19629.jpg') }}"
                                alt="Abu Bakar Miaji"
                                class="img-fluid rounded-circle">

                        </div>

                    </div>

                </div>
            </div>

        </section>


        <!-- About Section -->
        <section id="about" class="about-section">

            <div class="container">

                <!-- Section Heading -->
                <div class="text-center mb-5">
                    <h2 class="section-title">About Me</h2>
                    <p class="section-subtitle">
                        Get to know more about me
                    </p>
                </div>

                <div class="row align-items-center">

                    <!-- Left Side: Image -->
                    <div class="col-lg-5">
                        <div class="about-image">
                            <img src="{{ asset('images/about.png') }}"
                                alt="About Me"
                                class="img-fluid">
                        </div>
                    </div>

                    <!-- Right Side: Content -->
                    <div class="col-lg-7">

                        <h3>Hello! I'm Abu Bakar Miaji</h3>

                        <p>
                            I am a passionate Software Developer interested
                            in building modern and user-friendly web applications.
                        </p>

                        <p>
                            I enjoy learning new technologies and developing
                            practical solutions through programming.
                        </p>

                        <!-- Personal Information -->
                        <div class="row">

                            <div class="col-md-6">
                                <p><strong>Name:</strong> Abu Bakar Miaji</p>
                                <p><strong>Degree:</strong> BSc in CSE</p>
                            </div>

                            <div class="col-md-6">
                                <p><strong>Profession:</strong> Software Developer</p>
                                <p><strong>Location:</strong> Bangladesh</p>
                            </div>

                        </div>

                        <a href="#" class="btn btn-primary mt-3">
                            Download CV
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- Skills Section -->
        <section id="skills" class="skills-section">

            <div class="container">

                <!-- Section Heading -->
                <div class="text-center mb-5">
                    <h2 class="section-title">My Skills</h2>
                    <p class="section-subtitle">
                        Technologies and tools I work with
                    </p>
                </div>

                <div class="row g-4">

                    <!-- Skill 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card">
                            <h5>HTML5</h5>
                            <div class="progress">
                                <div class="progress-bar" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card">
                            <h5>CSS3</h5>
                            <div class="progress">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card">
                            <h5>Bootstrap 5</h5>
                            <div class="progress">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card">
                            <h5>PHP</h5>
                            <div class="progress">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card">
                            <h5>Laravel</h5>
                            <div class="progress">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card">
                            <h5>MySQL</h5>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- Education Section -->

        <section id="education" class="education-section">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="section-title">My Education</h2>
                    <p class="section-subtitle">
                        My academic background and qualifications
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <!-- Education Item -->
                        <div class="education-card">
                            <div class="education-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>

                            <div class="education-content">
                                <span class="education-level">Bachelor's Degree</span>
    
                                <h4>BSc in Computer Science & Engineering</h4>
    
                                <h6>BANGLADESH UNIVERSITY</h6>
    
                                <p>
                                    Completed a four-year undergraduate degree
                                    in Computer Science and Engineering.
                                </p>
    
                                <span class="education-status">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Completed
                                </span>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>



        <!-- Experience Section -->
        <section id="experience" class="experience-section">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="section-title">My Experience</h2>
                    <p class="section-subtitle">
                        My professional journey and practical experience
                    </p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="experience-card">

                            <div class="experience-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>

                            <div class="experience-content">

                                <span class="experience-type">
                                    Internship
                                </span>

                                <h4>Software Development Intern</h4>

                                <h6>HR SOFT BD</h6>

                                <p class="experience-duration">
                                    01 OCT 2026 - Present
                                </p>


                                <p>
                                    Working with web development technologies
                                    and learning to build practical software
                                    solutions using PHP and Laravel.
                                </p>

                                <div class="experience-tags">
                                    <span>PHP</span>
                                    <span>Laravel</span>
                                    <span>MySQL</span>
                                    <span>Bootstrap</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <!-- Projects Section -->
        <section id="projects" class="projects-section">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="section-title">My Projects</h2>
                    <p class="section-subtitle">
                        Some of my recent work and development projects
                    </p>
                </div>

                <div class="row g-4">

                    <!-- Project 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/event.jpg') }}"
                                    alt="Event Management System">
                            </div>

                            <div class="project-content">
                                <h4>Event Management System</h4>

                                <p>
                                    A web-based application to manage event
                                    information, add new events, update records
                                    and delete event data.
                                </p>

                                <div class="project-tags">
                                    <span>Laravel</span>
                                    <span>PHP</span>
                                    <span>MySQL</span>
                                    <span>Bootstrap</span>
                                </div>

                                <div class="project-links">
                                    <a href="#" class="btn btn-primary">
                                        View Project
                                    </a>

                                    <a href="#" class="btn btn-outline-dark">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card">

                            <div class="project-image">
                                <img src="{{ asset('images/student.jpg') }}"
                                    alt="Student Management System">
                            </div>

                            <div class="project-content">
                                <h4>Student Management System</h4>

                                <p>
                                    A web-based application to manage student
                                    information, add new students, update records
                                    and delete student data.
                                </p>

                                <div class="project-tags">
                                    <span>Laravel</span>
                                    <span>Blade</span>
                                    <span>Bootstrap</span>
                                    <span>CSS</span>
                                </div>

                                <div class="project-links">
                                    <a href="#" class="btn btn-primary">
                                        View Project
                                    </a>

                                    <a href="#" class="btn btn-outline-dark">
                                        GitHub
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section id="services" class="services-section">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="section-title">My Services</h2>
                    <p class="section-subtitle">
                        What I can do for your business
                    </p>
                </div>

                <div class="row g-4">

                    <!-- Service 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-code-slash"></i>
                            </div>

                            <h4>Web Development</h4>

                            <p>
                                Building modern, responsive and user-friendly
                                websites using modern web technologies.
                            </p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-window-stack"></i>
                            </div>

                            <h4>Web Application</h4>

                            <p>
                                Developing dynamic web applications with
                                database integration and useful features.
                            </p>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-database"></i>
                            </div>

                            <h4>Database Management</h4>

                            <p>
                                Designing and managing databases to organize
                                and store application data efficiently.
                            </p>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-phone"></i>
                            </div>

                            <h4>Responsive Design</h4>

                            <p>
                                Creating responsive layouts that work smoothly
                                across desktops, tablets and mobile devices.
                            </p>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-tools"></i>
                            </div>

                            <h4>Website Maintenance</h4>

                            <p>
                                Updating website content, fixing UI issues
                                and improving existing website functionality.
                            </p>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi bi-lightning-charge"></i>
                            </div>

                            <h4>API Integration</h4>

                            <p>
                                Connecting applications with external APIs
                                to exchange data and extend functionality.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="section-title">Contact Me</h2>
                    <p class="section-subtitle">
                        Have a project or an opportunity? Let's talk!
                    </p>
                </div>

                <div class="row g-5">

                    <!-- Contact Information -->
                    <div class="col-lg-5">

                        <h3 class="contact-heading">Let's Get In Touch</h3>

                        <p class="contact-description">
                            Feel free to contact me for any project,
                            collaboration or professional opportunity.
                        </p>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h6>Email</h6>
                                <p>your-email@example.com</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h6>Phone</h6>
                                <p>Your Phone Number</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h6>Location</h6>
                                <p>Bangladesh</p>
                            </div>
                        </div>

                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-7">

                        <div class="contact-form">

                            <form action="#" method="POST">

                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Enter your name"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Your Email</label>
                                    <input type="email"
                                        class="form-control"
                                        name="email"
                                        placeholder="Enter your email"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text"
                                        class="form-control"
                                        name="subject"
                                        placeholder="Enter subject"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control"
                                            name="message"
                                            rows="5"
                                            placeholder="Write your message..."
                                            required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Send Message
                                    <i class="bi bi-send-fill ms-2"></i>
                                </button>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </section>


        
    <!-- Footer Section -->
    <footer class="main-footer">
        <div class="container">

            <div class="row g-4">

                <!-- About -->
                <div class="col-lg-4 col-md-6">
                    <img src="{{ asset('images/miaji_logo.png') }}" alt="Logo" class="footer-logo">

                    <p class="footer-description">
                        I'm a Software Developer passionate about
                        building modern, responsive and user-friendly
                        web applications.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Quick Links</h5>

                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Follow Me</h5>

                    <div class="footer-social">
                        <a href="#" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="#" aria-label="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>

            </div>

            <hr class="footer-divider">

            <div class="footer-bottom">
                <p>
                    &copy; {{ date('Y') }} Abu Bakar Miaji.
                    All Rights Reserved.
                </p>
            </div>

        </div>
    </footer>


@endsection
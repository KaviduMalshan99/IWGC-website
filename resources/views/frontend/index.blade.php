@extends ('frontend.master')

@section('content')
<!-- Add this to your custom CSS or in a <style> tag -->


<style>
    .step-card {
        background-color: #ffffff;
        border: 1px solid #e6e6e6;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .step-number {
        font-weight: bold;
        background: linear-gradient(135deg, #0b4df5, #00c6ff);
    }



    /* Add this to your CSS file */
    .banner-inner-two-content * {
        animation: none !important;
        opacity: 1 !important;
        transition: none !important;
        color: #fff !important;
    }

    .banner-inner-two-content .disc {
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .custom-box {
        height: 100%;
        border: 2px solid gold;
        border-radius: 10px;
        padding: 25px;
        box-shadow: 0 0 12px rgba(255, 0, 0, 0.1);
        transition: all 0.4s ease;
        background-color: #fff;
    }

    .custom-box:hover {
        box-shadow: 0 0 25px ;
        transform: translateY(-5px);
    }

    .custom-box h5 {
        margin-top: 20px;
        font-weight: 600;
        font-size: 18px;
    }

    .custom-box ul {
        margin-top: 15px;
    }

    .custom-box li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        font-size: 15px;
    }

    /* services section */

    .service-ribbon-wrapper {
        width: 100%;
        overflow: hidden;
        background-color: #1b2954; /* 🎨 Background color */
        height: 150px; 
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ccc;
    }

    .service-ribbon-track {
        width: 200%;
        display: flex;
        animation: scroll 30s linear infinite;
    }

    .service-ribbon-content {
        display: flex;
        gap: 40px;
        align-items: center;
    }

    .service-ribbon-item {
        white-space: nowrap;
        font-size: 35px;
        font-weight: 500;
        color: #fff;
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .service-ribbon-item i {
        font-size: px;
        color: #ed3532;
        min-width: 35px;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0%);
        }
        100% {
            transform: translateX(-50%);
        }
    }


/* programs section */

.program-card {
    display: block;
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
    height: 100%;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    position: relative;
}

/* Program Image */
.program-image {
    position: relative;
    height: 100%;
}

.program-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 15px;
}


.program-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3); 
    z-index: 1;
    border-radius: 15px;
    pointer-events: none;
    transition: background 0.3s ease;
}


.program-card:hover .program-overlay {
    background: rgba(0, 0, 0, 0.56);
}


/* Content Container */
.program-content {
    position: absolute;
    width:350px;
    left: 50%;
    bottom: 20px;
    transform: translateX(-50%);
    text-align: center;
    color: #fff;
    z-index: 2; 
    transition: bottom 0.4s ease, transform 0.4s ease;
}

.program-card:hover .program-content {
    bottom: 50%;
    transform: translate(-50%, 50%); 
}

.program-content h3 {
    font-weight: 800;
    margin-bottom: 15px;
    color: #fff;
}

.program-content .btn {
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    padding: 8px 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
    display: inline-block;
}

.program-card:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.01);
}


.program-card:hover .btn-outline-light {
    background-color: #fff;
    color: #c1121f;
    border-color: #fff;
}


.working-process-one {
    background-color: #1b2954; 
}

/* Box Styles */
.why-box {
    background-color: #ffffffff;
    padding: 35px;
    padding-left: 50px;
    border-radius: 15px;
    height: 100%;
    color: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Hover Effect */
.why-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
}

/* Title Animation */
.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeUp 0.8s ease-out forwards;
}
.why-list {
    list-style: none;
    padding-left: 0;
}

.why-list li {
    position: relative;
    padding-left: 24px;
    margin-bottom: 8px;
    line-height: 1.6;
}

.why-list li i {
    position: absolute;
    left: 0;
    top: 3px;
    color: #e91212ff; /* red tick */
    font-size: 14px;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}




        .marquee-wrapper-outer {
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
    padding: 0 20px;
    gap: 20px;
}

.logo-marquee-track {
    display: flex;
    width: max-content;
    transition: transform 0.3s ease;
}

.logo-marquee-container {
    overflow-x: auto;
    scroll-behavior: smooth;
    -ms-overflow-style: none; 
    scrollbar-width: none;    
}

.logo-marquee-container::-webkit-scrollbar {
    display: none;            
}


.logo-marquee {
    display: flex;
    gap: 80px;
    align-items: center;
}

.logo-marquee img {
    height: 70px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.logo-marquee img:hover {
    transform: scale(1.1);
    opacity: 1;
}

.marquee-arrow {
    font-size: 30px;
    background-color: rgba(255, 255, 255, 0.7);
    border: none;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 50%;
    transition: background-color 0.3s ease;
    z-index: 2;
}

.marquee-arrow:hover {
    background-color: #ed3532;
    color: white;
}

@keyframes scroll-marquee {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}


/* ------------------------------------------ Gallery section */
.image-wrapper {
    position: relative;
    overflow: hidden;
    height: 350px; /* fixed height for uniform look */
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
    display: block;
}

.image-wrapper:hover img {
    transform: scale(1.05);
    filter: brightness(1.1);
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.55);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.image-wrapper:hover .overlay {
    opacity: 1;
}

.event-title {
    color: white;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    padding: 10px 20px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}


.custom-video {
    width: 130%;
    max-height: 900px;
    height: auto;
    z-index:2;
    border-radius: 12px;
    border: 4px solid gold;
    padding: 4px;
    background-color: #fff; 
    box-shadow: 0 20px 40px rgba(255, 215, 0, 0.25);
}

/* Responsive fallback for smaller screens */
@media (max-width: 992px) {
    .custom-video {
        width: 100%;
    }
}

/* Make it responsive on smaller screens */
@media (max-width: 992px) {
    .custom-video {
        width: 100%;
    }
}


@media (max-width: 768px) {
    .rts-banner-area-two {
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        height: 45vh !important;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .banner-inner-two-content h1.title {
        font-size: 20px !important;
        line-height: 1.2 !important;
        max-width: 90% !important;
    }

    .banner-inner-two-content p.disc,
    .banner-inner-two-content p.pre-title {
        font-size: 12px !important;
        max-width: 90% !important;  /* reduce paragraph width */
        margin: 0 auto;            /* center align paragraph */
        line-height: 1.4 !important;
    }

    .banner-inner-two-content a.rts-btn {
        font-size: 10px !important;
        padding: 6px 12px !important; /* reduce button padding */
        margin-top: 10px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        display: none; /* hide nav arrows on mobile */
    }
}


</style>

<!-- Banner area start -->
<div class="banner-swiper-two">
    <div class="swiper mySwiper-banner-two">
        <div class="swiper-wrapper">
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="rts-banner-area-two rts-section-gap" style="position: relative; background-image: url('{{ asset('frontend/assets/images/iwgc/Hero04.png') }}'); background-size: cover; background-position: center;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="container" style="position: relative; z-index: 2;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-inner-two-content">
                                    <p class="pre-title" style="color: #fff;"><span style="color: #fff;">Welcome!</span> </p>
                                    <h1 class="title" style="color: #fff;">Designed to Suit Your Lifestyle</h1>
                                    <p class="disc" style="color: rgba(255,255,255,0.8);">
                                    Learn anytime, anywhere with our flexible online platform. Study at your own pace with a custom curriculum, get regular feedback, and receive dedicated support every step of the way.
                                        </p>
                                    </p>
                                    <a href="{{ route('scholarships') }}" class="rts-btn btn-primary btn-white" style="background:#ed3532;">Apply for Scholarships </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape elements -->
                </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="rts-banner-area-two rts-section-gap" style="position: relative; background-image: url('{{ asset('frontend/assets/images/iwgc/Hero02.webp') }}'); background-size: cover; background-position: center;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="container" style="position: relative; z-index: 2;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-inner-two-content">
                                    <p class="pre-title" style="color: #fff;"><span style="color: #fff;">Welcome!</span> </p>
                                    <h1 class="title" style="color: #fff;">Post-Study Guidance for Further Growth</h1>
                                    <p class="disc" style="color: rgba(255,255,255,0.8);">
                                    Explore study abroad programs and career development & training opportunities. Our personalized advice and industry tips help students and graduates unlock their future. Strat your journey today!
                                    </p>
                                    <a href="{{ route('scholarships') }}" class="rts-btn btn-primary btn-white" style="background:#ed3532;">Apply for Scholarships </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape elements -->
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="rts-banner-area-two rts-section-gap" style="position: relative; background-image: url('{{ asset('frontend/assets/images/iwgc/Hero03.webp') }}'); background-size: cover; background-position: center;">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="container" style="position: relative; z-index: 2;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-inner-two-content">
                                    <p class="pre-title" style="color: #fff;"><span style="color: #fff;">Welcome!</span> </p>
                                    <h1 class="title" >Boost Your Career Skills</h1>
                                    <p class="disc" style="color: rgba(255,255,255,0.8);">
                                    Gain real experience through internships, expert guidance, mentorship, and hands-on projects to prepare for your career.
                                    </p>
                                    <a href="{{ route('scholarships') }}" class="rts-btn btn-primary btn-white" style="background:#ed3532;">Apply for Scholarships </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shape elements -->
                </div>
            </div>

            
        </div>
        <div class="swiper-button-next"><i class="fa-light fa-chevron-right"></i></div>
        <div class="swiper-button-prev"><i class="fa-light fa-chevron-left"></i></div>
    </div>
</div>
<!-- Banner area end -->


<!-- rts 1st boxes area start -->
<div class="rts-about-area-two rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <!-- Section Template -->
            @php
                $sections = [
                    [
                        'title' => 'Learning Experience Tailored to Your Lifestyle',
                        'items' => [
                            'Flexible Online Learning & Enhanced Accessibility',
                            'Self-Paced LMS',
                            'Tailored Curriculum',
                            'Continuous Assessment & Feedback',
                            'Dedicated Learning Support'
                        ]
                    ],
                    [
                        'title' => 'Professional Skills Development',
                        'items' => [
                            'Internships',
                            'Career Counseling',
                            'Expert-Led Workshops & Seminars',
                            'Mentorship Programs',
                            'Capstone Projects'
                        ]
                    ],
                    [
                        'title' => 'Guidance for Post-Study Opportunities',
                        'items' => [
                            'Study Abroad & International Opportunities',
                            'Continued Education & Training',
                            'Career Development Services',
                            'Networking Opportunities',
                            'Job Placement Services'
                        ]
                    ]
                ];
            @endphp

            @foreach($sections as $index => $section)
            <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.{{ 2 + $index * 2 }}" data-duration="1.2">
                <div class="signle-fun-facts-one custom-box">
                    <div class="icon">
                        <img src="{{ asset('1st Class.png') }}" alt="fun-facts">
                    </div>
                    <h5>{{ $section['title'] }}</h5>
                    <ul style="text-align: left; padding-left: 20px;">
                        @foreach($section['items'] as $item)
                        <li>
                            <i class="fas fa-check-circle red-bg-icon" style="color:red; padding-right:10px;"></i> {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="shape-area">
        <img src="frontend/assets/images/about/shape/01.svg" alt="shape" class="one">
        <img src="frontend/assets/images/about/shape/02.svg" alt="shape" class="two">
    </div>
</div>



<!-- rts about area start -->
    <div class="rts-about-area about-bg-four bg_image  rts-section-gapBottom">
        <div class="container pt--50">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="left-thumbnail-about-area-two">
                        <video id="mainVideo" autoplay muted playsinline controls class="custom-video">
                            <source src="{{ asset('public/frontend/assets/images/about/iwgc.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <div class="col-lg-5">
                        <div class="about-inner-content-two">
                            <div class="title-style-two left">
                                <span class="bg-content">About Us</span>
                                <h2 class="title rts-text-anime-style-1 mt-3">Discover More About IWGC

                                </h2>
                            </div>
                            <div class="about-between-wrapper">
                                <p class="disc" style="text-align: justify;">
                                Imperial Wisdom Graduate Campus stands as Sri Lanka’s premier center for innovative higher education, combining academic excellence with industry relevance. Our comprehensive programs are designed with flexibility to accommodate diverse student needs, ensuring they are future-ready with global competencies and critical thinking skills. Led by a team of experienced faculty, we emphasize personal growth and professional development, preparing students to excel in a competitive global marketplace. With a student-centric approach and a commitment to holistic education, Imperial Wisdom Graduate Campus offers a strategic advantage for those seeking a transformative academic experience in Sri Lanka.
                                </p>
                                
                            </div>
                            <div class="call-and-sign-area two mt--10">
                                <div class="call-area">
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn" style="background:#1b2954;">View 
                                                Programs</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->



<!-- rts service area start -->
<div class="service-ribbon-wrapper mb-5">
    <div class="service-ribbon-track">
        <div class="service-ribbon-content">
            <!-- Content Repeated Twice for Seamless Scroll -->
            <div class="service-ribbon-item"><i class="fas fa-bullhorn"></i> Educational Marketing</div>
            <div class="service-ribbon-item"><i class="fas fa-edit"></i> Curriculum Development</div>
            <div class="service-ribbon-item"><i class="fas fa-laptop-code"></i> Learner Management Systems</div>
            <div class="service-ribbon-item"><i class="fas fa-certificate"></i> CPD for Tutors</div>
            <div class="service-ribbon-item"><i class="fas fa-chalkboard-teacher"></i> Education Events</div>
            <div class="service-ribbon-item"><i class="fas fa-handshake"></i> Global Partnerships</div>
            <div class="service-ribbon-item"><i class="fas fa-globe"></i> Study Abroad</div>

            <!-- Repeat for infinite loop effect -->
            <div class="service-ribbon-item"><i class="fas fa-bullhorn"></i> Educational Marketing</div>
            <div class="service-ribbon-item"><i class="fas fa-edit"></i> Curriculum Development</div>
            <div class="service-ribbon-item"><i class="fas fa-laptop-code"></i> Learner Management Systems</div>
            <div class="service-ribbon-item"><i class="fas fa-certificate"></i> CPD for Tutors</div>
            <div class="service-ribbon-item"><i class="fas fa-chalkboard-teacher"></i> Education Events</div>
            <div class="service-ribbon-item"><i class="fas fa-handshake"></i> Global Partnerships</div>
            <div class="service-ribbon-item"><i class="fas fa-globe"></i> Study Abroad</div>
        </div>
    </div>
</div>
<!-- rts service area end -->




<!-- rts steps area start -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Popular Programs</span>
                    <h2 class="title rts-text-anime-style-1">Popular Programs at IWGC</h2>
                </div>
            </div>
        </div>
    </div>
         <div class="container mt-5">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <a href="{{ route('master_BA') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/1mb.png') }}" alt="Master of Business Administration" class="img-fluid">
                            <div class="program-overlay"></div>
                            <div class="program-content">
                                <h3>Master of Business Administration</h3>
                                <span class="btn btn-outline-light">Explore Program<i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('master_ELM') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Master-of-Educational-Leadership-and-Management.jpg') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                            <div class="program-overlay"></div>
                            <div class="program-content">
                                <h3>Master of Educational Leadership and Management</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('bachelor_ECE') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Early-Childhood Education.jpg') }}" alt="Bachelor of Early Childhood Education" class="img-fluid">
                            <div class="program-overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Early Childhood Education (BECE)</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('bachelor_teaching') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Teaching-(Primary).jpg') }}" alt="Bachelor of Teaching (Primary)" class="img-fluid">
                            <div class="program-overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Teaching (Primary)</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('bachelor_counseling') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Counseling.jpg') }}" alt="Bachelor of Counseling" class="img-fluid">
                            <div class="program-overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Counseling</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('bachelor_psychology') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/boc.jpg') }}" alt="Bachelor of Counseling" class="img-fluid">
                            <div class="program-overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Psychology</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </div>
</div>
<!-- rts steps area end -->


<!-- working process area start -->
<div class="working-process-one " style="background-image: url('{{ asset('frontend/assets/images/footer/new.jpg') }}');background-repeat: no-repeat;
  background-size: cover; z-index: 1; padding: 60px 0; margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-one center">
                    <h2 class="title  rts-text-anime-style-1" style="color:white">Why Choose IWGC ?</h2>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <!-- Box 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-box red-box">
                    <h4 class="title  rts-text-anime-style-1">Education for Everyone</h4>
                    <ul class="why-list">
                        <li><i class="fas fa-check-circle"></i> Comprehensive Accessibility</li>
                        <li><i class="fas fa-check-circle"></i> Affordable Excellence</li>
                        <li><i class="fas fa-check-circle"></i> Financial Assistance</li>
                        <li><i class="fas fa-check-circle"></i> Early Enrollment Incentives</li>
                        <li><i class="fas fa-check-circle"></i> Supportive Environment</li>
                    </ul>

                </div>
            </div>

            <!-- Box 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-box red-box">
                    <h4 class="title  rts-text-anime-style-1">Advance Further with Us</h4>
                    <ul class="why-list">
                        <li><i class="fas fa-check-circle"></i>Global Opportunities</li>
                        <li><i class="fas fa-check-circle"></i>Expert Guidance</li>
                        <li><i class="fas fa-check-circle"></i>Migration Support</li>
                        <li><i class="fas fa-check-circle"></i>Professional Networks</li>
                    </ul>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-box red-box">
                    <h4 class="title  rts-text-anime-style-1">Tailor-Made Academic Pathways</h4>
                    <ul class="why-list">
                        <li><i class="fas fa-check-circle"></i>Customized Solutions</li>
                        <li><i class="fas fa-check-circle"></i>Flexible Entry Points</li>
                        <li><i class="fas fa-check-circle"></i>Guided Transitions</li>
                        <li><i class="fas fa-check-circle"></i>Personalized Mentorship</li>
                    </ul>
                </div>
            </div>

            <!-- Box 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-box red-box">
                    <h4 class="title  rts-text-anime-style-1">Placements (Coming Soon)</h4>
                    <ul class="why-list">
                        <li><i class="fas fa-check-circle"></i>Career Launchpad</li>
                        <li><i class="fas fa-check-circle"></i>Industry Integration</li>
                        <li><i class="fas fa-check-circle"></i>Post-Graduation Support</li>
                        <li><i class="fas fa-check-circle"></i>Resume Preparation</li>
                    </ul>
                </div>
            </div>

            <!-- Box 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-box red-box">
                    <h4 class="title  rts-text-anime-style-1">Dynamic Learning Experience</h4>
                    <ul class="why-list">
                        <li><i class="fas fa-check-circle"></i>Hybrid Learning Models</li>
                        <li><i class="fas fa-check-circle"></i>On-Demand Resources</li>
                        <li><i class="fas fa-check-circle"></i>Expert-Led Workshops</li>
                        <li><i class="fas fa-check-circle"></i>Tech-Enhanced Learning</li>
                    </ul>
                </div>
            </div>

            <!-- Box 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="why-box red-box">
                    <h4 class="title  rts-text-anime-style-1">Internships</h4>
                    <ul class="why-list">
                        <li><i class="fas fa-check-circle"></i>Real-World Integration</li>
                        <li><i class="fas fa-check-circle"></i>Career-Centric Learning</li>
                        <li><i class="fas fa-check-circle"></i>Corporate Partnerships</li>
                        <li><i class="fas fa-check-circle"></i>Skill Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- working process area end -->



<style>

/* Make the FAQ section height smaller on tablets */
@media (max-width: 992px) {
    .rts-faq-area {
        height: 1100px;
    }

    .faq-wrapper-inner-page {
        padding-top: 20px;
    }
}

/* Make the FAQ section height auto and stack columns for mobile */
@media (max-width: 768px) {
    .rts-faq-area {
        height: auto;
        padding-bottom: 60px;
    }

    .rts-faq-area .col-lg-6 {
        padding-left: 15px !important;
        padding-right: 15px !important;
        margin-top: 40px;
    }

    .faq-wrapper-inner-page {
        margin-top: 10px;
    }

    .title-style-two h2 {
        font-size: 24px !important;
        text-align: center;
    }

    .accordion-button {
        font-size: 15px!important;
    }

    .accordion-body {
        font-size: 14px;
    }

    .video-area {
        text-align: center;
    }

    .vedio-icone {
        display: inline-block;
    }
}


.faq-top-image {
    display: none;
}

@media (max-width: 768px) {

    .rts-faq-area {
        background-image: none !important;
        height: auto !important;
    }

    /* Show the top image */
    .faq-top-image {
        display: block;
        width: 100%;
        text-align: center;
        margin-bottom: 0;
    }

    .faq-top-image img {
        max-width: 100%;
        height: auto;
    }

}
@media (max-width: 768px) {
    .faq-overlay {
        display: none !important;
    }
   .fq-box {
    background: linear-gradient(135deg, rgba(0, 0, 0, 1), rgba(0, 102, 255, 1));
}
     .empty-col {
        display: none !important;
    }
    .testimonials-box{
        margin-top:0px !important;
    }
}

</style>




<!-- rts faq area start -->
<div class="rts-faq-area rts-section-gapBottom faq-banner" style="margin-top: 80px; background-image: url('{{ asset('frontend/assets/images/iwgc/FAQGirl.webp') }}'); height: 900px; background-size: cover; background-position: center; position: relative;">

    <!-- Overlay -->
    <div class="faq-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(0, 0, 0, 0.35); z-index: 1;"></div>
    <div class="container fq-box" style="position: relative; z-index: 2; padding: 10px; color: white;">
        <div class="row">
            <div class="col-lg-12 pt-5 pb-0">
                <div class="title-style-two center">
                    <h2 class="title rts-text-anime-style-1" style="color: white !important;">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
    </div>    
    <!-- Put this image inside the container before the FAQ for mobile -->
        <div class="faq-top-image">
            <img src="{{ asset('frontend/assets/images/iwgc/FAQGirl.webp') }}" alt="FAQ" />
        </div>
 
    <div class="container fq-box" style="position: relative; z-index: 2; padding: 0px; margin-top:0">
        
        <div class="row">
                
                <div class="col-lg-6 pl--50 pr--50 empty-col" data-animation="fadeInUp" data-delay="0.1">
                    
                </div>
                <div class="col-lg-6 pl--50 pl_md--0 pl_sm--0 " data-animation="fadeInUp" data-delay="0.3">
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. What programs does the university offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  We offer a wide range of undergraduate, graduate, and professional programs in fields such as science, business, engineering, and education. Flexible formats are available to fit your schedule.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. How do I apply for admission?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our application process is simple. Choose your program, submit the required documents, and our team will assist you through every step. If you need help deciding, our advisors are here for you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. What is the student to faculty ratio?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We maintain a low student to faculty ratio to ensure personalized academic support, strong mentoring, and a collaborative learning environment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. I am unsure which course fits my career or migration goals. Can you help?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes. Our expert counselors will help you select the right course based on your career plans or migration objectives.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    05. What if I am working or managing a family?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                We understand your responsibilities. That is why we offer flexible learning options including fully online and hybrid programs to fit your lifestyle.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    06. Can I improve the value of my current education?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                Yes. We help enhance your current qualifications through internships, industry workshops, additional learning modules, and practical training.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- rts faq area end -->


<style>
.testimonial-card {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 60px 30px 40px;
    border-radius: 0;
    background: linear-gradient(135deg, #000000, #0f1862ff);
    transition: transform 0.4s, box-shadow 0.4s;
    text-align: center;
    overflow: visible;
    min-height: 100%;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    border-image: linear-gradient(135deg, blue, gold, red) 1;
}

.testimonial-logo {
    position: absolute;
    bottom: 5px;
    left: 5px;
    width: 45px;
    height: auto;
    z-index: 2;
}

/* Centered image overlapping top */
.testimonial-card .thumbnail {
    position: absolute;
    top: -25px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 120px;
    border-radius: 50%;
    padding: 5px;
    background: gold; /* border ring */
}

.testimonial-card .thumbnail img {
    width: 100%;
    z-index:4;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #fff; /* inner white gap */
}

/* Name and designation */
.testimonial-card .discription {
    margin-top: 70px;
}

.testimonial-card .discription h6.title {
    font-size: 20px;
    font-weight: 700;
    color: white;
    margin-bottom: 5px;
}

.testimonial-card .discription span {
    font-size: 14px;
    color: white;
}

/* Review text with quotes */
.testimonial-card .review-body {
    margin-top: 20px;
    font-size: 14px;
    line-height: 1.6;
    color: white;
    position: relative;
    padding: 0 15px;
}

.testimonial-card .review-body::before,
.testimonial-card .review-body::after {
    font-size: 40px;
    font-weight: bold;
    color: transparent;
    background: linear-gradient(45deg, blue, gold, red);
    -webkit-background-clip: text;
    background-clip: text;
    position: absolute;
}

.testimonial-card .review-body::before {
    content: "“";
    top: -10px;
    left: -5px;
}

.testimonial-card .review-body::after {
    content: "”";
    bottom: -30px;
    right: -5px;
}


@media (max-width: 576px) {
    .testimonial-card {
        padding-top: 80px;
    }

    .testimonial-card .thumbnail {
        top: -25px;
        width: 100px;
        height: 100px;
    }

    .testimonial-card .discription {
        margin-top: 60px;
    }
}

.small-arrow {
  width: 30px;
  height: 30px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  top: 45%;
  color: white;
  --swiper-navigation-size: 20px; 
  transition: background 0.3s ease;
  z-index: 10;
}

.small-arrow:hover {
  background: red;
  color: black;
}

.swiper-button-prev.small-arrow::after,
.swiper-button-next.small-arrow::after {
  font-size: 20px; 
  font-weight: bold;
}

.swiper-button-prev.small-arrow {
  left: 5px;
}

.swiper-button-next.small-arrow {
  right: 5px;
}

</style>

<!-- start client review area start -->
<div class="mt--100 pt-2 pb-4 testimonials-box"> 
        <div class="container">
            <div class="row mt--30" >
                <div class="title-style-three-between">
                    <div class="title-style-three left mb-3">
                        <div class="bg-title"></div>
                        <h2 class="title rts-text-anime-style-1">Student Testimonials
                        </h2>
                    </div>
                    <!--
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary btn-white">See All Reviews</a>
                    </div>-->
                </div>
            </div>
           <div class="row g-5">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper pt-5">
                            @foreach($testimonials as $testimonial)
                            <div class="swiper-slide" style="height: auto; display: flex; justify-content: center;">
                                <!-- single client review -->
                                <div class="rts-client-reviews-h2 testimonial-card">
                                    <img src="{{ asset('logo2.png') }}" alt="Logo" class="testimonial-logo">

                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('storage/app/public/' . $testimonial->avatar) }}" alt="testimonial image">
                                    </a>

                                    <div class="discription">
                                        <h6 class="title">{{ $testimonial->name }}</h6>
                                        <span>{{ $testimonial->designation }}</span>
                                    </div>

                                    <div class="review-body">
                                        {{ $testimonial->review }}
                                    </div>
                                </div>
                                <!-- single client review End -->
                            </div>

                            @endforeach
                        </div>
                        <!-- Swiper arrows -->
                        <div class="swiper-button-prev small-arrow"></div>
                        <div class="swiper-button-next small-arrow"></div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
</div>
 <!-- start client review area end -->

    



<!-- rts Esteemed Clients start -->
<div class="rts-client-area ptb--100 brand-bg-three bg_image mt--20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="title-style-two center">
                    <span class="bg-content">Clients</span>
                    <h2 class="title rts-text-anime-style-1">Our Esteemed Partners</h2>
                </div>
            </div>
        </div>
    </div>    
    <div class="marquee-wrapper-outer">
        <div class="marquee-arrow left" onclick="scrollLogos(-1)">
            &#10094;
        </div>

        <div class="logo-marquee-container" id="logoContainer">
            <div class="logo-marquee-track" id="logoTrack">
            <!-- Repeat logos for seamless loop -->
            <div class="logo-marquee">
                <img src="frontend/assets/images/uni/uni1.webp" alt="Client 1">
                <img src="public/frontend/assets/images/uni/uni2.png" alt="Client 2">
                <img src="public/frontend/assets/images/uni/uni3.png" alt="Client 3">
                <img src="public/frontend/assets/images/uni/uni4.png" alt="Client 4">
                <img src="public/frontend/assets/images/malaysia/Picture4.png" alt="Picture 4">
                <img src="public/frontend/assets/images/malaysia/Picture9.png" alt="Client 6">
                <img src="public/frontend/assets/images/uni/uni7.png" alt="Client 7">
                <img src="public/frontend/assets/images/malaysia/Picture10.png" alt="Client 8">
                <img src="public/frontend/assets/images/uni/uni9.png" alt="Client 9">
                <img src="public/frontend/assets/images/malaysia/Picture8.png" alt="Client 10">
            </div>
            
        </div>
    </div>
     <div class="marquee-arrow right" onclick="scrollLogos(1)">
            &#10095;
        </div>
    </div>
</div>
<!-- rts galllery area end -->

    
     
<!-- rts gallery area start -->
<div class="rts-gallery-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="title-style-two center">
                    <span class="bg-content">Gallery</span>
                    <h2 class="title rts-text-anime-style-1">Gallery & Events</h2>
                </div>
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-area-main-wrapper-4">
                    <div class="row g-4">
                        <!-- Repeat this block for each image -->
                        <div class="col-md-4">
                            <a href="/events" class="single-gallery event-box">
                                <div class="image-wrapper">
                                    <img src="frontend/assets/images/gallery/Picture1.png" alt="Event 1">
                                    <div class="overlay">
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/events" class="single-gallery event-box">
                                <div class="image-wrapper">
                                    <img src="frontend/assets/images/gallery/Picture2.png" alt="Event 2">
                                    <div class="overlay">
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/events" class="single-gallery event-box">
                                <div class="image-wrapper">
                                    <img src="frontend/assets/images/gallery/Picture3.png" alt="Event 3">
                                    <div class="overlay">
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/events" class="single-gallery event-box">
                                <div class="image-wrapper">
                                    <img src="frontend/assets/images/gallery/Picture4.png" alt="Event 4">
                                    <div class="overlay">
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/events" class="single-gallery event-box">
                                <div class="image-wrapper">
                                    <img src="frontend/assets/images/gallery/Picture5.png" alt="Event 5">
                                    <div class="overlay">
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/events" class="single-gallery event-box">
                                <div class="image-wrapper">
                                    <img src="frontend/assets/images/gallery/Picture6.png" alt="Event 6">
                                    <div class="overlay">
                                      
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Add more as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts gallery area end -->










<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function () {
        var swiper = new Swiper(".mySwiperh2_clients", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1500: {
                    slidesPerView: 3,
                },
                1300: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 1,
                },
                575: {
                    slidesPerView: 1,
                },
                0: {
                    slidesPerView: 1,
                }
            },
        });
    });
</script>

<script>
    document.getElementById('contact-form').addEventListener('submit', function() {
        setTimeout(() => {
            window.location.reload();
        }, 1000); // refresh 1 sec after submission
    });


    
</script>

<script>
    const container = document.getElementById('logoContainer');
    let autoScrollInterval;

    function getSingleLogoScrollWidth() {
        const logo = container.querySelector('.logo-marquee img');
        if (!logo) return 200; 
        const style = getComputedStyle(logo);
        const marginRight = parseInt(style.marginRight || 0);
        const gap = 80; 
        return logo.offsetWidth + gap;
    }

    function startAutoScroll() {
        stopAutoScroll(); 
        autoScrollInterval = setInterval(() => {
            container.scrollBy({ left: 1, behavior: 'smooth' });
        }, 20);
    }

    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }

    function scrollLogos(direction) {
        const scrollAmount = getSingleLogoScrollWidth();
        container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });

        // Restart auto-scroll after short pause
        stopAutoScroll();
        setTimeout(startAutoScroll, 1000);
    }

    // Start auto-scroll on page load
    window.addEventListener('DOMContentLoaded', startAutoScroll);

    container.addEventListener('mouseenter', stopAutoScroll);
    container.addEventListener('mouseleave', startAutoScroll);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') scrollLogos(-1);
        if (e.key === 'ArrowRight') scrollLogos(1);
    });
</script>


@endsection

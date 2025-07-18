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
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05); /* very soft default shadow */
}

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

.program-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
    text-align: center;
    color: #fff;
    z-index: 2;
}

.program-content h3 {
    color: white;
    font-weight: 800;
    margin-bottom: 25px;
}

/* Overlay Styling */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3); /* less opacity for a cleaner look */
    z-index: 1;
    transition: background 0.3s ease;
    border-radius: 15px;
}

/* Button Style */
.program-content .btn {
    position: relative;
    z-index: 2;
    font-size: 18px;
    font-weight: 600;
    border-radius: 30px;
    padding: 8px 20px;
    margin-bottom: 25px;
    transition: background-color 0.3s ease, color 0.3s ease;
}


/* why choose iwgc section */
.program-card:hover {
    transform: scale(1.015);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* lighter and cleaner glow */
}

.program-card:hover .overlay {
    background: #1b2954; /* slightly darker on hover */
}

.program-card:hover .btn-outline-light {
    background-color: #fff;
    color: #c1121f;
    border-color: #fff;
}

/* Main background */
.working-process-one {
    background-color: #1b2954; /* deep navy blue */
}



</style>

<!-- Banner area start -->
<div class="banner-swiper-two">
    <div class="swiper mySwiper-banner-two">
        <div class="swiper-wrapper">
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
<!-- rts 1st boxes area end -->



<!-- rts about area start -->
<div class="rts-about-area-two rts-section-gap">
    <div class="container">
        <div class=" row d-flex flex-wrap align-items-center gap-5">
            <div class="col-lg-6 ">
                <div class="left-thumbnail-about-area-two">
                    <img src="{{ asset('frontend/assets/images/about/01.webp') }}" style="border-radius:10px" alt="about">
                    <div class="small-image">
                        <img src="{{ asset('frontend/assets/images/about/02.webp') }}" style="border-radius:10px" alt="small">
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-5 mt_sm--80 mt_md--80 ">
                <div class="about-inner-content-two">
                    <div class="title-style-two left">
                        <span class="bg-content">About Us</span>
                        <h2 class="title rts-text-anime-style-1">Discover More About IWGC

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
    <div class="shape-area">
        <img src="frontend/assets/images/about/shape/01.svg" alt="shape" class="one">
        <img src="frontend/assets/images/about/shape/02.svg" alt="shape" class="two">
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
    <div class="container">
        <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <a href="programs/mba-business-administration.php" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/1mb.png') }}" alt="Master of Business Administration" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Master of Business Administration</h3>
                                <span class="btn btn-outline-light">Explore Program<i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/programs/master-educational-leadership.php" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Master-of-Educational-Leadership-and-Management.jpg') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Master of Educational Leadership and Management</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/programs/bachelor-early-childhood-education.php" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Early-Childhood Education.jpg') }}" alt="Bachelor of Early Childhood Education" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Early Childhood Education (BECE)</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/programs/bachelor-teaching-primary.php" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Teaching-(Primary).jpg') }}" alt="Bachelor of Teaching (Primary)" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Teaching (Primary)</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/programs/Bachelor-of-Counseling.php" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Counseling.jpg') }}" alt="Bachelor of Counseling" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Counseling</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/programs/Bachelor-of-Counseling.php" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/boc.jpg') }}" alt="Bachelor of Counseling" class="img-fluid">
                            <div class="overlay"></div>
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
<div class="working-process-one bg-main " style="padding:60px 0 ; margin-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-one center">
                    <h2 class="title rts-text-anime-style-1">Why Choose IWGC</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--30 align-items-center">
            <!-- Box 1: Education for Everyone -->
            <div class="col-lg-4">
                <div class="why-box red-box">
                    <h4 style="color:white;">Education for Everyone</h4>
                    <ul>
                        <li>Comprehensive Accessibility</li>
                        <li>Affordable Excellence</li>
                        <li>Financial Assistance</li>
                        <li>Early Enrollment Incentives</li>
                        <li>Supportive Environment</li>
                    </ul>
                    <h4 style="color:white; margin-top:40px">Advance Further with Us</h4>
                    <ul>
                        <li>Global Opportunities</li>
                        <li>Expert Guidance</li>
                        <li>Migration Support</li>
                        <li>Professional Networks</li>
                    </ul>
                </div>
            </div>

            <!-- Box 3: Tailor-Made Academic Pathways -->
            <div class="col-lg-4">
                <div class="why-box red-box">
                    <h4 style="color:white;">Tailor-Made Academic Pathways</h4>
                    <ul>
                        <li>Customized Solutions</li>
                        <li>Flexible Entry Points</li>
                        <li>Guided Transitions</li>
                        <li>Personalized Mentorship & Academic Advising</li>
                    </ul>
                    <h4 style="color:white; margin-top:40px">Placements (Coming Soon)</h4>
                    <ul>
                        <li>Career Launchpad</li>
                        <li>Industry Integration</li>
                        <li>Post-Graduation Support</li>
                        <li>Resume & Interview Preparation</li>
                    </ul>
                </div>
            </div>

            <!-- Box 2: A Learning Experience Tailored to Your Dynamic Lifestyle -->
            <div class="col-lg-4">
                <div class="why-box red-box">
                    <h4 style="color:white;">A Learning Experience Tailored to Your Dynamic Lifestyle</h4>
                    <ul>
                        <li>Hybrid Learning Models</li>
                        <li>On-Demand Resources</li>
                        <li>Expert-Led Workshops</li>
                        <li>Tech-Enhanced Learning</li>
                    </ul>
                    <h4 style="color:white; margin-top:40px">Internships</h4>
                    <ul>
                        <li>Real-World Integration</li>
                        <li>Career-Centric Learning</li>
                        <li>Corporate Partnerships</li>
                        <li>Skill Development</li>
                    </ul>
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- working process area end -->


<!-- rts faq area start -->
<div class="rts-faq-area rts-section-gapBottom " style="margin-top: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="title-style-two center">
                    <span class="bg-content">F.A.Q</span>
                    <h2 class="title rts-text-anime-style-1">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row">
                
                <div class="col-lg-6 pl--50 pr--50" data-animation="fadeInUp" data-delay="0.1">
                    <div class="thumbnail-about-right-4">
                         <div class="large-iamge">
                            <img src="frontend/assets/images/faq/01.webp" alt="about">
                        </div>
                        <div class="small-image images-r">
                            <img src="frontend/assets/images//FAQBoy.webp" alt="about">
                        </div>
                        <div class="poligon-shape images-r">
                            <img src="frontend/assets/images/faq/poligon-shape.svg" alt="">
                        </div>
                        <div class="video-area">
                           
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_md--0 pl_sm--0 mt_md--50 mt_sm--80" data-animation="fadeInUp" data-delay="0.3">
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion-item">
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
                        <div class="accordion-item">
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
                        <div class="accordion-item">
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. I am unsure which course fits my career or migration goals. Can you help?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  I am unsure which course fits my career or migration goals. Can you help?
            Yes. Our expert counselors will help you select the right course based on your career plans or migration objectives.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
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
                        <div class="accordion-item">
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



<div class="rts-trusted-client rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client-client text-center">
                        <p class="client-title">Our Trusted Clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-wrapper-one">
                    <a href="#" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2"><img src="frontend/assets/images/client/1.webp" alt="business_invena"></a>
                    <a href="#" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2"><img src="frontend/assets/images/client/2.webp" alt="business_invena"></a>
                    <a href="#" data-animation="fadeInUp" data-delay="0.3" data-duration="1.2"><img src="frontend/assets/images/client/3.webp" alt="business_invena"></a>
                    <a href="#" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2"><img src="frontend/assets/images/client/4.webp" alt="business_invena"></a>
                    <a href="#" data-animation="fadeInUp" data-delay="0.5" data-duration="1.2"><img src="frontend/assets/images/client/5.webp" alt="business_invena"></a>
                    <a href="#" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2"><img src="frontend/assets/images/client/6.webp" alt="business_invena"></a>
                </div>
            </div>
        </div>
    </div>



<!-- rts steps area start -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Professionals</span>
                    <span class="pre">Hire Your Finance Professionals!</span>
                    <h2 class="title rts-text-anime-style-1">Struggling to find top-notch finance professionals for your business?</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5 text-center">
            <div class="col-lg-12">
                <p class="text-muted">We connect exceptional financial talent with companies that need it. The best minds <br> in finance are ready to work in modern, flexible ways.</p>
            </div>
        </div>

        <!-- Steps Section -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="step-card text-center shadow-sm p-4 rounded-3 h-100 wow fadeInUp" data-wow-delay="0.1s" style="transition: all 0.3s ease;">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; font-size: 24px;">1</div>
                    <h5 class="fw-semibold mb-2">Understanding Your Business</h5>
                    <p class="text-muted small">We begin by learning your goals, operations, and unique financial needs.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="step-card text-center shadow-sm p-4 rounded-3 h-100 wow fadeInUp" data-wow-delay="0.2s" style="transition: all 0.3s ease;">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; font-size: 24px;">2</div>
                    <h5 class="fw-semibold mb-2">Finding the Right Professionals</h5>
                    <p class="text-muted small">We shortlist professionals with the right skills and experience for your team.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="step-card text-center shadow-sm p-4 rounded-3 h-100 wow fadeInUp" data-wow-delay="0.3s" style="transition: all 0.3s ease;">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; font-size: 24px;">3</div>
                    <h5 class="fw-semibold mb-2">Panel Interview & Selection</h5>
                    <p class="text-muted small">Together we assess and select the most suitable candidates via a panel process.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="step-card text-center shadow-sm p-4 rounded-3 h-100 wow fadeInUp" data-wow-delay="0.4s" style="transition: all 0.3s ease;">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; font-size: 24px;">4</div>
                    <h5 class="fw-semibold mb-2">On-Job Placement & Training</h5>
                    <p class="text-muted small">We ensure smooth onboarding and provide hands-on training during placement.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="step-card text-center shadow-sm p-4 rounded-3 h-100 wow fadeInUp" data-wow-delay="0.5s" style="transition: all 0.3s ease;">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-3 d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; font-size: 24px;">5</div>
                    <h5 class="fw-semibold mb-2">Ongoing Support When Needed</h5>
                    <p class="text-muted small">We’re here to support you and your team even after the hiring process ends.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts steps area end -->




<!-- rts clients review area start -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper" dir="ltr">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Review</span>
                        <span class="pre">Our Testimonial</span>
                        <h2 class="title ">Our Client Reviews
                        </h2>
                    </div>
                    <div class="pagination-wrapper">
                        <div class="swiper-pagination-fraction"></div>
                        <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="testimonials-wrapper-swiper-demo-2">
                    <div class="swiper mySwiper-testimonials-dmeo-2">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonials-main-wrapper-two">
                                    <div class="left-thumbnail">
                                        <img src="frontend/assets/images/testimonials/01.webp" alt="testimonials">
                                    </div>
                                    <div class="right-content-testimonials">
                                        <p class="disc">
                                            I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.
                                        </p>
                                        <div class="name-desig">
                                            <h6 class="title">William Henry</h6>
                                            <p>Designer at <b>Vertex Agency</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-main-wrapper-two">
                                    <div class="left-thumbnail">
                                        <img src="frontend/assets/images/testimonials/01.webp" alt="testimonials">
                                    </div>
                                    <div class="right-content-testimonials">
                                        <p class="disc">
                                            I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.
                                        </p>
                                        <div class="name-desig">
                                            <h6 class="title">William Henry</h6>
                                            <p>Designer at <b>Vertex Agency</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-main-wrapper-two">
                                    <div class="left-thumbnail">
                                        <img src="frontend/assets/images/testimonials/01.webp" alt="testimonials">
                                    </div>
                                    <div class="right-content-testimonials">
                                        <p class="disc">
                                            I can't recommend The Gourmet Haven enough. It's a place for special
                                            occasions, date
                                            nights, or whenever you're in the mood for a culinary adventure. The
                                            combination of
                                            exceptional.
                                        </p>
                                        <div class="name-desig">
                                            <h6 class="title">William Henry</h6>
                                            <p>Designer at <b>Vertex Agency</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts clients review area end -->


<!-- appoinment areas tart -->
<div class="appoinment-area-start rts-section-gapBottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="appoinment-wrapper-one-start">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Hello</span>
                        <span class="pre">Make An Appointment</span>
                        <h2 class="title">Request a free quote</h2>
                    </div>
                    @if(session('success'))
                    <div id="success-message" data-message="{{ session('success') }}"></div>
                    @endif
                    <form class="form__content" method="post" action="{{ route('contact') }}" id="contact-form">
                        @csrf
                        <div class="single-input-wrapper">
                            <div class="single-input">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                            <div class="single-input">
                                <input type="number" name="phone" id="phone" placeholder="Number">
                            </div>
                        </div>
                        <div class="single-input">
                            <input type="email" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="single-input mb--30">
                            <textarea placeholder="Type Your Message" name="message" id="message"></textarea>
                        </div>
                        <button class="rts-btn btn-primary" type="submit">Submit Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="appoinment-thumbnail">
                    <img src="{{ asset('frontend/assets/images/cover/10.jpg') }}" alt="appoinment">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- appoinment areas end -->



<!-- rts blog area start -->
<div class="rts-blog-area rts-section-gapBottom ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Blog</span>
                    <span class="pre">Blog & News</span>
                    <h2 class="title">Recent blog post
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="col-lg-12">
                <div class="blog-swiper-style-one">
                    <div class="swiper mySwiper-blog-one">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="single-blog-area-one">
                                    <p>title></p>
                                    <a >
                                        <h4 class="title"></h4>
                                    </a>
                                    <div class="bottom-details">
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts blog area end -->

<script>
    document.getElementById('contact-form').addEventListener('submit', function() {
        setTimeout(() => {
            window.location.reload();
        }, 1000); // refresh 1 sec after submission
    });


    
</script>




@endsection





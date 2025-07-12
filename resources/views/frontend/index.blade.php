@extends ('frontend.master')

@section('content')

<style>
.service-ribbon-wrapper {
    width: 100%;
    overflow: hidden;
    background: #f9f9f9;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 45px 0;
    margin:50px 0;
    position: relative;
}

.service-ribbon-track {
    display: flex;
    width: max-content;
    animation: scrollLeft 60s linear infinite;
}

.service-ribbon-content {
    display: flex;
    gap: 60px;
}

.service-ribbon-item {
    display: flex;
    align-items: center;
    font-weight: 700;
    color: #333;
    font-size: 30px;
    white-space: nowrap;
}

.service-ribbon-item img {
    width: 30px;
    height: 30px;
    margin-right: 8px;
}

.icon-ribbon-item img {
    width: auto;
    height: 70px;
    margin-right: 8px;
}

@keyframes scrollLeft {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}



.working-process-one .row {
    display: flex;
    flex-wrap: wrap;
}

.working-process-one .col-lg-4 {
    display: flex;
    flex-direction: column; 
    height: 100%; 
}


.why-box {
    background-color: #b30000; 
    color: white !important; 
    padding: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    height: 100%;
}

.why-box:hover {
    transform: translateY(-5px);
}

.why-box h4 {
    font-size: 20px;
    margin-bottom: 15px;
}

.why-box ul {
    padding-left: 20px;
    flex-grow: 1; 
}

.why-box ul li {
    position: relative;
    margin-bottom: 3px; 
    padding-left: 20px;
    font-size: 16px;
    color: white;
    line-height: 1.2; 
}

@media (max-width: 768px) {
    .why-box {
        padding: 20px;
    }

    .why-box h4 {
        font-size: 18px;
    }

    .why-box ul li {
        font-size: 14px;
    }
}

.single-gallery img {
    width: 100%;
    height: 250px; 
    object-fit: cover;
    display: block;
}

.signle-fun-facts-one {
    height: 100%;
    flex-direction: column;
    justify-content: space-between;
}

</style>

    <div class="banner-swiper-two">
        <div class="swiper mySwiper-banner-two">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome!</span></p>
                                        <h1 class="title">Boost Your Career Skills</h1>
                                        <p class="disc">
                                           Gain real experience through internships, expert guidance, mentorship, and hands-on projects to prepare for your career.
                                        </p>
                                        <a href="{{ route('scholarships') }}" class="rts-btn btn-primary btn-white">Apply for Scholarships </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img src="frontend/assets/images/banner/shape/01.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img src="frontend/assets/images/banner/shape/02.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img src="frontend/assets/images/banner/shape/03.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img src="frontend/assets/images/banner/shape/04.webp" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two two rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome!</span></p>
                                        <h1 class="title">Designed to Suit Your Lifestyle</h1>
                                        <p class="disc">
                                         Learn anytime, anywhere with our flexible online platform. Study at your own pace with a custom curriculum, get regular feedback, and receive dedicated support every step of the way.
                                        </p>
                                        <a href="{{ route('scholarships') }}" class="rts-btn btn-primary btn-white">Apply for Scholarships </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img src="frontend/assets/images/banner/shape/01.webp" alt="">
                            </div>
                            <div class="shape shape-two">
                                <img src="frontend/assets/images/banner/shape/02.webp" alt="">
                            </div>
                            <div class="shape shape-three">
                                <img src="frontend/assets/images/banner/shape/03.webp" alt="">
                            </div>
                            <div class="shape shape-four">
                                <img src="frontend/assets/images/banner/shape/04.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two three rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome!</span></p>
                                        <h1 class="title">Post-Study Guidance for Further Growth</h1>
                                        <p class="disc">
                                           Explore study abroad programs and career development & training opportunities. Our personalized advice and industry tips help students and graduates unlock their future. Strat your journey today!
                                        </p>
                                        <a href="{{ route('scholarships') }}" class="rts-btn btn-primary btn-white">Apply for Scholarships </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img src="frontend/assets/images/banner/shape/01.webp" alt="">
                            </div>
                            <div class="shape shape-two">
                                <img src="frontend/assets/images/banner/shape/02.webp" alt="">
                            </div>
                            <div class="shape shape-three">
                                <img src="frontend/assets/images/banner/shape/03.webp" alt="">
                            </div>
                            <div class="shape shape-four">
                                <img src="frontend/assets/images/banner/shape/04.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            </div>
            <div class="swiper-button-next"><i class="fa-light fa-chevron-right"></i></div>
            <div class="swiper-button-prev"><i class="fa-light fa-chevron-left"></i></div>
        </div>
    </div>



<!-- rts fun facts area start -->
<div class="rts-fun-facts-area rts-section-gapBottom mt--30">
    <div class="container">
        <div class="row g-5">
            <!-- Section 1 -->
            <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                <div class="signle-fun-facts-one">
                    <div class="icon">
                        <img src="{{ asset('1st Class.png') }}" alt="fun-facts">
                    </div>
                    <h5 class="">Learning Experience Tailored to Your Lifestyle</h5>
                    <ul style="text-align: left; padding-left: 20px;">
                        <li>Flexible Online Learning & Enhanced Accessibility</li>
                        <li>Self-Paced LMS</li>
                        <li>Tailored Curriculum</li>
                        <li>Continuous Assessment & Feedback</li>
                        <li>Dedicated Learning Support</li>
                    </ul>
                </div>
            </div>
            <!-- Section 2 -->
            <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                <div class="signle-fun-facts-one">
                    <div class="icon">
                        <img src="{{ asset('1st Class.png') }}" alt="fun-facts">
                    </div>
                    <h5 class="">Professional Skills Development</h5>
                    <ul style="text-align: left; padding-left: 20px;">
                        <li>Internships</li>
                        <li>Career Counseling</li>
                        <li>Expert-Led Workshops & Seminars</li>
                        <li>Mentorship Programs</li>
                        <li>Capstone Projects</li>
                    </ul>
                </div>
            </div>
            <!-- Section 3 -->
            <div class="col-lg-4" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                <div class="signle-fun-facts-one">
                    <div class="icon">
                        <img src="{{ asset('1st Class.png') }}" alt="fun-facts">
                    </div>
                    <h5 class="">Guidance for Post-Study Opportunities</h5>
                    <ul style="text-align: left; padding-left: 20px;">
                        <li>Study Abroad & International Opportunities</li>
                        <li>Continued Education & Training</li>
                        <li>Career Development Services</li>
                        <li>Networking Opportunities</li>
                        <li>Job Placement Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts fun facts area end -->


    <!-- rts-about area start -->
    <div class="rts-about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <span class="pre">Discover More About IWGC</span>
                        </div>
                     <p class="disc" style="text-align: justify;">
                        Imperial Wisdom Graduate Campus stands as Sri Lanka’s premier center for innovative higher education, combining academic excellence with industry relevance. Our comprehensive programs are designed with flexibility to accommodate diverse student needs, ensuring they are future-ready with global competencies and critical thinking skills. Led by a team of experienced faculty, we emphasize personal growth and professional development, preparing students to excel in a competitive global marketplace. With a student-centric approach and a commitment to holistic education, Imperial Wisdom Graduate Campus offers a strategic advantage for those seeking a transformative academic experience in Sri Lanka.
                    </p>

                       
                        <a href="{{ route('about') }}" class="rts-btn btn-primary">Explore Our Campus </a>
                    </div>
                </div>
                <div class="col-lg-7 pl--70">
                    <div class="thumbnail-about-and-progress-1">

                        <div class="thumbnail-about-1">
                            <img src="frontend/assets/images/about/01.webp" alt="about">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->



<div class="service-ribbon-wrapper">
    <div class="service-ribbon-track">
        <div class="service-ribbon-content">
            <!-- Content Repeated Twice for Seamless Scroll -->
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3135/3135755.png"> Education Marketing</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/4140/4140048.png"> Curriculum & Learning Material Development</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/10016/10016274.png"> Learner Management Systems (LMS)</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3820/3820353.png"> CPD for Tutors</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/2865/2865369.png"> Education Seminars</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/684/684908.png"> Events & Workshop Hosting</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3303/3303894.png"> Local & International Strategic Partnership Development</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3176/3176291.png"> Study Abroad</div>

            <!-- Repeat for infinite loop effect -->
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3135/3135755.png"> Education Marketing</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/4140/4140048.png"> Curriculum & Learning Material Development</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/10016/10016274.png"> Learner Management Systems (LMS)</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3820/3820353.png"> CPD for Tutors</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/2865/2865369.png"> Education Seminars</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/684/684908.png"> Events & Workshop Hosting</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3303/3303894.png"> Local & International Strategic Partnership Development</div>
            <div class="service-ribbon-item"><img src="https://cdn-icons-png.flaticon.com/128/3176/3176291.png"> Study Abroad</div>
        </div>
    </div>
</div>



<!-- working process area start -->
<div class="working-process-one bg-main " style="padding:60px 0">
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

<style>

.program-card {
    display: block;
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
    height: 100%;
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
    background: rgba(0, 0, 0, 0.47);
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

/* Hover Effects */
.program-card:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.program-card:hover .overlay {
    background: rgba(0, 0, 0, 0.65);
}

.program-card:hover .btn-outline-light {
    background-color: #fff;
    color: #c1121f;
    border-color: #fff;
}

</style>


  <!-- Program Buttons Section -->
        <section class="program-buttons-section section-padding  rts-section-gapBottom  rts-section-gapTop">
            <div class="container">
                <div class="section-title color-red text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Popular Programs at IWGC
                    </h2>
                    <p class="courses-sub-text mt-3 mb-5 wow fadeInUp" style="font-size:18px" data-wow-delay=".5s">Explore our <b>top-rated</b> programs designed for your <b>academic success</b></p>
                </div>
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
        </section>


    <!-- rts latest service area start 
    <div class="rts-latest-service-area rts-section-gapBottom pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre"></span>
                        <h2 class="title rts-text-anime-style-1">Popular Programs at IWGC
                        </h2>
                    </div>
                </div>
             <div class="col-lg-8 offset-lg-2 mt--50">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement d-flex align-items-center justify-content-between py-3">
                                <h5 class="title mb-0">Master of Business Administration (MBA)</h5>
                            <div class="right">
                                <a href="{{ route('master_BA') }}" class="arrow" style="margin-left: auto;">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement d-flex align-items-center justify-content-between py-3">
                                <h5 class="title mb-0">Master of Educational Leadership & Management </h5>
                            <div class="right">
                                <a href="{{ route('master_ELM') }}" class="arrow" style="margin-left: auto;">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                         <div class="sticky-statement d-flex align-items-center justify-content-between py-3">
                                <h5 class="title mb-0">Bachelor of Early Childhood Education (BECE)</h5>
                            <div class="right">
                                <a href="{{ route('bachelor_ECE') }}" class="arrow" style="margin-left: auto;">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                         <div class="sticky-statement d-flex align-items-center justify-content-between py-3">
                                <h5 class="title mb-0">Bachelor of Teaching (Primary)</h5>
                            <div class="right">
                                <a href="{{ route('bachelor_teaching') }}" class="arrow" style="margin-left: auto;">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                         <div class="sticky-statement d-flex align-items-center justify-content-between py-3">
                                <h5 class="title mb-0">Bachelor of Science in Psychology</h5>
                            <div class="right">
                                <a href="{{ route('bachelor_psychology') }}" class="arrow" style="margin-left: auto;">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                         <div class="sticky-statement d-flex align-items-center justify-content-between py-3">
                                <h5 class="title mb-0">Bachelor of Counseling </h5>
                            <div class="right">
                                <a href="{{ route('bachelor_counseling') }}" class="arrow" style="margin-left: auto;">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                       
                    </section>
                </div>
            </div>
        </div>
    </div>
  rts latest service area end -->

    

    <!-- rts faq area start -->
    <div class="rts-faq-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12" style="padding-bottom:50px">
                    <div class="title-style-one center">
                        <span class="pre"></span>
                        <h2 class="title rts-text-anime-style-1"> Frequently Asked Questions
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pr--50" data-animation="fadeInUp" data-delay="0.1">
                    <div class="thumbnail-about-right-4">
                         <div class="large-iamge">
                            <img src="frontend/assets/images/faq/01.webp" alt="about">
                        </div>
                        <div class="small-image images-r">
                            <img src="frontend/assets/images/faq/03.jpg" alt="about">
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

    
     <!-- start client review area start -->
    <div class="rts-client-review-two bg-black-content pt-4 bg-client-r-h2">
        <div class="container">
            <div class="row mt--30">
                <div class="title-style-three-between">
                    <div class="title-style-three left">
                        <span class="pre">Our Testimonial</span>
                        <div class="bg-title">04</div>
                        <h2 class="title rts-text-anime-style-1">Student Testimonials
                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary btn-white">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/assets/images/testimonials/avatar/01.webp" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “The course content was and easy to follow instructors were
                                    available answer questions”
                                        </p>
                                        
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/assets/images/testimonials/avatar/02.webp" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “The course content was and easy to follow instructors were
                                    available answer questions”
                                        </p>
                                        
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/assets/images/testimonials/avatar/03.webp" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “The course content was and easy to follow instructors were
                                    available answer questions”
                                        </p>
                                        
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/assets/images/testimonials/avatar/01.webp" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">David Smith</h6>
                                            </a>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “The course content was and easy to follow instructors were
                                    available answer questions”
                                        </p>
                                       
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/assets/images/testimonials/avatar/02.webp" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Mark Jone</h6>
                                            </a>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “The course content was and easy to follow instructors were
                                    available answer questions”
                                        </p>
                                        
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="frontend/assets/images/testimonials/avatar/03.webp" alt="testimonials_area">
                                        </a>
                                        <div class="discription">
                                            <a href="#">
                                                <h6 class="title">Lord Korn</h6>
                                            </a>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <p class="disc">
                                            “The course content was and easy to follow instructors were
                                    available answer questions”
                                        </p>
                                        
                                    </div>
                                </div>
                                <!-- single client reviews End -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client review area end -->

    

    <div class="service-ribbon-wrapper">
        <div class="service-ribbon-track">
            <div class="service-ribbon-content">
                <!-- Content Repeated Twice for Seamless Scroll -->
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture1.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture2.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture3.jpg"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture4.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture5.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture6.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture7.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture8.jpg"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture9.jpg"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture10.png"></div>

                <!-- Repeat for infinite loop effect -->
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture1.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture2.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture3.jpg"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture4.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture5.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture6.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture7.png"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture8.jpg"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture9.jpg"></div>
                <div class="icon-ribbon-item"><img src="frontend/assets/images/home/Picture10.png"></div>
            </div>
        </div>
    </div>


     <div class="rts-client-area ptb--100 brand-bg-three bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-three-wrapper">
                        <div class="single">
                            <img src="frontend/assets/images/uni/uni1.webp" alt="Business_client">
                        </div>
                        <div class="single">
                            <img src="frontend/assets/images/uni/uni2.png" alt="Business_client">
                        </div>
                        <div class="single">
                              <img src="frontend/assets/images/uni/uni3.png" alt="Business_client">
                        </div>
                        <div class="single">
                              <img src="frontend/assets/images/uni/uni4.png" alt="Business_client">
                        </div>
                        <div class="single">
                             <img src="frontend/assets/images/uni/uni5.png" alt="Business_client">
                        </div>
                        <div class="single">
                              <img src="frontend/assets/images/malaysia/Picture9.png" alt="Business_client">
                        </div>
                          <div class="single">
                              <img src="frontend/assets/images/uni/uni7.png" alt="Business_client">
                        </div>
                          <div class="single">
                              <img src="frontend/assets/images/malaysia/Picture10.png" alt="Business_client">
                        </div>
                          <div class="single">
                              <img src="frontend/assets/images/uni/uni9.png" alt="Business_client">
                        </div>
                          <div class="single">
                              <img src="frontend/assets/images/malaysia/Picture8.png" alt="Business_client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
     
    <!-- rts galllery area start -->
    <div class="rts-gallery-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-area-main-wrapper-4">
                        <div class="row g-5">
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="frontend/assets/images/gallery/Picture1.png" class="thumbnail gallery-image">
                                        <img src="frontend/assets/images/gallery/Picture1.png" alt="gallery">
                                    </a>
                                   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="frontend/assets/images/gallery/Picture2.png" class="thumbnail gallery-image">
                                        <img src="frontend/assets/images/gallery/Picture2.png" alt="gallery">
                                    </a>
                                  
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="frontend/assets/images/gallery/Picture3.png" class="thumbnail gallery-image">
                                        <img src="frontend/assets/images/gallery/Picture3.png" alt="gallery">
                                    </a>
                                  
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="frontend/assets/images/gallery/Picture4.png" class="thumbnail gallery-image">
                                        <img src="frontend/assets/images/gallery/Picture4.png" alt="gallery">
                                    </a>
                          
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="frontend/assets/images/gallery/Picture5.png" class="thumbnail gallery-image">
                                        <img src="frontend/assets/images/gallery/Picture5.png" alt="gallery">
                                    </a>
                                  
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-gallery">
                                    <a href="frontend/assets/images/gallery/Picture6.png" class="thumbnail gallery-image">
                                        <img src="frontend/assets/images/gallery/Picture6.png" alt="gallery">
                                    </a>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts galllery area end -->

     
    <!-- rts cta area start -->
    <div class="rts-cta-area-one rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-area-wrapper-one bg_image">
                        <div class="left-areas">
                            <span class="pre" style="font-weight:bold; font-size:25px">Is your Progress on Hold?</span>
                            <p style="font-weight:bold; font-size:20px">Don’t let family commitments and work barriers hold you back—your professional 
                                journey deserves to keep moving forward, and at IWGC, we’re here to support you every step of the way</p>
                        </div>
                        <div class="right-area mt-2">
                                <button class="rts-btn btn-primary">Get Started Now </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->

    
@endsection
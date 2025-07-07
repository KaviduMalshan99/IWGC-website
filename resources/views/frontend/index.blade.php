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
                                        <a href="#" class="rts-btn btn-primary btn-white">Apply for Scholarships </a>
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
                                        <a href="#" class="rts-btn btn-primary btn-white">Apply for Scholarships </a>
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
                                        <a href="#" class="rts-btn btn-primary btn-white">Apply for Scholarships </a>
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

                       
                        <a href="#" class="rts-btn btn-primary">Explore Our Campus </a>
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
<div class="working-process-one bg-main" style="padding:60px 0">
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
                    </ul>
                    <h4 style="color:white; margin-top:40px">Placements (Coming Soon)</h4>
                    <ul>
                        <li>Career Launchpad</li>
                        <li>Industry Integration</li>
                        <li>Post-Graduation Support</li>
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





    <!-- rts latest service area start -->
    <div class="rts-latest-service-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Our Latest Services</span>
                        <h2 class="title rts-text-anime-style-1">Service We Provide
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Business Solution</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    comprehensive set of strategies, tools, technologies, and processes challenges,
                                    optimize operations, and drive business growth.
                                </p>
                                <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/02.svg" alt="service">
                                </div>
                                <h5 class="title">Creative Ideas</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    comprehensive set of strategies, tools, technologies, and processes challenges,
                                    optimize operations, and drive business growth.
                                </p>
                                <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/03.svg" alt="service">
                                </div>
                                <h5 class="title">Market Research</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    comprehensive set of strategies, tools, technologies, and processes challenges,
                                    optimize operations, and drive business growth.
                                </p>
                                <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="assets/images/service/01.svg" alt="service">
                                </div>
                                <h5 class="title">Technology Solution</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    comprehensive set of strategies, tools, technologies, and processes challenges,
                                    optimize operations, and drive business growth.
                                </p>
                                <a href="#" class="arrow">
                                    <i class="fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- rts latest service area end -->

    <!-- rts just a consultancy area  -->
    <div class="just-a-consultancy-area rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="consultancy-thumbnail-area">
                        <div class="large-image">
                            <img src="assets/images/about/02.webp" alt="thumbnail">
                        </div>
                        <div class="small-iamge images-r">
                            <img src="assets/images/about/03.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_sm--15 mt_md--100 mt_sm--100">
                    <div class="consultancy-style-one">
                        <div class="title-style-one left mb--30">
                            <span class="pre">Business Consultancy</span>
                            <h2 class="title rts-text-anime-style-1">We know how to manage <br>
                                business globally
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="icon">
                                <img src="assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Best Business Consulting</h4>
                                <p class="disc">
                                    Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris gravida
                                    rutrum
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <div class="icon">
                                <img src="assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">24/7 Customer Support</h4>
                                <p class="disc">
                                    Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris gravida
                                    rutrum
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="#" class="rts-btn btn-primary">Contact Us</a>
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
            </div>
        </div>
    </div>
    <!-- rts just a consultancy area  end -->

   

    

    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Our Experts</span>
                        <h2 class="title rts-text-anime-style-1">Our Team Mates
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-5 g-sm-30 mt_sm--0">
                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--50" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                    <div class="single-team-area-one-start">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/01.webp" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="text-top">
                                <a href="team-details.html">
                                    <h5 class="title">Kevin Martin</h5>
                                </a>
                                <span>Consultant</span>
                            </div>
                            <div class="social-one-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--120" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                    <div class="single-team-area-one-start">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/02.webp" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="text-top">
                                <a href="team-details.html">
                                    <h5 class="title">Martin Chopra</h5>
                                </a>
                                <span>Consultant</span>
                            </div>
                            <div class="social-one-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt_sm--120 mt_md--80" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                    <div class="single-team-area-one-start">
                        <a href="team-details.html" class="thumbnail">
                            <img src="assets/images/team/03.webp" alt="team">
                        </a>
                        <div class="inner-content">
                            <div class="text-top">
                                <a href="team-details.html">
                                    <h5 class="title">John Dion</h5>
                                </a>
                                <span>Consultant</span>
                            </div>
                            <div class="social-one-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts team area ends -->

    <!-- business boost area start -->
    <div class="boost-your-business-today mt--70">
        <div class="container-2">
            <div class="col-lg-12">
                <div class="business-boost-wrapper-main rts-section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="business-marklting-area-thumb">
                                    <img src="assets/images/business/01.webp" alt="business_area">
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="boosting-business-right-area">
                                    <div class="title-style-one left">
                                        <span class="pre">Boost Your Business Today</span>
                                        <h2 class="title rts-text-anime-style-1">Most Reliable Efficient <br>
                                            Consulting Agency
                                        </h2>
                                    </div>
                                    <p class="disc">
                                        Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit
                                        feugiat fusce conubia ridiculus tristique solving parturient natoque vulputate
                                        risu hasellus quam tincidunt posuere aliquam accumsan
                                    </p>
                                    <div class="feature-one-wrapper mt--40 pl_sm--0">
                                        <div class="single-feature-one active">
                                            <i class="fal fa-check"></i>
                                            <p>Fast Growing Sells</p>
                                        </div>
                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>24/7 Quality Services</p>
                                        </div>
                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Expert Members</p>
                                        </div>
                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Best Quality Services</p>
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
    <!-- business boost area end -->

    <!-- rts pricing area start -->
    <div class="rts-pricing-area-one rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-three-title-area">
                        <div class="title-style-one left">
                            <span class="pre">Price Table</span>
                            <h2 class="title rts-text-anime-style-1">Pricing & Plans
                            </h2>
                        </div>
                        <div class="pricing-tab-button-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Monthly PLan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Yearly
                                        Plan</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--100">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$160</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Basic Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$180</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Standard Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$260</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Premium Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$1800</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Basic Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2000</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Standard Plan</span>
                                            <h4 class="title">
                                                Standard Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2300</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Premium Plan</span>
                                            <h4 class="title">
                                                Premium Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->


     <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Blog & News</span>
                        <h2 class="title rts-text-anime-style-1">Recent blog post
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
                                        <p>Business Solution / <span>by David Dolean</span></p>
                                        <a href="blog-details.html">
                                            <h4 class="title">Building a Brand That from Market Leaders</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="blog-details.html" class="thumbnail">
                                                <img src="assets/images/blog/01.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Business Solution / <span>by David Dolean</span></p>
                                        <a href="blog-details.html">
                                            <h4 class="title">Transforming Your Best Of Approach to Business</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="blog-details.html" class="thumbnail">
                                                <img src="assets/images/blog/02.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Business Solution / <span>by David Dolean</span></p>
                                        <a href="blog-details.html">
                                            <h4 class="title">The quick settle tips of the new ages exist</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="blog-details.html" class="thumbnail">
                                                <img src="assets/images/blog/03.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Business Solution / <span>by David Dolean</span></p>
                                        <a href="blog-details.html">
                                            <h4 class="title">Building a Brand That from Market Leaders</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="blog-details.html" class="thumbnail">
                                                <img src="assets/images/blog/01.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Business Solution / <span>by David Dolean</span></p>
                                        <a href="blog-details.html">
                                            <h4 class="title">Transforming Your Best Of Approach to Business</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="blog-details.html" class="thumbnail">
                                                <img src="assets/images/blog/02.webp" alt="blog-area">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-blog-area-one">
                                        <p>Business Solution / <span>by David Dolean</span></p>
                                        <a href="blog-details.html">
                                            <h4 class="title">The quick settle tips of the new ages exist</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="blog-details.html" class="thumbnail">
                                                <img src="assets/images/blog/03.webp" alt="blog-area">
                                            </a>
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

     
    <!-- rts cta area start -->
    <div class="rts-cta-area-one rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-main-area-wrapper-one bg_image">
                        <div class="left-areas">
                            <span class="pre">Latest Business Ideas</span>
                            <h3 class="title">Sign Up Newsletter</h3>
                        </div>
                        <div class="right-area">
                            <div class="inpur-area-main">
                                <input type="text" placeholder="Enter Email Address">
                                <button class="rts-btn btn-primary">Subscribe Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area end -->

    
@endsection
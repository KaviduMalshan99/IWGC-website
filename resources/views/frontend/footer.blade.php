
<style>
@media (max-width: 768px) {
    .rts-cta-area-one {
        margin-bottom: -20px !important;
    }

    .rts-cta-area-one .left-areas .pre {
        font-size: 16px !important;
    }

    .rts-cta-area-one .left-areas p {
        font-size: 13px !important;
        line-height: 1.5;
    }

    .rts-cta-area-one .right-area .rts-btn {
        font-size: 14px !important;
        padding: 0px 5px !important;
    }

    .rts-cta-area-one .right-area .rts-btn a {
        font-size: 14px !important;
    }
}
@media (max-width: 768px) {

    .wized-title {
        font-size: 15px !important;
    }

    .wized-2-body ul li a {
        font-size: 14px !important;
    }

    .contact-info-1 .disc span {
        font-size: 14px !important;
    }

    .contact-info-1 .disc a {
        font-size: 13px !important;
    }

    .contact-info-1 {
        display: flex;
        flex-direction: column; /* stack icon above text */
        align-items: center;    /* center icon and text */
        text-align: center;
        gap: 5px !important;
        margin-bottom: 10px !important;
    }

    /* move icons on top and increase size */
    .contact-info-1 .icon {
        display: block !important;
        width: 40px !important;
        height: 40px !important;
        font-size: 20px !important;
        margin-bottom: 5px;
    }

    /* two-column layout for Call Us and Work With Us */
    .wized-2-body {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .wized-2-body .contact-info-1 {
        flex: 1 1 48%; /* two columns */
        min-width: 140px;
    }
}


@media (max-width: 768px) {
    .widget-head a img {
        width: 230px !important; 
    }
}

@media (max-width: 768px) {
    .cta-main-area-wrapper-one {
        flex-direction: column !important;
        align-items: center !important;
        text-align: center;
    }
    .right-area {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .left-areas {
        margin-bottom: 10px;
    }

    .rts-footer-area{
        padding-left: 50px !important;
    }

    .rts-copy-right-1 .right ul li ,
    .disc {
        font-size: 13px !important;

    }
}
</style>

<div class="rts-cta-area-one" style="position: relative; z-index: 2; margin-bottom: -80px; margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cta-main-area-wrapper-one" style="background-color: #1b2954 !important;" >
                    <div class="left-areas">
                        <span class="pre" style="font-weight:bold; font-size:25px">Is your Progress on Hold?</span>
                        <p style="font-weight:500; font-size:18px; margin-top: 10px;">
                            Don’t let family commitments and work barriers hold you back—your professional journey deserves to keep moving forward, and at IWGC, we’re here to support you every step of the way.
                        </p>
                    </div>
                    <div class="right-area mt-2">
                        <button class="rts-btn btn-primary" style="padding: 12px 28px; font-size: 16px; border-radius: 8px;"><a href="{{ route('contact') }}">Get Started Now</a> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-footer-area pt--140 pb--100 pt_sm--50 pb_sm--40  footer-two "style="background-image: url('{{ asset('frontend/assets/images/footer/new.jpg') }}');background-repeat: no-repeat;
  background-size: cover; z-index: 1;">
        <div class="container" >
            <div class="row" >
                <!-- single wized -->
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 " >
                    <div class="footer-two-single-wized left">
                        <div class="widget-head">
                                    <a href="index.php">
                                        <img src="{{ asset('logo-golden.png') }}" alt="IWGC Logo" style="width:300px">
                                    </a>
                                </div>
                    
                            <div class="contact-info-1" >
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="disc" >
                                    <span style="color: white !important">Our Location</span>
                                    <a href="#" style="color: white !important">No. 85 -1/3, Galle Road, Dehiwala, Sri Lanka</a>
                                </div>
                            </div>
                      
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-6 mt_sm--50">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title" style="color: white !important">Handy Links</h5>
                        </div>
                        <div class="wized-2-body">
                            <ul >
                                <li><a href="{{ route('careers') }}" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Careers</a></li>
                                <li><a href="{{ route('blog') }}" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Blogs</a></li>
                                <li><a href="{{ route('events') }}" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Events</a></li>
                                <li><a href="{{ route('contact') }}" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6 col-6 mt_sm--50">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title" style="color: white !important">Learning</h5>
                        </div>
                        <div class="wized-2-body">
                            <ul>
                                 <li><a href="{{ route('scholarships') }}" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Scholarships</a></li>
                                <li><a href="{{ route('enroll') }}" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Enroll</a></li>
                                <li><a href="service-details.html" style="color: white !important"><i class="fal fa-chevron-double-right"></i>Pay Online</a></li>
                                <li><a href="http://lms.iwgc.lk" target="_blank" style="color: white !important"><i class="fal fa-chevron-double-right"></i>LMS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                    <div class="footer-two-single-wized">
                        <div class="wized-title-area">
                            <h5 class="wized-title" style="color: white !important">Contact Us</h5>
                        </div>
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="disc">
                                    <span style="color: white !important">Call Us 24/7</span>
                                    <a href="#" style="color: white !important">+(94) 766 888 184</a>
                                    <a href="#" style="color: white !important">+(94) 114 686 767</a>
                                </div>
                            </div>
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="disc">
                                    <span style="color: white !important">Work with us</span>
                                    <a href="#" style="color: white !important">info@iwgc.lk</a>
                                     <a href="#" style="color: white !important">admissions@iwgc.lk</a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- single wized -->

                
                
            </div>
        </div>
    </div>
    <div class="rts-copy-right-1 ptb--10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc">
                             IWGC - Copyright ©
                            <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script> Centival . All rights reserved.
                        </p>
                        <div class="right">
                            <ul>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('Cookies-Policy') }}">Cookies Policy</a></li>
                                <li><a href="{{ route('Terms-and-Conditions') }}">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


      <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="{{ asset('logo.png') }}" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+(94) 766 888 184</a>  <br>
                            <a href="#" style="margin-left:30px">+(94) 114 686 767</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@iwgc.lk</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">No. 85 -1/3, Galle Road, Dehiwala, Sri Lanka</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="https://www.facebook.com/impwis" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/imperialwisdom" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/imperial-wisdom/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://wa.me/94766888184" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="{{ route('index') }}" class="main" aria-expanded="false">Home</a>
                    </li>
                    <li >
                        <a href="{{ route('about') }}" class="main" aria-expanded="false">About</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Programs</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a class="mobile-menu-link" href="{{ route('avid') }}">Avid College – Maldives</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('qualifi') }}">  Ofqual – UK Regulated</a></li>
                            <li><a class="mobile-menu-link" href="project-details.html">CPD – UK</a></li>
                        </ul>
                    </li>
                     <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Study Abroad</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a class="mobile-menu-link" href="{{ route('study_canada') }}">Canada</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('study_malaysia') }}">  Malaysia</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('study_singapore') }}">Singapore</a></li>
                            <li><a class="mobile-menu-link" href="{{ route('study_uk') }}">United Kingdom</a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="{{ route('blog') }}" class="main" aria-expanded="false">Blogs</a>
                    </li>
                    <li >
                        <a href="{{ route('contact') }}" class="main" aria-expanded="false">Contact Us</a>
                    </li>
                     <li >
                        <a href="{{ route('enroll') }}" class="main" aria-expanded="false">Enroll</a>
                    </li>
                     <li >
                        <a href="" class="main" aria-expanded="false">Pay Online</a>
                    </li>
                     <li >
                        <a href="http://lms.iwgc.lk" target="_blank" class="main" aria-expanded="false">LMS</a>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/impwis" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/imperial-wisdom/" target="_blank">
                            <i class="fab fa-linkedin-in"></i></a>
                    </li>
                    
                    <li>
                        <a href="https://www.instagram.com/imperialwisdom" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- inner menu area desktop End -->


    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home" class="">
    </div>
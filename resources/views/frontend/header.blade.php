<header class="header-one header--sticky">
        <div class="header-top-area-wrapper"  style="background-color: #1b2954">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one-wrapper">
                            <div class="left">
                                <div class="mail">
                                    <a href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i>
                                        support@invena.com</a>
                                </div>
                                <div class="working-time">
                                    <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                                </div>
                            </div>
                            <div class="right">
                                <ul class="top-nav">
                                    <li><a href="{{ route('enroll') }}">Enroll</a></li>
                                    <li><a href="faq.html">LMS</a></li>
                                    <li><a href="contact.html">Pay Online</a></li>
                                </ul>
                                <ul class="social-wrapper-one">
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-main-one-wrapper">
                            <div class="thumbnail">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('logo.png') }}" alt="IWGC-logo" style="width:250px;">
                                </a>
                            </div>
                            <div class="main-header">
                                <div class="nav-area">
                                    <ul class="">
                                        <li class="main-nav  mega-menu project-a-after">
                                            <a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="main-nav  mega-menu project-a-after">
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        
                                        <li class="main-nav has-dropdown mega-menu">
                                            <a href="#">Programs</a>
                                            <div class="rts-mega-menu">
                                                <div class="wrapper">
                                                    <div class="container">
                                                        <div class="row g-0">
                                                          <div class="col-lg-4">
                                                                <ul class="mega-menu-item with-list parent-nav">
                                                                    <li class="hega-menu-head-wrapper">
                                                                        <p class="hega-menu-head"><i class="fa-regular fa-folder-open"></i>University Programs</p>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('avid') }}"><i class="fa-sharp fa-regular fa-chevron-right"></i>Avid College – Maldives</a>
                                                                        <a href="{{ route('business') }}" ><i class="fa-sharp fa-regular fa-chevron-right" style="padding-left: 20px; margin-top: 5px;"></i>Faculty of Business Management</a>
                                                                        <a href="{{ route('education') }}" ><i class="fa-sharp fa-regular fa-chevron-right" style="padding-left: 20px; margin-top: 5px;"></i>Faculty of Education</a>
                                                                        <a href="{{ route('humanities') }}" ><i class="fa-sharp fa-regular fa-chevron-right" style="padding-left: 20px; margin-top: 5px;"></i>Faculty of Humanities</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item with-list parent-nav">
                                                                    <li class="hega-menu-head-wrapper">
                                                                        <p class="hega-menu-head"><i class="fa-regular fa-folder-open"></i>
                                                                            Ofqual – UK Regulated
                                                                        </p>
                                                                    </li>
                                                                    <li><a href="{{ route('qualifi') }}"><i
                                                class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                QUALIFI   </a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item with-list parent-nav">
                                                                    <li class="hega-menu-head-wrapper">
                                                                        <p class="hega-menu-head"><i class="fa-regular fa-folder-open"></i>
                                                                            Other</p>
                                                                    </li>
                                                                    <li><a href="project-details.html"><i
                                                class="fa-sharp fa-regular fa-chevron-right"></i>CPD – UK</a>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="main-nav has-dropdown project-a-after">
                                            <a href="#">Study Abroad</a>
                                            <ul class="submenu parent-nav">
                                                <li><a href="{{ route('study_canada') }}">Canada</a></li>
                                                <li><a href="{{ route('study_malaysia') }}">Malaysia</a></li>
                                                <li><a href="{{ route('study_singapore') }}">Singapore</a></li>
                                                <li><a href="{{ route('study_uk') }}">United Kingdom</a></li>
                                            </ul>
                                        </li>
                                        <li class="main-nav  mega-menu project-a-after">
                                            <a href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="main-nav  mega-menu project-a-after">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="loader-wrapper">
                                    <div class="loader">
                                    </div>
                                    <div class="loader-section section-left"></div>
                                    <div class="loader-section section-right"></div>
                                </div>
                                <div class="button-area">
                                    <button class="search" id="search"><i class="far fa-search"></i></button>
                                    <a href="contact.html" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">View 
                                        Programs</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


     <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/01.svg" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                    All seds this mistakens idea denouncing pleasures.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Demos</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="index.html">Demo One</a></li>
                            <li><a href="index-two.html">Demo Two</a></li>
                            <li><a href="index-three.html">Demo Three</a></li>
                            <li><a href="index-four.html">Demo Four</a></li>
                            <li><a href="index-five.html">Demo Five</a></li>
                            <li><a href="index-six.html">Demo Six</a></li>
                            <li><a href="index-seven.html">Demo Seven</a></li>
                            <li><a href="index-eight.html">Demo Eight</a></li>
                            <li><a href="index-nine.html">Demo Nine</a></li>
                            <li><a href="index-ten.html">Demo Ten</a></li>
                            <li><a href="index-eleven.html">Demo Eleven</a></li>
                            <li><a href="index-twelve.html">Business Video</a></li>
                            <li><a href="onepage.html">Onepage One</a></li>
                            <li><a href="onepage-two.html">Onepage Two</a></li>
                            <li><a href="onepage-three.html">Onepage Three</a></li>
                            <li><a href="onepage-four.html">Onepage Four</a></li>
                            <li><a href="onepage-five.html">Onepage Five</a></li>
                            <li><a href="onepage-six.html">Onepage Six</a></li>
                            <li><a href="onepage-seven.html">Onepage Seven</a></li>
                            <li><a href="onepage-eight.html">Onepage Eight</a></li>
                            <li><a href="onepage-nine.html">Onepage Nine</a></li>
                            <li><a href="onepage-ten.html">Onepage Ten</a></li>
                            <li><a href="onepage-eleven.html">Onepage Eleven</a></li>
                            <li><a href="onepage-twelve.html">Onepage Eleven</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Pages</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="about.html">About
                                    Company</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service
                                    Details</a>
                            </li>
                            <li><a href="service-details-2.html">Service
                                    Details 2</a>
                            </li>
                            <li><a href="project.html">Project</a>
                            </li>
                            <li><a href="team.html">Team</a>
                            </li>
                            <li><a href="team-details.html">Team
                                    Details</a>
                            </li>
                            <li><a href="pricing.html">Pricing</a>
                            </li>
                            <li><a href="appoinment.html">Appoinment</a>
                            </li>
                            <li><a href="history.html">Our
                                    History</a>
                            </li>
                            <li><a href="blog-list.html">Blog
                                    List</a>
                            </li>
                            <li><a href="blog-grid.html">Blog
                                    List</a>
                            </li>
                            <li><a href="blog-details.html">Blog
                                    Details</a>
                            </li>
                            <li><a href="blog-details-2.html">Blog
                                    Details 02</a>
                            </li>
                            <li><a href="faq.html">Faq's</a>
                            <li><a href="career.html">Career</a>
                            </li>
                            <li><a href="our-mission.html">Our
                                    Mission</a>
                            </li>
                            <li><a href="partners.html">Partners</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Services</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a class="mobile-menu-link" href="service.html">Service</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                            <li><a class="mobile-menu-link" href="service-details-2.html">Service Details 2</a></li>
                            <li><a class="mobile-menu-link" href="service-details-3.html">Service Details 3</a></li>
                            <li><a class="mobile-menu-link" href="service-details-4.html">Service Details 4</a></li>
                            <li><a class="mobile-menu-link" href="service-details-5.html">Service Details 5</a></li>

                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Projects</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="project.html">Project</a>
                            </li>
                            <li><a href="project-slider.html">Project
                                    Slider</a></li>
                            <li><a href="project-slider-2.html">Project
                                    Slider 2</a></li>
                            <li><a href="project-card-slider.html">Project
                                    Card Slider</a></li>
                            <li><a href="project-bg-dark.html">Project
                                    Bg Dark</a></li>
                            <li><a href="project-grid.html">Project
                                    Grid</a></li>
                            <li><a href="project-grid-col-2.html">Project
                                    Grid Col 2</a></li>
                            <li><a href="project-slider-grid.html">Grid Slider</a></li>
                            <li><a href="project-slider-overflow.html">Project Overflow</a>
                            </li>
                            <li><a href="project-grid-col-3.html">Project Grid Col 3</a>
                            </li>
                            <li><a href="project-bg-dark.html">Project
                                    Hide Content</a></li>


                            <li><a href="project-slider-2.html">Project
                                    Hide
                                    Content wide</a>
                            </li>
                            <li><a href="project-grid.html">Project
                                    Card Hover</a>
                            </li>
                            <li><a href="project-slider-2.html">Project
                                    Slider Image
                                    Zoom</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Shop Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="shop.html">Shop</a>
                            </li>
                            <li><a href="shop-single.html">Shop
                                    Details</a>
                            </li>
                            <li><a href="account.html">Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-2.html">Blog Details 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main" aria-expanded="false">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- inner menu area desktop End -->
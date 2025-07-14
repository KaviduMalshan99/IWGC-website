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
                                    <button id="menu-btn" class="menu-btn menu ml--20 ml_sm--5">
                                        <img class="menu-light" src="{{ asset('frontend/assets/images/icons/01.svg') }}" alt="Menu-icon">
                                    </button>
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
            <a class="logo-1" href="{{ route('index') }}"><img class="logo" src="{{ asset('logo.png') }}" alt="IWGC"></a>
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
                            <a href="#">+(94) 766 888 184</a><br>

                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@iwgc.lk</a><br>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">No. 85 -1/3, Galle Road,<br> Dehiwala, Sri Lanka</a>
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
                    <li>
                        <a href="{{ route('index') }}" class="main" aria-expanded="false">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="main" aria-expanded="false">About Us</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Programs</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="{{ route('avid') }}">Avid College – Maldives</a></li>
                            <li><a href="{{ route('qualifi') }}"> Ofqual – UK Regulated</a></li>
                            <li><a href="index-three.html">CPD – UK</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main" aria-expanded="false">Study Abroad</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="{{ route('study_canada') }}">Canada</a></li>
                            <li><a href="{{ route('study_malaysia') }}"> Malaysia</a></li>
                            <li><a href="{{ route('study_singapore') }}">Singapore</a></li>
                            <li><a href="{{ route('study_uk') }}">United Kingdom</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="{{ route('blog') }}" class="main" aria-expanded="false">Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="main" aria-expanded="false">Contact Us</a>
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
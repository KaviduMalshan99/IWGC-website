
<style>
    /* Add this to your CSS file */
    .rts-mega-menu .mega-menu-item.with-list li a {
        font-size: 14px;
        /* Adjust this value to your preferred size */
        text-decoration: none !important;
    }

    .rts-mega-menu .mega-menu-item.with-list li a:hover {
        text-decoration: none !important;
    }

    .hega-menu-head-wrapper p.hega-menu-head {
        font-size: 16px;
        /* Slightly larger for category headings */
        font-weight: bold;
    }

.top-nav .highlight {
    display: inline-block;
    width:55px;
    background-color: #FF0003;
    color: #fff !important;
    text-align:center;
    font-weight: bold;
    border-radius: 6px;
    margin-top:5px;
    line-height: 1.2;
    height: auto;
    vertical-align: middle;
    text-decoration: none;
}


    .top-nav .nav-button {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background-color: #1b2954;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .top-nav .nav-button:hover {
        transform: translateY(-3px);
    }

    .top-nav .highlight {
        background-color: #E60022;
        color: #1b2954;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }

    .top-nav .highlight:hover {
        background-color: #E60022;
        color: #111;
        transform: translateY(-3px);
    }

    .top-nav {
        list-style: none;
        display: flex;
        gap: 10px;
        padding: 0;
    }

</style>

<header class="header-one header--sticky">
    <div class="header-top-area-wrapper" style="background-color: #1b2954 !important">
        <div class="container" style="background-color: #1b2954 !important">
            <div class="row" style="background-color: #1b2954 !important">
                <div class="col-lg-12" style="background-color: #1b2954 !important">
                    <div class="header-top-one-wrapper" style="background-color: #1b2954 !important">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:info@iwgc.lk"><i class="fal fa-envelope"></i>
                                    info@iwgc.lk</a>
                            </div>
                            <div class="">
                                <a style="color: white; font-size: 13px;">
                                    <i class="fal fa-phone" style="margin-right: 7px; transform: scaleX(-1);"></i> +94 76 688 8184 

                                </a>
                            </div>
                        </div>
                        <div class="right">
    

                            <ul class="top-nav">
                                <li><a href="{{ route('enroll') }}" class="nav-button">ENROLL</a></li>
                                <li><a href="" class="nav-button">PAY ONLINE</a></li>
                                <li><a href="http://lms.iwgc.lk" class="nav-button highlight">LMS</a></li>
                            </ul>


                            <ul class="social-wrapper-one">
                                <li><a href="https://www.facebook.com/impwis" target="_blank"><i class="fab fa-facebook-f" style="color: white; transition: all 0.3s ease;" onmouseover="this.style.color='#ed3532'; this.style.transform='translateY(-3px) scale(1.1)';" onmouseout="this.style.color='white'; this.style.transform='none';"></i></a></li>
                                <li><a href="https://www.instagram.com/imperialwisdom" target="_blank"><i class="fab fa-instagram" style="color: white; transition: all 0.3s ease;" onmouseover="this.style.color='#ed3532'; this.style.transform='translateY(-3px) scale(1.1)';" onmouseout="this.style.color='white'; this.style.transform='none';"></i></a></li>
                                <li><a class="mr--0" href="https://www.linkedin.com/company/imperial-wisdom/"  target="_blank"><i class="fab fa-linkedin-in" style="color: white; transition: all 0.3s ease;" onmouseover="this.style.color='#ed3532'; this.style.transform='translateY(-3px) scale(1.1)';" onmouseout="this.style.color='white'; this.style.transform='none';"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-main" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-one-wrapper">
                        <div class="thumbnail">
                           <a href="{{ route('index') }}">
                                <img src="{{ asset('logo.png') }}" alt="IWGC" style="max-height: 60px; height: auto; width: auto;">
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
                                            <div class="rts-mega-menu" style="background-color: #ffff;">
                                                <div class="wrapper">
                                                    <div class="container">
                                                        <div class="row g-0">
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item with-list parent-nav">
                                                                    <li class="hega-menu-head-wrapper">
                                                                        <p class="hega-menu-head" style="color: black;"> University Programs</p>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('avid') }}" 
                                                                        style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> Avid College – Maldives
                                                                        </a>
                                                                        <a href="{{ route('business') }}" 
                                                                        style="margin-left:40px;color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top: 5px;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> Faculty of Business Management
                                                                        </a>
                                                                        <a href="{{ route('education') }}" 
                                                                        style="margin-left:40px;color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top: 5px;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> Faculty of Education
                                                                        </a>
                                                                        <a href="{{ route('humanities') }}" 
                                                                        style="margin-left:40px;color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top: 5px;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> Faculty of Humanities
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item with-list parent-nav">
                                                                    <li class="hega-menu-head-wrapper">
                                                                        <p class="hega-menu-head" style="color: black;"> Ofqual – UK Regulated</p>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('qualifi') }}" 
                                                                        style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> QUALIFI
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <ul class="mega-menu-item with-list parent-nav">
                                                                    <li class="hega-menu-head-wrapper">
                                                                        <p class="hega-menu-head" style="color: black;"> Other</p>
                                                                    </li>
                                                                    <li>
                                                                        
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> CPD – UK
                                                                      
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
                                                <li><a style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';" href="{{ route('study_canada') }}"><i class="fa-sharp fa-regular fa-chevron-right"></i> Canada</a></li>
                                                <li><a style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';" href="{{ route('study_malaysia') }}"><i class="fa-sharp fa-regular fa-chevron-right"></i> Malaysia</a></li>
                                                <li><a style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';" href="{{ route('study_singapore') }}"><i class="fa-sharp fa-regular fa-chevron-right"></i> Singapore</a></li>
                                                <li><a style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';" href="{{ route('study_uk') }}"><i class="fa-sharp fa-regular fa-chevron-right"></i> United Kingdom</a></li>
                                            </ul>
                                        </li>

                                    <li class="main-nav project-a-after">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="main-nav project-a-after">
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
                                <a href="{{ route('avid') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn" style="background:#ed3532;">View 
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


  

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
                                <li><a href="{{ route('payonline.form') }}" target="_blank" class="nav-button">PAY ONLINE</a></li>
                                <li><a href="http://lms.iwgc.lk" target="_blank" class="nav-button highlight">LMS</a></li>
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
                                        
                                        <li id="programs-nav-item" class="main-nav has-dropdown mega-menu">
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
                                                                         <a href="{{ route('international_american_university') }}"
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                                <i class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                                International American University (USA)
                                                                            </a>

                                                                            <a href="{{ route('arden_university') }}"
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top:5px;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                                <i class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                                Arden University (United Kingdom)
                                                                            </a>

                                                                            <a href="{{ route('enae_business_school') }}"
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top:5px;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                                <i class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                                ENAE Business School (Spain)
                                                                            </a>

                                                                            <a href="{{ route('an_najah_national_university') }}"
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top:5px;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                                <i class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                                An-Najah National University (Palestine)
                                                                            </a>

                                                                            <a href="{{ route('supershine_university') }}"
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top:5px;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                                <i class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                                Supershine University (Zambia)
                                                                            </a>

                                                                            <a href="{{ route('avid') }}" 
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                            <i class="fa-sharp fa-regular fa-chevron-right"></i> Avid College (Maldives)
                                                                            </a>

                                                                            <a href="{{ route('liutebm_university') }}"
                                                                            style="color:black; display:block; padding:8px 15px; transition:all 0.3s; margin-top:5px;"
                                                                            onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                            onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                                <i class="fa-sharp fa-regular fa-chevron-right"></i>
                                                                                LIUTEBM University (Zambia)
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
                                                                        <p class="hega-menu-head" style="color: black;"> TVEC Approved Programs</p>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('certificate_HRM') }}" 
                                                                        style="color:black; display:block; padding:8px 15px; transition:all 0.3s;"
                                                                        onmouseover="this.style.transform='translateX(10px)'; this.style.backgroundColor='#f2f2f8';"
                                                                        onmouseout="this.style.transform='none'; this.style.backgroundColor='transparent';">
                                                                        <i class="fa-sharp fa-regular fa-chevron-right"></i> Certificate in Human Resource Management
                                                                        </a>
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

                          
                            <div class="button-area">
                                <a href="#" id="view-programs-btn" aria-expanded="false" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn" style="background:#ed3532;">View
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

{{-- "View Programs" button: mirrors the theme's :hover rules for the Programs mega menu via .is-open. --}}
<style>
    #programs-nav-item.is-open .rts-mega-menu {
        opacity: 1;
        visibility: visible;
        top: 100%;
        transform: scaleY(1);
    }
    #programs-nav-item.is-open > a {
        color: var(--color-red) !important;
    }
    #programs-nav-item.is-open > a::after {
        content: "\f077";
        color: var(--color-primary);
    }
</style>
<script>
    (function () {
        var item = document.getElementById('programs-nav-item');
        var button = document.getElementById('view-programs-btn');
        var navArea = item.closest('.nav-area');

        function setOpen(open) {
            item.classList.toggle('is-open', open);
            button.setAttribute('aria-expanded', open ? 'true' : 'false');
        }

        // Below 1200px the nav is hidden, so use the side menu. Its handlers
        // live in main.js and metismenu.js, so trigger them with real clicks.
        function openSideMenu() {
            document.getElementById('menu-btn').click();
            var programs = document.getElementById('mobile-programs-toggle');
            if (!programs.parentElement.classList.contains('mm-active')) {
                programs.click();
            }
        }

        document.addEventListener('click', function (event) {
            if (button.contains(event.target)) {
                event.preventDefault();
                if (getComputedStyle(navArea).display === 'none') {
                    openSideMenu();
                } else {
                    setOpen(!item.classList.contains('is-open'));
                }
            } else if (!item.contains(event.target)) {
                setOpen(false);
            }
        });

        // The nav link is href="#"; it only reveals the menu, so don't jump to the top.
        item.firstElementChild.addEventListener('click', function (event) {
            event.preventDefault();
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                setOpen(false);
            }
        });

        // Don't let the Study Abroad dropdown open on top of the mega menu.
        navArea.querySelectorAll('.main-nav.has-dropdown').forEach(function (other) {
            if (other !== item) {
                other.addEventListener('mouseenter', function () {
                    setOpen(false);
                });
            }
        });
    })();
</script>

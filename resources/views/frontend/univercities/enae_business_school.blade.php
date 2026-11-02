@extends('frontend.master')

@section('content')

<style>

    /* =========================================
       PROGRAM CARD STYLES
    ========================================= */

    .program-card {
        display: block;
        overflow: hidden;
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-decoration: none;
        height: 100%;
        position: relative;
        background-color: #f8f9fa;
    }

    .program-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.18);
    }

    .program-image {
        position: relative;
        height: 350px;
        overflow: hidden;
    }

    .program-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 15px;
        display: block;
        filter: grayscale(0.1) brightness(0.85);
        transition: transform 0.5s ease;
    }

    .program-card:hover .program-image img {
        transform: scale(1.06);
    }

    .program-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;

        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.78),
            rgba(0, 0, 0, 0.15)
        );

        z-index: 1;
        border-radius: 15px;
        pointer-events: none;

        transition: background 0.3s ease;
    }

    .program-card:hover .program-overlay {
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.88),
            rgba(0, 0, 0, 0.25)
        );
    }

    .program-content {
        position: absolute;
        width: 90%;
        left: 50%;
        bottom: 25px;
        transform: translateX(-50%);

        text-align: center;
        color: #fff;

        z-index: 2;

        transition:
            bottom 0.4s ease,
            transform 0.4s ease;
    }

    .program-card:hover .program-content {
        bottom: 50%;
        transform: translate(-50%, 50%);
    }

    .program-content h3 {
        font-weight: 800;
        margin-bottom: 18px;
        color: #fff;

        font-size: 21px;
        line-height: 1.35;
    }

    .program-content .btn {
        font-size: 15px;
        font-weight: 600;

        border-radius: 30px;
        padding: 9px 22px;

        display: inline-block;
    }

    .program-card:hover .btn-outline-light {
        background-color: #fff;
        color: #c1121f;
        border-color: #fff;
    }


    /* =========================================
       SECTIONS
    ========================================= */

    .working-process-one {
        background-color: #1b2954;
        color: #fff;
    }

    .partner-breadcrumb {
        height: 300px;
        position: relative;
    }


    /* =========================================
       INFO BOXES
    ========================================= */

    .info-box {
        background: #f4f4f4;

        padding: 30px;

        border-radius: 15px;

        color: #000;

        height: 100%;

        box-shadow:
            0 3px 10px rgba(0, 0, 0, 0.08);

        transition: all 0.3s ease;
    }

    .info-box:hover {
        transform: translateY(-5px);

        box-shadow:
            0 10px 25px rgba(0, 0, 0, 0.10);
    }

    .info-box h5 {
        margin-bottom: 15px;
    }

    .info-box p {
        margin-bottom: 0;
        line-height: 1.8;
    }


    /* =========================================
       RECOGNITIONS CAROUSEL
    ========================================= */

    .rts-client-area.recognition-section {
        margin-bottom: 40px;
    }

    .partner-ribbon-wrapper {
        width: 100%;

        overflow: hidden;

        display: flex;
        align-items: center;

        padding: 20px 0;

        position: relative;

        cursor: grab;
    }

    .partner-ribbon-wrapper:active {
        cursor: grabbing;
    }

    .partner-ribbon-track {
        display: flex;
    }

    .partner-ribbon-content {
        display: flex;

        gap: 80px;

        align-items: center;

        width: max-content;

        animation:
            partner-scroll 70s linear infinite;
    }

    .partner-ribbon-item {
        flex-shrink: 0;
    }

    .partner-ribbon-item img {
        height: 70px;

        width: auto;

        object-fit: contain;

        transition:
            transform 0.3s ease;
    }

    .partner-ribbon-item img:hover {
        transform: scale(1.1);
    }

    @keyframes partner-scroll {

        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }

    }


    /* =========================================
       PROGRAM SECTION
    ========================================= */

    .program-section-title {
        margin-bottom: 45px;
    }

    .program-section-title h2 {
        margin-bottom: 10px;
    }

    .program-section-title p {
        color: rgba(255, 255, 255, 0.75);

        max-width: 750px;

        margin: 0 auto;

        line-height: 1.7;
    }


    /* =========================================
       BROCHURE DOWNLOAD BANNER
    ========================================= */

    .brochure-banner {
        background: #f8f9fa;

        padding: 30px;

        margin-bottom: 50px;

        border-radius: 15px;

        text-align: center;

        box-shadow:
            0 5px 20px rgba(0, 0, 0, 0.07);
    }

    .brochure-banner h4 {
        color: #1b2954;

        font-weight: 700;

        margin-bottom: 10px;
    }

    .brochure-banner p {
        color: #666;

        margin-bottom: 20px;
    }

    .brochure-download-btn {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 10px;

        background: #ed3532;

        color: #fff;

        border: none;

        padding: 12px 25px;

        border-radius: 30px;

        font-weight: 700;

        text-decoration: none;

        animation: brochure-pulse 1.5s infinite;

        transition: all 0.3s ease;
    }

    .brochure-download-btn:hover {
        color: #fff;

        background: #c92a28;

        transform: translateY(-2px);
    }

    @keyframes brochure-pulse {

        0% {
            box-shadow:
                0 0 0 0 rgba(237, 53, 50, 0.55);
        }

        70% {
            box-shadow:
                0 0 0 12px rgba(237, 53, 50, 0);
        }

        100% {
            box-shadow:
                0 0 0 0 rgba(237, 53, 50, 0);
        }

    }


    /* =========================================
       SURVEY MODAL
    ========================================= */

    .brochure-modal .modal-content {
        border: none;

        border-radius: 18px;

        overflow: hidden;

        box-shadow:
            0 20px 60px rgba(0, 0, 0, 0.25);
    }

    .brochure-modal .modal-header {
        background: #1b2954;

        color: #fff;

        padding: 22px 25px;

        border: none;
    }

    .brochure-modal .modal-title {
        color: #fff;

        font-size: 21px;

        font-weight: 700;
    }

    .brochure-modal .btn-close {
        filter: brightness(0) invert(1);

        opacity: 1;
    }

    .brochure-modal .modal-body {
        padding: 30px;
    }

    .brochure-modal .survey-intro {
        color: #666;

        font-size: 14px;

        margin-bottom: 25px;

        line-height: 1.6;
    }

    .brochure-modal .form-label {
        font-weight: 600;

        color: #1b2954;

        margin-bottom: 8px;
    }

    .brochure-modal .form-control {
        height: 48px;

        border: 1px solid #ddd;

        border-radius: 8px;

        padding: 10px 15px;

        box-shadow: none;
    }

    .brochure-modal .form-control:focus {
        border-color: #1b2954;

        box-shadow:
            0 0 0 3px rgba(27, 41, 84, 0.08);
    }

    .program-selected {
        background: #f4f5f8 !important;

        color: #555;
    }

    .brochure-submit-btn {
        width: 100%;

        height: 48px;

        border: none;

        border-radius: 8px;

        background: #ed3532;

        color: #fff;

        font-weight: 700;

        font-size: 15px;

        transition: all 0.3s ease;
    }

    .brochure-submit-btn:hover {
        background: #c92a28;

        transform: translateY(-1px);
    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 991px) {

        .program-image {
            height: 320px;
        }

        .program-content {
            width: 90%;
        }

        .partner-ribbon-content {
            gap: 50px;
        }

    }


    @media (max-width: 768px) {

        .partner-breadcrumb {
            background-size: cover !important;

            background-position: center !important;

            height: 10vh !important;
        }

        h5.title {
            font-size: 20px !important;
        }

        p.disc {
            font-size: 14px !important;

            text-align: justify;

            text-justify: inter-word;

            word-break: break-word;

            hyphens: auto;
        }

        .partner-ribbon-content {
            gap: 40px;
        }

        .partner-ribbon-item img {
            height: 50px;
        }

        .program-image {
            height: 300px;
        }

        .program-content h3 {
            font-size: 19px;
        }

        .program-section-title {
            margin-bottom: 30px;
        }

        .brochure-modal .modal-body {
            padding: 22px;
        }

        .brochure-banner {
            padding: 25px 20px;
        }

    }


    @media (max-width: 576px) {

        .program-image {
            height: 280px;
        }

        .program-content h3 {
            font-size: 18px;
        }

    }

</style>


<!-- =========================================
     BANNER
========================================= -->

<div class="partner-breadcrumb"
     style="
        background-image: url('{{ asset('public/frontend/assets/new/Avid College.webp') }}');

        height: 300px;

        position: relative;

        background-size: cover;

        background-position: center;
     ">
</div>


<!-- =========================================
     TITLE + INFORMATION
========================================= -->

<div class="container mt-5">

    <div class="row text-center mb-5">

        <h2 class="title rts-text-anime-style-1">
            ENAE Business School – Spain
        </h2>

    </div>


    <div class="row g-4 mb-5">


        <!-- International Education Partner -->

        <div class="col-md-6">

            <div class="info-box">

                <h5 class="title">
                    Our International Education Partner
                </h5>

                <p class="disc"
                   style="text-align: justify;">

                    Imperial Wisdom Graduate Campus is proud to partner with
                    <strong>ENAE Business School</strong>, one of Spain's
                    leading institutions for postgraduate business education.

                    This collaboration provides our students with access to
                    world-class business and management programs that combine
                    academic excellence with real-world industry engagement,
                    preparing graduates to succeed in today's global business
                    environment.

                </p>

            </div>

        </div>


        <!-- About ENAE -->

        <div class="col-md-6">

            <div class="info-box">

                <h5 class="title">
                    About ENAE Business School
                </h5>

                <p class="disc"
                   style="text-align: justify;">

                    Located in Murcia, Spain, ENAE Business School has earned
                    an international reputation for delivering high-quality
                    business education through innovation, practical learning,
                    and strong corporate partnerships.

                    Supported by an extensive network of companies and
                    experienced industry professionals, ENAE offers
                    internationally oriented master's and executive education
                    designed to develop strategic leaders, entrepreneurs,
                    and business innovators.

                    Our partnership enables students to benefit from European
                    business education with a strong international perspective.

                </p>

            </div>

        </div>

    </div>

</div>


<!-- =========================================
     RECOGNITIONS & ACCREDITATIONS
     KEEP THIS CAROUSEL
========================================= -->

<div class="rts-client-area ptb--100 brand-bg-three bg_image mt--20 recognition-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 pb-5">

                <div class="title-style-two center">

                    <h4 style="
                        text-align:center;
                        margin-bottom:30px;
                        color:#ed3532;
                    ">

                        Recognitions & Accreditations

                    </h4>

                </div>

            </div>

        </div>

    </div>


    <div class="partner-ribbon-wrapper">

        <div class="partner-ribbon-track"
             id="partnerTrack">

            <div class="partner-ribbon-content">


                <!-- =================================
                     FIRST SET
                ================================== -->

                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/a.jpeg') }}"
                         alt="ENAE Recognition 1">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/b.jpeg') }}"
                         alt="ENAE Recognition 2">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/c.jpeg') }}"
                         alt="ENAE Recognition 3">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/d.jpeg') }}"
                         alt="ENAE Recognition 4">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/e.jpeg') }}"
                         alt="ENAE Recognition 5">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/f.jpeg') }}"
                         alt="ENAE Recognition 6">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/g.jpeg') }}"
                         alt="ENAE Recognition 7">

                </div>

                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/h.jpeg') }}"
                         alt="ENAE Recognition 8">

                </div>

                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/i.jpeg') }}"
                         alt="ENAE Recognition 9">

                </div>


                <!-- =================================
                     SECOND SET
                     SEAMLESS LOOP
                ================================== -->

                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/a.jpeg') }}"
                         alt="ENAE Recognition 1">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/b.jpeg') }}"
                         alt="ENAE Recognition 2">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/c.jpeg') }}"
                         alt="ENAE Recognition 3">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/d.jpeg') }}"
                         alt="ENAE Recognition 4">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/e.jpeg') }}"
                         alt="ENAE Recognition 5">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/f.jpeg') }}"
                         alt="ENAE Recognition 6">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/g.jpeg') }}"
                         alt="ENAE Recognition 7">

                </div>


                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/h.jpeg') }}"
                         alt="ENAE Recognition 8">

                </div>

                <div class="partner-ribbon-item">

                    <img src="{{ asset('public/frontend/assets/images/enae/i.jpeg') }}"
                         alt="ENAE Recognition 9">

                </div>


            </div>

        </div>

    </div>

</div>


<!-- =========================================
     OUR PROGRAMS
========================================= -->

<div class="rts-client-review-area
            rts-section-gapBottom
            rts-section-gapTop
            mb--100
            working-process-one">


    <div class="container mb-4 pb-3">

        <div class="row">

            <div class="col-lg-12">

                <div class="program-section-title text-center">

                    <h2 class="title
                               rts-text-anime-style-1
                               text-white">

                        Our Programs

                    </h2>

                    <p>

                        Explore internationally oriented business and
                        management programmes offered through ENAE Business
                        School, designed to develop strategic leaders,
                        entrepreneurs, and business professionals.

                    </p>

                </div>

            </div>

        </div>

    </div>


    <div class="container">


        <div class="row g-4 justify-content-center">


            <!-- =====================================
                 PROGRAM 1
                 GLOBAL EXECUTIVE MBA
            ====================================== -->

            <div class="col-lg-4 col-md-6">

                <a href="javascript:void(0);"
                   class="program-card"

                   data-program="
                   Global Executive MBA
                   "

                   data-program-url="
                   https://www.enae.com/master/global-executive-mba
                   "

                   onclick="openBrochureSurvey(
                       'Global Executive MBA',
                       'https://www.enae.com/master/global-executive-mba'
                   )">


                    <div class="program-image">


                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"

                             alt="Global Executive MBA"

                             class="img-fluid">


                        <div class="program-overlay"></div>


                        <div class="program-content">

                            <h3>
                                Global Executive MBA
                            </h3>


                            <span class="btn btn-outline-light">

                                Download Brochure

                                <i class="fas fa-download ms-2"></i>

                            </span>

                        </div>


                    </div>

                </a>

            </div>


            <!-- =====================================
                 PROGRAM 2
                 MASTER IN INTERNATIONAL TRADE
            ====================================== -->

            <div class="col-lg-4 col-md-6">

                <a href="javascript:void(0);"
                   class="program-card"

                   data-program="
                   Master in International Trade
                   "

                   data-program-url="
                   https://www.enae.com/master/master-international-trade
                   "

                   onclick="openBrochureSurvey(
                       'Master in International Trade',
                       'https://www.enae.com/master/master-international-trade'
                   )">


                    <div class="program-image">


                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"

                             alt="Master in International Trade"

                             class="img-fluid">


                        <div class="program-overlay"></div>


                        <div class="program-content">

                            <h3>
                                Master in International Trade
                            </h3>


                            <span class="btn btn-outline-light">

                                Download Brochure

                                <i class="fas fa-download ms-2"></i>

                            </span>

                        </div>


                    </div>

                </a>

            </div>


            <!-- =====================================
                 PROGRAM 3
                 GLOBAL SUPPLY CHAIN
            ====================================== -->

            <div class="col-lg-4 col-md-6">

                <a href="javascript:void(0);"
                   class="program-card"

                   data-program="
                   Master in Global Supply Chain Management
                   "

                   data-program-url="
                   https://www.enae.com/master/master-global-supply-chain-management
                   "

                   onclick="openBrochureSurvey(
                       'Master in Global Supply Chain Management',
                       'https://www.enae.com/master/master-global-supply-chain-management'
                   )">


                    <div class="program-image">


                        <img src="{{ asset('public/frontend/assets/new/Faculty of Education.webp') }}"

                             alt="Master in Global Supply Chain Management"

                             class="img-fluid">


                        <div class="program-overlay"></div>


                        <div class="program-content">

                            <h3>
                                Master in Global Supply Chain Management
                            </h3>


                            <span class="btn btn-outline-light">

                                Download Brochure

                                <i class="fas fa-download ms-2"></i>

                            </span>

                        </div>


                    </div>

                </a>

            </div>


            <!-- =====================================
                 PROGRAM 4
                 CORPORATE FINANCE + FINTECH
            ====================================== -->

            <div class="col-lg-4 col-md-6">

                <a href="javascript:void(0);"
                   class="program-card"

                   data-program="
                   Master in Corporate Finance Management and Fintech
                   "

                   data-program-url="
                   https://www.enae.com/master/master-corporate-finance-management-and-fintech
                   "

                   onclick="openBrochureSurvey(
                       'Master in Corporate Finance Management and Fintech',
                       'https://www.enae.com/master/master-corporate-finance-management-and-fintech'
                   )">


                    <div class="program-image">


                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"

                             alt="Master in Corporate Finance Management and Fintech"

                             class="img-fluid">


                        <div class="program-overlay"></div>


                        <div class="program-content">

                            <h3>
                                Master in Corporate Finance Management and Fintech
                            </h3>


                            <span class="btn btn-outline-light">

                                Download Brochure

                                <i class="fas fa-download ms-2"></i>

                            </span>

                        </div>


                    </div>

                </a>

            </div>


            <!-- =====================================
                 PROGRAM 5
                 INTERNATIONAL TRADE ECOMMERCE AI
            ====================================== -->

            <div class="col-lg-4 col-md-6">

                <a href="javascript:void(0);"
                   class="program-card"

                   data-program="
                   Master in International Trade, Ecommerce and AI Concentration
                   "

                   data-program-url="
                   https://www.enae.com/master/master-international-trade-ecommerce-and-ai-concentration
                   "

                   onclick="openBrochureSurvey(
                       'Master in International Trade, Ecommerce and AI Concentration',
                       'https://www.enae.com/master/master-international-trade-ecommerce-and-ai-concentration'
                   )">


                    <div class="program-image">


                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"

                             alt="Master in International Trade, Ecommerce and AI Concentration"

                             class="img-fluid">


                        <div class="program-overlay"></div>


                        <div class="program-content">

                            <h3>
                                Master in International Trade,
                                Ecommerce and AI Concentration
                            </h3>


                            <span class="btn btn-outline-light">

                                Download Brochure

                                <i class="fas fa-download ms-2"></i>

                            </span>

                        </div>


                    </div>

                </a>

            </div>


            <!-- =====================================
                 PROGRAM 6
                 INTERNATIONAL + DIGITAL MARKETING
            ====================================== -->

            <div class="col-lg-4 col-md-6">

                <a href="javascript:void(0);"
                   class="program-card"

                   data-program="
                   Master in International and Digital Marketing
                   "

                   data-program-url="
                   https://www.enae.com/master/master-international-and-digital-marketing
                   "

                   onclick="openBrochureSurvey(
                       'Master in International and Digital Marketing',
                       'https://www.enae.com/master/master-international-and-digital-marketing'
                   )">


                    <div class="program-image">


                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"

                             alt="Master in International and Digital Marketing"

                             class="img-fluid">


                        <div class="program-overlay"></div>


                        <div class="program-content">

                            <h3>
                                Master in International and Digital Marketing
                            </h3>


                            <span class="btn btn-outline-light">

                                Download Brochure

                                <i class="fas fa-download ms-2"></i>

                            </span>

                        </div>


                    </div>

                </a>

            </div>


        </div>


        <!-- =====================================
             COMMON BROCHURE
        ====================================== -->

        <div class="brochure-banner mt-5">

            <h4>
                ENAE Business School Programme Brochure
            </h4>

            <p>
                Interested in exploring all available ENAE Business School
                programmes? Submit your details to download the common
                programme brochure.
            </p>


            <a href="javascript:void(0);"
               class="brochure-download-btn"

               onclick="openBrochureSurvey(
                   'ENAE Business School – General Brochure',
                   '{{ asset('public/frontend/assets/brochures/enae-business-school.pdf') }}'
               )">

                <i class="fas fa-flag"></i>

                Download the Brochure

                <i class="fas fa-download"></i>

            </a>

        </div>


    </div>

</div>


<!-- =========================================
     BROCHURE SURVEY MODAL
========================================= -->

<div class="modal fade brochure-modal"
     id="brochureSurveyModal"
     tabindex="-1"
     aria-labelledby="brochureSurveyModalLabel"
     aria-hidden="true">


    <div class="modal-dialog modal-dialog-centered">


        <div class="modal-content">


            <!-- HEADER -->

            <div class="modal-header">

                <h5 class="modal-title"
                    id="brochureSurveyModalLabel">

                    Download Programme Brochure

                </h5>


                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>


            <!-- BODY -->

            <div class="modal-body">


                <p class="survey-intro">

                    Please provide your details below to download
                    the ENAE Business School brochure.

                </p>


                <form id="brochureSurveyForm">


                    <!-- NAME -->

                    <div class="mb-3">

                        <label for="surveyName"
                               class="form-label">

                            Name

                        </label>


                        <input type="text"

                               class="form-control"

                               id="surveyName"

                               name="name"

                               placeholder="Enter your name"

                               required>

                    </div>


                    <!-- PROGRAM -->

                    <div class="mb-3">

                        <label for="surveyProgram"
                               class="form-label">

                            Program of Interest

                        </label>


                        <input type="text"

                               class="form-control program-selected"

                               id="surveyProgram"

                               name="program"

                               readonly>

                    </div>


                    <!-- CONTACT NUMBER -->

                    <div class="mb-4">

                        <label for="surveyContact"
                               class="form-label">

                            Contact Number

                        </label>


                        <input type="tel"

                               class="form-control"

                               id="surveyContact"

                               name="contact"

                               placeholder="Enter your contact number"

                               required>

                    </div>


                    <!-- PROGRAM URL -->

                    <input type="hidden"

                           id="programUrl"

                           name="program_url">


                    <!-- BROCHURE URL -->

                    <input type="hidden"

                           id="brochureUrl"

                           name="brochure_url">


                    <!-- SUBMIT -->

                    <button type="submit"

                            class="brochure-submit-btn">

                        Download Brochure

                        <i class="fas fa-download ms-2"></i>

                    </button>


                </form>


            </div>

        </div>

    </div>

</div>


<!-- =========================================
     JAVASCRIPT
========================================= -->

<script>


    /* =========================================
       RECOGNITIONS CAROUSEL
    ========================================= */

    const ribbon =
        document.querySelector('.partner-ribbon-wrapper');

    const track =
        document.querySelector('.partner-ribbon-track');


    let isDragging = false;

    let startX;

    let scrollLeft;


    const content =
        document.querySelector('.partner-ribbon-content');


    function pauseAnimation() {

        if (content) {

            content.style.animationPlayState =
                'paused';

        }

    }


    function resumeAnimation() {

        if (content) {

            content.style.animationPlayState =
                'running';

        }

    }


    if (ribbon) {


        /* Desktop - Mouse */

        ribbon.addEventListener('mousedown', (e) => {

            isDragging = true;

            pauseAnimation();

            startX =
                e.pageX -
                ribbon.offsetLeft;

            scrollLeft =
                ribbon.scrollLeft;

        });


        ribbon.addEventListener('mouseleave', () => {

            isDragging = false;

            resumeAnimation();

        });


        ribbon.addEventListener('mouseup', () => {

            isDragging = false;

            resumeAnimation();

        });


        ribbon.addEventListener('mousemove', (e) => {

            if (!isDragging) return;

            e.preventDefault();

            const x =
                e.pageX -
                ribbon.offsetLeft;

            const walk =
                (x - startX) * 2;

            ribbon.scrollLeft =
                scrollLeft - walk;

        });


        /* Mobile - Touch */

        ribbon.addEventListener('touchstart', (e) => {

            isDragging = true;

            pauseAnimation();

            startX =
                e.touches[0].pageX -
                ribbon.offsetLeft;

            scrollLeft =
                ribbon.scrollLeft;

        });


        ribbon.addEventListener('touchend', () => {

            isDragging = false;

            resumeAnimation();

        });


        ribbon.addEventListener('touchmove', (e) => {

            if (!isDragging) return;

            const x =
                e.touches[0].pageX -
                ribbon.offsetLeft;

            const walk =
                (x - startX) * 2;

            ribbon.scrollLeft =
                scrollLeft - walk;

        });

    }



    /* =========================================
       OPEN SURVEY
    ========================================= */

    function openBrochureSurvey(
        programName,
        programUrl
    ) {


        /*
         * Program name
         */

        document.getElementById(
            'surveyProgram'
        ).value = programName;


        /*
         * Program's ENAE URL
         */

        document.getElementById(
            'programUrl'
        ).value = programUrl;


        /*
         * Common brochure
         */

        document.getElementById(
            'brochureUrl'
        ).value =
            "{{ asset('public/frontend/assets/brochures/enae-business-school.pdf') }}";


        /*
         * Open Bootstrap modal
         */

        const modalElement =
            document.getElementById(
                'brochureSurveyModal'
            );


        const modal =
            new bootstrap.Modal(
                modalElement
            );


        modal.show();

    }



    /* =========================================
       SURVEY SUBMIT
    ========================================= */

    document.getElementById(
        'brochureSurveyForm'
    ).addEventListener(
        'submit',
        function(e) {

            e.preventDefault();


            const name =
                document.getElementById(
                    'surveyName'
                ).value.trim();


            const contact =
                document.getElementById(
                    'surveyContact'
                ).value.trim();


            const program =
                document.getElementById(
                    'surveyProgram'
                ).value;


            const programUrl =
                document.getElementById(
                    'programUrl'
                ).value;


            const brochureUrl =
                document.getElementById(
                    'brochureUrl'
                ).value;


            /*
             * Validate
             */

            if (
                !name ||
                !contact ||
                !program ||
                !brochureUrl
            ) {

                alert(
                    'Please complete all required fields.'
                );

                return;

            }


            /*
             * Download common brochure
             */

            const downloadLink =
                document.createElement('a');


            downloadLink.href =
                brochureUrl;


            downloadLink.download =
                'ENAE-Business-School-Brochure.pdf';


            document.body.appendChild(
                downloadLink
            );


            downloadLink.click();


            document.body.removeChild(
                downloadLink
            );


            /*
             * Close modal
             */

            const modalElement =
                document.getElementById(
                    'brochureSurveyModal'
                );


            const modal =
                bootstrap.Modal.getInstance(
                    modalElement
                );


            if (modal) {

                modal.hide();

            }


            /*
             * Reset form
             */

            document.getElementById(
                'brochureSurveyForm'
            ).reset();


            /*
             * Later:
             *
             * name
             * contact
             * program
             * programUrl
             *
             * can be sent to Laravel
             * for lead collection.
             */

        }
    );

</script>


@endsection
@extends('frontend.master')

@section('content')

<style>

    /* =========================================
       GENERAL
    ========================================= */

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
       INFORMATION SECTION
    ========================================= */

    .partner-information-section {
        padding-bottom: 100px;
    }


    /* =========================================
       UNIVERSITY INTRO BANNER
    ========================================= */

    .university-intro {
        background: #1b2954;

        color: #fff;

        border-radius: 15px;

        padding: 45px 40px;

        margin-top: 20px;

        text-align: center;

        box-shadow:
            0 8px 25px rgba(0, 0, 0, 0.12);
    }

    .university-intro h3 {
        color: #fff;

        font-size: 26px;

        font-weight: 700;

        margin-bottom: 15px;
    }

    .university-intro p {
        max-width: 850px;

        margin: 0 auto;

        color: rgba(255, 255, 255, 0.88);

        line-height: 1.8;
    }


    /* =========================================
       MOBILE
    ========================================= */

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

        .partner-information-section {
            padding-bottom: 60px;
        }

        .university-intro {
            padding: 30px 20px;
        }

        .university-intro h3 {
            font-size: 21px;
        }

        .university-intro p {
            font-size: 14px;
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

<div class="container mt-5 partner-information-section">


    <!-- PAGE TITLE -->

    <div class="row text-center mb-5">

        <div class="col-lg-12">

            <h2 class="title rts-text-anime-style-1">

                An-Najah National University - Palestine

            </h2>

        </div>

    </div>


    <!-- INFORMATION BOXES -->

    <div class="row g-4">


        <!-- =====================================
             INTERNATIONAL EDUCATION PARTNER
        ====================================== -->

        <div class="col-md-6">

            <div class="info-box">

                <h5 class="title">

                    Our International Education Partner

                </h5>


                <p class="disc"
                   style="text-align: justify;">

                    Imperial Wisdom Graduate Campus is honoured to
                    collaborate with
                    <strong>An-Najah National University</strong>,
                    one of the most respected universities in Palestine.

                    This partnership reflects our commitment to fostering
                    academic excellence through international cooperation,
                    offering students access to globally recognised education,
                    research opportunities, and diverse academic experiences.

                </p>

            </div>

        </div>


        <!-- =====================================
             ABOUT UNIVERSITY
        ====================================== -->

        <div class="col-md-6">

            <div class="info-box">

                <h5 class="title">

                    About An-Najah National University

                </h5>


                <p class="disc"
                   style="text-align: justify;">

                    Established as one of Palestine's leading universities,
                    An-Najah National University is widely recognised for
                    its excellence in teaching, scientific research,
                    innovation, and community engagement.

                    Offering a comprehensive range of undergraduate and
                    postgraduate programmes across numerous disciplines,
                    the university has built a strong reputation for
                    producing graduates who contribute meaningfully to
                    society and the global workforce.

                    Our partnership provides students with opportunities
                    to engage in internationally connected education while
                    benefiting from the university's rich academic heritage
                    and research-driven environment.

                </p>

            </div>

        </div>


    </div>


    <!-- =====================================
         UNIVERSITY INTRO
         No Programs / Carousel yet because
         client has not provided those details.
    ====================================== -->

    <div class="university-intro">

        <h3>
            International Academic Collaboration
        </h3>

        <p>

            Through this collaboration, Imperial Wisdom Graduate Campus
            aims to create opportunities for students to connect with
            internationally recognised academic institutions and gain
            exposure to diverse educational and research environments.

        </p>

    </div>


</div>


@endsection
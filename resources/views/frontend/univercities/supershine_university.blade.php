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
       PROGRAM SECTION
    ========================================= */

    .supershine-programs-section {
        background-color: #1b2954;

        padding: 80px 0 100px;

        color: #fff;
    }

    .program-section-title {
        text-align: center;

        margin-bottom: 45px;
    }

    .program-section-title h2 {
        color: #fff;

        margin-bottom: 12px;
    }

    .program-section-title p {
        color: rgba(255, 255, 255, 0.75);

        max-width: 750px;

        margin: 0 auto;

        line-height: 1.7;
    }


    /* =========================================
       PROGRAM CARDS
    ========================================= */

    .supershine-program-card {
        display: block;

        position: relative;

        overflow: hidden;

        border-radius: 15px;

        height: 360px;

        text-decoration: none;

        background: #f8f9fa;

        transition:
            transform 0.4s ease,
            box-shadow 0.4s ease;
    }

    .supershine-program-card:hover {
        transform: translateY(-8px);

        box-shadow:
            0 18px 40px rgba(0, 0, 0, 0.25);
    }

    .supershine-program-card img {
        width: 100%;

        height: 100%;

        object-fit: cover;

        display: block;

        filter:
            brightness(0.72);

        transition:
            transform 0.5s ease;
    }

    .supershine-program-card:hover img {
        transform: scale(1.07);
    }

    .program-overlay {
        position: absolute;

        top: 0;
        right: 0;
        bottom: 0;
        left: 0;

        background:
            linear-gradient(
                to top,
                rgba(0, 0, 0, 0.82),
                rgba(0, 0, 0, 0.15)
            );

        z-index: 1;

        transition:
            background 0.3s ease;
    }

    .supershine-program-card:hover .program-overlay {
        background:
            linear-gradient(
                to top,
                rgba(0, 0, 0, 0.9),
                rgba(0, 0, 0, 0.3)
            );
    }

    .program-card-content {
        position: absolute;

        z-index: 2;

        left: 50%;

        bottom: 30px;

        width: 90%;

        transform: translateX(-50%);

        text-align: center;

        color: #fff;

        transition:
            bottom 0.4s ease,
            transform 0.4s ease;
    }

    .supershine-program-card:hover .program-card-content {
        bottom: 50%;

        transform:
            translate(-50%, 50%);
    }

    .program-card-content h3 {
        color: #fff;

        font-size: 25px;

        font-weight: 800;

        line-height: 1.3;

        margin-bottom: 18px;
    }

    .program-card-content .program-btn {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 9px 22px;

        border: 1px solid #fff;

        border-radius: 30px;

        color: #fff;

        font-size: 15px;

        font-weight: 600;

        transition: all 0.3s ease;
    }

    .supershine-program-card:hover
    .program-card-content .program-btn {

        background: #fff;

        color: #1b2954;
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

        .supershine-programs-section {
            padding: 55px 0 70px;
        }

        .program-section-title {
            margin-bottom: 30px;
        }

        .supershine-program-card {
            height: 300px;
        }

        .program-card-content h3 {
            font-size: 21px;
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


    <!-- PAGE TITLE -->

    <div class="row text-center mb-5">

        <div class="col-lg-12">

            <h2 class="title rts-text-anime-style-1">

                Supershine University – Zambia

            </h2>

        </div>

    </div>


    <!-- INFORMATION BOXES -->

    <div class="row g-4 mb-5">


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

                    At Imperial Wisdom Graduate Campus, we value
                    partnerships that inspire innovation and academic
                    excellence.

                    Our association with
                    <strong>Supershine University</strong>
                    broadens the educational opportunities available to
                    our students by providing access to internationally
                    focused programmes that encourage professional
                    development, research, and lifelong learning.

                </p>

            </div>

        </div>


        <!-- =====================================
             ABOUT SUPERSHINE UNIVERSITY
        ====================================== -->

        <div class="col-md-6">

            <div class="info-box">

                <h5 class="title">

                    About Supershine University

                </h5>


                <p class="disc"
                   style="text-align: justify;">

                    Supershine University is a globally oriented higher
                    education institution dedicated to delivering quality
                    academic programmes that prepare graduates for success
                    in an increasingly interconnected world.

                    With an emphasis on innovation, research, leadership,
                    and professional competency, the university provides
                    learners with a supportive academic environment and
                    internationally relevant qualifications.

                    Through this partnership, students gain access to
                    educational pathways that promote both personal and
                    professional growth.

                </p>

            </div>

        </div>


    </div>

</div>


<!-- =========================================
     OUR PROGRAMS
========================================= -->

<div class="supershine-programs-section">


    <div class="container">


        <!-- SECTION TITLE -->

        <div class="program-section-title">

            <h2 class="title rts-text-anime-style-1">

                Programs

            </h2>


            <p>

                Explore internationally focused academic programmes
                offered through Supershine University and discover
                opportunities for professional and academic development.

            </p>

        </div>


        <!-- =====================================
             PROGRAM CARDS
        ====================================== -->

        <div class="row g-4 justify-content-center">


            <!-- =================================
                 POSTGRADUATE PROGRAMS
            ================================== -->

            <div class="col-lg-5 col-md-6">

                <a href="https://supershineuniversity.net/masters-phd-programs/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="supershine-program-card">


                    <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"
                         alt="Supershine University Postgraduate Programs"
                         class="img-fluid">


                    <div class="program-overlay"></div>


                    <div class="program-card-content">

                        <h3>

                            Postgraduate Programs

                        </h3>


                        <span class="program-btn">

                            Explore Programs

                            <i class="fas fa-external-link-alt"></i>

                        </span>

                    </div>


                </a>

            </div>


            <!-- =================================
                 UNDERGRADUATE PROGRAMS
            ================================== -->

            <div class="col-lg-5 col-md-6">

                <a href="https://supershineuniversity.net/undergraduate-programs/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="supershine-program-card">


                    <img src="{{ asset('public/frontend/assets/new/Faculty of Education.webp') }}"
                         alt="Supershine University Undergraduate Programs"
                         class="img-fluid">


                    <div class="program-overlay"></div>


                    <div class="program-card-content">

                        <h3>

                            Undergraduate Programs

                        </h3>


                        <span class="program-btn">

                            Explore Programs

                            <i class="fas fa-external-link-alt"></i>

                        </span>

                    </div>


                </a>

            </div>


        </div>


    </div>

</div>


@endsection
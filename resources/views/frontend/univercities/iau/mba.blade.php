@extends('frontend.master')

@section('content')

<style>
    .styled-list {
        padding-left: 0;
        margin-top: 20px;
    }

    .styled-list li {
        list-style: none;
        position: relative;
        padding-left: 45px;
        margin-bottom: 15px;
        font-size: 17px;
        color: #333;
        line-height: 1.6;
    }

    .styled-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        background-color: #edb21e;
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: bold;
    }

    .partner-breadcrumb {
        height: 400px;
        position: relative;
    }

    .section-title {
        margin-bottom: 25px;
    }

    .section-title h3 {
        font-size: 28px;
        font-weight: 700;
        color: #1b2954;
    }

    .content-box {
        padding: 30px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 10px 30px rgba(8, 5, 100, 0.08);
        margin-bottom: 30px;
    }

    .content-box p {
        font-size: 17px;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        margin-bottom: 18px;
    }

    .info-card {
        padding: 10px;
    }

    .info-item {
        box-shadow: 0 20px 40px rgba(8, 5, 100, 0.01);
        background-color: #1b2954;
        border: 2px solid #1b2954;
        margin: 8px 0;
        padding: 10px 30px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .info-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(8, 5, 100, 0.2);
        filter: brightness(1.05);
    }

    .label {
        color: white;
        font-weight: bold;
    }

    .highlight {
        font-weight: bold;
        color: white;
    }

    .program-link-box {
        background-color: #1b2954;
        color: white;
        padding: 30px;
        margin-top: 20px;
        text-align: center;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .program-link-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(8, 5, 100, 0.2);
    }

    .program-link-box h4 {
        color: white;
        margin-bottom: 15px;
        font-size: 24px;
    }

    .program-link-box p {
        color: white;
        text-align: center;
        margin-bottom: 20px;
    }

    .program-link-box a {
        display: inline-block;
        background-color: #edb21e;
        color: white;
        padding: 10px 25px;
        border-radius: 3px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .program-link-box a:hover {
        background-color: #b78a18;
        color: white;
    }

    .dual-award-box {
        background-color: #f7f7f7;
        border-left: 5px solid #edb21e;
        padding: 35px;
        margin-top: 25px;
    }

    .dual-award-box h3 {
        color: #1b2954;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .dual-award-box p {
        font-size: 17px;
        line-height: 1.8;
        color: #333;
        text-align: justify;
    }

    .eligibility-box {
        background-color: #1b2954;
        padding: 35px;
        margin-top: 30px;
        border-radius: 5px;
    }

    .eligibility-box h3 {
        color: white;
        font-size: 26px;
        margin-bottom: 15px;
    }

    .eligibility-box p {
        color: white;
        font-size: 17px;
        line-height: 1.7;
    }

    .eligibility-box ul {
        padding-left: 0;
        margin-top: 20px;
    }

    .eligibility-box ul li {
        list-style: none;
        color: white;
        font-size: 16px;
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
    }

    .eligibility-box ul li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #edb21e;
        font-weight: bold;
    }

    .cta-box {
        text-align: center;
        margin-top: 25px;
    }

    .cta-box .cta-btn {
        display: inline-block;
        background-color: #edb21e;
        color: white;
        padding: 12px 30px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 3px;
        transition: all 0.3s ease;
    }

    .cta-box .cta-btn:hover {
        background-color: #b78a18;
        color: white;
        transform: translateY(-2px);
    }

    
    /* Career Opportunities Cards */

    .career-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-top: 25px;
    }

    .career-card {
        position: relative;
        background: #f7f8fb;
        border: 1px solid #e5e7ef;
        border-radius: 6px;
        padding: 22px 20px 22px 55px;
        min-height: 85px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .career-card::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 5px;
        height: 100%;
        background-color: #edb21e;
        transition: all 0.3s ease;
    }

    .career-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(8, 5, 100, 0.12);
        border-color: #edb21e;
    }

    .career-card:hover::before {
        width: 8px;
    }

    .career-icon {
        position: absolute;
        left: 18px;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background-color: #1b2954;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
    }

    .career-card h5 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
        color: #1b2954;
        line-height: 1.4;
    }


    /* Mobile */
    @media (max-width: 991px) {
        .career-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .career-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .career-card {
            min-height: 70px;
            padding: 18px 15px 18px 50px;
        }

        .career-card h5 {
            font-size: 14px;
        }

        .career-icon {
            left: 15px;
        }
    }


    /* Mobile Responsive Styling */
    @media (max-width: 768px) {

        .partner-breadcrumb {
            background-size: cover !important;
            background-position: center !important;
            height: 25vh !important;
        }

        .section-title h3 {
            font-size: 22px !important;
        }

        .content-box {
            padding: 20px;
        }

        .content-box p {
            font-size: 14px !important;
            line-height: 1.6 !important;
        }

        .styled-list li {
            font-size: 13px !important;
            line-height: 1.5 !important;
            padding-left: 38px;
        }

        .styled-list li::before {
            width: 25px !important;
            height: 25px !important;
            font-size: 12px !important;
        }

        .info-card {
            padding: 10px !important;
        }

        .info-card .info-item .label,
        .info-card .info-item .highlight {
            font-size: 13px !important;
        }

        .program-link-box,
        .dual-award-box,
        .eligibility-box {
            padding: 22px !important;
        }

        .program-link-box h4,
        .dual-award-box h3,
        .eligibility-box h3 {
            font-size: 20px !important;
        }

        .program-link-box p,
        .dual-award-box p,
        .eligibility-box p {
            font-size: 14px !important;
        }

        .eligibility-box ul li {
            font-size: 13px !important;
        }
    }
</style>


<!-- Banner Section -->
<div class="partner-breadcrumb"
     style="
        background-image: url('{{ asset('public/frontend/assets/new/Bachelor of Business Management 01.webp') }}');
        background-size: cover;
        background-position: center;
        height: 300px;
        position: relative;
     ">
</div>


<!-- Page Title -->
<div class="container mt-5">

    <div class="row text-center mb-5">
        <div class="col-lg-10 mx-auto">
            <h2 class="title rts-text-anime-style-1">
                Master of Business Administration (MBA)
            </h2>
        </div>
    </div>


    <!-- Programme Overview -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">

            <div class="section-title">
                <h3>Programme Overview</h3>
            </div>

            <div class="content-box">

                <p>
                    The <strong>Master of Business Administration (MBA)</strong>
                    offered through <strong>International American University (IAU), USA</strong>,
                    is designed for ambitious professionals, entrepreneurs, and aspiring leaders
                    seeking to advance their careers in today's dynamic global business environment.
                    The programme combines advanced business theory with practical application,
                    enabling students to develop strategic thinking, leadership capabilities, and
                    analytical decision-making skills required to lead organizations with confidence.
                </p>

                <p>
                    Developed to meet the needs of both working professionals and full-time learners,
                    the MBA curriculum equips graduates with the expertise to address complex business
                    challenges while adapting to rapidly changing global markets. Through a balanced
                    blend of management, finance, marketing, economics, technology, and leadership
                    studies, students gain the knowledge and competencies needed to drive organizational
                    success across diverse industries.
                </p>

            </div>

        </div>
    </div>


    <!-- Why Choose This Programme -->
    <div class="row mb-5">

        <div class="col-lg-10 mx-auto">

            <div class="section-title">
                <h3>Why Choose this Programme?</h3>
            </div>

            <div class="content-box">

                <ul class="styled-list">

                    <li>
                        Internationally recognized MBA awarded by
                        <strong>International American University, USA</strong>
                    </li>

                    <li>
                        Industry-focused curriculum aligned with modern business practices
                    </li>

                    <li>
                        Designed for both working professionals and recent graduates
                    </li>

                    <li>
                        Develops strategic leadership and managerial decision-making skills
                    </li>

                    <li>
                        Flexible study options to accommodate professional commitments
                    </li>

                    <li>
                        Enhances career prospects across local and international organizations
                    </li>

                    <li>
                        Opportunity to gain practical industry exposure through internship and
                        capstone experiences
                    </li>

                </ul>

            </div>

        </div>

    </div>



    <!-- Career Opportunities -->
    <div class="row mb-5">

        <div class="col-lg-10 mx-auto">

            <div class="section-title">
                <h3>Career Opportunities</h3>
            </div>

            <div class="content-box">

                <p>
                    An MBA from International American University prepares
                    graduates for senior management and leadership positions
                    across public, private, and multinational organizations.
                    Career pathways include:
                </p>

                <div class="career-grid">

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>General Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Business Development Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Operations Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h5>Marketing Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Financial Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Human Resource Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                           <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Project Manager</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                           <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Management Consultant</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Entrepreneur</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Corporate Strategist</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Business Analyst</h5>
                    </div>

                    <div class="career-card">
                        <div class="career-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5>Executive Leadership Roles</h5>
                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- Programme Details -->
    <div class="team-details-top-wrapper-about rts-section-gapTop rts-section-gapBottom">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <div class="info-card">

                        <div class="info-item"
                             data-animation="fadeInUp"
                             data-delay="0.2">

                            <span class="label">Programme - </span>
                            <span class="highlight">
                                Master of Business Administration (MBA)
                            </span>

                        </div>

                        <div class="info-item"
                             data-animation="fadeInUp"
                             data-delay="0.2">

                            <span class="label">Level - </span>
                            <span class="highlight">
                                Postgraduate
                            </span>

                        </div>

                        <div class="info-item"
                             data-animation="fadeInUp"
                             data-delay="0.2">

                            <span class="label">Awarding Body - </span>
                            <span class="highlight">
                                International American University (IAU), USA
                            </span>

                        </div>

                        <div class="info-item"
                             data-animation="fadeInUp"
                             data-delay="0.2">

                            <span class="label">Study Mode - </span>
                            <span class="highlight">
                                Online
                            </span>

                        </div>

                        <div class="info-item"
                             data-animation="fadeInUp"
                             data-delay="0.2">

                            <span class="label">Programme - </span>
                            <span class="highlight">
                                MBA
                            </span>

                        </div>

                    </div>

                </div>


                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">

                    <div class="program-link-box">

                        <h4>Programme Details</h4>

                        <p>
                            Explore the official Master of Business Administration
                            programme details from International American University.
                        </p>

                        <a href="https://iaula.edu/program/mba/"
                           target="_blank"
                           rel="noopener noreferrer">

                            View Official Programme
                            <i class="fas fa-arrow-right ms-2"></i>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Dual Award Pathway -->
    <div class="container">

        <div class="row mb-5">

            <div class="col-lg-10 mx-auto">

                <div class="dual-award-box">

                    <h3>
                        Accelerate Your MBA or DBA Journey with Our Dual Award Pathway
                    </h3>

                    <p>
                        Why take the longer route when you can achieve your academic goals faster?
                    </p>

                    <p>
                        Through the <strong>International American University (IAU) Dual Award Pathway</strong>,
                        students may benefit from <strong>subject exemptions (credit transfers)</strong>
                        based on their previous qualifications, allowing them to complete their MBA
                        or DBA in a significantly shorter timeframe. This pathway not only recognizes
                        your prior learning but also provides <strong>substantial financial savings</strong>
                        by reducing the number of modules you need to study.
                    </p>

                    <p>
                        Whether you're a working professional looking to advance your career or an
                        executive aiming for the next level, our accelerated pathway helps you earn
                        a globally recognized qualification more efficiently—without compromising
                        academic quality.
                    </p>

                </div>

            </div>

        </div>


        <!-- Eligibility Assessment -->
        <div class="row mb-5">

            <div class="col-lg-10 mx-auto">

                <div class="eligibility-box">

                    <h3>
                        Discover Your Eligibility Today
                    </h3>

                    <p>
                        Every student's academic background is unique. Contact our admissions team
                        for a <strong>free eligibility assessment</strong> to learn:
                    </p>

                    <ul>

                        <li>Your eligible subject exemptions</li>

                        <li>Estimated programme duration</li>

                        <li>Tuition fee savings through the Dual Award Pathway</li>

                        <li>Your personalized study plan and enrolment options</li>

                    </ul>

                    <div class="cta-box">

                        <p>
                            <strong>
                                Call us today and let our academic advisors show you the fastest,
                                most cost-effective route to earning your internationally recognized
                                MBA or DBA qualification. Your future could be closer than you think.
                            </strong>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

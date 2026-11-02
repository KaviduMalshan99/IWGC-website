@extends ('frontend.master')

@section('content')

<style>
    .styled-modules-list {
    counter-reset: module-counter;
    padding-left: 0;
    margin-top: 20px;
}

.styled-modules-list li {
    list-style: none;
    position: relative;
    padding-left: 55px;
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
    line-height: 1.6;
    transition: all 0.3s ease;
}

.styled-modules-list li::before {
    counter-increment: module-counter;
    content: counter(module-counter);
    position: absolute;
    left: 0;
    top: 0;
    background-color: #edb21e;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.styled-modules-list li:hover::before {
    background-color:rgb(183, 138, 24);
}

.styled-modules-list .option-note {
    color: #888;
    font-size: 14px;
    margin-left: 5px;
}

.partner-breadcrumb {
    height: 400px;
    position: relative;
}

.info-card {
    padding: 10px;
}


.info-item {
    box-shadow: 0 20px 40px rgba(8, 5, 100, 0.01);
    background-color: #1b2954;
    border: 2px solid #1b2954;
    margin: 8px 0;
    padding: 8px 30px;
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

.pathways:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(6, 4, 73, 0.2);
    filter: brightness(1.05);
}

.pathways {
    border: 2px solid #1b2954;
    box-shadow: 0 20px 40px rgba(8, 5, 100, 0.2);
    margin-top: 16px;
    padding: 0;
    transition: all 0.3s ease; 
}

.pathway-header {
    background-color: #1b2954;
    color: white;
    font-weight: bold;
    padding: 8px 30px;
    font-size: 16px;
}

.pathways ul {
    list-style-type: disc;
    margin: 10px 20px;
   padding: 0px 30px;
    color: #000;
}

/* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 25vh !important; 
    }
}
@media (max-width: 768px) {
    /* Adjust info card */
    .info-card {
        padding: 10px !important;
    }

    .info-card .info-item .label,
    .info-card .info-item .highlight {
        font-size: 13px !important;
    }

    .info-card .pathways .pathway-header {
        font-size: 14px !important;
    }

    .info-card .pathways ul li {
        font-size: 12px !important;
        line-height: 1.4 !important;
    }

    /* Adjust modules list */
    .team-details-right-inner .title {
        font-size: 16px !important;
    }

    .styled-modules-list li {
        font-size: 13px !important;
        line-height: 1.4 !important;
    }

      .styled-modules-list li::before {
        width: 25px !important;       
        height: 25px !important;     
        font-size: 12px !important; 
    }

    /* Reduce spacing/padding */
    .pl--35 {
        padding-left: 10px !important;
    }

    .pl_sm--15 {
        padding-left: 10px !important;
    }

    .mt_md--30,
    .mt_sm--50 {
        margin-top: 15px !important;
    }
}

/* Certificate in Human Resource Management additions */
.pathway-note {
    margin: 0;
    padding: 0 30px 15px;
    font-size: 15px;
    line-height: 1.6;
    color: #000;
}

.module-group-title {
    margin: 25px 0 0;
    font-size: 20px;
    font-weight: bold;
    color: #1b2954;
}

.programme-section {
    margin-bottom: 50px;
}

.programme-section .disc {
    margin-bottom: 15px;
    font-size: 18px;
}

.programme-list {
    list-style-type: disc;
    margin: 0;
    padding-left: 25px;
}

.programme-list li {
    margin-bottom: 10px;
    font-size: 18px;
    line-height: 1.6;
    color: #333;
}

.programme-list li::marker {
    color: #edb21e;
}

.programme-cta {
    padding: 50px 40px;
    background-color: #1b2954;
    text-align: center;
}

.programme-cta .title {
    color: white;
}

.programme-cta p {
    margin: 15px 0 30px;
    font-size: 18px;
    line-height: 1.6;
    color: white;
}

.programme-cta .rts-btn {
    display: inline-block;
    max-width: 100%;
    color: white !important;
}

@media (max-width: 768px) {
    .pathway-note {
        padding: 0 15px 12px;
        font-size: 12px;
        line-height: 1.4;
    }

    .info-card .pathways ul {
        margin: 10px 5px;
        padding: 0 20px;
    }

    .module-group-title {
        font-size: 15px;
    }

    .styled-modules-list li {
        padding-left: 38px;
    }

    .programme-section {
        margin-bottom: 30px;
    }

    .programme-section .title,
    .programme-cta .title {
        font-size: 18px !important;
    }

    .programme-section .disc,
    .programme-list li,
    .programme-cta p {
        font-size: 14px;
        line-height: 1.5;
    }

    .programme-cta {
        padding: 30px 20px;
    }
}

</style>


<!-- Banner Section -->
{{-- TODO: Temporary banner reused from the Diploma in Business Administration page. Replace it when the CHRM banner image is ready. --}}
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/new/Diploma In Business Admnistration ( Banner 400 x 1900 ).webp') }}'); background-size: cover; background-position: center;height: 300px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Certificate in Human Resource Management (CHRM)</h2>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
The Certificate in Human Resource Management (CHRM) is a TVEC-accredited foundation-level qualification designed to introduce learners to the essential principles and practices of Human Resource Management. The programme is ideal for individuals who are beginning their careers, seeking to enter the HR profession, or wishing to gain practical workplace skills in personnel administration. <br><br>
The curriculum provides a strong understanding of the day-to-day functions of an HR department, including recruitment, employee administration, payroll basics, training, workplace safety, performance management, and labour law. Alongside technical HR knowledge, learners also develop essential employability skills such as communication, teamwork, and workplace professionalism, preparing them for entry-level roles across a wide range of industries.
                </p>
            </div>
        </div>
    </div>
</div>



    <!-- team details area main wrapper -->
    <div class="team-details-top-wrapper-about rts-section-gapTop rts-section-gapBottom mt-dec-section-inner pt--150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="info-item" data-animation="fadeInUp" data-delay="0.2"><span class="label">Level - </span><span class="highlight">Certificate</span></div>
                        <div class="info-item" data-animation="fadeInUp" data-delay="0.2"><span class="label">Department – </span><span class="highlight">Business Management</span></div>
                        <div class="info-item" data-animation="fadeInUp" data-delay="0.2"><span class="label">Accreditation – </span><span class="highlight">TVEC Accredited</span></div>
                        <div class="info-item" data-animation="fadeInUp" data-delay="0.2"><span class="label">Learning Methods - </span><span class="highlight">Online</span></div>

                        <div class="pathways" data-animation="fadeInUp" data-delay="0.2">
                            <div class="pathway-header">Professional Pathways</div>
                            <ul>
                                <li>HR Assistant</li>
                                <li>HR Clerk</li>
                                <li>Administrative Assistant</li>
                                <li>Office Assistant</li>
                                <li>Recruitment Assistant</li>
                                <li>Payroll Assistant</li>
                                <li>Personnel Assistant</li>
                                <li>Administrative Executive (Junior Level)</li>
                                <li>Office Coordinator</li>
                                <li>Customer Service Executive</li>
                            </ul>
                            <p class="pathway-note">This qualification also provides a strong foundation for progressing to higher qualifications in Human Resource Management, Business Management, and related disciplines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <h4 class="module-group-title">Human Resource Management Modules</h4>
                            <ol class="styled-modules-list">
                                <li>CHRM01 – Introduction to Human Resource Management</li>
                                <li>CHRM02 – Recruitment, Selection, Placement &amp; Induction</li>
                                <li>CHRM03 – Employee Records, Attendance &amp; HR Administration</li>
                                <li>CHRM04 – Payroll Administration &amp; Compensation Basics</li>
                                <li>CHRM05 – Learning, Training &amp; Development</li>
                                <li>CHRM06 – HRIS Operations</li>
                                <li>CHRM07 – Performance Management</li>
                                <li>CHRM08 – Health, Safety &amp; Welfare</li>
                                <li>CHRM09 – Industrial Relations &amp; Labour Law</li>
                            </ol>
                            <h4 class="module-group-title">Workplace Skills Modules</h4>
                            <ol class="styled-modules-list">
                                <li>CHRMB01 – Communication Skills for the Workplace</li>
                                <li>CHRMB02 – Basics of Statistics in Human Resource Management</li>
                                <li>CHRMB03 – Teamwork</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    <!-- Programme details -->
    <div class="container rts-section-gapBottom">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="programme-section">
                    <h3 class="title">Why Choose this Programme?</h3>
                    <ul class="programme-list">
                        <li>TVEC-accredited qualification recognised in Sri Lanka</li>
                        <li>Designed for beginners with no prior HR knowledge or experience</li>
                        <li>Practical, workplace-focused curriculum</li>
                        <li>Learn the fundamentals of modern Human Resource Management</li>
                        <li>Develop administrative and organisational skills valued by employers</li>
                        <li>Taught by qualified lecturers with industry experience</li>
                        <li>Excellent foundation for higher studies in Human Resource Management or Business Management</li>
                    </ul>
                </div>

                <div class="programme-section">
                    <h3 class="title">What You Will Learn</h3>
                    <p class="disc">By the end of this programme, learners will be able to:</p>
                    <ul class="programme-list">
                        <li>Understand the basic functions of Human Resource Management.</li>
                        <li>Assist with recruitment, selection, and employee induction activities.</li>
                        <li>Maintain employee records and attendance information.</li>
                        <li>Perform basic payroll and HR administrative tasks.</li>
                        <li>Support employee training and development programmes.</li>
                        <li>Understand the use of Human Resource Information Systems (HRIS).</li>
                        <li>Assist in performance management processes.</li>
                        <li>Apply basic workplace health, safety, and welfare practices.</li>
                        <li>Gain an understanding of Sri Lankan labour laws and industrial relations.</li>
                        <li>Demonstrate effective communication, teamwork, and professional workplace behaviour.</li>
                    </ul>
                </div>

                <div class="programme-section">
                    <h3 class="title">Who Should Apply?</h3>
                    <p class="disc">This programme is suitable for:</p>
                    <ul class="programme-list">
                        <li>School leavers</li>
                        <li>Individuals seeking their first professional qualification</li>
                        <li>Job seekers interested in Human Resource Management</li>
                        <li>Administrative staff wishing to expand their skills</li>
                        <li>Entrepreneurs and small business owners managing employees</li>
                        <li>Anyone looking to build a career in HR or office administration</li>
                    </ul>
                </div>

                <div class="programme-cta">
                    <h3 class="title">Start Your Career in Human Resource Management</h3>
                    <p>Every successful HR professional starts with a strong foundation. The Certificate in Human Resource Management (CHRM) equips you with the practical knowledge and workplace skills needed to begin a rewarding career in Human Resources and Administration.</p>
                    <a href="{{ route('enroll') }}" class="rts-btn btn-primary btn-white" style="background:#ed3532;">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

@endsection

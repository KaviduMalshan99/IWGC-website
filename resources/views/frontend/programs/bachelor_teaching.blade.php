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
</style>


<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/new/Bachelor Of Teaching Primary ( 400 x 1900 ).webp') }}'); background-size: cover; background-position: top;height: 300px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Bachelor of Teaching (Primary)</h2>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
The Bachelor of Teaching (Primary) is a comprehensive
undergraduate degree designed to prepare future educators to
teach and inspire children from Foundation (Prep) to Year 6.
Grounded in educational theory, child development, and practical
teaching experience, this program equips graduates with the
skills, knowledge, and confidence to create inclusive, engaging,
and effective learning environments for young learners.
<br><br>
Throughout the course, students explore core curriculum areas
such as English, Mathematics, Science, Humanities, and the Arts,
while also gaining a deep understanding of classroom
management, assessment strategies, and differentiated
instruction. Extensive professional placements in primary school
settings ensure graduates are classroom-ready and capable of
meeting the diverse needs of today’s students.
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
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Level - </span><span class="highlight">Bachelors</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Department – </span><span class="highlight">Education</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Credits – </span><span class="highlight">120</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Awarding Body – </span><span class="highlight">Avid College</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Learning Methods - </span><span class="highlight">Online</span></div>

                        <div class="pathways" data-animation="fadeInUp" data-delay="0.2">
                            <div class="pathway-header">Professional Pathways</div>
                            <ul>
                                <li>Primary School Teacher (Foundation to Year 6)</li>
                                <li>Education Officer in Museums, Zoos, or Cultural Centres</li>
                                <li>Student Engagement Officer</li>
                                <li>Research Assistant / Educational Researcher</li>
                                <li>Assistant Principal</li>
                                <li>Curriculum Developer</li>
                                <li>Corporate Trainer</li>
                                <li>NGO or Development Program Educator (e.g., UNICEF, Save the Children)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <ol class="styled-modules-list">
                                <li>Civics and Moral Education</li>
                                <li>Communication Skills for Teachers</li>
                                <li>Essentials of Language Teaching</li>
                                <li>Business Education</li>
                                <li>Quantitative Research Methods</li>
                                <li>Qualitative Research Methods</li>
                                <li>Developmental Psychology</li>
                                <li>Teaching Practicum</li>
                                <li>Philosophy of Education <span class="option-note">(Option 1)</span></li>
                                <li>Dissertation <span class="option-note">(Option 2)</span></li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    

@endsection
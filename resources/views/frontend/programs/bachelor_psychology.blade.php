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
</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/avid/boc.jpg') }}'); background-size: cover; background-position: top;height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Bachelor of Science in Psychology</h2>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
The Bachelor of Counselling is a specialised undergraduate
degree designed to prepare individuals for a rewarding career in
supporting mental health and emotional well-being. Rooted in
psychological theory, ethical practice, and person-centred
communication, this program equips students with the skills and
knowledge required to effectively help individuals, families, and
communities navigate life’s challenges.
<br><br>
Throughout the course, students explore key areas such as
counselling techniques, developmental psychology,
trauma-informed care, mental health, cultural sensitivity, and
ethical frameworks. A strong emphasis is placed on
self-awareness, empathy, and reflective practice. Practical
training through supervised placements ensures that graduates
are well-prepared for real-world counselling settings.
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
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Department – </span><span class="highlight">Psychology</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Credits – </span><span class="highlight">120</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Awarding Body – </span><span class="highlight">Avid College</span></div>
                        <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Learning Methods - </span><span class="highlight">Online</span></div>

                        <div class="pathways" data-animation="fadeInUp" data-delay="0.2">
                            <div class="pathway-header">Professional Pathways</div>
                            <ul>
                                <li>Public Health Project Officer</li>
                                <li>Community Services Officer</li>
                                <li>Behavioral Therapist (e.g., in autism support programs)</li>
                                <li>Child Protection or Family Support Officer</li>
                                <li>Recruitment Consultant</li>
                                <li>Customer Experience Manager</li>
                                <li>Case Manager</li>
                                <li>Addiction Support Officer</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <ol class="styled-modules-list">
                                <li>Abnormal Psychology II</li>
                                <li>Introduction to Counseling</li>
                                <li>Positive Psychology</li>
                                <li>Criminal Psychology</li>
                                <li>Psychological Testing and Assessment</li>
                                <li>Qualitative Research Methods</li>
                                <li>Research project</li>
                                <li>Practicum</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    

@endsection
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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/avid/humanities1.jpg') }}'); background-size: cover; background-position: center; height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1"> Diploma in Counselling</h2>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                 The Diploma in Counselling is a comprehensive and practical
program designed for individuals who wish to develop the
skills, knowledge, and self-awareness required to support
others through life’s challenges. Grounded in psychological
theory and ethical practice, this course provides students with
a strong foundation in counselling techniques, communication
skills, and emotional intelligence.
<br><br>
Whether you're looking to begin a professional career in
counselling or enhance your current role in education,
healthcare, social work, or human resources, this diploma
equips you with the tools to make a real difference in people’s
lives.
                </p>
            </div>
        </div>
    </div>
</div>




    <!-- team details area main wrapper -->
    <div class="team-details-top-wrapper-about rts-section-gapTop rts-section-gapBottom mt-dec-section-inner pt--150">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
               <div class="info-card">
                    <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Level - </span><span class="highlight">Diploma</span></div>
                    <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Department – </span><span class="highlight">Psychology</span></div>
                    <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Credits – </span><span class="highlight">120</span></div>
                    <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Awarding Body – </span><span class="highlight">Avid College</span></div>
                    <div class="info-item"data-animation="fadeInUp" data-delay="0.2"><span class="label">Learning Methods - </span><span class="highlight">Online</span></div>

                    <div class="pathways"data-animation="fadeInUp" data-delay="0.2">
                        <div class="pathway-header">Professional Pathways</div>
                        <ul>
                            <li>Support Coordinator</li>
                            <li>School Counsellor</li>
                            <li>Family Welfare Assistant</li>
                            <li>Community Services Worker</li>
                            <li>Employee Assistance Program Counsellor</li>
                            <li>Welfare Support Worker</li>
                            <li>Drug & Alcohol Support Worker</li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <ol class="styled-modules-list">
                                <li>Approaches to Counselling ( Theoretical Perspectives)-1</li>
                                <li>English language skills-1</li>
                                <li>Counselling skills & Planning treatment -1</li>
                                <li>Introduction to psychology -1</li>
                                <li>Abnormal Psycology-1</li>
                                <li>Substance Abuse & Addition</li>
                                <li>Self development -1</li>
                                <li>Ethics in Counselling</li>
                                <li>Personality Development-1 </li>
                                <li>Creative Arts Skills </li>
                                <li>School Counselling </li>
                                <li>Counselling Practicum </li>
                                <li>Relationship Counselling </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    

@endsection
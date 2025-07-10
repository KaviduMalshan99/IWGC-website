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

</style>

 <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area rts-section-gapBottom rts-section-gapTop pt--200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Counselling</span>
                        <h1 class="title rts-text-anime-style-1">
                           Diploma in Counselling
                        </h1>
                        <p class="disc bread-td" style="max-width: 80%; margin: auto;">
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
        <div class="shape-area">
            <img src="frontend/assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="frontend/assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="frontend/assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>
    <!-- about us area wrapper main end -->

    <!-- team details area main wrapper -->
    <div class="team-details-top-wrapper-about rts-section-gapTop rts-section-gapBottom mt-dec-section-inner pt--150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-team-details" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                        <img src="frontend/assets/images/avid/Diploma-in-Counselling.jpg" alt="team">
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
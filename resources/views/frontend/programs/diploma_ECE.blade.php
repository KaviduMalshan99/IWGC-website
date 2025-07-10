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
                        <span class="bg-title">Education</span>
                        <h1 class="title rts-text-anime-style-1">
                            Diploma in Early childhood education
                        </h1>
                        <p class="disc bread-td" style="max-width: 80%; margin: auto;">
The Diploma in Early Childhood Education is a comprehensive
qualification designed to prepare students for rewarding
careers in the early childhood education and care sector. This
program equips learners with the knowledge, skills, and
practical experience required to support the learning,
development, and wellbeing of children from birth to five years
of age.
<br><br>
Students explore a range of topics including child
development, curriculum planning, health and safety, inclusive
practices, and effective communication with families and
communities. Through hands-on placements and
classroom-based learning, graduates are trained to create
nurturing, engaging, and educational environments that
support each child’s unique needs.
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
                        <img src="frontend/assets/images/avid/Diploma-in-Early-Childhood Education.jpg" alt="team">
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <ol class="styled-modules-list">
                                <li>Foundations of Education</li>
                                <li>Language and Literacy Development</li>
                                <li>Introduction to Educational Psychology</li>
                                <li>Early Childhood Mathematics Education</li>
                                <li>Health and Physical Education</li>
                                <li>Practicum</li>
                                <li>Islamic Studies for Teachers</li>
                                <li>The Effective Practitioner in Early Childhood</li>
                                <li>Science in Early Childhood</li>
                                <li>Academic Writing</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    

@endsection
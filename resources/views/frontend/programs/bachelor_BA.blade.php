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
                        <span class="bg-title">Business</span>
                        <h1 class="title rts-text-anime-style-1">
                            Bachelor of Business Administration
                        </h1>
                        <p class="disc bread-td" style="max-width: 80%; margin: auto;">
                          The Bachelor of Business Administration (BBA) is a
comprehensive undergraduate program designed to equip
students with foundational and advanced knowledge in key areas
of business such as management, marketing, finance, human
resources, and entrepreneurship. This degree prepares students
for dynamic careers in a global business environment by
fostering critical thinking, strategic planning, and effective
communication skills. Graduates are well-prepared to enter the
workforce or pursue further studies in specialized business fields.
<br><br>
The Bachelor of Business Administration is a future-focused
degree that prepares students to thrive in today’s competitive
and interconnected global economy. Covering a broad range of
subjects from organizational behavior to international marketing
and financial management, the BBA emphasizes practical
learning, leadership development, and real-world business
applications. Graduates emerge with the knowledge and
confidence to innovate, lead, and grow in diverse business
sectors.
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
                        <img src="frontend/assets/images/avid/1bb.png" alt="team">
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <ol class="styled-modules-list">
                                <li>Managing People</li>
                                <li>Integrated Marketing Communications</li>
                                <li>Strategic Management</li>
                                <li>Entrepreneurship</li>
                                <li>Introduction to Financial Accounting</li>
                                <li>Operations Management</li>
                                <li>Managing Innovation and Change</li>
                                <li>International Business</li>
                                <li>Dissertation <span class="option-note">(Option 1)</span></li>
                                <li>Marketing Plan <span class="option-note">(Option 2)</span></li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    

@endsection
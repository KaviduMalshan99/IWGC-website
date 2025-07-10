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
                           Master of Business Administration
                        </h1>
                        <p class="disc bread-td" style="max-width: 80%; margin: auto;">
The Master of Business Administration (MBA) is a prestigious and
globally recognized graduate-level program designed to develop
the skills required for careers in business and management. With
a strong emphasis on leadership, strategic thinking, and analytical
decision-making, the MBA equips professionals with the tools
needed to excel in a competitive and ever-evolving global
marketplace. The program integrates core disciplines such as
finance, marketing, operations, human resources, and
entrepreneurship, while also fostering innovation and ethical
leadership. Whether pursuing advancement within a current field
or transitioning into new industries, an MBA provides the
foundation for long-term career growth and success.
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
                        <img src="frontend/assets/images/avid/1mb.png" alt="team">
                    </div>
                </div>
                <div class="col-lg-6 pl--35 pl_sm--15 mt_md--30 mt_sm--50">
                    <div class="team-details-right-inner">
                        <div class="title-area" data-animation="fadeInUp" data-delay="0.2">
                            <h3 class="title animated fadeIn">Modules</h3>
                            <ol class="styled-modules-list">
                                <li>Leadership Effectiveness</li>
                                <li>Research Methods for Business</li>
                                <li>Marketing Management</li>
                                <li>Strategic Management</li>
                                <li>Financial Management</li>
                                <li>E-business Management</li>
                                <li>Managerial Economics</li>
                                <li>Human Resources Management</li>
                                <li>Dissertation <span class="option-note">(Optional)</span></li>
                                <li>Strategic Consulting Project <span class="option-note">(Optional)</span></li>
                                <li>Business Proposal <span class="option-note">(Optional)</span></li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- team details area main wrapper end -->

    

@endsection
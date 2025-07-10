 
@extends ('frontend.master')

@section('content')
 
 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/hero-3 - Copy.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Business</span>
                        <h1 class="title">
    Faculty Of Business Management
                        </h1>
                         <h3 class="title">
    “Developing Global Business Leaders”
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->

<div class="container mt--30">
    <div class="row mb--40">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                    Step into the fast-paced world of commerce, innovation, and leadership with the Faculty
                    of Business Management at Imperial Wisdom. Whether you’re starting your journey or
                    seeking to scale your career, our programs are designed to align with global business
                    demands and leadership standards.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Study Business with Us?</span>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Hands-On Learning:</strong> Case studies, simulations & live projects</li>
                    <li><strong>Designed for Entrepreneurs & Professionals</strong></li>
                    <li><strong>Clear Career Roadmaps: </strong>From diploma to MBA</li>
                    <li><strong>Flexible Study Options: </strong>Ideal for working individuals</li>
                </ul>

                

            </div>
        </div>
    </div>
</div>



 <!-- rts pricing area start -->
    <div class="rts-pricing-area-one rts-section-gapBottom rts-section-gapTop  mt-dec-section-inner with-pricing">
        <div class="container">
            <div class="row  mt_sm--120">
                <div class="col-10 mx-auto">
                    <div class="title-area-left">
                         <h3 style="color: #1b2954; font-weight: 600; margin-top:12%; margin-bottom:0;">
                           Our Business Management Programs
                        </h3>
                         <p style="font-size: 16px; margin-bottom: 20px;">
                        Explore our extensive selection of business courses crafted for aspiring leaders and future professionals.
                    </p>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
                                    <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/1mb.png') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                        <!-- Actual content (above overlay) -->
                                        <div style="position: relative; z-index: 2;">
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">
                                                <h4 class="title" style="color: white !important;">
                                                    Bachelor of Business Administration (BBA)
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->

                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <a class="rts-btn btn-primary" href="{{ route('bachelor_BA') }}">Explore Program</a>
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>

                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/1bb.png') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                        <!-- Actual content (above overlay) -->
                                        <div style="position: relative; z-index: 2;">
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">
                                                <h4 class="title" style="color: white !important;">
                                                    Master of Business Administration (MBA)
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->

                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <a class="rts-btn btn-primary" href="{{ route('master_BA') }}">Explore Program</a>
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>

                                </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->
   

    <!-- rts faq area start -->
    <div class="rts-faq-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12" style="padding-bottom:50px">
                    <div class="title-style-one center">
                        <span class="pre"></span>
                        <h2 class="title rts-text-anime-style-1"> Frequently Asked Questions
                        </h2>
                    </div>
                </div>
                <div class="col-lg-10 pl--50 pl_md--0 pl_sm--0 mt_md--50 mt_sm--80 mx-auto" data-animation="fadeInUp" data-delay="0.3">
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. What programs are offered under the Faculty of Business?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                 Business at IWGC offers two key programs:<br><br>
<strong>Bachelor of Business Administration (BBA) –</strong> An undergraduate program that
provides a strong foundation in business, management, marketing, and finance.<br>

<strong>Master of Business Administration (MBA) – </strong>A postgraduate program that enhances
leadership, strategic thinking, and decision-making skills for aspiring professionals
and executives.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. Are the business programs recognized internationally?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Yes, the business programs at Imperial Wisdom Graduate Campus are internationally recognized.
Our qualifications are accepted by global credential evaluators like WES and UK ENIC, and
align with standards recognized by the UGC and IAU, ensuring strong academic and
professional value worldwide.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. What are the entry requirements for business programs?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Entry requirements vary depending on the level of the program. Additional qualifications or
foundation programs may be accepted on a case-by-case basis. Our admissions team is happy to
assist you in determining your eligibility.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. Can working Professionals apply?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                 Yes. We welcome applications from mature students and working professionals. Recognition of
Prior Learning (RPL) or work experience may be considered.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    05. When is the graduation ceremony held?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
The graduation ceremony is typically held once a year. The exact date and venue will be
announced by the Academic Affairs Office.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq area end -->







  

@endsection
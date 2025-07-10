 
@extends ('frontend.master')

@section('content')
 
 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/hero-3 - Copy.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Humanities</span>
                        <h1 class="title">
Faculty of Humanities & Social Sciences
                        </h1>
                         <h3 class="title">
   “Understanding Minds, Transforming Minds”
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
                  The Faculty of Humanities & Social Sciences. At Imperial Wisdom Graduate Campus
offers a diverse and dynamic learning environment for those who seek to understand
people, cultures, behavior, and societal structures. Our programs equip students with
the knowledge and skills needed for impactful careers in psychology, sociology, public
policy, and beyond.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Choose Imperial Wisdom Graduate Campus?</span>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Scientific & Research-Based Approach</strong> to social sciences</li>
                    <li><strong>Psychology & Mental Health Focused Tracks</strong></li>
                    <li><strong>Globally Recognized UK Qualifications</strong></li>
                    <li><strong>Real-World Application: </strong>Internships, case studies & workshops</li>
                    <li><strong>Career-Focused Pathways: </strong>Counseling, HR, community service & more</li>
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
                          Our Psychology & Counseling Programs
                        </h3>
                         <p style="font-size: 16px; margin-bottom: 30px;">
                       Explore our specialized psychology and counseling programs tailored to develop your
expertise in mental health and human services.
                    </p>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
                                    <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/dic.jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                        <!-- Actual content (above overlay) -->
                                        <div style="position: relative; z-index: 2;">
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">
                                                <h4 class="title" style="color: white !important;">
                                                  Diploma in Counseling
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->

                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <a class="rts-btn btn-primary" href="{{ route('diploma_counseling') }}">Explore Program</a>
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>

                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/Bachelor-of-Counseling.jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                            <!-- Actual content (above overlay) -->
                                            <div style="position: relative; z-index: 2;">
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <h4 class="title" style="color: white !important;">
                                                  Bachelor of Counseling
                                                    </h4>
                                                </div>
                                                <!-- pricing header End -->

                                                <!-- pricing body start -->
                                                <div class="pricing-body">
                                                    <a class="rts-btn btn-primary" href="{{ route('bachelor_counseling') }}">Explore Program</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/boc.jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                            <!-- Actual content (above overlay) -->
                                            <div style="position: relative; z-index: 2;">
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <h4 class="title" style="color: white !important;">
                                               Bachelor of Science in Psychology
                                                    </h4>
                                                </div>
                                                <!-- pricing header End -->

                                                <!-- pricing body start -->
                                                <div class="pricing-body">
                                                    <a class="rts-btn btn-primary" href="{{ route('bachelor_psychology') }}">Explore Program</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                    </div>
                                

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
                                    01. What are the entry requirements for a Psychology degree?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                              Entry requirements depend on the program level. Undergraduate programs require secondary
education, while postgraduate programs require a recognized bachelor’s degree. Please contact
our admissions team for details.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. Can I apply for Psychology if I don’t have a science background?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Yes, you can apply. A science background is not mandatory for most of our psychology
programs. We welcome students from various educational streams, and eligibility will be
assessed based on overall qualifications.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. Are practical experiences or internships included in the programs?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Yes, many of our psychology and humanities programs include practical components such as
internships, research projects, or fieldwork to help students gain real-world experience and apply
their knowledge in professional settings.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. Can I become a counselor with a Bachelor’s degree in Counseling?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Yes, a Bachelor’s degree in Counseling can prepare you for entry-level counseling roles.
However, becoming a licensed or professional counselor may require additional certification or
postgraduate qualifications, depending on local regulations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    05. Will I be qualified as a licensed psychologist after the degree?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Completing a psychology degree is the first step, but becoming a licensed psychologist usually
requires further study, supervised practice, and meeting the licensing requirements set by
professional bodies or regulatory authorities in our country.
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
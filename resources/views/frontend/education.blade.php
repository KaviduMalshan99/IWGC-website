 
@extends ('frontend.master')

@section('content')
 
 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/hero-3 - Copy.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Education</span>
                        <h1 class="title">
    Faculty Of Education
                        </h1>
                         <h3 class="title">
   “Empowering the Educators of Tomorrow.”
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
                 Welcome to the Faculty of Education, where we are committed to transforming
passionate individuals into innovative, globally competent educators. Our programs are
designed to elevate your teaching abilities, leadership qualities, and academic
excellence.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Choose Imperial Wisdom Graduate Campus?</span>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Globally Recognized Teaching Qualifications</strong></li>
                    <li><strong>Practical Teaching Exposure</strong> in schools & educational settings</li>
                    <li><strong>Seamless Pathways </strong> from diploma to postgraduate degrees</li>
                    <li><strong>Flexible Learning:</strong> Online, blended, and weekend options</li>
                    <li><strong>Progression to International Degrees</strong> in the UK, Australia & beyond</li>
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
                          Explore Our Educational Programs
                        </h3>
                         <p style="font-size: 16px; margin-bottom: 20px;">
                        Select from a variety of specialized learning opportunities tailored to your interests
                    </p>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
                                    <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/Diploma-in-Early-Childhood Education.jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                        <!-- Actual content (above overlay) -->
                                        <div style="position: relative; z-index: 2;">
                                            <!-- pricing header -->
                                            <div class="pricing-header-start">
                                                <h4 class="title" style="color: white !important;">
                                                   Diploma in Early childhood Education
                                                </h4>
                                            </div>
                                            <!-- pricing header End -->

                                            <!-- pricing body start -->
                                            <div class="pricing-body">
                                                <a class="rts-btn btn-primary" href="{{ route('diploma_ECE') }}">Explore Program</a>
                                            </div>
                                            <!-- pricing body end -->
                                        </div>
                                    </div>

                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/diploma-Teaching-(Primary).jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                            <!-- Actual content (above overlay) -->
                                            <div style="position: relative; z-index: 2;">
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <h4 class="title" style="color: white !important;">
                                                    Diploma in Teaching (Primary)
                                                     <div style="height: 30px;"></div>
                                                    </h4>
                                                </div>
                                                <!-- pricing header End -->

                                                <!-- pricing body start -->
                                                <div class="pricing-body">
                                                    <a class="rts-btn btn-primary" href="{{ route('diploma_teaching') }}">Explore Program</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/Bachelor-of-Early-Childhood Education.jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                            <!-- Actual content (above overlay) -->
                                            <div style="position: relative; z-index: 2;">
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <h4 class="title" style="color: white !important;">
                                                   Bachelor of Early Childhood Education (BECE)
                                                    </h4>
                                                </div>
                                                <!-- pricing header End -->

                                                <!-- pricing body start -->
                                                <div class="pricing-body">
                                                    <a class="rts-btn btn-primary" href="{{ route('bachelor_ECE') }}">Explore Program</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/Bachelor-of-Teaching-(Primary).jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                            <!-- Actual content (above overlay) -->
                                            <div style="position: relative; z-index: 2;">
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <h4 class="title" style="color: white !important;">
                                                   Bachelor of Teaching (Primary)
                                                   <div style="height: 30px;"></div>
                                                    </h4>
                                                </div>
                                                <!-- pricing header End -->

                                                <!-- pricing body start -->
                                                <div class="pricing-body">
                                                    <a class="rts-btn btn-primary" href="{{ route('bachelor_teaching') }}">Explore Program</a>
                                                </div>
                                                <!-- pricing body end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--80">
                                        <div class="pricing-wrapper-one" style="position: relative; background-image: url('{{ asset('frontend/assets/images/avid/Master-of-Educational-Leadership-and-Management.jpg') }}'); background-size: cover; background-position: center;">
                                        <!-- Black transparent overlay -->
                                            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

                                            <!-- Actual content (above overlay) -->
                                            <div style="position: relative; z-index: 2;">
                                                <!-- pricing header -->
                                                <div class="pricing-header-start">
                                                    <h4 class="title" style="color: white !important;">
                                                   Master of Educational Leadership and Management
                                                    </h4>
                                                </div>
                                                <!-- pricing header End -->

                                                <!-- pricing body start -->
                                                <div class="pricing-body">
                                                    <a class="rts-btn btn-primary" href="{{ route('master_ELM') }}">Explore Program</a>
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
                                    01. What programs are offered by the Faculty of Education?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
        We offer diplomas, undergraduate degrees (e.g., B.Ed.), postgraduate programs (e.g., M.Ed.,
PGDE), and professional development courses in areas such as Primary Education, Secondary
Education, Educational Leadership, Special Needs Education, and Counseling.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. What are the entry requirements for the education programs?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Entry requirements vary by program. A minimum of GCE A/L or equivalent is typically required
for undergraduate programs, while postgraduate programs may require a prior degree and
relevant teaching experience.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. Can I apply even if I don’t have prior teaching experience?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
You can apply for most education programs without prior teaching experience. Diplomas and
bachelor’s degrees suit both new and aspiring educators, while some postgraduate programs may
prefer relevant experience. Our admissions team will guide you based on your background.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. Is there a teaching practicum or school placement included?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                               Yes. Practicum is a compulsory part of most programs and provides hands-on teaching
experience in real classroom settings under supervision.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    05. Can I apply without formal qualifications but with teaching experience?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Yes, applicants with relevant teaching experience may be considered even without formal
academic qualifications. We encourage you to contact our student counselor for a personalized
assessment and guidance on your eligibility.
                                </div>
                            </div>
                        </div>
                         <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    06. Can working teachers apply for part-time study?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
Yes, working teachers are encouraged to apply. Our flexible, part-time programs are designed to
fit the schedules of professionals already in the education field.
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
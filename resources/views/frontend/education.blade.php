
@extends ('frontend.master')

@section('content')

<style>
/* Programs Section Styles */
.program-card {
    display: block;
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
    height: 100%;
    position: relative;
    background-color: #f8f9fa;
}

.program-image {
    position: relative;
    height: 100%;
}

.program-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    display: block;
    filter: grayscale(0.1) brightness(0.9);
}

.program-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
    border-radius: 15px;
    pointer-events: none;
    transition: background 0.3s ease;
}

.program-card:hover .program-overlay {
    background: rgba(0, 0, 0, 0.6);
}

.program-content {
    position: absolute;
    width: 350px;
    left: 50%;
    bottom: 20px;
    transform: translateX(-50%);
    text-align: center;
    color: #fff;
    z-index: 2;
    transition: bottom 0.4s ease, transform 0.4s ease;
}

.program-card:hover .program-content {
    bottom: 50%;
    transform: translate(-50%, 50%);
}

.program-content h3 {
    font-weight: 800;
    margin-bottom: 15px;
    color: #fff;
}

.program-content .btn {
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    padding: 8px 20px;
    display: inline-block;
}

.program-card:hover .btn-outline-light {
    background-color: #fff;
    color: #c1121f;
    border-color: #fff;
}

/* Sections */
.working-process-one {
    background-color: #1b2954;
    color: #fff;
}

.partner-breadcrumb {
    height: 400px;
    position: relative;
}

/* Info Boxes */
.info-box {
    background: #f4f4f4;
    padding: 25px;
    border-radius: 15px;
    color: #000;
    height: 100%;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

@media (max-width: 991px) {
    .program-content {
        width: 90%;
    }
}
.why-list {
    list-style: none;
    padding-left: 0;
}

.why-list li {
    position: relative;
    padding-left: 24px;
    margin-bottom: 8px;
    line-height: 1.6;
}

.why-list li i {
    position: absolute;
    left: 0;
    top: 3px;
    color: #e91212ff; 
    font-size: 14px;
}
</style>




<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/Faculty of Education 03.webp') }}'); background-size: cover; background-position: center;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Faculty Of Education</h2>
        <p class="bg-content">“Empowering the Educators of Tomorrow.”</p>
    </div>

    <div class="row g-4 mb-5">
        

    <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                 Welcome to the Faculty of Education, where we are committed to transforming
                    passionate individuals into innovative, globally competent educators. Our programs are
                    designed to elevate your teaching abilities, leadership qualities, and academic
                    excellence.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Choose Imperial Wisdom Graduate Campus?</span>
                <ul class="why-list" style="padding-left: 20px; margin-top: 10px;">
                    <li><i class="fas fa-check-circle"></i><strong>Globally Recognized Teaching Qualifications</strong></li>
                    <li><i class="fas fa-check-circle"></i><strong>Practical Teaching Exposure</strong> in schools & educational settings</li>
                    <li><i class="fas fa-check-circle"></i><strong>Seamless Pathways </strong> from diploma to postgraduate degrees</li>
                    <li><i class="fas fa-check-circle"></i><strong>Flexible Learning:</strong> Online, blended, and weekend options</li>
                    <li><i class="fas fa-check-circle"></i><strong>Progression to International Degrees</strong> in the UK, Australia & beyond</li>
                </ul>

               

            </div>
        </div>
    </div>
</div>

<!-- Faculties Section -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop working-process-one bg-main" style="background-image: url('{{ asset('public/frontend/assets/images/cta/01.webp') }}'); background-color: #06427eff;">
    <div class="container mb-4 pb-3">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="title rts-text-anime-style-1 text-white">Explore Our Educational Programs</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Program 1 -->
            <div class="col-md-4">
                <a href="{{ route('diploma_ECE') }}" class="program-card">
                    <div class="program-image position-relative">
                        <img src="{{ asset('frontend/assets/images/avid/Diploma-in-Early-Childhood Education.jpg') }}" alt="Diploma in Early Childhood Education" class="img-fluid">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="program-content position-absolute top-50 start-50 translate-middle text-center text-white">
                            <h3>Diploma in Early Childhood Education</h3>
                            <span class="btn btn-outline-light mt-2">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Program 2 -->
            <div class="col-md-4">
                <a href="{{ route('diploma_teaching') }}" class="program-card">
                    <div class="program-image position-relative">
                        <img src="{{ asset('frontend/assets/images/avid/diploma-Teaching-(Primary).jpg') }}" alt="Diploma in Teaching (Primary)" class="img-fluid">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="program-content position-absolute top-50 start-50 translate-middle text-center text-white">
                            <h3>Diploma in Teaching (Primary)</h3>
                            <span class="btn btn-outline-light mt-2">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Program 3 -->
            <div class="col-md-4">
                <a href="{{ route('bachelor_ECE') }}" class="program-card">
                    <div class="program-image position-relative">
                        <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Early-Childhood Education.jpg') }}" alt="Bachelor of Early Childhood Education (BECE)" class="img-fluid">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="program-content position-absolute top-50 start-50 translate-middle text-center text-white">
                            <h3>Bachelor of Early Childhood Education (BECE)</h3>
                            <span class="btn btn-outline-light mt-2">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Program 4 -->
            <div class="col-md-4">
                <a href="{{ route('bachelor_teaching') }}" class="program-card">
                    <div class="program-image position-relative">
                        <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Teaching-(Primary).jpg') }}" alt="Bachelor of Teaching (Primary)" class="img-fluid">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="program-content position-absolute top-50 start-50 translate-middle text-center text-white">
                            <h3>Bachelor of Teaching (Primary)</h3>
                            <span class="btn btn-outline-light mt-2">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Program 5 -->
            <div class="col-md-4">
                <a href="{{ route('master_ELM') }}" class="program-card">
                    <div class="program-image position-relative">
                        <img src="{{ asset('frontend/assets/images/avid/Master-of-Educational-Leadership-and-Management.jpg') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                        <div class="program-content position-absolute top-50 start-50 translate-middle text-center text-white">
                            <h3>Master of Educational Leadership and Management</h3>
                            <span class="btn btn-outline-light mt-2">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>




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
                        <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                        <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                        <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                        <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. Is there a teaching practicum or school placement included?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                               Yes. Practicum is a compulsory part of most programs and provides hands-on teaching experience in real classroom settings under supervision.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                         <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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

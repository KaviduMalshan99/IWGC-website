 
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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/Faculty of Humanities 02.webp') }}'); background-size: cover; background-position: center;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Faculty of Humanities & Social Sciences</h2>
        <p class="bg-content">“Understanding Minds, Transforming Minds”</p>
    </div>

    <div class="row g-4 mb-5">
        

        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                    The Faculty of Humanities & Social Sciences. At Imperial Wisdom Graduate Campus offers a diverse and dynamic learning environment for those who seek to understand people, cultures, behavior, and societal structures. Our programs equip students with the knowledge and skills needed for impactful careers in psychology, sociology, public policy, and beyond.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Choose Imperial Wisdom Graduate Campus?</span>
                <ul class="why-list" style="padding-left: 20px; margin-top: 10px;">
                <li><i class="fas fa-check-circle"></i><strong>Scientific & Research-Based Approach</strong> to social sciences</li>
                    <li><i class="fas fa-check-circle"></i><strong>Psychology & Mental Health Focused Tracks</strong></li>
                    <li><i class="fas fa-check-circle"></i><strong>Globally Recognized UK Qualifications</strong></li>
                    <li><i class="fas fa-check-circle"></i><strong>Real-World Application: </strong>Internships, case studies & workshops</li>
                    <li><i class="fas fa-check-circle"></i><strong>Career-Focused Pathways: </strong>Counseling, HR, community service & more</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Faculties Section -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop working-process-one bg-main" style="background-image: url('{{ asset('public/frontend/assets/images/cta/01.webp') }}'); background-color: #06427eff;">
    <div class="container mb-4 pb-3">
        <div class="row">
            <div class="col-lg-12">
                <div class=" center">
                    <h2 class="title rts-text-anime-style-1 text-white">Our Psychology & Counseling Programs</h2>
                    <p>Explore our specialized psychology and counseling programs tailored to develop your expertise in mental health and human services.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
            

            <div class="col-md-4">
                <a href="{{ route('diploma_counseling') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/avid/dic.jpg') }}" alt="Master of Business Administration" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Diploma in Counseling</h3>
                            <span class="btn btn-outline-light">Explore Program<i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('bachelor_counseling') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/avid/Bachelor-of-Counseling.jpg') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Bachelor of Counseling</h3>
                            <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('bachelor_psychology') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/avid/boc.jpg') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Bachelor of Science in Psychology</h3>
                            <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
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
                    <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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

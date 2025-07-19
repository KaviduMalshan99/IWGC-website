 
@extends ('frontend.master')

@section('content')

<style>
    

    .program-card {
    display: block;
    overflow: hidden;
    border-radius: 15px;
    text-decoration: none;
    height: 100%;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.program-image {
    position: relative;
    height: 100%;
}

.program-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 15px;
}

/* Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
    border-radius: 15px;
    transition: background 0.3s ease;
}

/* Content Container */
.program-content {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 30px;
    padding: 20px;
    text-align: center;
    color: #fff;
    z-index: 2;
    
}

/* Course Name - Always visible */
.program-content h3 {
    color: white;
    font-weight: 800;
    font-size: 30px;
    margin-bottom: 15px;
    opacity: 1;
}

/* Discover Button - Hidden initially */
.program-content .btn {
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    padding: 8px 20px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Hover Effects */
.program-card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.program-card:hover .overlay {
    background: rgba(0, 0, 0, 0.6);
}

.program-card:hover .program-content .btn {
    opacity: 1;
    transform: translateY(0);
}


</style>
 
 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/bus.webp') }}'); background-size: cover; background-position: center;">
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





<!-- rts steps area start -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop bg-light">
    <div class="container mb-4 pb-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Programs</span>
                    <h2 class="title rts-text-anime-style-1">Our Business Management Programs</h2>
                    <span class="pre"> Explore our extensive selection of business courses crafted for aspiring leaders and future professionals.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <a href="{{ route('bachelor_BA') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/1mb.png') }}" alt="Master of Business Administration" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Bachelor of Business Administration (BBA)</h3>
                                <span class="btn btn-outline-light">Explore Program<i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('master_BA') }}" class="program-card">
                        <div class="program-image">
                            <img src="{{ asset('frontend/assets/images/avid/1bb.png') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="program-content">
                                <h3>Master of Business Administration (MBA)</h3>
                                <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
    </div>
</div>
<!-- rts steps area end -->
   

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
                                 Yes. We welcome applications from mature students and working professionals. Recognition of Prior Learning (RPL) or work experience may be considered.
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
                                <div class="accordion-body"> The graduation ceremony is typically held once a year. The exact date and venue will be announced by the Academic Affairs Office.
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
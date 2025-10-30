
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

/* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 25vh !important; 
    }

     h4.title {
        font-size: 20px !important;
    }

     p.disc {
        font-size: 15px !important; 
        text-align: justify;
        text-justify: inter-word; 
        word-break: break-word;   
        hyphens: auto;            
    }

    .why-list li{
         font-size: 15px !important; 
    }

      .level-table {
        font-size: 13px; 
    }

    .level-table th,
    .level-table td {
        padding: 8px 6px; 
    }


    .table-responsive {
        overflow-x: auto;
    }

   

    h3 {
        font-size: 18px;
    }

    ul.degree-list li {
        font-size: 15px;
    }

    .accordion-button {
        font-size: 16px !important; /* question font */
        padding: 8px 12px !important; /* optional: reduce padding */
    }

    .accordion-body {
        font-size: 15px !important; /* answer font */
        line-height: 1.4; /* optional: tighter line spacing */
    }

    .program-card {
        height: 320px !important; /* adjust as needed */
    }

    .program-image img {
        height: 100% !important;
        object-fit: cover !important; /* makes images fill nicely */
    }


}
</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/new/Faculty of Business Management 01.webp') }}'); height: 300px;position: relative;background-size: cover; background-position: center;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Faculty of Business Management</h2>
        <p class="bg-content">“Developing Global Business Leaders”</p>
    </div>

    <div class="row g-4 mb-5">
        

        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                    Step into the fast-paced world of commerce, innovation, and leadership with the Faculty
                    of Business Management at Imperial Wisdom. Whether you’re starting your journey or
                    seeking to scale your career, our programs are designed to align with global business
                    demands and leadership standards.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Study Business with Us?</span>
                <ul class="why-list" style="padding-left: 20px; margin-top: 10px;">
                    <li><i class="fas fa-check-circle"></i><strong>Hands-On Learning:</strong> Case studies, simulations & live projects</li>
                    <li><i class="fas fa-check-circle"></i><strong>Designed for Entrepreneurs & Professionals</strong></li>
                    <li><i class="fas fa-check-circle"></i><strong>Clear Career Roadmaps: </strong>From diploma to MBA</li>
                    <li><i class="fas fa-check-circle"></i><strong>Flexible Study Options: </strong>Ideal for working individuals</li>
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
                <div class="col-lg-12 text-center">
                    <h2 class="title rts-text-anime-style-1 text-white">Our offerings to excel your Business Mastery</h2>
                    <p>Explore our extensive selection of business courses crafted for aspiring leaders and future professionals.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row g-4 justify-content-center">
            

         <div class="col-md-4">
                <a href="{{ route('diploma_BA') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/images/Diploma In Business Admnistration ( Thumbnail ).webp') }}" alt="Master of Business Administration" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Diploma in Business Administration</h3>
                            <span class="btn btn-outline-light">Explore Program<i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('bachelor_BA') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/avid/1bb.png') }}" alt="Master of Business Administration" class="img-fluid">
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
                        <img src="{{ asset('frontend/assets/images/avid/1mb.png') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Master of Business Administration (MBA)</h3>
                            <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('bachelor_PM') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/images/Bachelor of Project Management  ( Thumbnail ).webp') }}" alt="Bachelor of Project Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Bachelor of Project Management</h3>
                            <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('master_CM') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/images/Master of Construction Management ( Thumbnail ).webp') }}" alt="Master of Construction Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Master of Construction Management (MCM)</h3>
                            <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('master_PM') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/images/Master of Project Management  ( Thumbnail ).webp') }}" alt="Master of Project Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Master of Project Management (MPM)</h3>
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
                <div class="col-lg-12">
                <div class="title-style-one center">
                    <span class="pre"></span>
                    <h2 class="title rts-text-anime-style-1"> Frequently Asked Questions
                    </h2>
                </div>
            </div>
            <div class="col-lg-10 pl--50 pl_md--0 pl_sm--0 mt_md--50 mx-auto" data-animation="fadeInUp" data-delay="0.3">
                <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                    <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                01. What programs are offered under the Faculty of Business?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                           Business at IWGC offers two key programs:<br><br>
Bachelor of Business Administration (BBA) – An undergraduate program that
provides a strong foundation in business, management, marketing, and finance.<br>

Master of Business Administration (MBA) – A postgraduate program that enhances
leadership, strategic thinking, and decision-making skills for aspiring professionals
and executives.
    our admissions team for details.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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
                    <div class="accordion-item"  style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
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

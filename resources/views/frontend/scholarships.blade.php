@extends ('frontend.master')

@section('content')

<style>
    .level-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    margin-top: 20px;
}

.level-table thead tr {
    background-color: #1b2954;
    color: #ffffff;
}

.level-table th,
.level-table td {
    padding: 14px 16px;
    text-align: left;
    border-bottom: 1px solid #e0e0e0;
}

.level-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.level-table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

.level-table tbody tr:hover {
    background-color: #edf1f7;
    transition: background-color 0.3s ease;
}

.custom-accordion-body {
    padding: 15px 20px;
    font-size: 15px;
}

.degree-list {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

.degree-list li {
    margin-bottom: 10px;
    font-size: 15px;
    color: #333;
    display: flex;
    align-items: center;
}

.degree-list i {
    color: #1b2954;
    margin-right: 8px;
}


/* Base styles */


/* Make the FAQ section height smaller on tablets */
@media (max-width: 992px) {
    .rts-faq-area {
        height: 1100px;
    }

    .faq-wrapper-inner-page {
        padding-top: 20px;
    }
}

/* Make the FAQ section height auto and stack columns for mobile */
@media (max-width: 768px) {
    .rts-faq-area {
        height: auto;
        padding-bottom: 60px;
    }

    .rts-faq-area .col-lg-6 {
        padding-left: 15px !important;
        padding-right: 15px !important;
        margin-top: 40px;
    }

    .faq-wrapper-inner-page {
        margin-top: 10px;
    }

    .title-style-two h2 {
        font-size: 24px !important;
        text-align: center;
    }

    .accordion-button {
        font-size: 15px!important;
    }

    .accordion-body {
        font-size: 14px;
    }

    .video-area {
        text-align: center;
    }

    .vedio-icone {
        display: inline-block;
    }
}


    /* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 35vh !important; 
    }
}
</style>

 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb"  style="background-image: url('{{ asset('public/frontend/assets/images/Scholaship 01.2.webp') }}'); height: 300px; position: relative; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title"></span>
                        <h1 class="title">
                           
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->



    <!-- project details area top -->
    <div class="project-details-wrapper-image-top  pt--0 ">
        
        <div class="container mt--30">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="single-project-info-wrapper-inner">
                        <h4 class="title">Scholarships at Imperial Wisdom Graduate Campus</h4>
                        <p class="disc" style="font-size:18px; text-align:justify">
                         At Imperial Wisdom Graduate Campus, we are dedicated to empowering ambitious students to
achieve their academic dreams. Our High Achievers Scholarship program is designed to recognize
outstanding a performances and provide substantial financial support for your higher education
journey.
                        </p>
                    </div>
                </div>
            </div>

           
            
            <div class="row">
                <div class="col-lg-12">
                   <h3 class="mt-5">High Achievers Scholarship – Program Details</h3>
                    <p class="mb-4">
                    </p>
                    
                   <div class="table-responsive">
                        <table class="level-table table">
                            <thead>
                                <tr>
                                    <th>Program</th>
                                    <th>Duration</th>
                                    <th>Scholarship Remark</th>
                                    <th>Discount (LKR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Associate Degree</td>
                                    <td>18 Months</td>
                                    <td>High Achievers</td>
                                    <td>100,000</td>
                                </tr>
                                <tr>
                                    <td>Bachelor’s (Top-up)</td>
                                    <td>12 Months</td>
                                    <td>High Achievers</td>
                                    <td>175,000</td>
                                </tr>
                                <tr>
                                    <td>Master’s</td>
                                    <td>12 Months</td>
                                    <td>High Achievers</td>
                                    <td>150,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


            <p class="disc" style="font-style:italic;color:red">
                            * T & C applied
                        </p>
                </div>


            </div>
        </div>
    </div>
    </div>
    <!-- project details area top -->


   <style>

/* Make the FAQ section height smaller on tablets */
@media (max-width: 992px) {
    .rts-faq-area {
        height: 1100px;
    }

    .faq-wrapper-inner-page {
        padding-top: 20px;
    }
}

/* Make the FAQ section height auto and stack columns for mobile */
@media (max-width: 768px) {
    .rts-faq-area {
        height: auto;
        padding-bottom: 60px;
    }

    .rts-faq-area .col-lg-6 {
        padding-left: 15px !important;
        padding-right: 15px !important;
        margin-top: 40px;
    }

    .faq-wrapper-inner-page {
        margin-top: 10px;
    }

    .title-style-two h2 {
        font-size: 24px !important;
        text-align: center;
    }

    .accordion-button {
        font-size: 15px!important;
    }

    .accordion-body {
        font-size: 14px;
    }

    .video-area {
        text-align: center;
    }

    .vedio-icone {
        display: inline-block;
    }
}


.faq-top-image {
    display: none;
}

@media (max-width: 768px) {

    .rts-faq-area {
        background-image: none !important;
        height: auto !important;
    }

    /* Show the top image */
    .faq-top-image {
        display: block;
        width: 100%;
        text-align: center;
        margin-bottom: 0;
    }

    .faq-top-image img {
        max-width: 100%;
        height: auto;
    }

}
@media (max-width: 768px) {
    .faq-overlay {
        display: none !important;
    }
   .fq-box {
    background: linear-gradient(135deg, rgba(0, 0, 0, 1), rgba(0, 102, 255, 1));
}
     .empty-col {
        display: none !important;
    }
    .testimonials-box{
        margin-top:0px !important;
    }
}

</style>




<!-- rts faq area start -->
<div class="rts-faq-area rts-section-gapBottom faq-banner" style="margin-top: 80px; background-image: url('{{ asset('frontend/assets/images/iwgc/FAQBoy.webp') }}'); height: 900px; background-size: cover; background-position: center; position: relative;">

    <!-- Overlay -->
    <div class="faq-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(0, 0, 0, 0.35); z-index: 1;"></div>
    <div class="container fq-box" style="position: relative; z-index: 2; padding: 10px; color: white;">
        <div class="row">
            <div class="col-lg-12 pt-5 pb-0">
                <div class="title-style-two center">
                    <h2 class="title rts-text-anime-style-1" style="color: white !important;">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
    </div>    
    <!-- Put this image inside the container before the FAQ for mobile -->
        <div class="faq-top-image">
            <img src="{{ asset('frontend/assets/images/iwgc/FAQBoy.webp') }}" alt="FAQ" />
        </div>
 
    <div class="container fq-box" style="position: relative; z-index: 2; padding: 0px; margin-top:0">
        
        <div class="row">
                
                <div class="col-lg-6 pl--50 pr--50 empty-col" data-animation="fadeInUp" data-delay="0.1">
                    
                </div>
                <div class="col-lg-6 pl--50 pl_md--0 pl_sm--0 " data-animation="fadeInUp" data-delay="0.3">
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     01. What scholarships are available at Imperial Wisdom Graduate Campus?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                We offer the High Achievers Scholarship for Associate Degree, Bachelor’s (Top-up), and Master’s programs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     02. How much tuition fee discount can I receive?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Discounts are LKR 100,000 for Associate Degree, LKR 175,000 for Bachelor’s (Top-up), and LKR
150,000 for Master’s programs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   03. Who is eligible for the High Achievers Scholarship?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                     Students with outstanding records in academia or extra-curricular activities are eligible to apply
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. How do I apply for the scholarship?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                                                Step 1 - Choose your program <br> 
Step 2 - Prepare your academic documents, and complete application form and submit <br> 
Step 3 – Upon receiving the enrolment approval , Apply for the scholarship application with relevant <br> 
evidences
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                      05. If I am a “high achiever”; can I claim the scholarship directly?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                   At IWGC, we try our maximum to reward your achievements. However the granting of a
scholarship is under the sole discretion of the management of IWGC
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" style="border-color: gold; box-shadow: 0 4px 8px rgba(255, 208, 0, 0.18); ">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    06. Is the scholarship available for current students?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
              The High Achievers Scholarship is primarily for new applicants to our Associate, Bachelor’s (Top-
up), or Master’s programs
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    <!-- rts faq area end -->

<div class="rts-team-skill-area rts-section-gapBottom rts-section-gapTop" data-animation="fadeInUp" data-delay="0.2">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Why Choose Us -->
            <div class="col-lg-6">
                <div class="single-about-skill-inner">
                    <h5 class="title mb--30">Why Choose Imperial Wisdom Graduate Campus?</h5>
                    <ul style="padding-left: 0; list-style: none;">
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle me--2" style="color: #1b2954;"></i>
                            <strong>Significant Tuition Savings:</strong> Reduce your financial burden and focus on your studies.
                        </li>
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle me--2" style="color: #1b2954;"></i>
                            <strong>Recognition:</strong> Be acknowledged as a High Achiever in a vibrant academic community.
                        </li>
                        <li style="margin-bottom: 12px;">
                            <i class="fas fa-check-circle me--2" style="color: #1b2954;"></i>
                            <strong>Opportunity:</strong> Unlock new academic and career possibilities with our support.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column: Contact CTA -->
            <div class="col-lg-6">
                <div class="single-about-skill-inner pl--30 pl_md--0 pl_sm--0">
                    <h5 class="title mb--3">Ready to take the next step?</h5>
                    <p class="disc mt--40">
                        Contact our admissions team today to learn more or proceed with your scholarship request.
                        <br><strong>Imperial Wisdom Graduate Campus</strong> – Empowering Your Ambitions, Rewarding Your Excellence.
                    </p>

                   
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
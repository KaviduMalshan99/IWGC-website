@extends('frontend.master')

@section('content')
<style>

.enroll-guide-wrapper {
    padding: 50px 0;
    background-color: white;
    border-radius: 10px;
}

.step {
    background-color: #f5f8ff;
    margin-bottom: 30px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.step-header h2 {
    font-size: 22px;
    font-weight: bold;
    color: #1b2954;
    border-bottom: 2px solid #ed3532;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

.step-body {
    font-size: 18px;
    line-height: 1.0;
    color: #333;
}

.step-body a {
    color: #1b2954;
    text-decoration: none;
}

.step-body a:hover {
    text-decoration: underline;
}


.step:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}


@media (max-width: 768px) {
    .step {
        padding: 15px;
    }

    .step-header h2 {
        font-size: 18px;
    }
}


.step img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}


</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/Bachelor of Business Management 01.webp') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Enroll</h2>
        <p class="bg-content">Application Process for Imperial Wisdom Graduate Campus (IWGC)</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                  We appreciate your interest in pursuing your education at Imperial Wisdom Graduate Campus (IWGC) 
                  and are excited to help you embark on a promising future. To initiate your application, 
                  please select the program(s) that best align with your academic and career aspirations, 
                  ensuring that you adhere to our admission criteria.<br><br>
In addition to fulfilling the general admission standards set by IWGC, you may be required to demonstrate 
proficiency in specific subject areas or to provide a personal profile or statement of interest that highlights 
your motivations and goals.<br><br>
Your application will be reviewed upon the successful completion of the application form, accompanied by all 
requested supporting documents submitted to our admissions team. It is essential to provide comprehensive
 documentation for all secondary and post-secondary education that you have undertaken, 
 alongside relevant work experience, if applicable.<br><br>
For a detailed overview of the application process, including necessary documents and additional steps, please refer to the information provided. We eagerly anticipate welcoming you to the IWGC community and supporting you on your educational journey.

                </p>
            </div>
        </div>
    </div>
</div>




<div class="container mt--30">
    <div class="row mb--40">
        <div class="col-lg-10 mx-auto">
            <div class="enroll-guide-wrapper">

                <!-- STEP 1 -->
                <div class="step" id="step1">
                    <div class="row align-items-center">
                        <!-- Text Left -->
                        <div class="col-lg-12">
                            <div class="step-header">
                                <h2>Step 1: E-mail your application & Supporting Documents</h2>
                            </div>
                            <div class="step-body">
                                <p class="m-0"><strong>Please select your preferred program(s) and 
                                    complete the application form along with the supporting documents 
                                    as outlined in the checklist. Kindly submit these materials via email 
                                    to <span class="text-danger">admissions@iwgc.lk</span>. After your submission, you will receive 
                                    a confirmation email from the admissions team regarding the status 
                                    of your application. During this initial review phase, you may be 
                                    requested to provide additional supporting documents to assist the 
                                    admissions team in their decision-making process. </strong> </p>
                            </div>
                        </div>
                         <!-- Image  -->
                        <div class="col-lg-12 text-center mt-4">
                            <img src="frontend/assets/images/hero/image-1.png" alt="Step 1" style="box-shadow: none; height:170px">
                        </div>
                       
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="step" id="step2">
                    <div class="row align-items-center flex-row-reverse">
                        <!-- Text Right -->
                         <div class="col-lg-12">
                            <div class="step-header">
                                <h2>Step 2:	Upon approval, pay your course fees</h2>
                            </div>
                            <div class="step-body">
                                <p class="m-0"><strong>Upon acceptance into the selected course, you will receive an email acknowledgment that includes the course fee structure. You will also receive instructions on how to proceed with the payment of the course fees </strong> </p>
                            </div>
                        </div>
                         <!-- Image  -->
                        <div class="col-lg-12 text-center mt-4">
                            <img src="frontend/assets/images/hero/image-2.png" alt="Step 2" style="box-shadow: none; height:170px">
                        </div>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="step" id="step3">
                    <div class="row align-items-center">
                        <!-- Text Left -->
                         <div class="col-lg-12">
                            <div class="step-header">
                                <h2>Step 3:	 Confirmation OF Enrollment & Class schedule</h2>
                            </div>
                            <div class="step-body">
                                <p class="m-0"><strong>Upon receipt of your payment, we will promptly send you the letter of acceptance along with the lecture schedule for your selected program(s). </strong> </p>
                            </div>
                        </div>
                         <!-- Image  -->
                        <div class="col-lg-12 text-center mt-4">
                            <img src="frontend/assets/images/hero/image-3.png" alt="Step 3" style="box-shadow: none; height:170px">
                        </div>
                    </div>
                </div>

              <!-- OPTIONAL WALK-IN SECTION -->
                <div class="step" id="step4" style="background-color: white; text-align:center">
                    <div class="step-header">
                        <h2>Visit our corporate office</h2>
                    </div>
                    <div class="step-body">
                        <p>Alternatively, you are welcome to visit our corporate office to complete your enrollment. Please ensure that you bring all required documents. We accept both cash and card payments during the enrollment process.</p>
                        <p class="m-0"><strong>Location: Imperial Wisdom Graduate Campus</strong></p>
                        <p class="m-0"><strong>85 - 1/3 Galle Road, Dehiwala - 10350</strong></p>
                        <p class="m-0"><strong>Monday to Friday | 9:00 AM – 5:00 PM</strong></p>
                        <p>We look forward to assisting you!.</p>
                      
                    </div>
                </div>

                <!-- Download Application Form Section -->
                    <div class="step" id="application-download" style="background-color: #F6F8FA; padding: 40px 20px; border-radius: 12px; margin-top: 40px;">
                        <div class="text-center">
                            <h3 style="color: #1b2954;">Download Student Application Form</h3>
                            <p class="mb-4" style="color: #555; font-size: 16px;">
                                Click below to download the official IWGC student application form. 
                                Please fill it out completely and submit it along with the required documents.
                            </p>

                            <a href="{{ asset('public/Fillable - IMPWIS_Student_Application.pdf') }}" 
                            class="btn btn-primary" 
                            style="padding: 12px 24px; font-size: 16px; border-radius: 30px; background-color: #ba1e1eff; border: none;" 
                            download>
                                📄 Download Application Form (PDF)
                            </a>

                            <p class="mt-3" style="font-size: 14px; color: #888;">PDF format | Approx. 5MB</p>
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>

@endsection

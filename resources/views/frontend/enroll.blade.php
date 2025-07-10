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

<!-- partners area breadcrumb area wrapper -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/breadcrumb.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-left center">
                    <span class="bg-title">Enroll</span>
                    <h1 class="title">How to Enroll</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partners area breadcrumb area end -->

<div class="container mt--30">
    <div class="row mb--40">
        <div class="col-lg-10 mx-auto">
            <div class="enroll-guide-wrapper">

                <!-- STEP 1 -->
                <div class="step" id="step1">
                    <div class="row align-items-center">
                        <!-- Text Left -->
                        <div class="col-lg-6">
                            <div class="step-header">
                                <h2>Step 1: Complete Your Application</h2>
                            </div>
                            <div class="step-body">
                                <p class="m-0"><strong>Choose your program:</strong> Browse our wide selection of internationally aligned programs and select the one that matches your academic and career goals.</p>
                                <p class="m-0"><strong>Fill out the application form:</strong> Download or access the form from our official website or request it via email.</p>
                                <p class="m-0"><strong>Prepare your documents:</strong> Ensure the following are included:</p>
                                <ul class="tick-list" style="list-style: none; padding-left: 0;">
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>A completed application form</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Copies of all academic transcripts (O/L, A/L, diplomas, degrees, etc.)</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Copy of National ID or Passport</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Statement of Purpose (if required)</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>CV or prior work experience records (if applicable)</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>English language proficiency documentation (if applicable)</li>
                                </ul>
                                <p class="m-0"><strong>Submit via email:</strong> Email your full application to: <a href="mailto:admissions@iwgc.lk" style="color:red">admissions@iwgc.lk</a>.</p>
                                <p class="m-0" style="font-style:italic">You will receive an acknowledgement email confirming receipt</p>
                            </div>
                        </div>
                        <!-- Image Right -->
                        <div class="col-lg-6 text-center">
                            <img src="frontend/assets/images/avid/enroll/step1.jpg" alt="Step 1" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="step" id="step2">
                    <div class="row align-items-center flex-row-reverse">
                        <!-- Text Right -->
                        <div class="col-lg-6">
                            <div class="step-header">
                                <h2>Step 2: Application Review & Acceptance</h2>
                            </div>
                            <div class="step-body">
                                <p class="m-0"><strong>Review by the admissions team:</strong> Our team will assess your application based on program requirements and overall eligibility. You may be asked to submit further documents or attend a brief interview if necessary.</p>
                                <p class="m-0"><strong>Conditional or full offer:</strong> If you meet the requirements, you will receive either:</p>
                                <ul style="list-style: none; padding-left: 0;">
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>A Full Offer Letter, OR</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>A Conditional Offer Letter requesting additional steps</li>
                                </ul>
                                <p class="m-0"><strong>Course fee details:</strong> Once accepted, you will receive an official email outlining:</p>
                                <ul style="list-style: none; padding-left: 0;">
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Course tuition fees</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Payment structure (full or installment options)</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Enrollment deadlines</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Image Left -->
                        <div class="col-lg-6 text-center">
                            <img src="frontend/assets/images/avid/enroll/step2.jpg" alt="Step 2" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="step" id="step3">
                    <div class="row align-items-center">
                        <!-- Text Left -->
                        <div class="col-lg-6">
                            <div class="step-header">
                                <h2>Step 3: Finalize Enrollment & Receive Materials</h2>
                            </div>
                            <div class="step-body">
                                <p class="m-0"><strong>Pay your tuition:</strong> You can complete your payment:</p>
                                <ul style="list-style: none; padding-left: 0;">
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Online via bank transfer</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>In-person at the IWGC office (cash or card)</li>
                                </ul>
                                <p class="m-0"><strong>Receive your acceptance kit:</strong> After payment confirmation, we will provide you with:</p>
                                <ul style="list-style: none; padding-left: 0;">
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Letter of Acceptance</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Official Enrollment Confirmation</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Class Timetable or Lecture Schedule</li>
                                    <li><i class="fas fa-check-circle me-2" style="color: green;"></i>Orientation details</li>
                                </ul>
                                <p>You are now officially enrolled and ready to begin your program!</p>
                            </div>
                        </div>
                        <!-- Image Right -->
                        <div class="col-lg-6 text-center">
                            <img src="frontend/assets/images/avid/enroll/step3.jpg" alt="Step 3" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- OPTIONAL WALK-IN SECTION -->
                <div class="step" id="step4" style="background-color: white; text-align:center">
                    <div class="step-header">
                        <h2>Optional: Walk-in Enrollment Support</h2>
                    </div>
                    <div class="step-body">
                        <p>Prefer face-to-face guidance? Visit our main campus:</p>
                        <p class="m-0"><strong>Imperial Wisdom Graduate Campus</strong></p>
                        <p class="m-0"><strong>85 - 1/3 Galle Road, Dehiwala - 10350</strong></p>
                        <p class="m-0"><strong>Monday to Friday | 9:00 AM – 5:00 PM</strong></p>
                        <p>Our team is happy to assist you with program selection, document submission, or payment processing.</p>
                        
                        <p class="m-0"><strong>Have Questions? Contact the Admissions Office</strong></p>
                        <p class="m-0">
                            <i class="fas fa-envelope" style="color: #1b2954; margin-right: 8px;"></i>
                            <a href="mailto:admissions@iwgc.lk" style="color: #1b2954; text-decoration: none;">admissions@iwgc.lk</a>
                        </p>
                        <p class="m-0">
                            <i class="fas fa-phone-alt" style="color: #1b2954; margin-right: 8px;"></i>
                            <a href="tel:+94112345678" style="color: #1b2954; text-decoration: none;">+94 11 234 5678</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

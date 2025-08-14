   
@extends ('frontend.master')

@section('content')
<style>
        /* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 35vh !important; 
    }
}
</style>
<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/Terms And Conditions.webp') }}'); background-size: cover; background-position: top;  height: 300px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1"> Terms and Conditions</h2>
        <p class="bg-content">    Effective Date: 01st February 2025</p>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                </p>
                <div class="inner-content">

                        <div class="top">
                            <h3 class="title">Introduction</h3>
                            <p class="disc">
                            These Terms and Conditions (&quot;Terms&quot;) govern your use of the Imperial Wisdom Graduate Campus
Pvt. Ltd. website and Learning Management System (LMS). By accessing or using these services,
you agree to be bound by these Terms.
                            </p>

                            <h3 class="title">Eligibility</h3>
                            <p class="disc">
                             Access to the LMS is restricted to enrolled students, faculty, and authorized staff. By using the LMS,
you confirm you are legally eligible and authorized to do so.
                            </p>

                            <h3 class="title">User Account and Security</h3>
                            <p class="disc">
                               You must provide accurate and complete registration information.
<br> You are responsible for maintaining the confidentiality of your login credentials.
<br> You agree not to share your account details with others.
<br> You must notify us immediately of any unauthorized use of your account.
                            </p>


                            <h3 class="title">Acceptable Use</h3>
                            <p class="disc">
                          You agree to use the website and LMS only for lawful educational purposes and not to:
<br> Engage in any activity that violates Sri Lankan law or institutional policies.
<br> Transmit harmful, offensive, defamatory, or illegal content.
<br> Attempt to disrupt or damage the website or LMS infrastructure.
<br> Use the platform to harass, intimidate, or harm others.
                            </p>

                            <h3 class="title">Intellectual Property</h3>
                            <p class="disc">All content, including course materials, software, logos, and trademarks, are owned by Imperial
Wisdom Graduate Campus Pvt. Ltd. or licensed to it. You may not reproduce, distribute, or create
derivative works without explicit permission.
                            </p>

                            <h3 class="title">Payment and Fees</h3>
                            <p class="disc">Tuition and other fees must be paid according to the institute’s schedule.
<br> Failure to pay may result in suspension of access to LMS and academic services.
<br> Refund policies are detailed separately and must be consulted before payment.
                            </p>

                            <h3 class="title">Disclaimers and Limitation of Liability</h3>
                            <p class="disc">We strive to provide accurate and reliable information but do not guarantee uninterrupted access
or error-free services.
<br> We are not liable for any loss, damage, or injury resulting from your use of the website or LMS.
<br> We disclaim liability for third-party content or links.
                            </p>

                            <h3 class="title">Termination and Suspension</h3>
                            <p class="disc">We reserve the right to suspend or terminate your access without notice if you violate these Terms or
engage in misconduct.
                            </p>

                            <h3 class="title">Governing Law and Dispute Resolution</h3>
                            <p class="disc">These Terms are governed by the laws of Sri Lanka. Any disputes will be resolved under the
jurisdiction of Sri Lankan courts.
                            </p>

                             <h3 class="title">Amendments</h3>
                            <p class="disc">We may update these Terms from time to time. Continued use of the services constitutes acceptance
of the updated Terms.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

   


@endsection
   
@extends ('frontend.master')

@section('content')

<style>
    /* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 25vh !important; 
    }

          h3.title {
        font-size: 22px !important;
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
}
</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/new/Privacy Policy.webp') }}'); background-size: cover; background-position: top;  height: 300px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1"> Privacy Policy</h2>
        <p class="bg-content">   Effective Date: 01st February 2025 </p>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">


                </p>
                <div class="inner-content">

                        <div class="top">
                            <h3 class="title">Introduction</h3>
                            <p class="disc" style="text-align:justify">
                               Imperial Wisdom Graduate Campus Pvt. Ltd. (&quot;we&quot;, &quot;us&quot;, &quot;our&quot;) is committed to protecting your privacy
                                and ensuring the security of your personal data. This Privacy Policy explains how we collect, use,
                                disclose, and safeguard your information when you visit our website and use our Learning
                                Management System (LMS). We comply with Sri Lanka’s data protection laws, including the Personal
                                Data Protection Act No. 9 of 2022, and other relevant regulations.
                            </p>

                            <h3 class="title">Information We Collect</h3>
                            <p class="disc" style="text-align:justify">
                              We collect information to provide better educational services and to comply with legal obligations. The
                            types of information collected include:
                            <br>Personal Identification Information: Full name, date of birth, gender, nationality, national
                            identity card number or passport number, contact details (address, phone number, email).
                            <br> Academic Information: Enrollment details, course registrations, academic records, attendance,
                            grades, certifications.
                            <br> Financial Information: Payment details, bank account information, scholarship or financial aid
                            data.
                            <br> Health and Welfare Information: Medical history, disability status, counseling records (where
                            applicable and with your consent).
                            <br> Technical Information: IP address, browser type, operating system, device identifiers, access
                            times, pages visited.
                            <br> User-Generated Content: Communications, feedback, assignments, forum posts, and other
                            content submitted via LMS.
                            <br> Cookies and Tracking Data: Information collected through cookies and similar technologies.
                            </p>

                            <h3 class="title">How We Use Your Information</h3>
                            <p class="disc" style="text-align:justify">
                               Your personal data is used for the following purposes:

                            <br> To process admissions, registrations, and course enrollments.
                            <br> To manage your academic progress and issue certifications.
                            <br> To provide access to LMS and other digital resources.
                            <br> To communicate important information, including announcements, updates, and emergency
                            notifications.
                            <br> To process payments, refunds, and financial aid.
                            <br> To improve our website, LMS, and educational services through analytics.
                            <br> To comply with legal and regulatory obligations, including reporting to government bodies such
                            as the University Grants Commission (UGC) of Sri Lanka.
                            <br> To ensure campus safety and security.
                            </p>

                            <h3 class="title">Legal Basis for Processing</h3>
                            <p class="disc" style="text-align:justify">
                              We process your personal data based on the following legal grounds:
<br> Your consent (where required).
<br> Performance of a contract (e.g., enrollment agreements).
<br> Compliance with legal obligations.
<br> Legitimate interests pursued by Imperial Wisdom Graduate Campus Pvt. Ltd. (e.g., improving
educational services).
                            </p>

                            <h3 class="title">Data Sharing and Disclosure</h3>
                            <p class="disc" style="text-align:justify">
                            We do not sell or rent your personal data. However, your information may be shared with:
<br> Government Authorities: For compliance with laws, audits, and reporting (e.g., Ministry of
Education, UGC).
<br> Third-Party Service Providers: Such as payment processors, IT service providers, cloud
hosting, and LMS vendors, under strict confidentiality agreements.
<br> Academic Partners: For collaborative programs or student exchange, only with your consent.
<br> Law Enforcement: If required by law or to protect the rights, property, or safety of Imperial
Wisdom Graduate Campus Pvt. Ltd. or others.
                            </p>

                            <h3 class="title">Data Retention</h3>
                            <p class="disc" style="text-align:justify">We retain your personal data only for as long as necessary to fulfill the purposes outlined in this policy
or as required by law. Academic records are typically retained permanently or as per regulatory
requirements.
                            </p>

                            <h3 class="title">Data Security</h3>
                            <p class="disc" style="text-align:justify">We employ appropriate technical and organizational measures to protect your data against
unauthorized access, alteration, disclosure, or destruction. These include encryption, access controls,
secure servers, and regular security audits.
                            </p>

                            <h3 class="title">Your Rights</h3>
                            <p class="disc" style="text-align:justify">Under Sri Lankan law, you have the right to:
<br> Access your personal data held by us.
<br> Request correction or update of inaccurate or incomplete data.
<br> Request deletion or restriction of processing under certain circumstances.
<br> Object to processing based on legitimate interests.
<br> Withdraw consent at any time (where processing is based on consent).
<br> Lodge a complaint with the relevant data protection authority.
To exercise these rights, please contact our Privacy Officer at support@iwgc.lk.
                            </p>

                            <h3 class="title">International Transfers</h3>
                            <p class="disc" style="text-align:justify">If your data is transferred outside Sri Lanka (e.g., to cloud service providers), we ensure adequate
protections are in place consistent with Sri Lankan data protection standards.
                            </p>

                            <h3 class="title">Children’s Privacy</h3>
                            <p class="disc" style="text-align:justify">Our services are intended for students aged 18 and above. For minors, parental or guardian consent
is required for data processing.
                            </p>

                             <h3 class="title">Changes to This Policy</h3>
                            <p class="disc" style="text-align:justify">We may update this Privacy Policy periodically. Changes will be notified via our website and LMS,
with the updated effective date.
                            </p>
                        </div>
                        </div>
            </div>
        </div>
    </div>
</div>








@endsection
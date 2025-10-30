   
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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/new/Cookie Policy.webp') }}'); background-size: cover; background-position: center;  height: 300px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Cookies Policy</h2>
        <p class="bg-content">  Effective Date: 01st February 2025</p>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                </p>
                <div class="inner-content">

                        <div class="top">
                            <h3 class="title">What Are Cookies?</h3>
                            <p class="disc">
                          Cookies are small text files stored on your device by websites you visit. They help enhance your
experience by remembering your preferences and collecting information about your usage.
                            </p>

                            <h3 class="title">Types of Cookies We Use</h3>
                            <p class="disc">
                          Essential Cookies: Necessary for the operation of the website and LMS (e.g., login sessions,
security).
<br> Performance Cookies: Collect anonymous data about how visitors use the site to improve
performance and user experience.
<br> Functionality Cookies: Remember your preferences such as language, font size, or region.
<br> Targeting/Advertising Cookies: Used by third parties to deliver relevant advertisements (only
used with your consent).
                            </p>

                            <h3 class="title">Third-Party Cookies</h3>
                            <p class="disc">
                            Our website may include content from third parties such as YouTube, Facebook, or Google Analytics,
which may set their own cookies. We do not control these cookies and recommend reviewing their
privacy policies.
                            </p>


                            <h3 class="title">Managing Cookies</h3>
                            <p class="disc">
                          Most browsers allow you to control cookies through settings. You can block or delete cookies;
however, disabling essential cookies may affect website functionality.
                            </p>

                            <h3 class="title">Consent</h3>
                            <p class="disc">By using our website and LMS, you consent to our use of cookies as described in this policy. You may
withdraw consent by adjusting your browser settings.
                            </p>

                            <h3 class="title">Changes to This Policy</h3>
                            <p class="disc">We may update this Cookies Policy periodically. Changes will be posted on this page with an updated
date.
                            </p>

                              <h3 class="title">Contact Information</h3>
                            <p class="disc">For any questions or concerns regarding these policies, please contact:<br>
<strong>Data Protection Officer / Privacy Officer </strong><br>
Imperial Wisdom Graduate Campus Pvt. Ltd.<br>
Email: support@iwgc.lk<br>
Phone: +94 766 888 184<br>

Address: No.85-1/3, Galle Road, Dehiwala, Sri Lanka
                            </p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
  




@endsection
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

.accordion-button{
    color:white !important;
}

.accordion-header{
    background-color: #1b2954;
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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/Hero 01.4.jpg') }}'); background-size: cover; background-position: center;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Qualifi – UK</h2>
        <p class="bg-content">  </p>
    </div>

</div>




    <!-- project details area top -->
    <div class="project-details-wrapper-image-top">
        
        <div class="container mt--30">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="single-project-info-wrapper-inner">
                        <h4 class="title">About Qualifi</h4>
                        <p class="disc" style="font-size:18px; text-align:justify">
                          Qualifi is a distinguished UK awarding organization, officially recognized
                            and regulated by Ofqual (Regulation Number RN5160). We ensure that our
                            qualifications uphold highest standards of consistency, rigor, and validity,
                            providing confidence to employers, training centers, and learners alike.<br>
                            In today’s competitive global marketplace, organizations seek
                            knowledgeable, highly skilled, and productive employees. Our qualifications
                            facilitate this need by offering recognized competency credentials that
                            support career development and enterprise growth on an international
                            scale.
                            Designed to blend UK standards with relevant global content, Qualifi’s
                            qualifications enable learners to reach their full potential within the evolving
                            global economy.
                        </p>
                                    <span style="font-weight: bold; font-size:18px;">Key features include:</span>
                                    <ul class="why-list" style="padding-left: 20px; margin-top: 10px;">
                                        <li><i class="fas fa-check-circle"></i>Regulated UK Awarding Organization (Ofqual Recognized RN5160)</li>
                                        <li><i class="fas fa-check-circle"></i>Strict assessment standards ensuring consistency and quality</li>
                                        <li><i class="fas fa-check-circle"></i>A diverse portfolio of regulated and bespoke qualifications</li>
                                        <li><i class="fas fa-check-circle"></i>International applicability and recognition</li>
                                        <li><i class="fas fa-check-circle"></i>Vocational training pathways and university degree routes</li>
                                    </ul>
                         

                    </div>
                </div>
            </div>

            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="single-project-info-wrapper-inner">
                        <h4 class="title">QUALIFI at IWGC</h4>
                        <p class="disc" style="font-size:18px; text-align:justify">
                       Our QUALIFI programs are designed to provide you with internationally recognized
                        qualifications that open doors to academic progression and career advancement.
                        Whether you're looking to enhance your professional credentials, prepare for further
                        study, or gain a competitive edge in the job market, our programs offer the flexibility and
                        recognition you need to succeed.
                        </p>
                       <div class="row g-4">
                            <div class="col-lg-8">
                                <div class="single-project-info">
                                    <ul class="why-list" style="padding-left: 20px; margin-top: 10px; ">
                                        <li><i class="fas fa-check-circle"></i>Career-ready diplomas across various industries</li>
                                        <li><i class="fas fa-check-circle"></i>Online access and part-time options</li>
                                        <li><i class="fas fa-check-circle"></i>Ideal for migration, study abroad, or professional advancement</li>
                                        <li><i class="fas fa-check-circle"></i>Direct entry to UK Top-Up Bachelor's and MBA programs</li>
                                        <li><i class="fas fa-check-circle"></i>QUALIFI diplomas from Level 3 to Level 7</li>
                                        <li><i class="fas fa-check-circle"></i>Affordable and recognized worldwide</li>
                                        <li><i class="fas fa-check-circle"></i>Available Study Abroad Opportunities Upon Program Completion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   <h3 class="mt-5">Level Equivalencies: Understanding the Framework</h3>
                    <p class="mb-4">
                        QUALIFI programs are offered at multiple RQF levels, making it easy to align your
education with global standards. Here’s a quick look at how these levels compare:
                    </p>
                    
                <div class="table-responsive">
                   <table class="level-table">
                        <thead>
                            <tr>
                                <th>QUALIFI Level</th>
                                <th>Equivalent UK Qualification</th>
                                <th>Academic Standing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Level 3</td>
                                <td>A-Level / Foundation Diploma</td>
                                <td>Pre-university</td>
                            </tr>
                            <tr>
                                <td>Level 4</td>
                                <td>First year of Bachelor's Degree /HNC</td>
                                <td>Undergraduate (Year 1)</td>
                            </tr>
                            <tr>
                                <td>Level 5</td>
                                <td>Second year of Bachelor's Degree/ HND</td>
                                <td>Undergraduate (Year 2)</td>
                            </tr>
                            <tr>
                                <td>Level 6</td>
                                <td>Bachelor’s Degree /Final Year</td>
                                <td>Full Undergraduate Degree/Undergraduate (Year 3)</td>
                            </tr>
                            <tr>
                                <td>Level 7</td>
                                <td>Postgraduate Diploma / Master’sLevel Entry</td>
                                <td>Pre-Master's or MBA entry</td>
                            </tr>
                            <tr>
                                <td>Level 8</td>
                                <td>Doctorate Level</td>
                                <td>Doctoral (PhD) Level</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                    <div class="row mb--40">
                        <div class="col-lg-12">
                            <div class="single-project-info-wrapper-inner">
                                <h4 class="title">Progression Pathways: Your Route to a Degree or Career Boost</h4>
                                <p class="disc" style="font-size:18px; text-align:justify">
                          QUALIFI programs are built with progression in mind, offering clear academic and
professional development routes:
                                </p>

                                            <ul class="why-list" style="padding-left: 20px; margin-top: 10px; ">
                                                <li><i class="fas fa-check-circle"></i><strong>Top-Up Degrees:</strong> Advance to final-year Bachelor&#39;s or Master&#39;s degrees at UK or
international universities.</li>
                                               <li><i class="fas fa-check-circle"></i><strong>MBA & Master’s Entry:</strong> Use your QUALIFI Level 7 diploma as a direct entry
route to prestigious MBA and MSc programs worldwide.</li>
                                               <li><i class="fas fa-check-circle"></i><strong>Career Advancement:</strong>  Gain the practical knowledge and credentials to move
forward in your career, whether locally or abroad.</li>
                                               <li><i class="fas fa-check-circle"></i><strong>Study Abroad & Migration:</strong> QUALIFI’s global recognition ensures smooth
academic transitions and support for migration or further studies.</li>
                                              
                                            </ul>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="row g-4 align-items-start mb--100" >
                    <h3 class="mt-0">Qualifi Programs</h3>
                        <!-- Left: Accordion -->
                        <div class="col-lg-7">
                            <div class="faq-inner-wrapper-one project-detils">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header" style="background-color: #1b2954;">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne"
                                                aria-expanded="false"
                                                aria-controls="collapseOne" style="color:white;padding: 10px 15px;font-size: 18px !important;">
                                                BUSINESS AND MANAGEMENT
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                                <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-business-management" target="_blank">Qualifi Level 3 Diploma in Business Management (603/1102/2)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-introduction-to-management" target="_blank">Qualifi Level 3 Diploma in Introduction to Management (603/4373/4)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-integrated-diploma-in-business-and-management" target="_blank">Qualifi Level 3 Integrated Diploma in Business and Management (603/4730/2)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-business-innovation-and-entrepreneurship" target="_blank">Qualifi Level 3 Diploma in Business Innovation and Entrepreneurship (603/1051/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-business-management-and-study-skills" target="_blank">Qualifi Level 3 Extended Diploma in Business, Management and Study Skills (603/7380/5)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-business-management" target="_blank">Qualifi Level 3 Extended Diploma in Business Management (610/5596/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-business-and-law" target="_blank">Qualifi Level 3 Extended Diploma in Business and Law (610/5595/5)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-entrepreneurship" target="_blank">Qualifi Level 4 Diploma in Entrepreneurship (603/4238/9)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-business-management" target="_blank">Qualifi Level 4 Diploma in Business Management (601/6048/2)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-innovation-and-future-foresight" target="_blank">Qualifi Level 4 Diploma in Innovation and Future Foresight (610/2084/9)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-business-enterprise" target="_blank">Qualifi Level 5 Diploma in Business Enterprise (601/6050/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-business-management" target="_blank">Qualifi Level 5 Diploma in Business Management (601/6049/4)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-business-management" target="_blank">Qualifi Level 5 Extended Diploma in Business Management (610/1675/5)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-diploma-in-business-administration" target="_blank">Qualifi Level 6 Diploma in Business Administration (603/1037/6)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-diploma-in-business-management-leadership-and-innovation" target="_blank">Qualifi Level 6 Diploma in Business Management, Leadership and Innovation (603/7473/1)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-business-strategy" target="_blank">Qualifi Level 7 Diploma in Business Strategy (603/5745/9)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-ethical-leadership" target="_blank">Qualifi Level 7 Diploma in Ethical Leadership (603/4994/3)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-executive-management" target="_blank">Qualifi Level 7 Diploma in Executive Management (601/7656/8)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-strategic-management-and-innovation" target="_blank">Qualifi Level 7 Diploma in Strategic Management and Innovation (603/2900/2)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-strategic-management-and-leadership" target="_blank">Qualifi Level 7 Diploma in Strategic Management and Leadership (601/5335/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-project-management" target="_blank">Qualifi Level 7 Diploma in Project Management (610/1342/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-risk-management" target="_blank">Qualifi Level 7 Diploma in Risk Management (610/2175/1)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-8-diploma-in-strategic-management-and-leadership" target="_blank">Qualifi Level 8 Diploma in Strategic Management and Leadership (601/5362/3)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsetwo"
                                                aria-expanded="false"
                                                aria-controls="collapsetwo" style="padding: 10px 15px;font-size: 18px !important;">
                                               MARKETING
                                            </button>
                                        </h2>
                                        <div id="collapsetwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                                <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-strategic-marketing/" target="_blank">Qualifi Level 7 Diploma in Strategic Marketing (610/2615/3)</a></li>    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsethree"
                                                aria-expanded="false"
                                                aria-controls="collapsethree" style="padding: 10px 15px;font-size: 18px !important;">
                                               HEALTH AND SOCIAL CARE
                                            </button>
                                        </h2>
                                        <div id="collapsethree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                               <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-diploma-in-care" target="_blank">Qualifi Level 2 Diploma in Care (603/5128/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-adult-social-care-certificate" target="_blank">Qualifi Level 2 Adult Social Care Certificate (610/4201/8)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-award-in-basic-life-support-and-management-of-anaphylaxis" target="_blank">Qualifi Level 3 Award in Basic Life Support and Management of Anaphylaxis (610/3072/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-award-in-emergency-first-aid-at-work" target="_blank">Qualifi Level 3 Award in Emergency First Aid at Work (610/1767/X)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-health-and-social-care" target="_blank">Qualifi Level 3 Diploma in Health and Social Care (603/0819/9)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-health-and-social-care" target="_blank">Qualifi Level 3 Extended Diploma in Health and Social Care (610/5597/9)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-health-and-social-care" target="_blank">Qualifi Level 4 Diploma in Health and Social Care (601/5058/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-health-and-social-care" target="_blank">Qualifi Level 5 Diploma in Health and Social Care (601/5442/1)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-health-and-social-care" target="_blank">Qualifi Level 5 Extended Diploma in Health and Social Care (610/3288/8)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-health-and-social-care" target="_blank">Qualifi Level 7 Diploma in Health and Social Care (610/1483/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-relational-practice-in-mental-health" target="_blank">Qualifi Level 7 Diploma in Relational Practice in Mental Health (610/2836/8)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefour"
                                                aria-expanded="false"
                                                aria-controls="collapsefour" style="padding: 10px 15px;font-size: 18px !important;">
                                               PSYCHOLOGY
                                            </button>
                                        </h2>
                                        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                              <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-psychology" target="_blank">Qualifi Level 4 Diploma in Psychology (610/2149/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-psychology" target="_blank">Qualifi Level 5 Diploma in Psychology (610/2124/6)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-psychology" target="_blank">Qualifi Level 5 Extended Diploma in Psychology (610/3465/4)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-psychology" target="_blank">Qualifi Level 7 Diploma in Psychology (610/2064/3)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsefive"
                                                aria-expanded="false"
                                                aria-controls="collapsefive" style="padding: 10px 15px;font-size: 18px !important;">
                                               HEALTH AND SAFETY MANAGEMENT
                                            </button>
                                        </h2>
                                        <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                                <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-diploma-in-health-and-safety-management" target="_blank">Qualifi Level 6 Diploma in Health and Safety Management (610/2498/3)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-diploma-in-occupational-health-and-safety-management" target="_blank">Qualifi Level 6 Diploma in Occupational Health and Safety Management (603/5226/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-occupational-health-and-safety-management" target="_blank">Qualifi Level 7 Diploma in Occupational Health and Safety Management (610/2295/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-international-diploma-in-occupational-health-and-safety-management" target="_blank">Qualifi Level 7 International Diploma in Occupational Health and Safety Management (603/5639/X)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-international-diploma-in-process-safety-management" target="_blank">Qualifi Level 7 International Diploma in Process Safety Management (603/7608/9)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsesix"
                                                aria-expanded="false"
                                                aria-controls="collapsesix" style="padding: 10px 15px;font-size: 18px !important;">
                                               HOSPITALITY AND TOURISM MANAGEMENT
                                            </button>
                                        </h2>
                                        <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                               <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-hospitality-and-tourism-management" target="_blank">Qualifi Level 3 Diploma in Hospitality and Tourism Management (603/4400/3)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-hospitality-and-tourism-management" target="_blank">Qualifi Level 3 Extended Diploma in Hospitality and Tourism Management (610/5599/2)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-hospitality-and-tourism-management" target="_blank">Qualifi Level 4 Diploma in Hospitality and Tourism Management (603/4399/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-hospitality-and-tourism-management" target="_blank">Qualifi Level 5 Diploma in Hospitality and Tourism Management (603/4404/0)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-hospitality-and-tourism-management" target="_blank">Qualifi Level 5 Extended Diploma in Hospitality and Tourism Management (610/3386/8)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-hospitality-and-tourism-management" target="_blank">Qualifi Level 7 Diploma in Hospitality and Tourism Management (603/2655/4)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseseven"
                                                aria-expanded="false"
                                                aria-controls="collapseseven" style="padding: 10px 15px;font-size: 18px !important;">
                                              HUMAN RESOURCE MANAGEMENT
                                            </button>
                                        </h2>
                                        <div id="collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                               <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-human-resource-management" target="_blank">Qualifi Level 7 Diploma in Human Resource Management (603/0722/5)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="accordion-item" style="margin-bottom: 5px;">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseeight"
                                                aria-expanded="false"
                                                aria-controls="collapseeight" style="padding: 10px 15px;font-size: 18px !important;">
                                               ACCOUNTING AND FINANCE
                                            </button>
                                        </h2>
                                        <div id="collapseeight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                              <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-accounting-and-finance" target="_blank">Qualifi Level 3 Diploma in Accounting and Finance (610/0795/X)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-accounting-and-finance" target="_blank">Qualifi Level 4 Diploma in Accounting and Finance (610/0796/1)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-accounting-and-finance" target="_blank">Qualifi Level 5 Diploma in Accounting and Finance (610/0797/3)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-accounting-and-finance" target="_blank">Qualifi Level 5 Extended Diploma in Accounting and Finance (610/3329/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-accounting-and-finance" target="_blank">Qualifi Level 7 Diploma in Accounting and Finance (603/0723/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-asset-based-lending" target="_blank">Qualifi Level 7 Diploma in Asset-based Lending (610/0642/7)</a></li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-family-office-and-wealth-inheritance-management" target="_blank">Qualifi Level 7 Diploma in Family Office and Wealth Inheritance Management (610/2921/X)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLaw" aria-expanded="false" aria-controls="collapseLaw" style="padding: 10px 15px;font-size: 18px !important;">
                                                    LAW AND LEGAL SERVICES
                                                </button>
                                            </h2>
                                            <div id="collapseLaw" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-law" target="_blank">Qualifi Level 3 Diploma in Law (610/1282/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-law" target="_blank">Qualifi Level 4 Diploma in Law (610/1091/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-law" target="_blank">Qualifi Level 5 Diploma in Law (610/1092/3)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-business-and-law" target="_blank">Qualifi Level 3 Extended Diploma in Business and Law (610/5595/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-law" target="_blank">Qualifi Level 5 Extended Diploma in Law (610/3349/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-law" target="_blank">Qualifi Level 7 Diploma in Law (610/2558/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-international-business-law" target="_blank">Qualifi Level 7 Diploma in International Business Law (603/4199/3)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIT" aria-expanded="false" aria-controls="collapseIT" style="padding: 10px 15px;font-size: 18px !important;">
                                                    INFORMATION TECHNOLOGY
                                                </button>
                                            </h2>
                                            <div id="collapseIT" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-information-technology" target="_blank">Qualifi Level 3 Diploma in Information Technology (610/0659/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-it-and-cyber-security" target="_blank">Qualifi Level 3 Extended Diploma in IT and Cyber Security (610/5598/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-it-and-data-science" target="_blank">Qualifi Level 3 Extended Diploma in IT and Data Science (610/5600/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-information-technology" target="_blank">Qualifi Level 4 Diploma in Information Technology (603/4781/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-it-networking" target="_blank">Qualifi Level 4 Diploma in IT – Networking (603/4782/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-it-web-design" target="_blank">Qualifi Level 4 Diploma in IT – Web Design (603/4783/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-it-e-commerce" target="_blank">Qualifi Level 4 Diploma in IT – E-commerce (603/4786/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-internet-of-things-smart-home" target="_blank">Qualifi Level 4 Diploma in Internet of Things (Smart Home) (610/5031/3)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-information-technology" target="_blank">Qualifi Level 5 Diploma in Information Technology (603/4791/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-it-networking" target="_blank">Qualifi Level 5 Diploma in IT – Networking (603/4792/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-it-web-design" target="_blank">Qualifi Level 5 Diploma in IT – Web Design (603/4793/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-it-e-commerce" target="_blank">Qualifi Level 5 Diploma in IT – E-commerce (603/4794/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-networking-and-cyber-security" target="_blank">Qualifi Level 5 Extended Diploma in Networking and Cyber Security (610/3042/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-information-technology" target="_blank">Qualifi Level 5 Extended Diploma in Information Technology (610/3474/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-it-networking" target="_blank">Qualifi Level 5 Extended Diploma in IT-Networking (610/3475/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-it-web-design" target="_blank">Qualifi Level 5 Extended Diploma in IT-Web Design (610/3476/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-it-e-commerce" target="_blank">Qualifi Level 5 Extended Diploma in IT-E-commerce (610/3477/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-it" target="_blank">Qualifi Level 7 Diploma in IT (610/2170/2)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDataScience" aria-expanded="false" aria-controls="collapseDataScience" style="padding: 10px 15px;font-size: 18px !important;">
                                                    DATA SCIENCE
                                                </button>
                                            </h2>
                                            <div id="collapseDataScience" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-data-science" target="_blank">Qualifi Level 3 Diploma in Data Science (610/1950/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-it-and-data-science" target="_blank">Qualifi Level 3 Extended Diploma in IT and Data Science (610/5600/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-artificial-intelligence" target="_blank">Qualifi Level 4 Diploma in Artificial Intelligence (610/3934/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-artificial-intelligence" target="_blank">Qualifi Level 5 Diploma in Artificial Intelligence (610/3935/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-data-science" target="_blank">Qualifi Level 7 Diploma in Data Science (603/6693/X)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCyberSecurity" aria-expanded="false" aria-controls="collapseCyberSecurity" style="padding: 10px 15px;font-size: 18px !important;">
                                                    CYBER SECURITY
                                                </button>
                                            </h2>
                                            <div id="collapseCyberSecurity" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-diploma-in-business-beginners-in-cyber-security" target="_blank">Qualifi Level 2 Diploma in Business Beginners in Cyber Security (603/3329/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-cyber-security-management-and-operations" target="_blank">Qualifi Level 3 Diploma in Cyber Security Management and Operations (603/3334/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-extended-diploma-in-it-and-cyber-security" target="_blank">Qualifi Level 3 Extended Diploma in IT and Cyber Security (610/5598/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-cyber-security" target="_blank">Qualifi Level 4 Diploma in Cyber Security (603/3331/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-cyber-security" target="_blank">Qualifi Level 5 Diploma in Cyber Security (603/4139/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-cyber-security" target="_blank">Qualifi Level 5 Extended Diploma in Cyber Security (610/3296/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-cyber-security" target="_blank">Qualifi Level 7 Diploma in Cyber Security (610/3596/8)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLogistics" aria-expanded="false" aria-controls="collapseLogistics" style="padding: 10px 15px;font-size: 18px !important;">
                                                    LOGISTICS AND SUPPLY CHAIN MANAGEMENT
                                                </button>
                                            </h2>
                                            <div id="collapseLogistics" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-logistics-and-supply-chain-crisis-management" target="_blank">Qualifi Level 7 Diploma in Logistics and Supply Chain Crisis Management (603/6067/7)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEarlyYears" aria-expanded="false" aria-controls="collapseEarlyYears" style="padding: 10px 15px;font-size: 18px !important;">
                                                    EARLY YEARS EDUCATION
                                                </button>
                                            </h2>
                                            <div id="collapseEarlyYears" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-early-years-education-and-care-early-years-educator" target="_blank">Qualifi Level 3 Diploma in Early Years Education and Care (Early Years Educator) (610/0013/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-specialist-support-for-teaching-and-learning-in-schools" target="_blank">Qualifi Level 3 Diploma in Specialist Support for Teaching and Learning in Schools (603/7690/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-early-learning-and-childcare" target="_blank">Qualifi Level 4 Diploma in Early Learning and Childcare (610/0227/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-early-learning-and-childcare" target="_blank">Qualifi Level 5 Diploma in Early Learning and Childcare (610/0226/4)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEducationTraining" aria-expanded="false" aria-controls="collapseEducationTraining" style="padding: 10px 15px;font-size: 18px !important;">
                                                    EDUCATION AND TRAINING
                                                </button>
                                            </h2>
                                            <div id="collapseEducationTraining" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-award-in-education-and-training" target="_blank">Qualifi Level 3 Award in Education and Training (603/5680/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-education-and-training" target="_blank">Qualifi Level 4 Certificate in Education and Training (603/6042/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-education-and-training" target="_blank">Qualifi Level 4 Diploma in Education and Training (610/3647/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-education-and-training" target="_blank">Qualifi Level 5 Diploma in Education and Training (603/6055/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-extended-diploma-in-education-and-training-management" target="_blank">Qualifi Level 5 Extended Diploma in Education and Training Management (610/3648/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-educational-management-and-leadership" target="_blank">Qualifi Level 7 Diploma in Educational Management and Leadership (603/6176/1)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTeachingCoaching" aria-expanded="false" aria-controls="collapseTeachingCoaching" style="padding: 10px 15px;font-size: 18px !important;">
                                                    TEACHING AND COACHING
                                                </button>
                                            </h2>
                                            <div id="collapseTeachingCoaching" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-teaching-english-as-a-foreign-language-tefl-the-tefl-academy" target="_blank">Qualifi Level 3 Certificate in Teaching English as a Foreign Language (TEFL) (The TEFL Academy) (603/7201/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-observed-teaching-practice-tefl-the-tefl-academy" target="_blank">Qualifi Level 5 Certificate in Observed Teaching Practice (TEFL) (The TEFL Academy) (603/4315/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-teaching-english-as-a-foreign-language-tefl-the-tefl-academy" target="_blank">Qualifi Level 5 Diploma in Teaching English as a Foreign Language (TEFL) (The TEFL Academy) (603/3835/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-teaching-english-to-speakers-of-other-languages-tesol-the-tefl-academy" target="_blank">Qualifi Level 5 Diploma in Teaching English to Speakers of Other Languages (TESOL) (The TEFL Academy) (610/3864/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-teaching-english-as-a-foreign-language-with-practice-certtefl-the-tefl-academy" target="_blank">Qualifi Level 5 Certificate in Teaching English as a Foreign Language with Practice (CertTEFL) (The TEFL Academy) (603/5428/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-health-and-wellness-coaching" target="_blank">Qualifi Level 5 Diploma in Health and Wellness Coaching (610/1538/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-diploma-in-global-teaching-practice" target="_blank">Qualifi Level 6 Diploma in Global Teaching Practice (603/6814/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-extended-diploma-in-global-teaching-practice" target="_blank">Qualifi Level 6 Extended Diploma in Global Teaching Practice (603/6815/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-coaching" target="_blank">Qualifi Level 4 Diploma in Coaching (603/1280/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-integrative-sport-and-exercise-nutrition" target="_blank">Qualifi Level 7 Diploma in Integrative Sport and Exercise Nutrition (610/3609/2)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSportsCoaching" aria-expanded="false" aria-controls="collapseSportsCoaching" style="padding: 10px 15px;font-size: 18px !important;">
                                                    SPORTS COACHING
                                                </button>
                                            </h2>
                                            <div id="collapseSportsCoaching" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-the-principles-of-cricket-coaching-r66t-academy" target="_blank">Qualifi Level 3 Diploma in the Principles of Cricket Coaching (R66T Academy) (610/3153/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-activating-high-performance-in-soccer-coaching" target="_blank">Qualifi Level 3 Certificate in Activating High Performance in Soccer Coaching (610/3527/0)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAestheticPractice" aria-expanded="false" aria-controls="collapseAestheticPractice" style="padding: 10px 15px;font-size: 18px !important;">
                                                    AESTHETIC PRACTICE
                                                </button>
                                            </h2>
                                            <div id="collapseAestheticPractice" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-award-in-basic-life-support-and-management-of-anaphylaxis-in-clinical-practice" target="_blank">Qualifi Level 3 Award in Basic Life Support and Management of Anaphylaxis in Clinical Practice (610/5316/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-anatomy-and-physiology-for-aesthetics-practice" target="_blank">Qualifi Level 4 Certificate in Anatomy and Physiology for Aesthetics Practice (603/7469/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-plasma-skin-rejuvenation" target="_blank">Qualifi Level 4 Certificate in Plasma Skin Rejuvenation (603/7775/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-microblading-to-enhance-eyebrows" target="_blank">Qualifi Level 4 Certificate in Microblading to Enhance Eyebrows (603/7797/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-micropigmentation-to-enhance-eyebrows" target="_blank">Qualifi Level 4 Certificate in Micropigmentation to Enhance Eyebrows (603/7851/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-micropigmentation-to-enhance-eyes" target="_blank">Qualifi Level 4 Certificate in Micropigmentation to Enhance Eyes (603/7799/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-micropigmentation-to-enhance-lips" target="_blank">Qualifi Level 4 Certificate in Micropigmentation to Enhance Lips (603/7798/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-micropigmentation" target="_blank">Qualifi Level 4 Diploma in Micropigmentation (603/7789/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-aesthetic-practice" target="_blank">Qualifi Level 4 Certificate in Aesthetic Practice (610/1195/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-award-in-laser-core-of-knowledge" target="_blank">Qualifi Level 4 Award in Laser Core of Knowledge (610/5706/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-certificate-in-laser-light-and-energy-based-procedures" target="_blank">Qualifi Level 4 Certificate in Laser, Light and Energy-Based Procedures (610/1194/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-diploma-in-aesthetic-procedures-for-skin-rejuvenation" target="_blank">Qualifi Level 4 Diploma in Aesthetic Procedures for Skin Rejuvenation (610/1193/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-award-in-needlestick-injury-infection-prevention-and-control" target="_blank">Qualifi Level 5 Award in Needlestick Injury, Infection Prevention and Control (610/6077/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-tattoo-fade-and-removal" target="_blank">Qualifi Level 5 Certificate in Tattoo Fade and Removal (610/5707/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-advanced-aesthetic-procedures-chemical-peels" target="_blank">Qualifi Level 5 Certificate in Advanced Aesthetic Procedures: Chemical Peels (610/6075/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-advanced-aesthetic-procedures-micro-needling" target="_blank">Qualifi Level 5 Certificate in Advanced Aesthetic Procedures: Micro-needling (610/6076/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-aesthetic-practice" target="_blank">Qualifi Level 5 Certificate in Aesthetic Practice (603/5209/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-aesthetic-practice" target="_blank">Qualifi Level 5 Diploma in Aesthetic Practice (610/6070/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-advanced-diploma-in-aesthetic-practice" target="_blank">Qualifi Level 5 Advanced Diploma in Aesthetic Practice (610/6074/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-award-in-advanced-aesthetic-procedures-chemical-peels" target="_blank">Qualifi Level 6 Award in Advanced Aesthetic Procedures: Chemical Peels (610/6078/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-6-award-in-advanced-aesthetic-procedures-micro-needling" target="_blank">Qualifi Level 6 Award in Advanced Aesthetic Procedures: Micro-needling (610/6079/3)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-certificate-in-aesthetic-practice" target="_blank">Qualifi Level 7 Certificate in Aesthetic Practice (603/5210/3)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBeautyTherapy" aria-expanded="false" aria-controls="collapseBeautyTherapy" style="padding: 10px 15px;font-size: 18px !important;">
                                                    BEAUTY THERAPY
                                                </button>
                                            </h2>
                                            <div id="collapseBeautyTherapy" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-diploma-in-beauty-therapy" target="_blank">Qualifi Level 2 Diploma in Beauty Therapy (603/7713/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-diploma-in-beauty-treatments" target="_blank">Qualifi Level 2 Diploma in Beauty Treatments (603/7714/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-facial-skincare" target="_blank">Qualifi Level 2 Certificate in Facial Skincare (603/7715/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-lash-and-brow-treatments" target="_blank">Qualifi Level 2 Certificate in Lash and Brow Treatments (603/7716/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-nail-treatments" target="_blank">Qualifi Level 2 Certificate in Nail Treatments (603/7717/3)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-waxing-treatments" target="_blank">Qualifi Level 2 Certificate in Waxing Treatments (603/7718/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-makeup-techniques" target="_blank">Qualifi Level 2 Certificate in Makeup Techniques (603/7719/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-advanced-beauty-therapy" target="_blank">Qualifi Level 3 Diploma in Advanced Beauty Therapy (610/0610/5)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-body-electrotherapy" target="_blank">Qualifi Level 3 Diploma in Body Electrotherapy (610/0611/7)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-epilation" target="_blank">Qualifi Level 3 Diploma in Epilation (610/0612/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-facial-electrotherapy" target="_blank">Qualifi Level 3 Certificate in Facial Electrotherapy (610/0613/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-advanced-lashes-and-brow-lamination" target="_blank">Qualifi Level 3 Certificate in Advanced Lashes and Brow Lamination (610/0614/2)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-intimate-waxing" target="_blank">Qualifi Level 3 Certificate in Intimate Waxing (610/0615/4)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHairdressing" aria-expanded="false" aria-controls="collapseHairdressing" style="padding: 10px 15px;font-size: 18px !important;">
                                                    HAIRDRESSING
                                                </button>
                                            </h2>
                                            <div id="collapseHairdressing" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-diploma-in-hairdressing" target="_blank">Qualifi Level 2 Diploma in Hairdressing (603/7726/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-cut-and-finish-hair-services" target="_blank">Qualifi Level 2 Certificate in Cut and Finish Hair Services (603/7727/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-colour-and-lighten-hair-services" target="_blank">Qualifi Level 2 Certificate in Colour and Lighten Hair Services (603/7728/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-set-style-and-finish-hair-services" target="_blank">Qualifi Level 2 Certificate in Set, Style, and Finish Hair Services (603/7729/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-certificate-in-smoothing-and-straightening-hair-services" target="_blank">Qualifi Level 2 Certificate in Smoothing and Straightening Hair Services (603/7730/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-2-diploma-in-barbering" target="_blank">Qualifi Level 2 Diploma in Barbering (GBBA) (610/0691/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-advanced-and-creative-hairdressing" target="_blank">Qualifi Level 3 Diploma in Advanced and Creative Hairdressing (610/0503/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-advanced-and-creative-hairdressing" target="_blank">Qualifi Level 3 Certificate in Advanced and Creative Hairdressing (610/0502/2)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWellness" aria-expanded="false" aria-controls="collapseWellness" style="padding: 10px 15px;font-size: 18px !important;">
                                                    WELLNESS
                                                </button>
                                            </h2>
                                            <div id="collapseWellness" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-wellbeing-and-holistic-therapies" target="_blank">Qualifi Level 3 Diploma in Wellbeing and Holistic Therapies (610/0176/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-spa-and-wellness-experiences" target="_blank">Qualifi Level 3 Certificate in Spa and Wellness Experiences (610/0177/6)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-massage" target="_blank">Qualifi Level 3 Certificate in Massage (610/0178/8)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-anatomy-physiology-and-pathology" target="_blank">Qualifi Level 3 Certificate in Anatomy, Physiology and Pathology (610/0179/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-diploma-in-massage-therapy" target="_blank">Qualifi Level 3 Diploma in Massage Therapy (610/0182/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-thai-massage" target="_blank">Qualifi Level 3 Certificate in Thai Massage (610/0193/4)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-nutrition-and-health-coaching" target="_blank">Qualifi Level 5 Diploma in Nutrition and Health Coaching (610/2579/3)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-diploma-in-coaching-for-lifestyle-and-wellbeing-management" target="_blank">Qualifi Level 5 Diploma in Coaching for Lifestyle and Wellbeing Management (610/2580/X)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-human-nutrition-and-gut-microbiome" target="_blank">Qualifi Level 5 Certificate in Human Nutrition and Gut Microbiome (610/2578/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-5-certificate-in-wellbeing-coaching" target="_blank">Qualifi Level 5 Certificate in Wellbeing Coaching (610/2581/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-7-diploma-in-health-and-wellness-coaching" target="_blank">Qualifi Level 7 Diploma in Health and Wellness Coaching (603/2953/1)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQualityAssurance" aria-expanded="false" aria-controls="collapseQualityAssurance" style="padding: 10px 15px;font-size: 18px !important;">
                                                    QUALITY ASSURANCE, TEACHING AND ASSESSMENT – FOR CENTRE STAFF AND ASSESSORS
                                                </button>
                                            </h2>
                                            <div id="collapseQualityAssurance" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-3-certificate-in-assessing-vocational-achievement" target="_blank">Qualifi Level 3 Certificate in Assessing Vocational Achievement (603/5650/9)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-award-in-understanding-the-principles-and-practices-of-internally-assuring-the-quality-of-assessment" target="_blank">Qualifi Level 4 Award in Understanding the Principles and Practices of Internally Assuring the Quality of Assessment (603/6792/1)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-award-in-the-internal-quality-assurance-of-assessment-processes-and-practice" target="_blank">Qualifi Level 4 Award in the Internal Quality Assurance of Assessment Processes and Practice (603/5651/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-award-in-understanding-the-external-quality-assurance-of-assessment-processes-and-practice" target="_blank">Qualifi Level 4 Award in Understanding the External Quality Assurance of Assessment Processes and Practice (603/6878/0)</a></li>
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/qualifi-level-4-award-in-the-external-quality-assurance-of-assessment-processes-and-practice" target="_blank">Qualifi Level 4 Award in the External Quality Assurance of Assessment Processes and Practice (603/6877/9)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" style="margin-bottom: 5px;">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQualifiFreeTutorial" aria-expanded="false" aria-controls="collapseQualifiFreeTutorial" style="padding: 10px 15px;font-size: 18px !important;">
                                                    Qualifi Free Tutorial
                                                </button>
                                            </h2>
                                            <div id="collapseQualifiFreeTutorial" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body custom-accordion-body">
                                                    <ul class="degree-list">
                                                        <li><i class="fas fa-graduation-cap me-2"></i><a href="https://qualifi.net/academic-writing-skills/" target="_blank">Academic Writing Skills</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>

                        <!-- Right: Image -->
                       <div class="col-lg-5">
                            <img src="frontend/assets/images/avid/e1.jpg" alt="Business Degrees" class="img-fluid rounded shadow" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>

                    </div>


            </div>
        </div>
    </div>
    </div>
    <!-- project details area top -->

@endsection
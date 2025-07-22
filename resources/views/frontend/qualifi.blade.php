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


</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/qualifi/qualifi1.jpg') }}'); background-size: cover; background-position: center;">
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
                                    <ul style="padding-left: 20px; margin-top: 10px;">
                                        <li>Regulated UK Awarding Organization (Ofqual Recognized RN5160)</li>
                                        <li>Strict assessment standards ensuring consistency and quality</li>
                                        <li>A diverse portfolio of regulated and bespoke qualifications</li>
                                        <li>International applicability and recognition</li>
                                        <li>Vocational training pathways and university degree routes</li>
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
                                    <ul style="padding-left: 20px; margin-top: 10px; ">
                                        <li>Career-ready diplomas across various industries</li>
                                        <li>Online access and part-time options</li>
                                        <li>Ideal for migration, study abroad, or professional advancement</li>
                                        <li>Direct entry to UK Top-Up Bachelor's and MBA programs</li>
                                        <li>QUALIFI diplomas from Level 3 to Level 7</li>
                                        <li>Affordable and recognized worldwide</li>
                                        <li>Available Study Abroad Opportunities Upon Program Completion</li>
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

                    <div class="row mb--40">
                        <div class="col-lg-12">
                            <div class="single-project-info-wrapper-inner">
                                <h4 class="title">Progression Pathways: Your Route to a Degree or Career Boost</h4>
                                <p class="disc" style="font-size:18px; text-align:justify">
                          QUALIFI programs are built with progression in mind, offering clear academic and
professional development routes:
                                </p>

                                            <ul style="padding-left: 20px; margin-top: 10px; ">
                                                <li><strong>Top-Up Degrees:</strong> Advance to final-year Bachelor&#39;s or Master&#39;s degrees at UK or
international universities.</li>
                                               <li><strong>MBA & Master’s Entry:</strong> Use your QUALIFI Level 7 diploma as a direct entry
route to prestigious MBA and MSc programs worldwide.</li>
                                               <li><strong>Career Advancement:</strong>  Gain the practical knowledge and credentials to move
forward in your career, whether locally or abroad.</li>
                                               <li><strong>Study Abroad & Migration:</strong> QUALIFI’s global recognition ensures smooth
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
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne"
                                                aria-expanded="false"
                                                aria-controls="collapseOne" style="padding: 10px 15px;font-size: 18px !important;">
                                                BUSINESS AND MANAGEMENT
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body custom-accordion-body">
                                                <ul class="degree-list">
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Diploma in Business Management (603/1102/2)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Diploma in Introduction to Management (603/4373/4)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Integrated Diploma in Business and Management (603/4730/2)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Diploma in Business Innovation and Entrepreneurship (603/1051/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Extended Diploma in Business, Management and Study Skills (603/7380/5)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Extended Diploma in Business Management (610/5596/7)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Extended Diploma in Business and Law (610/5595/5)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Entrepreneurship (603/4238/9)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Business Management (601/6048/2)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Innovation and Future Foresight (610/2084/9)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Diploma in Business Enterprise (601/6050/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Diploma in Business Management (601/6049/4)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Extended Diploma in Business Management (610/1675/5)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 6 Diploma in Business Administration (603/1037/6)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 6 Diploma in Business Management, Leadership and Innovation (603/7473/1)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Business Strategy (603/5745/9)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Ethical Leadership (603/4994/3)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Executive Management (601/7656/8)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Strategic Management and Innovation (603/2900/2)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Strategic Management and Leadership (601/5335/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Project Management (610/1342/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Risk Management (610/2175/1)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 8 Diploma in Strategic Management and Leadership (601/5362/3)</li>
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
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Strategic Marketing (610/2615/3)</li>
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
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 2 Diploma in Care (603/5128/7)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 2 Adult Social Care Certificate (610/4201/8)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Award in Basic Life Support and Management of Anaphylaxis (610/3072/7)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Award in Emergency First Aid at Work (610/1767/X)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Diploma in Health and Social Care (603/0819/9)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Extended Diploma in Health and Social Care (610/5597/9)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Health and Social Care (601/5058/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Diploma in Health and Social Care (601/5442/1)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Extended Diploma in Health and Social Care (610/3288/8)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Health and Social Care (610/1483/7)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Relational Practice in Mental Health (610/2836/8)</li>
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
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Psychology (610/2149/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Diploma in Psychology (610/2124/6)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Extended Diploma in Psychology (610/3465/4)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Psychology (610/2064/3)</li>
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
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 6 Diploma in Health and Safety Management (610/2498/3)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 6 Diploma in Occupational Health and Safety Management (603/5226/7)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Occupational Health and Safety Management (610/2295/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 International Diploma in Occupational Health and Safety Management (603/5639/X)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 International Diploma in Process Safety Management (603/7608/9)</li>
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
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Diploma in Hospitality and Tourism Management (603/4400/3)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Extended Diploma in Hospitality and Tourism Management (610/5599/2)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Hospitality and Tourism Management (603/4399/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Diploma in Hospitality and Tourism Management (603/4404/0)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Extended Diploma in Hospitality and Tourism Management (610/3386/8)</li>
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Hospitality and Tourism Management (603/2655/4)</li>
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
                                                    <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Human Resource Management (603/0722/5)</li>
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
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 3 Diploma in Accounting and Finance (610/0795/X)</li>
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 4 Diploma in Accounting and Finance (610/0796/1)</li>
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Diploma in Accounting and Finance (610/0797/3)</li>
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 5 Extended Diploma in Accounting and Finance (610/3329/7)</li>
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Accounting and Finance (603/0723/7)</li>
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Asset-based Lending (610/0642/7)</li>
                                                <li><i class="fas fa-graduation-cap me-2"></i>Qualifi Level 7 Diploma in Family Office and Wealth Inheritance Management (610/2921/X)</li>
                                            </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Image -->
                        <div class="col-lg-5">
                            <img src="frontend/assets/images/qualifi/03.jpg" alt="Business Degrees" class="img-fluid rounded shadow">
                        </div>
                    </div>


            </div>
        </div>
    </div>
    </div>
    <!-- project details area top -->

@endsection
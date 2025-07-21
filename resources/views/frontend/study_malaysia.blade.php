
@extends ('frontend.master')

@section('content')
<style>
    /* ------------------------------------------------our esteemed partners section ----------------------------------- */

.logo-marquee-container {
    overflow: hidden;
    position: relative;
    width: 100%;
    background-color: transparent;
    padding: 20px 0;
}

.logo-marquee-track {
    display: flex;
    width: fit-content;
    animation: scroll-marquee 40s linear infinite;
}

.logo-marquee {
    display: flex;
    gap: 80px;
    align-items: center;
}

.logo-marquee img {
    height: 70px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.logo-marquee img:hover {
    transform: scale(1.1);
    
    opacity: 1;
}

/* Scrolling Animation */
@keyframes scroll-marquee {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}


</style>
<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/avid/mba.jpg') }}'); background-size: cover; background-position: top; height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">  Why Study in Malaysia? </h2>
        <p class="bg-content">  </p>
    </div>

    <div class="row g-4 mb-5">
        

        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                 Malaysia has emerged as a premier destination for international students seeking high-quality education, 
                 vibrant cultural experiences, and affordable living costs. Its unique blend of tradition and modernity makes 
                 it an ideal place to pursue academic and personal growth.
                  Here’s a comprehensive look at why studying in Malaysia is a smart choice in today’s globalized world.
                </p>
                <div class="service-details-left-area mt--0 ">

                    <!-- Service 1 -->
                    <div class="" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>1</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">World-Class Education at Affordable Costs</h5>
                                <p class="disc" style="text-align: justify;">
                                   Malaysia offers a wide range of programs at universities that are recognized worldwide. Top-ranked institutions like Universiti Malaya (UM), Universiti Putra Malaysia (UPM), and Monash University Malaysia provide quality education in fields such as engineering, business, medicine, and technology. Compared to Western countries, tuition fees and living expenses are significantly lower, making Malaysia an accessible option for students from diverse economic backgrounds.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>2</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Strategic Location and Cultural Diversity</h5>
                                <p class="disc" style="text-align: justify;">
                                   Situated at the crossroads of Asia, Malaysia provides a gateway to explore the dynamic Asia-Pacific region. Its strategic location facilitates travel and internships across neighboring countries like Singapore, Thailand, Indonesia, and Australia. 
Moreover, Malaysia’s multicultural society—comprising Malays, Chinese, Indians, and indigenous groups—creates a rich, inclusive environment. Students learn valuable intercultural skills and develop a global perspective through interactions with diverse communities.

                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>3</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">English-Medium Education</h5>
                                <p class="disc" style="text-align: justify;">
                                   English is the medium of instruction in most Malaysian universities and colleges, enabling international students to study comfortably without language barriers. This also enhances employability, as graduates are well-equipped with English communication skills valued across global industries.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>4</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Modern Infrastructure and Student-Friendly Facilities</h5>
                                <p class="disc" style="text-align: justify;">
                                  Malaysian universities boast state-of-the-art facilities, research centers, and modern campus environments. Cities like Kuala Lumpur, Penang, and Johor Bahru are home to vibrant student communities, affordable accommodation, excellent public transportation, and urban amenities that cater to student needs.
                                </p>
                            </div>
                        </div>
                    </div>


                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>5</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Opportunities for Internships and Work Experience</h5>
                                <p class="disc" style="text-align: justify;">
                                 Malaysia’s thriving economy offers numerous opportunities for internships, part-time jobs, and industry projects. Universities often collaborate with local and international businesses, providing students with real-world experience and pathways to employment post-graduation.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>6</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Safety and Quality of Life</h5>
                                <p class="disc" style="text-align: justify;">
                                Malaysia is known for its friendly and hospitable people, making it a safe destination for international students. The cost of living is lower than many Western countries, allowing students to enjoy a comfortable lifestyle without financial stress.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>7</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Rich Cultural and Natural Experiences</h5>
                                <p class="disc" style="text-align: justify;">
                                 Beyond academics, Malaysia is a country of breathtaking landscapes, vibrant festivals, unique cuisines, and historical sites. Students can enjoy exploring rainforests, islands, and modern cities, enriching their personal growth and cultural awareness.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>8</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Post-Study Opportunities and Immigration Options</h5>
                                <p class="disc" style="text-align: justify;">
                                  Malaysia offers post-study work opportunities (T & C Applied) and pathways to permanent residency for international graduates, especially those enrolled in specific programs. This makes it an attractive destination for students planning to build careers in Asia.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="rts-service-details-area-main-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                
            </div>
        </div>
    </div>
</div>
<!-- rts business details area left main end -->


<div class="container" style="padding-bottom: 120px;" >
    <div  style="padding: 50px; background-color: #f9f9f9; font-family: Arial, sans-serif; color: #1b2954;">
        
        <!-- Intro Section -->
        <h2 style="color: #1b2954; margin-bottom: 10px;">Ready to explore your study options?</h2>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 30px;">
           Malaysia combines affordability, quality education, cultural richness, and strategic location, making it an excellent choice for students aiming to gain international exposure and skills. Whether you’re pursuing undergraduate, postgraduate, or professional development, Malaysia offers a vibrant, inclusive, and growth-oriented environment to achieve your academic and career goals.
            <strong style="color: #ed3532;">Contact us today </strong> to discover top universities and programs in Malaysia tailored to your ambitions!
        </p>

        <!-- Section Title -->
        <h3 style="margin-bottom: 20px; font-size: 20px; color: #ed3532; border-left: 5px solid #ed3532; padding-left: 10px;">
            Essential Info Kit
        </h3>

        <!-- Link List -->
        <ul style="list-style: none; padding-left: 0;">
            <li style="margin-bottom: 12px;">
                <a href="https://www.imi.gov.my/index.php/en/main-services/pass/student-pass/" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    Study Pass
                </a>
            </li>
            <li style="margin-bottom: 12px;">
                <a href="https://visa.educationmalaysia.gov.my/graduate-pass" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    Graduate Pass
                </a>
            </li>
            <li style="margin-bottom: 12px;">
                <a href="https://educationmalaysia.gov.my/plan-your-studies/discover-malaysia/malaysia-at-a-glance" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    Malaysia at a Glance
                </a>
            </li>
            <li style="margin-bottom: 12px;">
                <a href="https://educationmalaysia.gov.my/living-in-malaysia/careers/paths-after-university" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    Pathway After University
                </a>
            </li>
            <li style="margin-bottom: 12px;">
                <a href="https://educationmalaysia.gov.my/living-in-malaysia/tips-on-everyday-life/accommodation-for-students" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    Accommodation
                </a>
            </li>
            <li style="margin-bottom: 12px;">
                <a href="https://educationmalaysia.gov.my/plan-your-studies/plan-your-budget/cost-of-living" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    Cost of Living
                </a>
            </li>
            <li style="margin-bottom: 12px;">
                <a href="https://educationmalaysia.gov.my/get-in-touch/news" 
                style="color: #1b2954; text-decoration: underline; font-style: italic;">
                    News Updates
                </a>
            </li>
        </ul>
    </div>
</div>




   <!-- rts Esteemed Clients start -->
<div class="rts-client-area ptb--100 brand-bg-three bg_image mb--100">
        <h3 style="text-align:center;margin-bottom: 30px; font-size: 20px; color: #ed3532;">
                 Explore Your Dream Institutions
        </h3>
    <div class="logo-marquee-container">
        <div class="logo-marquee-track">
            <!-- Repeat logos for seamless loop -->
            <div class="logo-marquee">
                <img src="frontend/assets/images/malaysia/Picture1.png" alt="Picture 1">
                <img src="frontend/assets/images/malaysia/Picture2.png" alt="Picture 2">
                <img src="frontend/assets/images/malaysia/Picture3.png" alt="Picture 3">
                <img src="frontend/assets/images/malaysia/Picture4.png" alt="Picture 4">
                <img src="frontend/assets/images/malaysia/Picture5.png" alt="Picture 5">
                <img src="frontend/assets/images/malaysia/Picture6.png" alt="Picture 6">
                <img src="frontend/assets/images/malaysia/Picture7.png" alt="Picture 7">
                <img src="frontend/assets/images/malaysia/Picture8.png" alt="Picture 8">
                <img src="frontend/assets/images/malaysia/Picture9.png" alt="Picture 9">
                <img src="frontend/assets/images/malaysia/Picture10.png" alt="Picture 10">
            </div>
            
        </div>
    </div>
</div>
<!-- rts galllery area end -->
@endsection
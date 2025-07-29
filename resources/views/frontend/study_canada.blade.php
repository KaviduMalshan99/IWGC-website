
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



    .info-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }


</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/01.2.webp') }}'); background-size: cover; background-position: top; height: 400px;position: relative;">
</div>
<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Why Study in Canada?</h2>
        <p class="bg-content">  </p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-12 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                  Canada is renowned as one of the world's top destinations for international students, offering a unique blend of quality education, diverse culture, and unparalleled opportunities. Here are compelling reasons why studying in Canada can be a transformative experience:
                </p>
                 <div class="service-details-left-area mt--0">

                    <!-- Service 1 -->
                    <div class="" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>1</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">High-Quality Education</h5>
                                <p class="disc" style="text-align: justify;">
                                    Canada is home to some of the world’s top universities and colleges, renowned for their academic excellence, research facilities, and innovative teaching methods. Institutions such as the University of Toronto, McGill University, and the University of British Columbia consistently rank among the best globally, providing students with a robust and comprehensive education.
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
                                <h5 class="title-sm">Affordable Tuition Fees</h5>
                                <p class="disc" style="text-align: justify;">
                                   Compared to other top study destinations like the United States and the UK, Canada offers competitive and more affordable tuition fees without compromising on quality. Additionally, numerous scholarships and financial aid options are available for international students, making higher education more accessible.
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
                                <h5 class="title-sm">Diverse and Inclusive Environment</h5>
                                <p class="disc" style="text-align: justify;">
                                    Canada prides itself on its multicultural society, welcoming students from all around the world. This diversity fosters a rich cultural exchange, broadens perspectives, and helps students develop global connections. It’s a place where everyone feels valued and accepted.
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
                                <h5 class="title-sm">Work Opportunities</h5>
                                <p class="disc" style="text-align: justify;">
                                    International students in Canada are allowed to work part-time during their studies and gain practical work experience through co-op programs, internships, and research positions. Post-graduation work permits enable students to stay and work in Canada for up to three years after completing their studies, opening pathways to permanent residency.
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
                                <h5 class="title-sm">Safe and Friendly Country</h5>
                                <p class="disc" style="text-align: justify;">
                                   Canada consistently ranks as one of the safest countries in the world. Its friendly and welcoming communities provide a comfortable environment for international students to live, learn, and thrive.
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
                                <h5 class="title-sm">Quality of Life</h5>
                                <p class="disc" style="text-align: justify;">
                                   Canada offers a high standard of living, excellent healthcare, clean environment, and numerous recreational activities. The country's natural beauty—from stunning national parks to vibrant cities—provides an exceptional quality of life.
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
                                <h5 class="title-sm">Pathway to Immigration</h5>
                                <p class="disc" style="text-align: justify;">
                                   Canada’s progressive immigration policies make it easier for international students to transition to permanent residency. This pathway offers students a chance to build a long-term future in Canada.
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
                                <h5 class="title-sm">Research and Innovation</h5>
                                <p class="disc" style="text-align: justify;">
                                  Canada invests heavily in research and innovation. Students have access to cutting-edge facilities and resources, and can participate in groundbreaking projects across various disciplines.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="\" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>9</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Cultural and Extracurricular Opportunities</h5>
                                <p class="disc" style="text-align: justify;">
                                   With a vibrant arts scene, diverse cuisine, and numerous festivals, Canada provides a lively social environment. Students can participate in sports, cultural events, and community service, enriching their university experience.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




 


<div class="container" style="padding-bottom: 30px;">
    <div style="padding: 50px; background-color: #f9f9f9; font-family: Arial, sans-serif; color: #1b2954;">

        <!-- Intro Section -->
        <h2 style="color: #1b2954; margin-bottom: 10px;">Ready to embark on your Canada study journey?</h2>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 30px;">
            Studying in Canada means access to world-class education, opportunities for personal and professional growth, and an unforgettable cultural experience. 
            <strong style="color: #ed3532;">Start your journey today</strong> and open the door to a brighter future with Canada as your study destination.
        </p>

        <!-- Section Title -->
        <h3 style="
            margin-bottom: 30px; 
            font-size: 22px; 
            background: linear-gradient(90deg, #1b2954, #f5b100, #ed3532);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
            text-transform: uppercase;
            border-left: 5px solid #ed3532;
            padding-left: 12px;
        ">
            Essential Info Kit
        </h3>

        <!-- Info Cards Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
            <!-- Card Template -->
            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #ed3532;">
                <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada/study-permit.html" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">Study Permit</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Learn everything about the process of obtaining a study permit to study in Canada.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #f5b100;">
                <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada/work/after-graduation/about.html" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #f5b100; font-weight: bold; margin-bottom: 10px;">PGWP (Post-Graduation Work Permit)</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Explore the opportunities available to work in Canada after graduation with a PGWP.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #1b2954;">
                <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/settle-canada.html" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #1b2954; font-weight: bold; margin-bottom: 10px;">Settling in Canada</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Information and resources on how to settle and adapt to life in Canada.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #ed3532;">
                <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada/work.html" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">Student Work</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Explore your options for working while studying in Canada.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #f5b100;">
                <a href="https://www.educanada.ca/study-plan-etudes/before-avant/housing-logement.aspx?lang=eng" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #f5b100; font-weight: bold; margin-bottom: 10px;">Accommodation</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Find out about housing options before you arrive in Canada.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #1b2954;">
                <a href="https://www.canada.ca/en/health-canada/services/canada-health-care-system.html" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #1b2954; font-weight: bold; margin-bottom: 10px;">Healthcare</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Learn about the healthcare system in Canada and how to access services.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #ed3532;">
                <a href="https://www.canada.ca/en/news.html" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">New Updates</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Stay updated with the latest news and announcements in Canada.</p>
                </a>
            </div>
        </div>
    </div>
</div>



   <!-- rts Esteemed Clients start -->
<div class="rts-client-area ptb--100 brand-bg-three bg_image mb--100">
        <h3 style="text-align:center;margin-bottom: 30px; font-size: 25px; color: #ed3532;">
                 Explore Your Dream Institutions
        </h3>
    <div class="logo-marquee-container">
        <div class="logo-marquee-track">
            <!-- Repeat logos for seamless loop -->
            <div class="logo-marquee">
                <img src="frontend/assets/images/canada/Picture1.png" alt="Picture 1">
                <img src="frontend/assets/images/canada/Picture2.png" alt="Picture 2">
                <img src="frontend/assets/images/canada/Picture3.png" alt="Picture 3">
                <img src="frontend/assets/images/canada/Picture4.png" alt="Picture 4">
                <img src="frontend/assets/images/canada/Picture5.png" alt="Picture 5">
                <img src="frontend/assets/images/canada/Picture6.png" alt="Picture 6">
                <img src="frontend/assets/images/canada/Picture7.png" alt="Picture 7">
                <img src="frontend/assets/images/canada/Picture8.png" alt="Picture 8">
                <img src="frontend/assets/images/canada/Picture9.png" alt="Picture 9">
                <img src="frontend/assets/images/canada/Picture10.png" alt="Picture 10">
                <img src="frontend/assets/images/canada/Picture11.png" alt="Picture 11">
                <img src="frontend/assets/images/canada/Picture12.png" alt="Picture 12">
            </div>
            
        </div>
    </div>
</div>
<!-- rts galllery area end -->
@endsection
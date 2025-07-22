@extends ('frontend.master')

@section('content')

<style>
.vision-mission-box {
    background-color: #1b2954;
    color: #ffffff;           
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3); 
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.vision-mission-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 123, 255, 0.5); 
}


.vision-mission-box .title {
    color: #ffffff;
}

.vision-mission-box .disc {
    color: #ffffff;
    text-align: justify;
}

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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/about/about.jpg') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">About IWGC</h2>
        <p class="bg-content"> What Defines Us? </p>
    </div>

    <div class="row g-4 mb-5">
        

        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                  Imperial Wisdom Graduate Campus (IWGC) is not just another higher education institute,
                   it is a visionary academic destination built on decades of global educational expertise.
                    Rooted in Sri Lanka and reaching across borders, IWGC was founded by a team of professionals 
                    with deep experience in educational consultancy, transnational education, 
                    and a profound understanding of diverse education systems around the world.<br><br>
At IWGC, we believe education should be more than a pursuit of a certificate. 
That’s why we go beyond conventional models to offer unmatched quality in teaching, 
internationally aligned programs, and tailored pathways that help students shape their 
future with confidence. Our programs are designed not only to meet academic standards but 
also to empower students with practical skills, global awareness, and the mindset to lead meaningful lives.<br><br>
What sets IWGC apart is our commitment to transforming lives — not just qualifications. 
Every learner who walks through our doors becomes part of a journey marked by innovation,
 mentorship, and personal growth. Whether you are preparing for a global career or aiming 
 to make a difference locally, IWGC provides the wisdom, tools, and opportunities to help you succeed.
                </p>
            </div>
        </div>
    </div>
</div>





    


    <!-- rts business goal area start -->
    <div class="business-goal-area-2 rts-section-gapBottom" style="padding-top:20px">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-7">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                           
                        </div>
                            <div class="signle-consultancy mb--30 vision-mission-box">
                                <div class="icon">
                                    <img src="frontend/assets/images/about/icons/01.svg" alt="">
                                </div>
                                <div class="information">
                                    <h4 class="title">Our Vision</h4>
                                    <p class="disc">
                                        To be a globally recognized center of academic excellence that transforms lives through innovative education, empowering individuals to become visionary leaders and change-makers in their respective fields.
                                    </p>
                                </div>
                            </div>

                            <div class="signle-consultancy vision-mission-box">
                                <div class="icon">
                                    <img src="frontend/assets/images/about/icons/02.svg" alt="">
                                </div>
                                <div class="information">
                                    <h4 class="title">Our Mission</h4>
                                    <p class="disc">
                                        To provide transformative educational experiences that combine academic rigor with real-world relevance, fostering intellectual curiosity, critical thinking, and ethical leadership. We are committed to creating an inclusive learning environment that nurtures talent, encourages innovation, and prepares students to address global challenges with confidence and compassion.
                                    </p>
                                </div>
                            </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <div class="large-thumbnail">
                            <img src="frontend/assets/images/business-goal/02.webp" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

   

   <!-- rts Esteemed Clients start -->
<div class="rts-client-area ptb--100 brand-bg-three bg_image mt--20 mb--100">
        <h4 style="text-align:center;margin-bottom: 30px; color: #ed3532;">
              Partners' / Accreditations 
        </h4>
    <div class="logo-marquee-container">
        <div class="logo-marquee-track">
            <!-- Repeat logos for seamless loop -->
            <div class="logo-marquee">
                <img src="frontend/assets/images/home/Picture1.png" alt="Picture 1">
                <img src="frontend/assets/images/home/Picture2.png" alt="Picture 2">
                <img src="frontend/assets/images/home/Picture3.jpg" alt="Picture 3">
                <img src="frontend/assets/images/home/Picture4.png" alt="Picture 4">
                <img src="frontend/assets/images/home/Picture5.png" alt="Picture 5">
                <img src="frontend/assets/images/home/Picture6.png" alt="Picture 6">
                <img src="frontend/assets/images/home/Picture7.png" alt="Picture 7">
                <img src="frontend/assets/images/home/Picture8.jpg" alt="Picture 8">
                <img src="frontend/assets/images/home/Picture9.jpg" alt="Picture 9">
                <img src="frontend/assets/images/home/Picture10.png" alt="Picture 10">
            </div>
            
        </div>
    </div>
</div>
<!-- rts galllery area end -->

@endsection
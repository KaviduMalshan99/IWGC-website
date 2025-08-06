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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/About Us 06.webp') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
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
    <div class="business-goal-area-2" style="padding-top:20px">
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
                            <img src="frontend/assets/images/hero/b1.jpg" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

   
<style>
        .marquee-wrapper-outer {
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
    padding: 0 20px;
    gap: 20px;
}

.logo-marquee-track {
    display: flex;
    width: max-content;
    transition: transform 0.3s ease;
}

.logo-marquee-container {
    overflow-x: auto;
    scroll-behavior: smooth;
    -ms-overflow-style: none; 
    scrollbar-width: none;    
}

.logo-marquee-container::-webkit-scrollbar {
    display: none;            
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

.marquee-arrow {
    font-size: 30px;
    background-color: rgba(255, 255, 255, 0.7);
    border: none;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 50%;
    transition: background-color 0.3s ease;
    z-index: 2;
}

.marquee-arrow:hover {
    background-color: #ed3532;
    color: white;
}

@keyframes scroll-marquee {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}

</style>

<div class="rts-client-area ptb--100 brand-bg-three bg_image mt--50 mb--100">
    <h4 style="text-align:center;margin-bottom: 30px; color: #ed3532;">
        Our Partners’ Accreditations
    </h4>

    <div class="marquee-wrapper-outer">
        <div class="marquee-arrow left" onclick="scrollLogos(-1)">
            &#10094;
        </div>

        <div class="logo-marquee-container" id="logoContainer">
            <div class="logo-marquee-track" id="logoTrack">
                <div class="logo-marquee">
                    <img src="public/frontend/assets/images/home/Picture1.png" alt="Picture 1">
                    <img src="public/frontend/assets/images/home/Picture2.png" alt="Picture 2">
                    <img src="public/frontend/assets/images/home/Picture3.png" alt="Picture 3">
                    <img src="public/frontend/assets/images/home/Picture4.png" alt="Picture 4">
                    <img src="public/frontend/assets/images/home/Picture5.png" alt="Picture 5">
                    <img src="public/frontend/assets/images/home/Picture6.png" alt="Picture 6">
                    <img src="public/frontend/assets/images/home/Picture7.png" alt="Picture 7">
                    <img src="public/frontend/assets/images/home/Picture9.png" alt="Picture 9">
                    <img src="public/frontend/assets/images/home/Picture10.png" alt="Picture 10">
                </div>
            </div>
        </div>

        <div class="marquee-arrow right" onclick="scrollLogos(1)">
            &#10095;
        </div>
    </div>
</div>

<script>
    const container = document.getElementById('logoContainer');
    let autoScrollInterval;

    function getSingleLogoScrollWidth() {
        const logo = container.querySelector('.logo-marquee img');
        if (!logo) return 200; 
        const style = getComputedStyle(logo);
        const marginRight = parseInt(style.marginRight || 0);
        const gap = 80; 
        return logo.offsetWidth + gap;
    }

    function startAutoScroll() {
        stopAutoScroll(); 
        autoScrollInterval = setInterval(() => {
            container.scrollBy({ left: 1, behavior: 'smooth' });
        }, 20);
    }

    function stopAutoScroll() {
        clearInterval(autoScrollInterval);
    }

    function scrollLogos(direction) {
        const scrollAmount = getSingleLogoScrollWidth();
        container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });

        // Restart auto-scroll after short pause
        stopAutoScroll();
        setTimeout(startAutoScroll, 1000);
    }

    // Start auto-scroll on page load
    window.addEventListener('DOMContentLoaded', startAutoScroll);

    container.addEventListener('mouseenter', stopAutoScroll);
    container.addEventListener('mouseleave', startAutoScroll);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') scrollLogos(-1);
        if (e.key === 'ArrowRight') scrollLogos(1);
    });
</script>




@endsection
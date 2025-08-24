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
        height: 25vh !important; 
    }
    
           h3.title {
        font-size: 22px !important;
    }

     p.disc {
        font-size: 14px !important; 
        text-align: justify;
        text-justify: inter-word; 
        word-break: break-word;   
        hyphens: auto;            
    }
}

@media (max-width: 768px) {

    /* Center each card */
    .business-goal-area-2 .signle-consultancy {
        width: 100% !important;
        max-width: 350px !important; /* optional card width */
        margin: 0 auto 20px auto !important; /* center with spacing */
    }

 

 
}

</style>


<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/About Us 06.webp') }}'); background-size: cover; background-position: center;  height: 300px;position: relative;">
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
.partner-ribbon-wrapper {
    width: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 20px 0;
    position: relative; /* for arrows */
}

.partner-ribbon-track {
    display: flex;
}

.partner-ribbon-content {
    display: flex;
    gap: 80px;
    align-items: center;
    width: max-content;
    animation: partner-scroll 70s linear infinite;
}

.partner-ribbon-item img {
    height: 70px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.partner-ribbon-item img:hover {
    transform: scale(1.1);
}

/* Animation */
@keyframes partner-scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}



@media (max-width: 768px) {
    .partner-ribbon-content {
        gap: 40px;
    }
    .partner-ribbon-item img {
        height: 50px;
    }
    .ribbon-arrow {
        width: 28px;
        height: 28px;
        font-size: 14px;
    }
}
</style>


<div class="rts-client-area ptb--100 brand-bg-three bg_image mt--20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="title-style-two center">
                    <h4 style="text-align:center;margin-bottom: 30px; color: #ed3532;">
                        Our Partners’ Accreditations
                    </h4>
                </div>
            </div>
        </div>
    </div>    

    <div class="partner-ribbon-wrapper">
    
        <div class="partner-ribbon-track" id="partnerTrack">
            <div class="partner-ribbon-content">
                <!-- logos repeated twice for seamless loop -->
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture1.png" alt="Client 1"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture2.png" alt="Client 2"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture3.png" alt="Client 3"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture4.png" alt="Client 4"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture5.png" alt="Client 5"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture6.png" alt="Client 6"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture7.png" alt="Client 7"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture9.png" alt="Client 8"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture10.png" alt="Client 9"></div>

                    <!-- repeat again for seamless loop -->
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture1.png" alt="Client 1"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture2.png" alt="Client 2"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture3.png" alt="Client 3"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture4.png" alt="Client 4"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture5.png" alt="Client 5"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture6.png" alt="Client 6"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture7.png" alt="Client 7"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture9.png" alt="Client 8"></div>
                    <div class="partner-ribbon-item"><img src="/frontend/assets/images/home/Picture10.png" alt="Client 9"></div>
            </div>
        </div>

 
    </div>
</div>

<script>
const ribbon = document.querySelector('.partner-ribbon-wrapper');
const track = document.querySelector('.partner-ribbon-track');

let isDragging = false;
let startX;
let scrollLeft;

// Pause/resume CSS auto-scroll animation
const content = document.querySelector('.partner-ribbon-content');
function pauseAnimation() {
    content.style.animationPlayState = 'paused';
}
function resumeAnimation() {
    content.style.animationPlayState = 'running';
}

// Mouse events for desktop drag
ribbon.addEventListener('mousedown', (e) => {
    isDragging = true;
    pauseAnimation();
    startX = e.pageX - ribbon.offsetLeft;
    scrollLeft = ribbon.scrollLeft;
});

ribbon.addEventListener('mouseleave', () => {
    isDragging = false;
    resumeAnimation();
});

ribbon.addEventListener('mouseup', () => {
    isDragging = false;
    resumeAnimation();
});

ribbon.addEventListener('mousemove', (e) => {
    if(!isDragging) return;
    e.preventDefault();
    const x = e.pageX - ribbon.offsetLeft;
    const walk = (x - startX) * 2; // scroll speed multiplier
    ribbon.scrollLeft = scrollLeft - walk;
});

// Touch events for mobile drag
ribbon.addEventListener('touchstart', (e) => {
    isDragging = true;
    pauseAnimation();
    startX = e.touches[0].pageX - ribbon.offsetLeft;
    scrollLeft = ribbon.scrollLeft;
});

ribbon.addEventListener('touchend', () => {
    isDragging = false;
    resumeAnimation();
});

ribbon.addEventListener('touchmove', (e) => {
    if(!isDragging) return;
    const x = e.touches[0].pageX - ribbon.offsetLeft;
    const walk = (x - startX) * 2; // scroll speed multiplier
    ribbon.scrollLeft = scrollLeft - walk;
});
</script>




@endsection
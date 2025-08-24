
@extends ('frontend.master')

@section('content')
<style>
   
        /* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 20vh !important; 
    }
            h5.title-sm {
        font-size: 19px !important;
    }

     p.disc {
        font-size: 15px !important; 
        text-align: justify;
        text-justify: inter-word; 
        word-break: break-word;   
        hyphens: auto;            
    }

     .icon {
        width: 32px !important;
        height: 32px !important;
        font-size: 14px !important;
    }

    h3 {
        font-size: 18px;
    }
}

</style>
<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/04.3.webp') }}'); background-size: cover; background-position: center; height: 400px;position: relative;">
</div>
<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Why Study in the UK?</h2>
        <p class="bg-content"> </p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-12 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                   Studying in the United Kingdom offers students an exceptional opportunity 
                   to receive world-class education, immerse themselves in rich cultural diversity, 
                   and gain unforgettable life experiences. The UK has long been a popular destination 
                   for international students, and here are compelling reasons why you should consider
                    pursuing your higher education there.
                </p>
                <div class="service-details-left-area mt--0 ">

                    <!-- Service 1 -->
                    <div class="" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>1</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Academic Excellence and Renowned Universities</h5>
                                <p class="disc" style="text-align: justify;">
                                   The UK is home to some of the world's most prestigious universities, including Oxford, Cambridge, Imperial College London, and the London School of Economics. These institutions are known for their rigorous academic standards, innovative research, and distinguished faculty. UK degrees are globally recognized and highly valued by employers, providing graduates with a competitive edge in the job market.
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
                                <h5 class="title-sm">Diverse Range of Courses and Specializations</h5>
                                <p class="disc" style="text-align: justify;">
                                 Whether you're interested in arts, sciences, engineering, business, law, or medicine, the UK offers a vast array of courses tailored to your interests and career goals. Many programs also provide flexibility for interdisciplinary studies or practical, work-based learning, ensuring a well-rounded educational experience.
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
                                <h5 class="title-sm">Shorter Duration of Degree Programs</h5>
                                <p class="disc" style="text-align: justify;">
                                   Compared to some other countries, undergraduate degrees in the UK typically take three years, and master's programs generally last one year. This shorter duration can reduce tuition costs and living expenses, allowing students to enter the workforce sooner or pursue further studies.
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
                                <h5 class="title-sm">Rich Cultural and Historical Heritage</h5>
                                <p class="disc" style="text-align: justify;">
                                  Studying in the UK provides an immersive experience in a country with a diverse cultural landscape and centuries of history. Students can explore iconic landmarks, museums, theatres, and festivals, enriching their personal growth and cultural awareness.
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
                                <h5 class="title-sm">International Community and Networking Opportunities</h5>
                                <p class="disc" style="text-align: justify;">
                               The UK attracts students from over 180 countries, creating a vibrant, multicultural environment. This diversity fosters global friendships, exchange of ideas, and networking opportunities that can benefit your professional and personal life long after graduation.
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
                                <h5 class="title-sm">Support Services and Student Facilities</h5>
                                <p class="disc" style="text-align: justify;">
                               UK universities offer comprehensive support services, including academic advising, career counseling, health services, and dedicated international student support. State-of-the-art facilities, libraries, laboratories, and recreational amenities also enhance the student experience.
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
                                <h5 class="title-sm">Post-Study Work Opportunities</h5>
                                <p class="disc" style="text-align: justify;">
                                 The UK provides pathways for international students to stay and work after graduation through schemes like the Graduate Immigration Route. This enables students to gain valuable work experience, build international careers, and potentially settle in the UK.
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
                                <h5 class="title-sm">English Language Advantage</h5>
                                <p class="disc" style="text-align: justify;">
                                 Studying in the UK allows students to improve their English language skills in an immersive environment, enhancing their communication abilities and opening doors to global career opportunities.
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
                                <h5 class="title-sm">Strategic Location</h5>
                                <p class="disc" style="text-align: justify;">
                                 The UK’s location makes it easy to travel to Europe and other parts of the world. As a hub of international business and culture, it offers numerous opportunities for internships, collaborations, and exposure to global markets.
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
        <h5 class="title-sm" style="color: #1b2954; margin-bottom: 10px;">Excited to begin your academic adventure in the UK?</h2>
        <p class="disc" style="font-size: 16px; line-height: 1.6; margin-bottom: 30px;">
            Choosing to study in the UK is a strategic decision that combines high-quality education, cultural diversity, and numerous opportunities for personal and professional growth. Whether you aim for a leading university experience, a shorter degree path, or an enriching cultural journey, the UK stands out as an ideal destination for international students. Embark on your academic adventure and unlock your future today!
        </p>

        <!-- Section Title -->
        <h3 style="
            margin-bottom: 30px;
            font-size: 22px;
            background: linear-gradient(90deg, #ed3532, #f5b100, #1b2954);
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
            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #ed3532;">
                <a href="https://www.gov.uk/student-visa" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">Study Pass</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Find out how to apply for a student visa to study in the UK and understand the requirements.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #f5b100;">
                <a href="https://www.gov.uk/graduate-visa/apply" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #f5b100; font-weight: bold; margin-bottom: 10px;">Graduate Pass</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Explore how you can apply for a Graduate Visa in the UK to stay and work after completing your studies.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #1b2954;">
                <a href="https://www.ukcisa.org.uk/student-advice/life-in-the-uk/" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #1b2954; font-weight: bold; margin-bottom: 10px;">Life in the UK</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Gain insights into life as an international student in the UK, from culture to daily life.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #ed3532;">
                <a href="https://www.ukcisa.org.uk/student-advice/working/student-work/" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">Student Work</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Understand the rules and opportunities for working part-time or full-time while studying in the UK.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #f5b100;">
                <a href="https://www.ukcisa.org.uk/student-advice/life-in-the-uk/accommodation/" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #f5b100; font-weight: bold; margin-bottom: 10px;">Accommodation</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Find the best options for student accommodation in the UK, from halls to private rentals.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #1b2954;">
                <a href="https://www.ukcisa.org.uk/student-advice/life-in-the-uk/healthcare/?q=health&ExactMatch=False" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #1b2954; font-weight: bold; margin-bottom: 10px;">Healthcare</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Learn about the healthcare system in the UK, including NHS registration and how to access healthcare services.</p>
                </a>
            </div>

            <div class="info-box" style="background-color: #fff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-top: 4px solid #ed3532;">
                <a href="https://www.ukcisa.org.uk/news/" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">News Updates</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Stay updated with the latest news, regulations, and announcements for international students in the UK.</p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Hover animation -->
<style>
    .info-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
</style>



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
                   <h3 style="text-align:center;margin-bottom: 30px; font-size: 25px; color: #ed3532;">
                        Explore Your Dream Institutions
                </h3>
                </div>
            </div>
        </div>
    </div>    

    <div class="partner-ribbon-wrapper">
    
        <div class="partner-ribbon-track" id="partnerTrack">
            <div class="partner-ribbon-content">
               <!-- logos repeated twice for seamless loop -->
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture1.png" alt="UK 1"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture2.png" alt="UK 2"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture3.png" alt="UK 3"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture4.png" alt="UK 4"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture5.png" alt="UK 5"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture6.png" alt="UK 6"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture7.png" alt="UK 7"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture8.png" alt="UK 8"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture9.png" alt="UK 9"></div>

                <!-- repeat again for seamless scroll -->
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture1.png" alt="UK 1"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture2.png" alt="UK 2"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture3.png" alt="UK 3"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture4.png" alt="UK 4"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture5.png" alt="UK 5"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture6.png" alt="UK 6"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture7.png" alt="UK 7"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture8.png" alt="UK 8"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/UK/Picture9.png" alt="UK 9"></div>
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
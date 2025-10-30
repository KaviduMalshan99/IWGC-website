
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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/new/02.2.webp') }}'); background-size: cover; background-position: top; height:300px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Why Study in Singapore? </h2>
        <p class="bg-content"> </p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-12 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                 Singapore has emerged as a premier destination for international students seeking 
                 high-quality education, vibrant cultural experiences, and excellent career opportunities. 
                 Renowned for its world-class universities, strategic location, and multicultural environment, 
                 Singapore offers a unique learning experience that combines academic excellence with a dynamic 
                 global outlook. Here’s why studying in Singapore can be a transformative step in your educational journey.
                </p>
                <div class="service-details-left-area mt--0 ">

                    <!-- Service 1 -->
                    <div class="" style="width: 100%; margin-bottom: 0px;">
                        <div class="single-short-service" style="display: flex; align-items: flex-start; gap: 16px;">
                            <div class="icon" style="width: 45px; height: 45px; background-color: #1b2954; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; flex-shrink: 0;">
                                <span>1</span>
                            </div>
                            <div class="inner-content">
                                <h5 class="title-sm">Academic Excellence and World-Class Institutions</h5>
                                <p class="disc" style="text-align: justify;">
                                  Singapore is home to some of the world's leading universities, such as the National University of Singapore (NUS), Nanyang Technological University (NTU), and Singapore Management University (SMU). These institutions consistently rank among the top in Asia and globally, offering a wide range of undergraduate and postgraduate programs in fields like engineering, business, science, technology, and the arts. Their rigorous curricula, cutting-edge research facilities, and renowned faculty ensure students receive a top-tier education.
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
                                <h5 class="title-sm">Strategic Location and Connectivity</h5>
                                <p class="disc" style="text-align: justify;">
                                  Situated at the crossroads of Asia, Singapore serves as a gateway to major Asian markets such as China, India, and Southeast Asia. Its strategic location makes it an ideal base for students interested in regional business, diplomacy, or cultural exchange. Additionally, Singapore’s well-developed infrastructure provides easy access to other countries in the region, facilitating travel and networking opportunities.
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
                                <h5 class="title-sm">Multicultural and Safe Environment</h5>
                                <p class="disc" style="text-align: justify;">
                                   Singapore is renowned for its multicultural society, where people from diverse cultural, ethnic, and religious backgrounds coexist harmoniously. The city-state emphasizes safety, cleanliness, and stability, making it a comfortable and secure place for international students. Students can enjoy a vibrant city life with a rich tapestry of cultural festivals, diverse cuisines, and a welcoming community.
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
                                <h5 class="title-sm">English as the Medium of Instruction</h5>
                                <p class="disc" style="text-align: justify;">
                                 English is one of Singapore’s official languages and the primary medium of instruction in all higher education institutions. This makes it easier for international students to adapt and excel academically without language barriers, providing an advantage for those aiming to improve their English communication skills.
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
                                <h5 class="title-sm">Innovative Learning and Research Opportunities</h5>
                                <p class="disc" style="text-align: justify;">
                                Singapore invests heavily in research and development, fostering innovation across various sectors such as biotechnology, fintech, information technology, and environmental science. Students benefit from state-of-the-art laboratories, industry partnerships, and internship opportunities that enhance practical skills and employability.
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
                                <h5 class="title-sm">Strong Employment Prospects</h5>
                                <p class="disc" style="text-align: justify;">
                               Singapore’s robust economy, low unemployment rate, and focus on innovation create a favorable job market for graduates. International students often find work placements during their studies and have the opportunity to stay and work in Singapore after graduation under the relevant visa schemes, such as the Post-Study Work Permit (PCWP).
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
                                <h5 class="title-sm">Affordable Quality Education</h5>
                                <p class="disc" style="text-align: justify;">
                                 Compared to Western countries, Singapore offers high-quality education at a relatively affordable cost. Tuition fees are competitive, and living expenses are manageable due to the city’s efficient public transportation system and affordable amenities.
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
                                <h5 class="title-sm">Vibrant Campus Life</h5>
                                <p class="disc" style="text-align: justify;">
                                 Singaporean universities offer a lively campus environment with numerous extracurricular activities, clubs, sports, and cultural events. These opportunities help students develop leadership skills, build friendships, and create a well-rounded university experience.
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
        <h5 class="title-sm" style="color: #1b2954; margin-bottom: 10px;">Start your journey today and experience the educational excellence and vibrant life that Singapore has to offer!</h2>
         <p class="disc" style="font-size: 16px; line-height: 1.6; margin-bottom: 30px;">
            Studying in Singapore provides more than just academic knowledge; it opens doors to international networking, cultural diversity, and career growth. Whether you’re interested in technology, business, science, or the arts, Singapore’s global outlook, innovative environment, and high-quality education make it an ideal choice for students aspiring to make a mark in the world.
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
            <!-- Student Pass -->
            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #ed3532;">
                <a href="https://www.ica.gov.sg/reside/STP/apply" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">Student Pass</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Learn how to apply for a student pass in Singapore and the necessary requirements for international students.</p>
                </a>
            </div>

            <!-- Facts to Consider -->
            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #f5b100;">
                <a href="https://www.moe.gov.sg/international-students/studying-in-singapore" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #f5b100; font-weight: bold; margin-bottom: 10px;">Facts to Consider</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Discover essential facts and tips about studying in Singapore, including the education system and life as an international student.</p>
                </a>
            </div>

            <!-- Work Pass Requirements -->
            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #1b2954;">
                <a href="https://www.mom.gov.sg/passes-and-permits/work-pass-exemption-for-foreign-students" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #1b2954; font-weight: bold; margin-bottom: 10px;">Work Pass Requirements</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Find out about work pass exemptions for foreign students and other regulations regarding employment in Singapore.</p>
                </a>
            </div>

            <!-- News Updates -->
            <div class="info-box" style="background-color: #ffffff; padding: 24px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: 0.3s ease; border-top: 4px solid #ed3532;">
                <a href="https://www.ica.gov.sg/news-and-publications/newsroom" target="_blank" style="text-decoration: none; color: inherit;">
                    <h4 style="font-size: 18px; color: #ed3532; font-weight: bold; margin-bottom: 10px;">News Updates</h4>
                    <p style="font-size: 15px; line-height: 1.6;">Stay informed about the latest immigration news and updates that affect international students in Singapore.</p>
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
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture1.png" alt="Singapore 1"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture2.png" alt="Singapore 2"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture3.png" alt="Singapore 3"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture4.png" alt="Singapore 4"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture5.png" alt="Singapore 5"></div>

                <!-- repeat again for seamless scroll -->
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture1.png" alt="Singapore 1"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture2.png" alt="Singapore 2"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture3.png" alt="Singapore 3"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture4.png" alt="Singapore 4"></div>
                <div class="partner-ribbon-item"><img src="public/frontend/assets/images/singapore/Picture5.png" alt="Singapore 5"></div>
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
@extends ('frontend.master')

@section('content')

<style>
/* Programs Section Styles */
.program-card {
    display: block;
    overflow: hidden;
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-decoration: none;
    height: 100%;
    position: relative;
    background-color: #f8f9fa;
}

.program-image {
    position: relative;
    height: 100%;
}

.program-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    display: block;
    filter: grayscale(0.1) brightness(0.9);
}

.program-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
    border-radius: 15px;
    pointer-events: none;
    transition: background 0.3s ease;
}

.program-card:hover .program-overlay {
    background: rgba(0, 0, 0, 0.6);
}

.program-content {
    position: absolute;
    width: 350px;
    left: 50%;
    bottom: 20px;
    transform: translateX(-50%);
    text-align: center;
    color: #fff;
    z-index: 2;
    transition: bottom 0.4s ease, transform 0.4s ease;
}

.program-card:hover .program-content {
    bottom: 50%;
    transform: translate(-50%, 50%);
}

.program-content h3 {
    font-weight: 800;
    margin-bottom: 15px;
    color: #fff;
}

.program-content .btn {
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    padding: 8px 20px;
    display: inline-block;
}

.program-card:hover .btn-outline-light {
    background-color: #fff;
    color: #c1121f;
    border-color: #fff;
}

/* Sections */
.working-process-one {
    background-color: #1b2954;
    color: #fff;
}

.partner-breadcrumb {
    height: 300px;
    position: relative;
}

/* Info Boxes */
.info-box {
    background: #f4f4f4;
    padding: 25px;
    border-radius: 15px;
    color: #000;
    height: 100%;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.rts-client-area.recognition-section {
    margin-bottom: 40px;
}

@media (max-width: 991px) {
    .program-content {
        width: 90%;
    }
}

/* Mobile Responsive Styling */
@media (max-width: 768px) {
    .partner-breadcrumb {
        background-size: cover !important;  
        background-position: center !important;  
        height: 10vh !important; 
    }
    
           h5.title {
        font-size: 20px !important;
    }

     p.disc {
        font-size: 14px !important; 
        text-align: justify;
        text-justify: inter-word; 
        word-break: break-word;   
        hyphens: auto;            
    }
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

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/new/Avid College.webp') }}'); height: 300px; position: relative; background-size: cover; background-position: center;">
</div>



<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">International American University, USA</h2>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="info-box">
                <h5 class="title"> Our International Education Partner</h5>
                <p class="disc" style="text-align:justify">
                    At Imperial Wisdom Graduate Campus, we believe in creating opportunities that connect our students with internationally respected institutions. Our collaboration with International American University (IAU), USA enables learners to pursue globally relevant education through flexible academic pathways, industry-focused curricula, and internationally recognized qualifications designed for today's competitive world. 
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="info-box">
                <h5 class="title">About International American University</h5>
                <p class="disc" style="text-align:justify">
                    International American University (IAU) is a private university based in California, United States, dedicated to preparing future business professionals and leaders through practical, career-oriented education. With a strong emphasis on innovation, entrepreneurship, and global business, IAU offers internationally focused academic programs supported by experienced faculty and modern teaching methodologies. Through our partnership, students gain access to quality American higher education that supports professional growth and international career opportunities. 
                </p>
            </div>
        </div>
    </div>
</div>

<div class="rts-client-area ptb--100 brand-bg-three bg_image mt--20 recognition-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="title-style-two center">
                    <h4 style="text-align:center;margin-bottom: 30px; color: #ed3532;">
                        Recognitions & Accreditations 
                    </h4>
                </div>
            </div>
        </div>
    </div>    

    <div class="partner-ribbon-wrapper">
    
        <div class="partner-ribbon-track" id="partnerTrack">
            <div class="partner-ribbon-content">
                <!-- logos repeated twice for seamless loop -->
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/a.jpeg" alt="Client 1"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/b.jpeg" alt="Client 2"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/c.jpeg" alt="Client 3"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/d.jpeg" alt="Client 4"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/e.jpeg" alt="Client 5"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/f.jpeg" alt="Client 6"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/g.jpeg" alt="Client 7"></div>


                    <!-- repeat again for seamless loop -->
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/a.jpeg" alt="Client 1"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/b.jpeg" alt="Client 2"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/c.jpeg" alt="Client 3"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/d.jpeg" alt="Client 4"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/e.jpeg" alt="Client 5"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/f.jpeg" alt="Client 6"></div>
                    <div class="partner-ribbon-item"><img src="public/frontend/assets/images/aiu/g.jpeg" alt="Client 7"></div>
            </div>
        </div>

 
    </div>
</div>

<!-- Faculties Section -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop mb--100 working-process-one">
    <div class="container mb-4 pb-3">
        <div class="row">
            <div class="col-lg-12">
                <div class=" center">
                    <h2 class="title rts-text-anime-style-1 text-white">Our Programs</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- MBA -->
            <div class="col-md-4">
                <a href="{{ route('mba') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}"
                            alt="Master of Business Administration"
                            class="img-fluid">

                        <div class="program-overlay"></div>

                        <div class="program-content">
                            <h3>Master of Business Administration (MBA)</h3>

                            <span class="btn btn-outline-light">
                                Discover
                                <i class="fas fa-arrow-right ms-2"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- DBA -->
            <div class="col-md-4">
                <a href="{{ route('dba') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/new/Faculty of Education.webp') }}"
                            alt="Doctor of Business Administration"
                            class="img-fluid">

                        <div class="program-overlay"></div>

                        <div class="program-content">
                            <h3>Doctor of Business Administration (DBA)</h3>

                            <span class="btn btn-outline-light">
                                Discover
                                <i class="fas fa-arrow-right ms-2"></i>
                            </span>
                        </div>
                    </div>
                </a>
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

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
        <div class="row g-4 justify-content-center ">
            <div class="col-md-4">
                <a href="{{ route('business') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/new/Faculty of Business Management.webp') }}" alt="Faculty of Business" class="img-fluid">
                        <div class="program-overlay"></div>
                        <div class="program-content">
                            <h3>Master of Business Administration (MBA)</h3>
                            <span class="btn btn-outline-light">Discover <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('education') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('public/frontend/assets/new/Faculty of Education.webp') }}" alt="Faculty of Education" class="img-fluid">
                        <div class="program-overlay"></div>
                        <div class="program-content">
                            <h3>Doctor of Business Administration (DBA)</h3>
                            <span class="btn btn-outline-light">Discover <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>

@endsection

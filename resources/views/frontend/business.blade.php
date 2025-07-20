
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
    height: 400px;
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
</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/bus.webp') }}'); background-size: cover; background-position: center;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Faculty Of Business Management</h2>
        <p class="bg-content">“Developing Global Business Leaders”</p>
    </div>

    <div class="row g-4 mb-5">
        

        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                    Step into the fast-paced world of commerce, innovation, and leadership with the Faculty
                    of Business Management at Imperial Wisdom. Whether you’re starting your journey or
                    seeking to scale your career, our programs are designed to align with global business
                    demands and leadership standards.
                </p>

                <span style="font-weight: bold; font-size:18px;">Why Study Business with Us?</span>
                <ul style="padding-left: 20px; margin-top: 10px;">
                    <li><strong>Hands-On Learning:</strong> Case studies, simulations & live projects</li>
                    <li><strong>Designed for Entrepreneurs & Professionals</strong></li>
                    <li><strong>Clear Career Roadmaps: </strong>From diploma to MBA</li>
                    <li><strong>Flexible Study Options: </strong>Ideal for working individuals</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Faculties Section -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop working-process-one">
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
            

            <div class="col-md-6">
                <a href="{{ route('bachelor_BA') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/avid/1mb.png') }}" alt="Master of Business Administration" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Bachelor of Business Administration (BBA)</h3>
                            <span class="btn btn-outline-light">Explore Program<i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('master_BA') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/avid/1bb.png') }}" alt="Master of Educational Leadership and Management" class="img-fluid">
                        <div class="overlay"></div>
                        <div class="program-content">
                            <h3>Master of Business Administration (MBA)</h3>
                            <span class="btn btn-outline-light">Explore Program <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

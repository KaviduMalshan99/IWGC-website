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
</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/Avid College.webp') }}'); height: 300px; position: relative; background-size: cover; background-position: center;">
</div>



<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Avid College, Maldives</h2>
        <p class="bg-content">Our International Education Partner</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="info-box">
                <h5> Our International Education Partner</h5>
                <p style="text-align:justify">
                    At Imperial Wisdom Graduate Campus, we are committed to delivering globally recognized higher education. One of our key international collaborations is with Avid College, a renowned private higher education institution based in the Maldives. This strategic partnership empowers our students with enhanced academic pathways, international mobility, and globally accredited qualifications.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="info-box">
                <h5>About Avid College, Maldives</h5>
                <p style="text-align:justify">
                    Avid College is one of the leading private colleges in the Maldives, known for its excellence in delivering career-focused, flexible, and internationally aligned academic programs. Based in Malé, Avid College offers a wide range of qualifications that cater to students, professionals, and lifelong learners. Our partnership provides access to international programs and pathways to degrees in the UK, Australia, and beyond.
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
                    <h2 class="title rts-text-anime-style-1 text-white">Our Faculties</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center ">
            <div class="col-md-4">
                <a href="{{ route('business') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/hero/b1.jpg') }}" alt="Faculty of Business" class="img-fluid">
                        <div class="program-overlay"></div>
                        <div class="program-content">
                            <h3>Faculty of Business</h3>
                            <span class="btn btn-outline-light">Discover <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('education') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/hero/e1.jpg') }}" alt="Faculty of Education" class="img-fluid">
                        <div class="program-overlay"></div>
                        <div class="program-content">
                            <h3>Faculty of Education</h3>
                            <span class="btn btn-outline-light">Discover <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('humanities') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/hero/diploma-Teaching-(Primary).jpg') }}" alt="Faculty of Humanities" class="img-fluid">
                        <div class="program-overlay"></div>
                        <div class="program-content">
                            <h3>Faculty of Humanities</h3>
                            <span class="btn btn-outline-light">Discover <i class="fas fa-arrow-right ms-2"></i></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

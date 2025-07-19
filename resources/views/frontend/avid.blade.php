 
@extends ('frontend.master')

@section('content')


<style>
    
    .program-card {
    display: block;
    overflow: hidden;
    border-radius: 15px;
    text-decoration: none;
    height: 100%;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.program-image {
    position: relative;
    height: 100%;
}

.program-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 15px;
}

/* Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
    border-radius: 15px;
    transition: background 0.3s ease;
}

/* Content Container */
.program-content {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 30px;
    padding: 20px;
    text-align: center;
    color: #fff;
    z-index: 2;
}

/* Course Name - Always visible */
.program-content h3 {
    color: white;
    font-weight: 800;
    font-size: 30px;
    margin-bottom: 15px;
    opacity: 1;
}

/* Discover Button - Hidden initially */
.program-content .btn {
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    padding: 8px 20px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Hover Effects */
.program-card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.program-card:hover .overlay {
    background: rgba(0, 0, 0, 0.6);
}

.program-card:hover .program-content .btn {
    opacity: 1;
    transform: translateY(0);
}


</style>
 
 <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/hero/avid.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Avid College</span>
                        <h1 class="title">
    
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->

<div class="container mt--30">
<div class="row mb--40">
                <div class="col-lg-12">
                    <div class="single-project-info-wrapper-inner">
                        <h5 class="title">Avid College, Maldives – Our International Education Partner</h5>
                        <p class="disc" style="font-size:18px; text-align:justify">
                            At Imperial Wisdom Graduate Campus, we are committed to delivering globally recognized higher education. One of our key international collaborations is with Avid College, a renowned private higher education institution based in the Maldives. This
                            strategic partnership empowers our students with enhanced academic pathways,
                            international mobility, and globally accredited qualifications.
                        </p>

                        <h5 class="title">About Avid College, Maldives</h5>
                        <p class="disc" style="font-size:18px; text-align:justify">
                            Avid College is one of the leading private colleges in the Maldives, known for its
                            excellence in delivering career-focused, flexible, and internationally aligned academic
                            programs. Based in Malé, Avid College offers a wide range of qualifications that cater to
                            students, professionals, and lifelong learners across various industries.
                            Through our partnership, Imperial Wisdom students gain access to internationally
                            transferable programs and progression opportunities to complete degrees in the UK,
                            Australia, and beyond.
                        </p>
                                   
                    </div>
                </div>
            </div>
        </div>

<!-- rts steps area start -->
<div class="rts-client-review-area rts-section-gapBottom rts-section-gapTop bg-light">
    <div class="container mb-4 pb-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-two center">
                    <span class="bg-content">Our Faculties</span>
                    <h2 class="title rts-text-anime-style-1">Our Faculties</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('business') }}" class="program-card">
                    <div class="program-image">
                        <img src="{{ asset('frontend/assets/images/hero/b1.jpg') }}" alt="Faculty of Business" class="img-fluid">
                        <div class="overlay"></div>
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
                        <div class="overlay"></div>
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
                        <div class="overlay"></div>
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
<!-- rts steps area end -->


  

@endsection
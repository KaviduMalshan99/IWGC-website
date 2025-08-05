 
@extends ('frontend.master')

@section('content')
<style>
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
<div class="partner-breadcrumb" style="background-image: url('{{ asset('public/frontend/assets/images/Careers 01.webp') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Careers</h2>
        <p class="bg-content">  Welcome to the Career Opportunities at Imperial Wisdom Graduate Campus </p>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-12 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
At Imperial Wisdom Graduate Campus, we are committed to fostering an environment of excellence, innovation, and growth. 
Our mission is to develop future leaders by providing a dynamic and supportive ac
demic community, world-class research 
opportunities, and holistic student development.<br><br>
Whether you are a prospective student, a current student, or an esteemed alumnus, 
we invite you to explore the diverse career pathways and professional development 
opportunities available within our institution. Our campus values a culture of integrity, collaboration, and continuous improvement.<br><br>
Join us in shaping the future—whether through academic pursuits, research endeavors, or impactful community engagement. 
Browse our current openings, partner with us for internships or research collaborations, or 
learn more about how we support career growth and development.<br><br>
Imperial Wisdom Graduate Campus is dedicated to empowering individuals to achieve their 
ambitions and make meaningful contributions to society. We look forward to welcoming passionate, 
innovative, and driven individuals to our community.<br><br>
For more information or to apply, please visit our Careers section or contact our Human Resources department.

                </p>
            </div>
        </div>
    </div>
</div>




    <div class="career-gallery-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center mb--20">
                        <h2 class="title rts-text-anime-style-1">Current Opportunities</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--5">
                <div class="col-lg-6 ">
                    <a href="{{ asset('public/frontend/assets/images/Picture1.jpg') }}" class="gallery-image" data-animation="fadeInUp" data-delay="0.1">
                        <div class="thumbnail">
                            <img src="{{ asset('public/frontend/assets/images/Picture1.jpg') }}" alt="gallery-image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="{{ asset('public/frontend/assets/images/Picture2.jpg ') }}" class="gallery-image" data-animation="fadeInUp" data-delay="0.2">
                        <div class="thumbnail">
                            <img src="{{ asset('public/frontend/assets/images/Picture2.jpg') }}" alt="gallery-image">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


<!-- current opening area start 
<div class="current-opening-area bg_primary rts-section-gap mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-five center mb--40">
                    <h2 class="title">Current Openings</h2>
                    <span class="pre">Be part of our mission to provide quality education and shape the future of our students</span>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            @foreach($careers as $career)
            <div class="col-lg-12">
                <div class="single-open-career" data-animation="fadeInUp" data-delay="0.1">
                    <div class="left-side">
                        <h4 class="title">{{ $career->job_title }}</h4>
                        <div class="bottom">
                            <div class="single">
                                <i class="fa-regular fa-location-dot"></i>
                                <span>{{ $career->location }}</span>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-location-dot"></i>
                                <span>{{ $career->job_type }}</span>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-location-dot"></i>
                                <span>{{ $career->experience }} Experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-side" style="margin-left:15%">
                        <div class="bottom">
                            <div class="single">
                                <p>Apply Deadline</p>
                                <span>{{ \Carbon\Carbon::parse($career->deadline_date)->format('d M, Y') }}</span>
                            </div>
                            <a href="" class="rts-btn btn-primary btn-white">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
current opening area end -->


        
@endsection
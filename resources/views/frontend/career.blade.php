 
@extends ('frontend.master')

@section('content')



   <div class="rts-breadcrumb-area bg_primary career-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left">
                        <span class="bg-title">Career</span>
                        <h1 class="title rts-text-anime-style-1">
                            Careers at IWGC
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="frontend/assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="frontend/assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="frontend/assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>


    <div class="large-thumbnail-career rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="large-thumbnail-career" data-animation="zoomOut" data-delay="0.1">
                        <img src="frontend/assets/images/job/job.jpg" alt="career">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="career-gallery-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center mb--40">
                        <span class="pre">Gallery</span>
                        <h2 class="title rts-text-anime-style-1">Life At IWGC</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--5">
                <div class="col-lg-4 offset-lg-1">
                    <a href="frontend/assets/images/gallery/Picture1.png" class="gallery-image" data-animation="fadeInUp" data-delay="0.1">
                        <div class="thumbnail">
                            <img src="frontend/assets/images/gallery/Picture1.png" alt="gallery-image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="frontend/assets/images/gallery/Picture3.png" class="gallery-image" data-animation="fadeInUp" data-delay="0.2">
                        <div class="thumbnail">
                            <img src="frontend/assets/images/gallery/Picture3.png" alt="gallery-image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="frontend/assets/images/gallery/Picture4.png" class="gallery-image" data-animation="fadeInUp" data-delay="0.3">
                        <div class="thumbnail">
                            <img src="frontend/assets/images/gallery/Picture4.png" alt="gallery-image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="frontend/assets/images/gallery/Picture5.png" class="gallery-image" data-animation="fadeInUp" data-delay="0.4">
                        <div class="thumbnail">
                            <img src="frontend/assets/images/gallery/Picture5.png" alt="gallery-image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="frontend/assets/images/gallery/Picture6.png" class="gallery-image" data-animation="fadeInUp" data-delay="0.5">
                        <div class="thumbnail">
                            <img src="frontend/assets/images/gallery/Picture6.png" alt="gallery-image">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


<!-- current opening area start -->
<div class="current-opening-area bg_primary rts-section-gap">
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
<!-- current opening area end -->


        
@endsection
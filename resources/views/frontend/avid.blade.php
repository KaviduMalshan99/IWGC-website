 
@extends ('frontend.master')

@section('content')
 
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
                         At Imperial Wisdom Graduate Campus, we are committed to delivering globally
recognized higher education. One of our key international collaborations is with Avid
College, a renowned private higher education institution based in the Maldives. This
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

   <!-- start gallery section -->
<div class="rts-gallery-area mb--50">
    <div class="container pt--40">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-between-wrapper-gallery-project">
                    <div class="title-style-two mb--40 left">
                        <span class="bg-content">Our Faculties</span>
                        <span class="pre">Our Faculties</span>
                        <h2 class="title rts-text-anime-style-1">
                        </h2>
                    </div>
                    <div class="swiper-paginations d-none"></div> 
                </div>
            </div>
        </div>

        <!-- Static grid instead of swiper -->
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="project-style-one">
                    <a href="{{ route('business') }}" class="thumbnail">
                        <img src="frontend/assets/images/hero/b1.jpg" alt="project">
                    </a>
                    <div class="inner-content">
                        <a href="{{ route('business') }}">
                            <h5 class="title">Faculty of Business</h5>
                        </a>
                         <a href="{{ route('business') }}" class="btn btn-sm btn-outline-primary mt-2" style="font-size: 13px; padding: 5px 12px; border-radius: 20px;">
                            Discover
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-style-one">
                    <a href="{{ route('education') }}" class="thumbnail">
                        <img src="frontend/assets/images/hero/e1.jpg" alt="project">
                    </a>
                    <div class="inner-content">
                        <a href="{{ route('education') }}">
                            <h5 class="title">Faculty of Education</h5>
                        </a>
                         <a href="{{ route('education') }}" class="btn btn-sm btn-outline-primary mt-2" style="font-size: 13px; padding: 5px 12px; border-radius: 20px;">
                            Discover
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-style-one">
                    <a href="{{ route('humanities') }}" class="thumbnail">
                        <img src="frontend/assets/images/hero/diploma-Teaching-(Primary).jpg" alt="project">
                    </a>
                    <div class="inner-content">
                        <a href="{{ route('humanities') }}">
                            <h5 class="title">Faculty of Humanities</h5>
                        </a>
                         <a href="{{ route('humanities') }}" class="btn btn-sm btn-outline-primary mt-2" style="font-size: 13px; padding: 5px 12px; border-radius: 20px;">
                            Discover
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end gallery section -->





  

@endsection
 
@extends ('frontend.master')

@section('content')

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/about/blogs.jpg') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Blogs</h2>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="single-project-info-wrapper-inner">
                <p class="disc" style="font-size:18px; text-align:justify">
                     Welcome to the Imperial Wisdom Graduate Campus (IWGC) Blogs—your trusted source for the latest
    insights and expert advice on education and professional growth. Our blog features carefully crafted
    articles on important education topics, emerging trends, and new developments shaping the academic
    landscape. Whether you're exploring professional training, seeking information on professional
    qualifications, planning to study abroad, or aiming to enhance your career through continuous
    professional development, IWGC’s blogs provide valuable guidance tailored just for you.<br> <br>

    Stay informed, inspired, and ahead of the curve with our engaging content designed to support your
    educational journey and help you make confident decisions for a successful future. Dive into IWGC Blogs
    today and unlock a world of knowledge that empowers your ambitions.
                </p>
            </div>
        </div>
    </div>
</div>


   <div class="rts-blog-list-area rts-section-gapBottom">
    <div class="container">
        <div class="row g-5">
            <!-- rts blog post area -->
            @foreach($blogs as $blog)
                <div class="col-lg-6 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.1">
                    <div class="single-blog-area-one column-reverse">
                        <p><span>by {{ $blog->author }}</span></p>
                        <a href="{{ route('blog-details', ['id' => $blog->id]) }}">
                            <h4 class="title">{{ $blog->title }}</h4>
                        </a>
                        <div class="bottom-details">
                            <a href="{{ route('blog-details', ['id' => $blog->id]) }}" class="thumbnail">
                                <img src="{{ asset('storage/' . $blog->main_image) }}" alt="blog-area">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- pagination area -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <div class="pagination">
                            {{ $blogs->links() }} <!-- Pagination links -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- pagination area End -->
        </div>
    </div>
</div>




        
@endsection
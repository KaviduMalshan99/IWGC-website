 
@extends ('frontend.master')

@section('content')


 <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Latest Blogs</span>
                        <h1 class="title rts-text-anime-style-1">
                            Latest Blogs
                        </h1>
                       <p class="disc" style="text-align: justify; width: 80%; margin: 0 auto;">
    Welcome to the Imperial Wisdom Graduate Campus (IWGC) Blogs—your trusted source for the latest
    insights and expert advice on education and professional growth. Our blog features carefully crafted
    articles on important education topics, emerging trends, and new developments shaping the academic
    landscape. Whether you're exploring professional training, seeking information on professional
    qualifications, planning to study abroad, or aiming to enhance your career through continuous
    professional development, IWGC’s blogs provide valuable guidance tailored just for you.

    Stay informed, inspired, and ahead of the curve with our engaging content designed to support your
    educational journey and help you make confident decisions for a successful future. Dive into IWGC Blogs
    today and unlock a world of knowledge that empowers your ambitions.
</p>

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
    <!-- about us area wrapper main end -->


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
 
@extends ('frontend.master')

@section('content')
<style>
    .text-truncate-3-lines {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
}

</style>

<!-- Banner Section -->
<div class="partner-breadcrumb" style="background-image: url('{{ asset('frontend/assets/images/about/blogs.jpg') }}'); background-size: cover; background-position: center;  height: 400px;position: relative;">
</div>

<!-- Title and Info Boxes -->
<div class="container mt-5 rts-section-gapBottom">
    <div class="row text-center mb-5">
        <h2 class="title rts-text-anime-style-1">Blogs</h2>
    </div>
    <div class="row g-4 mb-5">
        <div class="col-lg-12 mx-auto">
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

 <div class="rts-blog-list-area rts-section-gapBottom rts-section-gapTop mt-dec-blog-list">
        <div class="container">
            <div class="row g-5">
                <!-- rts blog post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    @foreach($blogs as $blog)
                        <div class="blog-single-post-listing" data-animation="fadeInUp" data-delay="0.2" style="border-color: #1b2954; box-shadow: 0 4px 10px rgba(27, 41, 84, 0.2);">
                            <div class="thumbnail">
                                <img src="{{ asset('storage/' . $blog->main_image) }}" alt="{{ $blog->title }}" style="height:600px">
                            </div>
                            <div class="blog-listing-content">
                                <div class="user-info">
                                    <div class="single">
                                        <i class="far fa-user-circle"></i>
                                        <span>by {{ $blog->author }}</span>
                                    </div>
                                    <div class="single">
                                        <i class="far fa-clock"></i>
                                        <span>{{ $blog->date->format('d M, Y') }}</span>
                                    </div>
                                    <div class="single">
                                        <i class="far fa-tags"></i>
                                        <span>{{ $blog->category }}</span>
                                    </div>
                                </div>
                                <a class="blog-title" href="{{ route('blog-details', $blog->id) }}">
                                    <h3 class="title animated fadeIn">{{ $blog->title }}</h3>
                                </a>
                               <div class="disc text-truncate-3-lines" style="text-align:justify">
                                    {!! $blog->description !!}
                                </div>

                                <a class="rts-btn btn-primary" href="{{ route('blog-details', $blog->id) }}">Read Details</a>
                            </div>
                        </div>
                    @endforeach

                    <!-- pagination area -->
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="pagination">
                                    <button class="active">01</button>
                                    <button>02</button>
                                    <button><i class="fal fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination area End -->
                </div>
                <!-- rts-blog post end area -->
                <!--rts blog wized area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 blog-list-style">
                    <!-- single wized start -->
                    <div class="rts-single-wized search1">
                        <div class="wized-header">
                            <h5 class="title">
                                Search Here
                            </h5>
                        </div>
                        <div class="wized-body">
                            <div class="rts-search-wrapper">
                                <input class="Search1" type="text" placeholder="Enter Keyword">
                                <button><i class="fal fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized Categories">
                        <div class="wized-header">
                            <h5 class="title">
                                Categories
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                           <ul class="single-categories">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="#">{{ $category }} <i class="far fa-long-arrow-right"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized Recent-post">
                        <div class="wized-header">
                            <h5 class="title">
                                Recent Posts
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- recent-post -->
                           @foreach($recentPosts as $post)
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="{{ route('blog-details', $post->id) }}">
                                            <img src="{{ asset('storage/' . $post->main_image) }}" alt="{{ $post->title }}" style="width:90px">
                                        </a>
                                    </div>
                                    <div class="content-area">
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span>{{ $post->date->format('d M, Y') }}</span>
                                        </div>
                                        <a class="post-title" href="{{ route('blog-details', $post->id) }}">
                                            <h6 class="title">{{ \Illuminate\Support\Str::limit($post->title, 40) }}</h6>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            <!-- recent-post End -->
                                                 
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized tags">
                        <div class="wized-header">
                            <h5 class="title">
                                Popular Tags
                            </h5>
                        </div>
                        <div class="wized-body">
                          <div class="tags-wrapper">
                                @foreach($tags as $tag)
                                    <a href="#">{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- single wized End -->
                    <!-- single wized start -->
                    <div class="rts-single-wized contact">
                        <div class="wized-header">
                            <a href="#"><img src="{{ asset('logo-golden.png') }}" alt="IWGC"></a>
                        </div>
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary btn-white" href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wized End -->
                </div>
                <!-- rts- blog wized end area -->
            </div>
        </div>
    </div>



  
        
@endsection
 
@extends ('frontend.master')

@section('content')



      <!-- Blog Details Banner -->
<div class="blog-details-banner-large-image bg-dark text-center" style="display: flex; align-items: center; justify-content: center; background-size: cover; background-position: center;">
    <div class="container">
        
    </div>
</div>

<div class="blog-details-area-main-wrapper mt-dec-180">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-area-inner-content">
                    <div class="blog-details-top-wrapper">
                        <div class="single">
                            <i class="fa-regular fa-circle-user"></i>
                            <span>by {{ $blog->author }}</span>
                        </div>
                        <div class="single">
                            <i class="fa-regular fa-clock"></i>
                            <span>{{ $blog->date->format('d M, Y') }}</span>
                        </div>
                        <div class="single">
                            <i class="fa-regular fa-tags"></i>
                            <span>{{ $blog->category }}</span>
                        </div>
                    </div>
                    <h2 class="title">{{ $blog->title }}</h2>
                    
                    <div class="blog-content">
                        {!! $blog->description !!}
                    </div>

                    @if($blog->main_image)
                    <div class="thumbnail-large">
                        <img src="{{ asset('storage/'.$blog->main_image) }}" alt="{{ $blog->title }}">
                    </div>
                    @endif

                    @if($blog->subimage1 || $blog->subimage2)
                    <div class="row align-items-center mt-4">
                        @if($blog->subimage1)
                        <div class="col-lg-6">
                            <div class="thumbnail details mb_sm--15">
                                <img src="{{ asset('storage/'.$blog->subimage1) }}" alt="{{ $blog->title }}">
                            </div>
                        </div>
                        @endif
                        @if($blog->subimage2)
                        <div class="col-lg-6">
                            <div class="thumbnail details mb_sm--15">
                                <img src="{{ asset('storage/'.$blog->subimage2) }}" alt="{{ $blog->title }}">
                            </div>
                        </div>
                        @endif
                    </div>
                    @endif

                    @if(!empty($blog->tags))
                    <div class="row align-items-center mt-4">
                        <div class="col-lg-6 col-md-12">
                            <div class="details-tag">
                                <h6>Tags:</h6>
                                @foreach($blog->tags as $tag)
                                <button>{{ $tag }}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="details-share">
                                <h6>Share:</h6>
                                <button><i class="fab fa-facebook-f"></i></button>
                                <button><i class="fab fa-twitter"></i></button>
                                <button><i class="fab fa-instagram"></i></button>
                                <button><i class="fab fa-linkedin-in"></i></button>
                            </div>
                        </div>
                    </div>
                    @endif

                    
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 blog-list-style pl--30 pl_md--10 pl_sm--10">
                

                <!-- Categories Widget -->
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title">Categories</h5>
                    </div>
                    <div class="wized-body">
                        @foreach(\App\Models\Blog::distinct()->pluck('category') as $category)
                        <ul class="single-categories">
                            <li><a href="#">{{ $category }} <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>

                <!-- Recent Posts Widget -->
                <div class="rts-single-wized Recent-post">
                    <div class="wized-header">
                        <h5 class="title">Recent Posts</h5>
                    </div>
                    <div class="wized-body">
                        @foreach(\App\Models\Blog::latest()->take(3)->get() as $recentBlog)
                        <div class="recent-post-single">
                            @if($recentBlog->main_image)
                            <div class="thumbnail">
                                <a href="{{ route('blog-details', $recentBlog->id) }}">
                                    <img src="{{ asset('storage/'.$recentBlog->main_image) }}" alt="{{ $recentBlog->title }}">
                                </a>
                            </div>
                            @endif
                            <div class="content-area">
                                <div class="user">
                                    <i class="fal fa-clock"></i>
                                    <span>{{ $recentBlog->date->format('d M, Y') }}</span>
                                </div>
                                <a class="post-title" href="{{ route('blog-details', $recentBlog->id) }}">
                                    <h6 class="title">{{ Str::limit($recentBlog->title, 50) }}</h6>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tags Widget -->
                <div class="rts-single-wized tags">
                    <div class="wized-header">
                        <h5 class="title">Popular Tags</h5>
                    </div>
                    <div class="wized-body">
                        <div class="tags-wrapper">
                            @foreach(\App\Models\Blog::all()->pluck('tags')->flatten()->unique()->take(10) as $tag)
                            <a href="#">{{ $tag }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Contact Widget -->
                <div class="rts-single-wized contact">
                    <div class="wized-header">
                        <a href="#"><img src="{{ asset('logo-golden.png') }}" alt="Business_logo"></a>
                    </div>
                    <div class="wized-body">
                        <h5 class="title">Need Help? We Are Here To Help You</h5>
                        <a class="rts-btn btn-primary btn-white" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
@endsection
 
@extends ('frontend.master')

@section('content')



      <!-- Blog Details Banner -->
<div class="blog-details-banner-large-image bg-dark text-center" style="display: flex; align-items: center; justify-content: center; background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div>
                    <span class="bg-title" style="color: #fff; display: block; margin-bottom: 10px;">Blog Details</span>
                    <h1 class="title rts-text-anime-style-1" style="color: white; ">
                        {{ $blog->title }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

   <div class="blog-details-area-main-wrapper pt--80 pb--80">
        <div class="container-blog-details">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-area-inner-content">
                        <div class="blog-details-top-wrapper">
                            <!-- Blog Author -->
                            <div class="single">
                                <i class="fa-regular fa-circle-user"></i>
                                <span>by {{ $blog->author }}</span>
                            </div>
                            <!-- Blog Date -->
                            <div class="single">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{ $blog->date->format('d M, Y') }}</span>
                            </div>
                            <!-- Blog Category -->
                            <div class="single">
                                <i class="fa-regular fa-tags"></i>
                                <span>{{ $blog->category }}</span>
                            </div>
                        </div>
                        
                        <!-- Blog Title -->
                        <h2 class="title">{{ $blog->title }}</h2>
                        
                        <!-- Blog Description -->
                        <p class="disc" style="text-align:justify">
                            {{ $blog->description }}
                        </p>
                         <!-- Main Image -->
                        @if($blog->main_image)
                            <div class="thumbnail-large mb-5">
                                <img src="{{ asset('storage/' . $blog->main_image) }}" alt="blog" class="img-fluid w-100 rounded">
                            </div>
                        @endif

                        
                    <!-- Sub Images -->
                    @if($blog->subimage1 || $blog->subimage2)
                        <div class="row g-4 mb-5">
                            @if($blog->subimage1)
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $blog->subimage1) }}" alt="Sub Image 1" class="img-fluid rounded">
                                </div>
                            @endif
                            @if($blog->subimage2)
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $blog->subimage2) }}" alt="Sub Image 2" class="img-fluid rounded">
                                </div>
                            @endif
                        </div>
                    @endif

                     <!-- Tags & Share -->
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="details-tag">
                                <h6>Tags:</h6>
                                @foreach(array_slice($blog->tags ?? [], 0, 3) as $tag)
                                    <button class="btn btn-sm me-1 mb-1">{{ $tag }}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="details-share text-lg-end mt-3 mt-lg-0">
                                <h6>Share:</h6>
                                <button><i class="fab fa-facebook-f"></i></button>
                                <button><i class="fab fa-instagram"></i></button>
                                <button><i class="fab fa-linkedin-in"></i></button>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection
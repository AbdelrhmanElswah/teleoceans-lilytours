@extends('Front.partials._layout')

@section('content')
    <div class="breadcrumb breadcrumb-style-one" style="background: url('{{ asset('assets/images/pyramids/2.jpg') }}') no-repeat center; background-size: cover;">
        <div class="container">
            <div class="col-lg-12 text-center" style="padding:150px 0;">
                <h2 class="breadcrumb-title">Latest Blogs</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blogs-wrapper pt-76">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="blogs mt-30">
                        <h2>Latest <span>Blogs</span></h2>
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-12 col-md-6 col-lg-4 mb-4">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}">
                                        </div>
                                        <div class="blog-text">
                                            <h4>{{ $blog->title }}</h4>
                                            <p>{{ Str::limit($blog->description, 150) }}</p>
                                         
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<style>
    /* تنسيق بسيط للمدونة */
    .blog-card {
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-radius: 6px;
        overflow: hidden;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }
    
    /* تنسيق حاوية الصورة */
    .blog-img {
        width: 100%;
        height: auto;
        max-height: 220px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    /* تنسيق الصورة نفسها */
    .blog-img img {
        width: 100%;
        height: auto;
        max-height: 220px;
        transition: transform 0.3s ease;
    }
    
    .blog-card:hover .blog-img img {
        transform: scale(1.05);
    }
    
    /* تنسيق النص */
    .blog-text {
        padding: 15px;
    }
    
    .blog-text h4 {
        margin-bottom: 10px;
        font-size: 18px;
        color: #333;
    }
    
    .blog-text p {
        color: #666;
        margin-bottom: 15px;
    }
    
    /* تنسيق زر عرض التفاصيل */
    .view-blog {
        display: inline-block;
        color: #007bff;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .view-blog:hover {
        color: #0056b3;
        text-decoration: underline;
    }
</style>
@endsection
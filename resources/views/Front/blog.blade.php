@extends('Front.partials._layout')

@section('content')
    <div class="breadcrumb breadcrumb-style-one" style="background: url('{{ asset('assets/images/pyramids/2.jpg') }}') no-repeat center; background-size: cover; margin-top: 0px;">
        <div class="container">
            <div class="col-12 text-center" style="padding: 100px 0; position: relative; z-index: 1;">
                <h2 class="breadcrumb-title">Latest Blogs</h2>
                <ul class="d-flex justify-content-center breadcrumb-items list-unstyled">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="blogs-wrapper py-5">
        <div class="container">
            <h2 class="text-center mb-4">Latest <span>Blogs</span></h2>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="blog-card h-100">
                            <div class="blog-img">
                                <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                            </div>
                            <div class="blog-text p-3">
                                <h4 class="mb-2">{{ $blog->title }}</h4>
                                <p class="mb-3">{{ Str::limit(strip_tags($blog->description), 150) }}</p>
                                <a href="{{ route('blog.details', $blog->id) }}" class="view-blog">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('css')
<style>
    .breadcrumb-style-one {
        min-height: 250px;
        display: flex;
        align-items: center;
    }
    .breadcrumb-title {
        font-size: 2rem;
        color: #fff;
    }
    .breadcrumb-items li {
        margin: 0 10px;
        color: #fff;
    }
    .breadcrumb-items a {
        color: #fff;
        text-decoration: none;
    }
    .breadcrumb-items a:hover {
        text-decoration: underline;
    }
    .blog-card {
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-radius: 6px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }
    .blog-img img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .blog-card:hover .blog-img img {
        transform: scale(1.05);
    }
    .blog-text h4 {
        font-size: 1.25rem;
        color: #333;
    }
    .blog-text p {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.5;
    }
    .view-blog {
        color: #007bff;
        font-weight: 600;
        text-decoration: none;
    }
    .view-blog:hover {
        color: #0056b3;
        text-decoration: underline;
    }
    @media (max-width: 768px) {
        .breadcrumb-title {
            font-size: 1.5rem;
        }
        .breadcrumb-style-one {
            min-height: 200px;
            padding: 50px 0;
        }
        .blog-text h4 {
            font-size: 1.1rem;
        }
        .blog-text p {
            font-size: 0.9rem;
        }
    }
</style>
@endsection
@extends('Front.partials._layout')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb breadcrumb-style-one" style="background: url('{{ asset('assets/images/pyramids/2.jpg') }}') no-repeat center; background-size: cover; margin-top: 0px;">
        <div class="container">
            <div class="col-12 text-center" style="padding: 120px 0; position: relative; z-index: 1;">
                <h2 class="breadcrumb-title">{{ $blog->title }}</h2>
                <ul class="d-flex justify-content-center breadcrumb-items list-unstyled">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="{{ route('blogs') }}">Blogs</a></li> -->
                    <li class="breadcrumb-item active">Blogs</li>
                    <li class="breadcrumb-item active">Details</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Blog Article Section -->
    <div class="blog-article-wrapper py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <article class="blog-article shadow-sm p-4 bg-white rounded">
                        <!-- Blog Image -->
                        <div class="blog-img mb-4">
                            <img src="{{ asset('images/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                        </div>
                        <!-- Blog Title -->
                        <h1 class="blog-title mb-4">{{ $blog->title }}</h1>
                        <!-- Blog Description -->
                        <div class="blog-description">{!! nl2br($blog->description) !!}</div>
                    </article>
                    <!-- Back to Blogs Button -->
                    <div class="text-center mt-4">
                        <a href="{{ route('blogs') }}" class="btn btn-primary">Back to Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<style>
    /* Breadcrumb Styling */
    .breadcrumb-style-one {
        min-height: 300px;
        display: flex;
        align-items: center;
        position: relative;
        pointer-events: none;
    }
    .breadcrumb-style-one .container {
        pointer-events: auto;
    }
    .breadcrumb-title {
        font-size: 2.5rem;
        color: #fff;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .breadcrumb-items li {
        margin: 0 10px;
        color: #fff;
        font-size: 1rem;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    .breadcrumb-items a {
        color: #fff;
        text-decoration: none;
    }
    .breadcrumb-items a:hover {
        text-decoration: underline;
    }
    .blog-article-wrapper {
        background-color: #f8f9fa;
    }
    .blog-article {
        border-radius: 10px;
        overflow: hidden;
    }
    .blog-img img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        object-position: center;
        border-radius: 8px;
    }
    .blog-title {
        font-size: 2rem;
        color: #2c3e50;
        font-weight: 700;
        line-height: 1.3;
    }
    .blog-description {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.8;
        text-align: justify;
        direction: ltr;
    }
    .blog-description p {
        margin-bottom: 1.5rem;
    }
    .blog-description strong {
        color: #333;
    }
    .blog-description em {
        color: #666;
    }
    html[lang="ar"] .blog-description {
        direction: rtl;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 25px;
        font-size: 1rem;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    @media (max-width: 768px) {
        .breadcrumb-title {
            font-size: 1.8rem;
        }
        .breadcrumb-style-one {
            min-height: 200px;
            padding: 40px 0;
        }
        .blog-article {
            padding: 2rem;
        }
        .blog-img img {
            height: 250px;
        }
        .blog-title {
            font-size: 1.5rem;
        }
        .blog-description {
            font-size: 1rem;
        }
    }
    @media (max-width: 576px) {
        .blog-article {
            padding: 1.5rem;
        }
        .blog-img img {
            height: 200px;
        }
        .blog-title {
            font-size: 1.25rem;
        }
        .blog-description {
            font-size: 0.95rem;
        }
    }
    @media print {
        .breadcrumb-style-one {
            display: none;
        }
        .blog-article-wrapper {
            padding: 0;
        }
        .blog-article {
            box-shadow: none;
            padding: 0;
        }
        .blog-img img {
            max-height: 200px;
        }
        .btn-primary {
            display: none;
        }
    }
</style>
@endsection

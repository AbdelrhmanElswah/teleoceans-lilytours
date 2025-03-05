@extends('Front.partials._layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one" style="background: url('{{ asset('assets/images/pyramids/2.jpg') }}') no-repeat center; background-size: cover;">
    <div class="container">
        <div class="col-lg-12 text-center" style="padding:150px 0;">
            <h2 class="breadcrumb-title">Terms & Conditions</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Terms & Conditions</li>
            </ul>
        </div>
    </div>
</div>

<div class="terms-wrapper pt-76">
    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-12">
                <div class="terms mt-30">
                    <h2 class="section-title">Terms & <span>Conditions</span></h2>
                    <div class="row">
                        @foreach($terms as $term)
                        <div class="col-12 mb-4">
                            <div class="term-card">
                                <div class="term-text">
                                    <h3 class="term-title">{{ $term->title }}</h3>
                                    <p>{!! $term->content !!}</p>
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
    /* Breadcrumb Styles */
    .breadcrumb-style-one {
        position: relative;
        color: #fff;
    }
    .breadcrumb-title {
        font-size: 48px; /* Increased from 36px */
        font-weight: 700;
        margin-bottom: 15px;
        color: #fff;
    }
    .breadcrumb-items {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .breadcrumb-items .breadcrumb-item {
        display: inline-block;
        margin: 0 10px;
        font-size: 18px; /* Increased text size */
    }
    .breadcrumb-items .breadcrumb-item a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .breadcrumb-items .breadcrumb-item a:hover {
        color: #ff0000;
    }

    /* Section Title Styles */
    .section-title {
        font-size: 40px; /* Increased from 32px */
        font-weight: 700;
        margin-bottom: 40px;
        text-align: center;
        color: #000;
    }
    .section-title span {
        color: #ff0000;
    }

    /* Term Card Styles */
    .term-card {
        background: #fff;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        overflow: hidden;
        padding: 35px;
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e0e0e0;
    }
    .term-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    /* Term Title Styles */
    .term-title {
        font-size: 30px; /* Increased from 24px */
        font-weight: 600;
        margin-bottom: 20px;
        color: #000;
    }

    /* Term Text Styles */
    .term-text p {
        color: #333; /* Slightly darker for better readability */
        line-height: 2; /* Increased line height */
        font-size: 20px; /* Increased from 16px */
    }
    .term-text p strong {
        color: #000;
    }

    /* Hover Effects */
    .term-card:hover .term-title {
        color: #ff0000;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .breadcrumb-title {
            font-size: 36px;
        }
        .section-title {
            font-size: 32px;
        }
        .term-title {
            font-size: 24px;
        }
        .term-text p {
            font-size: 18px;
        }
    }
</style>
@endsection
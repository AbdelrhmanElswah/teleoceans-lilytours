@extends('Front.partials._layout')
@section('content')


    <div class="breadcrumb breadcrumb-style-one" style="background: url('{{asset('assets/images/pyramids/2.jpg')}}') no-repeat center;height: 400px">
        <div class="container">
            <div class="col-lg-12 text-center pt-110">
                <h2 class="breadcrumb-title">{{$page_title}}</h2>
            </div>
        </div>
    </div>

    <div class="package-wrapper pt-80">
        <div class="container">
            <div class="row">
                @foreach($programs as $program)
                <div class="col-lg-4 col-md-6">
                    <div class="package-card-alpha">
                        <div class="package-thumb">
                            <a href="{{route('details',$program->id)}}"><img style="height: 300px" src="{{asset('images/programs/'.$program->image)}}" alt=""></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>{{$program->duration}}</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('details',$program->id)}}">{{$program->name}}</a></h3>
                            <div class="p-card-bottom">
                                <div class="p-card-info">
                                    <span>From</span>
                                    <h6>{{$program->price}}$ <span>Per Person</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <ul class="pagination pagination-style-one justify-content-center pt-80">
                            <li class="page-item page-arrow"><a class="page-link" href="#"><i
                                        class="bi bi-chevron-double-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item page-arrow"><a class="page-link" href="#"><i
                                        class="bi bi-chevron-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

@endsection

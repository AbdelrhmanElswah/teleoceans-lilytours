@extends('admin.partials._layout')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Project Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects Detail</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Title</span>
                                        <span
                                            class="info-box-number text-center text-muted mb-0">{{$program->name}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Price</span>
                                        <span
                                            class="info-box-number text-center text-muted mb-0">{{$program->price}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Sub Category</span>
                                        <span
                                            class="info-box-number text-center text-muted mb-0">{{$program->sub_category->name}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Type</span>
                                        <span
                                            class="info-box-number text-center text-muted mb-0">{{$program->type}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span
                                            class="info-box-text text-center text-muted">Program Duration And Track</span>
                                        <span class="info-box-number text-center text-muted mb-0">{{$program->duration}} - {{$program->track}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Run Dayes</span>
                                        <span
                                            class="info-box-number text-center text-muted mb-0">{{$program->run_dates}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row mt-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="Small-Description-tab" data-toggle="tab" href="#Small-Description" role="tab" aria-controls="Small-Description" aria-selected="false">Small Description</a>
                                    <a class="nav-item nav-link" id="Price-Details-tab" data-toggle="tab" href="#Price-Details" role="tab" aria-controls="Price-Details" aria-selected="false">Price Details</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="Description" role="tabpanel" aria-labelledby="Description-tab">{!! $program->description !!} </div>
                                <div class="tab-pane fade" id="Small-Description" role="tabpanel" aria-labelledby="Small-Description-tab"> {!! $program->small_description !!}</div>
                                <div class="tab-pane fade" id="Price-Details" role="tabpanel" aria-labelledby="Price-Details-tab"> {!! $program->price_details !!} </div>
                            </div>
                        </div>
                    <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Highlights
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->highlights as $highlight)
                                            <li>{{$highlight->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Sights
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->sights as $sight)
                                                <li>{{$sight->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Includes
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->includes as $include)
                                                <li>{{$include->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Excludes
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->excludes as $exclude)
                                                <li>{{$exclude->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Accommodations
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->Accommodation as $Accommodation)
                                                <li>{{$Accommodation->title}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                           Addons
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->Addon as $Addon)
                                                <li>{{$Addon->title}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-text-width"></i>
                                            Itineraries
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <ul>
                                            @foreach($program->Itinerary as $Itinerary)
                                                <li>{{$Itinerary->title}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Gallary For {{$program->name}}</h3>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Gallery</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($media as $me)
                                        <div class="col-sm-12">
                                            <a href="{{asset('images/media/'.$me->image)}}" data-toggle="lightbox" data-title="{{$me->title}}" data-gallery="gallery">
                                                <img src="{{asset('images/media/'.$me->image)}}" class="img-fluid mb-2" alt="white sample">
                                            </a>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a   title="delete Image" data-toggle="modal" data-media_program_id="{{ $me->id }}"
                                                         data-target="#media_program_delete" href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                </div>

                                                <strong>{{$me->program->name}}</strong>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

@endsection

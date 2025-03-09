@extends('admin.partials._layout')
@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Programs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Program</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Edit Program</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{route('programs.update',$program->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                @foreach($errors->all() as $error)
                                    {{ $error }}<br/>
                                @endforeach
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="name" value="{{$program->name}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input name="price" value="{{$program->price}}" class="form-control" type="number">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Type</label>
                                    <input name="type" value="{{$program->type}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sub Category Name</label>
                                    <select name="sub_category_id" class="form-control">
                                        @foreach($sub_categories as $category)
                                            <option value="{{$category->id}}" {{$program->sub_category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Program Duration</label>
                                    <input name="duration" value="{{$program->duration}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Program Track</label>
                                    <input name="track" value="{{$program->track}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Program run dates</label>
                                    <input name="run_dates" value="{{$program->run_dates}}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Main Image</label>
                                    <input class="imagee form-control" type="file" value="{{$program->image}}" name="image" id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <img src="{{asset('images/programs/'.$program->image.'')}}" style="width: 100px" class="img-thumbnail image-preview">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Small Description</label>
                                    <textarea id="small_discription" name="small_description" style="display: none;">{{$program->small_description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price Details</label>
                                    <textarea id="price_details" name="price_details" style="display: none;">{{$program->price_details}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="program_discription" name="description" style="display: none;">{{$program->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Package Highlights</label>
                                    <select name="highlights[]" class="duallistbox" multiple="multiple">
                                        @foreach($highlights as $highlight)
                                            @if($program->highlights()->get()->contains($highlight->id))
                                                <option value="{{$highlight->id}}" selected>{{$highlight->name}}</option>
                                            @else
                                                <option value="{{$highlight->id}}">{{$highlight->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Package INCLUDED SIGHTS</label>
                                    <select name="sights[]" class="duallistbox" multiple="multiple">
                                        @foreach($sights as $sight)
                                            @if($program->sights()->get()->contains($sight->id))
                                                <option value="{{$sight->id}}" selected>{{$sight->name}}</option>
                                            @else
                                                <option value="{{$sight->id}}">{{$sight->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Program INCLUDES</label>
                                    <select name="includes[]" class="duallistbox" multiple="multiple">
                                        @foreach($includes as $include)
                                            @if($program->includes()->get()->contains($include->id))
                                                <option value="{{$include->id}}" selected>{{$include->name}}</option>
                                            @else
                                                <option value="{{$include->id}}">{{$include->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Program EXCLUDES</label>
                                    <select name="excludes[]" class="duallistbox" multiple="multiple">
                                        @foreach($excludes as $exclude)
                                            @if($program->excludes()->get()->contains($exclude->id))
                                                <option value="{{$exclude->id}}" selected>{{$exclude->name}}</option>
                                            @else
                                                <option value="{{$exclude->id}}">{{$exclude->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Addons Related</label>
                                    <select name="addons[]" class="duallistbox" multiple="multiple">
                                        @foreach($addons as $addon)
                                            @if($program->Addon()->get()->contains($addon->id))
                                                <option value="{{$addon->id}}" selected>{{$addon->title}}</option>
                                            @else
                                                <option value="{{$addon->id}}">{{$addon->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Itinerary Related</label>
                                    <select name="itineraries[]" class="duallistbox" multiple="multiple">
                                        @foreach($itineraries as $itinerary)
                                            @if($program->Itinerary()->get()->contains($itinerary->id))
                                                <option value="{{$itinerary->id}}" selected>{{$itinerary->title}}</option>
                                            @else
                                                <option value="{{$itinerary->id}}">{{$itinerary->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Accommodation Related</label>
                                    <select name="accommodations[]" class="duallistbox" multiple="multiple">
                                        @foreach($accommodations as $accommodation)
                                            @if($program->Accommodation()->get()->contains($accommodation->id))
                                                <option value="{{$accommodation->id}}" selected>{{$accommodation->title}}</option>
                                            @else
                                                <option value="{{$accommodation->id}}">{{$accommodation->title}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- إضافة الـ Checkbox لـ is_featured -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Show on Website?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="is_featured" value="1" id="isFeatured" {{ $program->is_featured ? 'checked' : '' }}>
                                        <label class="form-check-label" for="isFeatured">
                                            Yes, display this program on the website
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- إضافة الـ Checkbox لـ is_latest -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Show in Latest Programs?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="is_latest" value="1" id="isLatest" {{ $program->is_latest ? 'checked' : '' }}>
                                        <label class="form-check-label" for="isLatest">
                                            Yes, display this program in Latest Programs
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
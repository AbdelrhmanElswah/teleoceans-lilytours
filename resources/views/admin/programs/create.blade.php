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
                        <li class="breadcrumb-item active">Add Program</li>
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
                    <h3 class="card-title">Add Program</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('programs.store')}}" method="post" enctype="multipart/form-data">
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
                                    <input name="name" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input name="price" class="form-control" type="number">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Type</label>
                                    <input name="type" class="form-control" type="text">
                                </div>

                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label>Sub Category Name</label>
                                <select name="sub_category_id" class="form-control">
                                    <option value="">....</option>
                                    @foreach($sub_categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Program Duration</label>
                                    <input name="duration" class="form-control" type="text">
                                </div>

                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Program Track</label>
                                    <input name="track" class="form-control" type="text">
                                </div>

                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Program run dates</label>
                                    <input name="run_dates" class="form-control" type="text">
                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label >Main Image</label>
                                    <input class="imagee form-control" type="file" name="image" id="exampleInputFile">
                                </div>
                                <div class="form-group">
                                    <img src="" style="width: 100px" class="img-thumbnail image-preview">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Small Description</label>

                                    <textarea id="small_discription" name="small_description" style="display: none;">  Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price Details</label>

                                    <textarea id="price_details" name="price_details" style="display: none;">  Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>

                                    <textarea id="program_discription" name="description" style="display: none;">  Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;</textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Package Highlights</label>
                                    <select name="highlights[]" class="duallistbox" multiple="multiple">

                                        @foreach($highlights as $highlight)
                                            <option value="{{$highlight->id}}">{{$highlight->name}}</option>
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
                                            <option value="{{$sight->id}}">{{$sight->name}}</option>
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
                                            <option value="{{$include->id}}">{{$include->name}}</option>
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
                                            <option value="{{$exclude->id}}">{{$exclude->name}}</option>
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
                                            <option value="{{$addon->id}}">{{$addon->title}}</option>
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
                                            <option value="{{$itinerary->id}}">{{$itinerary->title}}</option>
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
                                            <option value="{{$accommodation->id}}">{{$accommodation->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <!-- /.row -->
                        <hr>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </form>


            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection

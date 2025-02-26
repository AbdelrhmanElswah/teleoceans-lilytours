@extends('admin.partials._layout')
@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>FAQs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add FAQ</li>
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
                    <h3 class="card-title">Add FAQ</h3>

                </div>
                <!-- /.card-header -->
                <form action="{{route('faqs.store')}}" method="post" enctype="multipart/form-data">
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

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input name="question" class="form-control" type="text">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Answer</label>

                                    <textarea id="discription" name= "answer" style="display: none;">  Place &lt;em&gt;some&lt;/em&gt; &lt;u&gt;text&lt;/u&gt; &lt;strong&gt;here&lt;/strong&gt;</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

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

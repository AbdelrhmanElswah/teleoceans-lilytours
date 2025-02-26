@extends('Front.partials._layout')
@section('content')


    <div class="breadcrumb breadcrumb-style-one"style="background: url('{{asset('assets/images/pyramids/2.jpg')}}') no-repeat center;">
        <div class="container">
            <div class="col-lg-12 text-center" style="padding:150px 0;">
                <h2 class="breadcrumb-title">FAQ</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">FAQ</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="faq-wrapper pt-76">
        <div class="container">
            <div class="row pb-4">
                <div class="col-lg-12 ">
                    <div class="faqs mt-30">
                        <h2>Frequently <span>Asked </span><br>
                            Question</h2>
                        <div class="accordion faq-accordion accordion-flush" id="faq-accordion-example">
                            @foreach($faqs as $faq)
                            <div class="accordion-item faq-accordion">
                                <h2 class="accordion-header" id="faq-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse{{$faq->id}}" aria-expanded="false" aria-controls="faq-collapseOne">
                                      {{$faq->answer}}
                                    </button>
                                </h2>
                                <div id="faq-collapse{{$faq->id}}" class="accordion-collapse collapse  " aria-labelledby="faq-headingOne" data-bs-parent="#faq-accordion-example">
                                    <div class="accordion-body"><p>{{$faq->question}}</p>

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

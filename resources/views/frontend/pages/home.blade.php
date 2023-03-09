@extends('frontend.layout.muster')
@section('slider')
@include('frontend.layout.slider')

@endsection
@section('content')

<div class="service_area">
  <div class="row">
    <div class="service_section wow bounceInLeft animated">
      <div class="col-md-4">
        <div class="single_service">
        </div>
      </div>
      <div class="col-md-4">
        <div class="single_service1">

          <h1><i><span style="font-family: 'normal';text-decoration-line: underline;  ">OUR COMPANIES</span></i></h1>
          <h4></h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="single_service">
        </div>
      </div>

    </div>
  </div>

</div>

<div class="container">


  <div class="row">
    <div class="blog_section">
    @foreach($companies as $company)
      <div class="single_blog col-md-4 slider-content">

        <a href="{{$company->link}}">
          <img src="{{ asset('logo/' . $company->logo)}}" class="" alt="image" style="width:300px;height:300px";>

          <div class="slider-text">
            <h3>{{$company->title}}</h3>
            <p>{{$company->description}}</p>
          </div>
        </a>

      </div>
      @endforeach
    </div>

  </div>

</div>



@endsection

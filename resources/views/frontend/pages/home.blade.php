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
      <div class="single_blog col-md-4 slider-content">
        <a href="https://www.anhenterprise.com/">
          <img src="{{asset('/assets/frontend/images/companies/ANH_Enterprise_Limited_Logo.png')}}" class="" alt="ANH Enterprise">

          <div class="slider-text">
            <h3>ANH Enterprise</h3>
            <p>ANH Enterprise Limited is one of the leading Warehouse Solution, Material Handling, Fabric Makeup, Dyeing & Automation Solution Companies in Bangladesh.</p>
          </div>
        </a>
      </div>
      <div class="single_blog col-md-4 slider-content">
        <a href="https://www.srdlbd.com/">
          <img src="{{asset('/assets/frontend/images/companies/ANH_Limited_Logo.png')}}" class="" alt="ANH Limited">
          <div class="slider-text">
            <h3>ANH Limited</h3>
            <p>ANH Limited is one of the leading Warehouse Solution, Material Handling, Fabric Makeup, Dyeing & Automation Solution Companies in Bangladesh.</p>
          </div>
        </a>
      </div>
      <div class="single_blog col-md-4 slider-content">
        <a href="https://www.srdlbd.com/">
          <img src="{{asset('/assets/frontend/images/companies/SRD_Limited_Logo.png')}}" class="" alt="SRD Limited">
          <div class="slider-text">
            <h3>SRD Limited</h3>
            <p>SRD Limited is one of the top construction company in Bangladesh, and we are working together to ensure your construction and business needs are met.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


@endsection
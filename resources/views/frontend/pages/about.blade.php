@extends('frontend.layout.muster')
@section('content')
<div class="banner">
  <div>
    <h1>Welcome to the site</h1>
    
    <button>Get started</button>
  </div>  
</div>

<style>
.banner {
    /* The image used */
    background-image:
    url(assets/frontend/slider/Slider1.jpg);
    /* Set background size */
    background-size:cover;
    background-attachment: fixed;
    /* Prevent image from repeating */
   /* background-repeat: no-repeat;*/
    height: 400px;
  }
</style>

@endsection
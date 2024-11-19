@extends('layouts.app')

@section('content')
<div id="about" class="section  wow fadeIn">
    <div class="container">
      <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>The Specialist Clinic</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>What We Do</h4>
               <h2>Clinic Service</h2>
               <!-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> -->
               <p> "At Sangwan Hospital, we are dedicated to providing high-quality, compassionate healthcare services. Our specialties include life-changing surgeries such as cleft lip and palate repair, aimed at enhancing the quality of life for children and families in need. We are also deeply committed to community outreach through medical missions and charitable initiatives, ensuring that care reaches the most underserved areas. Our team of expert doctors, nurses, and volunteers work together to make a lasting difference in the lives of our patients."
Feel free to adjust the tone and details based on the hospital's specific services and values! </p>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/about_03.jpg" alt="" class="img-responsive">
               <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
            </div>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>

   </div>
   <!-- end container -->
</div>
@endsection

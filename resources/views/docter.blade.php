@extends('layouts.app')

@section('content')
<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
    <div class="container">
  
    <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>Our Specialist </h2>
      </div>


      <style>
    .widget img {
        width: 200px; /* Set the desired width */
        height: 200px; /* Set the desired height */
        object-fit: cover; /* Ensure the image scales proportionally */
    }
</style>

      <div class="row dev-list text-center">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
    <div class="widget clearfix">
        <img src="images/doc1.jpg" alt="Dr. Rakesh Sangwan" class="img-responsive img-rounded">
        <div class="widget-title">
            <h3>Dr. Rakesh Sangwan</h3>
            <small>Founder & Director</small>
        </div>
        <!-- end title -->
        <p>Welcome! I am Dr. Rakesh Sangwan, the founder of Sangwan Hospital in Charkhi Dadri. My vision is to provide top-notch healthcare and improve the well-being of our community through dedicated care and innovation.</p>

        <div class="footer-social">
            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
        </div>
    </div><!--widget -->
</div><!-- end col -->

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
    <div class="widget clearfix">
        <img src="images/doc3.jpg" alt="Dr. Pankaj Sangwan" class="img-responsive img-rounded">
        <div class="widget-title">
            <h3>Dr. Pankaj Sangwan</h3>
            <small>Specialist - Internal Medicine</small>
        </div>
        <!-- end title -->
        <p>Hello! I am Dr. Pankaj Sangwan, specializing in internal medicine. I strive to ensure accurate diagnoses and personalized care for every patient, making healthcare accessible and efficient in our region.</p>

        <div class="footer-social">
            <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
        </div>
    </div><!--widget -->
</div><!-- end col -->


          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
              <div class="widget clearfix">
                  <img src="images/docS.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
   <h3>Dr. Arjun Malhotra</h3>
   <small>Orthopedics Specialist</small>
</div>
<!-- end title -->
<p>Hello, I am Dr. Arjun Malhotra, a dedicated orthopedic specialist at Sangwan Hospital. My mission is to help patients achieve a pain-free and active lifestyle through advanced treatments and personalized care.</p>


                  <div class="footer-social">
                      <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div><!--widget -->
          </div><!-- end col -->

      </div><!-- end row -->
  </div><!-- end container -->
</div>

@endsection
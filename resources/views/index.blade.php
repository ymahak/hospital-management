@extends('layouts.app')
@section('content')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');" {{ $app = App\Models\settings::latest()->first() }}>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to RS Sangwan Hospital", "We Care Your Health", "We are Expert!" ]'>
                  <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
         <div class="service-time one" style="background:#2895f1;">
   <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
   <h3>Emergency Care</h3>
   <p>Our emergency department is equipped to handle urgent medical situations with the utmost care and efficiency. We are available 24/7 to provide critical care when you need it most.</p>
</div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>Working Hours</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span></li>
                     <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                     <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
         <div class="service-time three" style="background:#0060b1;">
   <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
   <h3>Hospital Timings</h3>
   <p>Our Hospital specialized consultations and treatments with experienced medical professionals. Visit us during scheduled hours for routine checkups and advanced healthcare services.</p>
</div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      <div class="heading">
         <!-- <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'icon-logo.png' }}" alt="#"></span> -->
         <h2>The Specialist Hospital</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>What We Do</h4>
               <h2>Hospital Service</h2>
               <!-- <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p> -->
               <p> "At Sangwan Hospital, we are dedicated to providing high-quality, compassionate healthcare services. Our specialties include life-changing surgeries such as cleft lip and palate repair, aimed at enhancing the quality of life for children and families in need. We are also deeply committed to community outreach through medical missions and charitable initiatives, ensuring that care reaches the most underserved areas. Our team of expert doctors, nurses, and volunteers work together to make a lasting difference in the lives of our patients."

Feel free to adjust the tone and details based on the hospital's specific services and values! </p>
               <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
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
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_02.jpg" alt="" class="img-responsive">
               </div>
               <h3>Hygienic Operating Room</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_03.jpg" alt="" class="img-responsive">
               </div>
               <h3>Specialist Physicians</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/clinic_01.jpg" alt="" class="img-responsive">
               </div>
               <h3>Digital Control Center</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                      <h4>PREMIUM FACILITIES</h4>
                      <p>We provide cutting-edge medical technology and comfortable amenities to ensure the best possible care.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>LARGE LABORATORY</h4>
                      <p>Our fully equipped laboratory offers precise diagnostics for effective treatment plans.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>DETAILED SPECIALIST</h4>
                      <p>Our team of experienced specialists ensures personalized and comprehensive care for every patient.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>CHILDREN CARE CENTER</h4>
                      <p>Dedicated facilities for pediatric care, ensuring your child's health and well-being.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>FINE INFRASTRUCTURE</h4>
                      <p>Our hospital boasts modern infrastructure to support efficient and effective healthcare delivery.</p>
                      </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>ANYTIME BLOOD BANK</h4>
                      <p>A reliable blood bank available round the clock for emergencies and planned procedures.</p>
                      </div>
                </div>
             </div>
          </div>
          @livewire('appointmentform')
       </div>
    </div>
 </div>
 <!-- end section -->

<!-- doctor -->

<div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
  <div class="container">

   <div class="heading">
         <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
         <h2>The Specialist Hospital</h2>
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
        <img src="images/docT.jpg" alt="Dr. Pankaj Sangwan" class="img-responsive img-rounded">
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

{{-- <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content">
               <div class="tab-pane active fade in" id="tab1">
                  <div class="row text-center">
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Shared Hosting</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>WordPress Hosting</h2>
                              <h3>$59/year</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Reseller Hosting</h2>
                              <h3>$85/one-time</h3>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end pane -->
               <div class="tab-pane fade" id="tab2">
                  <div class="row text-center">
                     <div class="col-md-6">
                        <div class="pricing-table">
                           <div class="pricing-table-header">
                              <h2>Dedicated Server</h2>
                              <h3>$85/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="pricing-table pricing-table-highlighted">
                           <div class="pricing-table-header grd1">
                              <h2>VPS Server</h2>
                              <h3>$59/month</h3>
                           </div>
                           <div class="pricing-table-space"></div>
                           <div class="pricing-table-text">
                              <p>This is a perfect choice for small businesses and startups.</p>
                           </div>
                           <div class="pricing-table-features">
                              <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                              <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                              <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                              <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                              <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                           </div>
                           <div class="pricing-table-sign-up">
                              <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end pane -->
            </div>
            <!-- end content -->
         </div>
         <!-- end col -->
      </div>
   </div>
</div>

<!-- end doctor section --> --}}

<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
   <div class="heading">
   <span class="icon-logo"><img src="images/icon-logo.png" alt="Hospital Logo"></span>
   <h2>Patient Testimonials</h2>
</div>
<!-- end title -->
<div class="row">
   <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="testimonial clearfix">
         <div class="desc">
            <h3><i class="fa fa-quote-left"></i> Excellent Care and Support!</h3>
            <p class="lead">I received exceptional treatment at Sangwan Hospital. The doctors and staff were compassionate and attentive, ensuring my speedy recovery.</p>
         </div>
         <div class="testi-meta">
            <img src="images/docF.jpg" alt="Patient Image" class="img-responsive alignleft">
            <h4>Rajesh Kumar <small>- Charkhi Dadri</small></h4>
         </div>
         <!-- end testi-meta -->
      </div>
      <!-- end testimonial -->
   </div>
   <!-- end col -->
   <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
      <div class="testimonial clearfix">
         <div class="desc">
            <h3><i class="fa fa-quote-left"></i> Best Medical Facilities!</h3>
            <p class="lead">The hospital's infrastructure and advanced technology made a big difference in my treatment experience. I highly recommend it.</p>
         </div>
         <div class="testi-meta">
            <img src="images/sunita.webp" alt="Patient Image" class="img-responsive alignleft">
            <h4>Sunita Devi <small>- Bhiwani</small></h4>
         </div>
         <!-- end testi-meta -->
      </div>
      <!-- end testimonial -->
   </div>
   <!-- end col -->
</div>
<!-- end row -->
<hr class="invis">
<div class="row">
   <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
      <div class="testimonial clearfix">
         <div class="desc">
            <h3><i class="fa fa-quote-left"></i> Highly Skilled Doctors!</h3>
            <p class="lead">The doctors at Sangwan Hospital are very knowledgeable and provided me with excellent guidance and care during my treatment.</p>
         </div>
         <div class="testi-meta">
            <img src="images/mahesh.webp" alt="Patient Image" class="img-responsive alignleft">
            <h4>Mahesh Singh <small>- Rohtak</small></h4>
         </div>
         <!-- end testi-meta -->
      </div>
      <!-- end testimonial -->
   </div>
   <!-- end col -->
   <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
      <div class="testimonial clearfix">
         <div class="desc">
            <h3><i class="fa fa-quote-left"></i> Caring and Friendly Staff!</h3>
            <p class="lead">The staff members were very helpful and friendly, making my hospital stay much more comfortable.</p>
         </div>
         <div class="testi-meta">
            <img src="images/geeta.webp" alt="Patient Image" class="img-responsive alignleft">
            <h4>Geeta Sharma <small>- Charkhi Dadri</small></h4>
         </div>
         <!-- end testi-meta -->
      </div>
      <!-- end testimonial -->
   </div>
   <!-- end col -->
</div>
<!-- end row -->

<!-- end section -->
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
   <div class="container">
      <div class="heading">
         <!-- <span class="icon-logo"><img src="{{ ($app) ? 'storage/'.$app->icon_logo_path:'images/icon-logo.png' }}" alt="#"></span>
         <h2>Get in Touch</h2> -->
      </div>
   </div>
@livewire('contactus')
</div>

@endsection

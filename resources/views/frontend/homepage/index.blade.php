@extends('frontend.layouts.main')
@section('tittle')
<title>BAYUN</title>
<link rel="canonical" href="{{Request::url()}}">
@endsection
@section('content')
<!-- <div class="se-pre-con"></div> -->
 <!--Preloader-->

 <!--Header Navigation & Banner-->
 <section id="home-section" class="header-bg">
     <div class="bg-color">

         <!--navigation-starts-here-->
         <nav class="navbar navbar-default animated fadedown">
             <div class="container">
                 <div class="col-md-12 col-sm-12 col-xs-12  nav-style">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
                         <a style=" width: 200px; " class="navbar-brand" href="#home-section"><img class="img-responsive" src="{{ url('public/assets/images/logo.png') }}"></a>
                     </div>

                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav navbar-right">
                             <li class="active"><a class="active" href="#home-section">Home</a></li>
                             <li><a href="#about-section">About</a></li>
                             <li><a href="#features-section">Booking</a></li>
                             <li><a href="#revenue-section">Revenue</a></li>
                             <li><a href="#team-section">Team</a></li>
                             <li><a href="#investment">Investment</a></li>
                             <li><a href="#testimonials-section">Testimonials</a></li>
                             <li><a href="#cd-google-map">Contact</a></li>
                             <li><a style=" background-color: black; border-radius: 5px; color: white; " href="tel:+40742905693">+40742905693</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </nav>

         <!--Banner-starts-from-here-->
         <section class="sectionP60" style="padding-top: 140px;padding-bottom: 120px;">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                         <div class="row">
                             <div class="col-md-12 col-sm-6 col-xs-12 header-text sectionP100 animated fadeleft">
                                 <h2 class="rM white" style="font-size: 42px;letter-spacing: 1px;">SEAMLESS PROPERTY MANAGEMENT</h2>
                                 <p class="oR white f17">Effortlessly manage your properties with our seamless property management solutions, designed for ease and efficiency.Simplify your property management tasks and streamline your workflow with our comprehensive tools and support.</p>
                             </div>

                             <!--phone-slider-starts-here-->
                             <!-- <div class="col-md-4 col-sm-5 col-xs-12 pull-right animated faderight">
                                 <div id="owl-trans-iphone" class="iphone-bg owl-carousel owl-theme">
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/1.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/2.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/3.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/4.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/5.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/6.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/7.jpg') }}" alt="">
                                     </div>
                                     <div class="item">
                                         <img class="img-responsive centered" src="{{ url('public/assets/images/iphone-slider/8.jpg') }}" alt="">
                                     </div>
                                 </div>
                             </div> -->
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </section>
 <!--Header Navigation & Banner-->

 <!--section-1-about-us-->
 <section id="about-section" class="sectionP80">
     <div class="container">
         <div class="row">
             <div class="col-md-5 col-sm-12 col-xs-12 animated fadeleft">
                 <div class="col-md-12 col-sm-12 col-xs-12 p0 heading">
                     <span class="purple rB f13">About US</span>
                     <h1 class="dark oB">Experience the Difference</h1>
                 </div>
                 <div class="col-md-12 col-sm-12 col-xs-12 p0" style="margin-bottom: 30px;">
                     <p class="light oR f15">We are the data-driven property management company in Bali dedicated  to simplifying the property rental process for investors and landlords. Our core emphasis lies in using business intelligence and data analytics to optimize property performance at its highest revenue potential</p>
                     <p>However, our ultimate goal transcends mere efficiency. We are dedicated to provide an experience that is so seamless, it feels as though we are not even there.</p> 
                     <p>Our aim is not only to be good; we want to be invisibl</p>
                 </div>
             </div>
             <div class="col-md-7 col-sm-12 col-xs-12 pull-right">
                 <div class="why-img animated faderight">
                     <img class="img-responsive pull-right centered" src="{{ url('public/assets/images/why.png') }}" alt="">
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--section-1-about-us-->

 <!--section-2-Features-->
 <section id="features-section" class="sectionP80" style="background-color:#F8F3EE;">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-sm-12 col-xs-12 pull-right animated faderight">
                 <div class="heading">
                     <h1 class="dark oB">D A T A & F I N A N C E</h1>
                 </div>
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12 pull-right animated faderight" style="margin-bottom: 30px;">
                         <p class="light oR f15">Accurate yearly revenue projection - Automated monthly report dashboard  Revenue - Occupancy rates – Expenses</p><br>
                         <p class="light oR f15">We take care of your expenses, inform  you of your taxes and ensure a hassle  free, direct monthly payment to your account, anywhere in the world</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-sm-12 col-xs-12 pull-right animated faderight">
                 <div class="heading">
                     <h1 class="dark oB">B O O K I N G S & P R I C I N G S</h1>
                 </div>
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12 pull-right animated faderight" style="margin-bottom: 30px;">
                         <p class="light oR f15">We give special attention to pricing, promotions and reviews as they play a pivotal role in optimising profits</p><br>
                         <p class="light oR f15">While our technology streamlines 50-70% of our processes, our team diligently double-checks property prices daily</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--section-2-Features-->

 <!--section-4-Services-->
 <section id="revenue-section" class="sectionP60">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                 <div class="heading text-center animated fadedown">
                     <h1 class="dark oB">Revenue Management Strategies</h1>
                     <p class="light oR f15">In order to achieve longer bookings of 14-28 nights or more, we apply weekly and monthly discounts to the nightly rate. Nightly rate will vary depending on seasonality.</p>
                 </div>
             </div>
             <div class="col-md-12 col-sm-12 col-xs-12 p0 sectionP30">
                 <div class="col-md-6 col-sm-6 col-xs-12 br">
                     <h2>LAST MINUTE RATE</h2>
                     <ul class="ul-style">
                         <li class="light oR animated faderight">Discounted for last minute bookings to maximize occupancy</li>
                     </ul>
                     <h2>BASE RATE</h2>
                     <ul class="ul-style">
                         <li class="light oR animated faderight">In alignment with the projected standard nightly rates</li>
                     </ul>
                     <h2>FAR OUT RATE</h2>
                     <ul class="ul-style">
                         <li class="light oR animated faderight">Premium rate for people booking ahead of tim The base rate is configured at a different price point depending on seasonality</li>
                     </ul>
                 </div>
                 <div class="col-md-6 col-sm-6 col-xs-12 br">
                     <h2>OPTIMISING PRICING</h2>
                     <div>
                     <ul class="ul-style">
                         <li class="light oR animated faderight">We utilize pricing software to optimize pricing
for events, holidays, and higher demand periods</li>
                         <li class="light oR animated faderight"> We have expert revenue and pricing specialists</li>
                         <li class="light oR animated faderight">To achieve high ranking on the platforms, we use 
platform offers and added value marketing such as 
the Genius scheme in Booking.com whereby 
additional discounts are offered for higher booking 
visibility and therefore higher occupancy</li>
                 
                     </ul>
                 </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--section-4-Services-->

 <!--section-5-More-Features-->
 <section id="more-features-section" class="sectionP60" style="background-color:#F8F3EE">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-sm-6 col-xs-12 pull-right">
                 <div class="heading animated faderight">
                     <h1 class="dark oB">Our Management Proposal</h1>
                 </div>
                 <div>
                     <ul class="ul-style">
                         <div class="row">
                              <div class="col-md-3">
                             <li class="light oR animated faderight">Expenses & Taxes</li>
                             <li class="light oR animated faderight"> Marketing</li>
                         </div>
                         <div class="col-md-3">
                             <li class="light oR animated faderight">Housekeeping</li>
                             <li class="light oR animated faderight">Performance Management</li>
                         </div>
                         <div class="col-md-3">
                             <li class="light oR animated faderight">Reports</li>
                             <li class="light oR animated faderight">KPI Optimisation</li>
                         </div>
                         <div class="col-md-3">
                             <li class="light oR animated faderight">Listings, Bookings, Pricings</li>
                         </div>
                         </div>
                        
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--section-5-More-Features-->

 <!--section-7-Team-->
 <section id="team-section" class="sectionP60" style="padding-bottom: 0px !important;">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="heading animated fadeleft">
                     <span class="purple rB f13">Talented</span>
                     <h1 class="dark oB">Meet Our Team</h1>
                     <p>Our team are professionals who put great dedication in their work and above all, harmonize any property process we go through</p>
                     <p>From our pricing and listing optimizers to our experienced interior 
designer and housekeeping professionals we ensure your property 
is stylish, has the right amenities, is well-maintained and garners 
positive guest reviews</p>
<p>Our guest services take care of everything from check-in, 
deposits, contracts, and check-outs all the way through to 
security, key management and parking</p>
                 </div>
             </div>
             <div class="col-md-12 col-sm-12 col-xs-12 p0 sectionP60">
                 
             </div>
         </div>
     </div>
 </section>
 <!--section-7-Team-->

 <!--section-8-Screenshot-Mobiles-Screen-Slider-->
 <!--section-8-Screenshot-Mobiles-Screen-Slider-->

 <!--section-9-Half-Screen-Slider-->
 <section id="investment" class="half-owl-bg" style="background-color:#F8F3EE;">
     <div class="bg-color sectionP60">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12 animated fadeleft">
                     
                 </div>
                 <div class="col-md-12 col-sm-12 col-xs-12 p0">
                     <div class="col-md-6 col-sm-12 col-xs-12 animated fadeleft" style="margin-bottom: 30px;">
                         <div class="heading">
                             <h1 class=" oB">WE INVEST</h1>
                         </div>
                         <p class=" oR f15">We inspect, repair, redesign and furnish your property.</p><br>
                         <p class="oR f15">Our interior designer and housekeeping 
professionals ensure the highest standard of style
and cleanliness</p>
                     </div>
                     <div class="col-md-6 col-sm-12 col-xs-12 animated fadeleft" style="margin-bottom: 30px;">
                         <div class="heading">
                             <h1 class=" oB">WE MANAGE</h1>
                         </div>
                         <p class=" oR f15">We analyze, optimize marketing, listings, 
pricing, maintain the property and manage 
operations</p><br>
                         <p class=" oR f15">At the end of the month you receive your 
monthly revenue and expenses report plus 
your net profit straight into your account.</p>
                     </div>
                     <div class="col-md-12 col-sm-12 col-xs-12 animated fadeleft" style="margin-bottom: 30px;">
                         <div class="heading">
                             <h1 class=" oB">We become Revenue Partners</h1>
                         </div>
                         <p class=" oR f15">We charge based on performance 15% of Gross Booking Revenue. 
When all metrics are optimised, in prime location like yours, we are 
confident in reaching 85% occupancy and more</p><br>
                         <p class=" oR f15">We opt for transparency and long-term relationships. Once we know
all expenses – we will provide you with an accurate financial simulation 
of your yearly profit/ ROI</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--section-9-Half-Screen-Slider-->

 <!--section-10-Testimonials-->
 <section id="testimonials-section" class="sectionP60">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="heading animated fadeleft">
                     <span class="purple rB f13">Testimonials</span>
                     <h1 class="dark oB">What Clients Say?</h1>
                 </div>
                 <div class="col-md-12 col-sm-12 col-xs-12 p0 animated fadeup">
                     <div id="owl-testimonials" class="sectionP40 owl-carousel owl-theme">
                         <div class="item">
                             <div class="testimonial col-md-11 col-sm-11 col-xs-12">
                                 <h5 class="dark rM">Roxana A</h5>
                                 <h5 class="light oR m20">I highly recommend Ana 
as a business partner. 
Her exceptional project 
management skills, 
planning and execution
make her an invaluable 
asset. We worked over a 
period of 
2 years
together. She is
trustworthy and her
ethical approach to
project management set 
her apart as
a
dependable leader.
</h5>
                             </div>
                             
                         </div>
                         <div class="item">
                             <div class="testimonial col-md-11 col-sm-11 col-xs-12">
                                 <h5 class="dark rM">Hermann M</h5>
                                 <h5 class="light oR m20">We have worked with
Ana on 
a
2 story house
and an apartment. Ana
is great at budget
management and 
resource allocation. It
was very easy to 
collaborate and
communicate, overall
the results were
outstanding.</h5>
                             </div>
                             
                         </div>
                         <div class="item">
                             <div class="testimonial col-md-11 col-sm-11 col-xs-12">
                                 <h5 class="dark rM">Ioana C</h5>
                                 <h5 class="light oR m20">Ana’s team have good 
taste and imagination. 
They chose quality 
materials and nice 
colours which fit with 
the place. Renovation 
went fast and I am very 
well impressed by the 
final result. 
I recommend.</h5>
                             </div>
                             
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--section-10-Testimonials-->

 <!--section-11-Contact-Us Details-->
 <section id="contact-details-section" class="sectionP60" style="background: #fcfcfc;">
     <!-- <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="heading text-center animated fadedown">
                     <span class="purple rB f13">Get In Touch</span>
                     <h1 class="dark oB">Contact Us</h1>
                 </div>
             </div>
             <div class="col-md-12 col-sm-12 col-xs-12 p0 sectionP80">
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="contactLPE animated fadeup">
                         <div class="icon-part">
                             <div class="bg-color">
                                 <i class="fa fa-map-marker white"></i>
                             </div>
                         </div>
                         <div class="text-part">
                             <h5 class="oB dark m0">Office Address</h5>
                             <div class="line"></div>
                             <p class="oR light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="contactLPE animated fadeup">
                         <div class="icon-part">
                             <div class="bg-color">
                                 <i class="fa fa-phone white"></i>
                             </div>
                         </div>
                         <div class="text-part">
                             <h5 class="oB dark m0">Phone Number</h5>
                             <div class="line"></div>
                             <p class="oR light">Landline: +91 172 1234-567</p>
                             <p class="oR light">Mobile: +91 98765-43210</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4 col-xs-12">
                     <div class="contactLPE animated fadeup">
                         <div class="icon-part">
                             <div class="bg-color">
                                 <i class="fa fa-envelope white"></i>
                             </div>
                         </div>
                         <div class="text-part">
                             <h5 class="oB dark m0">Email Address</h5>
                             <div class="line"></div>
                             <p class="oR light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> -->
 </section>
 <!--section-11-Contact-Us Details-->


 <!--section-12-Google-Map-->

 <!--section-13-Footer-->
 <footer id="cd-google-map" class="footer-bg">
     <div class=" bg-dark sectionP30">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                     <!--Contact-Us-Form-Starts-Here-->
                     <div class="contactDiv centered animated fadeup">
                         <div class="heading text-center">
                             <span class="purple rB f13">Let's Talk</span>
                             <h1 class="dark oB">Say Hello!</h1>
                             <p class="light oR">If you have any questions or comments, or would just like to say hello,<br>please feel free to contact our friendly team.</p>
                         </div>
                         <form class="form-inline" action="{{ url('sendquote') }}" method="post"  novalidate="novalidate">
                           @csrf
                             <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Enter Name" name="name">
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Enter Email" name="email">
                             </div>
                             <div class="form-group" style="margin-right: 0">
                                 <input type="text" class="form-control" placeholder="Subject" name="subject">
                             </div>
                             <div>
                                 <textarea class="form-control" name="message" placeholder="Type here message.."></textarea>
                             </div>
                             <div>
                                 <button type="submit" class="btn purple-button pull-right">Send Message</button>
                             </div>
                         </form>
                     </div>
                 </div>
                 <!--Social-Links-Starts-Here-->
                 <!--Copyright-Text-Starts-Here-->
                 <div class="col-md-12 col-sm-12 col-xs-12 text-center copyRight">
                     <p class="light2 oR f13">&copy; Copyright | All rights reserved </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!--section-13-Footer-->


 <!--================Contact Success and Error message Area =================-->
 <div id="success" class="modal modal-message fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                 <h2 class="modal-title">Thank you</h2>
                 <p class="modal-subtitle">Your message is successfully sent...</p>
             </div>
         </div>
     </div>
 </div>


 <!-- Modals error -->

 <div id="error" class="modal modal-message fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                 <h2 class="modal-title">Sorry !</h2>
                 <p class="modal-subtitle"> Something went wrong</p>
             </div>
         </div>
     </div>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
 <script type="text/javascript">
     @if(session()->has('message'))
    $( document ).ready(function() {
        swal('Your Query Submited Successfully','Our Team Will Contact You Within 24 Hours. Thanks!','success').then(function(){
            // document.location.href=document.location.href;
        });
    });
        
    @endif
 </script>
@endsection
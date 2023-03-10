<html lang="en">
   <head>
      <title>CEY-NOR | FOUNDATION LIMITED &amp; </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="{{ asset('assets/images/ceynorlogo.png') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
      <link href="assets/css/magicscroll.css" rel="stylesheet" type="text/css" media="screen"/>
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   </head>
   <body >
      <a href="#" id="back-to-top" title="Back to top"><img class="arrow-up " src="assets/images/a.svg"></a>
      <div id="main-1">

         <header>
            <div class="header-home-1">
               <video loop="loop" autoplay muted  src="assets/images/video2.mp4"  width="1920" height="1080">
                  <source type="video/mp4" src="assets/images/video2.mp4">
               </video>
               <div class="header-cont">
                  <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">A Trusted Name for <br>
                    Boat and Accessories
                    
                  </h1>
                  <h5 class="wow fadeInUp" data-wow-duration="1s" class="wow fadeInUp" >since 1967</h5>
                  
                  <div class="compass wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                     <div class="compass_innera ">
                        <div class="compass_inner">
                           <div class="north">N</div>
                           <div class="east">E</div>
                           <div class="south">S</div>
                           <div class="west">W</div>
                        </div>
                     </div>
                     <div class="navigation_a">
                        <p><a href="#h-section-menu"> &nbsp;&nbsp; </a></p>
                     </div>
                  </div>
                  
               </div>
            </div>
            @include('navbar')
         </header>
        
         <main>
            <section  id="h-section-menu" class="swip">
               <div class="container-fluid section-menu ">
                  <div class="row">
                     <div class="col-sm-12 section-menu  secmenu-type-1">
                        <ul class="main-section-menu d-flex">
                           <li>
                              <a href="#s-yacht">
                                 <h5>SELECT A BOAT</h5>
                                 <span>Own your dream yacht, Lorem ipsum dolor sit amet, consectetur adipiscing elit</span> 
                                 <div>
                                    <img class="arrow-down " src="assets/images/ap.svg">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="{{ url('contactus?#location') }}">
                                 <h5>LOCATION</h5>
                                 <span>Find the right buyer, Lorem ipsum dolor sit amet, consectetur adipiscing elit adipiscing elit</span>
                                 <div>
                                    <img class="arrow-down " src="assets/images/ap.svg">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#h-charter">
                                 <h5>PROJECTS</h5>
                                 <span>Escape to a new world , consectetur adipiscing elit adipiscing elit</span> 
                                 <div>
                                    <img class="arrow-down " src="assets/images/ap.svg">
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="{{ url('about?#y-our_team') }}">
                                 <h5>MANAGEMENT</h5>
                                 <span>Discover our services, consectetur adipiscing elit adipiscing elit adipiscing elit</span> 
                                 <div>
                                    <img class="arrow-down " src="assets/images/ap.svg">
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="col-md-8 home-about wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="thm-h text-center">
                           <h2 class="wow fadeInUp" data-wow-duration="0.7s">who we are </h2>
                           <h4></h4>
                        </div>
                        <p >Cey
                            -Nor Foundation Ltd., utilized the aid
                            received from NORGES GODTEMPLAR
                            UNGDOMS FORBUND (NGU)
                            a Norwegian
                            Non
                            -Governmental Organization since 1967
                            ,
                            started the fiber glass vessel manufacturing in
                            Sri Lanka.
                        </p>
                     </div>
                     <div class="col-md-4  wow fadeInUp">
                        <div class="home-booknow">
                           <div class="booknow_box">
                              <h4>Request For Quotation</h4>
                              <form>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First name">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last name">
                                 </div>
                                 <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                 </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile number">
                                 </div>
                                 
                                 <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section id="s-yacht"  class="half-section main-section h-our-history-2 ">
               <div class="container-fluid">
                  <div class="row m-0">
                     <div class="col-sm-12">
                        <div class="thm-h text-center">
                           <h2 class="wow fadeInUp" data-wow-duration="0.7s">Select Your Boat</h2>
                           
                        </div>
                        <div class="owl-carousel charter-carousel  owl-theme">
                           <div class="item" data-dot="<h4>Fishing Boats</h4>">  
                              <a  href="{{ url('/product/fishingboats?#fishing-boats') }}">
                              <img  src="assets/images/product_1.jpg">
                              </a>
                           </div>
                           <div class="item" data-dot="<h4>Passenger Boats</h4>">  
                              <a  href="{{ url('/product/passengerboats?#passengerboats') }}">
                              <img src="assets/images/product_2.jpg">
                              </a>
                           </div>
                           <div class="item" data-dot="<h4>Other Products</h4>">  
                              <a  href="{{ url('/product/otherproducts?#otherproduct') }}">
                              <img src="assets/images/product_3.jpg">
                              </a>
                           </div>
                           <div class="item" data-dot="<h4>Fishing Boats</h4>">  
                              <a  href="{{ url('/product/fishingboats?#fishing-boats') }}">
                              <img src="assets/images/product_4.jpg">
                              </a>
                           </div>
                           <div class="item" data-dot="<h4>Passenger Boats</h4>">  
                              <a  href="{{ url('/product/passengerboats?#passengerboats') }}">
                              <img src="assets/images/product_5.jpg">
                              </a>
                           </div>
                           <div class="item" data-dot="<h4>Other Products</h4>">  
                              <a  href="{{ url('/product/otherproducts?#otherproduct') }}">
                              <img src="assets/images/product_6.jpg">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section id="h-our-history-2" class="half-section main-section h-our-history-2 bg-gray">
               <div class="container-fluid">
                  <div class="row m-0">
                     <div class="col-sm-6 half-left">
                        <img class="img-fluid" src="assets/images/yacht_ouline.png">
                     </div>
                     <div class="col-sm-6 half-right">
                        <div class="writing-sec">
                           <div class="thm-h">
                              <h2 class="wow fadeInUp" data-wow-duration="0.7s">LEADING BOAT MANUFACTURER</h2>
                              <h4></h4>
                           </div>
                           <p class="wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
                            <ul>
                                <li><h5> only boat manufacturing company
                                    owned by the Sri Lankan government</h5></li>
                                <li><h5> Head office located in the heart of
                                    Colombo</h5></li>
                                <li><h5> Market Leader in manufacturing whale
                                    watching boat</h5></li>
                                <li><h5> boatyard facilities in Mattakuliya
                                    (Colombo 15 ) & Karainagar (Jaffna district
                                    -
                                    Nothern Peninsula) with having convenient
                                    launching pad with zero charge</h5></li>
                                
                            </ul>
                           </p>
                           <a href="{{ route('about') }}" class="read-more button-fancy -color-1 wow fadeInUp" data-wow-duration="1s"><span class="btn-arrow"></span><span class="twp-read-more text">Continue Reading</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section id="h-buy" class="half-section main-section ">
               <div class="container-fluid">
                  <div class="row m-0">
                     <div class="col-sm-5 half-left">
                        <div class="img-sec ">
                           <img class="img-fluid" src="assets/images/2.jpg">
                        </div>
                     </div>
                     <div class="col-sm-7 half-right">
                        <div class="writing-sec">
                           <div class="thm-h">
                              <h2 class="wow fadeInUp" data-wow-duration="0.7s">BUY WITH YPI</h2>
                              <h4>tincidunt eget turpis non</h4>
                           </div>
                           <p class="wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">Owning a superyacht is the freedom to explore the world on your terms without limits. With 45 years of experience sourcing the best yachts at the best prices, YPI???s team of worldwide brokers are experts in finding the right yacht for every client. 
                           </p>
                           <a href="#" class="read-more button-fancy -color-1 wow fadeInUp" data-wow-duration="1s"><span class="btn-arrow"></span><span class="twp-read-more text">Continue Reading</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section id="h-sell" class="half-section main-section ">
               <div class="container-fluid">
                  <div class="row m-0 rtl-sec">
                     <div class="col-sm-5 half-right">
                        <div class="img-sec wow fadeInRight" data-wow-duration="1s" >
                           <img class="img-fluid" src="assets/images/4.jpg">
                        </div>
                     </div>
                     <div class="col-sm-7 half-left ">
                        <div class="writing-sec wow fadeInLeft" data-wow-duration="1s" >
                           <div class="thm-h">
                              <h2>SELL YOUR YACHT</h2>
                              <h4>tincidunt eget turpis non</h4>
                           </div>
                           <p>Owning a superyacht is the freedom to explore the world on your terms without limits. With 45 years of experience sourcing the best yachts at the best prices, YPI???s team of worldwide brokers are experts in finding the right yacht for every client. 
                           </p>
                           <a href="#" class="read-more button-fancy -color-1"><span class="btn-arrow"></span><span class="twp-read-more text">Continue Reading</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="main-section our-services ">
               <div class="container-fluid">
                  <div class="thm-h text-center">
                     <h2 class="wow fadeInUp" data-wow-duration="0.7s">Our Services</h2>
                     <h4>tincidunt eget turpi</h4>
                  </div>
                  <div class="row m-0">
                     <div class="col-md-3">
                        <div class="servicebox-first">
                           <div class="thm-h text-center">
                              <h2 class="wow fadeInUp" data-wow-duration="0.7s">Services</h2>
                              <h4>tincidunt eget turpi</h4>
                              <br>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate. Fusce vestibulum ullamcorper mauris, id pulvinar elit consequat vitae. </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-9">
                        <div class="row servicebox-row">
                            <div class="col-md-4">
                                <div class="servicebox">
                                   <img src="assets/images/service-3.png">
                                   <h4>Fiberglass Fishing Boats</h4>
                                   <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                   <a class="servicemore" href="#">More</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="servicebox">
                                   <img src="assets/images/service-6.png">
                                   <h4>Passenger & Tourism Solutions</h4>
                                   <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                   <a class="servicemore" href="#">More</a>
                                </div>
                            </div>
                           {{-- <div class="col-md-4">
                              <div class="servicebox">
                                 <img src="assets/images/service-1.png">
                                 <h4></h4>
                                 <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                 <a class="servicemore" href="#">More</a>
                              </div>
                           </div> --}}
                           <div class="col-md-4">
                                <div class="servicebox">
                                    <img src="assets/images/canoes.png">
                                    <h4>Inland Fishing Products</h4>
                                    <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                    <a class="servicemore" href="#">More</a>
                                </div>
                            </div>
                           {{-- <div class="col-md-4">
                              <div class="servicebox">
                                 <img src="assets/images/service-2.png">
                                 <h4>lifering</h4>
                                 <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                 <a class="servicemore" href="#">More</a>
                              </div>
                           </div> --}}
        
                           <div class="col-md-4">
                            <div class="servicebox">
                               <img src="assets/images/lifering.png">
                               <h4>Other Fiberglass Product</h4>
                               <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                               <a class="servicemore" href="#">More</a>
                            </div>
                         </div>
                           
                           <div class="col-md-4">
                              <div class="servicebox">
                                 <img src="assets/images/service-4.png">
                                 <h4>Service 4</h4>
                                 <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                 <a class="servicemore" href="#">More</a>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="servicebox">
                                 <img src="assets/images/service-5.png">
                                 <h4>Service 5</h4>
                                 <p>consectetur adipiscing elit. Morbi pharetra ut massa quis vulputate</p>
                                 <a class="servicemore" href="#">More</a>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section  id="instagram" class="main-section instagram-sec  ">
               <div class="container-fluid">
                  <div class="row m-0 ">
                     <div class="thm-h sec-main-h">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">GALLERY</h2>
                        <h4 class="wow fadeInUp" data-wow-duration="1s" >discover our latest posts</h4>
                     </div>
                     <div class="col-sm-12 instagram-wrap text-center">
                        <div class="MagicScroll" data-options="arrows: inside; mode: cover-flow;  draggable: false ;scrollOnWheel: true; "> 
                           <img src="assets/images/boat1.jpg" alt="">
                           <img src="assets/images/i-2.jpg" alt="">
                           <img src="assets/images/i-3.jpg" alt="">
                           <img src="assets/images/i-4.jpg" alt="">
                           <img src="assets/images/i-5.jpg" alt="">
                           <img src="assets/images/i-6.jpg" alt="">
                           <img src="assets/images/i-7.jpg" alt="">
                           <img src="assets/images/i-8.jpg" alt="">
                        </div>
                     </div>
                     <div class="col-auto btn-wrap-center">
                        <a href="#" class="read-more button-fancy -color-1 wow fadeInUp" data-wow-duration="1s"><span class="btn-arrow"></span><span class="twp-read-more text">View All</span></a> 
                     </div>
                  </div>
               </div>
            </section>
            <section id="h-charter" class="main-section h-charter-sec  ">
               <div class="container-fluid">
                  <div class="row m-0 ">
                     <div class="thm-h sec-main-h">
                        <h2 class="wow fadeInUp" data-wow-duration="1s" >Our Projects </h2>
                     </div>
                     <div class="col-sm-12"  >
                        <div class="owl-carousel owl-carousel-3 center-carousel owl-theme">
                           <div class="item">
                              <a  href="{{ route('ourprojects') }}" target="_blank">
                                 <div class="main-tilt">
                                    <div>
                                       <img class="main-back" src="assets/images/c-1.jpg" alt="">
                                    </div>
                                    <div   class="inner-tilt">
                                       <img class="inner-img" src="assets/images/c-1.jpg" alt="">
                                       <div class="slide-cont">
                                          <div>
                                             <h3>Dikkowita Landing Site Construction Project
                                             </h3>
                                             <p >Location : &amp; Dikkowita - Sri Lanka</p>
                                             <span>View Project
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a  href="{{ route('ourprojects') }}" target="_blank">
                                 <div class="main-tilt">
                                    <div data-speed="0.2">
                                       <img class="main-back" src="assets/images/c-2.jpg" alt="">
                                    </div>
                                    <div data-speed="0.5" class="inner-tilt">
                                       <img class="inner-img" src="assets/images/c-2.jpg" alt="">
                                       <div class="slide-cont">
                                          <div>
                                             <h3>Design and Construction of Beruwala Maradhana Anchorage
                                             </h3>
                                             <p >Location : &amp; Beruwala - Sri Lanka</p>
                                             <span>View Project
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a  href="{{ route('ourprojects') }}" target="_blank">
                                 <div class="main-tilt">
                                    <img class="main-back" src="assets/images/c-3.jpg" alt="">
                                    <div class="inner-tilt">
                                       <img class="inner-img" src="assets/images/c-3.jpg" alt="">
                                       <div class="slide-cont">
                                          <div>
                                             <h3>PROJECT 3
                                             </h3>
                                             <p >Caribbean & Bahamas</p>
                                             <span>View itinerary
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a  href="{{ route('ourprojects') }}" target="_blank">
                                 <div class="main-tilt">
                                    <img class="main-back" src="assets/images/c-4.jpeg" alt="">
                                    <div class="inner-tilt">
                                       <img class="inner-img" src="assets/images/c-4.jpeg" alt="">
                                       <div class="slide-cont">
                                          <div>
                                             <h3>PROJECT 4
                                             </h3>
                                             <p >Caribbean & Bahamas</p>
                                             <span>View itinerary
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a  href="{{ route('ourprojects') }}" target="_blank">
                                 <div class="main-tilt">
                                    <img class="main-back" src="assets/images/c-3.jpg" alt="">
                                    <div class="inner-tilt">
                                       <img class="inner-img" src="assets/images/c-3.jpg" alt="">
                                       <div class="slide-cont">
                                          <div>
                                             <h3>PROJECT 5
                                             </h3>
                                             <p >Northern Europe</p>
                                             <span>View itinerary
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="item">
                              <a  href="{{ route('ourprojects') }}" target="_blank">
                                 <div class="main-tilt">
                                    <img class="main-back" src="assets/images/c-1.jpg" alt="">
                                    <div class="inner-tilt">
                                       <img class="inner-img" src="assets/images/c-1.jpg" alt="">
                                       <div class="slide-cont">
                                          <div>
                                             <h3>PROJECT 6
                                             </h3>
                                             <p >Northern Europe</p>
                                             <span>View itinerary
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="main-section testimonial ">
               <div class="container-fluid">
                  <div class="thm-h text-center">
                     <h2 class="wow fadeInUp" data-wow-duration="0.7s">What Clients Say</h2>
                     <h4>tincidunt eget turpi</h4>
                  </div>
                  <div class="testimonail_outer">
                     <div class="owl-carousel testimonail_slider owl-theme">
                        <div class="item">
                           <div class="testimonail_box">
                              <div class="testimonail_text">
                                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa odio, eleifend non dictum et, euismod vel mauris. Pellentesque tortor felis, maximus id laoreet a, congue ut diam. Integer volutpat mauris id ligula placerat vestibulum. Nunc laoreet rutrum elit, id fringilla metus. Aliquam mollis blandit arcu scelerisque condimentum. Sed augue nisi pellentesque et tempor.</p>
                              </div>
                              <div class="testimonail_user">
                                 <img src="assets/images/testi_2.jpg">
                                 <span><em>Anderson (Eugenia)</em></span>
                              </div>
                              <div class="testimonial_rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="testimonail_box">
                              <div class="testimonail_text">
                                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa odio, eleifend non dictum et, euismod vel mauris. Pellentesque tortor felis, maximus id laoreet a, congue ut diam. Integer volutpat mauris id ligula placerat vestibulum. Nunc laoreet rutrum elit, id fringilla metus. Aliquam mollis blandit arcu scelerisque condimentum. Sed augue nisi pellentesque et tempor.</p>
                              </div>
                              <div class="testimonail_user">
                                 <img src="assets/images/testi_3.jpg">
                                 <span><em>Anderson (Eugenia)</em></span>
                              </div>
                              <div class="testimonial_rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="testimonail_box">
                              <div class="testimonail_text">
                                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa odio, eleifend non dictum et, euismod vel mauris. Pellentesque tortor felis, maximus id laoreet a, congue ut diam. Integer volutpat mauris id ligula placerat vestibulum. Nunc laoreet rutrum elit, id fringilla metus. Aliquam mollis blandit arcu scelerisque condimentum. Sed augue nisi pellentesque et tempor.</p>
                              </div>
                              <div class="testimonail_user">
                                 <img src="assets/images/testi_1.jpg">
                                 <span><em>Anderson (Eugenia)</em></span>
                              </div>
                              <div class="testimonial_rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="testimonail_box">
                              <div class="testimonail_text">
                                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa odio, eleifend non dictum et, euismod vel mauris. Pellentesque tortor felis, maximus id laoreet a, congue ut diam. Integer volutpat mauris id ligula placerat vestibulum. Nunc laoreet rutrum elit, id fringilla metus. Aliquam mollis blandit arcu scelerisque condimentum. Sed augue nisi pellentesque et tempor.</p>
                              </div>
                              <div class="testimonail_user">
                                 <img src="assets/images/testi_3.jpg">
                                 <span><em>Anderson (Eugenia)</em></span>
                              </div>
                              <div class="testimonial_rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="testimonail_box">
                              <div class="testimonail_text">
                                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse massa odio, eleifend non dictum et, euismod vel mauris. Pellentesque tortor felis, maximus id laoreet a, congue ut diam. Integer volutpat mauris id ligula placerat vestibulum. Nunc laoreet rutrum elit, id fringilla metus. Aliquam mollis blandit arcu scelerisque condimentum. Sed augue nisi pellentesque et tempor.</p>
                              </div>
                              <div class="testimonail_user">
                                 <img src="assets/images/testi_3.jpg">
                                 <span><em>Anderson (Eugenia)</em></span>
                              </div>
                              <div class="testimonial_rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </main>

         @include('footer')
        
        
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magicscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script> 
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
 </body>
</html>


     

@extends('layouts.app')

@section('content')

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span>
              <img src="{!! url('assets/images/logo/logo-white.png') !!}" alt="" width="150">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <a href="" class="quote_btn">
                Get A Quote
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{!! url('assets/images/slider1.png') !!}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Elevate Your Company
                    </h1>
                    <p>
                      Reach new heights by increasing brand visibility, building credibility, and enabling 24/7 customer engagement and marketing opportunities.
                    </p>
                    {{-- <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{!! url('assets/images/slider2.png') !!}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Innovation meets Excellence
                    </h1>
                    <p>
                      Explore our cutting-edge solutions tailored to elevate your business!
                    </p>
                    {{-- <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{!! url('assets/images/slider3.png') !!}" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fueled by Passion
                    </h1>
                    <p>
                      Passion fuels our creativity, drives our innovation, and inspires us to deliver exceptional solutions. Let our passion for progress transform your business and take it to new heights!
                    </p>
                    {{-- <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
        <p>
          Discover our offerings for top-notch database management, seamless mobile solutions, and dynamic web development.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{!! url('assets/images/service1.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Web Development
              </h5>
              <p>
                Creating sleek, responsive websites for top-notch user experiences.
              </p>
              {{-- <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{!! url('assets/images/service2.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                On page SEO
              </h5>
              <p>
                Enhancing search rankings and user experience with strategic page optimization.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{!! url('assets/images/service3.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Mobile Development
              </h5>
              <p>
                Building smooth and seamless mobile experiences with precision.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="{!! url('assets/images/service4.png') !!}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Database Ops
              </h5>
              <p>
                Optimizing databases for top performance and reliability.
              </p>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="btn-box">
        <a href="">
          View More
        </a>
      </div> --}}
    </div>
  </section>
  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{!! url('assets/images/about-img.jpg') !!}" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- case section -->

  <section class="case_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Case Studies
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{!! url('assets/images/case-1.jpg') !!}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Sit amet consectetur adipisicing elit
              </h5>
              <p>
                Alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="{!! url('assets/images/case-2.jpg') !!}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Excepturi placeat nihil eos maxime
              </h5>
              <p>
                Alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end case section -->

  <!-- client section -->
  <section class="client_section ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{!! url('assets/images/client.jpg') !!}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{!! url('assets/images/client.jpg') !!}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="{!! url('assets/images/client.jpg') !!}" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->



  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Request A Call back
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <div class="footer_container">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <span>
                <img src="{!! url('assets/images/logo/logo-white.png') !!}" alt="" width="150">
              </span>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="index.html">
                  Home
                </a>
                <a class="" href="about.html">
                  About
                </a>
                <a class="" href="service.html">
                  Services
                </a>
                <a class="" href="contact.html">
                  Contact Us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Address
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +01 1234567890
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    demo@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </div>

@endsection
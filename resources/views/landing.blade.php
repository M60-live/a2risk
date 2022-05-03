@extends('layouts.layout')

@section('content')
    @parent

    <div class="main-banner-wrapper">
        <section class="banner-style-one owl-theme owl-carousel no-dots">
            <div class="slide slide-one" style="background-image: url(images/slider/s-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3 class="banner-title mt-4">Intelligent <strong>Security</strong><br>Solutions</h3>
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod </p>--}}
                            <div class="btn-block">
                                <a href="/services" class="banner-btn">See Services</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
            <div class="slide slide-two" style="background-image: url(images/slider/s-4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="banner-title mt-5"><strong>Alerting </strong>Today<br>For A Better <br>Tomorrow</h3>
                            {{--<p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit sed do eiusmod </p>--}}
                            <div class="btn-block">
                                <a href="/contact" class="banner-btn">Contact Us</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
            <div class="slide slide-three" style="background-image: url(images/slider/s-2.jpg);">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-6">
                            <h3 class="banner-title mt-5">The Professional <br>Approach To <strong>Security</strong></h3>
                            {{--<p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit sed do eiusmod </p>--}}
                            <div class="btn-block">
                                <a href="/services" class="banner-btn">Read More</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
        </section><!-- /.banner-style-one -->
        <div class="carousel-btn-block banner-carousel-btn">
            <span class="carousel-btn left-btn"><i class="cameron-icon-left-arrow"></i></span>
            <span class="carousel-btn right-btn"><i class="cameron-icon-right-arrow"></i></span>
        </div><!-- /.carousel-btn-block banner-carousel-btn -->
    </div><!-- /.main-banner-wrapper -->

    <section class="offer-style-one" style="padding-bottom: 160px;">
        <div class="container">
            <div class="title-block">
                <span class="tag-line">Products & Services</span><!-- /.tag-line -->
                <h2>What we offer</h2>
            </div><!-- /.title-block -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="0ms">
                        <div class="icon-block">
                            <i class="cameron-icon-temperature"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="/cctv">CCTV <br>Monitoring</a></h3>
                        <p>Our cameras provide excellent HDTV image quality.</p>
                        <a href="/cctv" class="more-link">Read More</a>
                    </div><!-- /.single-offer-style-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="500ms">
                        <div class="icon-block">
                            <i class="cameron-icon-briefcase"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="/physical_intrusion">Physical <br> Intrusion</a></h3>
                        <p>Providing early warning of intrusion and notification is immediate.</p>
                        <a href="/physical_intrusion" class="more-link">Read More</a>
                    </div><!-- /.single-offer-style-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="1000ms">
                        <div class="icon-block">
                            <i class="cameron-icon-safe-box"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="/access_control">Access <br> Control</a></h3>
                        <p>Not only secure but also adaptable to any institution.</p>
                        <a href="/access_control" class="more-link">Read More</a>
                    </div><!-- /.single-offer-style-one -->
                </div><!-- /.col-lg-3 -->

            </div>
            <div class="row pt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="0ms">
                        <div class="icon-block">
                            <i class="cameron-icon-support"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="/fire_detection">Fire <br> Detection</a></h3>
                        <p>Integrated to combine fire-alarm systems and control panel.</p>
                        <a href="/fire_detection" class="more-link">Read More</a>
                    </div><!-- /.single-offer-style-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="500ms">
                        <div class="icon-block">
                            <i class="cameron-icon-temperature"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="/bms">Building Management <br> System</a></h3>
                        <p>Technology-led integration of all your systems</p>
                        <a href="/bms" class="more-link">Read More</a>
                    </div><!-- /.single-offer-style-one -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer-style-one wow fadeInUp" data-wow-duration="1300ms" data-wow-delay="1000ms">
                        <div class="icon-block">
                            <i class="cameron-icon-user"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="/csta">Cyber Security <br> Training & Awareness</a></h3>
                        <p>Empowering end-users to contribute to their institution's data and asset security</p>
                        <a href="/csta" class="more-link">Read More</a>
                    </div><!-- /.single-offer-style-one -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.offer-style-one -->

    <section class="mission-style-one wow fadeInUp" data-wow-duration="1300ms">
        <div class="container">
            <div class="inner-container" style="justify-content: space-around;">
                <div class="single-mission-one">
                    <div class="count-block">
                        01
                    </div><!-- /.count-block -->
                    <h3>Our Vision</h3>
                    <p>To uphold sustainable client-focused security needs through collaboration, transparency  and unique innovative technology.</p>
                </div><!-- /.single-mission-one -->
                <div class="single-mission-one">
                    <div class="count-block">
                        02
                    </div><!-- /.count-block -->
                    <h3>Our Mission</h3>
                    <p>Ensuring unique client security integrity and committed in long-term strategic stakeholder relationship.</p>
                </div><!-- /.single-mission-one -->
                <div class="single-mission-one">
                    <div class="count-block">
                        03
                    </div><!-- /.count-block -->
                    <h3>Values</h3>
                    <p>Reliable, dependable, innovative, transparent and client-centric.</p>
                </div><!-- /.single-mission-one -->
            </div><!-- /.inner-container -->
        </div><!-- /.container -->
    </section><!-- /.mission-style-one -->

    <section class="cta-style-one text-center">
        <div class="container">
            <div class="title-block">
                <span class="tag-line">A-Squared Risk Solutions</span><!-- /.tag-line -->
                <h2>Lower Your Security Risks</h2>
            </div><!-- /.title-block -->
            <p>Reliable, dependable, innovative, transparent and client-centric.</p>
            <a href="/contact" class="cta-btn">Get Appointment</a>
        </div><!-- /.container -->
    </section><!-- /.cta-style-one -->

    <section class="service-style-one">
        <div class="container">
            <div class="upper-block">
                <div class="title-block">
                    <span class="tag-line">Products & Services</span><!-- /.tag-line -->
                    <h2>What We Provide</h2>
                </div><!-- /.title-block -->
                <div class="carousel-btn-block service-carousel-btn">
                    <span class="carousel-btn left-btn"><i class="cameron-icon-left-arrow"></i></span>
                    <span class="carousel-btn right-btn"><i class="cameron-icon-right-arrow"></i></span>
                </div><!-- /.carousel-btn-block service-carousel-btn -->
            </div><!-- /.upper-block -->
            <div class="services-carousel-one">

                <div class="item">
                    <div class="single-service-one">
                        <div class="image-block">
                            <img src="/images/products/cctv/cctv.jpg" alt="cctv" />
                            <div class="overlay-block">
                                <a class="more-link" href="/cctv"><i class="fa fa-arrows-alt"></i></a>
                            </div><!-- /.overlay-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <h3><a href="/cctv">CCTV</a></h3>
                            <p>Specialising in advanced technological Closed-Circuit Television Solutions</p>
                            <a href="/cctv" class="more-btn">Read More</a><!-- /.more-btn -->
                        </div><!-- /.text-block -->
                    </div><!-- /.single-service-one -->
                </div><!-- /.col-lg-4 -->

                <div class="item">
                    <div class="single-service-one">
                        <div class="image-block">
                            <img src="/images/products/access_control/access.jpg" alt="access_control" />
                            <div class="overlay-block">
                                <a class="more-link" href="access_control"><i class="fa fa-arrows-alt"></i></a>
                            </div><!-- /.overlay-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <h3><a href="/access_control">Access Control</a></h3>
                            <p>Provide innovative access control through state-of-the-art technologies</p>
                            <a href="/access_control" class="more-btn">Read More</a><!-- /.more-btn -->
                        </div><!-- /.text-block -->
                    </div><!-- /.single-service-one -->
                </div><!-- /.col-lg-4 -->

                <div class="item">
                    <div class="single-service-one">
                        <div class="image-block">
                            <img src="/images/products/cyber_security/cyber.jpg" alt="Cyber Security" class="img-fluid"/>
                            <div class="overlay-block">
                                <a class="more-link" href="/csta"><i class="fa fa-arrows-alt"></i></a>
                            </div><!-- /.overlay-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <h3><a href="/csta">Cyber Security</a></h3>
                            <p>Providing cyber security resilience training awareness against attacks</p>
                            <a href="/csta" class="more-btn">Read More</a><!-- /.more-btn -->
                        </div><!-- /.text-block -->
                    </div><!-- /.single-service-one -->
                </div><!-- /.col-lg-4 -->

                <div class="item">
                    <div class="single-service-one">
                        <div class="image-block">
                            <img src="/images/products/fire_detection/fire_btn.png" alt="fire_detection" class="img-fluid"/>
                            <div class="overlay-block">
                                <a class="more-link" href="/fire_detection"><i class="fa fa-arrows-alt"></i></a>
                            </div><!-- /.overlay-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <h3><a href="/fire_detection">Fire Detection</a></h3>
                            <p>Cutting-edge fire detection and suppression services</p>
                            <a href="/fire_detection" class="more-btn">Read More</a><!-- /.more-btn -->
                        </div><!-- /.text-block -->
                    </div><!-- /.single-service-one -->
                </div><!-- /.col-lg-4 -->

                <div class="item">
                    <div class="single-service-one">
                        <div class="image-block">
                            <img src="/images/products/building_management/building.jpg" alt="bms" class="img-fluid"/>
                            <div class="overlay-block">
                                <a class="more-link" href="/bms"><i class="fa fa-arrows-alt"></i></a>
                            </div><!-- /.overlay-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <h3><a href="/bms">Building Management</a></h3>
                            <p>Technology-led integration of all your systems</p>
                            <a href="/bms" class="more-btn">Read More</a><!-- /.more-btn -->
                        </div><!-- /.text-block -->
                    </div><!-- /.single-service-one -->
                </div><!-- /.col-lg-4 -->

                {{--<div class="item">
                    <div class="single-service-one">
                        <div class="image-block">
                            <img src="images/products/physical_intrusion/physical.jpg" alt="physical_intrusion" />
                            <div class="overlay-block">
                                <a class="more-link" href="/physical_intrusion"><i class="fa fa-arrows-alt"></i></a>
                            </div><!-- /.overlay-block -->
                        </div><!-- /.image-block -->
                        <div class="text-block">
                            <h3><a href="/physical_intrusion">Physical Intrusion</a></h3>
                            <p>Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim id est.</p>
                            <a href="/physical_intrusion" class="more-btn">Read More</a><!-- /.more-btn -->
                        </div><!-- /.text-block -->
                    </div><!-- /.single-service-one -->
                </div>--}}

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-style-one -->

@endsection
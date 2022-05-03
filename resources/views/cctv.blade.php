@extends('layouts.layout')

@section('content')
    @parent

    <section class="page-title-block cct text-center">
        <div class="container">
            <h2>CCTV Security</h2>
            <div class="thm-breadcrumb">
                <a href="index.html">Home</a>
                <span class="sep">/</span>
                <span class="page-title">CCTV</span>
            </div><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.page-title-block -->
    <section class="blog-style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="single-sidebar category-widget">
                            <div class="widget-title">
                                <h3>Our Products</h3>
                            </div><!-- /.widget-title -->
                            @include('layouts.side-nav')
                        </div><!-- /.single-sidebar -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <div class="img-box">
                            <img src="{{ asset('/images/products/cctv/Axis_Camera_Range.png') }}" alt="CCTV" class="img-fluid"/>
                        </div><!-- /.img-box -->
                        <br />
                        <h3>Specialising in advanced technological Closed-Circuit Television Solutions
                        </h3>
                        <br />
                        <p>Always providing 360-degree surety safety and eyes on-premises with the
                            best fit-for-purpose advanced CCTV system.
                        </p>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Service Facilities</h4>
                                <br />
                                <p>
                                    A-Squared Risk Solutions are specialists in supplying, installing and
                                    maintaining a variety of CCTV technology systems. Our systems include a
                                    wide range, fused of IP solutions and Analogue HD.
                                </p>
                                <br />
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <img src="{{ asset('/images/products/cctv/Avigilon_Control_Room.jpg') }}" alt="Avigilon_Control_Room" class="img-fluid" />
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/FYfCJS6X2LQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/H-WjZSDWQTQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/I1Y8p-KTdAA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/S8qA0uaZaS4?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div><!-- /.service-details-content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-three -->
@endsection
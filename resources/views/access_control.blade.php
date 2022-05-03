@extends('layouts.layout')

@section('content')
    @parent

    <section class="page-title-block access_control text-center">
        <div class="container">
            <h2>Access Control</h2>
            <div class="thm-breadcrumb">
                <a href="index.html">Home</a>
                <span class="sep">/</span>
                <span class="page-title">Access Control</span>
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
                            <img src="{{ asset('/images/products/access_control/Biometrics-Access.jpg') }}" alt="access_control" class="img-fluid"/>
                        </div><!-- /.img-box -->
                        <br />
                        <h3>Provide innovative access control through state-of-the-art technologies</h3>
                        <br />
                        <p>Advanced and trusted access control security for a wide range of sensitive infrastructure and environments.</p>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Description</h4>
                                <br />
                                <p>
                                    A-Squared Risk Solutions is known for specialised Access Control
                                    systems. Our systems include a wide range of Access card readers,
                                    Keypads and biometric readers.
                                </p>
                                <br />
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <img src="{{ asset('/images/products/access_control/ac_unit.jpg') }}" alt="Avigilon_Control_Room" class="img-fluid" />
                            </div>
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/yvUHYVtScaI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/nkRXuKbA_yA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- /.service-details-content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-three -->
@endsection
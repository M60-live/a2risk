@extends('layouts.layout')

@section('content')
    @parent

    <section class="page-title-block fire-detection text-center">
        <div class="container">
            <h2>Fire Detection</h2>
            <div class="thm-breadcrumb">
                <a href="/">Home</a>
                <span class="sep">/</span>
                <span class="page-title">Fire Detection</span>
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
                            <img src="{{ asset('/images/products/fire_detection/fire_detection.png') }}" alt="CCTV" class="img-fluid"/>
                        </div><!-- /.img-box -->
                        <br />
                        <h3>Cutting-edge fire detection and suppression services</h3>
                        <br />
                        <p>Early detection of a fire is paramount to reducing the likelihood of
                            loss and damage
                        </p>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Service</h4>
                                <br />
                                <p>
                                    A-Squared Risk Solutions specialises in installing and the maintenance
                                    of several fire suppression and detection system technologies. Our
                                    systems are uniquely designed to safeguard essential risks against the
                                    dangers of fire.
                                </p>
                                <br />
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <img src="{{ asset('/images/products/fire_detection/fire_hydrant.jpg') }}" alt="Avigilon_Control_Room" class="img-fluid" />
                            </div>
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-12 pt-3">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/cVjyDgFrb2g?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- /.service-details-content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-three -->
@endsection
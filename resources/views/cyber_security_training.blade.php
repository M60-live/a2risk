@extends('layouts.layout')

@section('content')
    @parent

    <section class="page-title-block cyber_security text-center">
        <div class="container">
            <h2>Cyber Security training and awarenes</h2>
            <div class="thm-breadcrumb">
                <a href="/">Home</a>
                <span class="sep">/</span>
                <span class="page-title">Cyber Security</span>
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
                            <img src="{{ asset('/images/products/cyber_security/cyber.jpg') }}" alt="access_control" class="img-fluid"/>
                        </div>
                        <br />
                        <h3>Providing cyber security resilience training awareness against attacks
                        </h3>
                        <br />
                        <p>Empowering end-users to contribute to their institution's data and asset security.</p>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Description</h4>
                                <br />
                                <p>
                                    A-Squared Risk Solutions believes that Cyber security is a risk indicator
                                    and not just an IT issue. Given the fact that human error poses a
                                    greater cyber danger than software or infrastructure errors, properly
                                    preparing your employees should be a key component of your security
                                    strategy. Combining e-learning, in-person training and hands-on labs, we
                                    cater to cybersecurity professionals, as well as general cyber awareness
                                    training for all types of employees.
                                </p>
                                <br />
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <img src="{{ asset('/images/products/cyber_security/cyber_secuirty.jpg') }}" alt="cyber_secuirty" class="img-fluid" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/BGMG7AIKNRg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- /.service-details-content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-three -->
@endsection
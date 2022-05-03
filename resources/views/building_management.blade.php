@extends('layouts.layout')

@section('content')
    @parent

    <section class="page-title-block building_management text-center">
        <div class="container">
            <h2>Building Management System</h2>
            <div class="thm-breadcrumb">
                <a href="/">Home</a>
                <span class="sep">/</span>
                <span class="page-title">Building Management System</span>
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
                            <img src="{{ asset('/images/products/building_management/building_security.jpg') }}" alt="CCTV" class="img-fluid"/>
                        </div><!-- /.img-box -->
                        <br />
                        <h3>Technology-led integration of all your systems</h3>
                        <br />
                        <p>
                            A centralized point of control of a building's HVAC (heating,
                            ventilation and air conditioning), electrical, lighting, PA Systems,
                            Access Control, Security Systems, and other interrelated systems through
                            a Building Management System.
                        </p>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Details</h4>
                                <br />
                                <p>
                                    A-Squared Risk Solutions objectives are to supply and install automation
                                    of efficient operation of building systems, increased security, remote
                                    access/control/operation, and improved life cycle of equipment and
                                    related utilities.
                                </p>
                                <br />
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <img src="{{ asset('/images/products/building_management/building_management_system.png') }}" alt="Avigilon_Control_Room" class="img-fluid" />
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.service-details-content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-style-three -->
@endsection
@extends('layouts.layout')

@section('content')
<section class="page-title-block about-page text-center">
    <div class="container">
        <h2>About</h2>
        <div class="thm-breadcrumb">
            <a href="/">Home</a>
            <span class="sep">/</span>
            <span class="page-title">About</span>
        </div><!-- /.thm-breadcrumb -->
    </div>
</section>
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
                    {{--<div class="img-box">
                        <img src="{{ asset('/images/products/access_control/access_control.jpg') }}" alt="access_control" class="img-fluid"/>
                    </div>--}}
                    <br />
                    <h3>About A2 Risk</h3>
                    <p class="pt-2">
                        A-Squared Risk Solutions is a small, think-big security enterprise. A start-up created by two young
                        security fanatics who offer a fit-for-purpose and well-diversified security systems.
                        A-Squared Risk prides itself with quality-based workmanship, providing leading-edge security technology products.
                        We value our clients as partners, as long-term investors of our vision and mission.
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Our Identity and Journey</h4>
                            <p class="pt-2">
                                We are a young, innovative enterprise that provides leading technical security edge solutions.
                            </p>

                            <h4 class="pt-4">Values</h4>

                            <ul class="list-group pt-2">
                                <li>Reliable</li>
                                <li>dependable</li>
                                <li>innovative</li>
                                <li>transparent</li>
                                <li>and client-centric</li>
                            </ul>

                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <img src="{{ asset('/images/about.jpg') }}" alt="Avigilon_Control_Room" class="img-fluid" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="pt-4">Our Vision</h4>
                            <p class="pt-2">
                                To uphold sustainable client-focused security needs through collaboration, transparency  and unique innovative technology.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h4 class="pt-4">Our Mission</h4>
                            <p class="pt-2">
                                Ensuring unique client security integrity and committed in long-term strategic stakeholder relationship.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="pt-4">Target Market</h4>
                            <p class="pt-2">
                                A-Squared Risk Solutions intends compete and remain the trusted, go-to security system supplier across a wide-range of clients such as:
                            </p>

                            <ul class="list-group">
                                <li>Warehousing,</li>
                                <li>Mining Houses,</li>
                                <li>Property developers,</li>
                                <li>SMME's,</li>
                                <li>Financial institutions,</li>
                                <li>SOE's and government departments</li>
                            </ul>
                            <p class="pt-2">
                                Each facility that we protect is special and the security solution is customized for that specific environment of business risk.
                                The scale, accessibility, external climate and method of assessment are all considerations that we take into account when determining the facility's risk profile.
                            </p>
                        </div>

                    </div>
                </div><!-- /.service-details-content -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-style-three -->
@endsection

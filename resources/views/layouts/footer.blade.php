<footer class="site-footer">
    <div class="main-footer">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget about-widget">
                        <a href="index.html" class="footer-logo">
                            <img src="images/logo-long2.png" alt="awesome image">
                        </a>
                        <p class="pr-5">The professional approach to security but alerting now for a better tomorrow</p>
                        <p class="pr-5 pt-4">
                            <strong>
                                A-Squared Risk Solutions is a 100 % black-owned B-BBEE Level 1 company
                                that provides innovative security system solutions and custom designs
                            </strong>
                        </p>
                        {{--<div class="social-block">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-block -->--}}
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget links-widget">
                        <div class="footer-widget-title">
                            <h3>Navigate</h3>
                        </div><!-- /.footer-widget-title -->
                        <ul class="links-lists">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul><!-- /.links-lists -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->
                {{--<div class="col-lg-3 col-md-6">
                    <div class="footer-widget works-widget">
                        <div class="footer-widget-title">
                            <h3>Latest Work</h3>
                        </div><!-- /.footer-widget-title -->
                        <div class="gallery-wrapper clearfix">
                            <div class="single-gallery-item">
                                <a href="#"><img src="images/resources/footer-work-1-1.png" alt="awesome image"></a>
                            </div><!-- /.single-gallery-item -->
                            <div class="single-gallery-item">
                                <a href="#"><img src="images/resources/footer-work-1-2.png" alt="awesome image"></a>
                            </div><!-- /.single-gallery-item -->
                            <div class="single-gallery-item">
                                <a href="#"><img src="images/resources/footer-work-1-3.png" alt="awesome image"></a>
                            </div><!-- /.single-gallery-item -->
                            <div class="single-gallery-item">
                                <a href="#"><img src="images/resources/footer-work-1-4.png" alt="awesome image"></a>
                            </div><!-- /.single-gallery-item -->
                            <div class="single-gallery-item">
                                <a href="#"><img src="images/resources/footer-work-1-5.png" alt="awesome image"></a>
                            </div><!-- /.single-gallery-item -->
                            <div class="single-gallery-item">
                                <a href="#"><img src="images/resources/footer-work-1-6.png" alt="awesome image"></a>
                            </div><!-- /.single-gallery-item -->
                        </div><!-- /.gallery-wrapper -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-lg-3 -->--}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget newsletter-widget">
                        <div class="footer-widget-title">
                            <h3>Get in touch</h3>
                        </div><!-- /.footer-widget-title -->
                        <form action="/contact" class="newsletter-form" method="post" id="contact-form">
                            @csrf
                            <p>send us your email and we'll get in touch.</p>
                            <input type="text" name="email" placeholder="Enter your email" id="email" />
                            <input type="hidden" name="type" value="email_only">
                            <button type="submit" id="submit_btn">Send</button>
                        </form><!-- /.newsletter-form -->
                    </div><!-- /.footer-widget newsletter-widget -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer -->
    <div class="bottom-footer text-center">
        <div class="container">
            <p><a href="/">A-Squared Risk Solutions</a> &copy; {{ date('Y',time()) }} All Right Reserved</p>
        </div><!-- /.container -->
    </div><!-- /.bottom-footer -->
</footer><!-- /.site-footer -->
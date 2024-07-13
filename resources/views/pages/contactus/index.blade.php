@extends('layout.app')
@section('content')
    <section class="page_title ds s-parallax s-overlay s-py-5">
        <div class="container">
            <div class="row">

                <div class="divider-45"></div>

                <div class="col-md-12 text-center">
                    <h1 class="bold">Contact Us</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="contact4.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Contact Us
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>
    <div class="divider-160 hidden-below-lg"></div>
    <div class="divider-70 hidden-above-lg"></div>
    <section class="ds  page_map">

        <div class="marker">
            <div class="marker-address">sydney, australia, Liverpool street, 66</div>
            <div class="marker-title">First Marker</div>
            <div class="marker-description">

                <ul class="list-unstyled">
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-map-marker"></i>
                            </span>

                            <span>
                                Sydney, Australia, Liverpool street, 66
                            </span>
                        </span>
                    </li>

                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-phone"></i>
                            </span>

                            <span>
                                1 (800) 123-45-67
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-envelope"></i>
                            </span>

                            <span>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="d4b9b5bdb894b1acb5b9a4b8b1fab7bbb9">[email&#160;protected]</a>
                            </span>
                        </span>
                    </li>
                </ul>
            </div>

            <img class="marker-icon" src="images/map_marker_icon.png" alt="">
        </div>
        <!-- .marker -->


    </section>

    <section class="ds s-pt-75 s-pb-60 s-pb-md-90">
        <div class="container">
            <div class="row">

                <div class="divider-60 d-none d-xl-block"></div>

                <div class="col-lg-8 animate" data-animation="scaleAppear">

                    <div class="hero-bg p-30">

                        <form class="contact-form c-mb-15 c-gutter-15" method="post" action="/">

                            <div class="row">

                                <div class="col-sm-12">
                                    <h4>Contact Form</h4>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group has-placeholder">
                                        <label for="name">Full Name <span class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30" value=""
                                            name="name" id="name" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-placeholder">
                                        <label for="phone">Phone<span class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30" value=""
                                            name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group has-placeholder">
                                        <label for="email">Email address<span class="required">*</span></label>
                                        <input type="email" aria-required="true" size="30" value=""
                                            name="email" id="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-placeholder">
                                        <label for="subject">Subject<span class="required">*</span></label>
                                        <input type="text" aria-required="true" size="30" value=""
                                            name="subject" id="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group has-placeholder">
                                        <label for="message">Message</label>
                                        <textarea aria-required="true" rows="10" cols="45" name="message" id="message" class="form-control"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group has-placeholder">
                                        <button type="submit" id="contact_form_submit" name="contact_submit"
                                            class="btn btn-maincolor btn-block">Send Now
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <!--.col-* -->

                <div class="col-lg-4 animate" data-animation="scaleAppear">
                    <div class="hero-bg p-30">

                        <h4>Contact Info</h4>

                        <div class="media mb-30">
                            <div class="icon-styled color-main fs-20">
                                <i class="fa fa-map-marker"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Address:
                                </h5>
                                <p>
                                    567 Jacksotts street, San Diego, CA
                                </p>
                            </div>
                        </div>

                        <div class="media mb-20">
                            <div class="icon-styled color-main fs-20">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Phone:
                                </h5>
                                <p>
                                    1(800)168-2159
                                </p>
                            </div>
                        </div>

                        <div class="media mb-20">
                            <div class="icon-styled color-main fs-20">
                                <i class="fa fa-pencil"></i>
                            </div>

                            <div class="media-body">
                                <h5>
                                    Email:
                                </h5>
                                <p>
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="412c20282d012439202c312d246f222e2c">[email&#160;protected]</a>
                                </p>
                            </div>
                        </div>

                        <h4>Social Links</h4>

                        <div class="social-icons">

                            <a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a>
                            <a href="#" class="fa fa-twitter border-icon rounded-icon" title="twitter"></a>
                            <a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a>
                            <a href="#" class="fa fa-google-plus border-icon rounded-icon" title="google"></a>

                        </div>

                    </div>
                </div>
                <!--.col-* -->


                <div class="divider-70 d-none d-xl-block"></div>

            </div>
        </div>
    </section>
@endsection

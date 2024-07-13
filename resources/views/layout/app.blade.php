<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okinawan Karate School | Authentic Techniques & Philosophy</title>
    <meta name="description"
        content="Discover Okinawan Karate School, founded by Renshi Robin Jose in 2014. Learn authentic techniques and philosophy with our comprehensive training programs. Join over 25,000 students in Akshayanagar and beyond!">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Okinawan Karate">
    <link rel="icon" href="{{ url('public\assets\images\logo_2.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/main.css') }}" class="color-switcher-link">
    <link rel="stylesheet" href="{{ url('public/assets/css/custom.css') }}">
    <script src="{{ url('public/assets/js/vendor/modernizr-custom.js') }}"></script>
    <script data-cfasync="false" src="{{ 'public/assets/js/email-decode.min.js' }}"></script>
    <script src="{{ url('public/assets/js/compressed.js') }}"></script>
    <script src="{{ url('public/assets/js/main.js') }}"></script>
    {{-- <script src="{{url('public/assets/js/switcher.js')}}"></script> --}}

    <!-- Google Map Script -->

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?callback=templateInitGoogleMap&key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4">
    </script>

</head>

<body>
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    {{-- <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control"
                        placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div> --}}

    <!-- Unyson messages modal -->
    {{-- <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls p-normal">
        </div>
    </div> --}}

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- template sections -->
            <!--topline section visible only on small screens|-->
            <section class="page_topline ds c-my-10 s-borderbottom  d-xl-none">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-8 text-left">
                            <span class="social-icons">

                                <a href="#" class="fa fa-facebook " title="facebook"></a>
                                <a href="#" class="fa fa-twitter " title="twitter"></a>
                                <a href="#" class="fa fa-google " title="google"></a>

                            </span>
                        </div>
                        <div class="col-4 text-right">
                            <!--modal search-->
                            {{-- <span>
                                <a href="#" class="search_modal_button">
                                    <i class="fa fa-search"></i>
                                </a>
                            </span> --}}

                        </div>
                    </div>
                </div>
            </section>
            <!--eof topline-->
            <div class="header_absolute">
                <!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
                <header class="page_header ds ms justify-nav-center s-pt-10 s-pb-10">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-3 col-11">
                                <a href="{{ url('/') }}" class="logo">
                                    <img src="{{ url('public\assets\images\logo_2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                                <!-- main nav start -->
                                <nav class="top-nav">
                                    <ul class="nav sf-menu">
                                        <li class="active">
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/aboutus') }}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/aboutus') }}">Pages</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('/programs') }}">Programs</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/instructors') }}">Instructors</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/why-Choose-us') }}">Why Choose Us? </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/404') }}">404</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- gallery -->
                                        <li>
                                            <a href="{{ url('/gallery') }}">Gallery</a>
                                        </li>
                                        <!-- eof shop -->
                                        <!-- contacts -->
                                        <li>
                                            <a href="{{ url('/contact-us') }}">Contact</a>
                                        </li>
                                        <!-- eof contacts -->
                                    </ul>


                                </nav>
                                <!-- eof main nav -->
                            </div>
                            <div class="col-xl-2 col-lg-3 text-right d-none d-xl-block">

                                <ul class="top-includes">


                                    <li>
                                        <span>
                                            <a href="https://forms.gle/snPmUSvTrCWMotnw7"
                                                class="btn btn-outline-maincolor">Book Now</a>
                                        </span>
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- header toggler -->
                    <span class="toggle_menu"><span></span></span>
                </header>
            </div>


            @yield('content')

            <footer
                class="page_footer ds s-parallax s-overlay s-pt-50 s-pb-10 s-pb-lg-30 s-py-lg-90 c-mb-20 c-mb-lg-0 c-gutter-60">
                <div class="container">
                    <div class="row align-items-start justify-content-center">
                        <div class="divider-90 d-none d-xl-block"></div>

                        {{-- <div class="col-md-6 col-lg-4 text-center animate" data-animation="fadeInUp">

                            <div class="widget widget_recent_entries">

                                <h3 class="widget-title">Recent Posts</h3>

                                <ul>
                                    <li>
                                        <a href="blog-single-right.html">How I Lost The Secret Of My Dazzling Success
                                            For 20 Years</a>
                                        <span class="post-date">26 dec 2017</span>
                                    </li>
                                    <li>
                                        <a href="blog-single-right.html">Make It Your Destiny To Accomplish Great
                                            Things In Your Life</a>
                                        <span class="post-date">27 dec 2017</span>
                                    </li>
                                </ul>
                            </div>

                        </div> --}}

                        <div class="col-md-6 col-lg-4 text-center animate" data-animation="fadeInUp">
                            <div class="widget widget_icons_list">
                                <a href="{{ url('/') }}" class="logo flex-column text-center">
                                    <img src="{{ url('public\assets\images\logo_2.png') }}" alt="logo">
                                </a>
                                <p>Fight School has specialized in martial arts since 1986 and has one of the most
                                    innovative programs in the nation.</p>
                                <div class="widget widget_social_buttons">
                                    <a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon"
                                        title="facebook"></a>
                                    <a href="https://twitter.com/" class="fa fa-twitter border-icon rounded-icon"
                                        title="twitter"></a>
                                    <a href="https://www.google.com/" class="fa fa-google-plus border-icon rounded-icon"
                                        title="google"></a>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6 col-lg-4 text-center animate" data-animation="fadeInUp">
                            <div class="widget widget_mailchimp">

                                <h3 class="widget-title">Newsletter</h3>

                                <p>
                                    Subscribe to our Newsletter to be updated.
                                    <br>
                                    We promise not to spam.
                                </p>

                                <form class="signup" action="/">
                                    <label for="mailchimp_email">
                                        <span class="screen-reader-text">Subscribe:</span>
                                    </label>

                                    <input id="mailchimp_email" name="email" type="email"
                                        class="form-control mailchimp_email" placeholder="Email Address">

                                    <button type="submit" class="search-submit">
                                        <span class="screen-reader-text">Subscribe</span>
                                    </button>
                                    <div class="response"></div>
                                </form>

                            </div>
                        </div> --}}


                        <div class="divider-70 d-none d-xl-block"></div>
                    </div>
                </div>
            </footer>

            <section class="page_copyright ds s-py-10 s-py-md-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="divider-20 d-none d-lg-block"></div>
                        <div class="col-md-12 text-center">
                            <p>&copy; Copyright <span class="copyright_year"></span> All Rights Reserved</p>
                        </div>
                        <div class="divider-20 d-none d-lg-block"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            var currentYear = new Date().getFullYear();
            $('.copyright_year').text(currentYear);
        });
    </script>
    

</body>

</html>

<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okinawan Karate School | Authentic Techniques & Philosophy</title>
    <meta name="description" content="Discover Okinawan Karate School, founded by Renshi Robin Jose in 2014. Learn authentic techniques and philosophy with our comprehensive training programs. Join over 25,000 students in Akshayanagar and beyond!">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Okinawan Karate">
    <link rel="icon" href="{{ url('public\assets\images\logo_2.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/main.css') }}" class="color-switcher-link">
    <link rel="stylesheet" href="{{ url('public/assets/css/custom.css') }}">
    <script src="{{ url('public/assets/js/vendor/modernizr-custom.js') }}"></script>

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
                                <a href="{{url('/')}}" class="logo">
                                    <img src="{{ url('public\assets\images\logo_2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                                <!-- main nav start -->
                                <nav class="top-nav">
                                    <ul class="nav sf-menu">
                                        <li class="active">
                                            <a href="{{url('/')}}">Home</a>
                                            {{-- <ul>
                                                <li>
                                                    <a href="{{url('/')}}">MultiPage</a>
                                                </li>
                                                <li>
                                                    <a href="index_static.html">Static Intro</a>
                                                </li>
                                                <li>
                                                    <a href="index_singlepage.html">Single Page</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li>
                                            <a href="{{url('/aboutus')}}">Pages</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('/aboutus')}}">About</a>
                                                </li>

                                                <li>
                                                    <a href="{{url('/programs')}}">Programs</a>
                                                    {{-- <ul>
                                                        <li>
                                                            <a href="services.html">Programs 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="services3.html">Programs 2</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-single.html">Single Program</a>
                                                        </li>
                                                    </ul> --}}
                                                </li>

                                                <li>
                                                    <a href="pricing.html">Pricing</a>
                                                </li>

                                                <!-- features -->
                                                <li>
                                                    <a href="shortcodes_iconbox.html">Shortcodes</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shortcodes_typography.html">Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_pricing.html">Pricing</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_iconbox.html">Icon Boxes</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_progress.html">Progress</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_animation.html">Animation</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_icons.html">Template Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_socialicons.html">Social Icons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof shortcodes -->

                                                <li>
                                                    <a href="shortcodes_widgets_default.html">Widgets</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shortcodes_widgets_default.html">Default
                                                                Widgets</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_widgets_shop.html">Shop Widgets</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_widgets_custom.html">Custom Widgets</a>
                                                        </li>
                                                    </ul>

                                                </li>


                                                <!-- events -->
                                                <li>
                                                    <a href="events-left.html">Events</a>
                                                    <ul>
                                                        <li>
                                                            <a href="events-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="events-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="events-full.html">Full Width</a>
                                                        </li>
                                                        <li>
                                                            <a href="event-single-left.html">Single Event</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="event-single-left.html">Left Sidebar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="event-single-right.html">Right Sidebar</a>
                                                                </li>
                                                                <li>
                                                                    <a href="event-single-full.html">Full Width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof events -->
                                                <li>
                                                    <a href="team.html">Instructors</a>
                                                    <ul>
                                                        <li>
                                                            <a href="team.html">Instructors List</a>
                                                        </li>
                                                        <li>
                                                            <a href="team-single.html">Instructors Member</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="comingsoon.html">Comingsoon</a>
                                                </li>
                                                <li>
                                                    <a href="timetable.html">Schedule</a>
                                                </li>

                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                    <ul>
                                                        <li>
                                                            <a href="faq.html">FAQ</a>
                                                        </li>
                                                        <li>
                                                            <a href="faq2.html">FAQ 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Features</a>
                                            <div class="mega-menu">
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col">
                                                        <a href="#">Headers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header1.html">Header Type 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="header2.html">Header Type 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="header3.html">Header Type 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="header4.html">Header Type 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="header5.html">Header Type 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="header6.html">Header Type 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="#">Side Menus</a>
                                                        <ul>
                                                            <li>
                                                                <a href="header-side.html">Push Left</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-right.html">Push Right</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-slide.html">Slide Left</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-slide-right.html">Slide Right</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-sticked.html">Sticked Left</a>
                                                            </li>
                                                            <li>
                                                                <a href="header-side-sticked-right.html">Sticked
                                                                    Right</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="title1.html">Title Sections</a>
                                                        <ul>
                                                            <li>
                                                                <a href="title1.html">Title section 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="title2.html">Title section 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="title3.html">Title section 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="title4.html">Title section 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="title5.html">Title section 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="title6.html">Title section 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="footer1.html#footer">Footers</a>
                                                        <ul>
                                                            <li>
                                                                <a href="footer1.html#footer">Footer Type 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer2.html#footer">Footer Type 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer3.html#footer">Footer Type 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer4.html#footer">Footer Type 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer5.html#footer">Footer Type 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="footer6.html#footer">Footer Type 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="copyright1.html#copyright">Copyright</a>

                                                        <ul>
                                                            <li>
                                                                <a href="copyright1.html#copyright">Copyright 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright2.html#copyright">Copyright 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright3.html#copyright">Copyright 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright4.html#copyright">Copyright 4</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright5.html#copyright">Copyright 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="copyright6.html#copyright">Copyright 6</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </div> <!-- eof mega menu -->
                                        </li>
                                        <!-- eof features -->
                                        <!-- blog -->
                                        <li>
                                            <a href="blog-left.html">Blog</a>
                                            <ul>
                                                <li>
                                                    <a href="blog-right.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-left.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-full.html">No Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-grid.html">Blog Grid</a>
                                                </li>

                                                <li>
                                                    <a href="blog-single-right.html">Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-full.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="blog-single-video-right.html">Video Post</a>
                                                    <ul>
                                                        <li>
                                                            <a href="blog-single-video-right.html">Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-video-left.html">Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-single-video-full.html">No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof blog -->

                                        <!-- eof pages -->

                                        <!-- gallery -->
                                        <li>
                                            <a href="gallery-image.html">Gallery</a>
                                            <ul>
                                                <!-- Gallery image only -->
                                                <li>
                                                    <a href="gallery-image.html">Image Only</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-image-2-cols.html">2 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-image.html">3 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-image-4-cols-fullwidth.html">4 columns
                                                                fullwidth</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery image only -->

                                                <!-- Gallery with title -->
                                                <li>
                                                    <a href="gallery-title.html">Image With Title</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-title-2-cols.html">2 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-title.html">3 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-title-4-cols-fullwidth.html">4 columns
                                                                fullwidth</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery with title -->

                                                <!-- Gallery with excerpt -->
                                                <li>
                                                    <a href="gallery-excerpt.html">Image with Excerpt</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-excerpt-2-cols.html">2 columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-excerpt.html">3 column</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-excerpt-4-cols-fullwidth.html">4 columns
                                                                fullwdith</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery with excerpt -->

                                                <li>
                                                    <a href="gallery-tiled.html">Tiled Gallery</a>
                                                </li>

                                                <!-- Gallery item -->
                                                <li>
                                                    <a href="gallery-single.html">Gallery Item</a>
                                                    <ul>
                                                        <li>
                                                            <a href="gallery-single.html">Style 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="gallery-single2.html">Style 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- eof Gallery item -->
                                            </ul>
                                        </li>
                                        <!-- eof Gallery -->
                                        <!-- shop -->
                                        <li>
                                            <a href="shop-right.html">Shop</a>
                                            <ul>
                                                <li>
                                                    <a href="shop-account-dashboard.html">Account</a>
                                                    <ul>

                                                        <li>
                                                            <a href="shop-account-details.html">Account details</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-addresses.html">Addresses</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-address-edit.html">Edit Address</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-orders.html">Orders</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-order-single.html">Single Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-downloads.html">Downloads</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-password-reset.html">Password
                                                                Reset</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-account-login.html">Login/Logout</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop-right.html">Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left.html">Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-right.html">Product Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-product-left.html">Product Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="shop-checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="shop-order-received.html">Order Received</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <!-- eof shop -->
                                        <!-- contacts -->
                                        <li>
                                            <a href="contact.html">Contact</a>
                                            <ul>
                                                <li>
                                                    <a href="contact.html">Contact 1</a>
                                                </li>
                                                <li>
                                                    <a href="contact2.html">Contact 2</a>
                                                </li>
                                                <li>
                                                    <a href="contact3.html">Contact 3</a>
                                                </li>
                                                <li>
                                                    <a href="contact4.html">Contact 4</a>
                                                </li>
                                            </ul>
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

                        <div class="col-md-6 col-lg-4 text-center animate" data-animation="fadeInUp">

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

                        </div>

                        <div class="col-md-6 col-lg-4 text-center animate" data-animation="fadeInUp">
                            <div class="widget widget_icons_list">
                                <a href="{{url('/')}}" class="logo flex-column text-center">
                                    <img src="{{ url('public\assets\images\logo_2.png') }}" alt="logo">
                                </a>
                                <p>Fight School has specialized in martial arts since 1986 and has one of the most
                                    innovative programs in the nation.</p>
                                <div class="widget widget_social_buttons">
                                    <a href="https://www.facebook.com/"
                                        class="fa fa-facebook border-icon rounded-icon" title="facebook"></a>
                                    <a href="https://twitter.com/" class="fa fa-twitter border-icon rounded-icon"
                                        title="twitter"></a>
                                    <a href="https://www.google.com/"
                                        class="fa fa-google-plus border-icon rounded-icon" title="google"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 text-center animate" data-animation="fadeInUp">
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
                        </div>


                        <div class="divider-70 d-none d-xl-block"></div>
                    </div>
                </div>
            </footer>

            <section class="page_copyright ds s-py-10 s-py-md-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="divider-20 d-none d-lg-block"></div>
                        <div class="col-md-12 text-center">
                            <p>&copy; Copyright <span class="copyright_year">2018</span> All Rights Reserved</p>
                        </div>
                        <div class="divider-20 d-none d-lg-block"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script data-cfasync="false" src="{{ 'public/assets/js/email-decode.min.js' }}"></script>
    <script src="{{ url('public/assets/js/compressed.js') }}"></script>
    <script src="{{ url('public/assets/js/main.js') }}"></script>
    {{-- <script src="{{url('public/assets/js/switcher.js')}}"></script> --}}

    <!-- Google Map Script -->

    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?callback=templateInitGoogleMap&key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4">
    </script>

</body>

</html>

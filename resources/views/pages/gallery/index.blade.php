@extends('layout.app')
@section('content')
    <section class="page_title ds s-parallax s-overlay s-py-5">
        <div class="container">
            <div class="row">

                <div class="divider-45"></div>

                <div class="col-md-12 text-center">
                    <h1 class="bold">Gallery: Images</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="gallery-image.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Gallery: Images
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>

    <section class="ds s-py-60 s-py-md-90">
        <div class="container">
            <div class="row">

                <div class="d-none d-lg-block divider-30"></div>

                <div class="col-lg-12">
                    {{-- <div class="row justify-content-center">
                        <div class="col-md-10 col-xl-8">
                            <div class="filters gallery-filters small-text text-lg-right">
                                <a href="#" data-filter="*" class="active selected">All</a>
                                <a href="#" data-filter=".corporate">Corporate</a>
                                <a href="#" data-filter=".business">Business</a>
                                <a href="#" data-filter=".entertainment">Entertainment</a>
                                <a href="#" data-filter=".innovations">Innovations</a>
                                <a href="#" data-filter=".news">News</a>
                            </div>
                        </div>
                    </div> --}}


                    <div class="row isotope-wrapper masonry-layout c-mb-30" data-filters=".gallery-filters">
                        <?php for($i=1; $i<=33; $i++){ ?>

                        <div class="col-xl-4 col-sm-6 business news">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="{{ url('public/assets/images/gallery/new/' . $i . '.jpg') }}" alt="Gallery Img">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="{{ url('public/assets/images/gallery/new/' . $i . '.jpg') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        {{-- <div class="col-xl-4 col-sm-6 innovations corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/02.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/02.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Amet consetetur sadipscing</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 entertainment news innovations">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/03.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/03.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Elitr sed diam nonumy</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 business entertainment">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/04.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/04.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Tempor invidunt ut</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 innovations corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/05.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/05.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Labore et dolore magna</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 entertainment news corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/06.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/06.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Aliquyam erat sed diam</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 business news innovations">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/07.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/07.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Voluptua vero</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 business entertainment corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/08.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/08.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Eos et accusam justo duo</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 business news">

                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/09.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/09.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Consectetur adipisicing elit</a>
                                    </h5>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-4 col-sm-6 innovations corporate">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/10.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/10.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Dolores et ea rebum</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 entertainment news innovations">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/11.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/11.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Stet clita kasd gubergren</a>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6 business entertainment">
                            <div class="vertical-item item-gallery content-absolute text-center ds">
                                <div class="item-media">
                                    <img src="images/gallery/12.jpg" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap">
                                            <a class="link-zoom photoswipe-link" title=""
                                                href="images/gallery/12.jpg"></a>
                                            <a class="link-anchor" title="" href="gallery-single.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content gradientdarken-background">
                                    <h5>
                                        <a href="gallery-single.html">Clita kasd gubergren</a>
                                    </h5>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                    <!-- .isotope-wrapper-->

                    {{-- <div class="row">
                        <div class="col-sm-12 text-center">
                            <a href="#" class="btn btn-maincolor">Load More</a>
                        </div>
                    </div> --}}

                </div>

                <div class="d-none d-lg-block divider-70"></div>
            </div>

        </div>
    </section>
@endsection

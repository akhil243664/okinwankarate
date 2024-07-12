@extends('layout.app')
@section('content')
    <section class="page_title ds s-parallax s-overlay s-py-5">
        <div class="container">
            <div class="row">

                <div class="divider-45"></div>

                <div class="col-md-12 text-center">
                    <h1 class="bold">Programs</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="services.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Programs
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>

    <section class="ds s-pt-60 s-pb-30 s-py-md-90 c-gutter-30 c-mb-30 programs">
        <div class="container">
            <div class="row">

                <div class="d-none d-lg-block divider-70"></div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img width="370" height="230" src="{{url('public/assets/images/gallery/17.jpg')}}" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="#"></a>
                            </div>
                        </div>
                        
                        <div class="item-content">
                            <h5>
                                <a href="#">Children's Classes</a>
                            </h5>
                            <p>Ocused on building coordination, discipline, and respect. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img width="370" height="230" src="{{url('public/assets/images/gallery/14.jpg')}}" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="#"></a>
                            </div>
                        </div>
                        
                        <div class="item-content">
                            <h5>
                                <a href="#">Adult Classes</a>
                            </h5>
                            <p>Emphasizing self-defense, fitness, and stress relief.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/assets/images/gallery/01.jpg')}}" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="#"></a>
                            </div>
                        </div>
                        
                        <div class="item-content">
                            <h5>
                                <a href="#">Advanced Training</a>
                            </h5>
                            <p>For those looking to deepen their understanding and mastery of Okinawan karate.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="vertical-item text-center">
                        <div class="item-media">
                            <img src="{{url('public/assets/images/gallery/04.jpg')}}" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="#"></a>
                            </div>
                        </div>
                        
                        <div class="item-content">
                            <h5>
                                <a href="#">Corporate Training</a>
                            </h5>
                            <p>Providing personal training in companies to promote wellness and team building.</p>

                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block divider-40"></div>
            </div>
        </div>
    </section>
@endsection

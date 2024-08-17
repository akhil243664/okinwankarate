@extends('layout.app')
@section('content')
    <section class="page_title ds s-parallax s-overlay s-py-5">
        <div class="container">
            <div class="row">

                <div class="divider-45"></div>

                <div class="col-md-12 text-center">
                    <h1 class="bold">About </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="about.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            About
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>
    <section class="ds s-py-60 s-py-md-90 s-overlay mobile-overlay about-section">
        <div class="container">
            <div class="row d-flex justify-content-end">
                <div class="divider-70 d-none d-xl-block"></div>
                <div class="col-md-12 col-xl-6 ">
                    <h3 class="special-heading text-lg-left text-center">about <span class="color-main">Okinawan</span>
                        Karate school
                    </h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- tabs start -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab01" data-toggle="tab" href="#tab01_pane"
                                        role="tab" aria-controls="tab01_pane" aria-expanded="true">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab02" data-toggle="tab" href="#tab02_pane" role="tab"
                                        aria-controls="tab02_pane">Our Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab03" data-toggle="tab" href="#tab03_pane" role="tab"
                                        aria-controls="tab03_pane">Our History</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab01_pane" role="tabpanel"
                                    aria-labelledby="tab01">
                                    <p>
                                        Welcome to Okinawan karate school , where the rich tradition and discipline of
                                        Okinawan karate come alive. Established in 2014 by Renshi Robin Jose, our school is
                                        dedicated to preserving and promoting the authentic techniques and philosophy of
                                        Okinawan martial arts. Our first head office is located in Akshayanagar, and we have
                                        grown to include over 25,000+ students who benefit from our comprehensive training
                                        programs.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tab02_pane" role="tabpanel" aria-labelledby="tab02">
                                    <p>
                                        At Okinawan karate school , we strive to provide a comprehensive martial arts
                                        education that encompasses physical fitness, self-defense, and mental discipline.
                                        Our mission is to cultivate respect, confidence, and integrity in our students,
                                        guiding them on a path of personal growth and lifelong learning. We teach karate
                                        according to the World Karate Federation (WKF) standards, ensuring our students
                                        receive top-notch training.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="tab03_pane" role="tabpanel" aria-labelledby="tab03">
                                    <p>
                                        Rooted in the ancient traditions of Okinawa, our school follows the teachings of the
                                        legendary masters who developed and refined the art of karate. Our instructors are
                                        deeply knowledgeable and experienced, committed to passing down the techniques and
                                        values that have been honed over centuries. Our achievements include affiliations
                                        with PU games, University games , national-level, state-level, school games ICSE and
                                        DDPI tournaments.
                                    </p>
                                </div>

                            </div>
                            <!-- tabs end-->
                        </div>
                    </div>

                    <div class="signature">
                        <div class="signature__left">
                            <h5>Renshi Robin Jose</h5>
                            <span>DIRECTOR / INSTRUCTOR</span>
                        </div>
                        <div class="signature__right">
                            <img src="{{ url('public/assets/images/signature.png') }}" alt="signature">
                        </div>
                    </div>
                </div>
                <div class="divider-60 d-none d-xl-block"></div>
            </div>
        </div>
    </section>
    <section class="ds ms s-py-60 s-py-md-90 s-overlay team-section">
        <div class="container">
            <div class="row">
                <div class="divider-70 d-none d-xl-block"></div>
                <div class="col-12">
                    <h3 class="special-heading text-center">OUR INSTRUCTORS</h3>
                    <div class="divider-60 d-none d-xl-block"></div>
                    <div class="divider-40 hidden-above-md"></div>
                    <div class="owl-carousel" data-loop="true" data-margin="30" data-nav="true" data-dots="true"
                        data-center="false" data-items="1" data-autoplay="true" data-responsive-xs="1"
                        data-responsive-sm="2" data-responsive-md="3" data-responsive-lg="3">
                        @foreach ($instructors as $k => $instructor)
                            <div class="vertical-item box-shadow content-padding text-center">
                                <div class="item-media">
                                    <img class="instructor"
                                        src="{{ url('public/assets/images/team/' . $instructor['image']) }}"
                                        alt="Our Instructor">
                                    <div class="media-links">
                                        <a class="abs-link" title="" href="#"></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5>
                                        <a href="#">{{ $instructor['name'] }}</a>
                                    </h5>
                                    <p class="small-text color-main">
                                        {{ $instructor['description'] }}
                                    </p>
                                    <p class="social-icons">
                                        <a href="#" class="fa fa-facebook" title="facebook"></a>
                                        <a href="#" class="fa fa-twitter" title="twitter"></a>
                                        <a href="#" class="fa fa-google-plus" title="google"></a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="divider-70 d-none d-xl-block"></div>
            </div>
        </div>
    </section>
    <section class="ds s-py-60 s-py-md-90 testimonials-section">
        <div class="container">
            <div class="row">
                <div class="divider-70 d-none d-xl-block"></div>
                <div class="col-12">
                    <h3 class="special-heading text-center">what clients say</h3>
                    <div class="divider-60 d-none d-xl-block"></div>
                    <div class="owl-carousel" data-loop="false" data-margin="30" data-nav="true" data-dots="true"
                        data-center="false" data-items="1" data-autoplay="false" data-responsive-xs="1"
                        data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">
                        
                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_02.jpg" alt="">
                                </div>
                                <h5>Sarah Johnson</h5>
                                <p class="small-text color-main">
                                    PARENT
                                </p>
                                <p>
                                    My son has grown so much in confidence and discipline since joining Okinawan Karate
                                    School. The instructors are fantastic and truly care about the students' development.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_03.jpg" alt="">
                                </div>
                                <h5>Michael Lee</h5>
                                <p class="small-text color-main">
                                    STUDENT
                                </p>
                                <p>
                                    I love the training sessions at Okinawan Karate School! They've taught me self-defense,
                                    improved my fitness, and given me a sense of community. Highly recommend this school to
                                    anyone interested in martial arts.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_04.jpg" alt="">
                                </div>
                                <h5>Ananya Nair</h5>
                                <p class="small-text color-main">
                                    PARENT
                                </p>
                                <p>
                                    Since my daughter joined Okinawan Karate School, she has developed incredible discipline
                                    and focus. The school's dedication to authentic techniques and philosophy is truly
                                    commendable.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_05.jpg" alt="">
                                </div>
                                <h5>Rajesh Kumar</h5>
                                <p class="small-text color-main">
                                    PARENT
                                </p>
                                <p>
                                    Okinawan Karate School has been a wonderful experience for my son. The instructors are
                                    knowledgeable and passionate about teaching authentic Okinawan martial arts.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_06.jpg" alt="">
                                </div>
                                <h5>Neha Shetty</h5>
                                <p class="small-text color-main">
                                    STUDENT
                                </p>
                                <p>
                                    Training at Okinawan Karate School has been transformative for me. I've gained
                                    confidence, strength, and a deeper understanding of martial arts.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_07.jpg" alt="">
                                </div>
                                <h5>Ravi Menon</h5>
                                <p class="small-text color-main">
                                    PARENT
                                </p>
                                <p>
                                    The Okinawan Karate School has provided my child with an exceptional environment to
                                    learn and grow. The instructors' commitment to the students' progress is evident in
                                    every class.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_08.jpg" alt="">
                                </div>
                                <h5>Aishwarya Reddy</h5>
                                <p class="small-text color-main">
                                    STUDENT
                                </p>
                                <p>
                                    Okinawan Karate School is amazing! The classes are engaging, and the instructors are
                                    very supportive. I've learned so much since I started training here.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_09.jpg" alt="">
                                </div>
                                <h5>Karthik Rao</h5>
                                <p class="small-text color-main">
                                    STUDENT
                                </p>
                                <p>
                                    The Okinawan Karate School has a rich tradition and a disciplined approach to training.
                                    I've enjoyed every moment and have grown both physically and mentally.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>

                        <div class="vertical-item testimonial-item box-shadow content-padding text-center">
                            <blockquote class="quote-item">
                                <div class="quote-image">
                                    <img src="images/team/testimonials_10.jpg" alt="">
                                </div>
                                <h5>Sindhu Pillai</h5>
                                <p class="small-text color-main">
                                    PARENT
                                </p>
                                <p>
                                    My daughter's experience at Okinawan Karate School has been fantastic. The training
                                    programs are comprehensive, and the school's focus on authentic techniques is
                                    impressive.
                                </p>
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

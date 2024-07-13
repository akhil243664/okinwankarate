@extends('layout.app')
@section('content')
    <section class="page_title ds s-parallax s-overlay s-py-5">
        <div class="container">
            <div class="row">

                <div class="divider-45"></div>

                <div class="col-md-12 text-center">
                    <h1 class="bold">Instructors</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="team.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Instructors
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>
    @php
        $instructors = \App\Helpers\InstructorsHelper::getInstructors();
    @endphp
    <section class="ds s-pt-60 s-pb-30 s-py-md-90 c-mb-30">
        <div class="container">
            <div class="row">
                <div class="d-none d-lg-block divider-70"></div>
                @foreach ($instructors as $instructor)
                    <div class="col-md-4 col-sm-6">
                        <div class="vertical-item box-shadow content-padding text-center">
                            <div class="item-media">
                                <img class="instructor" src="{{ url('public/assets/images/team/' . $instructor['image']) }}" alt="Instructors img">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="team-single.html"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5>
                                    <a href="team-single.html">{{ $instructor['name'] }}</a>
                                </h5>
                                {{-- <p class="small-text color-main">
                                    KIDS INSTRUCTOR
                                </p> --}}
                                <p>{{ $instructor['description'] }}</p>
                                <p class="social-icons">
                                    <a href="#" class="fa fa-facebook" title="facebook"></a>
                                    <a href="#" class="fa fa-twitter" title="twitter"></a>
                                    <a href="#" class="fa fa-google-plus" title="google"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- .col-* -->
                {{-- <div class="col-md-4 col-sm-6">

                    <div class="vertical-item box-shadow content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/02.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5>
                                <a href="team-single.html">Mark Lawrence</a>
                            </h5>

                            <p class="small-text color-main">
                                TEEN INSTRUCTOR
                            </p>
                            <p>Pork belly shankle turkey strip steak drumstick, jowl frankfurter. Sirloin picanha andouille
                                short loin.</p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div><!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item box-shadow content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/03.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5>
                                <a href="team-single.html">Ralph Lawson</a>
                            </h5>

                            <p class="small-text color-main">
                                ADULT INSTRUCTOR
                            </p>
                            <p>Chuck pancetta salami swine tri-tip burgdoggen kielbasa beef cupim pork belly cupim rump
                                brisket.</p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div><!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item box-shadow content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/04.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5>
                                <a href="team-single.html">Erik Warner</a>
                            </h5>

                            <p class="small-text color-main">
                                JIU-JITSU INSTRUCTOR
                            </p>
                            <p>Corned beef pork chop filet mignon prosciutto shankle burgdoggen pig shoulder biltong pork
                                loin.</p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div><!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item box-shadow content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/05.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5>
                                <a href="team-single.html">Brett Hawkins</a>
                            </h5>

                            <p class="small-text color-main">
                                KICK BOXING INSTRUCTOR
                            </p>
                            <p>Ball tip frankfurter beef ribs, brisket cupim kielbasa filet mignon ribs shank shoulder ham
                                pork.</p>
                            <p class="social-icons">

                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>

                            </p>

                        </div>
                    </div>
                </div><!-- .col-* -->
                <div class="col-md-4 col-sm-6">

                    <div class="vertical-item box-shadow content-padding text-center">
                        <div class="item-media">
                            <img src="images/team/06.jpg" alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="team-single.html"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <h5>
                                <a href="team-single.html">Garrett Farmer</a>
                            </h5>

                            <p class="small-text color-main">
                                KUNG-FU INSTRUCTOR
                            </p>
                            <p>Picanha turkey meatball pork cow rump leberkas swine pork loin tenderloin t-bone boudin.</p>
                            <p class="social-icons">
                                <a href="#" class="fa fa-facebook" title="facebook"></a>
                                <a href="#" class="fa fa-twitter" title="twitter"></a>
                                <a href="#" class="fa fa-google-plus" title="google"></a>
                            </p>

                        </div>
                    </div>
                </div><!-- .col-* --> --}}


                <div class="d-none d-lg-block divider-40"></div>

            </div>

        </div>
    </section>
@endsection

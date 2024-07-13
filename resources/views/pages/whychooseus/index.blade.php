@extends('layout.app')
@section('content')
    <section class="page_title ds s-parallax s-overlay s-py-5">
        <div class="container">
            <div class="row">

                <div class="divider-45"></div>

                <div class="col-md-12 text-center">
                    <h1 class="bold">FAQ</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="faq.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active">
                            FAQ
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
                <div class="divider-70 d-none d-xl-block"></div>

                <div class="col-lg-6">

                    <div id="accordion01" role="tablist">

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse01_header">
                                <h5>
                                    <a data-toggle="collapse" href="#collapse01" aria-expanded="true"
                                        aria-controls="collapse01">
                                        <i class="fa fa-pencil"></i>
                                        Authentic Training
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header"
                                data-parent="#accordion01">
                                <div class="card-body">
                                    <p>Immerse yourself in the traditional art of Okinawan karate, guided by our team of
                                        highly experienced and certified black belt instructors. Our instructors are
                                        dedicated to preserving the authenticity of Okinawan martial arts, ensuring that
                                        each training session is a blend of rigorous physical training and deep-rooted
                                        philosophical teachings. Whether you are a beginner or an advanced practitioner, our
                                        structured programs are designed to cater to all skill levels, providing
                                        personalized attention and fostering a disciplined yet supportive learning
                                        environment. Join us to master the techniques and values of true Okinawan karate and
                                        embark on a transformative journey of self-discipline, respect, and physical
                                        excellence.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse01_header">
                                <h5>
                                    <a data-toggle="collapse" href="#collapse02" aria-expanded="true"
                                        aria-controls="collapse02">
                                        <i class="fa fa-pencil"></i>
                                        Welcoming Community
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse02" class="collapse show" role="tabpane1" aria-labelledby="collapse02_header"
                                data-parent="#accordion02">
                                <div class="card-body">
                                    <p>Become part of a warm and inclusive community where everyone is encouraged to thrive
                                        and grow. Our dojo fosters a supportive atmosphere where individuals from all walks
                                        of life come together to share their passion for Okinawan karate. We believe in
                                        mutual respect, camaraderie, and personal growth, ensuring that each member feels
                                        valued and motivated. Whether you are a beginner or an experienced martial artist,
                                        you will find a welcoming space to challenge yourself, make lasting friendships, and
                                        achieve your personal and martial arts goals. Join us and experience the strength of
                                        our community spirit, where every step of your journey is celebrated and supported.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- collapse -->

                </div>
                <div class="col-lg-6">
                    <div id="accordion02" role="tablist">

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse06_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse06" aria-expanded="false"
                                        aria-controls="collapse06">
                                        <i class="fa fa-pencil"></i>
                                        Holistic Approach
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse06" class="collapse" role="tabpanel" aria-labelledby="collapse06_header"
                                data-parent="#accordion02">
                                <div class="card-body">
                                    At our dojo, we embrace a holistic approach to training that goes beyond building
                                    physical strength. Our comprehensive programs are designed to cultivate mental
                                    resilience, enhance focus, and build strong character. Through the disciplined practice
                                    of Okinawan karate, you will learn to push your limits, develop a calm and focused mind,
                                    and foster qualities such as respect, perseverance, and integrity. Our experienced
                                    instructors guide you in integrating these principles into your daily life, ensuring
                                    that the benefits of your training extend well beyond the dojo. Join us to embark on a
                                    journey of self-improvement, where physical, mental, and character development are
                                    seamlessly intertwined.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="collapse07_header">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse07" aria-expanded="false"
                                        aria-controls="collapse07">
                                        <i class="fa fa-pencil"></i>
                                        Proven Track Record
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse07" class="collapse" role="tabpanel" aria-labelledby="collapse07_header"
                                data-parent="#accordion02">
                                <div class="card-body">
                                    Our dojo boasts a proven track record of success, with students excelling in various
                                    competitions and demonstrating exceptional skill and dedication. Under the expert
                                    guidance of our experienced instructors, our students have consistently achieved top
                                    honors in regional, national, and international karate tournaments. Beyond competitive
                                    success, our training programs are designed to build a strong foundation in Okinawan
                                    karate, emphasizing both technique and discipline. Our graduates are well-prepared,
                                    confident, and highly skilled martial artists, equipped with the knowledge and
                                    experience to excel in any arena. Join us and become part of a legacy of excellence and
                                    achievement in the world of karate.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="divider-60 d-none d-xl-block"></div>

            </div>
        </div>
    </section>
@endsection

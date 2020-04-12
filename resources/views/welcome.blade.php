@extends('layouts.main')

@section('content')
    <div id="welcome">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                         data-aos="fade-up">
                       <img src="{{asset('img/welcome/women.png')}}" class="img-fluid hero-img" alt="" style="width:700px">
                     </div>
                     <div class="box col-lg-6">
                      <div>
                          <h1>Welcome to HIYA</h1>
                          <h2>Join our community of Lebanese Women</h2>
                          <p>Become a member of our network by sharing your email with us</p>
                    </div>
                  </div>
                  </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container-fluid txt_color_white">
                    <div class="section-title-white" data-aos="fade-up">
                        <h2>Who We Are</h2>
                    </div>
                    <div class="row box">
                        <!-- <div class="col-lg-3" data-aos="zoom-in"></div> -->
                        <div class="col-lg-8 d-flex flex-column justify-contents-center" data-aos="fade-left">
                            <div class="content pt-3 pt-lg-0">
                                <p>Hiya is a network of Lebanese women who empower and support each
                                    other professionally, personally and socially.
                                    By standing as a united front helping and believing in one another we can flourish.
                                    Through this network, women with different or similar interests, skills, experiences
                                    and ambitions will come together and lift each other.
                                    We’re providing a trustworthy environment for women where they can share personal
                                    experiences and professional ambitions.
                                </p>
                                <p>
                                    We want to break down barriers, destroy taboos and shape a new reality where women
                                    excel in every aspect of their lives. We aim to create a platform that goes beyond
                                    borders by empowering, nurturing and uniting women.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
    </section><!-- End About Section -->

    <section id="values">
        <div class="container bg_white txt_color_grey mt-5 pb-5">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Values</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 txt-center" data-aos="fade-left">
                    <h4>Be BOLD</h4>
                    <p>in this constant changing world, it is our duty to take risks, to innovate and to keep
                        reinventing our realities. We believe that we should always challenge ourselves in order to
                        succeed.</p>
                </div>
                <div class="col-lg-3 col-md-6 txt-center" data-aos="fade-left">
                    <h4>Inclusivity</h4>
                    <p>We believe that every woman has her place in this network and can participate in our
                        improvement.</p>
                </div>
                <div class="col-lg-3 col-md-6 txt-center" data-aos="fade-left">
                    <h4>Solidarity</h4>
                    <p>We believe that by coming together we can build a brighter future for women.</p>
                </div>
                <div class="col-lg-3 col-md-6 txt-center" data-aos="fade-left">
                    <h4>Integrity</h4>
                    <p> We value trust, transparency and honesty. We believe that for people to be able to work and
                        promote each other, they must first and foremost trust each other.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =======  Section ======= -->
    <section id="team" class="team pt-5">
        <div class="container-fluid px-5">

            <div class="section-title-white pb-5" data-aos="fade-up">
                <h2>Team</h2>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in">
                        <div class="pic"><img src="{{asset('img/welcome/team/autoportrait.jpeg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Kristelle Feghali</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="{{asset('img/welcome/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{asset('img/welcome/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{asset('img/welcome/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{asset('img/welcome/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{asset('img/welcome/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= partner Section ======= -->
    <section id="partner">
        <div class="container pt-5">
            <div class="row">
                <div class="section-title col-lg-6 box" data-aos="fade-up">
                    <div>
                        <h2>Partner With Us</h2>
                        <p>If you are interested in partnering with us or supporting us in any way, send us an email
                            at.</p>
                        <a href="mailto:partnership@hiyalebanon.com?Subject=partnership%20proposal" target="_top">partnership@hiyalebanon.com</a>
                    </div>
                </div>
                <div class="col-lg-6 box">
                    <img src="{{asset('img/welcome/women_draw.png')}}" alt="">
                </div>
            </div>


            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Frequently Asked Questions</h2>
                    </div>

                    <ul class="faq-list">

                        <li data-aos="fade-up">
                            <a data-toggle="collapse" class="" href="#faq1">How can I become part of the network? <i
                                        class="icofont-simple-up"></i></a>
                            <div id="faq1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                    non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                    purus non.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-toggle="collapse" href="#faq2" class="collapsed">Who can join? <i
                                        class="icofont-simple-up"></i></a>
                            <div id="faq2" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <a data-toggle="collapse" href="#faq3" class="collapsed">What does it mean to be part of X?
                                <i class="icofont-simple-up"></i></a>
                            <div id="faq3" class="collapse" data-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                    Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                    tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <a data-toggle="collapse" href="#faq4" class="collapsed">Where are we located? <i
                                        class="icofont-simple-up"></i></a>
                            <div id="faq4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                    cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <a data-toggle="collapse" href="#faq5" class="collapsed">What kind of events do we offer? <i
                                        class="icofont-simple-up"></i></a>
                            <div id="faq5" class="collapse" data-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                    est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

            </main><!-- End #main -->
            <!-- ======= Footer ======= -->
            <footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div>

                            <div class="row">

                                <div class="col-lg-4 col-md-6 txt-center">
                                    <div class="footer-info">
                                        <div class="social-links mt-3">
                                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 txt-center">
                                    <div class="footer-info">
                                        <div>
                                            <a href="mailto:contact@hiyalebanon.com?Subject=Hello%20again"
                                               target="_top">contact@hiyalebanon.com</a>
                                            <a href="mailto:partnership@hiyalebanon.com?Subject=Hello%20again"
                                               target="_top">partnership@hiyalebanon.com</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 txt-center">
                                    <div class="footer-info">
                                        <div class="social-links mt-3">
                                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>HIYA</span></strong>. All Rights Reserved
                    </div>
                </div>
            </footer>
        </div>
@endsection

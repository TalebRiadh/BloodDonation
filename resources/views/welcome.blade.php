@extends('base')
@section('title', 'Blood Donator')
@section('content')
    <div class="slider-wrap">
        <div id="slider_1" class="owl-carousel owl-theme">
            <div class="item">
                <img src="images/home_1_slider_1.jpg" alt="img">
                <div class="slider-content text-center">
                    <div class="container">

                        <div class="slider-contents-info">
                            <h3>Donate blood,save life !</h3>
                            <h2>
                                Your Donation Can bring
                                <br>
                                smile at others face
                            </h2>
                            <a href="#" class="btn btn-slider">Donate Now <i class="fa fa-long-arrow-right"></i></a>
                        </div> <!-- end .slider-contents-info  -->
                    </div><!-- /.slider-content -->
                </div>
            </div>
            <div class="item">
                <img src="images/home_1_slider_1.jpg" alt="img">
                <div class="slider-content text-center">
                    <div class="container">
                        <div class="slider-contents-info">
                            <h3>Donate blood,save life !</h3>
                            <h2>
                                Donate your blood and
                                <br>
                                Inspires to others
                            </h2>
                            <a href="#" class="btn btn-slider">Join With Us <i class="fa fa-long-arrow-right"></i></a>
                        </div><!-- /.slider-content -->
                    </div> <!-- end .slider-contents-info  -->
                </div>
            </div>
        </div>
    </div>



    <!--  SECTION DONATION PROCESS -->

    <section class="section-content-block section-process">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading"><span>Donation</span> Process</h2>
                    <p class="section-subheading">The donation process from the time you arrive center until the time you leave</p>
                </div> <!-- end .col-sm-10  -->
            </div> <!--  end .row  -->
            <div class="row wow fadeInUp">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="images/process_1.jpg" alt="process" />
                            <div class="step">
                                <h3>1</h3>
                            </div>
                        </figure> <!-- end .process-img  -->
                        <article class="process-info">
                            <h2>Registration</h2>
                            <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                        </article>
                    </div> <!--  end .process-layout -->
                </div> <!--  end .col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="images/process_2.jpg" alt="process" />
                            <div class="step">
                                <h3>2</h3>
                            </div>
                        </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->
                        <article class="process-info">
                            <h2>Screening</h2>
                            <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                        </article>
                    </div> <!--  end .process-layout -->
                </div> <!--  end .col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="images/process_3.jpg" alt="process" />
                            <div class="step">
                                <h3>3</h3>
                            </div>
                        </figure> <!-- end .process-img  -->
                        <article class="process-info">
                            <h2>Donation</h2>
                            <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                        </article>
                    </div> <!--  end .process-layout -->
                </div> <!--  end .col-lg-3 -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="images/process_4.jpg" alt="process" />
                            <div class="step">
                                <h3>4</h3>
                            </div>
                        </figure> <!-- end .process-img  -->
                        <article class="process-info">
                            <h2>Refreshment</h2>
                            <p>You can also stay in sitting room until you feel strong enough to leave our center. You will receive awesome drink from us in donation zone. </p>
                        </article>
                    </div> <!--  end .process-layout -->
                </div> <!--  end .col-lg-3 -->
            </div> <!--  end .row -->
        </div> <!--  end .container  -->
    </section> <!--  end .section-process -->

    <!--  SECTION COUNTER   -->
    <section class="section-counter"  data-stellar-background-ratio="0.3">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">2578</span>
                        <h4>Success Smile</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-stethoscope icon"></i>
                        <span class="counter">3235</span>
                        <h4>Happy Donors</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-users icon"></i>
                        <span class="counter">3568</span>
                        <h4>Happy Recipient</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-building icon"></i>
                        <span class="counter">1364</span>
                        <h4>Total Awards</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->
            </div> <!-- end row  -->
        </div> <!--  end .container  -->
    </section> <!--  end .section-counter -->

    <section class="section-content-block section-client-testimonial">

        <div class="container">

            <div class="testimonial-container text-center">

                <div class="col-md-10 col-md-offset-1 col-sm-12">

                    <div class="testimony-layout-1">
                        <h3 class="people-quote">Donor Opinion</h3>
                        <p class="testimony-text">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else’s life makes me feel great!
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>

                        <h6>Brandon Munson</h6>
                        <span>CTO, Fulcrum Design, USA</span>

                    </div> <!-- end .testimony-layout-1  -->

                </div> <!--  end col-md-10  -->

                <div class="col-md-10 col-md-offset-1 col-sm-12">

                    <div class="testimony-layout-1">
                        <h3 class="people-quote">Donor Opinion</h3>
                        <p class="testimony-text">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>

                        <h6>Brandon Munson</h6>
                        <span>CTO, Fulcrum Design, USA</span>

                    </div> <!-- end .testimony-layout-1  -->

                </div> <!--  end col-md-10  -->

                <div class="col-md-10 col-md-offset-1 col-sm-12">

                    <div class="testimony-layout-1">
                        <h3 class="people-quote">Recipient Opinion</h3>
                        <p class="testimony-text">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>

                        <h6>Brandon Munson</h6>
                        <span>CTO, Fulcrum Design, USA</span>

                    </div> <!-- end .testimony-layout-1  -->

                </div> <!--  end col-md-10  -->

            </div>  <!--  end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-client-testimonial -->
    <!-- SECTION TEAM  -->

    <section class="section-content-block section-secondary-bg section-our-team">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Volunteers</h2>
                    <p class="section-subheading">The volunteers who give their time and talents help to fulfill our mission.</p>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

            <div class="row">

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                    <div class="team-layout-1">

                        <figure class="team-member">
                            <a href="#" title="ALEXANDER GARY">
                                <img src="images/team_9.jpg" alt="ALEXANDER GARY"/>
                            </a>

                        </figure> <!-- end. team-member  -->

                        <article class="team-info">
                            <h3>ALEXANDER GARY</h3>
                            <h4>Co-Founder</h4>
                        </article>

                        <div class="team-content">

                            <div class="team-social-share text-center clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div> <!-- end .author-social-box  -->

                        </div>

                    </div> <!--  end team-layout-1 -->

                </div> <!--  end .col-md-4 col-sm-12  -->

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                    <div class="team-layout-1">

                        <figure class="team-member">
                            <a href="#" title="MELISSA MUNOZ">
                                <img src="images/team_6.jpg" alt="MELISSA MUNOZ" />
                            </a>

                        </figure> <!-- end. team-member  -->

                        <article class="team-info">
                            <h3>MELISSA MUNOZ</h3>
                            <h4>Founder</h4>
                        </article>

                        <div class="team-content">

                            <div class="team-social-share text-center clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div> <!-- end .author-social-box  -->

                        </div>

                    </div> <!--  end team layout-1 -->

                </div> <!--  end .col-md-4 col-sm-12  -->

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                    <div class="team-layout-1">

                        <figure class="team-member">
                            <a href="#" title="JOHN ABRAHAM">
                                <img src="images/team_7.jpg" alt="JOHN ABRAHAM" />
                            </a>

                        </figure> <!-- end. team-member  -->

                        <article class="team-info">
                            <h3>JOHN ABRAHAM</h3>
                            <h4>Manager</h4>
                        </article>
                        <div class="team-content">

                            <div class="team-social-share text-center clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div> <!-- end .author-social-box  -->

                        </div>

                    </div> <!--  end team-layout-1 -->

                </div> <!--  end .col-md-4 col-sm-12  -->


            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-our-team -->

    <!-- SECTION CTA -->

    <section class="section-content-block cta-section-3">
        <div class="container wow fadeIn animated">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-content text-center">
                        <h2>Join with us and save life</h2>
                        <a class="btn-cta-3" href="#">Become Volunteer</a>
                    </div>
                </div> <!-- end .col-md-12 -->
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section>   <!-- end cta-section  -->
    <!--  SECTION CAMPAIGNS   -->

    <section class="section-content-block" >

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Donation Campaigns</h2>
                    <p class="section-subheading">Campaigns to encourage new donors to join and existing to continue to give blood.</p>
                </div> <!-- end .col-sm-12  -->

            </div> <!-- end .row  -->


            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="event-latest">
                        <div class="row">

                            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                <div class="event-latest-thumbnail">
                                    <a href="#">
                                        <img src="images/event_1.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!--  col-sm-5  -->

                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="event-details">
                                    <a class="latest-date" href="#">14 June, 2017</a>
                                    <h4 class="event-latest-title">
                                        <a href="#">World Blood Donors Day</a>
                                    </h4>
                                    <p>Every year, on 14 June, countries around the world celebrate World Blood Donor Day. The event serves to thank voluntary.</p>
                                    <div class="event-latest-details">
                                        <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                        <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                    </div>
                                </div>
                            </div> <!--  col-sm-7  -->

                        </div>

                    </div>
                </div> <!--  col-sm-6  -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="event-latest ">

                        <div class="row">

                            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                <div class="event-latest-thumbnail">
                                    <a href="#">
                                        <img src="images/event_2.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!--  col-sm-5  -->

                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="event-details">
                                    <a class="latest-date" href="#">20 Sep, 2017</a>
                                    <h4 class="event-latest-title">
                                        <a href="#">O- Blood donors needed</a>
                                    </h4>
                                    <p>O Negative blood cells are called universal meaning they can be transfused to almost any patient in need and blood cells are safest.</p>
                                    <div class="event-latest-details">
                                        <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                        <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                    </div>
                                </div>
                            </div> <!--  col-sm-7  -->

                        </div>

                    </div>
                </div> <!--  col-sm-6  -->
            </div> <!--  end .row  -->

            <div class="row margin-bottom-30">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="event-latest">
                        <div class="row">

                            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                <div class="event-latest-thumbnail">
                                    <a href="#">
                                        <img src="images/event_3.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!--  col-sm-5  -->

                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="event-details">
                                    <a class="latest-date" href="#">20 Sep, 2017</a>
                                    <h4 class="event-latest-title">
                                        <a href="#">You are Somebody Type</a>
                                    </h4>
                                    <p>Many people has same blood group like you. so donate now and bring smiles in their face and encourage others for donate blood.</p>
                                    <div class="event-latest-details">
                                        <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                        <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                    </div>
                                </div>
                            </div> <!--  col-sm-7  -->

                        </div>
                    </div>
                </div> <!--  col-sm-6  -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="event-latest">

                        <div class="row">
                            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                                <div class="event-latest-thumbnail">
                                    <a href="#">
                                        <img src="images/event_4.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!--  col-sm-5  -->

                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="event-details">
                                    <a class="latest-date" href="#">20 Sep, 2017</a>
                                    <h4 class="event-latest-title">
                                        <a href="#">Donation - Feel Real Peace</a>
                                    </h4>
                                    <p>You're the real hero because you can gift a new life for patient.So donate your blood and enjoy a precious life. Don't fear, it's really easy.</p>
                                    <div class="event-latest-details">
                                        <a class="author" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00am - 3.00pm</a>
                                        <a class="comments" href="#"> <i class="fa fa-map-marker" aria-hidden="true"></i> California, USA</a>
                                    </div>
                                </div>
                            </div> <!--  col-sm-7  -->

                        </div>

                    </div>
                </div> <!--  col-sm-6  -->

            </div> <!--  end .row  -->

            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                    <a class="btn btn-load-more" href="#">Load All Campaigns</a>
                </div>
            </div>

        </div> <!--  end .container  -->

    </section>
    <!--  SECTION GALLERY  -->

    <section class="section-content-block no-bottom-padding section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Photo Gallery</h2>
                    <p class="section-subheading">Campaign photos of different parts of world and our prestigious voluntary work</p>
                </div> <!-- end .col-sm-10  -->


            </div> <!-- end .row  -->

        </div> <!--  end .container -->

        <div class="container-fluid wow fadeInUp">

            <div class="row no-padding-gallery">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_1.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_1.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_2.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a> <!-- end .gallery-light-box  -->

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_3.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->

            </div> <!-- end .row  -->

            <div class="row no-padding-gallery">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_4.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a> <!-- end .gallery-light-box  -->

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_5.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_5.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a>

                </div><!-- end .col-sm-3  -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                    <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

                        <figure class="gallery-img">

                            <img src="images/gallery_6.jpg" alt="gallery image" />

                        </figure> <!-- end .gallery-img  -->

                    </a> <!-- end .gallery-light-box  -->

                </div><!-- end .col-sm-3  -->

            </div> <!-- end .row  -->

        </div><!-- end .container-fluid  -->

    </section> <!-- end .section-content-block  -->

    <!-- SECTION LOGO   -->

    <section class="section-client-logo">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Our Sponsors</h2>
                    <p class="section-subheading">The sponsors who give their valuable amount to fulfill our mission.</p>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->


            <div class="row">

                <div class="logo-items logo-layout-1 text-center">

                    <div class="client-logo">

                        <img src="images/logo_1.jpg" alt="" />

                    </div>

                    <div class="client-logo">

                        <img src="images/logo_2.jpg" alt="" />

                    </div>


                    <div class="client-logo">

                        <img src="images/logo_3.jpg" alt="" />

                    </div>

                    <div class="client-logo">

                        <img src="images/logo_4.jpg" alt="" />

                    </div>

                    <div class="client-logo">

                        <img src="images/logo_5.jpg" alt="" />

                    </div>


                    <div class="client-logo">

                        <img src="images/logo_6.jpg" alt="" />

                    </div>

                    <div class="client-logo">

                        <img src="images/logo_7.jpg" alt="" />

                    </div>

                    <div class="client-logo">

                        <img src="images/logo_8.jpg" alt="" />

                    </div>

                </div> <!-- end .logo-items  -->

            </div> <!-- end row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-client-logo -->
    <!-- SECTION BLOG   -->

    <section class="section-content-block section-home-blog">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Recent Blog</h2>
                    <p class="section-subheading">
                        Latest news and statements regarding giving blood, blood processing and supply.
                    </p>
                </div> <!-- end .col-md-12  -->

            </div> <!--  end .row  -->

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="latest-news-container">

                        <a href="#">
                            <figure>
                                <img src="images/blog_thumb_1.jpg" alt="latest news">
                            </figure>
                        </a>

                        <div class="news-content">

                            <h3>
                                <a href="#">Blood Connects Us All in a Soul</a>
                            </h3>

                            <div class="news-meta-info">
                                <i class="fa fa-clock-o"></i> April 4, 2017
                                &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                            </div>

                            <div class="update-details">
                                In many countries, demand exceeds supply, and blood services face the challenge of making blood available for patient.
                            </div>

                        </div>

                    </div><!--  end .latest-news-container  -->

                </div> <!--  end col-lg-4  -->

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="latest-news-container">

                        <a href="#">
                            <figure>
                                <img src="images/blog_thumb_2.jpg" alt="latest news">
                            </figure>
                        </a>

                        <div class="news-content">

                            <h3>
                                <a href="#">Give Blood and Save three Lives</a>
                            </h3>

                            <div class="news-meta-info">
                                <i class="fa fa-clock-o"></i> April 4, 2017
                                &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                            </div>

                            <div class="update-details">
                                To save a life, you don’t need to use muscle. By donating just one unit of blood, you can save three lives or even several lives.
                            </div>

                        </div>

                    </div><!--  end .latest-news-container  -->

                </div> <!--  end col-lg-4  -->

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="latest-news-container">

                        <a href="#">
                            <figure>
                                <img src="images/blog_thumb_3.jpg" alt="latest news">
                            </figure>
                        </a>

                        <div class="news-content">

                            <h3>
                                <a href="#">Why Should I donate Blood ?</a>
                            </h3>

                            <div class="news-meta-info">
                                <i class="fa fa-clock-o"></i> April 4, 2017
                                &nbsp; <i class="fa fa-comment-o"></i> 10 Comments
                            </div>

                            <div class="update-details">
                                Blood is the most precious gift that anyone can give to another person.Donating blood not only saves the life also donors.
                            </div>

                        </div>

                    </div><!--  end .latest-news-container  -->

                </div> <!--  end col-lg-4  -->

            </div> <!-- end row  -->

            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                    <a href="#" class="btn btn-load-more">- Load More Blog -</a>
                </div>
            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-latest-blog -->

@endsection

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">


    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
<header class="main-header clearfix" data-sticky_header="true">

    <div class="top-bar clearfix">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-sm-12">

                    <p>Welcome to blood donation center.</p>

                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="top-bar-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

            </div>

        </div> <!--  end .container -->

    </div> <!--  end .top-bar  -->

    <section class="header-wrapper navgiation-wrapper">

        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index.html"><img alt="" src="images/logo.png"></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="drop">
                            <a href="index.html" title="Home Layout 01">Home</a>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a class="btn-xs btn-donator" href="/donator">Donate</a></li>

                    </ul>
                </div>
            </div>
        </div>

    </section>

</header> <!-- end main-header  -->

@yield('content')



<!-- START FOOTER  -->

<footer>

    <section class="footer-widget-area footer-widget-area-bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-footer">

                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <img src="images/logo-footer.png" alt="" />
                            </div> <!--  end col-lg-3-->

                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <p>
                                    We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                    We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                                </p>
                            </div> <!--  end .col-lg-9  -->

                        </div> <!--  end .row -->

                    </div> <!--  end .about-footer  -->

                </div> <!--  end .col-md-12  -->

            </div> <!--  end .row  -->

            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="footer-widget">
                        <div class="sidebar-widget-wrapper">
                            <div class="footer-widget-header clearfix">
                                <h3>Subscribe Us</h3>
                            </div>
                            <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                            <div class="footer-subscription">
                                <p>
                                    <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
                                </p>
                                <p>
                                    <input class="btn btn-default" value="Subscribe Now" type="submit">
                                </p>
                            </div>
                        </div>
                    </div>

                </div> <!--  end .col-md-4 col-sm-12 -->

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="footer-widget">

                        <div class="sidebar-widget-wrapper">

                            <div class="footer-widget-header clearfix">
                                <h3>Contact Us</h3>
                            </div>  <!--  end .footer-widget-header -->


                            <div class="textwidget">

                                <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">support@donation.com</a><br/><a href="#">helpme@donation.com</a></p>

                                <i class="fa fa-location-arrow fa-contact"></i> <p>Road-2,3/A East Shibgonj<br/>Sylhet-3100, Bangladesh</p>

                                <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 0823 560 433<br/>Cell:&nbsp; (+880) 0723 161 343</p>

                            </div>

                        </div> <!-- end .footer-widget-wrapper  -->

                    </div> <!--  end .footer-widget  -->

                </div> <!--  end .col-md-4 col-sm-12 -->

                <div class="col-md-4 col-sm-12 col-xs-12">

                    <div class="footer-widget clearfix">

                        <div class="sidebar-widget-wrapper">

                            <div class="footer-widget-header clearfix">
                                <h3>Support Links</h3>
                            </div>  <!--  end .footer-widget-header -->


                            <ul class="footer-useful-links">

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Thalassemia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Cell Elofrosis
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Myelodysasia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Blood Count
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Hemolytimia
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Ychromas Eosis
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Hyrcoagulable
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Thrombo Xtosis
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Sicklenemiaxs
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-caret-right fa-footer"></i>
                                        Aplastic Anemia
                                    </a>
                                </li>

                            </ul>

                        </div> <!--  end .footer-widget  -->

                    </div> <!--  end .footer-widget  -->

                </div> <!--  end .col-md-4 col-sm-12 -->

            </div> <!-- end row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .footer-widget-area  -->

    <!--FOOTER CONTENT  -->

    <section class="footer-contents">

        <div class="container">

            <div class="row clearfix">

                <div class="col-md-6 col-sm-12">
                    <p class="copyright-text"> Copyright © 2017, All Right Reserved - by xenioushk </p>

                </div>  <!-- end .col-sm-6  -->

                <div class="col-md-6 col-sm-12 text-right">
                    <div class="footer-nav">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="#">Causes</a>
                                </li>
                                <li>
                                    <a href="donate.html">Events</a>
                                </li>
                                <li>
                                    <a href="blog-with-sidebar.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="campaign-grid.html">Blog</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div> <!--  end .footer-nav  -->
                </div> <!--  end .col-lg-6  -->

            </div> <!-- end .row  -->

        </div> <!--  end .container  -->

    </section> <!--  end .footer-content  -->

</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <script src="js/jquery.backTop.min.js "></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="{{ asset('/js/venobox.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/custom-scripts.js') }}"></script>





    @yield('js')
</body>
</html>

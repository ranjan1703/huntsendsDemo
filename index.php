
<!doctype html>
<?php
include('function.php');?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>Huntsends.com | Huntsends</title>

    <meta name="description" content="Huntsends is a plateform for YouTbers and Vloggers to showcase thier videos to the world." />
    <meta name="keywords" content="hundsends, online media company,vllogers, youtubers">

    <!-- FAVICON  -->
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- =========================
       STYLESHEETS 
    ============================== -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/icons/iconfont.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="css/plugins/loaders.css">
    <link rel="stylesheet" href="css/plugins/animate.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.date.css">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-navbar">

    <!-- Preloader -->
    <div class="loader bg-green">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>



    <div class="main-container" id="page">

        <!-- =========================
            HEADER 
        ============================== -->
        <header id="nav2-3">

            <nav class="navbar navbar-fixed-top bg-transparent cta-header" id="main-navbar">

                <div class="container">
                    <!-- Menu Button for Mobile Devices -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Image Logo -->
                        <!-- note:
                            recommended sizes
                                width: 150px;
                                height: 35px;
                        -->
                        <!-- Image Logo For Background Transparent -->
                        <!--<a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo-black.png" alt="logo" /></a>
                        <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo-white.png" alt="logo" /></a> -->
                    </div>
                    <!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="blog-list.php" class="smooth-scroll">TRAVEL</a></li>
                            <li><a href="blog-list.php" class="smooth-scroll">MUSIC</a></li>
                            <li><a href="blog-list.php" class="smooth-scroll">FOOD</a></li>
                            <li><a href="blog-list.php" class="smooth-scroll">TECHNO</a></li>
                            <li><a href="blog-list.php" class="smooth-scroll">DIY</a></li>

                            <li><a href="blog-list.php" class="smooth-scroll"></a></li>
                            <!-- Dropdown Menu -->
                            <li class="dropdown">
                                <a id="dLabel" data-toggle="dropdown" data-target="#" href="#">
                                    Explore More <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu">
                                    <li><a href="blog-list.php">DANCE</a></li>
                                    <li><a href="blog-list.php">FASHION</a></li>
                                    <li><a href="blog-list.php">HEALTH & FITNESS</a></li>
                                    <li><a href="blog-list.php">INTERNSHIPS</a></li>

                                </ul>
                            </li>

                            <!--<li><a href="" class="btn-nav btn-grey btn-login">Login</a></li>
                            <li><a href="#hero8" class="btn-nav btn-blue btn-green smooth-scroll">Get Started</a></li>-->
                        </ul>
                        <!-- /End Menu Links -->
                    </div>
                    <!-- /End Navbar Collapse -->

                </div>
                <!-- /End Container -->
            </nav>
            <!-- /End Navbar -->
        </header>
        <!-- /End Header -->


        <!-- =========================
            HERO SECTION
        ============================== -->
        <section id="hero8" class="hero hero-countdown bg-img" style="background-image:url('images/hero.jpg');">
            <!-- <div class="overlay"></div> -->

            <div class="container">
                <!-- Hero Conten -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="text-white">Some Text Here</h1>
                        <p class="lead text-white m-b-0 f-w-700">Watch our latest story.</p>
                    </div>
                </div>
                <!-- Play Popup Button -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
                        <div class="big-popup p-y-md">
                            <a class="mp-iframe" href="https://www.youtube.com/watch?v=RmrjYxzsk64#"><i class="fa fa-play-circle"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Search Form -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <p class="text-white text-uppercase f-w-700"><small></small></p>
                        <form class="form-inline form-white" action="results.php" method="get" enctype="multipart/form-data">
                            <div class="form-group">

                                <input type="text" class="form-control" placeholder="Type blog, music, travel.." name="user_query">
                            </div>
                            <button type="submit" class="btn btn btn-green" name="search" value="search">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /End Row -->
            </div>
            <!-- /End Container -->

        </section>
        <!-- /End Hero Section -->

        <section id="courses1-1" class="p-y-lg bg-edit">

            <div class="container">


                <div class="row c3">
                    <!-- Course Item -->
                    <div class="col-md-4">
                        <div class="path bg-edit bg-green center-md">
                            <div class="vertical-center-rel text-white text-center">
                                <h5 class="f-w-900">Exclusive huntsend stories</h5>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="images/hero.jpg" alt="">
                                            <div class="carousel-caption">
                                                <h4>Some Heading</h4>
                                                <p>Some Sub-heading</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img src="images/hero.jpg" alt="">
                                            <div class="carousel-caption">
                                                <h4>Some Heading</h4>
                                                <p>Some Sub-heading</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img src="images/hero.jpg" alt="">
                                            <div class="carousel-caption">
                                                <h4>Some Heading</h4>
                                                <p>Some Sub-heading</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                     <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <nav aria-label="...">
                                    <ul class="pager">
                                        <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                                        <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                    <!-- LOGO-->
                    <div class="col-md-4">
                        <div class="path bg-edit bg-white center-md">
                            <div class="vertical-center-rel text-white text-center">
                                <div class="img-wrap" style="background-image:url('images/logo-white.png');"></div>
                                <img src="images/logo-white.png" />
                            </div>
                        </div>
                    </div>
                     <!--#######CAROUSEL1#######################-->
                    <div class="col-md-4">
                        <div class="path bg-edit bg-dark center-md">
                            <div class="vertical-center-rel text-white text-center">
                                <h5 class="f-w-900">Huntsends Vloggers</h5>
                                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="images/hero.jpg" alt="">
                                            <div class="carousel-caption">
                                                <h4>Sample text</h4>

                                            </div>

                                        </div>

                                        <div class="item">
                                            <img src="images/hero.jpg" alt="">

                                        </div>

                                        <div class="item">
                                            <img src="images/hero.jpg" alt="">

                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                     </a>
                                    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                     <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <nav aria-label="...">
                                    <ul class="pager">

                                        <li class="next"><a href="#">See More <span aria-hidden="true">&rarr;</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                                                                    <!--#######CLICKABLE IMAGE#######################-->
                <div class="row c3 new-row-md">

                    <div class="col-md-4">
                        <a href="#">
                        <img border="1" alt="" src="images/img.jpeg" width="350" height="300">
                         </a>

                    </div>
                    <!--#############-->
                                                                <!--#######CAROUSEL2#######################-->
                    <div class="col-md-4">

                        <div id="myCarousel2" class="carousel slide" data-ride="carousel" style="height: 300px;">

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                                <li data-target="#myCarousel2" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/hero.jpg" alt="" style="height: 300px;">
                                    <div class="carousel-caption">
                                        <h4>Sapmle text</h4>

                                    </div>

                                </div>

                                <div class="item">
                                    <img src="images/hero.jpg" alt="" style="height: 300px;">

                                </div>

                                <div class="item">
                                    <img src="images/hero.jpg" alt="" style="height: 300px;">

                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                             <span class="sr-only">Next</span>
                             </a>
                        </div>
                        <div class="col align-self-center">
                            <div class="footer-social social-btn m-t-md">
                                <a href="#" class="sb-white"><i class="fa fa-facebook text-black"></i></a>
                                <a href="#" class="sb-white"><i class="fa fa-google-plus text-black"></i></a>
                                <a href="#" class="sb-white"><i class="fa fa-twitter text-black"></i></a>
                                <a href="#" class="sb-white"><i class="fa fa-instagram text-black"></i></a>
                                <a href="#" class="sb-white"><i class="fa fa-google-plus text-black"></i></a>
                                <a href="#" class="sb-white"><i class="fa fa-twitter text-black"></i></a>
                                <a href="#" class="sb-white"><i class="fa fa-instagram text-black"></i></a>
                            </div>
                        </div>

                    </div>


                                                                     <!--#######CAROUSEL3#######################-->


                    <div class="col-md-4">
                        <div id="myCarousel3" class="carousel slide" data-ride="carousel" style="height: 300px;">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel3" data-slide-to="1"></li>
                                <li data-target="#myCarousel3" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/hero.jpg" alt="" style="height: 300px;">
                                    <div class="carousel-caption">
                                        <h4>Sapmle text</h4>

                                    </div>

                                </div>

                                <div class="item">
                                    <img src="images/hero.jpg" alt="" style="height: 300px;">

                                </div>

                                <div class="item">
                                    <img src="images/hero.jpg" alt="" style="height: 300px;">

                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                               <span class="sr-only">Previous</span>
                                </a>
                            <a class="right carousel-control" href="#myCarousel3" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                             <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

                                                 <!--#########################CHANNELS#############################-->

        <section id="content1-1" class="p-y-lg content-spotlight bg-edit">

            <!-- Section Header -->
            <div class="container" style="margin-top: -110px">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2 class="m-b-md">Huntsends channel.</h2>
                            <p class="lead m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quibusdam esse expedita aliquam adipisci ipsa, eligendi. Quisquam corrupti ratione.</p>
                        </div>
                    </div>

                    <div class="container">

                        <!-- Portfolio Item -->
                        <div class="col-md-4 col-sm-4 m-b-md clearfix">
                            <div class="h caption-1 wow zoomIn">
                                <!-- Item Image -->
                                <iframe width="350" height="315" src="https://www.youtube.com/embed/RmrjYxzsk64" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-md-4 col-sm-4 m-b-md clearfix">
                            <div class="h caption-1 wow zoomIn" data-wow-delay="0.2s">
                                <!-- Item Image -->
                                <iframe width="350" height="315" src="https://www.youtube.com/embed/NOv1QHGzT70" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="col-md-4 col-sm-4 m-b-md clearfix">
                            <div class="h caption-1 wow zoomIn" data-wow-delay="0.4s">
                                <!-- Item Image -->
                                <iframe width="350" height="315" src="https://www.youtube.com/embed/NOv1QHGzT70" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                       </div>
                    
                </div>
            </div>
        </section>
        <!--############BLOG SECTION##############-->

        <section id="blog3-1" class="p-y-lg blog bg-edit">
            <div class="container"  style="margin-top: -120px">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Latest Post</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque dolores unde earum repellendus esse molestias explicabo deleniti doloribus.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 content-block c2">
                        <!-- Blog Post -->
                        <?php homePost();?>
                        <!-- Blog Post -->
                       
                    </div>
                </div>

                <!-- <div class="row new-row-md">
                    <div class="col-md-10 col-md-offset-1 content-block c2">
                                                <div class="col-sm-6">
                            <a href=""><img src="images/hero.jpg" alt="" class="img-responsive img-rounded"></a>
                            <div class="post-info">
                                <div class="date text-edit">
                                    <span class="day">26</span> Sep
                                </div>
                                <a href="">
                                    <h5>Magni vitae ducimus voluptatem.</h5>
                                </a>
                                <h6 class="p-opacity">Posted by Carl Bradley in <strong>Staff</strong></h6>
                            </div>
                            <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                            <a href="" class="more-link edit">Continue Reading ...</a>
                        </div>
                        
                        <div class="col-sm-6">
                            <a href=""><img src="images/hero.jpg" alt="" class="img-responsive img-rounded"></a>
                            <div class="post-info">
                                <div class="date text-edit">
                                    <span class="day">8</span> Aug
                                </div>
                                <a href="">
                                    <h5>Impedit quibusdam ratione nihil.</h5>
                                </a>
                                <h6 class="p-opacity">Posted by Frank Smith in <strong>Dental Clinic</strong></h6>
                            </div>
                            <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                            <a href="" class="more-link edit">Continue Reading ...</a>
                        </div>
                    </div>
                </div> -->
                <!-- /End Row -->
            </div>
            <!-- /End Container -->

        </section>

        <!-- /End Cta Section -->


        <!-- =========================
             FOOTER
        ============================== -->
        <footer id="footer6-2" class="footer f6 p-y-md bg-edit bg-dark">
            <div class="container text-white inverse">
                <div class="row">
                    <!-- Footer Logo and Text -->
                    <div class="col-md-6">
                        <img src="" alt="LOGO">
                        <p class="m-t">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="footer-social social-btn m-t-md">
                            <a href="#" class="sb-white"><i class="fa fa-facebook text-black"></i></a>
                            <a href="#" class="sb-white"><i class="fa fa-google-plus text-black"></i></a>
                            <a href="#" class="sb-white"><i class="fa fa-twitter text-black"></i></a>
                            <a href="#" class="sb-white"><i class="fa fa-instagram text-black"></i></a>
                            <a href="#" class="sb-white"><i class="fa fa-google-plus text-black"></i></a>
                            <a href="#" class="sb-white"><i class="fa fa-twitter text-black"></i></a>
                            <a href="#" class="sb-white"><i class="fa fa-instagram text-black"></i></a>
                        </div>
                    </div>
                    <!-- Footer Links -->
                    <div class="col-md-2">
                        <p><strong>Links</strong></p>
                        <ul class="footer-links m-t">
                            <li class="m-b"><a href="blog-list.php" class="edit">Blog</a></li>
                            <li class="m-b"><a href="#" class="edit">Advertise</a></li>
                            <li class="m-b"><a href="#" class="edit">Sponser</a></li>
                            <li class="m-b"><a href="#" class="edit">Contact</a></li>
                            <li class="m-b"><a href="#" class="edit">Discloser polices</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links -->
                    <div class="col-md-2">
                        <p><strong>Categories</strong></p>


                    </div>

                    <!-- Footer Links -->
                    <div class="col-md-2">
                        <form class="form-inline form-white wow zoomIn" id="mailchimpForm" action="http://themedept.us9.list-manage.com/subscribe/post?u=a8cd4fa72585379e205821fa2&amp;id=366e69e674">
                            <div class="form-group">
                                <input type="email" class="form-control" id="m3Email" placeholder="Enter your Email Address" name="MERGE0" required>
                            </div>
                            <button type="submit" class="btn btn-red">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- /End Row-->
            </div>
            <div class="p-y footer copyright f1 bg-edit bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text-white">
                            <p>All rights reserved - Copyright © 2018 <a href="ranjandev.me" class="f-w-900 inverse">by ranjan</a></p>
                        </div>
                        <!--<div class="col-sm-4">
                            <ul class="footer-social inverse">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                    <!-- /End Row -->
                </div>
                <!-- /End Container -->
            </div>
            <!-- /End Container-->
        </footer>
        <!-- /End Footer -->

        <!-- /End Footer Section -->


    </div>
    <!-- /End Main Container -->


    <!-- Back to Top Button -->
    <a href="#" class="top" style="background-color:#439FE0;">Top</a>


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script src="js/plugins/jquery1.11.2.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="js/plugins/jquery.countTo.js"></script>
    <script src="js/plugins/jquery.formchimp.min.js"></script>
    <script src="js/plugins/jquery.jCounter-0.1.4.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/jquery.vide.min.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/plugins/twitterFetcher_min.js"></script>
    <script src="js/plugins/wow.min.js"></script>
    <script src="js/plugins/picker.js"></script>
    <script src="js/plugins/picker.date.js"></script>
    <!-- Custom Script -->
    <script src="js/custom.js"></script>


</body>

</html>

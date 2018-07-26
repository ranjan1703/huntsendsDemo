<!doctype html>
<?php include("function.php")  ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE OF SITE -->
    <title>Blog List | Huntsends</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
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
    <div class="loader bg-blue">
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
        <header id="nav2-1">
            
            <nav class="navbar navbar-fixed-top" id="main-navbar">
                <div class="container">
                    
                    <div class="navbar-header">
                        <!-- Menu Button for Mobile Devices -->
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
                        <a href="" class="navbar-brand smooth-scroll"><img src="" alt="logo" /></a>
                        <!-- Image Logo For Background Transparent -->
                        <!--
                            <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo-black.png" alt="logo" /></a>
                            <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo-white.png" alt="logo" /></a> 
                        -->
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="" class="smooth-scroll">Section 2</a></li>
                            <li><a href="" class="smooth-scroll">Section 3</a></li>
                            <li><a href="" class="smooth-scroll">Section 4</a></li>
                            <li><a href="" class="smooth-scroll">Section 5</a></li>
                            <li><a href="" class="btn-nav btn-grey btn-login">Login</a></li>
                            <li><a href="" class="btn-nav btn-blue btn-signup">Signup</a></li>
                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header>
        <!-- /End Header Navigation -->


        <!-- =========================
            PAGE HEADER
        ============================== -->
        <section class="page-head bg-img p-y-md" style="background-image:url('images/blog.jpeg')">
            <!-- <div class="overlay"></div> -->
            <div class="container">
                <div class="row c2 h-bg text-white">
                    <div class="col-sm-6">
                        <h1 class="h3 f-w-900 m-b-0">Huntsends.com</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ol class="breadcrumb m-b-0">
                            <li>
                                <a href="index.php" class="inverse">Home</a>
                            </li>
                            <li class="active text-white">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- /End Page Header -->


        <!-- =========================
           BLOG SECTION
        ============================== -->
        <section class="p-y-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-list">    
                          <?php
                          $get_blog="SELECT * from blog";
    $run_blog=mysqli_query($con,$get_blog);
    while($row_blog=mysqli_fetch_array($run_blog)){
       
       
        
        $blog_id=$row_blog['blog_id']; 
        $blog_cat=$row_blog['blog_cat'];
        $blog_title=$row_blog['blog_title'];
        $blog_date=$row_blog['blog_date'];
        $blog_author=$row_blog['blog_author'];
        $blog_image=$row_blog['blog_image'];
        $blog_body=$row_blog['blog_body'];
        $blog_keywords=$row_blog['blog_keywords'];
        echo" 
                            <div class='blog-post'>

                            <a href='blog-single.php?blog_id=$blog_id'><img src='images/$blog_image' alt=''></a>
                                
                                <div class='date'>
                                    26
                                    <span>Jul 2018</span>
                                </div>
                                <h4><a href='blog-single.php?blog_id=$blog_id''>$blog_title</a></h4>
                                <ul class='post-meta'>
                                    <li><i class='fa fa-user'></i>Posted by <a href='#'>$blog_author</a></li>
                                    <li><i class='fa fa-folder-open'></i> <a href='#''>$blog_keywords</a></li>
                                    <li><i class='fa fa-comments'></i> <a href='#'>4 comments</a></li>
                                </ul>
                                <p>$blog_body</p>
                            </div>
                            ";
                        }

?>
</div>

                            

                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>

                    


                    <div class="col-md-4">
                        <!--search widget-->
                        <div class="widget hidden-sm">
                            <form role="form">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-search"></i></span>
                                    <input type="text" class="form-control addon-left" placeholder="Search for...">
                                </div>
                        </form>
                        </div>
                        <!--search widget-->

                        <!--author widget-->
                        <div class="widget">
                            <div class="w-title">
                                <h5>About Huntsends</h5>
                            </div>
                            <img src="images/bg-2.jpg" class="img-responsive m-b" alt=""/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi iste nisi fugiat ullam aliquid est quia sint. Illo distinctio iure, officia temporibus suscipit maxime incidunt dicta, a cupiditate rem. Error non iusto quos qui dolor fuga debitis nihil perferendis quis voluptates.</p>
                        </div>
                        <!--author widget-->

                        <!--latest post widget-->
                        <div class="widget">
                            <div class="w-title">
                                <h5>Latest Post</h5>
                            </div>
                            <ul class="latest-post">
                                <li>
                                    <a href="#"><img src="images/bg-2.jpg" alt="" class="img-latest"/></a>
                                    <div class="title-latest">
                                        <a href="">Using Modern SEO</a>
                                        August 25, 2018
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><img src="images/bg-1.jpg" alt="" class="img-latest"/></a>
                                    <div class="title-latest">
                                        <a href="#">How to Find Beta Tester</a>
                                        July 28, 2018
                                    </div>
                                </li>
                                <li>
                                    <a href="#"><img src="images/bg-3.jpg" alt="" class="img-latest"/></a>
                                    <div class="title-latest">
                                        <a href="#">Guide to Link Building</a>
                                        June 05, 2018
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--latest post widget-->

                        <!--follow us widget-->
                        <div class="widget">
                            <div class="w-title">
                                <h5 class="m-b-md">Follow Us</h5>
                            </div>
                            <div class="w-social social-btn">
                                <a href="#" class="sb-facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="sb-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <!--follow us widget-->

                        <!--comments widget-->
                        <div class="widget">
                            <div class="w-title">
                                <h5>Latest Comments</h5>
                            </div>
                            <ul class="w-comments">
                                <li> <i class="fa fa-comments-o"></i> Jonathan on <a href="javascript:;">Vesti blulum quis dolor </a></li>
                                <li> <i class="fa fa-comments-o"></i> Jane Doe on <a href="javascript:;">Nam sed arcu tellus</a></li>
                                <li> <i class="fa fa-comments-o"></i> Julia on <a href="javascript:;">Fringilla ut vel ipsum </a></li>
                                <li> <i class="fa fa-comments-o"></i> Smith on <a href="javascript:;">Vesti blulum quis dolor sit</a></li>
                            </ul>
                        </div>
                        <!--comments widget-->

                        <!--tags widget-->
                        <div class="widget">
                            <div class="w-title">
                                <h5 class="m-b-md">Tag Cloud</h5>
                            </div>
                            <div class="w-tags">
                                <a href=""><?php echo $blog_keywords;   ?></a>
                                <!-- <a href="">Design</a>
                                <a href="">Link</a>
                                <a href="">Gallery</a>
                                <a href="">Video</a>
                                <a href="">Clean</a>
                                <a href="">Retina</a> -->
                            </div>
                        </div>
                        <!--tags widget-->

                    </div>
                </div>
            </div>
        </section>
        <!-- /End Blog Section -->

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
                            <li class="m-b"><a href="blog-list.html" class="edit">Blog</a></li>
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



       



    </div><!-- /End Main Container -->


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
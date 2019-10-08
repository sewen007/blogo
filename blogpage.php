<?php
session_start();

require_once 'engine/requires.php';


$blog = new blog();
$allPosts = $blog->getAllBlogPosts();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>i-Blogo</title>
<!--
Metro Fit
http://www.templatemo.com/tm-495-metro-fit
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <!-- Header gallery -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <section class="tm-header-gallery">
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0">
                            <a href="img/img-11-03.jpg">
                                <img src="img/img-11-03.jpg" alt="Image" class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">    
                            </a>
                            <a href="img/img-11-04.jpg">
                                <img src="img/img-11-04.jpg" alt="Image" class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">        
                            </a>                         
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0">
                            
                            <div class="tm-site-name">
                                <h1 class="tm-site-name-h1">i-Blogo</h1>
                                <h2 class="tm-site-name-h2">... where you make the news ...</h2>    
                            </div>
                            
                            <img src="img/logo-bg.jpg" alt="Image" class="img-fluid tm-header-img">
                        </div>
                                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0">
                            <a href="img/img-11-07.jpg">
                                <img src="img/img-11-07.jpg" alt="Image" class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">    
                            </a>
                            <a href="img/img-11-08.jpg">
                                <img src="img/img-11-08.jpg" alt="Image" class="img-fluid tm-header-img col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">        
                            </a>                       
                        </div>                
                        
                    </section>
                </div>
            </div>                
            
            <!-- Navigation -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar">
                        <div id="tmNavbar">
                            <div class="nav navbar-nav tm-nav">
                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                                    <div class="nav-item">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </div>
                                    <div class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </div>    
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                                        <a class="nav-link" href="services.html">Services</a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item active">
                                        <a class="nav-link" href="blogpage.php">Blog</a>
                                    </div>    
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-pad-0 tm-nav-item-pair">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 nav-item tm-dummy-nav-item">
                                        <div class="nav-link">&nbsp;</div>
                                    </div>
                                </div>                            
                                
                            </div>    
                        </div>                    
                    </nav>     
                </div>
                   
            </div> <!-- row -->

            <div class="row tm-blog-post-row">
                 <?php include 'widgets/view-blog.php'; ?>
            </div>

            <div class="row tm-nav-2-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <nav class="tm-flex-center">
                        <ul class="tm-nav-2">
                            <li class="tm-nav-item-2"><a href="index.html" class="tm-nav-link-2">Home</a></li>
                            <li class="tm-nav-item-2"><a href="about.html" class="tm-nav-link-2">About</a></li>
                            <li class="tm-nav-item-2"><a href="services.html" class="tm-nav-link-2">Services</a></li>
                            <li class="tm-nav-item-2"><a href="blogpage.php" class="tm-nav-link-2">Blog</a></li>
                            <li class="tm-nav-item-2"><a href="contact.html" class="tm-nav-link-2">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="tm-social-icons-container text-xs-center">
                        <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                        <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <footer class="row tm-footer">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="text-xs-center tm-copyright">Copyright &copy; 2018 i-Blogo.com 
                    
                    </p>
                </div>
            </footer>
            
        </div> <!-- container-fluid -->
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script>     
       
            $(window).load(function(){

                /* Gallery pop up
                -----------------------------------------*/
                $('.tm-header-gallery').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
                           
            });

        </script>             

</body>
</html>

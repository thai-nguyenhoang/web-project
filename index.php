<?php include('connect.php');
session_start();
if(isset($_SESSION["email"]))
        $email = $_SESSION["email"];
?>
<!DOCTYPE html>
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>

<div id="box_wrapper">

    <section id="topline" class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <span>
                        <i class="fa fa-envelope-o"></i> <a href="mailto:info@company.net">info@company.net</a>
                    </span>
                    <span>
                        <i class="fa fa-phone"></i> +1 (900) 12345-123
                    </span>
                </div>
                <?php include 'topbar.php'; ?>
                
            </div>
        </div>
    </section>


    <section id="mainslider" class="dark_section">
        <div class="slider-wrapper">
            <div class="responisve-container">
                <div class="slider">
                    <div class="fs_loader"></div>
                    <div class="slide">
                        <img data-in="fade" data-out="fade" src="img/wallpaper/wallpaper1.jpg" width="1920" height="550">
                    </div>

                    <div class="slide" data-in="slideLeft">
                        <img data-in="fade" data-out="fade" src="img/wallpaper/wallpaper2.jpg" width="1920" height="550">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="topinfo" class="action_section table_section light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="index.php" class="navbar-brand">MANGA<span>Rock</span></a>
                </div>

                <div class="col-sm-8 text-right">
                    Follow Us:
                    <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                    <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                    <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                    

                   
                        <div class="widget widget_search">
                            <form role="search" method="post" id="searchform" class="searchform form-inline" action="/">
                                <div class="form-group">
                                    <label class="screen-reader-text" for="search">Search for:</label>
                                    <input type="text" value="" name="search" id="search" class="form-control" placeholder="Search...">
                                </div>
                                <button type="submit" id="searchsubmit" class="theme_button">Search</button>
                            </form>
                        </div>

                </div>

                
                
                
            </div>
        </div>
    </section>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span id="toggle_mobile_menu"></span>
                    <nav id="mainmenu_wrapper">
                        <ul id="mainmenu" class="nav nav-justified sf-menu">
                            <li class="active">
                                <a href="index.php"><i class="rt-icon-home"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-book"></i>Thể loại</a>
                                <ul>
                                    <li>
                                        <!-- Thể loại -->
                                        <?php
                                            $tl = $pdh->query("select * from theloai");
                                            foreach($tl as $tl){
                                                ?>
                                                <a href="#"><?php echo $tl["theloai"]; ?></a>
                                                <?php 
                                            }
                                        ?>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-images2"></i>Danh sách truyện</a>
                            </li>
                            <li>
                                <a href="contact.html"><i class="rt-icon-contacts"></i> Liên hệ</a>
                            </li>
                        </ul>  
                    </nav>
                </div>
            </div>
        </div>
    </header>
<!-- Danh sách truyện -->

<section class="light_section gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section_header text-center"></h2>

                    <div id="isotope_container" class="isotope row">
                        <!-- List truyện -->
                        <?php
                            include './truyen/listtruyen.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</section>

    <footer id="footer" class="darkgrey_section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-8 to_animate">
                    <div class="widget widget_text">
                        <h3 class="widget-title">Meta Info</h3>
                        <div class="textwidget">
                                <p>
                                    <i class="fa fa-envelope-o"></i> <a href="mailto:info@company.net">info@company.net</a>
                                </p>
                                <p>
                                    <i class="fa fa-phone"></i> +1 (900) 12345-123
                                </p>
                                <p>
                                    <i class="rt-icon-user2"></i> <a href="#" data-toggle="modal" data-target=".login-modal">Đăng nhập</a>
                                </p>
                                <p>
                                    <i class="rt-icon-locked"></i> <a href="register.php">Đăng ký</a>
                                </p>

                        </div>
                    </div>
                </div>
                    
                    
                <div class="col-md-6 col-sm-8 to_animate">
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Thể loại</h3>
                        <div class="tagcloud">
                            <a href="#" title="">Hành động</a>
                            <a href="#" title="">Phiêu lưu</a>
                            <a href="#" title="">Chuyển sinh</a>
                            <a href="#" title="">Kinh dị</a>
                            <a href="#" title="">Đời thường</a>
                        </div>
                    </div>
                </div>
                    
                    
                
            
            </div>
        </div>
    </footer>


</div><!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


        <!-- libraries -->
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.appear.js"></script>

        <!-- superfish menu  -->
        <script src="js/vendor/jquery.hoverIntent.js"></script>
        <script src="js/vendor/superfish.js"></script>
        
        <!-- page scrolling -->
        <script src="js/vendor/jquery.easing.1.3.js"></script>
        <script src='js/vendor/jquery.nicescroll.min.js'></script>
        <script src="js/vendor/jquery.ui.totop.js"></script>
        <script src="js/vendor/jquery.localscroll-min.js"></script>
        <script src="js/vendor/jquery.scrollTo-min.js"></script>
        <script src='js/vendor/jquery.parallax-1.1.3.js'></script>

        <!-- widgets -->
        <script src="js/vendor/jquery.easypiechart.min.js"></script><!-- pie charts -->
        <script src='js/vendor/jquery.countTo.js'></script><!-- digits counting -->
        <script src="js/vendor/jquery.prettyPhoto.js"></script><!-- lightbox photos -->
        <script src='js/vendor/jquery.plugin.min.js'></script><!-- plugin creator for comingsoon counter -->
        <script src='js/vendor/jquery.countdown.js'></script><!-- coming soon counter -->        
        <script src="js/vendor/jquery.elevateZoom-3.0.8.min.js"></script><!-- zoom images -->
        <script src='js/vendor/jflickrfeed.min.js'></script><!-- flickr -->
        <script src='twitter/jquery.tweet.min.js'></script><!-- twitter -->

        <!-- sliders, filters, carousels -->
        <script src="js/vendor/jquery.isotope.min.js"></script>
        <script src='js/vendor/owl.carousel.min.js'></script>
        <script src='js/vendor/jquery.fractionslider.min.js'></script>
        <script src='js/vendor/jquery.flexslider-min.js'></script>
        <script src='js/vendor/jquery.bxslider.min.js'></script>

        <!-- custom scripts -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
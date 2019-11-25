<?php include('connect.php') ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Title</title>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
<!-- login modal -->

<div class="modal fade login-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title" id="loginModalLabel">Manga<span class="highlight">Rock</span> Đăng nhập</h4>
            </div>
            <form role="form" method="post" action="/">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Ghi nhớ cho lần sau
                            </label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="theme_button"><i class="rt-icon-ok"></i> Đăng nhập</button>
                    <a href="#" class="theme_button" data-dismiss="modal"><i class="rt-icon-times"></i> Thoát</a>
                </div>            
            </form>
        </div>
    </div>
</div>


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
                <div class="col-sm-6 text-right">
                    <span>
                        <i class="rt-icon-user2"></i> <a href="#" data-toggle="modal" data-target=".login-modal">Đăng nhập</a>
                    </span>
                    <span>
                        <i class="rt-icon-locked"></i> <a href="register.html">Đăng ký</a>
                    </span>
                </div>
                
            </div>
        </div>
    </section>


    <section id="topinfo" class="action_section table_section light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="index.html" class="navbar-brand"> MANGA<span>ROCK</span></a>
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
                                <a href="index.html"><i class="rt-icon-home"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-book"></i>Cập nhật mới</a>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-images2"></i> Nổi bật</a>
                            </li>
                            <li>
                                <a href="blog.html"><i class="rt-icon-book2"></i>Wiki</a>
                                <ul>
                                    <li>
                                        <a href="blog.html"><i class="rt-icon-book2"></i>Thể loại</a>
                                        <ul>
                                            <li>
                                                <a href="blog-right.html">Hành động</a>
                                            </li>
                                            <li>
                                                <a href="blog-full.html">Phiêu lưu</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-single.html"><i class="rt-icon-world"></i>Quốc gia</a>
                                        <ul>
                                            <li>
                                                <a href="blog-single-right.html">Nhật</a>
                                            </li>
                                             <li>
                                                <a href="blog-single-full.html">Trung</a>
                                            </li>
                                            <li>
                                                <a href="blog-single-full.html">Hàn</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="rt-icon-brush"></i>Tác giả</a>
                                    </li>
                                </ul>
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


    <section id="breadcrumbs" class="light_section with_bottom_border">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li class="active"><h1>Đăng ký</h1></li>
                    </ol>
                </div>
                
            </div>
        </div>
    </section>

<section class="light_section">
    <div class="container">
        <div class="row">

            <div class="col-sm-10 col-sm-push-1">
                

                <form  class="form-horizontal" role="form" method="post" action="register.php">
                    <div  class="form-group validate-required" id="username">
                        <label for="username" class="col-sm-3 control-label">Name 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form-group validate-required validate-email" id="email">
                        <label for="email" class="col-sm-3 control-label">Email Address 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="email" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="form-group validate-required validate-email" id="password_1">
                        <label for="password_1" class="col-sm-3 control-label">Mật khẩu
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="password" name="password_1">
                        </div>
                    </div>
                    <div class="form-group validate-required validate-email" id="password_2">
                        <label for="password_2" class="col-sm-3 control-label">Nhập lại mật khẩu 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="password" name="password_2">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="theme_button" name="reg_user"><i class="rt-icon-user2"></i> Đăng ký</button>
                        </div>
                    </div>
                </form>


            </div>
            


        </div>
    </div>
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
                                    <i class="rt-icon-locked"></i> <a href="register.html">Đăng ký</a>
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
                            <a href="#" title="">Futanari</a>
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
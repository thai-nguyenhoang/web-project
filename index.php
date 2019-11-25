<?php include('connect.php') ?>
<!DOCTYPE html>
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
                 <h4 class="modal-title" id="loginModalLabel">MANGA<span class="highlight">ROCK</span> Đăng nhập</h4>
            </div>
            <form role="form" method="post" action="index.php">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu</label>
                            <input type="password" name="password_1" >
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Ghi nhớ cho lần sau
                            </label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="theme_button"><i class="rt-icon-ok"></i> Đăng nhập</button>
                    <a href="#" class="theme_button" data-dismiss="modal"><i class="rt-icon-times"></i> Cancel</a>
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
                        <i class="rt-icon-locked"></i> <a href="register.php">Đăng ký</a>
                    </span>
                </div>
                
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
                    <a href="./" class="navbar-brand">MANGA<span>Rock</span></a>
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
<!-- Danh sách truyện -->

<section class="light_section gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section_header text-center">Our Projects</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit perspiciatis, cupiditate impedit autem dicta harum sint corporis nemo fugit consectetur optio similique ad quod, voluptas earum, omnis veniam amet incidunt!</p>

                    <div id="isotope_container" class="isotope row">
                        <div class="isotope-item gallery-item col-md-3 col-sm-6 webdesign photography">
                            <div class="gallery-image">
                                <img src="./img/anime/kimetsu-no-yaiba.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/01.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Kimetsu No Yaiba</a></h3>
                                <p>Tanjiro là con cả trong một gia đình không còn người cha. Một hôm, Tanjiro đi bán than ở một ngôi làng nọ và phải ở lại đó qua đêm vì có tin đồn rằng, về đêm, luôn có một con quỷ lởn vởn ở ngọn núi gần đó. Khi Tanjiro đi về nhà vào ngày hôm sau, bi kịch đang chờ đón cậu.</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 photography webdesign">
                            <div class="gallery-image">
                                <img src="img/anime/one piece.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/02.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">One Piece</a></h3>
                                <p>Monkey D. Luffy, 1 cậu bé rất thích hải tặc có ước mơ tìm được kho báu One Piece và trở thành Vua hải tặc - Pirate King.</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 development">
                            <div class="gallery-image">
                                <img src="img/anime/beastars.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/03.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Beastars</a></h3>
                                <p>Dd quod error est aliquam vel a ipsa, vitae, corrupti reiciendis voluptatem ducimus praesentium inventore?</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 development">
                            <div class="gallery-image">
                                <img src="img/anime/boku-no-hero-academia.png" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/04.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Boku no Hero Academia</a></h3>
                                <p>Dacere temporibus error consectetur ducimus odio, perferendis in quo vel odit praesentium officia iure nisi!</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 webdesign">
                            <div class="gallery-image">
                                <img src="example/gallery/05.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/05.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Dlaborum soluta dolores ipsum tempore eaque cumque pariatur corporis illo quia architecto nisi, magnam.</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 photography">
                            <div class="gallery-image">
                                <img src="example/gallery/06.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/06.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Dnemo praesentium modi quidem iusto, culpa consequuntur veniam, voluptate sunt est assumenda dolorem sint ex!</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 development programming">
                            <div class="gallery-image">
                                <img src="example/gallery/07.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/07.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Dnim pariatur sequi ex et velit eaque ducimus placeat eligendi. Facere animi quos explicabo totam veniam.</p>
                            </div>
                        </div>

                        <div class="isotope-item gallery-item col-md-3 col-sm-6 programming">
                            <div class="gallery-image">
                                <img src="example/gallery/08.jpg" alt="">
                                <div class="gallery-image-links">
                                    <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="example/gallery/08.jpg"></a>
                                    <a class="p-link" title="" href="./gallery-single.html"></a>
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Daut ab vitae doloribus voluptates necessitatibus beatae, quibusdam autem perferendis repellendus inventore earum quaerat accusamus.</p>
                            </div>
                        </div>
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
<?php include('connect.php'); ?>
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
                <div class="col-sm-6 text-right">
                    <span>
                        <i class="rt-icon-user2"></i> <a href="login.php">Đăng nhập</a>
                    </span>
                    <span>
                        <i class="rt-icon-locked"></i> <a href="register.php">Đăng ký</a>
                    </span>
                </div>
                
            </div>
        </div>
    </section>


    <section id="topinfo" class="action_section table_section light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="index.php" class="navbar-brand"> MANGA<span>ROCK</span></a>
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
                                <ul class="list-inline">
                                    <li>
                                        <a href="#">Hành động</a>
                                    </li>
                                    <li>
                                        <a href="#">Chuyển sinh</a>
                                    </li>
                                    <li>
                                        <a href="#">Kinh dị</a>
                                    </li>
                                    <li>
                                        <a href="#">Phiêu lưu</a>
                                    <li>
                                        <a href="#">Đời thường</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-images2"></i>Tìm nâng cao</a>
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
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#">Truyện tranh</a>
                        </li>
                        <li class="active"><h1>Kimetsu no Yaiba</h1></li>

                    </ol>
                </div>
                
            </div>
        </div>
    </section>



    <section class="light_section gallery-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="section_header text-center">KITMETSU NO YAIBA</h2>
                </div>
                <div class="col-sm-7">
                    <div id="carousel-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/img/anime/kimetsu-no-yaiba.jpg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5 project-details" style="font-size: 16px;">
                    <h4>Mô tả truyện</h4>
                    <p class="description">
                        Tanjiro là con cả trong một gia đình không còn người cha. Một hôm, Tanjiro đi bán than ở một ngôi làng nọ và phải ở lại đó qua đêm vì có tin đồn rằng, về đêm, luôn có một con quỷ lởn vởn ở ngọn núi gần đó. Khi Tanjiro đi về nhà vào ngày hôm sau, bi kịch đang chờ đón cậu. 
                    </p>
                    <p><span>Thể loại:</span> Hành động, Kinh dị</p>
                    <p><span>Tác giả:</span> <a href="#">Hoàng Thái</a></p>
                    <p><span>Nhóm dịch:</span> <a href="#">Hoàng Thái</a></p>
                    <p><span>Tình trạng</span> Đang tiến hành</p>
                </div>
            </div>
        </div>
    </section>
    <!--  List chương truyện-->
    <section class="darkgrey_section">
        <div class="container">
            <div class="row">
                <table class="table list-chapters" style="font-size: 20px">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col-sm-6">Tên chương</th>
                            <th scope="col-sm-4">Ngày đăng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">Chapter 1: Cruelty</a></td>
                            <td>30/06/2018</td>
                        </tr>
                        <tr>
                            <td><a href="#">Chapter 2: The Stranger</a></td>
                            <td>30/06/2018</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="grey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="section_header text-center">Những truyện cùng nhóm dịch</h2>

                    <div id="related-gallery-items-carousel" class="owl-carousel">

                        <div class="gallery-item development">
                            <div class="gallery-image">
                                <img src="/img/anime/beastars.jpg" alt="">
                                <div class="gallery-image-links">
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Dacere temporibus error consectetur ducimus odio, perferendis in quo vel odit praesentium officia iure nisi!</p>
                            </div>
                        </div>

                        <div class="gallery-item webdesign">
                            <div class="gallery-image">
                                <img src="/img/anime/one piece.jpg" alt="">
                                <div class="gallery-image-links">
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Dlaborum soluta dolores ipsum tempore eaque cumque pariatur corporis illo quia architecto nisi, magnam.</p>
                            </div>
                        </div>

                        <div class="gallery-item photography">
                            <div class="gallery-image">
                                <img src="/img/anime/boku-no-hero-academia.png" alt="">
                                <div class="gallery-image-links">
                                </div>
                            </div>
                            <div class="gallery-item-description">
                                <h3><a href="gallery-single.html">Lorem Ipsum Dolor</a></h3>
                                <p>Dnemo praesentium modi quidem iusto, culpa consequuntur veniam, voluptate sunt est assumenda dolorem sint ex!</p>
                            </div>
                        </div>
                    </div>

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
        
        <script src='js/vendor/owl.carousel.min.js'></script>

        <!-- custom scripts -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
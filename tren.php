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
                                                <a href="/truyen/theloai?tagID=<?php echo $tl["tagID"]; ?>"><?php echo $tl["theloai"]; ?></a>
                                                <?php 
                                            }
                                        ?>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-images2"></i>Danh sách truyện</a>
                            </li>
                            <li>
                                <a href="contact.php"><i class="rt-icon-contacts"></i> Liên hệ</a>
                            </li>
                        </ul>  
                    </nav>
                </div>
            </div>
        </div>
    </header>

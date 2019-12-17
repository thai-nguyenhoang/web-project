<?php include('../connect.php'); 

$chapID = (isset($_GET['chapID'])?$_GET['chapID']:'');
$querychap  = "SELECT * FROM chuong where chapID = '$chapID' ";

$comicID = (isset($_SESSION['comicID']) ? $_SESSION['comicID'] : '');
$query = "SELECT * FROM truyen LEFT JOIN tacgia ON truyen.`authorID`=`tacgia`.`authorID` LEFT JOIN nhom ON truyen.`teamID`=`nhom`.`teamID` where comicID = '$comicID' ";
if ($chap = $pdh->query($querychap)) {
	while ($rowchap = $chap->fetch()) {
		var_dump($rowchap);
		$arr[]= explode(" ", $rowchap["url"]);
var_dump($arr);
		$folder="../img";

?>

<!DOCTYPE html>
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <script src="../js/vendor/modernizr-2.6.2.min.js"></script>

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
                
                
            </div>
        </div>
    </section>


    <section id="topinfo" class="action_section table_section light_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="../index.php" class="navbar-brand"> MANGA<span>ROCK</span></a>
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
                                <a href="../index.php"><i class="rt-icon-home"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a href="#"><i class="rt-icon-book"></i>Thể loại</a>
                                <ul class="list-inline">
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
                        <li class="active">
                            <?php 
                                

                                if($result = $pdh->query($query)){
                                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                 $tentruyen = $row["tentruyen"];
                                 $sochuong = $rowchap["sochuong"];

 
                            ?>
                            <h1><?php echo $row["tentruyen"]; ?></h1>
                        </li>

                    </ol>
                </div>
                
            </div>
        </div>
    </section>
     <section class="light_section gallery-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2 class="section_header text-center"><?php echo $row["tentruyen"]; ?></h2>
                </div>
                <div class="col-sm-7">
                    <div id="carousel-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
 <!--     xuất từng trang ảnh của chương -->                           
                            	<?php 
								foreach ($arr as $value) {
									foreach ($value as $value1) {
										$img = $value1;
										var_dump($img);
										$img_path = $folder."/".$tentruyen."/".$sochuong."/".$img;
									}
									?>
								<img src="<?php $img_path; ?>" alt="image">
								<?php  } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>



<!-- đóng if và while của truyện và chương -->
    <?php 
 }
 }
}
}	
     ?>
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
        <script src="../js/vendor/jquery-1.11.1.min.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/vendor/jquery.appear.js"></script>

        <!-- superfish menu  -->
        <script src="../js/vendor/jquery.hoverIntent.js"></script>
        <script src="../js/vendor/superfish.js"></script>
        
        <script src='../js/vendor/owl.carousel.min.js'></script>

        <!-- custom scripts -->
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

    </body>
</html>
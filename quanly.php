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

    <section id="topinfo" class="action_section table_section light_section">
        <div class="container" style="padding:0; width:100%">
            <a href="index.php" class="navbar-brand"><img src="img/wallpaper/wallpaper3.jpg" width="100%" height="100%"></a>
        </div>
    </section>
	

	<ul class="nav nav-tabs nav-justified">
	  	<li><a data-toggle="tab" href="#quanLyTaiKhoan">Quản lý tài khoản</a></li>
	  	<li><a data-toggle="tab" href="#dangTruyen">Đăng truyện</a></li>
	  	<li class="active"><a data-toggle="tab" href="#dangChuong">Đăng chương</a></li>
	</ul>

	<div class="tab-content">
		<div id="quanLyTaiKhoan" class="tab-pane fade">
			    <h3>HOME</h3>
			    <p>Some content.</p>
		</div>
		<div id="dangTruyen" class="tab-pane fade">
		    <?php include 'uploadtruyen.php' ?>
		</div>
		<div id="dangChuong" class="tab-pane fade in active">
		    <?php include 'upload.php' ?>
		</div>
	</div>

<?php include 'duoi.php' ?>
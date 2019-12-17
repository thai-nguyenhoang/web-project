<?php include('connect.php') 
if (isset($_POST['reg_user'])) {
//nhan gia tri tu form
  $username =  $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  /*$user_check_query =$pdh->query("SELECT username, email FROM user WHERE username='$username' OR email='$email' LIMIT 1");
  $result = $user_check_query->fetchAll(PDO::FETCH_ASSOC);*/
//nếu tài khoản tồn tại


//kiem tra ton tai, neu ko, xuat day thong bao

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)||empty($password_2)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) { array_push($errors, "Two passwords do not match"); }   

  $password=sha1($password_1);


  $dk= $pdh->query("INSERT INTO thanhvien (username, email, password) VALUES('$username', '$email', '$password')");  
  
} 
?>
<!DOCTYPE html>
<html class="no-js">
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
    <section id="topinfo" class="action_section table_section light_section">
        <div class="container" style="padding:0; width:100%">
            <a href="index.php" class="navbar-brand"><img src="img/wallpaper/wallpaper3.jpg" width="100%" height="100%"></a>
        </div>
    </section>

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

            <div class="col-sm-5 col-sm-push-1">
                <form  class="form-horizontal" role="form" method="post" action="register.php">
                    <div  class="form-group validate-required" id="username">
                        <label for="username" class="col-sm-3 control-label">Name 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" pattern="[a-zA-Z0-9]{6,}" title="Các ký tự được phép: a-z, A-Z, số 0-9, ít nhất 6 kí tự.">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- Email -->
                    <div class="form-group validate-required validate-email" id="email">
                        <label for="email" class="col-sm-3 control-label">Email 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                              <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+(\.[a-zA-Z.]{2,10}){1,2}" title="Định dạng email sai!">
                        </div>
                    </div>
                    <!-- Mật khẩu -->
                    <div class="form-group validate-required validate-email" id="password_1">
                        <label for="password_1" class="col-sm-3 control-label">Mật khẩu
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="password" class="form-control" name="password_1" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}" title="Mật khẩu phải có ít nhất 1 kí tự thường, 1 kí tự hoa, độ dài ít nhất 8 kí tự">
                        </div>
                    </div>
                    <div class="form-group validate-required validate-email" id="password_2">
                        <label for="password_2" class="col-sm-3 control-label">Nhập lại mật khẩu 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="password" class="form-control" name="password_2">
                        </div>
                    </div>
                     <?php include("error.php"); ?>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9" >
                            <button type="submit" class="btn btn-block theme_button" name="reg_user"><i class="rt-icon-user2"></i> Đăng ký</button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="card">
                <div class="col-sm-5 col-sm-push-2 text-center">
                    <h3 >Bạn đã có tài khoản?</h3>
                    <a class="btn btn-block theme_button" href="login.php" style="color:white">ĐĂNG NHẬP NGAY</a>
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

        <!-- custom scripts -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
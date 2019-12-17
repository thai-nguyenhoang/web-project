<?php include('connect.php'); 
session_start();
$username="";
$email="";
//đăng nhập
if (isset($_POST['log_user'])) {
  $email = $_POST['email'];
  $password = $_POST['password_1'];
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = sha1($password);
    $results = $pdh->query("SELECT * FROM thanhvien WHERE email='$email' AND pass='$password'");
    if ($results->rowCount() == 1) {
        $row = $results->fetch();
        $_SESSION['email'] = $row['email'];
        $_SESSION["my_user"] = $row["username"];
      header('location: index.php');
    }else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}
include 'tren.php';
?>

<!-- form đăng nhập -->
<section class="light_section">
    <div class="container">
        <div class="row">

            <div class="col-sm-5 col-sm-push-1">
                <form  class="form-horizontal" role="form" method="post" action="login.php">
                    <div class="form-group validate-required validate-email" id="email">
                        <!-- Nhập email -->
                        <label for="email" class="col-sm-3 control-label">Email 
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- Nhập pass-->
                    <div class="form-group validate-required validate-email" id="password_1">
                        <label for="password_1" class="col-sm-3 control-label">Mật khẩu
                            <abbr class="required" title="required">*</abbr>
                        </label>
                        <div class="col-sm-9">
                             <input type="password" class="form-control" name="password_1">
                        </div>
                    </div>
                    <div class="checkbox " style="padding: 0 0 20px 120px">
                            <label>
                                <input type="checkbox"> Ghi nhớ cho lần sau
                            </label>
                        </div>
                     <?php include("error.php"); ?>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9" >
                            <button type="submit" class="btn btn-block theme_button" name="log_user"><i class="rt-icon-user2"></i> Đăng nhập</button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="card">
                <div class="col-sm-5 col-sm-push-2 text-center">
                    <h3 >Bạn chưa có tài khoản?</h3>
                    <a class="btn btn-block theme_button" href="register.php" style="color:white">ĐĂNG KÝ NGAY</a>
                </div>
             </div>   
        </div>

       </div>
    </div>
</section>


<?php include 'duoi.php'; ?>
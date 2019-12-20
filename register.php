<?php
include('connect.php'); 
$username="";
$email="";
//$check = $pdh->query("SELECT * FROM thanhvien");
//$checka = $check->fetchAll(PDO::FETCH_ASSOC);

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
  if($email == $email){ array_push($errors, "Tên đã có người dùng"); }
  $password=sha1($password_1);
  $dk= $pdh->query("INSERT INTO thanhvien (username, email, pass, avatar) VALUES('$username', '$email', '$password','guest.png')");

  } 
include 'tren.php';
?>


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
<?php include 'duoi.php'; ?>

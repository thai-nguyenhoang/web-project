<?php
session_start();
$username="";
$email="";
$errors=array();
try{
//$pdh = new PDO("mysql:host=localhost; dbname=id7396972_truyen"  , "id7396972_hoangthai"  , "hoangthai123"  );
$pdh = new PDO("mysql:host=localhost; dbname=truyen"  , "root"  , ""  );
$pdh->query("  set names 'utf8'"  );
}
catch(Exception $e){
    echo $e->getMessage(); exit;

}

$stm = $pdh->query("  SELECT * FROM user"  );


//kiem tra tai khoan co ton tai hay chua
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

  $dk= $pdh->query("INSERT INTO user (username, email, password) VALUES('$username', '$email', '$password')");  
  
} 

//lỗi
//đăng nhập
if (isset($_POST['log_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = sha1($password);
    $results = $pdh->query("SELECT * FROM user WHERE username='$username' AND password='$password'");

    if ($results->rowCount() == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: success.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


?>
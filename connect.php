<?php
session_start();
$username="";
$email="";
try{
$pdh = new PDO("mysql:host=localhost; dbname=truyen"  , "root"  , ""  );
$pdh->query("  set names 'utf8'"  );
}
catch(Exception $e){
    echo $e->getMessage(); exit;
}

$stm = $pdh->query("  select * from user"  );


//kiem tra tai khoan co ton tai hay chua
if (isset($_POST['reg_user'])) {
//nhan gia tri tu form
  $username =  $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

//kiem tra ton tai, neu ko, xuat day thong bao
  if (empty($username)) { array_push($errors, "Username is required"); }else
  if (empty($email)) { array_push($errors, "Email is required"); }else
  if (empty($password_1)||empty($password_2)) { array_push($errors, "Password is required"); }else
  if ($password_1 != $password_2) { array_push($errors, "Two passwords do not match"); }
  else {
  $dk= $pdh->query("INSERT INTO user (username, email, password) VALUES('$username', '$email', '$password_1')");}

}


?>
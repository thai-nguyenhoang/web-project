<?php
if(!isset($_SESSION))
{
    session_start();
}
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
$stm = $pdh->query("  SELECT * FROM thanhvien"  );



?>
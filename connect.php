<?php


$errors=array();
try{
$pdh = new PDO("mysql:host=localhost; dbname=id7397545_truyen"  , "id7397545_kfc300"  , "12345"  );
//$pdh = new PDO("mysql:host=localhost; dbname=truyen"  , "root"  , ""  );
$pdh->query("  set names 'utf8'"  );
}
catch(Exception $e){
    echo $e->getMessage(); exit;

}





?>
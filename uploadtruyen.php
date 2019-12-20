<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include("connect.php");
error_reporting(E_ERROR | E_PARSE);
$loi=array();

$tg = $nhom = Null;
$sql = $pdh->query( "SELECT * FROM `chuong`");
$sqls = $sql->fetchALL(PDO::FETCH_ASSOC);

if (isset($_POST["submit"])) {
 

    $comicname = $_POST['comicname'] ;
    $tg = $_POST['tacgia'];
    $tl = $_POST['theloai'];
    $qg = $_POST['quocgia'];
    $nhom = $_POST['nhomdich'];
    $tt = $_POST['trangthai'];
    $mt = $_POST['mota'];
    $cv = $_POST['cover'];


$get_comic= $pdh->query("SELECT tentruyen FROM `truyen` where tentruyen = '$comicname'");

    $result_comic = $get_comic->fetchAll(PDO::FETCH_ASSOC); 



$get_tacgia= $pdh->query("SELECT authorID FROM `tacgia` where tacgia = '$tg'");
    $result_tg = $get_tacgia->fetch(); 


$get_nhomdich= $pdh->query("SELECT teamID FROM `nhom` where tennhom = '$nhom'");
    $result_nhom = $get_nhomdich->fetch();


if ($get_comic->rowCount()>0) {
    $loi["truyen"] ="truyện bị trùng.<br\>";  
}
if(!$result_tg){
    $loi["tacgia"] = "thêm tác giả mới.<br\>";
    $them_tg= $pdh->query("INSERT INTO `tacgia` (`tacgia`) VALUES ('$tg' )");
    $get_them_tg = $pdh->query("SELECT authorID FROM `tacgia` where tacgia = '$tg'");
    $result_them_tg = $get_them_tg->fetch();
    foreach ($result_them_tg as  $value) {
    $idtacgia = $value;
    }
}
    
foreach ($result_tg as  $value) {
$idtacgia = $value;
}
//var_dump($idtacgia);
   // header('location: uploadtruyen.php');
//var_dump($result_nhom);
while (!$result_nhom) {
    $loi["nhom"] = "Nhóm ko tồn tại.<br\>";
    break;
}
foreach ($result_nhom as $value) {
$idnhom = $value;
}   
//var_dump($idnhom);
//var_dump($loi);
foreach ($loi as $value) {
$l = is_string($value);
//var_dump($l);     
}
$s = empty($loi);
//var_dump($s);
if ($get_comic->rowCount()==0 && $s==true ) {

    
    $themtruyen = $pdh->prepare("INSERT INTO `truyen` (`tentruyen`, `mota`, `trangthai`, `luotxem`, `countryID`,`authorID`,`teamID`, `cover`) VALUES ('$comicname', '$mt', '$tt', '0', '$qg','$idtacgia', '$idnhom', '$cv')");
    $themtruyen->execute();
    //var_dump($themtruyen);
    
    $get_comicid = $pdh->query("SELECT comicID FROM `truyen` where tentruyen = '$comicname'");
    $resurt_comicid=$get_comicid->fetch(PDO::FETCH_ASSOC); 
    foreach ($resurt_comicid as $value) {
        $idcomic = $value;
    }
    
    foreach ($tl as $value) {
        $tagid = $value;
        $themtheloaitruyen = $pdh->query("INSERT INTO `theloai_truyen` (`tagID`, `comicID`) VALUES ('$tagid', '$idcomic')");
     
    }
    header('location: index.php');
    echo "<script type='text/javascript'>alert('Thêm truyện thành công');</script>";
}





}
 ?>

<!DOCTYPE html>
<html>
    <body>
        <form name="form" action="uploadtruyen.php" method="POST" enctype="multipart/form-data">
            Nhập tên: <input type="text" name="comicname">
            Tác giả: <input type="text" name="tacgia">
            <fieldset>  
                <legend>Thể loại</legend>
                    <input type="checkbox" name="theloai[]" value="1">Hành động<br>  
                    <input type="checkbox" name="theloai[]" value="2">Phiêu lưu<br>  
                    <input type="checkbox" name="theloai[]" value="3">Tình cảm<br>       
            </fieldset>
            <br>
            <fieldset>
                <legend>Quốc gia</legend>
                    <input type="radio" name="quocgia" value="1" >Trung<br>
                    <input type="radio" name="quocgia" value="2">Nhật<br>
                    <input type="radio" name="quocgia" value="3">Hàn<br>
                
            </fieldset>
            
            Nhóm dịch: <input type="text" name="nhomdich" >
            Trạng thái: <select name="trangthai">
              <option value=1>Đang tiến hành</option>
              <option value=2>Hoàn thành</option>
              <option value=3>Tạm ngưng</option>
            </select>
            Mô tả: <textarea name="mota"></textarea>
            url ảnh: <input type="text" name="cover">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php foreach ($loi as $value) {
            echo $value;
        } ?>
    </body>
</html>
<?php
session_start();
include("connect.php");
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
    $result_tg = $get_tacgia->fetch(PDO::FETCH_ASSOC); 
var_dump($result_tg);
foreach ($result_tg as  $value) {
    $idtacgia = $value;
}

$get_nhomdich= $pdh->query("SELECT teamID FROM `nhom` where tennhom = '$nhom'");
    $result_nhom = $get_nhomdich->fetch(PDO::FETCH_ASSOC);
foreach ($result_nhom as $key => $value) {
    $idnhom = $value;
}
if ($get_comic->rowCount()>0) {
    echo 'truyen bị trùng';  
}
if(!$result_tg){
    echo 'thêm the gia moi';
    $them_tg= $pdh->query("INSERT INTO `tacgia` (`tacgia`) VALUES ('$tg' )");
}if(!$result_tg){
    echo 'khong co nhom dich nay';
}
if ($get_comic->rowCount()==0) {
    
    $themtruyen = $pdh->prepare("INSERT INTO `truyen` (`tentruyen`, `mota`, `trangthai`, `luotxem`, `countryID`,`authorID`,`teamID`, `cover`) VALUES ('$comicname', '$mt', '$tt', '0', '$qg','$idtacgia', '$idnhom', '$cv')");
    $themtruyen->execute();
    
    var_dump($themtruyen);
    
    $get_comicid = $pdh->query("SELECT comicID FROM `truyen` where tentruyen = '$comicname'");
    $resurt_comicid=$get_comicid->fetch(PDO::FETCH_ASSOC); 
    var_dump($resurt_comicid);
    foreach ($resurt_comicid as $value) {
        $idcomic = $value;
    var_dump($idcomic);
    }
    
    foreach ($tl as $value) {
        $tagid = $value;
        $themtheloaitruyen = $pdh->query("INSERT INTO `theloai_truyen` (`tagID`, `comicID`) VALUES ('$tagid', '$idcomic')");
     
    }
}





}
 ?>

<!DOCTYPE html>
<html>
    <body>
        <form name="form" action="uploadtruyen.php" method="POST" enctype="multipart/form-data">
            ten<input type="text" name="comicname">
            tacgia<input type="text" name="tacgia">
            <fieldset>  
                <legend>the loai</legend>  <br>
                    <input type="checkbox" name="theloai[]" value="1">Hành động<br>  
                    <input type="checkbox" name="theloai[]" value="2">phiêu lưu<br>  
                    <input type="checkbox" name="theloai[]" value="3">tình cảm<br>  
                             
            </fieldset>
            <fieldset>
                <legend>quoc gia</legend> <br>
                    <input type="radio" name="quocgia" value="1" >Trung<br>
                    <input type="radio" name="quocgia" value="2">Nhật<br>
                    <input type="radio" name="quocgia" value="3">Hàn<br>
                
            </fieldset>
            
            nhomdich<input type="text" name="nhomdich">
            trangthai<select name="trangthai">
              <option value=1>dang tien hanh</option>
              <option value=2>hoan thanh</option>
              <option value=3>tam ngung</option>
            </select>
            mota<textarea name="mota"></textarea>
            url anh<input type="text" name="cover">
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
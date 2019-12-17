<?php
session_start();
include("connect.php");





if (isset($_POST["submit"])) {
    // image mime to be checked 
    $imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
        image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_BMP));
 
    $FOLDER = "img/";
    $comicname = $_POST['comicname'];
    $chapter = $_POST['chapter'];
    $chaptername = $_POST['chaptername'];
    $date = $_POST['date'];

    $myfile = $_FILES["U_FILES"];
//    var_dump($myfile);
    $get_comicid= $pdh->query("SELECT comicID FROM `truyen` where tentruyen = '$comicname'");
    if ($get_comicid->rowCount()==0) {
        echo 'không tồn tại truyện này';
    }else {
        
   
    $result_comic=$get_comicid->fetch(PDO::FETCH_ASSOC);
    foreach ($result_comic as $value) {
                    $comicid=$value;
                }
//    var_dump($comicid);
    if (!is_dir($FOLDER.$comicname))
            {
                mkdir($FOLDER.$comicname.'/');
            } 
 
           
    if (!is_dir($FOLDER.$comicname.'/'.$chapter))
    {
        mkdir($FOLDER.$comicname.'/'.$chapter.'/');
    }   
    $img_path = $FOLDER.$comicname.'/'.$chapter.'/';
    $response = array();
    for ($i = 0; $i < count($myfile["name"]); $i++) {
        if ($myfile["name"][$i] <> "" && $myfile["error"][$i] == 0) {
            // file is ok
            if (in_array($myfile["type"][$i], $imagetype)) {
              
                $file_name =  $myfile["name"][$i];
                $url[]= $myfile["name"][$i];
//             var_dump($file_name);  
            move_uploaded_file($myfile["tmp_name"][$i], $img_path . $file_name);

             
            } 
        }
    }
    $str = implode(" ", $url);
    $sql_check = $pdh->query("SELECT sochuong FROM `chuong` where sochuong = '$chapter'");
    if ($sql_check->rowCount()>0) {
        echo 'số chương bị trùng';
    }else {
        
    

        
    $sql_up_file = $pdh->query("INSERT INTO `chuong`(`comicID`, `sochuong`,`tenchuong`, `ngaydang`, `url`) VALUES ('$comicid','$chapter','$chaptername','$date','$str')");
    
//    var_dump($sql_up_file);
    }
 }
}
?>
<!DOCTYPE html>
<html>
    <body>
        <form name="form" action="upload.php" method="POST" enctype="multipart/form-data">

            tên truyện<input type="text" name="comicname">
            
            số chương<input type="text" name="chapter">
            tên chương<input type="text" name="chaptername">
            ngày đăng<input type="date" name="date">
            up ảnh<input type="file" name="U_FILES[]" multiple="" >
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>


</html>
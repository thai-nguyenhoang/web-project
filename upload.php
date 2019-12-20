<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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
    $sql_check = $pdh->query("SELECT sochuong FROM `chuong` where sochuong = '$chapter' AND comicID = '$comicid' ");
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
        <div class="light_section">
            <div class="container">
                <h2 class="text-center">Đăng chương</h2>
                <hr class="my-4">
                <table class="table-responsive col-md-12 col-push-1" style="font-size: 20px">
                    <tbody>
                        <form name="form" action="upload.php" method="POST" enctype="multipart/form-data">
                            <tr>
                                <td class="col-sm-4">Nhập tên truyện: </td>
                                <td class="col-sm-8"><input type="text" name="comicname"> </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4">Nhập số chương: </td>
                                <td class="col-sm-8"><input type="text" name="chapter"> </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4">Nhập tên chương: </td>
                                <td class="col-sm-8"><input type="text" name="chaptername">  </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4">Ngày đăng: </td>
                                <td class="col-sm-8"><input type="date" name="date"> </td>
                            </tr>
                            <tr>
                                <td class="col-sm-4">Chọn ảnh: </td>
                                <td class="col-sm-8"><input type="file" name="U_FILES[]" multiple="" ></td>
                            </tr>
                            <tr>
                                <input type="submit" name="submit" value="Submit">
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </body>


</html>
<?php include('../connect.php');
session_start();

$theloai = $pdh->query("SELECT * from `theloai` ");
$tagID = (isset($_GET['tagID']) ? $_GET['tagID'] : '');
$_SESSION['tagID'] = $tagID;
$query = "SELECT * FROM truyen LEFT JOIN theloai_truyen ON truyen.`comicID` = theloai_truyen.`comicID` LEFT JOIN  theloai ON theloai_truyen";
if($result = $pdh->query($query)){
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		
	}
}
?>


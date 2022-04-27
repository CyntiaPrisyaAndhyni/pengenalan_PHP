<?php
if (empty($_POST['nama'])) {
header("Location:info.php");
} else {
echo "Nama :".$_POST['nama']."<br><br>";
} 
if (empty($_POST['email'])){
header("Location:info.php");
} else {
echo "Email : ".$_POST['email']."<br><br>";
}
date_default_timezone_set('Asia/Jakarta');
echo date("D, d-F-Y, g:i:s a"); 
?>
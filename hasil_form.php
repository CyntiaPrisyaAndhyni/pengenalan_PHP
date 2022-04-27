<?php
echo "Nama : ".$_POST['nama']."<br><br>";
echo "Email : ".$_POST['email']."<br><br>";
date_default_timezone_set('Asia/Jakarta');
echo date("D, d-F-Y, g:i:s a"); 
?>
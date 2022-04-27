<?php

if (empty($_POST['nama'])) {
header("Location:info2.php");
} else {
echo "Nama :".$_POST['nama']."<br><br>";} 

if (empty($_POST['alamat'])){
header("Location:info2.php");
} else {
echo "Alamat : ".$_POST['alamat']."<br><br>";}

if (empty($_POST['ttl'])){
header("Location:info2.php");
} else {
echo "TTL : ".$_POST['ttl']."<br><br>";}

if (empty($_POST['email'])){
header("Location:info2.php");
} else {
echo "Email : ".$_POST['email']."<br><br>";}

if (empty($_POST['notelp'])){
header("Location:info2.php");
} else {
echo "No. Telp : ".$_POST['notelp']."<br><br>";}

date_default_timezone_set('Asia/Jakarta');
echo date("D, d-F-Y, g:i:s a");
?>
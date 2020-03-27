<?php 

include 'koneksi2.php';
 
$nama = $_POST['nama'];
$nim = $_POST['email'];
$alamat = $_POST['comment'];
 
mysqli_query($koneksi,"insert into admin values('$nama','$email','$comment')");
 
header("location:Comment.php");
 
?>
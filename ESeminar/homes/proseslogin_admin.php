<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username_admin'];
$password = $_POST['password_admin'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username_admin='$username' and password_admin='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username_admin'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
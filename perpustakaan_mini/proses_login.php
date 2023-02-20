<?php
require_once("koneksi.php");
session_start();

// 1.mengambil data dari input form login
$username = $_POST['username'];
$password = md5($_POST['password']);

// 2.mencocokkan data dari form login dengan database
$query = mysqli_query($koneksi,"select *  from users where username='$username' AND password='$password'");

// 3.cek data apakah cocok atau tidak
$data_user = mysqli_fetch_object($query);
$data = mysqli_num_rows($query);

if($data > 0) {
    $_SESSION['login'] = 1;
    $_SESSION['username'] = $data_user->username;
    $_SESSION['level'] = $data_user->level;
    $_SESSION['nis'] = $data_user->nis;

    header('location:index.php');
}else{
    header('location:login.php?err2=gagal');
}

?>
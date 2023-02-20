<?php
require("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    


    // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"insert into users values(null,'$username','$password','Petugas',0)");
    if ($query){
        header('location:list-users.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>
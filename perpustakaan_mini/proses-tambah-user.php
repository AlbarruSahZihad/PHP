<?php
require("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
   

   // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"insert into users values(null,'$username','$password','$level')");
    if ($query){
        header('location:list-users.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>  
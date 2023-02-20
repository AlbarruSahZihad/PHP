<?php
require("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"update users set 
    username='$username',
    password='$password',
    level='$level'
    where user_id='$id' 
     ");
    if ($query){
        header('location:list-users.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>
<?php
require_once("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"update siswa set 
    nis='$nis',
    nama='$nama',
    kelas='$kelas'
    where id_siswa='$id' 
     ");
    if ($query){
        header('location:list_siswa.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>
<?php
require_once("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];


    // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"INSERT INTO SISWA VALUES(null,'$nis','$nama','$kelas') ");
    if ($query){
        header('location:list_siswa.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>
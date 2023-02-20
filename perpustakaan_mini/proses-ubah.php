<?php
require("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"update buku set 
    judul_buku='$judul',
    deskripsi='$deskripsi',
    penulis='$penulis',
    penerbit='$penerbit',
    gambar='$namafile'
     where buku_id ='$id' 
     ");
    if ($query){
        header('location:list_buku.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>
<?php
require("koneksi.php");
if(isset($_POST['simpan'])){
    // Mengamil data dari inputan Form

    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];

    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    // bila ukuran file lebih besar dari 0 dan tidak ada error
 if ($ukuran > 0 || $error == 0) {

        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$namafile);
        if($move){
            echo "<br> File '$namafile' dengan ukuran '$ukuran' sudah terupload.";
        }else{
            echo "Terjadi kesalahan sewaktu Mengupload file";
        }
    }else{
        echo "Fild gagal di upload karna ". $error;
    }


    // proses penyimpanan ke databases
    $query = mysqli_query($koneksi,"insert into buku values(null,'$judul','$deskripsi','$penulis','$penerbit','$namafile')");
    if ($query){
        header('location:list_buku.php');
    }else{
        echo "Gagal menyimpan ke database";
    }

}
?>
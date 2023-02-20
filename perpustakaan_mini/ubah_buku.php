<?php 
require_once('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi,"select * from buku where buku_id='$id'");

while($data = mysqli_fetch_object($query)){
?> 
<html>
    <head>
    </head>
    <body>
   
    <form action="proses-ubah.php" method="post" enctype="multipart/form-data"

    <h1 style="text-align:center">ubah data Buku</h1>
    <hr>

    <table>
    <input type="hidden" name="id" value="<?= $data->buku_id;?>">
        <tr>
            <td>Judul buku</td> 
            <td>:</td> 
            <td>
                <input type="text" name="judul" value="<?= $data->judul_buku; ?>">
                
            </td> 
        </tr>
        <tr>
            <td>Deskipsi</td> 
            <td>:</td> 
            <td><textarea name="deskripsi" id="" cols="30" rows="10" <?= $data->deskripsi; ?>></textarea></td> 
        </tr>
        <tr>
            <td>penulis</td> 
            <td>:</td> 
            <td><input type="text" name="penulis" value="<?= $data->penulis; ?>"></td> 
        </tr>
        <tr>
            <td>Penerbit</td> 
            <td>:</td> 
            <td><input type="text" name="penerbit" value="<?= $data->penerbit; ?>"></td> 
        </tr>

        <tr>
            <td>Gambar</td> 
            <td>:</td> 
            <td>
                <input type="file" name="gambar"> <br>
                <img src="images/<?=$data->gambar; ?>" alt="" width="100px">
             </td>
        </tr>

        <!-- simpan -->
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="simpan">
            </td>
        </tr>
    </table>

    </form>

    </body>
</html>
<?php
}
?>
<?php

require_once("Koneksi.php");
$id_siswa = $_GET['id'];

$query = mysqli_query($koneksi, "select * from siswa WHERE id_siswa = '$id_siswa'");

while($data = mysqli_fetch_object($query)) {

    ?> 
    <html>
        <head>
        </head>
        <body>
       
        <form action="proses-ubah-siswa.php" method="post" enctype="multipart/form-data">
    
        <h1 style="text-align:center">ubah data User</h1>
        <hr>
    
        <table>
        <input type="hidden" name="id" value="<?= $data->user_id;?>">
            <tr>
                <td>NISN</td> 
                <td>:</td> 
                <td>
                    <input type="text" name="nis" value="<?= $data->nis; ?>">
                    
                </td> 
            </tr>
            <tr>
                <td>Nama</td> 
                <td>:</td> 
                <td><input type="text" name="nama" value="<?= $data->nama; ?>"></td> 
            </tr>
            <tr>
                <td>Kelas</td> 
                <td>:</td> 
                <td><input type="text" name="kelas" value="<?= $data->kelas; ?>"></td> 
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
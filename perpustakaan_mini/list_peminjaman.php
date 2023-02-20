<?php
include_once('koneksi.php');
@$nis = $_GET['nis'];
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>FROM PEMINJAMAN BUKU</h1>
        <hr>
        <table> 
            <tr>
         <form action="proses-pencarian.php" method="post">
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" autofocus> <input type="submit" value="Cari" name="cari"></td>
         </from>       
            </tr>
            <tr>
         <form action="proses-simpan-peminjaman.php" method="POST">
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td>
                     <?php

                        $query_siswa = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis' ");
                        $nama = mysqli_fetch_array($query_siswa);
                        
                    ?>
                        <input type="hidden" name="idd" value="<?= $nama['nis']; ?> ">
                        <input type="text" name="siswa" value="<?= $nama['nama']; ?> ">
                    <?php 
                    ?>
                    </td>   
                </tr>
                <tr>
                    <td>Buku</td>
                    <td>:</td>
                    <td>
                        <select name="buku">
                            <?php
                            $query_buku = mysqli_query($koneksi,"select * from buku");
                            while($data_buku = mysqli_fetch_object($query_buku)){
                            ?>
                            <option value="<?= $data_buku->buku_id; ?>"><?= $data_buku->judul_buku; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tgl Kembali</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_kembali"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>No</td>
                <td>No Peminjaman</td>
                <td>NIS</td>
                <td>Nama Siswa</td>
                <td>Judul Buku</td>
                <td>Tgl Pinjam</td>
                <td>Tgl Kembali</td>
            </tr>
       

        <?php
        $nis = '001';
        $no=1;
        $query_peminjaman = mysqli_query($koneksi,"
        select * from peminjaman 
        inner join buku on buku.buku_id = peminjaman.buku_id  
        inner join siswa on siswa.nis = peminjaman.nis
        ");
        while($data_peminjaman = mysqli_fetch_object($query_peminjaman)) {
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data_peminjaman->no_peminjaman; ?></td>
                <td><?= $data_peminjaman->nis; ?></td>
                <td><?= $data_peminjaman->nama; ?></td>
                <td><?= $data_peminjaman->judul_buku; ?></td>
                <td><?= $data_peminjaman->tgl_pinjam; ?></td>
                <td><?= $data_peminjaman->tgl_kembali; ?></td>
            </tr>
           <?php
                  $no++;
           }
           ?>
        </table>
    </body>
</html>
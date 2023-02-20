<html>
    <head></head>
    <body>
        <h1>Data peminjaman</h1>
        <hr>
        
 
        <table border="2" celpadding="3" cellspacing="0" widht="100">
                <tr>
                    <td>No</td>
                    <td>Judul Buku</td>
                    <td>Tgl Pinjam</td>
                    <td>Tgl Kemabali</td>
                </tr>
                <?php
                    
                     // koneksi ke database
                     require_once("koneksi.php");
                     
                    session_start();
                    $id = $_SESSION['nis'];
                    $no=1;
     
                     // Query ke database (mengambil data) 
                     $query = mysqli_query($koneksi,"select * from peminjaman inner join buku on buku.buku_id = peminjaman.buku_id
                      where nis= $id  ");
                     
                     // dolar data di gunakan untuk menampung data dalam bentuk array
                     
                     while($data_peminjaman = mysqli_fetch_object($query)) {
                        ?>
                            <tr>
                                <td><?= $no; ?></td>
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

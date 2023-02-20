<html>
    <head>
       <style>
        
      .container{
        text-align: center;
        position: absolute;
        margin: auto;
      }
      .tambah{
        color: white;
        background-color: 2d2d2d;
        padding: 5px;
        text-decoration: none;
      }
      .tambah:hover{
        background-color: blue;
      }

      .tr2{
        background-color:2d2d2d;
        color: white;
      }

      .ubah{
        background-color: cadetblue;
        color: white;
        text-decoration: none;
        border: inset;
       
      }
      .ubah:hover{
        background-color: blue;
      }

      .hapus:hover{
        background-color: maroon;
      }

      .hapus{
        background-color: red;
        color: white;
        text-decoration: none;
        border: inset;
        
      }
      .hh{
        text-align: center;
      }
     

       </style>
    </head>
    <body>
      <form action="hapus_buku.php" method="$_GET">
      <div class="container">
            <h1>DAFTAR LIST BUKU</h1>
            <hr>    
        <a href="tambah_buku.php" class="tambah">Tambah</a><br><br>
        <table border="2" celpadding="3" cellspacing="0" widht="100"  >
            <tr class="tr2">
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Cover</th>
                <th>Aksi</th>
            </tr>

            <?php

                // koneksi ke database
                require_once("koneksi.php");


                // Query ke database (mengambil data) 
                $query = mysqli_query($koneksi,"select * from buku");
                
                // dolar data di gunakan untuk menampung data dalam bentuk array
                
                
                $no = 1;
                while ($data = mysqli_fetch_object($query)){
                  ?>
                  <tr class='hh'>
                  <td><?=$no?></td>
                  <td><?=$data->judul_buku ?> </td>
                  <td><?=$data->penulis ?></td>
                  <td><?=$data->penerbit ?></td>
                  <td><?="<img src='images/$data->gambar' width='60px'>"?></td>
                  
                   
                    <td>
                    <a href="ubah_buku.php?id= <?= $data->buku_id ?> " class='ubah' >Ubah</a>
                    <a  href="hapus_buku.php?id= <?= $data->buku_id ?>" class='hapus' onclick="return confirm('Apakah kamu yakin ingin menghapusnya');">Hapus</a>
                    
                        </td> 
                        
                   </tr>
                        <?php
                         $no++;
                        }
                ?>
                
                </table>
          </div>

 


    
<!-- 
    // Perulangan while
    // while( $data = mysqli_fetch_object($query)){
    //     echo $data->penulis."<br>";
    //     echo $data->gambar."<br>";
    // } -->


    <!-- // cara memanggil gambar yang ada di database/folder lain -->
    <!-- // echo '<img src="images/'. $data['gambar']. '" style="text-align" >'; -->

    </form>
 </body>
</html>

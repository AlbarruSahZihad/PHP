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
      
      .tre2{
        background-color:2d2d2d;
        color: white;
        padding: 10px;
        
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
        padding: 100px;
      }
     

       </style>
    </head>
    <body>
      <form action="hapus-siswa.php" method="$_GET">
      <div class="container">
            <h1>DAFTAR LIST Siswa</h1>
            <hr>    
        <a href="tambah-siswa.php" class="tambah">Tambah</a><br><br>
        <table class="tabel" border="2" celpadding="3" cellspacing="0" widht="100"  >
            <tr class="tre2">
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>

            <?php

                // koneksi ke database
                require_once("koneksi.php");


                // Query ke database (mengambil data) 
                $query = mysqli_query($koneksi,"select * from siswa");
                
                // dolar data di gunakan untuk menampung data dalam bentuk array
                
                
                $no = 1;
                while ($data = mysqli_fetch_object($query)){
                  ?>
                  <tr class='hh'>
                  <td><?=$no?></td>
                  <td><?=$data->nis ?></td>
                  <td><?=$data->nama ?></td>
                  <td><?=$data->kelas ?></td>
                  
                    <td>
                    <a href="ubah-siswa.php?id= <?= $data->id_siswa ?> " class='ubah' >Ubah</a>
                    <a  href="hapus-siswa.php?id= <?= $data->id_siswa ?>" class='hapus' onclick="return confirm('Apakah kamu yakin ingin menghapusnya');">Hapus</a>
                    
                        </td> 
                        
                   </tr>
                        <?php
                         $no++;
                        }
                ?>
                
                </table>
          </div>

          

    
    </form>
 </body>
</html>

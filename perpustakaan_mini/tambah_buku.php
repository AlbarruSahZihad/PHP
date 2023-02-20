<html>
    <head>
    </head>
    <body>
   
    <form action="proses-tambah-buku.php" method="post" enctype="multipart/form-data">

    <h1 style="text-align:center ;">menambah data Buku</h1>
    <hr>

    <table>
        <tr>
            <td>Judul buku</td> 
            <td>:</td> 
            <td><input type="text" name="judul"></td> 
        </tr>
        <tr>
            <td>Deskipsi</td> 
            <td>:</td> 
            <td><textarea name="deskripsi" id=""></textarea></td> 
        </tr>
        <tr>
            <td>penulis</td> 
            <td>:</td> 
            <td><input type="text" name="penulis"></td> 
        </tr>
        <tr>
            <td>Penerbit</td> 
            <td>:</td> 
            <td><input type="text" name="penerbit"></td> 
        </tr>

        <tr>
            <td>Gambar</td> 
            <td>:</td> 
            <td><input type="file" name="gambar"></td>
        </tr>

        <!-- simpan -->
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
        </tr>
    </table>

    </form>

    </body>
</html>
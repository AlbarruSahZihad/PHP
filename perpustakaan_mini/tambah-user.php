<html>
    <head>
    </head>
    <body>
   
    <form action="proses-simpan-user.php" method="post" enctype="multipart/form-data">

    <h1 style="text-align:center ;">menambah data User</h1>
    <hr>

    <table>
        
        <tr>
            <td>Username</td> 
            <td>:</td> 
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td> 
            <td>:</td> 
            <td><input type="password" name="password"></td> 
        </tr>
        <tr>
            <td>level</td> 
            <td>:</td> 
            <td>
            <select name="user" size="">
                        <option value="petugas">petugas</option>
                        <option value="siswa">siswa</option>
                    </select>
            </td> 
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
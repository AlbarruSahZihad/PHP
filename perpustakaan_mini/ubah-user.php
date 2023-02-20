<?php 
require_once('koneksi.php');

$user_id = $_GET['id'];

$query = mysqli_query($koneksi,"select * from users where user_id='$user_id'");

while($data = mysqli_fetch_object($query)){
?> 
<html>
    <head>
    </head>
    <body>
   
    <form action="proses-ubah-user.php" method="post" enctype="multipart/form-data">

    <h1 style="text-align:center">ubah data User</h1>
    <hr>

    <table>
    <input type="hidden" name="id" value="<?= $data->user_id;?>">
        <tr>
            <td>Username</td> 
            <td>:</td> 
            <td>
                <input type="text" name="username" value="<?= $data->username; ?>">
                
            </td> 
        </tr>
        <tr>
            <td>Password</td> 
            <td>:</td> 
            <td><input type="password" name="password" value="<?= $data->password; ?>"></td> 
        </tr>
        <tr>
            <td>Level</td> 
            <td>:</td> 
            <td><input type="text" name="level" value="<?= $data->level; ?>"></td> 
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
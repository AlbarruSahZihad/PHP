<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>FORM LOGIN To Perpustakaan mini</h1>
        <hr>
        <?php

        if(isset($_GET['err1']) == 'logout'){
            echo "Anda berhasil Logout!";
        }

        if(isset($_GET['err2']) == 'gagal'){
            echo "Anda gagal coba cek usernmae dan password";
        }

        if(isset($_GET['err3']) == 'penyusup'){
            echo " Anda penyusup yah?,login dulu bang!";
        }
        ?>
        <form action="proses_login.php" method="POST">
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
            </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="Login" value="Login"></td>
                </tr>
        </table>    
        </form>


    </body>
</html>
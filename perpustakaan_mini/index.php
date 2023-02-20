<?php 
         session_start();

         if ($_SESSION['login'] == null){
            header('location:login.php?err3=penyusup');
         }else{
            ?>
            <html>
    <head>
    <style>
        .container{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    
    </style>
    </head>
    <body>
        <h1 style="text-align:left;">Dashboard</h1>
        
        Selamat Datang,<b><?= $_SESSION['username']; ?></b> | <a href="logout.php" style="text-decoration:none ;">Logout</a><br><br>
        <div class="container" >
            <hr>
            <?php
            if ($_SESSION['level'] == 'Petugas'){
            ?>
            <!-- untuk petugas -->
            <a href="list-users.php" style="color: black; text-decoration: none;">Users </a> | 
            <a href="list_buku.php"  style="color:black; text-decoration: none;">Buku</a> | 
            <a href="list_siswa.php"  style="color:black; text-decoration: none;">Siswa</a> |
            <a href="list_peminjaman.php"  style="color:black; text-decoration: none;">Peminjaman</a> | 
            <?php
            } 
            if ($_SESSION['level'] == 'Siswa'){            ?>
            <!-- untuk siswa -->
            <a href="list_data_peminjaman.php"  style="color:black; text-decoration: none;">Data Peminjaman</a> | 
            <?php
            }   
            ?>
            </div>
            
            </table>
        </body>
    </html>
            <?php
         }
         
      



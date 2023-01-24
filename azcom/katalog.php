<html>
    <head>
        <title>AZCOM</title>
        <!-- memanggil file css -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
    <div class="container">
    <?php include("header.php") ?>

        <div class="menu">
            <a href="index.php">Branda</a> | <a href="katalog.php">Katalog</a>
        </div>

        <div class="conten" >
        
            <form method="post" action="">
            plih katalog :
            <select name="katalog" >
                <option value="" disabled></option>
                <option value="hadwer">Hadwer</option>
                <option value="sofware">Sofware</option>
            </select >
            <input type="submit" value="TAMPILKAN" name="tombol">
            <hr>
            <table border="1" celpadding="3" cellspacing="0" widht="100">
                <tr>
                    <td>No</td>
                    <td>Nama Produk</td>
                    <td>Jenis</td>
                </tr>

                <?php 
                    $hadware = ['monitor','cpu','keyboard','mouse'];
                    $software = ['windows os','linux os','mac os'];

                if(isset($_POST['tombol'])){

                    $katalog = ($_POST['katalog']);

                    if($katalog == 'hadwer'){
                        $no=1;
                        foreach($hadware as $m){
                            echo
                            "<tr>
                            <td>$no</td>
                            <td>$m</td>
                            <td>Hadware</td>
                            </tr>";
                            $no++;

                        }
                    }

                    
                    if($katalog == 'sofware'){
                        $no=1;
                        foreach($software as $m){
                            echo
                            "<tr>
                            <td>$no</td>
                            <td>$m</td>
                            <td>Software</td>
                            </tr>";
                            $no++;

                        };
                    };
                };

                ?>
            </table>

            </form>

        </div>

        <?php include("footer.php") ?>
    </div>



    </body>
</html>

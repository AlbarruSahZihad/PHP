<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "Belajar PHP" ?></title>
    </head>
    <body>
        <?php
            $umur = 19;
            $nama = "Albarru";
            $namabelakang = "zihad";
            $nilai = 90;
            ?>
            <h1>Belajar PHP <?= "untuk pemula Dan nilai saya $nilai"; ?></h1>
            <?php echo "Umur saya adalah $umur <br>"; ?>
            <?php echo "Nama saya " .$nama."-",$namabelakang; ?>
    </body>
</html>
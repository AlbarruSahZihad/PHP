<html>
    <head>
        <title>Operator</title>
    </head>
    <body>
        <?php
        $nilai_A=10;
        $nilai_B=20;

        $hasil = $nilai_A + $nilai_B;
        $hasil1 = $nilai_A - $nilai_B;
        $hasil2 = $nilai_A * $nilai_B;
        $hasil3 = $nilai_B / $nilai_A;
        
        ?>

        <?php echo "<b>Nilai A = $nilai_A <br><br></b>"; ?>

        <?php echo "<b>Nilai B = $nilai_B <br><br></b>"; ?>

        <?php echo "<b>Hasil penjumlahan Nilai A dengan nilai B = $hasil<br><br></b>"; ?>
        <?php echo "<b>Hasil pengurangan Nilai A dengan nilai B = $hasil1<br><br></b>"; ?>
        <?php echo "<b>Hasil perkalian Nilai A dengan nilai B = $hasil2<br><br></b>"; ?>
        <?php echo "<b>Hasil pembagian Nilai A dengan nilai B = $hasil3<br><br></b>"; ?>

        <?php
        $c=7;
        $d=3;
        $a=2;
        $b=3;

        $hasilbagi= $c % $d;
        $pangkat= $a ** $b;

        echo"2 pangkat 3 = ".$pangkat;
        echo"<br>hasil bagi 7/3 = ".$hasilbagi;

        ?>
    </body>
</html>
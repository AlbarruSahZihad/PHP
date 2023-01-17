<html>
    <head>
        <title>kalkultor</title>
    </head>
    <body>
        <h1 style="text-align: center;">Kalkulator Sederhana</h1>
        <hr>

        Nilai 1 <input type="number" name="k1"><br>
        Nilai 2 <input type="number" name="k2"><br>
        <br>
        <div  style="margin-left :50px;" >
        <button value="tombol">+</button>
        <button value="tombol">-</button>
        <button value="tombol">*</button>
        <button value="tombol">/</button>
        <input type="submit" name="tambah" value="+">
        </div>

        <br><br>

        Hasil <input type="number" value="Hasil">

        <?php

        $h1 = ($_POST['k1']);
        $h2 = ($_POST['k2']);




        ?>



       
    
        
    </body>
</html>
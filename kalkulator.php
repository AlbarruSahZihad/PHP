<html>
    <head>
        <title>kalkultor</title>
    </head>
    <body>
        <form action="prosestgs3.php" method="post">
        <h1 style="text-align: center;">Kalkulator Sederhana</h1>
        <hr>

        Nilai 1 <input type="number" name="nilai1"><br>
        Nilai 2 <input type="number" name="nilai2"><br>
        <br>
        <select name="rumus">
            <option value="" disabled>-pilih-</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>


        <?php
        
        ?>

        <br><br>

        <input type="submit" name="Hitung" style="margin-left: 50px;" value="Hitung">
        </form>
    </body>
</html>
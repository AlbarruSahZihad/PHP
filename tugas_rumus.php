<html>
    <head>
        <title>meghitung rumus</title>
    </head>
    <body>
       
    <form action="prosestgs2.php" method="POST">

    <h1 style="text-align: center;">Aplikasi sederhana menghitung rumus <br> luas segitiga dan persegipanjang</h1></h1>
    <hr>

    Nilai 1 <input name="nilai1" type="number"><br>
    Nilai 2 <input name="nilai2" type="number"><br>

    Rumus 
    <select name="rumus">
    <option value="" disabled>-pilih-</option>
    <option value="LS" >Luas Segitiga</option>
    <option value="LPP" >Persegi Panjang</option>    
    </select>
    <br>
    <input type="submit" name="Hitung" style="margin-left: 50px;" value="Hitung">
      
    </form>

    </body>
</html>
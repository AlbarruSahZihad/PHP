<html>
    <head>
        <title>kalkultor</title>
    </head>
    <body>
        <form action="" method="post">
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
$n1 =($_POST["nilai1"]);
$n2 =($_POST["nilai2"]);
$rumus =($_POST["rumus"]);

if ($rumus == '+'){
    function tambah($n1,$n2)
    {
        $nilai1 = $n1 ;
        $nilai2 = $n2;
        $hasil = $nilai1 + $nilai2 ;
        return $hasil;
    }
    echo tambah($n1,$n2);
};

if ($rumus == '-'){
    function persegi($n1,$n2){
        $nilai1 = $n1 ;
        $nilai2 = $n2;
        $hasil = $nilai1 - $nilai2 ;
        return $hasil;
    }
    echo persegi($n1,$n2);
}

if ($rumus == '*'){
    function persegi($n1,$n2){
        $nilai1 = $n1 ;
        $nilai2 = $n2;
        $hasil = $nilai1 * $nilai2 ;
        return $hasil;
    }
    echo persegi($n1,$n2);
}

if ($rumus == '/'){
    function persegi($n1,$n2){
        $nilai1 = $n1 ;
        $nilai2 = $n2;
        $hasil = $nilai1 / $nilai2 ;
        return $hasil;
    }
    echo persegi($n1,$n2);
}


?>
<br><br>

<input type="submit" name="Hitung" style="margin-left: 50px;" value="Hitung">
</form>
</body>
</html>
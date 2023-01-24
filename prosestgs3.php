
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

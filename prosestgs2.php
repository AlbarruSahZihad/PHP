<?php
$n1 =($_POST["nilai1"]);
$n2 =($_POST["nilai2"]);
$rumus =($_POST["rumus"]);

if($n1 == '' || $n2 == ''){
    echo "isi tidak ada";
}else{
if ($rumus == 'LS'){
    function segitiga($n1,$n2)
    {
        $alas = $n1 ;
        $tinggi = $n2;
        $luas = 0.5 * $alas * $tinggi ;
        return $luas;
    }
    echo segitiga($n1,$n2);
};

if ($rumus == 'LPP'){
    function persegi($n1,$n2){
        $panjang = $n1 ;
        $lebar = $n2;
        $luas = $panjang * $lebar ;
        return $luas;
    }
    echo persegi($n1,$n2);
}
}


?>
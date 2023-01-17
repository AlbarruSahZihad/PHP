<html>
    <head>
        <title>function</title>
    </head>
    <body>
        
    <h1>BELAJAR FUNCTION</h1>
    <hr>

   <!-- functioon adalah sebuah kode yang menjalankan printah tertentu dan dapat di panggil secara berulang -->

    <?php 
    
     function luassegitiga($a , $t){
        $alas = $a ;
        $tinggi = $t ;
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
     };

      echo luassegitiga(10 , 20);


    ?>


    </body>
</html>
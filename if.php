<html>
    <head>
        <title>Belajar If</title>
    </head>
    <body>
        <h1>Belajar IF </h1>    
        <hr>

        <?php
       
    echo "<h3>Daftar Nama Penerima S</h3>";

       $nama = ["siska","sisu","susi","suci","salsa"];
       
        foreach ($nama as $c){
            
            if($c == "susi"){
                echo $c . " itu adalah nama saya <br>";
            }else{
                echo $c ."<br>";
            }
            // echo $c ."<br>";
     }
        ?>

    </body>
</html>
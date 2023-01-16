<html>
    <head>
        <title>tugas.php</title>
        <style>
            .re{
                background-color: red;
                width: 70px;
               padding: 10px;
                margin: 3px;
                display: flex;
                justify-content: center;
                float: left;
            }
            .ce{
                background-color: orange;
                width: 70px;
                padding: 10px;
                margin: 3px;
                display: flex;
                justify-content: center;
                float: left;
            }
            .clear{
                clear: right;
            }
        </style>
    </head>
    <body>

    <h1 style="color:orangered ">BELAJAR ARRAY DI HP</h1>
  

        <?php
         $for = ["Senin","Selasa","Rabu","Kamis","jumat","sabtu","Minggu",];

        

        $ch= count($for);    
        $d = $for;
        
        for($a=0; $a < $ch; $a++ ){
            echo '<div class="ce">'.$for[$a].'</div>';
        };
        echo "looping menggunakan <br><b>FOOR</b>";
        echo '<div style="clear:both"></div>';
        
        
        foreach($for as $f ){
            echo '<div class="re">'.$f.'</div>' ;
        };
        echo "looping menggunakan <br><b>FOOREACT</b>";
        
        ?>
        
    </body>
</html>
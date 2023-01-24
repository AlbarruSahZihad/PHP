<html>
    <head>
        <title>Belajar Foreach</title>
    </head>
    <body>
        <h1>Belajar Foreach</h1>    
        <hr>

        <?php

        $menu = [

            'Makanan'=>
            [
                'nasi goreng',
                'mie goreng'
            ],
            'Minuman'=>
            [
            'Es jeruk',
                'Kelapa Muda',
                'Capucino'=>
                [
                    'cp'=>'capucino panas',
                    'cd'=>'capucino dingin'
                ]
            ]
            
        ];
        
        $no = 1;
        foreach ($menu['Makanan'] as $m){
            echo $no .".".$m . "<br>";                      
            $no++;
        }

        ?>
    </body>
</html>
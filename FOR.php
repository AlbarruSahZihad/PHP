<html>
    <head>
        <title>Belajar For</title>
    </head>
    <body>
        
        <h1>Belajar FOR di PHP</h1>
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

    $jumlah = 2;

    for(
        $i = 0;
        $i < count($menu['Makanan']); 
        $i++
        )
        {
        echo ($i + 1). "." .$menu ['Makanan'][$i]."<br>";
        
    }
        ?>

    </body>
</html>
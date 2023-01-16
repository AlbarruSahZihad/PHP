<html>
    <head>
        <title>belajar Array Multidimensi</title>
    </head>
    <body>
    
    <h1>Belajar Array Multidimensi</h1>
    <hr>
    
    <?php
    // array multidimensi terindenx
    
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

    // print_r($menu);

    // echo $menu['Minuman'][0];
    // echo $menu['Minuman']['Capucino'][0];

    // count = menghitung data variabel
    echo count($menu['Minuman']['Capucino']);
   
    ?>

    </body>
</html>
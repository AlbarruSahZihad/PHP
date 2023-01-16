<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>      
    <h1>WARUNG WALUYO</h1>
        <hr>
    <?php
      $prodak1 = array("Mouse","Keyboard","Monitor");
    //   cara menambahankan data ke dalam array
    $podak1[] = "Mouse Pad";
    $podak1[] = "CPU";
    print_r($prodak1). "<br>";

    // count digunakan untuk menghitung jumlah data array
    echo count($prodak1) . "<br>";
    echo $prodak1[3];
    ?>
</body>
</html>
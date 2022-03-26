<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $dizi = array("Ali","Veli","Ayse","Fatma");

    array_push($dizi, "Ela", "Gamze");
    $sayaç = count($dizi);

    for ($i = $sayaç-1; $i >= 0; $i--) {

        echo $dizi[$i] . " [" . $i+1 . "]"; 
        echo "<br>";
    }
    echo "<br>";
    for ($i = 0; $i <= $sayaç-1; $i++) {

        echo  $dizi[$i] . " [" . $i+1 . "]";
        echo "<br>";
    }

    ?>
</body>
</html>
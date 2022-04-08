<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $not = rand(0, 100);
    $sayi = $not;
    if ($not %= 2) {
        echo "Sayınız Çift: $sayi";
    } else {
        echo "Sayınız Tek: $sayi";
    }
    
    echo "</br></br></br>";

    $not = rand(0, 100);
    if ($not >= 50) {
        echo "Geçtiniz-Notunuz:$not";
    } else {
        echo "Kaldınız-Notunuz:$not";
    }

    echo "</br></br></br>";

    $yas = rand(0, 50);
    if ($yas < 16) {
        echo "Yaşınız A1 Ehliyetini Almaya Yetmiyor: $yas";
    } 
    elseif ($yas >= 16 && $yas < 18 ) {
        echo "Yaşınız A1 Ehliyetini Almaya Yetiyor: $yas";
    }
    elseif ($yas >= 18 && $yas < 24) {
        echo "Yaşınız A2 Ehliyetini Almaya Yetiyor: $yas";
    }
    elseif ($yas >= 24) {
        echo "Yaşınız A Ehliyetini Almaya Yetiyor: $yas";
    }
    ?>
</body>
</html>
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
    echo "Dizimiz 4 Elamanlı 'Ali,Veli,Ayşe ve Fatma' isimlerini içeriyor <br>";
    $dizi = array("Ali","Veli","Ayse","Fatma");
    print_r($dizi);
    echo "<br>";
    echo "Şimdi dizimize 'Ela ve Gamze' isimlerini ekleyelim <br>";
    array_push($dizi, "Ela", "Gamze");
    print_r($dizi);
    echo "<br>";
    echo "Şu anda ise Gamze ismini dizimizden çıkartlalım... <br>";
    array_pop($dizi);
    print_r($dizi);
    echo "<br>";
    echo "Son olarak dizinin başındaki 'Ali' ismini dizimizden çıkartalım <br>";
    array_shift($dizi);
    print_r($dizi);
    echo "<br><br>";
    echo "Dizimizin son hali başta yaptığımız gibi 4 elamanlı fakat içerisindeki isimler değişti dizinin sonuna <br> 
    2 adet isim ekleyip 1 tane çıkarttım dizinin başından ise 1 adet isim çıkarttık.";

    // Git denemesi...

    ?>
</body>
</html>
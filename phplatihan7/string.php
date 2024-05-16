<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>

    <?php
    echo "<h3>soal no 1</h3>";

    $string1 = "PHP is never old";

    echo "panjang string 1: " . strlen($string1). "<br>";
    echo "jumlah kata 1: " . str_word_count($string1)."<br>";

    echo "<h3>soal no 2</h3>";

    $string2 = "I love PHP";

    echo "Kata pertama string 2: " . substr($string2, 0, 1) ."<br>"; 
    echo "Kata kedua string 2: " . substr($string2, 2, 4)  ."<br>";
    echo "Kata ketiga string 2: " . substr($string2, 7, 3)  ."<br>";

    echo "<h3>soal no 3</h3>";

    $string3 = "PHP is old but sexy!";

        echo "sebelum : " . $string3 . "<br>"; 
        echo "sesudah : " . str_replace("sexy!", "awesome", $string3) . "<br>";
        // OUTPUT : "PHP is old but awesome"


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>soal Array</h1>

    <?php
    echo "<h4>soal 1</h4>";

    $kids = ['Mike', 'Dustin','Will','Lucas','Max','Eleven'];
    $adults = ['Hopper', 'Nancy', 'Joyce', 'Jonathan', 'Murray'];

    print_r($kids);

    echo "<h4>soal 2</h4>";
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Menampilkan panjang array kids
    echo "<br>";
    echo "<ol>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";
    }
    echo "</ol>";

    echo "Total Adults: " . count($adults); // Menampilkan panjang array adults
    echo "<br>";
    echo "<ol>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";
    }
    echo "</ol>";

    echo "<h4>soal 3</h4>";

    $kidsArr = [
        ["id" => "000", "name" => "Will Byers", "Age" => "12", "Aliases" => "Will the Wise", "Status" => "Alive"],
        ["id" => "001", "name" => "Mike Wheeler", "Age" => "12", "Aliases" => "Dungeon Master", "Status" => "Alive"],
        ["id" => "002", "name" => "Jim Hopper", "Age" => "43", "Aliases" => "Chief Hopper", "Status" => "Deceased"],
        ["id" => "003", "name" => "Eleven", "Age" => "12", "Aliases" => "El", "Status" => "Alive"],
    ];
    
    echo "<pre>";
    print_r($kidsArr);
    echo "</pre>";
    ?>
</body>
</html>

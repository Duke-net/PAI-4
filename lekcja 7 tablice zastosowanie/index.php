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
    // https://github.com/PiskorowskiJakub/web-development-course/blob/main/2-backend/2-2-php/2-2-07-funkcje-do-tablic/README.md
        echo "<h2><b>Zadanie 1.</b></h2>";
        echo "<hr>";
        $tab = array (1,23,54,87,32,56,12,21,23,25);
        $zdanie = "To zdanie składa się z siedmiu słów";


        echo "<h3>Wyświetlenie tablicy i stworzonego zdania:</h3>";
        $temp = explode(' ', $zdanie);
        print_r ($temp);
        echo "<br><br>";
        foreach($temp as $item){
            echo "$item ";
        }


        echo "<hr>";

        echo "<h3>Wyświetlenie elementów tablicy:</h3>";
        foreach($tab as $item){
            echo "$item <br>";
        }


        echo "<hr>";

        echo "<h3>Sortowanie elementów tablicy</h3>";
        sort($tab, SORT_NUMERIC);

        foreach($tab as $item){
            echo "$item <br>";
        }

        echo "<br><br>";

        sort($temp, SORT_STRING);
        foreach($temp as $item){
            echo "$item <br>";
        }

        echo "<br><br>";

        echo "<h3>Sortowanie elementów tablicy odwrotnie:</h3>";
        rsort($tab, SORT_NUMERIC);

        foreach($tab as $item){
            echo "$item <br>";
        }

        echo "<br><br>";

        rsort($temp, SORT_STRING);
        foreach($temp as $item){
            echo "$item <br>";
        }

        echo "<hr>";

        echo "<h3>Przetasowanie elementów tablicy:</h3>";
        shuffle($temp);
        foreach($temp as $item){
            echo "$item <br>";
        }

        echo "<br><br>";

        shuffle($tab);
        foreach($tab as $item){
            echo "$item <br>";
        }

        echo "<hr>";

        echo "<h3>Wyświetlanie danych aktualnych elementów:</h3>";
        $people = array("Peter", "Joe", "Glenn", "Cleveland");

        echo "<h4>Element zerowy:</h4>";
        echo current($people);
        next($people);
        next($people);
        echo "<h4>Element po 2 przejściach:</h4>";
        echo current($people);
        echo "<h4>Element po resecie:</h4>";
        echo reset($people);

    ?>
</body>
</html>
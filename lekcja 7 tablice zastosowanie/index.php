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
        echo "<h1><b>Zadanie 1.</b></h1>";
        echo "<hr>";
        $tab = array (1,23,54,87,32,56,12,21,23,25);

        $zdanie = "To zdanie składa się z siedmiu słów";

        $temp = explode(' ', $zdanie);
        print_r ($temp);
        foreach($temp as $item){
            echo "$item <br>";
        }
        echo "<hr>";
        foreach($tab as $item){
            echo "$item <br>";
        }
        echo "<hr>";

        echo "<h1><b>Zadanie 2.</b></h1>";
        echo "<hr>";
        echo "<h1><b>Zadanie 2.</b></h1>";
        echo "<hr>";



    ?>
</body>
</html>
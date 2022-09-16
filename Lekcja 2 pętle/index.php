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

// TABLICZKA MNOŻENIA

for ($a = 1; $a <= 10; $a++){
    for ($b = 1; $b <= 10; $b++){
    echo "$a * $b = ". $a*$b ."<br>";
    }
    echo "<br>";
}


// JEBANY KWADRAT Z GWIAZDKÓW I KRESKÓW

$w = 6;
$s = 5;

for ($a = 1; $a <= $w; $a++){
    for ($b = 1; $b <= $s; $b++){
        if($a == 1 || $a == 6){
            echo "*";
        }
        elseif($b == 1 || $b == 5){
            echo "*";
        }
        else {
            echo "_";
        }
    }
    echo "<br>";
}


?>
</body>
</html>
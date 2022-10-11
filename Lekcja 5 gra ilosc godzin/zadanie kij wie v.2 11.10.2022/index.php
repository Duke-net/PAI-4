<!DOCTYPE html>
<html lang="en" onselectstart="window.event.returnValue=false;">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>zadanie jaakies</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form class="uno" method="POST">
        <label class="tre" for="name">Wybierz grę: </label>
        <select name="gry">
            <option name="gta" value="GTA">GTA</option>
            <option name="csgo" value="CS:GO">CS:GO</option>
            <option name="wot" value="WOT">WOT</option>
            <option name="battelfron" value="Battelfront">Battelfront</option>
            <option name="minecraft" value="Minecraft">Minecraft</option>
            <option name="forza" value="Forza">Forza</option>
        </select>
        <br>

        <label class="tre" for="name">Podaj ilość godzin</label>
        <input class="tre" type="text" name="godziny" id="godziny" placeholder="godziny" required><br>

        <input class="tre" type="submit" name="submit" value="Wyślij">
    </form>
    <div id="php">
        <?php
    ///////////////////////////////////// OPCJA_1
        // if(isset($_POST['gry'])){
        //     echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
        // }

        // if(isset($_POST['godziny'])){
        //     echo "<br><hr>Podana ilość godzin to: <i>" . $_POST['godziny']."</i>";
        // }

        // if($_POST['godziny']<100){
        //     echo "<br><hr>Jesteś noobem... ;(<hr>";
        // }
        // elseif($_POST['godziny']<1000){
        //     echo "<br><hr>Coś tam umiesz..<hr>";
        // }
        // elseif($_POST['godziny']<3000){
        //     echo "<br><hr>Nie źle.<hr>";
        // }
        // else{
        //     echo "<br><hr>Zajebiście!<hr>";
        // }
    ///////////////////////////////////// OPCJA_2
        if(isset($_POST['gry']) == true && $_POST['gry'] == "GTA" && ($_POST['godziny'] < 100)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Jesteś noobem... ;(<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "GTA" && ($_POST['godziny'] < 1000)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Nie najgorzej.. <hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "CS:GO" && ($_POST['godziny'] < 500)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Tak se.... <hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "CS:GO" && ($_POST['godziny'] < 5000)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Kozacko!<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "WOT" && ($_POST['godziny'] < 200)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Tutorial na yt i lecisz..<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "WOT" && ($_POST['godziny'] < 3200)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Dawaj na turniej!<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "Battelfront" && ($_POST['godziny'] < 100)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Dramat, Tragedia i inne synonimy..<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "Battelfront" && ($_POST['godziny'] < 11000)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Nolife<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "Minecraft" && ($_POST['godziny'] < 10)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Rezi kiedy minecraft?<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "Minecraft" && ($_POST['godziny'] < 7000)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Trzepiesz na tym kase?<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "Forza" && ($_POST['godziny'] < 20)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Lpeiej kup sobie rower..<hr>";
        }
        elseif(isset($_POST['gry']) == true && $_POST['gry'] == "Forza" && ($_POST['godziny'] < 1000)){
            echo "<br><hr>Wybrana gra to: <i>" . $_POST['gry']."</i>";
            echo "<br><hr>Zawodowo!<hr>";
        }
        else{
            echo "wyjebało system!";
        }
        ?>
    </div>
</body>
</html>
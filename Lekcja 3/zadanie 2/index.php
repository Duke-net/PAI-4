<!DOCTYPE html>
    <head>
        <title>PAI 7</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="zad3.css">
    </head>
    <body>
        <form method="post">
            
                <p>Wybierz gre</p>
                <select name="so" multiple size="3">
                    <option selected>CS:GO</option>
                    <option>MC</option>
                    <option>WOT</option>
                    <option>Track Simulation</option>
                </select>

                <p>Pis to: </p>
                <p><input type="radio" name="wc" value="syf">Syf</p><br>
                <p><input type="radio" name="wc" value="porazka">Porażka</p><br>
                <p><input type="radio" name="wc" value="no com">Bez komentarza</p><br>

                <p>najlepszy owoc: </p>
                <p><input type="checkbox" name="gry[]" value="jabłko" />jabłko</p>
                <p><input type="checkbox" name="gry[]" value="banan" />banan</p>
                <p><input type="checkbox" name="gry[]" value="gruszka" />gruszka</p>

                <br><br><br>
                <input type="submit" name="submit" value="Wyślij">
        </form>
        <?php

        if(isset($_POST['so'])){
            echo "Wybrana gra to: " . $_POST['so'] . '<br>';
        }

        if(isset($_POST['wc'])){
            if($_POST['wc'] == 'syf') echo "Odpowiedź: Syf<br>";
            else if($_POST['wc'] == 'porazka') echo "Odpowiedź: Porażka";
            else echo "Odpowiedź: Bez komentarza" . '<br>';
        }
                
        if(isset($_POST['gry'])){
            for($i=0; $i<count($_POST['gry']); $i++){
                echo "Wybrano: " . $_POST['gry'][$i] . "<br />";
            }
        }else{
            echo "nie lubisz owoców :(";
        }

        ?>
    </body>
</html>
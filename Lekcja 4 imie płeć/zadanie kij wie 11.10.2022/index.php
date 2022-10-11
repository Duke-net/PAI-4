<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>zadanie jaakies</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form class="uno" method="POST">
        <label class="tre" for="name">Imię</label>
        <input class="tre" type="text" name="name" id="name" placeholder="Imię" required><br>

        <label class="tre" for="last name">Nazwisko</label>
        <input class="tre" type="text" name="name" id="name" placeholder="Nazwisko" required>

        <p>Podaj swoją płeć:</p>
        <input class="tre" type="radio" name="Płeć" value="Kobieta">Kobieta
        <input class="tre" type="radio" name="Płeć" value="Mężczyzna">Mężczyzna<br>

        <input class="tre" type="submit" name="submit" value="Wyślij">
    </form>
    <?php
        if(isset($_POST['Płeć'])){
            if($_POST['Płeć'] == 'Mężczyzna') echo "Witam Pana ";
            else echo "Witam Panią ";
        }
        if(isset($_POST['name'])){
            echo "". htmlspecialchars($_POST['name']) . ". ";
        }else{
            echo"";
        }
    ?>
</body>
</html>
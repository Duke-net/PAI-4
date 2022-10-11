<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>

    <!-- https://github.com/PiskorowskiJakub/web-development-course/tree/main/2-backend/2-2-php/2-2-08-obsluga-formularzy -->

</head>
<body style="background: #707070;">

<section style="">
    <div id="panel">
        <form method="post">
            <label for="name">Imię i nazwisko</label>
            <input type="text" name="name" id="name" placeholder="Imię Nazwisko" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="mail@jakis.pl" required>

            <label for="message">Wiadomość</label>
            <textarea name="message" id="message" placeholder="Wpisz swoją wiadomość" required></textarea>

            <input type="submit" name="submit" value="Wyślij">
        </form>
    </div>
</section>

<section>
    <form method="POST">

        <label for="name">Login:</label>
        <input type="name" name="imie" required/>

        <label for="password">Password:</label>
        <input type="password" name="haslo" required/>

        <p>Remember me!</p>
        <input type="checkbox" name="bx"/>

        <input type="submit" />
    </form>

    
    <?php
        if(isset($_POST['imie'])){
            echo "<hr>Cześć " . htmlspecialchars($_POST['imie']) . ". <br><hr>";
        }
        else{
            echo "Cześć nieznajomy.";
        }

        if(isset($_POST['haslo'])){
            echo "<h1 id='beka'>Cześć </h1>." . (sha1(htmlspecialchars($_POST['haslo']))) . ". <hr><br>";
        }

        if(isset($_POST['bx'])){
            // for($i=0; $i<count($_POST['bx']); $i++){
            //     echo $_POST['bx'][$i] . "<br />";
            // }
            echo "Login zapamiętany...";
        }else{
            echo "Nie zapamiętano...";
        }
    ?>
</section>

    
</body>
</html>
<?php
//=============================== COOKIES =================================

/*
   Un cookie viene spesso utilizzato per identificare un utente.
   Un cookie è un piccolo file che il server incorpora nel computer dell'utente.
   Ogni volta che lo stesso computer richiede una pagina con un browser,
   invierà anche il cookie.
   I cookie tengono conto delle preferenze dell'utente e non può farlo l'http perche è
   stateless.
*/

$user = $_COOKIE['user'] ?? '';
$color = $_COOKIE['color'] ?? '';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body
        {
            background-color: <?= $color ?>;
        }
    </style>
    
</head>
<body>
<form action="action_cookie.php" method="post">
    <label for="name">Nome:</label><br>
    <input type="text" id="name" name="name" value="Matteo"><br><br>

    <!-- Dropdown list -->
    <label for="color"> Seleziona un colore:</label>
    <br>
    <select id="color" name="color">
        <option value="green"> VERDE</option>
        <option value="yellow"> GIALLO</option>
        <option value="pink"> ROSA</option>
        <option value="red"> ROSSO</option>
    </select>
    <br><br>

    <input type="submit" value="Submit">
</form>


<p> Ciao <?= $user ?> hai scelto il colore <?=$color?></p>
</body>
</html>

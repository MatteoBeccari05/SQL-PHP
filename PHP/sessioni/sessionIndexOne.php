<?php
/*
 * A differenza dei cookie le sessioni memorizzano dati nel server e non nel pc locale
 * Una sessione è un modo per memorizzare informazioni (in variabili) da utilizzare su più pagine.
 */

if(session_status()==PHP_SESSION_NONE)  //controllo che non siano aperte altre sessioni
{
    session_start(); //starto la sessione
}

$_SESSION['materia'] = 'informatica';
$_SESSION['scuola'] = 'itis';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Session page</p>
    <a href="sessionIndexTwo.php"> Session Index 2</a>

    <p><?=session_name()?></p>
    <p><?=session_id()?></p>
</body>
</html>

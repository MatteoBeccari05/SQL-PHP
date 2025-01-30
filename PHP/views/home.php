<?php
$content = 'data from DB - this is home page';
$db = new PDO('mysql:host=localhost;dbname=dbitis', 'root', '', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);
require_once 'functions.php';
echo '<br>';
$query = 'select * from studenti';

//lavoro con le eccezioni e faccio il try catch
try
{
    $stm = $db->prepare($query);
    $stm->execute(); //eseguo
    //quando gli studente finiscono si esce dal while
    ob_start(); //tutti gli echo andranno nel buffer
    while($student = $stm->fetch())
    {
        echo '<p>';
        echo 'Matricola: '.$student->matricola_studente."<br>";
        echo 'Nome: '.$student->nome."<br>";
        echo 'Cognome: '.$student->cognome."<br>";
        echo 'Data Iscrizione: '.$student->data_iscrizione."<br>";
        echo 'Media: '.$student->media."<br> <hr>";
        echo '</p>';
    }
    $stm->closeCursor();  //chiudo la connessione
    $content = ob_get_contents();  //ricevo i contenuti
    ob_end_clean();  //pulisco il buffer
}
catch (Exception $eccezione)
{
    logError($eccezione);
}

require 'header.php';
?>

    <div>
        <?=$content?>
    </div>

<?php
require 'footer.php';
?>
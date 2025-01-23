<?php
//pdo è una classe che interfaccia php ai database

                // driver:percorso;nome del db - username - password - per creare delle eccezioni in caso la query non vada a buon fine
$db = new PDO('mysql:host=localhost;dbname=dbitis', 'root', '', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);
//PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ  legge le tuple e le rende degli oggetti
//PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION dico al pdo che lavoriamo con le eccezioni

/*var_dump($db);
echo '<br>';
echo $db->getAttribute(PDO::ATTR_DRIVER_NAME);   //PER VEDERE IL NOME DEL DRIVER
echo '<br>';
echo $db->getAttribute(PDO::ATTR_ERRMODE);*/



/* -------------------------- READ -------------------------- */
echo '<br>';
$query = 'select * from studenti';

//lavoro con le eccezioni e faccio il try catch
try
{
    $stm = $db->prepare($query);
    $stm->execute(); //eseguo
    //quando gli studente finiscono si esce dal while
    while($student = $stm->fetch())
    {
        echo 'Matricola: '.$student->matricola_studente."<br>";
        echo 'Nome: '.$student->nome."<br>";
        echo 'Cognome: '.$student->cognome."<br>";
        echo 'Data Iscrizione: '.$student->data_iscrizione."<br>";
        echo 'Media: '.$student->media."<br> <hr>";
    }
    $stm->closeCursor();  //chiudo la connessione
}
catch (Exception $eccezione)
{
    logError($eccezione);
}




/* -------------------------- READ PIU' ARTICOLATA -------------------------- */
$query = 'select media, cognome FROM student WHERE nome = :name';

echo '<br>';
echo '<br>';
echo 'Query più articolata';
echo '<br>';

try
{
    $stm = $db->prepare($query);
    $stm->bindValue(':name', 'Azzurra');  //lego delle stringhe
    $stm->execute(); //eseguo

    while($student = $stm->fetch())
    {
        echo 'Cognome: '.$student->cognome."<br>";
        echo 'Media: '.$student->media."<br>";
    }

    $stm->closeCursor();  //chiudo la connessione
}
catch (Exception $eccezione)
{
    logError($eccezione);
}




/* -------------------------- CREATE -------------------------- */
$query = "INSERT INTO studenti (matricola_studente, nome, cognome, data_iscrizione, media) VALUES(:matricola, :nome, :cognome, now(), :media)";

try
{
    $stm = $db->prepare($query);
    $stm->bindValue(':matricola', '00012');
    $stm->bindValue(':nome', 'Marco');
    $stm->bindValue(':cognome', 'Negrello');
    $stm->bindValue(':media', 7.2);

    if($stm->execute())
    {
        $stm->closeCursor();  //chiudo la connessione
    }
    else
    {
        throw new PDOException("Utente non inserito correttamente");  //sollevo l'eccezione
    }
}
catch (Exception $eccezione)
{
    logError($eccezione);
}




/* -------------------------- UPDATE -------------------------- */
$query = 'UPDATE studenti SET media=:media WHERE nome=:nome';

try
{
    $stm = $db->prepare($query);
    $stm->bindValue(':nome', 'Marco');
    $stm->bindValue(':media', 5.9);

    $stm->execute();
    $stm->closeCursor();
}
catch (Exception $eccezione)
{
    logError($eccezione);
}




/* -------------------------- DELETE -------------------------- */
$query = 'DELETE FROM studenti WHERE nome=:nome';

try
{
    $stm = $db->prepare($query);
    $stm->bindValue(':nome', 'Marco');

    $stm->execute();
    $stm->closeCursor();
}
catch (Exception $eccezione)
{
    logError($eccezione);
}




/* -------------------------- FUNZIONE PER SALVARE I LOG -------------------------- */
function logError(Exception $ex) : void
{
    echo 'Errore nel database, contatta assistenza';  //messaggio di errore nella pagina
    error_log($ex->getMessage().' -- '.date('Y-m-d H:i:s')."\n",3, 'log/error.log');  //appende il messaggio in un file di destinazione
}


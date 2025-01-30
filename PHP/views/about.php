<?php
$content = 'data from DB - this is about page';
$path = $_SERVER['PHP_SELF'];  //superglobal visibile a tutti

//PHP_SELF PERCORSO DELLO SCRIPT
require 'header.php';
require_once 'functions.php';
?>

    <div>
        <p><?=$path?></p>
    </div>

<?php
require 'footer.php';
?>
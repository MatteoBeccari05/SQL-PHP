<?php
$content = 'data from DB - this is contact page';

require_once 'functions.php';
require 'header.php';
?>

    <div>
        <p><?=$content?></p>
    </div>

<?php
require 'footer.php';
?>
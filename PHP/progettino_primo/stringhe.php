<?php
//==================================================//
//stringhe e array
$language = 'PHP';
$message = 'Welcome to ' .$language;
echo $message;


echo '<br>';
echo '<br>';
$message2 = 'Welcome to $language';
echo $message2;


echo '<br>';
echo '<br>';
$message3 = "Welcome to $language";  //con doppi apici (interpolazione)
echo $message3;

echo '<br>';
echo '<br>';
$count = 12;
$item = 'flowers';
$message4 = "You have $count ${item}s";
echo $message4;


$message5 = <<<MESSAGE
Ciao sono matteo e questa è una strigna bella lunga. <br>
Posso scrivere ancoraa moltoooo
MESSAGE;
echo '<br>';
echo '<br>';
echo $message5;

//FUNZIONI DA SAPERE
/*
strlen()
substr()
substr_replace()
trim()
ltrim() rtrim()
striplashes()
str_pad()
strpos()
strrpos()
stripos()
str_contains()
str_starts_with()
str_ends_with()
strToUpper()
strToLower()
ucfirst()
ucwords()
strrev()
str_shuffle()
str_repeat()
strcmp()
strcasecmp()
strnatcmp()
explode()
implode()
chr()
ord()
 */


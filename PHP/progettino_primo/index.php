<?php
//echo 'Ciao Mondo!';   // echo è un costrutto
$var = 'Ciao Mondo';

/* istruzioni e dati */

/* integer - double - boolean - string */
$count = 10;
$list_price = 23.67;
$first_name = 'Matteo';
$first_name2 = "Alice";
$is_valid = true;
$microwave = 3.9e-12;
/*echo PHP_INT_MAX;
echo '<br>';   //per andare a capo
echo PHP_INT_MIN;*/

const PIGRECO = 3.141516;

$myvar = "Sono una variabile";
echo $myvar;
echo '<br>';    //all'interno di una variabile posso mettere tipi diversi
$myvar = 5;
echo $myvar;
//linguaggio debolmente tipizzato (loose typing) non dichiaro il tipo

$a = 0;
$b = '0';


echo '<br>';
if($a === $b)  //=== vanno a vedere il tipo di dato
    echo 'sono uguali';
else
    echo 'sono diversi';

if($a == $b)  //type coercion (cast) la stringa diventa un intero
    echo 'sono uguali';
else
    echo 'sono diversi';

//===================================================================//

//isset() se esiste - empty() se è vuota - is_null() se contiene null
echo '<br>';
$var1 = null;
$var2 = 0;

if(isset($var3))
    echo 'variabile esistente';
else
    echo 'variabile non esistente';

echo '<br>';
if(empty($var2))
    echo 'variabile vuota ';
else
    echo 'variabile non vuota';

echo '<br>';
if(is_null($var1))
    echo 'variabile null ';
else
    echo 'variabile non null';

//===========================================================//

echo '<br>';
if(false=='0')
    echo 'false è 0';
else
    echo 'false non è 0';


echo '<br>';
if(false==='0')
    echo 'false è 0';
else
    echo 'false non è 0';


//==============================================================//

echo '<br>';
if(3.5=='3.5')
    echo 'sono uguali';
else
    echo 'non sono uguali';


echo '<br>';
if(true=='false')
    echo 'uguali';
else
    echo 'diversi';


echo '<br>';
if(true==='false')
    echo 'uguali';
else
    echo 'diversi';


//=========================================================//
echo '<br>';
echo '<br>';
$grade = 'j';

$message = match ($grade){
    'A'=> 'letter a',
    'B'=> 'letter b',
    'C', 'D' => 'letter c or d',
    default => 'other letters'
};
echo $message;


echo '<br>';
echo '<br>';
$subtotal = 200;
$total = 0;
$discount = match (true){
    $subtotal <= 200 => $total = $subtotal*0.9,
    $subtotal >200 => $total = $subtotal*0.8,
};

echo $total;

//====================================================//
//conditional operator
echo '<br>';
echo '<br>';
$num1 = 100;
$num2 = 200;
$num1>$num2 ? $r='ok' : $r='ko';
echo $r;

//===================================================//
//coalescing operator
echo '<br>';
echo '<br>';
$num0 = null;
$num3 = $num0 ?? $num2;  //se la prima variabile è null prende la seconda
echo $num3;


//=================================================//
//spaceship operator
echo '<br>';
echo '<br>';
echo $num2 <=> $num1;   //quale dei due numeri è piu grande
// 0 uguali





















<?php
function average(int $a, int $b, int $c): float{
	return ($a + $b + $c)/3;
}

echo average(10, 20, 30);


echo "\n";

$myvar = 50;

function printmyvar():void{
	global $myvar;
	echo $myvar;
}

printmyvar();

echo "\n";

$a=10;
$b=20;

function mysum(int $a, int $b): float{  //argomenti passati per valore
	$a*=10;
	$b*=10;
	
	return $a + $b;
}

echo mysum($a, $b);
echo "\n";
echo $a."\n".$b;



echo "\n";
echo "MySum2"."\n";

$c=10;
$d=20;

function mysum2(int &$c, int &$d): float{  //argomenti passati per ref
	$c*=10;
	$d*=10;
	
	return $c + $d;
}

echo mysum2($c, $d);
echo "\n";
echo $c."\n".$d;


echo "\n";
echo "Array passati per valore di default"."\n";


$array = [1, 2, 3, 4, 5];
// Funzione che stampa un array
function averagearray($array): int {
	$avg = 0;
	for($i=0; $i<count($array); $i++)
	{
		$array[$i]*=10;
		$avg += $array[$i];
	}
	return $avg/count($array);
}

echo averagearray($array); 
echo "\n";
var_dump($array);





function average2(int $a, int $b, int $c=30): float{
	return ($a + $b + $c)/3;
}

echo average2(10, 20);


echo "\n";


function add(int $a, int $b): int{
	return $a + $b;
}


function mul(int $a, int $b): int{
	return $a * $b;
}

$random = mt_rand(0,1);
if($random == 0)
{
	$function = 'add';
}
else
{
	$function = 'mul';
}

echo $function(10,5);

echo "\n";

function filter($min, $a, $b, $func):void{
	if($func($a, $b) > 30)
	{
		echo 'valore: '.$func($a, $b);
	}
	else
	{
		echo 'valore non trovato';
	}
	
}
$a = 5;
$b = 10;

filter(10, $a, $b, $function);




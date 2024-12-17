<?php
function average($a, $b, $c)
{
    return ($a + $b + $c) / 3;
}

//echo average(10, 20, 30);


function average2(int $a, int $b, int $c)
{
    return ($a + $b + $c) / 3;
}

//echo average2(10.8, 20.8, 30.8);



function average3(int|float $a, int|float $b, int|float $c):int|string|float
{
    if($a>0 && $b>0 && $c>0)
        return ($a + $b + $c) / 3;
    else
        return "NON RIESCO A FARLO";
}

echo average3(-10, 35, 47);
echo '<br>';
echo average3(10, 35, 47);


echo '<br>';
function average4(?float $a, float $b, float $c):int|string|float
{
    if($a>0 && $b>0 && $c>0)
        return ($a + $b + $c) / 3;
    else
        return "NON RIESCO A FARLO";
}

echo average4(null, 35, 47);
<?php
echo "WORLD \n";

$boolen = true;
$boolen = false;

$int = 2;
$int1 = 12;

$float = 1.0987;
$float = 292.2222;
$float = 6353.0393;

unset($float);

//var_dump($float);
var_dump($int1);

$sum = 1+1;
$res = 1-10;
$div = 2/4;
$mult = 3*6;

var_dump($res);
var_dump($div);


$num = 0;
$num += 1;
echo $num++;
echo ++$num;

$num -= 2;
//$num /= $float;

//string
$num = 5;
$varString = '$num \n';
echo $varString;
$varString = "el valor de la variable es = $num \n";
echo $varString;

$otroString = "otra forma de imprimir una variable {$num}";
echo $otroString;
$otroString = "otra forma de imprimir una variable $${num}";
echo $otroString;

//multi string
$multiString = <<<'END'
HOLA ESTE ES UN CURSO DE PHP NTERMEDIO
STRING 
END;

echo $multiString;
echo 'este es un'.'String';
echo 'multiple','parametros','en el echo';

//constantes
define("_FOO", "HOLA");
echo _FOO;


?>
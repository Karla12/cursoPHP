<?php
//Algunas funciones
//explode
$str = "HOLA MUNDO, AÚN SIGUE NEVANDO";
print_r( explode(" ", $str));

//money_format
echo "$".money_format("%i", 10000.2);

//str_replace
$voales = array("a", "e", "i", "o", "u");
$soloConsonates = str_replace($voales, "a", "Hola mundo");
echo $soloConsonates."\n";
echo "\n";

//hash 

//md5
$str = 'apple';
if (md5($str) == '1f3870be274f6c49b3e31a0c6728957f' ) {
	echo "BIEN EMCRIPTADO";
	echo "\n";
} else{
	echo "MALD ENCRIPTADO";
	echo "\n";
}

//trim
$str = "    prueba de string con espacios        ccc  c c ";
echo trim($str);
echo "\n";

$str = "HOLA MUNDO";
$trimmed = trim($str,"HdMrO");
echo $trimmed;
echo "\n";
?>
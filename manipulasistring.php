<?php

$name = " jhelky Walliya";

echo "Name :";
echo $name;
echo "\n";



/*cara cepat dalam String manipulasih ketikan dengan Tulisan Awal */

echo "Nama :" . $name . PHP_EOL;
echo "Value :" . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);




/*String jika salah dalam akan menjadi sesui value */
echo "Nama :" . $name . PHP_EOL;
echo "Value :" . 100 . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"salah";
var_dump($valueInt);

$valueFloat = (float)"salah";
var_dump($valueFloat);

<?php
/**/
function Hallojhelky($name)
{
                    echo " Hallo $name " . PHP_EOL;
}
Hallojhelky("jhelky");
Hallojhelky("Natlia");
Hallojhelky("Ocha");

/*AnonYMOUSE adala diFault Vaule jika kita tidak argument maka akan tampil output ANINYMOUSE*/
function Hallo($name = "Anonymouse")
{
                    echo " Hallo $name " . PHP_EOL;
}
Hallo("Hallo");
Hallo("Hallo");
Hallo();
Hallo();

function sum(int $first, int $last)
{
                    $total = $first + $last;
                    echo "Total $first + $last = $total" . PHP_EOL;
}
/*tipe data Array*/
sum(100, 100);

/*tipe data string*/
sum("100", " 100");

/*tipe data Bolean*/
sum(true, false);

/*tipe data string tidak bisah dan jagan di gunakan*/
sum([], []);


function Hayjhelky($firstName, $lastName = "")
{
                    echo "jhelky $firstName  $lastName" . PHP_EOL;
}

Hayjhelky("jhelky");
Hayjhelky("Walliya");
Hayjhelky("jhelky", "Buru Buru");

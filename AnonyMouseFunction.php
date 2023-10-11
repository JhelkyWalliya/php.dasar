<?php

$Hayjhelky = function (string $name) {
                    echo "Hay $name" . PHP_EOL;
};

$Hayjhelky("Jhelky");
$Hayjhelky("Walliya");


function seyGoodBye(string $name, $filter)
{
                    $Finalname = $filter($name);
                    echo "Cood Bye" . PHP_EOL;
}

seyGoodBye("jhelky", function (string $name): string {
                    return strtoupper($name);
});

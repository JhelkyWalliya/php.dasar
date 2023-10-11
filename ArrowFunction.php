<?php

$firstName = "jhelky";
$lastName = "Walliya";

$anonymousFunction = function () use ($firstName, $lastName): string {
                    return "Hallo $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn () => "Hallo $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();

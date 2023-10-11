<?php

function Hayjhelky(string $name, callable $filter)
{
                    $finalName = call_user_func($filter, $name);
                    echo "Hay $finalName" . PHP_EOL;
}

Hayjhelky("jhelky ", "strtoupper");
Hayjhelky("jhelky ", "strtolower");
Hayjhelky("jhelky", function (string $name): string {
                    return strtoupper($name);
});

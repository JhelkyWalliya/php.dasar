<?php
$Data = [
                    "action" => null

];

if (isset($data["action"])) {
                    $action = $data["action"];
} else {
                    $action = "Nothing";
}
echo $action . PHP_EOL;

/* cara penulisan paling simpel*/

$Data = [];
$action = $data['action'] ??  'Nothing';

echo $action;

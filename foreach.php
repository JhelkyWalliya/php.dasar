<?php
/*Perulangan mengunakan for luping biasa array tidak disarankan pake/
$names = ["jhelky", "walliya", "buru-buru"];

for ($i = 0; $i < count($names); $i++) {
                    echo "data ke $i = $names[$i]" . PHP_EOL;
}

/*Perulangan mengunakan forEach cara cepat melakukang perunlanagan data array*/
$names = ["jhelky", "Walliya", "Orang Braszil"];
foreach ($names as $name) {
                    echo "Data $name" . PHP_EOL;
}

$names = ["jhelky", "Walliya", "Orang Papua"];

foreach ($names as $index => $name) {

                    echo "Data ke $index = $name" . PHP_EOL;
}
$persons = [
                    "first_name" => "jhelky",
                    "middle_name" => "Walliya",
                    "lest_name"  => "Lani",
];

foreach ($names as $key => $value) {
                    echo "$key : $value" . PHP_EOL;
}

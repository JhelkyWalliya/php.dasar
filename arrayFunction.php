<?php
/*penulisan manual*/
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$mapFunction = fn (int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);


//penulisan cara simple
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$dataResult = array_map(fn (int $value) => $value * 10, $data);
var_dump($dataResult);

//memasukan dara dari akhir ke awal descending
rsort($data);
var_dump($data);

// array KEYS mengambil index mulai dari nol sedangkan Value mengambil dari 10
var_dump(array_keys($data));
var_dump(array_values($data));

//dari kita bisah membedakan anatara INDEX DAN VALUEnya
$person = [
                    "first_name" => "jhelky",
                    "last_name" =>  "Walliya"
];

var_dump(array_keys($person));
var_dump(array_values($person));

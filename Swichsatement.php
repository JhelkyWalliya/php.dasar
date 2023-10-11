<?php

$nilai = "A";
if ($nilai == "A") {
                    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C") {
                    echo "Anda Lulus" . PHP_EOL;
} else if ($nilai == "D") {
                    echo "Anda Tidak Lulus" . PHP_EOL;
} else {
                    echo "Mugkin anda salah Jurusan" . PHP_EOL;
}

/* cara memberikan nilai dengan berbeda*/

switch ($nilai) {
                    case "B":
                                        echo "Anda lulus dengan sangat bail" . PHP_EOL;
                                        break;
                    case "B":
                    case "C":
                                        echo "Anda Lulus" . PHP_EOL;
                                        break;

                    case "D":
                                        echo "Maaf anda Tidak Lulus" . PHP_EOL;
                                        break;


                    default:
                                        echo "Mungkin Anda Sala jurusan" . PHP_EOL;
}

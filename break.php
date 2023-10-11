<?php
/*Break adalah bahasa pemrograman PHP yang Terus Berulang Kali.

jika untuk menghentikan kita masukan kondisi if berapa angka if 
harus berhenti  dan kita masukan kondisi contoh sampe 10 lalu 
program berhenti
*/
$counter = 1;

while (true) {
                    echo "ini adalah for while ke-$counter" . PHP_EOL;
                    $counter++;

                    if ($counter > 10) {
                                        break;
                    }
}

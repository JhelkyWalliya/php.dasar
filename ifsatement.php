<?php
/*php ifsatement.php cara memberikan inputan sesui kondisi dan ini adalah 1 kondisi*/

$nilai = 70;
$apsen = 90;

if ($nilai >= 75 &&  $apsen >= 75) {

                    echo "Selamat Anda Lulus" . PHP_EOL;
} else {
                    echo "Anda Tidak Lulus" . PHP_EOL;
}




/*elseif atau else if bisah lebih dari 1 kondisi pada php*/

$Nilai = 90;
$Absen = 80;

if ($Nilai >=                                                80 &&  $Absen >= 80) {
                    echo "Nilai anda A" . PHP_EOL;
} else if ($Nilai >=                                         70 && $Absen >= 70) {
                    echo "Nilai anda B" . PHP_EOL;
} else if ($Nilai >=                                         60 && $Absen >= 60) {
                    echo "Nilai anda C" . PHP_EOL;
} else if ($Nilai >=                                         50 && $Absen >= 50) {
                    echo "Nilai Anda D" . PHP_EOL;
} else {
                    echo "Nilai Anda E" . PHP_EOL;
}

/*elseif atau else if bisah lebih dari 1 kondisi pada php mengunakan TITIK :*/
$Nilai = 90;
$Absen = 80;

if ($Nilai >=                                              80 &&  $Absen >= 80) :
                    echo "Nilai anda A" . PHP_EOL;
elseif ($Nilai >=                                         70 && $Absen >= 70) :
                    echo "Nilai anda B" . PHP_EOL;
elseif ($Nilai >=                                         60 && $Absen >= 60) :
                    echo "Nilai anda C" . PHP_EOL;
elseif ($Nilai >=                                         50 && $Absen >= 50) :
                    echo "Nilai Anda D" . PHP_EOL;
else :
                    echo "Nilai Anda E" . PHP_EOL;
endif;

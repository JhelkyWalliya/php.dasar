<?php

/* for adalah salah 1 kondisi untuk melakukang Perulangan selama kondisi masih true*/

$counter = 1;

for (; $counter <= 10;) {
                    echo " Ini adalah For Loop ke-$counter" . PHP_EOL;
                    $counter++;
}

/* penulisan simperl for */
for ($counter = 7; $counter <= 18;) {
                    echo "Ini adalah Loop Ke-$counter" . PHP_EOL;
                    $counter++;
}

/*pos stetment jika hasil run pun juga sama cuman bedah di penulisan code*/
for ($counter = 7; $counter <= 18; $counter++) {
                    echo "Ini adalah Loop Ke-$counter" . PHP_EOL;
}

<?php
$counter = 1;

while ($counter <= 10) {
                    echo " Ini adalah while Loop ke-$counter" . PHP_EOL;
                    $counter++;
}

/*sintaks alternatif*/
$counter = 1;

while ($counter <= 10) :
                    echo " Ini adalah while Loop ke-$counter" . PHP_EOL;
                    $counter++;
endwhile;

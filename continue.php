<?php
/*continie dalah menapilakan bilanggan bulat untuk cek kalo bilanggan ganjil
if ($counter % 2 == 0) {continue; sehingga keluar otput */

for ($counter = 1; $counter < 100; $counter++) {

                    if ($counter % 2 == 0) {
                                        continue;
                    }
                    echo "counter : $counter " . PHP_EOL;
}

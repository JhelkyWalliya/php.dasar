<?php
/*Oprator penugasan pada php */
/*Oprator penugasan  */
$total = 0;

$fruit = 50000;
$chicken = 40000;
$orangeJuice = 450000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;

 var_dump($total);


 /*cara penulisan panjang namun hasil sama*/
 $total = 0;

$fruit = 50000;
$chicken = 40000;
$orangeJuice = 450000;

$total = $total +$fruit;
$total = $total +$chicken;
$total = $total +$orangeJuice;

 var_dump($total);
?>
?>
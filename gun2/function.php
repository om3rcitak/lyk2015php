<meta charset="UTF-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 09.08.2015
 * Time: 14:27
 */

$toplamcarpim = 0;
/* array ile döndürme
function toplacarp($sayi1, $sayi2){
    $toplam = $sayi1 + $sayi2;
    $carpim = $sayi1 * $sayi2;
    $return = [$toplam, $carpim];
    return $return;
}
*/
function toplacarp($sayi1, $sayi2){
    $toplam = $sayi1 + $sayi2;
    $carpim = $sayi1 * $sayi2;
    $return = $toplam."-".$carpim;
    return $return;
}

$yenisonuc = explode("-",toplacarp(4,6));

print_r($yenisonuc);
<?php
function kisiListesiBas($kisiler, $listfunc = NULL){
    $izinVerilenFonksiyonlar = array('asort', 'arsort', 'ksort', 'krsort');
    if( ! is_null($listfunc) and in_array($listfunc, $izinVerilenFonksiyonlar)) $listfunc($kisiler);

    foreach($kisiler as $isim => $yas){
        echo $isim . ' -> ' . $yas . '<br>';
    }
}

$kisiler = [
    "ahmet" => 21,
    "mehmet" => 35,
    "ali" => 16,
    "veli" => 18,
    "zeki" => 17
];

echo "<pre>";
echo "Ham Hali<br>";
kisiListesiBas($kisiler, 'print_r');
// diziyi yaşa göre artan sıralama
echo "<hr>Yas Artan<br>";
//asort($kisiler);
kisiListesiBas($kisiler, 'asort');
// diziyi yaşa göre azalan sıralama
echo "<hr>Yas Azalan<br>";
//arsort($kisiler);
kisiListesiBas($kisiler, 'arsort');
// diziyi isme göre artan sıralama
echo "<hr>Isim Artan<br>";
//ksort($kisiler);
kisiListesiBas($kisiler, 'ksort');
// diziyi isme göre azalan sıralama
echo "<hr>Isim Azalan<br>";
//krsort($kisiler);
kisiListesiBas($kisiler, 'krsort');
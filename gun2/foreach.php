<meta charset="UTF-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 09.08.2015
 * Time: 11:48
 */

$a = ["1. eleman", "2. eleman", "3.eleman"];

$bilgiler = array(
    array("ad" => "ömer",
        "soyad" => "çıtak",
        "yas" => 22),
    array("ad" => "sezer",
        "soyad" => "bozkır",
        "yas" => 22),
);

foreach($bilgiler AS $k => $v){
    foreach($v as $kk => $vv){
        echo " $vv <br />";
    }
    echo "<hr />";
}

/*
for($i=0; $i<count($a); $i++){
    echo $a[$i] . "<br />";
}

foreach($a AS $k => $v){
    echo "dizinin $k . elemanının değeri $v dir <br />";
}
*/
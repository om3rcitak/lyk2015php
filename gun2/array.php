<meta charset="UTF-8"/>
<?php
$a = "z";
echo ++$a;
echo "<br />";
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 09.08.2015
 * Time: 11:48
 */

$bilgiler = array(
    array("ad" => array("mehmet", "uğur"),
          "soyad" => "arıcı",
          "yas" => 22)
);

echo count($bilgiler);

$encode = json_encode($bilgiler);

print_r($bilgiler);
echo "<hr />";
echo $encode;
echo "<hr />";
print_r(json_decode($encode, true));

/*
echo $bilgiler[1]["ad"];

echo "<pre>";
var_dump($bilgiler);
echo "</pre>";
*/
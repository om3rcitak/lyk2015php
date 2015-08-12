<meta charset="UTF-8" />
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 11.08.2015
 * Time: 17:07
 */
require('veriler.php');

die($_POST['gizli']);

echo "senin adın " . $_POST["ad"] . "<br />";
echo "senin soyadın " . $_POST["soyad"] . "<br />";
echo "senin doğum tarihin " . $_POST["dogumtarih"] . "<br />";
echo "senin cinsiyetin " . $_POST["cinsiyet"] . "<br />";
echo "senin üniversiten " . $uniler[$_POST["okul"]] . "<br />";
echo "senin hobilerin ; <br />";
foreach($_POST["hobi"] AS $hobi){
    echo $hobiler[$hobi]. "<br />";
}
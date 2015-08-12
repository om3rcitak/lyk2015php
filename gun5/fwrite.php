<meta charset="UTF-8" />
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 12.08.2015
 * Time: 19:31
 */

$isimler = [
    "ahmet",
    "mermet",
    "ali",
    "veli",
    "ömer"
];

$json = json_encode($isimler);

$dosya = "omer.txt";

// dosya varsa aç
if(file_exists($dosya)){
    // işlemler
    echo "dosya var. silmek için tıklayın";
}else{
    // yoksa oluştur
    touch($dosya);
    $open = fopen($dosya, "w");
    fwrite($open, $json);
    fclose($open);
    echo "<br />";
    echo "<a href='fread.php'>dosyayı oku</a>";
}
<meta charset="UTF-8" />
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 12.08.2015
 * Time: 19:54
 */

$dosya = "omer.txt";

if(file_exists($dosya)){
    // dosya varsa oku
    $open = fopen($dosya, "r"); // sadece oku r
    $oku = fread($open, filesize($dosya));
    fclose($open);
    // json decode işlemi gerçekleştir
    $dizi = json_decode($oku);
    // diziye yeni eleman ekle
    $dizi[] = "ozan";
    // deneme amaçlı diziyi ekrana bas
    var_dump($dizi);
    // diziyi json formatına çevir
    $json = json_encode($dizi);
    // yeni dizimizi dosyanın üzerine yaz
    $open = fopen($dosya, "w");
    fwrite($open, $json);
    fclose($open);
}else{
    echo "dosya yok. ilk önce oluşturmanız lazım.";
    echo "<br />";
    echo "<a href='fwrite.php'>dosyayı oluştur</a>";
}
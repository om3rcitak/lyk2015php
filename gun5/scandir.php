<meta charset="UTF-8"/>
<?php

// izin verilen dosya uzantıları
$izin_verilenler = ["jpg","jpeg","png","gif","txt"];

// getten gelen dizin boş ise bulunduğum dizini, boş değil ise istenilen dizini göster
if (isset($_GET["dizin"])) {
    $dizin = $_GET["dizin"];
} else {
    $dizin = "./";
}

// eğer dosya yükleme yerinden bana bir dosya geliyor ise
if(isset($_FILES["dosya"]["tmp_name"])){

    // gelen dosyaları bir döngüye al
    foreach($_FILES["dosya"]["tmp_name"] AS $k => $v){
        $ad = $_FILES["dosya"]["name"][$k]; // dosyanın adı

        // dosyayı istediğim dizine kopyala
        $yukle = copy($v, $dizin.$ad);
        // yüklenip yüklenemediğini kontrol et
        if($yukle){
            echo $ad . " başarıyla yüklendi <br />";
        }else {
            echo $ad . " yüklenirken bir hata oluştu <br />";
        }
        $bilgi = pathinfo($dizin.$ad);
        if( ! in_array($bilgi["extension"], $izin_verilenler)){
            unlink($dizin.$ad);
            echo "kardeş güvenlik devrede. $ad dosyanı sildik. <br />";
        }
    }
}

if (file_exists($dizin)) {
    $oku = scandir($dizin);
    foreach ($oku as $k => $v) {
        if (is_file($dizin . $v)) {
            echo "dosya - " . $v;

        } else {
            echo "dizin - ";
            echo '<a href="?dizin=' . $dizin . $v . '/"> ' . $v . ' </a>';
        }
        echo "<br />";
    }
} else {
    echo "böyle bir dosya yada dizin yok";
}
?>

<br />
<br />

<form action="?dizin=<?=$dizin?>" method="post" enctype="multipart/form-data">
    <input type="file" name="dosya[]" multiple/>
    <input type="submit" value="Yükle" />
</form>
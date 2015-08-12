<meta charset="UTF-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 09.08.2015
 * Time: 15:05
 */

$user = "admin";
$pass = "12345";

if(isset($_GET["islem"])){
    unset($_COOKIE["kullanici"]);
    setcookie("kullanici", "", time()-3600);

}

if(isset($_POST["ad"])){
    if(empty($_POST["ad"]) OR empty($_POST["sifre"])){
        echo "kullnıcı adın veya şifren boş. doldurda gel";
    }else{
        if($_POST["ad"]==$user && $_POST["sifre"]==$pass){
            setcookie("kullanici", $_POST["ad"]);
        }else{
            echo "şifre veya user yanlış kardeş";
        }
    }
}

if(isset($_COOKIE["kullanici"])){
    echo "hoşgeldiniz sayın " . $_COOKIE["kullanici"];
    echo ' <a href="?islem=cikisyap">çıkıp yap</a>';
}else{
    echo '
    <form action="cookie.php" method="post">
        <input type="text" name="ad" />
        <input type="password" name="sifre" />
        <input type="submit" value="Gönder" />
    </form>
    ';
}
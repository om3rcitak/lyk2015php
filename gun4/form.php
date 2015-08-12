<!doctype html/>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Kayıt Formu</title>
</head>
<body>

<form action="kontrol.php" method="post">

    <input type="hidden" value="heyüüüü" name="gizli" />
Adınız : <input type="text" name="ad" /><br />
Soyadınız : <input type="text" name="soyad"><br/>
Şifreniz : <input type="password" name="sifre"><br/>
Doğum Tarihiniz : <input type="date" name="dogumtarih"><br />
Cinsiyet :

<input type="radio" name="cinsiyet" value="kadin" id="kadin" />
    <label for="kadin">Kadın</label>
<input type="radio" name="cinsiyet" value="erkek" id="erkek" />
    <label for="erkek">Erkek</label>

    <br />
    <br />
    Okul :

    <?php
    include("veriler.php");
    ?>

    <select name="okul">
        <?php
        foreach($uniler AS $k => $v){
            echo "<option value='$k'>$v</option>";
        }
        ?>
    </select>

    <br />

    <?php
    foreach ($hobiler as $k => $v) {
echo "<input type='checkbox' name='hobi[]' value='$k'> $v <br />";
    }
    ?>

    <input type="submit" />

</form>

</body>
</html>
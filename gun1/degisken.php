<meta charset="utf-8" />
<?php

$sayi1 = 5;
$sayi2 = 3;

// echo gettype($sayi1); // değişkenin tipini öğrenme
// settype($sayi1, "string"); // değişkenin tipini değiştirme
// $sayi1 = (string) $sayi1; // değişkenin tipini dğeiştirme

// echo $sayi1 + $sayi2;
// echo $sayi1 - $sayi2;
// echo $sayi1 * $sayi2;

// echo floor($sayi1 / $sayi2); // aşağı yuvarlama
// echo ceil($sayi1 / $sayi2); // yukarı yuvarlama

// echo $sayi1 % $sayi2;


// variable variables

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

$a; //Returns Hello
$$a; //Returns World
$$$a; //Returns Foo
$$$$a; //Returns Bar
$$$$$a; //Returns a

$$$$$$a; //Returns Hello
$$$$$$$a; //Returns World


?>
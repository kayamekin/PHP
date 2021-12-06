<?php

$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$parola = $_POST['parola'];
$parola2 = $_POST['parola2'];
$parolaMd5 = md5($parola);
$sehir = $_POST['sehir'];
$cinsiyet = $_POST["cinsiyet"];

if ($ad == "" || $soyad == "" || $parola == "" || $parola2 == "" || $cinsiyet == "") {
    echo "lütfen boş alan bırakmayınız";
} else if ($parola != $parola2) {
    echo "parolalar eşleşmiyor tekrar deneyin";
} 
else {
    echo "adınız: " . $ad . "<br>";
    echo "soyad: " . $soyad . "<br>";
    echo "sifre: " . $parola . "<br>";
    echo "sifre md5 ile : " . $parolaMd5 . "<br>";
    echo "seçilen şehir: " . $sehir . "<br>";
    echo "cinsiyet : " . $cinsiyet . "<br>";
}

<?php 
for($i = 0; $i < count($_FILES['files']['size']); $i++){
     $dosyaUz = getimagesize($_FILES['files']['tmp_name'][$i]);
     $uzanti = explode("/",$dosyaUz['mime']);
     $imageName = md5(rand(0,999));
     $imageName .= ".$uzanti[1]";
     
     if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$imageName)){
         echo $imageName. " resminiz başarılı bir biçimde yüklendi<br>";
     }else{
         echo $imageName. " YÜKLENEMEDİ!!! <br>";
     }
}



?>
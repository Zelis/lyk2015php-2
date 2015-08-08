<meta charset = "utf-8">
<?php
      echo "merhaba PHP"; // ekrana yazı basma
      $a = 22; //değişken oluşturma
      echo  gettype($a);
      settype($a, "string"); // 1. parametre türü değiştirilecek değişken 2. ise hangi türe dönüştürülecegi
      echo  gettype($a); //istenilen değişkenin türünü döndürür.
      $sayi1 = 8;
      $sayi2 = 5;
/*ARİTMETİKSEL İŞLEMLER*/
    echo $sayi1 - $sayi2."<br/>";
    echo $sayi1 * $sayi2."<br/>";
    echo floor($sayi1 / $sayi2)."<br/>"; //çıkan sonucuasaği yuvarlar
    echo ceil($sayi1 / $sayi2)."<br/>"; // çıkan sonucuyukarı yuvarlar
    echo $sayi1 % $sayi2."<br/>";


    //echo "adasd";
?>
aaaa

<?php 
# associative arrays
# key-value => 41: kocaeli, istanbul:34 istanbul

$plakalar=array("41","34");
$sehirler=array("kocaeli","istanbul");
echo "$plakalar[0] $sehirler[0]<br>";
echo "$plakalar[1] $sehirler[1]<br>";

$plaka_bilgileri=array("41"=> "kocaeli" , "34" => "istanbul");

$plaka_bilgileri["41"]."<br>";
$plaka_bilgileri["34"]."<br>";

$plaka_bilgileri["52"]="ordu";
echo $plaka_bilgileri["52"]."<br>";

$ogrenciA= array("ali korkmaz", array(60,50,80));
$ogrenciB= array("mehmet ali", array(70,80,90));
echo $ogrenciA[0]."<br>";
echo $ogrenciA[1][0]."<br>";

$ortalamaA=($ogrenciA[1][0]+ $ogrenciA[1][1]+ $ogrenciA[1][2])/3;
$ortalamaB=($ogrenciB[1][0]+ $ogrenciB[1][1]+ $ogrenciB[1][2])/3;
echo "$ogrenciA[0] isimli öğrencinin ortalaması: ".$ortalamaA;
echo "<br>";
echo "$ogrenciB[0] isimli öğrencinin ortalaması: ".$ortalamaB;
 $ogrenciC = array(
                    "100" => array(
                        "ad"=>"Ahmet",
                        "soyad"=>"Yılmaz",
                        "matematik"=> array(60,70,90),
                        "fizik"=> array(60,80,90)
                    ),
                    "101" => array(
                        "ad"=>"Ayşe",
                        "soyad"=>"Yılmaz",
                        "matematik"=> array(60,70,90),
                        "fizik"=> array(60,70,90)
                    ),
                    "102" => array(
                        "ad"=>"Ali",
                        "soyad"=>"Yılmaz",
                        "matematik"=> array(60,70,90),
                        "fizik"=> array(60,70,90)
                    ),
                );

    echo "<br>";

    echo $ogrenciC["100"]["ad"];
    echo $ogrenciC["101"]["ad"];

    echo "<br>";

    echo ($ogrenciC["100"]["fizik"][0] + $ogrenciC["100"]["fizik"][1] + $ogrenciC["100"]["fizik"][2])/3;
?>
 
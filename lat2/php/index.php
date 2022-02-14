<?php

include "timsepakbola.php";

$timsepakbola1 = new DaftarTimSepakbola();
$timsepakbola1->setNamaTim("Persebaya");
$timsepakbola1->setAsalNegara("Indonesia");
$timsepakbola1->setTahunTim(1927);
$timsepakbola1->setNamaPemain("Ernando Ari");
$timsepakbola1->setNomorPemain(1);
$timsepakbola1->setPosisi("Goal Keeper");

$timsepakbola2 = new DaftarTimSepakbola();
$timsepakbola2->setNamaTim("Bali United");
$timsepakbola2->setAsalNegara("Indonesia");
$timsepakbola2->setTahunTim(1989);
$timsepakbola2->setNamaPemain("Nadeo Argawinata");
$timsepakbola2->setNomorPemain(23);
$timsepakbola2->setPosisi("Goal Keeper");

$timsepakbola3 = new DaftarTimSepakbola("Borneo FC", "Indonesia", 2014, "Marckho Sandy", 2, "Defender");


echo "Daftar Tim Sepakbola"."<br>";
echo "<br>";
echo "1". "<br>";
echo "Nama Tim			: ". $timsepakbola1->getNamaTim() ."<br>";
echo "Asal Negara 		: ". $timsepakbola1->getAsalNegara() ."<br>";
echo "Tahun Berdiri Tim : ". $timsepakbola1->getTahunTim() ."<br>";
echo "Nama Pemain 		: ".$timsepakbola1->getNamaPemain() ."<br>";
echo "Nomor Pemain 		: ". $timsepakbola1->getNomorPemain() ."<br>";
echo "Posisi 			: ". $timsepakbola1->getPosisi() . "<br>";

echo "<br>";
echo "2". "<br>";
echo "Nama Tim			: ". $timsepakbola2->getNamaTim() ."<br>";
echo "Asal Negara 		: ". $timsepakbola2->getAsalNegara() ."<br>";
echo "Tahun Berdiri Tim : ". $timsepakbola2->getTahunTim() ."<br>";
echo "Nama Pemain 		: ".$timsepakbola2->getNamaPemain() ."<br>";
echo "Nomor Pemain 		: ". $timsepakbola2->getNomorPemain() ."<br>";
echo "Posisi 			: ". $timsepakbola2->getPosisi() . "<br>";

echo "<br>";
echo "3". "<br>";
echo "Nama Tim			: ". $timsepakbola3->getNamaTim() ."<br>";
echo "Asal Negara 		: ". $timsepakbola3->getAsalNegara() ."<br>";
echo "Tahun Berdiri Tim : ". $timsepakbola3->getTahunTim() ."<br>";
echo "Nama Pemain 		: ".$timsepakbola3->getNamaPemain() ."<br>";
echo "Nomor Pemain 		: ". $timsepakbola3->getNomorPemain() ."<br>";
echo "Posisi 			: ". $timsepakbola3->getPosisi() . "<br>";



?>
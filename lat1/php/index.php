<?php

include "daftarmhs.php";

$mahasiswa1 = new DaftarMhs();
$mahasiswa1->setNim(2000793);
$mahasiswa1->setNama("Deva Shofa Al Fathin");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

$mahasiswa2 = new DaftarMhs();
$mahasiswa2->setNim(2020202);
$mahasiswa2->setNama("Shirra");
$mahasiswa2->setProdi("Ilmu Komputer");
$mahasiswa2->setSemester(4);

echo "Daftar Mahasiswa"."<br>";
echo "<br>";
echo "1". "<br>";
echo "NIM 	: ". $mahasiswa1->getNim() ."<br>";
echo "Nama 	: ". $mahasiswa1->getNama() ."<br>";
echo "Prodi : ". $mahasiswa1->getProdi() ."<br>";
echo "Semester : ".$mahasiswa1->getSemester() ."<br>";
echo "<br>";


echo "2". "<br>";
echo "NIM 	: ". $mahasiswa2->getNim() ."<br>";
echo "Nama 	: ". $mahasiswa2->getNama() ."<br>";
echo "Prodi : ". $mahasiswa2->getProdi() ."<br>";
echo "Semester : ".$mahasiswa2->getSemester() ."<br>";

?>
from timsepakbola import DaftarTimSepakbola

# menggunakan setter
sepakbola1 = DaftarTimSepakbola()
sepakbola1.setNamaTim("Persebaya");
sepakbola1.setAsalNegara("Indonesia");
sepakbola1.setTahunTim(1927);
sepakbola1.setNamaPemain("Ernando Ari");
sepakbola1.setNomorPemain(1);
sepakbola1.setPosisi("Goal Keeper");

sepakbola2 = DaftarTimSepakbola()
sepakbola2.setNamaTim("Bali United");
sepakbola2.setAsalNegara("Indonesia");
sepakbola2.setTahunTim(1989);
sepakbola2.setNamaPemain("Nadeo Argawinata");
sepakbola2.setNomorPemain(23);
sepakbola2.setPosisi("Goal Keeper");

# menggunakan constructor
sepakbola3 = DaftarTimSepakbola("Borneo FC", "Indonesia", 2014, "Marckho Sandy", 2, "Defender")

# tampilkan daftar tim sepakbola ke layar
# tim sepakbola 1
print("Daftar Tim sepakbola")
print(" ")
print("1")
print("Nama Tim : " + str(sepakbola1.getNamaTim()))
print("Asal Negara : " + str(sepakbola1.getAsalNegara()))
print("Tahun Berdiri Tim : " + str(sepakbola1.getTahunTim()))
print("Nama Pemain : " + str(sepakbola1.getNamaPemain()))
print("Nomor Pemain : " + str(sepakbola1.getNomorPemain()))
print("Posisi : " + str(sepakbola1.getPosisi()))

# tim sepakbola 2
print(" ")
print("2")
print("Nama Tim : " + str(sepakbola2.getNamaTim()))
print("Asal Negara : " + str(sepakbola2.getAsalNegara()))
print("Tahun Berdiri Tim : " + str(sepakbola2.getTahunTim()))
print("Nama Pemain : " + str(sepakbola2.getNamaPemain()))
print("Nomor Pemain : " + str(sepakbola2.getNomorPemain()))
print("Posisi : " + str(sepakbola2.getPosisi()))

# tim sepakbola 3
print(" ")
print("3")
print("Nama Tim : " + str(sepakbola3.getNamaTim()))
print("Asal Negara : " + str(sepakbola3.getAsalNegara()))
print("Tahun Berdiri Tim : " + str(sepakbola3.getTahunTim()))
print("Nama Pemain : " + str(sepakbola3.getNamaPemain()))
print("Nomor Pemain : " + str(sepakbola3.getNomorPemain()))
print("Posisi : " + str(sepakbola3.getPosisi()))
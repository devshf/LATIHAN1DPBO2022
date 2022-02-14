class DaftarTimSepakbola():

	#private members 
	__namaTim = "";
	__asalNegara = "";
	__tahunTim = 0;
	__namaPemain = "";
	__nomorPemain = 0;
	__posisi = "";

	def __init__(self, namaTim = "", asalNegara = "", tahunTim = 0, namaPemain = "", nomorPemain = 0, posisi = ""):
		self.__namaTim = namaTim
		self.__asalNegara = asalNegara
		self.__tahunTim = tahunTim
		self.__namaPemain = namaPemain
		self.__nomorPemain = nomorPemain
		self.__posisi = posisi

	def setNamaTim(self, namaTim):
		self.__namaTim = namaTim
	def getNamaTim(self):
		return self.__namaTim

	def setAsalNegara(self, asalNegara):
		self.__asalNegara = asalNegara
	def getAsalNegara(self):
		return self.__asalNegara

	def setTahunTim(self, tahunTim):
		self.__tahunTim = tahunTim
	def getTahunTim(self):
		return self.__tahunTim

	def setNamaPemain(self, namaPemain):
		self.__namaPemain = namaPemain
	def getNamaPemain(self):
		return self.__namaPemain

	def setNomorPemain(self, nomorPemain):
		self.__nomorPemain = nomorPemain
	def getNomorPemain(self):
		return self.__nomorPemain

	def setPosisi(self, posisi):
		self.__posisi = posisi
	def getPosisi(self):
		return self.__posisi


	
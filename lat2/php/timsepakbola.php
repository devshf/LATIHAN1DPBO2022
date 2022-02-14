<?php

// membuat kelas untuk daftar tim sepakbola 
class DaftarTimSepakbola{

	private $namaTim = "";
	private $asalNegara = "";
	private $tahunTim = 0;
	private $namaPemain = "";
	private $nomorPemain = 0;
	private $posisi = "";


	public function __construct($namaTim= "", $asalNegara = "", $tahunTim = 0, $namaPemain = "", $nomorPemain = 0, $posisi = ""){
		$this->namaTim = $namaTim;
		$this->asalNegara = $asalNegara;
		$this->tahunTim = $tahunTim;
		$this->namaPemain = $namaPemain;
		$this->nomorPemain = $nomorPemain;
		$this->posisi = $posisi;
	}

	// set dan get dari private

	public function setNamaTim($namaTim){
		$this->namaTim = $namaTim;
	}
	public function setAsalNegara($asalNegara){
		$this->asalNegara = $asalNegara;
	}
	public function setTahunTim($tahunTim){
		$this->tahunTim = $tahunTim;
	}
	public function setNamaPemain($namaPemain){
		$this->namaPemain = $namaPemain;
	}
	public function setNomorPemain($nomorPemain){
		$this->nomorPemain = $nomorPemain;
	}
	public function setPosisi($posisi){
		$this->posisi = $posisi;
	}

	public function getNamaTim(){
		return $this->namaTim;
	}
	public function getAsalNegara(){
		return $this->asalNegara;
	}
	public function getTahunTim(){
		return $this->tahunTim;
	}
	public function getNamaPemain(){
		return $this->namaPemain;
	}
	public function getNomorPemain(){
		return $this->nomorPemain;
	}
	public function getPosisi(){
		return $this->posisi;
	}

}

?>
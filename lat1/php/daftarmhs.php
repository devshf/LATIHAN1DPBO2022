<?php

// membuat kelas untuk daftar mahasiswa  
class DaftarMhs{

	private $nim = 0;
	private $nama = "";
	private $prodi = "";
	private $semester = 0;

	public function __construct($nim = 0, $nama = "", $prodi = "", $semester = 0){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->prodi = $prodi;
		$this->semester = $semester;
	}

	// set dan get dari private

	public function setNim($nim){
		$this->nim = $nim;
	}
	public function setNama($nama){
		$this->nama = $nama;
	}
	public function setProdi($prodi){
		$this->prodi = $prodi;
	}
	public function setSemester($semester){
		$this->semester = $semester;
	}

	public function getNim(){
		return $this->nim;
	}
	public function getNama(){
		return $this->nama;
	}
	public function getProdi(){
		return $this->prodi;
	}
	public function getSemester(){
		return $this->semester;
	}

}

?>
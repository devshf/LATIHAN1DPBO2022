/* Java */

// membuat kelas untuk daftar tim sepakbola 
class DaftarTimSepakbola{

	private String namaTim;
	private	String asalNegara;
	private	int tahunTim;
	private	String namaPemain;
	private	int nomorPemain;
	private	String posisi;

	// constructor
	public DaftarTimSepakbola(){
	}
		
	// set dan get dari private
	public String getNamaTim(){
		return namaTim;
	}
	public void setNamaTim(String namaTim){
		this.namaTim = namaTim;
	}

	public String getAsalNegara(){
		return asalNegara;
	}
	public void setAsalNegara(String asalNegara){
		this.asalNegara = asalNegara;
	}


	public int getTahunTim(){
		return tahunTim;
	}
	public void setTahunTim(int tahunTim){
		this.tahunTim = tahunTim;
	}


	public String getNamaPemain(){
		return namaPemain;
	}
	public void setNamaPemain(String namaPemain){
		this.namaPemain = namaPemain;
	}


	public int getNomorPemain(){
		return nomorPemain;
	}
	public void setNomorPemain(int nomorPemain){
		this.nomorPemain = nomorPemain;
	}


	public String getPosisi(){
		return posisi;
	}
	public void setPosisi(String posisi){
		this.posisi = posisi;
	}
}



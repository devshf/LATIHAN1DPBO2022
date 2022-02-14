/* cpp */

// membuat kelas untuk daftar tim sepakbola 
class DaftarTimSepakbola{

	private: 
		string namaTim;
		string asalNegara;
		int tahunTim;
		string namaPemain;
		int nomorPemain;
		string posisi;

	public:
		// constructor
		DaftarTimSepakbola(){
		}
		
		// set dan get dari private
		void setNamaTim(string namaTim){
			this->namaTim = namaTim;
		}
		string getNamaTim(){
			return this->namaTim;
		}

		void setAsalNegara(string asalNegara){
			this->asalNegara = asalNegara;
		}
		string getAsalNegara(){
			return this->asalNegara;
		}

		void setTahunTim(int tahunTim){
			this->tahunTim = tahunTim;
		}
		int getTahunTim(){
			return this->tahunTim;
		}

		void setNamaPemain(string namaPemain){
			this->namaPemain = namaPemain;
		}
		string getNamaPemain(){
			return this->namaPemain;
		}

		void setNomorPemain(int nomorPemain){
			this->nomorPemain = nomorPemain;
		}
		int getNomorPemain(){
			return this->nomorPemain;
		}

		void setPosisi(string posisi){
			this->posisi = posisi;
		}
		string getPosisi(){
			return this->posisi;
		}



		// destructor
		~DaftarTimSepakbola(){}

};
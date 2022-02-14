#include <iostream>
#include <string>
using namespace std;
#include "timsepakbola.cpp"

int main(){

	DaftarTimSepakbola sepakbola1;
	DaftarTimSepakbola sepakbola2;
	DaftarTimSepakbola sepakbola3;

	//set dan get

	sepakbola1.setNamaTim("Persebaya");
	sepakbola1.setAsalNegara("Indonesia");
	sepakbola1.setTahunTim(1927);
	sepakbola1.setNamaPemain("Ernando Ari");
	sepakbola1.setNomorPemain(1);
	sepakbola1.setPosisi("Goal Keeper");

	cout << "Daftar Tim Sepakbola" << endl;
	cout << "1" << endl;
	cout << sepakbola1.getNamaTim() << endl;
	cout << sepakbola1.getAsalNegara() << endl;
	cout << sepakbola1.getTahunTim() << endl;
	cout << sepakbola1.getNamaPemain() << endl;
	cout << sepakbola1.getNomorPemain() << endl;
	cout << sepakbola1.getPosisi() << endl;

	sepakbola2.setNamaTim("Bali United");
	sepakbola2.setAsalNegara("Indonesia");
	sepakbola2.setTahunTim(1989);
	sepakbola2.setNamaPemain("Nadeo Argawinata");
	sepakbola2.setNomorPemain(23);
	sepakbola2.setPosisi("Goal Keeper");

	cout << "\n" << endl;
	cout << "2" << endl;
	cout << sepakbola2.getNamaTim() << endl;
	cout << sepakbola2.getAsalNegara() << endl;
	cout << sepakbola2.getTahunTim() << endl;
	cout << sepakbola2.getNamaPemain() << endl;
	cout << sepakbola2.getNomorPemain() << endl;
	cout << sepakbola2.getPosisi() << endl;


	cout << "\n" << endl;
	cout << "3" << endl;
	sepakbola3.setNamaTim("Borneo FC");
	sepakbola3.setAsalNegara("Indonesia");
	sepakbola3.setTahunTim(2014);
	sepakbola3.setNamaPemain("Marckho Sandy");
	sepakbola3.setNomorPemain(2);
	sepakbola3.setPosisi("Defender");

	cout << sepakbola3.getNamaTim() << endl;
	cout << sepakbola3.getAsalNegara() << endl;
	cout << sepakbola3.getTahunTim() << endl;
	cout << sepakbola3.getNamaPemain() << endl;
	cout << sepakbola3.getNomorPemain() << endl;
	cout << sepakbola3.getPosisi() << endl;

	return 0;
}
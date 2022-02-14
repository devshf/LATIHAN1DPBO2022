public class Main{
	public static void main(String[] args){

		// instansiasi dgn setter
		DaftarTimSepakbola sepakbola1 = new DaftarTimSepakbola();
		sepakbola1.setNamaTim("Persebaya");
		sepakbola1.setAsalNegara("Indonesia");
		sepakbola1.setTahunTim(1927);
		sepakbola1.setNamaPemain("Ernando Ari");
		sepakbola1.setNomorPemain(1);
		sepakbola1.setPosisi("Goal Keeper");

		DaftarTimSepakbola sepakbola2 = new DaftarTimSepakbola();
		sepakbola2.setNamaTim("Bali United");
		sepakbola2.setAsalNegara("Indonesia");
		sepakbola2.setTahunTim(1989);
		sepakbola2.setNamaPemain("Nadeo Argawinata");
		sepakbola2.setNomorPemain(23);
		sepakbola2.setPosisi("Goal Keeper");	

		// instansiasi dengan konstruktor 	
		DaftarTimSepakbola sepakbola3 = new DaftarTimSepakbola();
		sepakbola3.setNamaTim("Borneo FC");
		sepakbola3.setAsalNegara("Indonesia");
		sepakbola3.setTahunTim(2014);
		sepakbola3.setNamaPemain("Marckho Sandy");
		sepakbola3.setNomorPemain(2);
		sepakbola3.setPosisi("Defender");	


		// tampilkan daftar tim sepakbola ke layar
		System.out.println("Daftar Tim Sepakbola");
		System.out.println("\n");
		System.out.println(1);
		System.out.println(sepakbola1.getNamaTim());
		System.out.println(sepakbola1.getAsalNegara());
		System.out.println(sepakbola1.getTahunTim());
		System.out.println(sepakbola1.getNamaPemain());
		System.out.println(sepakbola1.getNomorPemain());
		System.out.println(sepakbola1.getPosisi());

		System.out.println("\n");
		System.out.println(2);
		System.out.println(sepakbola2.getNamaTim());
		System.out.println(sepakbola2.getAsalNegara());
		System.out.println(sepakbola2.getTahunTim());
		System.out.println(sepakbola2.getNamaPemain());
		System.out.println(sepakbola2.getNomorPemain());
		System.out.println(sepakbola2.getPosisi());

		System.out.println("\n");
		System.out.println(3);
		System.out.println(sepakbola3.getNamaTim());
		System.out.println(sepakbola3.getAsalNegara());
		System.out.println(sepakbola3.getTahunTim());
		System.out.println(sepakbola3.getNamaPemain());
		System.out.println(sepakbola3.getNomorPemain());
		System.out.println(sepakbola3.getPosisi());

}
}
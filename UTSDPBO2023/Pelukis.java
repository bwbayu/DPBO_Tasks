public class Pelukis extends Anggota {
    private Lukisan lukisan;

    // constructor
    public Pelukis(String nik, String nama, String alamat, String kodeClub, int tahunAktif) {
        super(nik, nama, alamat, kodeClub, tahunAktif);
        lukisan = new Lukisan();
    }

    public Lukisan getLukisan() {
        return lukisan;
    }

    public void setLukisan(Lukisan lukisan) {
        this.lukisan = lukisan;
    }

    // abstract method
    public void tampil() {
        System.out.println("===== Pelukis =====");
        System.out.println("NIK : " + getNik());
        System.out.println("Nama  : " + getNama());
        System.out.println("Alamat : " + getAlamat());
        System.out.println("Tahun Aktif : " + getTahunAktif());
        System.out.println("Kode Club : " + getKodeClub());
        // System.out.println("");
        // if (listLukisan.size() > 0) {
        // for (int i = 0; i < listLukisan.size(); i++) {
        // listLukisan.get(i).tampil();
        // }
        // System.out.println("");
        // }
    }

}

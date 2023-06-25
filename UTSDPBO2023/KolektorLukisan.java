public class KolektorLukisan extends Anggota {
    private Lukisan myLukisan;

    // constructor
    public KolektorLukisan(String nik, String nama, String alamat, String kodeClub, int tahunAktif) {
        super(nik, nama, alamat, kodeClub, tahunAktif);
        myLukisan = new Lukisan();
    }

    public Lukisan getMyLukisan() {
        return myLukisan;
    }

    public void setMyLukisan(Lukisan myLukisan) {
        this.myLukisan = myLukisan;
    }

    // abstract method
    public void tampil() {
        System.out.println("===== Kolektor Lukisan =====");
        System.out.println("NIK : " + getNik());
        System.out.println("Nama  : " + getNama());
        System.out.println("Alamat : " + getAlamat());
        System.out.println("Tahun Aktif : " + getTahunAktif());
        System.out.println("Kode Club : " + getKodeClub());
        // myLukisan.tampil();
    }

}

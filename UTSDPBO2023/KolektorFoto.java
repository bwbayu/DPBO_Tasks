public class KolektorFoto extends Anggota {
    private Foto myFoto;

    public KolektorFoto(String nik, String nama, String alamat, String kodeClub, int tahunAktif) {
        super(nik, nama, alamat, kodeClub, tahunAktif);
    }

    public Foto getMyFoto() {
        return myFoto;
    }

    public void setMyFoto(Foto myFoto) {
        this.myFoto = myFoto;
    }

    public void tampil() {
        System.out.println("===== Kolektor Foto =====");
        System.out.println("NIK : " + getNik());
        System.out.println("Nama  : " + getNama());
        System.out.println("Alamat : " + getAlamat());
        System.out.println("Tahun Aktif : " + getTahunAktif());
        System.out.println("Kode Club : " + getKodeClub());
    }
}

public class Fotografer extends Anggota {
    private Foto hasilFoto;

    public Fotografer(String nik, String nama, String alamat, String kodeClub, int tahunAktif) {
        super(nik, nama, alamat, kodeClub, tahunAktif);
    }

    public Foto getHasilFoto() {
        return hasilFoto;
    }

    public void setHasilFoto(Foto hasilFoto) {
        this.hasilFoto = hasilFoto;
    }

    public void tampil() {
        System.out.println("===== Fotografer =====");
        System.out.println("NIK : " + getNik());
        System.out.println("Nama  : " + getNama());
        System.out.println("Alamat : " + getAlamat());
        System.out.println("Tahun Aktif : " + getTahunAktif());
        System.out.println("Kode Club : " + getKodeClub());
    }

}

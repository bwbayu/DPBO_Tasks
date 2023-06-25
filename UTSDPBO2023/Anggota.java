abstract class Anggota {
    // private atribut
    private String nik, nama, alamat, kodeClub;
    private int tahunAktif;

    // constructor
    public Anggota(String nik, String nama, String alamat, String kodeClub, int tahunAktif) {
        this.nik = nik;
        this.nama = nama;
        this.alamat = alamat;
        this.kodeClub = kodeClub;
        this.tahunAktif = tahunAktif;
    }

    public Anggota() {
        this.nik = "";
        this.nama = "";
        this.alamat = "";
        this.kodeClub = "";
        this.tahunAktif = 0;
    }

    public String getNik() {
        return nik;
    }

    public void setNik(String nik) {
        this.nik = nik;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public String getKodeClub() {
        return kodeClub;
    }

    public void setKodeClub(String kodeClub) {
        this.kodeClub = kodeClub;
    }

    public int getTahunAktif() {
        return tahunAktif;
    }

    public void setTahunAktif(int tahunAktif) {
        this.tahunAktif = tahunAktif;
    }

    public abstract void tampil();
}

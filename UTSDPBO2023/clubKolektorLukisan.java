import java.util.ArrayList;

public class clubKolektorLukisan {
    private String kodeClub, namaClub, alamat;
    private int tahunBerdiri;
    private ArrayList<KolektorLukisan> anggotaCKL;

    public clubKolektorLukisan(String kodeClub, String namaClub, String alamat, int tahunBerdiri) {
        this.kodeClub = kodeClub;
        this.namaClub = namaClub;
        this.alamat = alamat;
        this.tahunBerdiri = tahunBerdiri;
        anggotaCKL = new ArrayList<>();
    }

    public clubKolektorLukisan() {
        this.kodeClub = "";
        this.namaClub = "";
        this.alamat = "";
        this.tahunBerdiri = 0;
        anggotaCKL = new ArrayList<>();
    }

    public String getKodeClub() {
        return kodeClub;
    }

    public void setKodeClub(String kodeClub) {
        this.kodeClub = kodeClub;
    }

    public String getNamaClub() {
        return namaClub;
    }

    public void setNamaClub(String namaClub) {
        this.namaClub = namaClub;
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public int getTahunBerdiri() {
        return tahunBerdiri;
    }

    public void setTahunBerdiri(int tahunBerdiri) {
        this.tahunBerdiri = tahunBerdiri;
    }

    public ArrayList<KolektorLukisan> getAnggotaCKL() {
        return anggotaCKL;
    }

    public void setAnggotaCKL(KolektorLukisan anggotaCKL) {
        this.anggotaCKL.add(anggotaCKL);
    }

    public void tampil() {
        System.out.println("===== Club Kolektor Lukisan =====");
        System.out.println("Kode Club : " + getKodeClub());
        System.out.println("Nama Club : " + getNamaClub());
        System.out.println("Tahun berdiri  : " + getTahunBerdiri());
        System.out.println("Alamat : " + getAlamat());
    }
}

import java.util.ArrayList;

public class ClubKolektorFoto {
    private String kodeClub, namaClub, alamat;
    private int tahunBerdiri;
    private ArrayList<KolektorFoto> anggotaCKF;

    public ClubKolektorFoto(String kodeClub, String namaClub, String alamat, int tahunBerdiri) {
        this.kodeClub = kodeClub;
        this.namaClub = namaClub;
        this.alamat = alamat;
        this.tahunBerdiri = tahunBerdiri;
        this.anggotaCKF = new ArrayList<>();
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

    public ArrayList<KolektorFoto> getAnggotaCKF() {
        return anggotaCKF;
    }

    public void setAnggotaCKF(KolektorFoto anggotaCKF) {
        this.anggotaCKF.add(anggotaCKF);
    }

    public void tampil() {
        System.out.println("===== Club Kolektor Foto =====");
        System.out.println("Kode Club : " + getKodeClub());
        System.out.println("Nama Club : " + getNamaClub());
        System.out.println("Tahun berdiri  : " + getTahunBerdiri());
        System.out.println("Alamat : " + getAlamat());
    }
}

public class Lukisan {
    private String kodePelukis, kodeLukisan, judulLukisan, deskripsi;

    public Lukisan(String kodePelukis, String kodeLukisan, String judulLukisan, String deskripsi) {
        this.kodePelukis = kodePelukis;
        this.kodeLukisan = kodeLukisan;
        this.judulLukisan = judulLukisan;
        this.deskripsi = deskripsi;
    }

    public Lukisan() {
        this.kodePelukis = "";
        this.kodeLukisan = "";
        this.judulLukisan = "";
        this.deskripsi = "";
    }

    public String getKodePelukis() {
        return kodePelukis;
    }

    public void setKodePelukis(String kodePelukis) {
        this.kodePelukis = kodePelukis;
    }

    public String getKodeLukisan() {
        return kodeLukisan;
    }

    public void setKodeLukisan(String kodeLukisan) {
        this.kodeLukisan = kodeLukisan;
    }

    public String getJudulLukisan() {
        return judulLukisan;
    }

    public void setJudulLukisan(String judulLukisan) {
        this.judulLukisan = judulLukisan;
    }

    public String getDeskripsi() {
        return deskripsi;
    }

    public void setDeskripsi(String deskripsi) {
        this.deskripsi = deskripsi;
    }

    public void tampil() {
        System.out.println("===== Data Lukisan =====");
        System.out.println("Kode Pelukis : " + getKodePelukis());
        System.out.println("Kode Lukisan  : " + getKodeLukisan());
        System.out.println("Judul Lukisan : " + getJudulLukisan());
        System.out.println("Deskripsi : " + getDeskripsi());
    }
}

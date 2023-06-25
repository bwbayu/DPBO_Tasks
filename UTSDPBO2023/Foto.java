public class Foto {
    private String kodeFotografer, kodeFoto, judulFoto, deskripsi;

    public Foto(String kodeFotografer, String kodeFoto, String judulFoto, String deskripsi) {
        this.kodeFotografer = kodeFotografer;
        this.kodeFoto = kodeFoto;
        this.judulFoto = judulFoto;
        this.deskripsi = deskripsi;
    }

    public String getKodeFotografer() {
        return kodeFotografer;
    }

    public void setKodeFotografer(String kodeFotografer) {
        this.kodeFotografer = kodeFotografer;
    }

    public String getKodeFoto() {
        return kodeFoto;
    }

    public void setKodeFoto(String kodeFoto) {
        this.kodeFoto = kodeFoto;
    }

    public String getJudulFoto() {
        return judulFoto;
    }

    public void setJudulFoto(String judulFoto) {
        this.judulFoto = judulFoto;
    }

    public String getDeskripsi() {
        return deskripsi;
    }

    public void setDeskripsi(String deskripsi) {
        this.deskripsi = deskripsi;
    }

    public void tampil() {
        System.out.println("===== Data Foto =====");
        System.out.println("Kode Fotografer : " + getKodeFotografer());
        System.out.println("Kode Foto  : " + getKodeFoto());
        System.out.println("Judul Foto : " + getJudulFoto());
        System.out.println("Deskripsi : " + getDeskripsi());
    }
}

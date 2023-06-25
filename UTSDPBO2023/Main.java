import java.util.Scanner;
import java.util.ArrayList;

/*
 * Saya Bayu Wicaksono NIM 2106836 mengerjakan soal UTS dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
 */
// design https://app.diagrams.net/?libs=general;uml#G1xObB3f7-BvmQeXpBXH2ocEgOZYcqKOjd
public class Main {
    public static void main(String[] args) {
        // DATA LUKISAN
        Lukisan oLukisan = new Lukisan("P-01", "L-01", "Hurt", "deskripsi Hurt");
        Lukisan oLukisan1 = new Lukisan("P-02", "L-02", "Zimzalabim", "deskripsi Zimzalabim");
        ArrayList<Lukisan> listLukisan = new ArrayList<>();
        listLukisan.add(oLukisan);
        listLukisan.add(oLukisan1);
        // MENAMPILKAN DATA
        for (int i = 0; i < listLukisan.size(); i++) {
            listLukisan.get(i).tampil();
        }
        System.out.println("");

        // DATA KOLEKTOR LUKISAN
        KolektorLukisan oKolektorLukisan = new KolektorLukisan("123", "kolektor L1", "Bandung", "KL-01", 2023);
        oKolektorLukisan.setMyLukisan(oLukisan);
        KolektorLukisan oKolektorLukisan1 = new KolektorLukisan("124", "kolektor L2", "Bandung", "KL-02", 2023);
        oKolektorLukisan.setMyLukisan(oLukisan1);
        ArrayList<KolektorLukisan> kolektorLukisan = new ArrayList<>();
        kolektorLukisan.add(oKolektorLukisan);
        kolektorLukisan.add(oKolektorLukisan1);
        // MENAMPILKAN DATA
        for (int i = 0; i < kolektorLukisan.size(); i++) {
            kolektorLukisan.get(i).tampil();
        }
        System.out.println("");

        // DATA CLUB KOLEKTOR LUKISAN
        clubKolektorLukisan club1 = new clubKolektorLukisan("KL-01", "New Jeans", "Seoul", 2022);
        club1.setAnggotaCKL(oKolektorLukisan);
        clubKolektorLukisan club2 = new clubKolektorLukisan("KL-02", "Red Velvet", "Seoul", 2015);
        club2.setAnggotaCKL(oKolektorLukisan1);
        ArrayList<clubKolektorLukisan> listClubKL = new ArrayList<>();
        listClubKL.add(club1);
        listClubKL.add(club2);
        // MENAMPILKAN DATA
        for (int i = 0; i < listClubKL.size(); i++) {
            listClubKL.get(i).tampil();
        }
        System.out.println("");

        // DATA PELUKIS
        Pelukis oPelukis = new Pelukis("125", "Pelukis1", "Bandung", "P-01", 2023);
        Pelukis oPelukis1 = new Pelukis("126", "Pelukis2", "Bandung", "P-02", 2023);
        ArrayList<Pelukis> pelukis = new ArrayList<>();
        pelukis.add(oPelukis);
        oPelukis.setLukisan(oLukisan);
        pelukis.add(oPelukis1);
        oPelukis1.setLukisan(oLukisan1);
        // MENAMPILKAN DATA
        for (int i = 0; i < pelukis.size(); i++) {
            pelukis.get(i).tampil();
        }
        System.out.println("");

        // DATA FOTO
        Foto oFoto = new Foto("KFG-01", "F-01", "Halo", "HALO HALO");
        Foto oFoto1 = new Foto("KFG-02", "F-02", "Hello", "HELLO HELLO");
        ArrayList<Foto> listFoto = new ArrayList<>();
        listFoto.add(oFoto);
        listFoto.add(oFoto1);
        // MENAMPILKAN DATA
        for (int i = 0; i < listFoto.size(); i++) {
            listFoto.get(i).tampil();
        }
        System.out.println("");

        // DATA FOTOGRAFER
        Fotografer oFotografer = new Fotografer("222", "Bayu", "Bandung", "KFG-01", 2023);
        oFotografer.setHasilFoto(oFoto);
        Fotografer oFotografer1 = new Fotografer("223", "Wicak", "Bandung", "KFG-02", 2023);
        oFotografer1.setHasilFoto(oFoto1);
        ArrayList<Fotografer> listFotografer = new ArrayList<>();
        listFotografer.add(oFotografer);
        listFotografer.add(oFotografer1);
        // MENAMPILKAN DATA
        for (int i = 0; i < listFotografer.size(); i++) {
            listFotografer.get(i).tampil();
        }
        System.out.println("");

        // DATA KOLEKTOR FOTO
        KolektorFoto oKolektorFoto = new KolektorFoto("224", "Sono", "Bandung", "KF-01", 2023);
        oKolektorFoto.setMyFoto(oFoto);
        KolektorFoto oKolektorFoto1 = new KolektorFoto("225", "Ayes", "Bandung", "KF-02", 2023);
        oKolektorFoto1.setMyFoto(oFoto1);
        ArrayList<KolektorFoto> listKolektorFoto = new ArrayList<>();
        listKolektorFoto.add(oKolektorFoto);
        listKolektorFoto.add(oKolektorFoto1);
        // MENAMPILKAN DATA
        for (int i = 0; i < listKolektorFoto.size(); i++) {
            listKolektorFoto.get(i).tampil();
        }
        System.out.println("");

        // DATA CLUB KOLEKTOR FOTO
        ClubKolektorFoto ckf1 = new ClubKolektorFoto("KF-01", "Gatau", "Bandung", 2020);
        ckf1.setAnggotaCKF(oKolektorFoto);
        ClubKolektorFoto ckf2 = new ClubKolektorFoto("KF-02", "Bang", "Bandung", 2020);
        ckf1.setAnggotaCKF(oKolektorFoto1);
        ArrayList<ClubKolektorFoto> listClubkf = new ArrayList<>();
        listClubkf.add(ckf1);
        listClubkf.add(ckf2);
        // MENAMPILKAN DATA
        for (int i = 0; i < listClubkf.size(); i++) {
            listClubkf.get(i).tampil();
        }
        System.out.println("");

        // PENCARIAN UNTUK KONTEKS LUKISAN
        Scanner scan = new Scanner(System.in);
        System.out.print("Nama Anggota Club Kolektor Lukisan: ");
        String find = scan.nextLine();
        for (int i = 0; i < kolektorLukisan.size(); i++) {
            if (kolektorLukisan.get(i).getNama().equals(find)) { // cari nama anggota kolektor

                // nampilin club
                for (int j = 0; j < listClubKL.size(); j++) {
                    if (listClubKL.get(j).getKodeClub().equals(kolektorLukisan.get(i).getKodeClub())) {
                        listClubKL.get(j).tampil();
                    }
                }
                kolektorLukisan.get(i).tampil();
                kolektorLukisan.get(i).getMyLukisan().tampil();
                // cari lukisan & menampilkannya
                for (int j = 0; j < pelukis.size(); j++) {
                    if (pelukis.get(j).getLukisan().getKodeLukisan()
                            .equals(kolektorLukisan.get(i).getMyLukisan().getKodeLukisan())) {
                        pelukis.get(j).tampil();
                    }
                }

            }
        }

        // PENCARIAN UNTUK KONTEKS FOTO
        System.out.print("Nama Anggota Club Kolektor Foto: ");
        String find1 = scan.nextLine();
        for (int i = 0; i < listKolektorFoto.size(); i++) {
            if (listKolektorFoto.get(i).getNama().equals(find1)) { // cari nama anggota kolektor

                // nampilin club
                for (int j = 0; j < listClubkf.size(); j++) {
                    if (listClubkf.get(j).getKodeClub().equals(listKolektorFoto.get(i).getKodeClub())) {
                        listClubkf.get(j).tampil();
                    }
                }
                listKolektorFoto.get(i).tampil();
                listKolektorFoto.get(i).getMyFoto().tampil();
                // cari lukisan & menampilkannya
                for (int j = 0; j < listFotografer.size(); j++) {
                    if (listFotografer.get(j).getHasilFoto().getKodeFoto()
                            .equals(listKolektorFoto.get(i).getMyFoto().getKodeFoto())) {
                        listFotografer.get(j).tampil();
                    }
                }

            }
        }

        scan.close(); // menutup scanner
    }
}

// TEST CASE
// kolektor L1
// Sono
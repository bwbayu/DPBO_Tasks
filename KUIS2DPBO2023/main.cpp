#include <iostream>
#include <vector>
using namespace std;
// Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 2 dalam mata kuliah Desain Pemrograman Berorientasi
// Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

template <class T, class A>
class agenWisata; // deklarasi class agenWisata

// Class Wisata
template <class T, class A>
class Wisata
{
private:
    string tujuanWisata;
    T harga; // dijadikan template agar tipe data bisa berupa string, int, double / float
    int jumlahWisatawan;
    A hotel; // dijadikan template agar tipe datanya bisa berupa string atau class

public:
    Wisata(string tujuanWisata, T harga, int jumlahWisatawan, A hotel)
    {
        // konstruktor
        this->tujuanWisata = tujuanWisata;
        this->harga = harga;
        this->jumlahWisatawan = jumlahWisatawan;
        this->hotel = hotel;
    }

    // setter getter

    void setTujuanWisata(string tujuanWisata)
    {
        this->tujuanWisata = tujuanWisata;
    }

    void setHarga(T harga)
    {
        this->harga = harga;
    }

    void setJumlahWisatawan(int jumlahWisatawan)
    {
        this->jumlahWisatawan = jumlahWisatawan;
    }

    void setHotel(A hotel)
    {
        this->hotel = hotel;
    }

    string getTujuanWisata()
    {
        return tujuanWisata;
    }

    T getHarga()
    {
        return harga;
    }

    int getJumlahWisatawan()
    {
        return jumlahWisatawan;
    }

    A getHotel()
    {
        return hotel;
    }

    friend class agenWisata<T, A>; // class Wisata friend class agenWisata, agar class TravelAgent memiliki akses secara penuh ke class Wisata

    ~Wisata()
    {
        // destruktor
    }
};

// Class agenWisata
template <class T, class A>
class agenWisata
{
private:
    vector<Wisata<T, A>> vt;

public:
    agenWisata()
    {
        // konstruktor
    }

    void tambahWisata(Wisata<T, A> wisata)
    {
        vt.push_back(wisata);
    }

    void print()
    {
        // method untuk menampilkan data vektor wisata
        for (int i = 0; i < vt.size(); i++)
        {
            cout << "Wisata ke-" << i + 1 << endl;
            cout << " > Tujuan wisata : " << vt[i].tujuanWisata << endl;
            cout << " > Harga : " << vt[i].harga << endl;
            cout << " > Jumlah Wisatawan : " << vt[i].jumlahWisatawan << endl;
            cout << " > Hotel : " << vt[i].hotel << endl;
        }
    }

    ~agenWisata()
    {
        // destruktor
    }
};

int main()
{
    cout << "- Agen Wisata ke-1" << endl;
    agenWisata<int, string> agent1;
    agent1.tambahWisata(Wisata<int, string>("Paris", 1500, 10, "Hotel_Paris"));
    agent1.tambahWisata(Wisata<int, string>("Tokyo", 2500, 50, "Hotel_Continental"));
    agent1.tambahWisata(Wisata<int, string>("New York", 2000, 5, "Hotel_New_York"));
    agent1.print();

    cout << endl;
    cout << "- Agen Wisata ke-2" << endl;
    agenWisata<double, string> agent2;
    agent2.tambahWisata(Wisata<double, string>("Busan", 1500.10, 10, "Hotel_Busan"));
    agent2.tambahWisata(Wisata<double, string>("Beijing", 2500.20, 50, "Hotel_Beijing"));
    agent2.tambahWisata(Wisata<double, string>("Singapura", 2000.30, 5, "Hotel_Singapura"));
    agent2.print();

    return 0;
}

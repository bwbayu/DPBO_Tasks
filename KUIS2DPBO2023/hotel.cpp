#include <iostream>
using namespace std;
// Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 2 dalam mata kuliah Desain Pemrograman Berorientasi
// Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
class Hotel
{
private:
    string nama;
    string address;
    int rating;
    double pricePerNight;

public:
    Hotel()
    {
        // konstuktor
        this->nama = "";
        this->address = "";
        this->rating = 0;
        this->pricePerNight = 0.0;
    }
    Hotel(string nama, string address, int rating, double pricePerNight)
    {
        // konstuktor
        this->nama = nama;
        this->address = address;
        this->rating = rating;
        this->pricePerNight = pricePerNight;
    }

    // setter getter
    void setNama(string nama)
    {
        this->nama = nama;
    }

    void setAddress(string address)
    {
        this->address = address;
    }

    void setRating(int rating)
    {
        this->rating = rating;
    }

    void setPricePerNight(double pricePerNight)
    {
        this->pricePerNight = pricePerNight;
    }

    string getNama()
    {
        return nama;
    }

    string getAddress()
    {
        return address;
    }

    int getRating()
    {
        return rating;
    }

    double getPricePerNight()
    {
        return pricePerNight;
    }

    ~Hotel()
    {
        // destruktor
    }
};
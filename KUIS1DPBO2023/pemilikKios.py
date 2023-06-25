"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""
from kios import Kios


class PemilikKios:
    """
    """
    # PRIVATE ATRIBUT
    __kodePemilikKios = ""
    __kodeKios = []
    __noKtp = ""
    __nama = ""
    __alamat = ""

    # CONSTRUCTOR
    def __init__(self, kodePemilikKios="", kodeKios="", noKtp="", nama="", alamat="", kios=Kios()):
        self.kodePemilikKios = kodePemilikKios
        self.__kodeKios = []
        self.__kodeKios.append(kodeKios)
        self.noKtp = noKtp
        self.nama = nama
        self.alamat = alamat
        self.kios = kios

    # SETTER & GETTER
    @property
    def kodePemilikKios(self):
        """ method yang digunakan sebagai getter untuk data kode karyawan kios"""
        return self.__kodePemilikKios

    @kodePemilikKios.setter
    def kodePemilikKios(self, kodePemilikKios):
        """method yang digunakan sebagai setter untuk data kode karyawan kios"""
        self.__kodePemilikKios = kodePemilikKios

    @property
    def noKtp(self):
        """ method yang digunakan sebagai getter untuk data no ktp karyawan kios"""
        return self.__noKtp

    @noKtp.setter
    def noKtp(self, noKtp):
        """method yang digunakan sebagai setter untuk data no ktp karyawan kios"""
        self.__noKtp = noKtp

    @property
    def nama(self):
        """ method yang digunakan sebagai getter untuk data nama"""
        return self.__nama

    @nama.setter
    def nama(self, nama):
        """method yang digunakan sebagai setter untuk data nama"""
        self.__nama = nama

    @property
    def alamat(self):
        """ method yang digunakan sebagai getter untuk data alamat"""
        return self.__alamat

    @alamat.setter
    def alamat(self, alamat):
        """method yang digunakan sebagai setter untuk data alamat"""
        self.__alamat = alamat

    @property
    def kodeKios(self):
        """ method yang digunakan sebagai getter untuk data kode kios"""
        return self.__kodeKios

    def setKodeKios(self, kodeKios=""):
        """method yang digunakan sebagai setter untuk data kode kios"""
        self.__kodeKios.append(kodeKios)

    @property
    def kios(self):
        """ method yang digunakan sebagai getter untuk data kios"""
        return self.__kios

    @kios.setter
    def kios(self, kios):
        """method yang digunakan sebagai setter untuk data kios"""
        self.__kios = kios

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("Kode Pemilik Kios  : ", self.kodePemilikKios)
        print("No KTP             : ", self.noKtp)
        print("Nama               : ", self.nama)
        print("Alamat             : ", self.alamat)
        print("+ Kios yang dimiliki ")
        for i, item in enumerate(self.kodeKios):
            print(str(i+1) + ". Kode kios       : ", item)
        print("-------------------------------------------")

"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""


class Makanan:
    """
    """
    # PRIVATE ATRIBUT
    __kodeMakanan = ""
    __kodeKios = ""
    __namaMakanan = ""
    __harga = 0
    __keteranganMakanan = ""

    # CONSTRUCTOR
    def __init__(self, kodeMakanan="", kodeKios="", namaMakanan="", harga=0, keteranganMakanan=""):
        self.kodeMakanan = kodeMakanan
        self.kodeKios = kodeKios
        self.namaMakanan = namaMakanan
        self.harga = harga
        self.keteranganMakanan = keteranganMakanan

    # SETTER & GETTER
    @property
    def kodeMakanan(self):
        """ method yang digunakan sebagai getter untuk data kode Makanan"""
        return self.__kodeMakanan

    @kodeMakanan.setter
    def kodeMakanan(self, kodeMakanan):
        """method yang digunakan sebagai setter untuk data kode Makanan"""
        self.__kodeMakanan = kodeMakanan

    @property
    def kodeKios(self):
        """ method yang digunakan sebagai getter untuk data kode kios"""
        return self.__kodeKios

    @kodeKios.setter
    def kodeKios(self, kodeKios):
        """method yang digunakan sebagai setter untuk data kode kios"""
        self.__kodeKios = kodeKios

    @property
    def namaMakanan(self):
        """ method yang digunakan sebagai getter untuk data nama makanan"""
        return self.__namaMakanan

    @namaMakanan.setter
    def namaMakanan(self, namaMakanan):
        """method yang digunakan sebagai setter untuk data nama makanan"""
        self.__namaMakanan = namaMakanan

    @property
    def harga(self):
        """ method yang digunakan sebagai getter untuk data harga"""
        return self.__harga

    @harga.setter
    def harga(self, harga):
        """method yang digunakan sebagai setter untuk data harga"""
        self.__harga = harga

    @property
    def keteranganMakanan(self):
        """ method yang digunakan sebagai getter untuk data keterangan Makanan"""
        return self.__keteranganMakanan

    @keteranganMakanan.setter
    def keteranganMakanan(self, keteranganMakanan):
        """method yang digunakan sebagai setter untuk data keterangan Makanan"""
        self.__keteranganMakanan = keteranganMakanan

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("kode makanan : ", self.kodeMakanan)
        print("Kode kios    : ", self.kodeKios)
        print("Nama makanan : ", str(self.namaMakanan))
        print("harga        : ", self.harga)
        print("keterangan   : ", self.keteranganMakanan)
        print("-------------------------------------------")

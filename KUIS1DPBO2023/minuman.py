"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""


class Minuman:
    """
    """
    # PRIVATE ATRIBUT
    __kodeMinuman = ""
    __kodeKios = ""
    __namaMinuman = ""
    __harga = 0
    __keteranganMinuman = ""

    # CONSTRUCTOR
    def __init__(self, kodeMinuman="", kodeKios="", namaMinuman="", harga=0, keteranganMinuman=""):
        self.kodeMinuman = kodeMinuman
        self.kodeKios = kodeKios
        self.namaMinuman = namaMinuman
        self.harga = harga
        self.keteranganMinuman = keteranganMinuman

    # SETTER & GETTER
    @property
    def kodeMinuman(self):
        """ method yang digunakan sebagai getter untuk data kode Makanan"""
        return self.__kodeMinuman

    @kodeMinuman.setter
    def kodeMinuman(self, kodeMinuman):
        """method yang digunakan sebagai setter untuk data kode Makanan"""
        self.__kodeMinuman = kodeMinuman

    @property
    def kodeKios(self):
        """ method yang digunakan sebagai getter untuk data kode kios"""
        return self.__kodeKios

    @kodeKios.setter
    def kodeKios(self, kodeKios):
        """method yang digunakan sebagai setter untuk data kode kios"""
        self.__kodeKios = kodeKios

    @property
    def namaMinuman(self):
        """ method yang digunakan sebagai getter untuk data nama makanan"""
        return self.__namaMinuman

    @namaMinuman.setter
    def namaMinuman(self, namaMinuman):
        """method yang digunakan sebagai setter untuk data nama makanan"""
        self.__namaMinuman = namaMinuman

    @property
    def harga(self):
        """ method yang digunakan sebagai getter untuk data harga"""
        return self.__harga

    @harga.setter
    def harga(self, harga):
        """method yang digunakan sebagai setter untuk data harga"""
        self.__harga = harga

    @property
    def keteranganMinuman(self):
        """ method yang digunakan sebagai getter untuk data keterangan Makanan"""
        return self.__keteranganMinuman

    @keteranganMinuman.setter
    def keteranganMinuman(self, keteranganMinuman):
        """method yang digunakan sebagai setter untuk data keterangan Makanan"""
        self.__keteranganMinuman = keteranganMinuman

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("kode minuman : ", self.kodeMinuman)
        print("Kode kios    : ", self.kodeKios)
        print("Nama minuman : ", self.namaMinuman)
        print("harga        : ", str(self.harga))
        print("keterangan   : ", self.keteranganMinuman)
        print("-------------------------------------------")

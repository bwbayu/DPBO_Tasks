"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""


class PembagianTransaksiPerhari:
    """
    """
    # PRIVATE ATRIBUT
    __kodeKios = ""
    __tanggal = ""
    __omsetDibagikan = 0
    __bagianPengelola = 0

    # CONSTRUCTOR
    def __init__(self, kodeKios="", tanggal="", omsetDibagikan=0, bagianPengelola=0):
        self.tanggal = tanggal
        self.kodeKios = kodeKios
        self.omsetDibagikan = omsetDibagikan
        self.bagianPengelola = bagianPengelola

    # SETTER & GETTER
    @property
    def tanggal(self):
        """ method yang digunakan sebagai getter untuk data kode Makanan"""
        return self.__tanggal

    @tanggal.setter
    def tanggal(self, tanggal):
        """method yang digunakan sebagai setter untuk data kode Makanan"""
        self.__tanggal = tanggal

    @property
    def kodeKios(self):
        """ method yang digunakan sebagai getter untuk data kode kios"""
        return self.__kodeKios

    @kodeKios.setter
    def kodeKios(self, kodeKios):
        """method yang digunakan sebagai setter untuk data kode kios"""
        self.__kodeKios = kodeKios

    @property
    def omsetDibagikan(self):
        """ method yang digunakan sebagai getter untuk data nama makanan"""
        return self.__omsetDibagikan

    @omsetDibagikan.setter
    def omsetDibagikan(self, omsetDibagikan):
        """method yang digunakan sebagai setter untuk data nama makanan"""
        self.__omsetDibagikan = omsetDibagikan

    @property
    def bagianPengelola(self):
        """ method yang digunakan sebagai getter untuk data bagianPengelola"""
        return self.__bagianPengelola

    @bagianPengelola.setter
    def bagianPengelola(self, bagianPengelola):
        """method yang digunakan sebagai setter untuk data bagianPengelola"""
        self.__bagianPengelola = bagianPengelola

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("Kode kios        : ", self.kodeKios)
        print("tanggal          : ", self.tanggal)
        print("Omset dibagikan  : ", self.omsetDibagikan)
        print("bagian pengelola : ", self.bagianPengelola)
        print("-------------------------------------------")

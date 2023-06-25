"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""


class Transaksi:
    """
    """
    # PRIVATE ATRIBUT
    __tanggal = ""
    __kodeKios = ""
    __kodeKaryawanKios = ""
    __kodeKaryawanPengelola = ""
    __kodeMakanan = []
    __kodeMinuman = []

    # CONSTRUCTOR
    def __init__(self, kodeKios="", tanggal="", kodeKaryawanKios="", kodeKaryawanPengelola="", kodeMakanan="", kodeMinuman=""):
        self.tanggal = tanggal
        self.kodeKios = kodeKios
        self.kodeKaryawanKios = kodeKaryawanKios
        self.kodeKaryawanPengelola = kodeKaryawanPengelola
        self.__kodeMakanan = []
        self.__kodeMinuman = []
        self.__kodeMakanan.append(kodeMakanan)
        self.__kodeMinuman.append(kodeMinuman)

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
    def kodeKaryawanKios(self):
        """ method yang digunakan sebagai getter untuk data nama makanan"""
        return self.__kodeKaryawanKios

    @kodeKaryawanKios.setter
    def kodeKaryawanKios(self, kodeKaryawanKios):
        """method yang digunakan sebagai setter untuk data nama makanan"""
        self.__kodeKaryawanKios = kodeKaryawanKios

    @property
    def kodeKaryawanPengelola(self):
        """ method yang digunakan sebagai getter untuk data kodeKaryawanPengelola"""
        return self.__kodeKaryawanPengelola

    @kodeKaryawanPengelola.setter
    def kodeKaryawanPengelola(self, kodeKaryawanPengelola):
        """method yang digunakan sebagai setter untuk data kodeKaryawanPengelola"""
        self.__kodeKaryawanPengelola = kodeKaryawanPengelola

    @property
    def kodeMakanan(self):
        """ method yang digunakan sebagai getter untuk data keterangan Makanan"""
        return self.__kodeMakanan

    def setKodeMakanan(self, kodeMakanan):
        """method yang digunakan sebagai setter untuk data keterangan Makanan"""
        self.__kodeMakanan.append(kodeMakanan)

    @property
    def kodeMinuman(self):
        """ method yang digunakan sebagai getter untuk data keterangan Makanan"""
        return self.__kodeMinuman

    def setKodeMinuman(self, kodeMinuman):
        """method yang digunakan sebagai setter untuk data keterangan Makanan"""
        self.__kodeMinuman.append(kodeMinuman)

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("Kode kios               : ", self.kodeKios)
        print("tanggal                 : ", self.tanggal)
        print("kode karyawan kios      : ", self.kodeKaryawanKios)
        print("kode Karyawan Pengelola : ", self.kodeKaryawanPengelola)
        print("kode makanan            : ")
        for i, item in enumerate(self.kodeMakanan):
            print(str(i+1) + ". ", item)
        print("kode minuman            : ")
        for i, item in enumerate(self.kodeMinuman):
            print(str(i+1) + ". ", item)
        print("-------------------------------------------")

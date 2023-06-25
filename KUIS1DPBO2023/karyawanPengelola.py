"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""


class KaryawanPengelola:
    """
    """
    # PRIVATE ATRIBUT
    __kodeKaryawanPengelola = ""
    __kodeKios = ""
    __noKtp = ""
    __nama = ""
    __alamat = ""
    __liburShift = ""

    # CONSTRUCTOR
    def __init__(self, kodeKaryawanPengelola="", kodeKios="", noKtp="", nama="", alamat="", liburShift=""):
        self.kodeKaryawanPengelola = kodeKaryawanPengelola
        self.kodeKios = kodeKios
        self.noKtp = noKtp
        self.nama = nama
        self.alamat = alamat
        self.liburShift = liburShift

    # SETTER & GETTER
    @property
    def kodeKaryawanPengelola(self):
        """ method yang digunakan sebagai getter untuk data kode karyawan kios"""
        return self.__kodeKaryawanPengelola

    @kodeKaryawanPengelola.setter
    def kodeKaryawanPengelola(self, kodeKaryawanPengelola):
        """method yang digunakan sebagai setter untuk data kode karyawan kios"""
        self.__kodeKaryawanPengelola = kodeKaryawanPengelola

    @property
    def kodeKios(self):
        """ method yang digunakan sebagai getter untuk data kode kios"""
        return self.__kodeKios

    @kodeKios.setter
    def kodeKios(self, kodeKios):
        """method yang digunakan sebagai setter untuk data kode kios"""
        self.__kodeKios = kodeKios

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
    def liburShift(self):
        """ method yang digunakan sebagai getter untuk data libur shift"""
        return self.__liburShift

    @liburShift.setter
    def liburShift(self, liburShift):
        """method yang digunakan sebagai setter untuk data libur shift"""
        self.__liburShift = liburShift

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("Kode karyawan Pengelola : ", self.kodeKaryawanPengelola)
        print("Kode kios               : ", self.kodeKios)
        print("No KTP                  : ", self.noKtp)
        print("Nama                    : ", self.nama)
        print("Alamat                  : ", self.alamat)
        print("Libur shift             : ", self.liburShift)
        print("-------------------------------------------")

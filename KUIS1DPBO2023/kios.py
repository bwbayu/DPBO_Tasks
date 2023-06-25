"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""
from karyawanKios import KaryawanKios
from karyawanPengelola import KaryawanPengelola
from makanan import Makanan
from minuman import Minuman
from transaksi import Transaksi
from pembagianTransaksi import PembagianTransaksiPerhari


class Kios:
    """
    """
    # PRIVATE ATRIBUT
    __kodeKios = ""
    __makanan = []
    __minuman = []
    __transaksi = []

    # CONSTRUCTOR
    def __init__(self, kodeKios="", karyawanKios=KaryawanKios(), karyawanPengelola=KaryawanPengelola(), makanan=Makanan(), minuman=Minuman(), transaksi=Transaksi(), pembagianTransaksi=PembagianTransaksiPerhari()):
        self.karyawanKios = karyawanKios
        self.kodeKios = kodeKios
        self.karyawanPengelola = karyawanPengelola
        self.__makanan = []
        self.__makanan.append(makanan)
        self.__minuman = []
        self.__minuman.append(minuman)
        self.__transaksi = []
        self.__transaksi.append(transaksi)
        self.pembagianTransaksi = pembagianTransaksi

    # SETTER & GETTER
    @property
    def karyawanKios(self):
        """ method yang digunakan sebagai getter untuk data kode karyawan kios"""
        return self.__karyawanKios

    @karyawanKios.setter
    def karyawanKios(self, karyawanKios):
        """method yang digunakan sebagai setter untuk data kode karyawan kios"""
        self.__karyawanKios = karyawanKios

    @property
    def kodeKios(self):
        """ method yang digunakan sebagai getter untuk data kode kios"""
        return self.__kodeKios

    @kodeKios.setter
    def kodeKios(self, kodeKios):
        """method yang digunakan sebagai setter untuk data kode kios"""
        self.__kodeKios = kodeKios

    @property
    def karyawanPengelola(self):
        """ method yang digunakan sebagai getter untuk data no ktp karyawan kios"""
        return self.__karyawanPengelola

    @karyawanPengelola.setter
    def karyawanPengelola(self, karyawanPengelola):
        """method yang digunakan sebagai setter untuk data no ktp karyawan kios"""
        self.__karyawanPengelola = karyawanPengelola

    @property
    def makanan(self):
        """ method yang digunakan sebagai getter untuk data makanan"""
        return self.__makanan

    def setMakanan(self, makanan):
        """method yang digunakan sebagai setter untuk data makanan"""
        self.__makanan.append(makanan)

    @ property
    def minuman(self):
        """ method yang digunakan sebagai getter untuk data libur shift"""
        return self.__minuman

    def setMinuman(self, minuman):
        """method yang digunakan sebagai setter untuk data libur shift"""
        self.__minuman.append(minuman)

    @property
    def transaksi(self):
        """ method yang digunakan sebagai getter untuk data no ktp karyawan kios"""
        return self.__transaksi

    def setTransaksi(self, transaksi):
        """method yang digunakan sebagai setter untuk data no ktp karyawan kios"""
        self.__transaksi.append(transaksi)

    @property
    def pembagianTransaksi(self):
        """ method yang digunakan sebagai getter untuk data no ktp karyawan kios"""
        return self.__pembagianTransaksi

    @pembagianTransaksi.setter
    def pembagianTransaksi(self, pembagianTransaksi):
        """method yang digunakan sebagai setter untuk data no ktp karyawan kios"""
        self.__pembagianTransaksi = pembagianTransaksi

    def tampil(self):
        """method untuk menampilkan data dari class"""
        print("> Data Kode Kios : ", self.kodeKios)

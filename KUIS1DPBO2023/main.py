"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Kuis 1 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""
# import file
from makanan import Makanan
from minuman import Minuman
from karyawanKios import KaryawanKios
from karyawanPengelola import KaryawanPengelola
from pemilikKios import PemilikKios
from transaksi import Transaksi
from pembagianTransaksi import PembagianTransaksiPerhari
from kios import Kios

# ============= MAKANAN =============
makanan1 = Makanan("KM-01", "KK-01", "indomie", 5000, "Indomie itu enak")
makanan2 = Makanan("KM-02", "KK-02", "kurma", 10000, "kurma itu sehat")

listmakanan = []
listmakanan.append(makanan1)
listmakanan.append(makanan2)

print("-- DATA MAKANAN --")
for item in listmakanan:
    item.tampil()

# ============= MINUMAN =============
minuman1 = Minuman("KMi-01", "KK-01", "pepsi", 5000, "pepsi itu enak")
minuman2 = Minuman("KMi-02", "KK-02", "indomilk", 10000, "Indomilk itu sehat")

listminuman = []
listminuman.append(minuman1)
listminuman.append(minuman2)

print("-- DATA MINUMAN --")
for item in listminuman:
    item.tampil()

# ============= KARYAWAN KIOS =============
karyawan1 = KaryawanKios("KKK-01", "KK-01", "120",
                         "ayes", "jl. gatau", "senin")
karyawan2 = KaryawanKios("KKK-01", "KK-02", "321",
                         "babang", "jl. agung", "selasa")

listkaryawan = []
listkaryawan.append(karyawan1)
listkaryawan.append(karyawan2)

print("-- DATA KARYAWAN KIOS --")
for item in listkaryawan:
    item.tampil()

# ============= KARYAWAN PENGELOLA =============
karyawanP1 = KaryawanPengelola("KKP-01", "KK-01", "122",
                               "agus", "jl. batu", "rabu")
karyawanP2 = KaryawanPengelola("KKP-01", "KK-02", "382",
                               "ana", "jl. merdeka", "kamis")

listPengelola = []
listPengelola.append(karyawanP1)
listPengelola.append(karyawanP2)

print("-- DATA KARYAWAN PENGELOLA --")
for item in listPengelola:
    item.tampil()

# ============= PEMILIK KIOS =============
pemilik1 = PemilikKios("KPK-01", "KK-01", "823", "ujang", "jl. mantap")
pemilik2 = PemilikKios("KPK-02", "KK-02", "927", "zahir", "jl. biasa aja")

listPemilik = []
listPemilik.append(pemilik1)
listPemilik.append(pemilik2)

print("-- DATA PEMILIK KIOS --")
for item in listPemilik:
    item.tampil()

# ============= TRANSAKSI =============
transaksi1 = Transaksi("KK-01", "2-3-2023", "KKK-01", "KKP-01", "KM-01")
transaksi2 = Transaksi("KK-01", "2-3-2023", "KKK-01",
                       "KKP-01", "KM-01", "KMi-01")
transaksi3 = Transaksi("KK-02", "2-3-2023", "KKK-01", "KKP-01", "KM-02")

listTransaksi = []
listTransaksi.append(transaksi1)
listTransaksi.append(transaksi2)
listTransaksi.append(transaksi3)

print("-- DATA TRANSAKSI --")
for item in listTransaksi:
    item.tampil()

# ============= PEMBAGIAN TRANSAKSI =============
pembagian1 = PembagianTransaksiPerhari("KK-01", "2-3-2023", 100000000, 5000000)
pembagian2 = PembagianTransaksiPerhari("KK-02", "2-3-2023", 100000000, 5000000)

listPembagian = []
listPembagian.append(pembagian1)
listPembagian.append(pembagian2)

print("-- DATA PEMBAGIAN TRANSAKSI PER HARI --")
for item in listPembagian:
    item.tampil()

# ============= KIOS =============
kios1 = Kios("KK-01", karyawan1, karyawanP1, makanan1,
             minuman1, transaksi1, pembagian1)
kios1.setTransaksi(transaksi2)
kios2 = Kios("KK-02", karyawan2, karyawanP2, makanan2, minuman2, transaksi3)

listKios = []
listKios.append(kios1)
listKios.append(kios2)

print("-- DATA KIOS  --")
for item in listKios:
    item.tampil()


# MENAMPILKAN DATA
print("+++++ DATA PENDAPATAN KIOS +++++")

print("Kode Kios : ", kios1.kodeKios)
print("=== DATA PEMILIK KIOS ===")
pemilik1.tampil()
print("=== DATA TRANSAKSI ===")
temp = kios1.transaksi
print("> Transaksi 1")
temp[0].tampil()
print("> Transaksi 2")
temp[1].tampil()
print("=== DATA PENDAPATAN PER HARI")
kios1.pembagianTransaksi.tampil()
print("=== KARYAWAN KIOS YANG BERTUGAS ===")
kios1.karyawanKios.tampil()
print("=== KARYAWAN PENGELOLA YANG BERTUGAS ===")
kios1.karyawanPengelola.tampil()

print("Kode Kios : ", kios2.kodeKios)
print("=== DATA PEMILIK KIOS ===")
pemilik2.tampil()
print("=== DATA TRANSAKSI ===")
temp = kios2.transaksi
print("> Transaksi 1")
temp[0].tampil()
print("=== KARYAWAN KIOS YANG BERTUGAS ===")
kios2.karyawanKios.tampil()
print("=== KARYAWAN PENGELOLA YANG BERTUGAS ===")
kios2.karyawanPengelola.tampil()

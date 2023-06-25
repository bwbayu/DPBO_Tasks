# LP7C2DPBO2022
Saya Bayu Wicaksono NIM 2106836 mengerjakan Latihan 7 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Design Program

![lp7dpbo2023](https://user-images.githubusercontent.com/100755457/232914010-9361b57d-5b69-4b2c-af9e-9ecce9b4bd3e.jpg)


Program ini memiliki 7 class dan 1 interface, antara lain :
1. class Controller, berfungsi untuk mengontrol objek dalam sebuah game. Class Controller memiliki dua atribut yaitu game dan handler, yang berturut-turut merupakan objek Game dan Handler. Metode utama pada class Controller adalah keyPressed() dan keyReleased(). Method keyPressed() dipanggil ketika pengguna menekan tombol pada keyboard dan method keyReleased() dipanggil ketika pengguna melepaskan tombol pada keyboard

2. class Display, berfungsi sebagai tampilan utama dalam permainan. Class Display memiliki dua metode publik yaitu open dan close. Metode open menerima objek Game dan menambahkannya ke dalam frame, kemudian menampilkan frame dan memulai permainan sedangkan metode close menutup frame permainan. 

3. class Game, class ini memiliki beberapa metode yang digunakan untuk mengontrol jalannya permainan, termasuk metode start() dan stop() untuk memulai dan menghentikan game, metode render() untuk merender tampilan game, dan metode loop() untuk menjalankan loop utama game.

4. class GameObject, class yang mengimplementasikan interface GameInterface. Kelas ini memiliki beberapa atribut seperti posisi (x dan y), dimensi (lebar dan tinggi), kecepatan (velX dan velY), serta jenis objek (type). Class ini juga memiliki beberapa method getter dan setter untuk atribut-atribut tersebut, dan sebuah method getBoundingBox() yang mengembalikan objek Rectangle yang merepresentasikan kotak pembatas objek tersebut.

5. class Handler, class Handler yang mengimplementasikan interface GameInterface. Class ini berfungsi sebagai pengelola (handler) dari objek-objek game dalam bentuk ArrayList yang disimpan dalam atribut object.

6. class Player, class Player merupakan subkelas dari kelas GameObject. Metode render digunakan untuk menampilkan bentuk pemain sesuai dengan tipe yang diberikan pada konstruktor. Jika tipe adalah "Player", maka bentuk pemain akan berupa lingkaran berwarna biru langit dengan ukuran 30x30 piksel. Sedangkan jika tipe adalah "Rintangan", maka bentuk pemain akan berupa persegi berwarna biru langit dengan ukuran 100x200 piksel. Metode loop digunakan untuk menginisialisasi kecepatan pada objek pemain, sehingga objek dapat bergerak. Selain itu, metode loop juga menginisialisasi batas pemain sehingga pemain tidak keluar dari area game.

7. class Synchronization, class Synchronization berisi method main(). Pada method main(), program akan membuat objek Game dan memulai menjalankan game tersebut. 
8. interface GameInterface, sebuah interface Java yang memiliki dua metode: render() dan loop(). Metode render() mengambil objek Graphics sebagai argumennya dan bertanggung jawab untuk merender objek di layar. Metode loop() bertanggung jawab untuk menyegarkan objek di layar.

## Alur Program
- gunakan WASD/arrow key untuk menggerakkan bola
- jika bola ada di dalam area persegi panjang, maka persegi panjang itu akan berpindah posisi secara random

## Dokumentasi
https://www.youtube.com/watch?v=mQos_D74e4U

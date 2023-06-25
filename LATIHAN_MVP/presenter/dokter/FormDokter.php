<?php

include_once("kontrak/dokter/KontrakDokterForm.php");

class FormDokterPresenter implements KontrakDokterPresenterForm
{
    private $tabelDokter;
    private $data = [];

    function __construct()
    {
        //konstruktor
        try {
            $db_host = "localhost"; // host 
            $db_user = "root"; // user
            $db_password = ""; // password
            $db_name = "latihan_pasien"; // nama basis data
            $this->tabelDokter = new TabelDokter($db_host, $db_user, $db_password, $db_name); //instansi TabelPasien
            $this->data = array(); //instansi list untuk data Pasien
            //data = new ArrayList<Pasien>;//instansi list untuk data Pasien
        } catch (Exception $e) {
            echo "wiw error" . $e->getMessage();
        }
    }

    function prosesDataDokter()
    {
        try {
            //mengambil data di tabel pasien
            $this->tabelDokter->open();
            $this->tabelDokter->getDokter();
            while ($row = $this->tabelDokter->getResult()) {
                $this->data[] = $row; //tambahkan data pasien ke dalam list
            }
            //tutup koneksi
            $this->tabelDokter->close();
        } catch (Exception $e) {
            //memproses error
            echo "wiw error part 2" . $e->getMessage();
        }
    }
    function getId($i)
    {
        //mengembalikan id Pasien dengan indeks ke i
        return $this->data[$i]['id'];
    }
    function getNik($i)
    {
        //mengembalikan nik Pasien dengan indeks ke i
        return $this->data[$i]['nik'];
    }
    function getNama($i)
    {
        //mengembalikan nama Pasien dengan indeks ke i
        return $this->data[$i]['nama'];
    }
    function getTempat($i)
    {
        //mengembalikan tempat Pasien dengan indeks ke i
        return $this->data[$i]['tempat'];
    }
    function getTl($i)
    {
        //mengembalikan tanggal lahir(TL) Pasien dengan indeks ke i
        return $this->data[$i]['tl'];
    }
    function getGender($i)
    {
        //mengembalikan gender Pasien dengan indeks ke i
        return $this->data[$i]['gender'];
    }
    function getEmail($i)
    {
        //mengembalikan email Pasien dengan indeks ke i
        return $this->data[$i]['email'];
    }
    function getTelp($i)
    {
        //mengembalikan telp Pasien dengan indeks ke i
        return $this->data[$i]['telp'];
    }
    function getSize()
    {
        return sizeof($this->data);
    }

    function addDokter($data)
    {
        $this->tabelDokter->open();
        $this->tabelDokter->addDokter($data);
        $this->tabelDokter->close();
        header("location:indexDokter.php");
    }

    function updateDokter($data)
    {
        $this->tabelDokter->open();
        $this->tabelDokter->updateDokter($data);
        $this->tabelDokter->close();
        header("location:indexDokter.php");
    }
}

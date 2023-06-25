
<?php

require_once("config.php");
require_once("model/DB.class.php");
require_once("model/masuk/Masuk.class.php");
require_once("model/masuk/QueryMasuk.class.php");

// class prosesmasuk merupakan viewmodel untuk meneruskan data dari view ke model masuk
class ProsesMasuk
{
    // private atribut
    private $db;
    private $data;

    // constructor
    public function __construct()
    {
        global $db_host, $db_user, $db_password, $db_name;
        $this->db = new QueryMasuk($db_host, $db_user, $db_password, $db_name);
        $this->data = array();
    }

    // membaca data dari tabel tmodulmasuk
    function readMasuk()
    {
        $this->db->open();
        $this->db->getMasuk();
        while ($row = $this->db->getResult()) {
            $masuk = new Masuk();
            $masuk->setId($row["idmodul"]);
            $masuk->setJudul($row['judulmodul']);
            $masuk->setTgl_masuk($row['tanggalmasuk']);
            $masuk->setNamaPengirim($row['namapengirim']);
            $masuk->setSkor($row['skor']);
            $masuk->setInsentif($row['insentif']);
            $this->data[] = $masuk;
        }
        $this->db->close();
    }

    // menambahkan data masuk ke dalam tabel
    function addMasuk($data)
    {
        $this->db->open();
        $this->db->addMasuk($data);
        $this->db->close();
    }

    // menghapus data masuk dari tabel
    function deleteMasuk($data)
    {
        $this->db->open();
        $this->db->deleteMasuk($data);
        $this->db->close();
    }

    // memperbarui data masuk dalam tabel
    function updateMasuk($data)
    {
        $this->db->open();
        $this->db->updateMasuk($data);
        $this->db->close();
    }

    // GETTER
    function getId($i)
    {
        return $this->data[$i]->getId();
    }

    function getJudul($i)
    {
        return $this->data[$i]->getJudul();
    }

    function getTgl_masuk($i)
    {
        return $this->data[$i]->getTgl_masuk();
    }

    function getNamaPengirim($i)
    {
        return $this->data[$i]->getNamaPengirim();
    }

    function getSkor($i)
    {
        return $this->data[$i]->getSkor();
    }

    function getInsentif($i)
    {
        return $this->data[$i]->getInsentif();
    }

    function getSize()
    {
        return sizeof($this->data);
    }

    // fungsi mencari id kemudian mengembalikan data dari id tersebut
    function searchId($id)
    {
        $result = null;
        for ($i = 0; $i < sizeof($this->data); $i++) {
            if ($this->data[$i]->getId() == $id) {
                $result = $i;
                break;
            }
        }

        return $result;
    }

    // fungsi untuk mencari last id
    function getLastId()
    {
        $len = null;
        for ($i = 0; $i < sizeof($this->data); $i++) {
            $len = $this->data[$i]->getId();
        }
        if ($len == null) {
            $len = 0;
        }
        // var_dump($len);
        // die();
        return $len;
    }
}

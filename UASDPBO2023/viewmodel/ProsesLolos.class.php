
<?php

require_once("config.php");
require_once("model/DB.class.php");
require_once("model/lolos/Lolos.class.php");
require_once("model/lolos/QueryLolos.class.php");

// class proseslolos merupakan viewmodel untuk meneruskan data dari view ke model lolos
class ProsesLolos
{
    // private atribut
    private $db;
    private $data;

    // constructor
    public function __construct()
    {
        global $db_host, $db_user, $db_password, $db_name;
        $this->db = new QueryLolos($db_host, $db_user, $db_password, $db_name);
        $this->data = array();
    }

    // membaca data dari tabel tmodullolos
    function readLolos()
    {
        $this->db->open();
        $this->db->getLolos();
        while ($row = $this->db->getResult()) {
            $lolos = new Lolos();
            $lolos->setId($row["idmodul"]);
            $lolos->setJudul($row['judulmodul']);
            $lolos->setTgl_masuk($row['tanggalmasuk']);
            $lolos->setNamaPengirim($row['namapengirim']);
            $lolos->setSkor($row['skor']);
            $lolos->setInsentif($row['insentif']);
            $this->data[] = $lolos;
        }
        $this->db->close();
    }

    // menambahkan data lolos ke dalam tabel
    function addLolos($data)
    {
        $this->db->open();
        $this->db->addLolos($data);
        $this->db->close();
    }

    // menghapus data masuk dari tabel
    function deleteLolos($data)
    {
        $this->db->open();
        $this->db->deleteLolos($data);
        $this->db->close();
    }

    // memperbarui data masuk dalam tabel
    function updateLolos($data)
    {
        $this->db->open();
        $this->db->updateLolos($data);
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

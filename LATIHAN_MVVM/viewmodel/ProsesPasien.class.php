<?php

require_once("config.php");
require_once("model/DB.class.php");
require_once("model/pasien/Pasien.class.php");
require_once("model/pasien/QueryPasien.class.php");

class ProsesPasien
{
    private $db;
    private $data;

    public function __construct()
    {
        global $db_host, $db_user, $db_password, $db_name;
        $this->db = new QueryPasien($db_host, $db_user, $db_password, $db_name);
        $this->data = array();
    }

    function readPasien()
    {
        $this->db->open();
        $this->db->getPasien();
        while ($row = $this->db->getResult()) {
            $pasien = new Pasien();
            $pasien->setId($row["id"]);
            $pasien->setNama($row['nama']);
            $pasien->setTgl_lahir($row['tgl_lahir']);
            $pasien->setGender($row['gender']);
            $pasien->setEmail($row['email']);
            $this->data[] = $pasien;
        }
        $this->db->close();
    }

    function addPasien($data)
    {
        $this->db->open();
        $this->db->addPasien($data);
        $this->db->close();
    }

    function updatePasien($data)
    {
        $this->db->open();
        $this->db->updatePasien($data);
        $this->db->close();
    }

    function deletePasien($id)
    {
        $this->db->open();
        $this->db->deletePasien($id);
        $this->db->close();
    }

    function getId($i)
    {
        return $this->data[$i]->getId();
    }

    function getNama($i)
    {
        return $this->data[$i]->getNama();
    }

    function getTgl_lahir($i)
    {
        return $this->data[$i]->getTgl_lahir();
    }

    function getGender($i)
    {
        return $this->data[$i]->getGender();
    }

    function getEmail($i)
    {
        return $this->data[$i]->getEmail();
    }

    function getSize()
    {
        return sizeof($this->data);
    }
}

<?php

require_once("config.php");
require_once("model/DB.class.php");
require_once("model/dokter/Dokter.class.php");
require_once("model/dokter/QueryDokter.class.php");

class ProsesDokter
{
    private $db;
    private $data;

    public function __construct()
    {
        global $db_host, $db_user, $db_password, $db_name;
        $this->db = new QueryDokter($db_host, $db_user, $db_password, $db_name);
        $this->data = array();
    }

    function readDokter()
    {
        $this->db->open();
        $this->db->getDokter();
        while ($row = $this->db->getResult()) {
            $dokter = new Dokter();
            $dokter->setId($row["id"]);
            $dokter->setNama($row['nama']);
            $dokter->setTgl_lahir($row['tgl_lahir']);
            $dokter->setGender($row['gender']);
            $dokter->setEmail($row['email']);
            $this->data[] = $dokter;
        }
        $this->db->close();
    }

    function addDokter($data)
    {
        $this->db->open();
        $this->db->addDokter($data);
        $this->db->close();
    }

    function updateDokter($data)
    {
        $this->db->open();
        $this->db->updateDokter($data);
        $this->db->close();
    }

    function deleteDokter($id)
    {
        $this->db->open();
        $this->db->deleteDokter($id);
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

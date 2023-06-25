<?php

class Dokter
{
    private $id = '';
    private $nama = '';
    private $tgl_lahir = '';
    private $gender = '';
    private $email = '';

    function __construct($id = '', $nama = '', $tgl_lahir = '', $gender = '', $email = '')
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->tgl_lahir = $tgl_lahir;
        $this->gender = $gender;
        $this->email = $email;
    }

    function setId($id)
    {
        $this->id = $id;
    }
    function setNama($nama)
    {
        $this->nama = $nama;
    }
    function setTgl_lahir($tgl_lahir)
    {
        $this->tgl_lahir = $tgl_lahir;
    }
    function setGender($gender)
    {
        $this->gender = $gender;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }

    function getId()
    {
        return $this->id;
    }
    function getNama()
    {
        return $this->nama;
    }
    function getTgl_lahir()
    {
        return $this->tgl_lahir;
    }
    function getGender()
    {
        return $this->gender;
    }
    function getEmail()
    {
        return $this->email;
    }
}

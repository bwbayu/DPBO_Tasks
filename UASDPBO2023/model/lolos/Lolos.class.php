<?php

// class untuk objek modul lolos dari tabel tmodullolos
class Lolos
{
    // private atribut
    private $id;
    private $judul;
    private $tgl_masuk;
    private $namaPengirim;
    private $skor;
    private $insentif;

    // constructor
    function __construct($id = '', $judul = '', $tgl_masuk = '', $namaPengirim = '', $skor = 0, $insentif = 0)
    {
        $this->id = $id;
        $this->judul = $judul;
        $this->tgl_masuk = $tgl_masuk;
        $this->namaPengirim = $namaPengirim;
        $this->skor = $skor;
        $this->insentif = $insentif;
    }

    // setter getter
    function setId($id)
    {
        $this->id = $id;
    }
    function setJudul($judul)
    {
        $this->judul = $judul;
    }
    function setTgl_masuk($tgl_masuk)
    {
        $this->tgl_masuk = $tgl_masuk;
    }
    function setNamaPengirim($namaPengirim)
    {
        $this->namaPengirim = $namaPengirim;
    }
    function setSkor($skor)
    {
        $this->skor = $skor;
    }
    function setInsentif($insentif)
    {
        $this->insentif = $insentif;
    }

    function getId()
    {
        return $this->id;
    }
    function getJudul()
    {
        return $this->judul;
    }
    function getTgl_masuk()
    {
        return $this->tgl_masuk;
    }
    function getNamaPengirim()
    {
        return $this->namaPengirim;
    }
    function getSkor()
    {
        return $this->skor;
    }
    function getInsentif()
    {
        return $this->insentif;
    }
}

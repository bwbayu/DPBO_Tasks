<?php

interface KontrakPasienView
{
    public function tampil();
}

interface KontrakPasienForm
{
    public function prosesDataPasien();
    public function getId($i);
    public function getNik($i);
    public function getNama($i);
    public function getTempat($i);
    public function getTl($i);
    public function getGender($i);
    public function getSize();
    public function addPasien($data, $file);
    public function updatePasien($data, $file);
}

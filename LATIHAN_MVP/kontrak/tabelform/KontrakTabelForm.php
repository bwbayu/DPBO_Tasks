<?php

interface KontrakTabelForm
{
    public function tampil();
}

interface KontrakTabelFormPresenter
{
    public function prosesDataDokter();
    public function getId($i);
    public function getNik($i);
    public function getNama($i);
    public function getTempat($i);
    public function getTl($i);
    public function getGender($i);
    public function getSize();
    public function addDokter($data);
    public function updateDokter($data);
    public function deleteDokter($id);
}

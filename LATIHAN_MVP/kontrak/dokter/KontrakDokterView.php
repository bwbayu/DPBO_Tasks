<?php

interface KontrakDokterView
{
    public function tampil();
}

interface KontrakDokterPresenterView
{
    public function prosesDataDokter();
    public function getId($i);
    public function getNik($i);
    public function getNama($i);
    public function getTempat($i);
    public function getTl($i);
    public function getGender($i);
    public function getSize();
    public function deleteDokter($id);
}

<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/pasien/Pasien.class.php");
include_once("model/pasien/TabelPasien.class.php");
include_once("view/pasien/TampilPasien.php");


$tp = new TampilPasien();
$data = $tp->tampil();
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if ($id > 0) {
        $tp->deletePasien($id);
    }
}

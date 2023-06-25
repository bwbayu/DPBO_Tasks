<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/dokter/Dokter.class.php");
include_once("model/dokter/TabelDokter.class.php");
include_once("view/dokter/TampilDokter.php");


$tp = new TampilDokter();
$data = $tp->tampil();
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if ($id > 0) {
        $tp->deleteDokter($id);
    }
}

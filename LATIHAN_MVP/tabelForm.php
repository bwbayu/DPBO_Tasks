<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/dokter/Dokter.class.php");
include_once("model/dokter/TabelDokter.class.php");
include_once("view/tabelform/TampilTabel.php");


$tp = new TampilTabelForm();
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if ($id > 0) {
        $tp->deleteDokter($id);
    }
}

if (isset($_POST['add'])) {
    $tp->addDokter($_POST);
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tp->tampilUpdate($id); // nampilin form update
} else if (isset($_POST['update'])) {
    $tp->updateDokter($_POST);
} else {
    $data = $tp->tampil();
}

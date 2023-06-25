<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/pasien/Pasien.class.php");
include_once("model/pasien/TabelPasien.class.php");
include_once("view/pasien/FormPasien.php");


$tp = new FormPasienView();

if (isset($_POST['add'])) {
    $tp->addPasien($_POST, $_FILES);
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tp->tampilUpdate($id); // nampilin form update
} else if (isset($_POST['update'])) {
    $tp->updatePasien($_POST, $_FILES);
} else {
    $data = $tp->tampil();
}

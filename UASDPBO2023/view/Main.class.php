<?php

include("model/Template.class.php");
include("viewmodel/ProsesMasuk.class.php");
include("viewmodel/ProsesLolos.class.php");

// main view
class Main
{
    // private atribut, $masuk untuk data dari viewmodel modul masuk, $lolos untuk data dari viewmodel modul lolos
    private $masuk, $lolos, $template;

    // constructor
    function __construct()
    {
        $this->masuk = new ProsesMasuk();
        $this->lolos = new ProsesLolos();
    }

    // main function
    function view()
    {
        // menampilkan data tabel modul masuk
        $data_table_masuk = null;
        $this->masuk->readMasuk();
        for ($i = 0; $i < $this->masuk->getSize(); $i++) {
            $data_table_masuk .= '<tr>
			<td>' . $this->masuk->getId($i) . '</td>
			<td>' . $this->masuk->getJudul($i) . '</td>
			<td>' . $this->masuk->getTgl_masuk($i) . '</td>
			<td>' . $this->masuk->getNamaPengirim($i) . '</td>
			<td>
            <form action = "index.php" method = "POST">
            <input type = "hidden" id = "id" name = "idmodul" value = ' . $this->masuk->getId($i) . '>
            <input type = "number" id = "skor" name = "skor" step="0.01" value = ' . $this->masuk->getSkor($i) . ' required />
            </td>
			<td>
            <button type = "submit" name = "simpan_skor" class = "btn btn-success">Simpan</button>
            </form>
            </td>
			<td>' . $this->masuk->getInsentif($i) . '</td>
			<td><a href="index.php?lolos=' . $this->masuk->getId($i) . '"><button type="button" class="btn btn-primary text-white">Lolos</button></a></td>
			</tr>';
        }

        // menampilkan data tabel modul lolos
        $data_table_lolos = null;
        $this->lolos->readLolos();
        for ($i = 0; $i < $this->lolos->getSize(); $i++) {
            $data_table_lolos .= '<tr>
			<td>' . $this->lolos->getId($i) . '</td>
			<td>' . $this->lolos->getJudul($i) . '</td>
			<td>' . $this->lolos->getTgl_masuk($i) . '</td>
			<td>' . $this->lolos->getNamaPengirim($i) . '</td>
			<td>' . $this->lolos->getSkor($i) . '</td>
			<td>
            <form action = "index.php" method = "POST">
            <input type = "hidden" id = "id" name = "idmodul" value = ' . $this->lolos->getId($i) . '>
            <input type = "number" id = "insentif" step="0.01" name = "insentif" value = ' . $this->lolos->getInsentif($i) . ' required />
            </td>
			<td>
            <button type = "submit" name = "simpan_insentif" class = "btn btn-success">Simpan</button>
            </form>
            </td>
			<td><a href="index.php?tlolos=' . $this->lolos->getId($i) . '"><button type="button" class="btn btn-primary text-white">Tidak Lolos</button></a></td>
			</tr>';
        }

        // menambahkan data modul masuk
        if (isset($_POST['add'])) {
            // id modul di set otomatis, dimana dia akan mencari last id di tabel tmodulmasuk kemudian menambahkan 1 dari id tersebut agar tidak tabrakan
            // jika tabel kosong, maka last id di tabel tmodulmasuk adalah 0
            $_POST['idmodul'] = $this->masuk->getLastId() + 1;
            // var_dump($_POST);
            // die;

            $this->masuk->addMasuk($_POST);
            header("Location:index.php");
            die();
        }

        // mengupdate data skor modul masuk
        if (isset($_POST['simpan_skor'])) {
            // var_dump($_POST);
            // die;
            $this->masuk->updateMasuk($_POST);
            header("Location:index.php");
            die();
        }

        // mengupdate data insentif modul masuk
        if (isset($_POST['simpan_insentif'])) {
            // var_dump($_POST);
            // die;
            $this->lolos->updateLolos($_POST);
            header("Location:index.php");
            die();
        }

        // memindahkan data modul masuk ke modul lolos
        if (isset($_GET['lolos'])) {
            $id = $this->masuk->searchId($_GET['lolos']); //cari id
            // menampung data dari $id
            $data = [];
            $data['idmodul'] = $this->lolos->getLastId() + 1; //mendapatkan id modul
            $data['judul'] = $this->masuk->getJudul($id);
            $data['tgl_masuk'] = $this->masuk->getTgl_masuk($id);
            $data['namaPengirim'] = $this->masuk->getNamaPengirim($id);
            $data['skor'] = $this->masuk->getSkor($id);
            $data['insentif'] = $this->masuk->getInsentif($id);
            // var_dump($data);
            // die;
            $this->lolos->addLolos($data); //memasukkan ke tabel tmodullolos
            $this->masuk->deleteMasuk($this->masuk->getId($id)); //menghapus data dari tabel tmodulmasuk
            header("Location:index.php");
            die();
        }

        // memindahkan data modul lolos ke modul masuk
        if (isset($_GET['tlolos'])) {
            $id = $this->lolos->searchId($_GET['tlolos']); //cari id
            $data = [];
            $data['idmodul'] = $this->masuk->getLastId() + 1; //mendapatkan id modul
            $data['judul'] = $this->lolos->getJudul($id);
            $data['tgl_masuk'] = $this->lolos->getTgl_masuk($id);
            $data['namaPengirim'] = $this->lolos->getNamaPengirim($id);
            $data['skor'] = $this->lolos->getSkor($id);
            $data['insentif'] = $this->lolos->getInsentif($id);
            // var_dump($data);
            // die;
            $this->masuk->addMasuk($data); //memasukkan ke tabel tmodulmasuk
            $this->lolos->deleteLolos($this->lolos->getId($id)); //menghapus data dari tabel tmodullolos
            header("Location:index.php");
            die();
        }

        // menampilkan template
        $this->template = new Template("view/template/skin.html");
        $this->template->replace("DATA_TABEL_A", $data_table_masuk);
        $this->template->replace("DATA_TABEL_B", $data_table_lolos);
        $this->template->write();
    }
}

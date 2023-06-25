<?php


include_once("kontrak/dokter/KontrakDokterView.php");
include_once("presenter/dokter/ProsesDokter.php");

class TampilDokter implements KontrakDokterView
{
    private $prosesDokter; //presenter yang dapat berinteraksi langsung dengan view
    private $tpl;

    function __construct()
    {
        //konstruktor
        $this->prosesDokter = new ProsesDokter();
    }

    function tampil()
    {
        $this->prosesDokter->prosesDataDokter();
        $data = null;
        $header = '
			<tr>
            <th scope="col">NO</th>
            <th scope="col">NIK</th>
            <th scope="col">NAMA</th>
            <th scope="col">TEMPAT</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">GENDER</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELP</th>
            <th scope="col">ACTION</th>
          </tr>
		';
        //semua terkait tampilan adalah tanggung jawab view
        for ($i = 0; $i < $this->prosesDokter->getSize(); $i++) {
            $no = $i + 1;
            $data .= '<tr>
			<td>' . $no . '</td>
			<td>' . $this->prosesDokter->getNik($i) . '</td>
			<td>' . $this->prosesDokter->getNama($i) . '</td>
			<td>' . $this->prosesDokter->getTempat($i) . '</td>
			<td>' . $this->prosesDokter->getTl($i) . '</td>
			<td>' . $this->prosesDokter->getGender($i) . '</td>
			<td>' . $this->prosesDokter->getEmail($i) . '</td>
			<td>' . $this->prosesDokter->getTelp($i) . '</td>
			<td><a href="addDokter.php?id=' . $i . '"><button type="button" class="btn btn-success text-white">Update</button></a>
			<a href="indexDokter.php?hapus=' . $this->prosesDokter->getId($i) . '"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>';
        }
        // Membaca template skin.html
        $this->tpl = new Template("templates/skin.html");

        // Mengganti kode Data_Tabel dengan data yang sudah diproses
        $this->tpl->replace("DATA_TABEL", $data);
        $this->tpl->replace("DATA_HEADER", $header);
        $this->tpl->replace("DATA_TITLE", "Dokter");
        $this->tpl->replace("DATA_LINK", "addDokter.php");


        // Menampilkan ke layar
        $this->tpl->write();
    }

    function deleteDokter($id)
    {
        $this->prosesDokter->deleteDokter($id);
    }
}

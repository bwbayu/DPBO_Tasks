<?php


include_once("kontrak/pasien/KontrakPasien.php");
include_once("presenter/pasien/ProsesPasien.php");

class TampilPasien implements KontrakPasienView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosespasien = new ProsesPasien();
	}

	function tampil()
	{
		$this->prosespasien->prosesDataPasien();
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
            <th scope="col">FOTO</th>
            <th scope="col">ACTION</th>
          </tr>
		';
		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
			$no = $i + 1;
			$data .= '<tr>
			<td>' . $no . '</td>
			<td>' . $this->prosespasien->getNik($i) . '</td>
			<td>' . $this->prosespasien->getNama($i) . '</td>
			<td>' . $this->prosespasien->getTempat($i) . '</td>
			<td>' . $this->prosespasien->getTl($i) . '</td>
			<td>' . $this->prosespasien->getGender($i) . '</td>
			<td>' . $this->prosespasien->getEmail($i) . '</td>
			<td>' . $this->prosespasien->getTelp($i) . '</td>
			<td><img src="assets/images/' . $this->prosespasien->getFoto($i) . '" class="img-thumbnail fixed-image" alt="' . $this->prosespasien->getFoto($i) . '" width="100"></td>
			<td><a href="add.php?id=' . $i . '"><button type="button" class="btn btn-success text-white">Update</button></a>
			<a href="index.php?hapus=' . $this->prosespasien->getId($i) . '"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>';
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);
		$this->tpl->replace("DATA_HEADER", $header);
		$this->tpl->replace("DATA_TITLE", "Pasien");
		$this->tpl->replace("DATA_LINK", "add.php");

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function deletePasien($id)
	{
		$this->prosespasien->deletePasien($id);
	}
}

<?php


include_once("kontrak/tabelform/KontrakTabelForm.php");
include_once("presenter/tabelform/ProsesTabelForm.php");

class TampilTabelForm implements KontrakTabelForm
{
	private $prosesDokter; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosesDokter = new ProsesTabelForm();
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
			<td><a href="tabelForm.php?id=' . $i . '"><button type="button" class="btn btn-success text-white">Update</button></a>
			<a href="tabelForm.php?hapus=' . $this->prosesDokter->getId($i) . '"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>';
		}

		$dataForm = null;
		$dataForm .= '<form method="post" action="tabelForm.php">
		<div class="container mt-5">
		  <div class="card">
			<div class="card-header">
      <h1 class="text-white text-center">Add Pasien</h1>
    </div>
			<div class="card-body">
			  <div class="form-group">
				<label for="nik">NIK:</label>
				<input type="text" name="nik" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" name="nama" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="tempat">Tempat:</label>
				<input type="text" name="tempat" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="lahir">Tanggal Lahir:</label>
				<input type="date" name="lahir" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="gender">Gender:</label>
				<select name="gender" class="form-control" required>
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			  <div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" required>
			  </div>
			  <div class="form-group">
				<label for="telp">Telepon:</label>
				<input type="tel" name="telp" class="form-control" required>
			  </div>
			</div>
			<div class="card-footer">
			  <button class="btn btn-success" type="submit" name="add">Submit</button>
			  <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
		  </div>
		</div>
	  </form>';
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin2tabel.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);
		$this->tpl->replace("DATA_HEADER", $header);
		$this->tpl->replace("DATA_TITLE", "Dokter");
		$this->tpl->replace("DATA_LINK", "tabelForm.php");
		$this->tpl->replace("DATA_FORM", $dataForm);
		$this->tpl->replace("DATA_JENIS", "Add");

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function tampilUpdate($id)
	{
		$this->prosesDokter->prosesDataDokter();
		$dataTabel = null;
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
			$dataTabel .= '<tr>
			<td>' . $no . '</td>
			<td>' . $this->prosesDokter->getNik($i) . '</td>
			<td>' . $this->prosesDokter->getNama($i) . '</td>
			<td>' . $this->prosesDokter->getTempat($i) . '</td>
			<td>' . $this->prosesDokter->getTl($i) . '</td>
			<td>' . $this->prosesDokter->getGender($i) . '</td>
			<td>' . $this->prosesDokter->getEmail($i) . '</td>
			<td>' . $this->prosesDokter->getTelp($i) . '</td>
			<td><a href="tabelForm.php?id=' . $i . '"><button type="button" class="btn btn-success text-white">Update</button></a>
			<a href="tabelForm.php?hapus=' . $this->prosesDokter->getId($i) . '"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>';
		}

		$listGender = ["Male", "Female"];
		$dataGender = '<option value="">Pilih Gender</option>';
		foreach ($listGender as $data) {
			if ($data == $this->prosesDokter->getGender($id)) { // jika group id dari database adalah group id pilihan user yang mau di update maka group id itu akan dikecualikan
				$dataGender .= '<option value="' . $data . '" selected>' . $data . '</option>';
			} else {
				$dataGender .= '<option value="' . $data . '">' . $data . '</option>';
			}
		}
		$dataform = null;
		$dataform .= '<form method="post" action="tabelForm.php">
		<div class="container mt-5">
		  <div class="card">
			<div class="card-header">
      <h1 class="text-white text-center">Update Pasien</h1>
    </div>
			<div class="card-body">
			  <div class="form-group">
        <input type="hidden" name="id" value="' . $this->prosesDokter->getId($id) . '" >
				<label for="nik">NIK:</label>
				<input type="text" name="nik" class="form-control" value="' . $this->prosesDokter->getNik($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" name="nama" class="form-control" value="' . $this->prosesDokter->getNama($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="tempat">Tempat:</label>
				<input type="text" name="tempat" class="form-control" value="' . $this->prosesDokter->getTempat($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="lahir">Tanggal Lahir:</label>
				<input type="date" name="lahir" class="form-control" value="' . $this->prosesDokter->getTl($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="gender">Gender:</label>
				<select name="gender" class="form-control" value="' . $this->prosesDokter->getGender($id) . '" required>
					DATA_GENDER
				</select>
			</div>
			  <div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" value="' . $this->prosesDokter->getEmail($id) . '" required>
			  </div>
			  <div class="form-group">
				<label for="telp">Telepon:</label>
				<input type="tel" name="telp" class="form-control" value="' . $this->prosesDokter->getTelp($id) . '" required>
			  </div>
			</div>
			<div class="card-footer">
			  <button class="btn btn-success" type="submit" name="update">Update</button>
			  <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
		  </div>
		</div>
	  </form>';
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin2tabel.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $dataTabel);
		$this->tpl->replace("DATA_HEADER", $header);
		$this->tpl->replace("DATA_TITLE", "Dokter");
		$this->tpl->replace("DATA_LINK", "tabelForm.php");
		$this->tpl->replace("DATA_FORM", $dataform);
		$this->tpl->replace("DATA_JENIS", "Add");
		$this->tpl->replace("DATA_GENDER", $dataGender);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function deleteDokter($id)
	{
		$this->prosesDokter->deleteDokter($id);
	}

	function addDokter($data)
	{
		$this->prosesDokter->addDokter($data);
	}

	function updateDokter($data)
	{
		$this->prosesDokter->updateDokter($data);
	}
}

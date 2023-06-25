<?php


include_once("kontrak/dokter/KontrakDokterForm.php");
include_once("presenter/dokter/FormDokter.php");

class FormDokterView implements KontrakDokterView
{
	private $prosesDokter; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosesDokter = new FormDokterPresenter();
	}

	function tampil()
	{
		$data = null;
		$data .= '<form method="post" action="addDokter.php">
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
		$this->tpl = new Template("templates/form.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_FORM", $data);
		$this->tpl->replace("DATA_JENIS", "Add");
		$this->tpl->replace("DATA_TITLE", "Dokter");

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function tampilUpdate($id)
	{
		$this->prosesDokter->prosesDataDokter();
		$listGender = ['Male', "Female"];
		$dataGender = '<option value="">Pilih Gender</option>';
		foreach ($listGender as $data) {
			if ($data == $this->prosesDokter->getGender($id)) { // jika group id dari database adalah group id pilihan user yang mau di update maka group id itu akan dikecualikan
				$dataGender .= '<option value="' . $data . '" selected>' . $data . '</option>';
			} else {
				$dataGender .= '<option value="' . $data . '" selected>' . $data . '</option>';
			}
		}
		$data = null;
		$data .= '<form method="post" action="addDokter.php">
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
		$this->tpl = new Template("templates/form.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_FORM", $data);
		$this->tpl->replace("DATA_JENIS", "Update");
		$this->tpl->replace("DATA_GENDER", $dataGender);
		$this->tpl->replace("DATA_TITLE", "Dokter");

		// Menampilkan ke layar
		$this->tpl->write();
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

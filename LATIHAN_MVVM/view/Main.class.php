<?php

include("model/Template.class.php");
include("viewmodel/ProsesDokter.class.php");
include("viewmodel/ProsesPasien.class.php");

class Main
{
    private $dokter, $pasien, $template;

    function __construct()
    {
        $this->dokter = new ProsesDokter();
        $this->pasien = new ProsesPasien();
    }

    function view()
    {
        // menghapus data dokter
        if (isset($_GET['id_hapus_d'])) {
            $id = $_GET['id_hapus_d'];
            $this->dokter->deleteDokter($id);
            header("Location:index.php");
            die();
        }

        // menampilkan data table dokter
        $data_header_dokter = '
			<tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">GENDER</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACTION</th>
          </tr>
		';
        $data_table_dokter = null;
        $this->dokter->readDokter();
        for ($i = 0; $i < $this->dokter->getSize(); $i++) {
            $no = $i + 1;
            $data_table_dokter .= '<tr>
			<td>' . $no . '</td>
			<td>' . $this->dokter->getNama($i) . '</td>
			<td>' . $this->dokter->getTgl_lahir($i) . '</td>
			<td>' . $this->dokter->getGender($i) . '</td>
			<td>' . $this->dokter->getEmail($i) . '</td>
            <td><a href="index.php?id_update_d=' . $i . '"><button type="button" class="btn btn-success text-white">Update</button></a>
			<a href="index.php?id_hapus_d=' . $this->dokter->getId($i) . '"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>';
        }
        // mengupdate data dokter
        if (isset($_POST['update_d'])) {
            // var_dump($_POST);
            // die();
            $this->dokter->updateDokter($_POST);
            header("Location:index.php");
            die();
        }
        // menambahkan data dokter
        if (isset($_POST['add_d'])) {
            $this->dokter->addDokter($_POST);
            header("Location:index.php");
            die();
        }

        // mengupdate data dokter
        if (isset($_POST['update_p'])) {
            // var_dump($_POST);
            // die();
            $this->pasien->updatePasien($_POST);
            header("Location:index.php");
            die();
        }

        // menghapus data pasien
        if (isset($_GET['id_hapus_p'])) {
            $id = $_GET['id_hapus_p'];
            $this->pasien->deletePasien($id);
            header("Location:index.php");
            die();
        }
        // menampilkan data table pasien
        $data_header_pasien = '
			<tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">GENDER</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACTION</th>
          </tr>
		';
        $data_table_pasien = null;
        $this->pasien->readPasien();
        for ($i = 0; $i < $this->pasien->getSize(); $i++) {
            $no = $i + 1;
            $data_table_pasien .= '<tr>
			<td>' . $no . '</td>
			<td>' . $this->pasien->getNama($i) . '</td>
			<td>' . $this->pasien->getTgl_lahir($i) . '</td>
			<td>' . $this->pasien->getGender($i) . '</td>
			<td>' . $this->pasien->getEmail($i) . '</td>
            <td><a href="index.php?id_update_p=' . $i . '"><button type="button" class="btn btn-success text-white">Update</button></a>
			<a href="index.php?id_hapus_p=' . $this->pasien->getId($i) . '"><button type="button" class="btn btn-danger">Delete</button></a></td>
			</tr>';
        }

        // menambahkan data pasien
        if (isset($_POST['add_p'])) {
            // var_dump($_POST);
            // die;
            $this->pasien->addPasien($_POST);
            header("Location:index.php");
            die();
        }

        // menampilkan form
        $data_title_dy = "Dokter";
        $data_btn_add = "add_d";
        $data_type = "Add";
        if (isset($_GET['id_add'])) {
            $i = $_GET['id_add'];
            if ($i == 1) {
                $data_title_dy = "Dokter";
                $data_btn_add = "add_d";
            } else {
                $data_title_dy = "Pasien";
                $data_btn_add = "add_p";
            }
            $data_type = "Add";
        }
        $data_form = '<form method="post" action="index.php">
		<div class="container mt-5">
		  <div class="card">
			<div class="card-body">
			  <div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" name="nama" class="form-control" required>
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
			</div>
			<div class="card-footer">
			  <button class="btn btn-success" type="submit" name=DATA_BTN_ADD>Submit</button>
			  <button class="btn btn-danger" type="reset">Cancel</button>
			</div>
		  </div>
		</div>
	  </form>';

        // mengupdate data dokter
        if (isset($_GET['id_update_d'])) {
            $id = $_GET['id_update_d'];
            $data_form = '<form method="post" action="index.php">
                <div class="container mt-5">
                  <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id" value="' . $this->dokter->getId($id) . '" >
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control" value="' . $this->dokter->getNama($id) . '" required>
                        </div>
                        <div class="form-group">
                            <label for="lahir">Tanggal Lahir:</label>
                            <input type="date" name="lahir" class="form-control" value="' . $this->dokter->getTgl_lahir($id) . '" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control" required>
                                <option value="">Select Gender</option>';
            if ($this->dokter->getGender($id) == "male") {
                $data_form .= '
                    <option value="male" selected>Male</option>
                    <option value="female">Female</option>
                ';
            } else {
                $data_form .= '
                    <option value="male">Male</option>
                    <option value="female" selected>Female</option>
                ';
            }
            $data_form .= '</select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" value="' . $this->dokter->getEmail($id) . '" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit" name="DATA_BTN_ADD">Submit</button>
                        <button class="btn btn-danger" type="reset">Cancel</button>
                    </div>
                </div>
            </div>
        </form>';
            $data_title_dy = "Dokter";
            $data_btn_add = "update_d";
            $data_type = "Update";
        }

        if (isset($_GET['id_update_p'])) {
            $id = $_GET['id_update_p'];
            $data_form = '<form method="post" action="index.php">
                <div class="container mt-5">
                  <div class="card">
                    <div class="card-body">
                        <input type="hidden" name="id" value="' . $this->pasien->getId($id) . '" >
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" class="form-control" value="' . $this->pasien->getNama($id) . '" required>
                        </div>
                        <div class="form-group">
                            <label for="lahir">Tanggal Lahir:</label>
                            <input type="date" name="lahir" class="form-control" value="' . $this->pasien->getTgl_lahir($id) . '" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control" required>
                                <option value="">Select Gender</option>';
            if ($this->pasien->getGender($id) == "male") {
                $data_form .= '
                    <option value="male" selected>Male</option>
                    <option value="female">Female</option>
                ';
            } else {
                $data_form .= '
                    <option value="male">Male</option>
                    <option value="female" selected>Female</option>
                ';
            }
            $data_form .= '</select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" value="' . $this->pasien->getEmail($id) . '" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit" name="DATA_BTN_ADD">Submit</button>
                        <button class="btn btn-danger" type="reset">Cancel</button>
                    </div>
                </div>
            </div>
        </form>';
            $data_title_dy = "Pasien";
            $data_btn_add = "update_p";
            $data_type = "Update";
        }
        // menampilkan template
        $this->template = new Template("view/template/skin.html");
        $this->template->replace("DATA_TABEL_A", $data_table_dokter);
        $this->template->replace("DATA_TITLE_A", "Dokter");
        $this->template->replace("DATA_HEADER_A", $data_header_dokter);
        $this->template->replace("DATA_TABEL_B", $data_table_pasien);
        $this->template->replace("DATA_TITLE_B", "Pasien");
        $this->template->replace("DATA_HEADER_B", $data_header_pasien);
        $this->template->replace("DATA_FORM", $data_form);
        $this->template->replace("DATA_TITLE_DY", $data_title_dy);
        $this->template->replace("DATA_BTN_ADD", $data_btn_add);
        $this->template->replace("DATA_TYPE", $data_type);
        $this->template->write();
    }
}

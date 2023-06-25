<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function deletePasien($id)
	{
		$query = "DELETE FROM pasien WHERE id = '$id'";
		return $this->execute($query);
	}

	function addPasien($data, $file)
	{
		$nik = $data["nik"];
		$nama = $data["nama"];
		$tempat = $data["tempat"];
		$tl = $data["lahir"];
		$gender = $data["gender"];
		$email = $data["email"];
		$telp = $data["telp"];
		// foto
		$fileName = $file['foto']['name'];
		$uploadedFile = $file['foto']['tmp_name'];
		$dir = 'assets/images/' . $fileName;
		$temp = move_uploaded_file($uploadedFile, $dir);
		if (!$temp) {
			$dir = 'assets/images/default.jpg';
		}

		$query = "INSERT INTO pasien values('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp', '$fileName')";
		return $this->execute($query);
	}

	function updatePasien($data, $file)
	{
		$id = $data['id'];
		$nik = $data["nik"];
		$nama = $data["nama"];
		$tempat = $data["tempat"];
		$tl = $data["lahir"];
		$gender = $data["gender"];
		$email = $data["email"];
		$telp = $data["telp"];
		// foto
		$fileName = $file['foto']['name'];
		$uploadedFile = $file['foto']['tmp_name'];
		$dir = 'assets/images/' . $fileName;
		$temp = move_uploaded_file($uploadedFile, $dir);
		if (!$temp) {
			$dir = 'assets/images/default.jpg';
		}

		$query = "UPDATE pasien set nik='$nik', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp', foto='$fileName' where id='$id'";
		return $this->execute($query);
	}
}

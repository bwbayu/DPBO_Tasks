<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelDokter extends DB
{
    function getDokter()
    {
        // Query mysql select data pasien
        $query = "SELECT * FROM dokter";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function deleteDokter($id)
    {
        $query = "DELETE FROM dokter WHERE id = '$id'";
        return $this->execute($query);
    }

    function addDokter($data)
    {
        $nik = $data["nik"];
        $nama = $data["nama"];
        $tempat = $data["tempat"];
        $tl = $data["lahir"];
        $gender = $data["gender"];
        $email = $data["email"];
        $telp = $data["telp"];

        $query = "INSERT INTO dokter values('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
        return $this->execute($query);
    }

    function updateDokter($data)
    {
        $id = $data['id'];
        $nik = $data["nik"];
        $nama = $data["nama"];
        $tempat = $data["tempat"];
        $tl = $data["lahir"];
        $gender = $data["gender"];
        $email = $data["email"];
        $telp = $data["telp"];

        $query = "UPDATE dokter set nik='$nik', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp' where id='$id'";
        return $this->execute($query);
    }
}

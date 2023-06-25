<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class QueryDokter extends DB
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
        $nama = $data["nama"];
        $tl = $data["lahir"];
        $gender = $data["gender"];
        $email = $data["email"];

        $query = "INSERT INTO dokter values('', '$nama', '$tl', '$gender', '$email')";
        return $this->execute($query);
    }

    function updateDokter($data)
    {
        $id = $data["id"];
        $nama = $data["nama"];
        $tl = $data["lahir"];
        $gender = $data["gender"];
        $email = $data["email"];
        $query = "UPDATE dokter SET nama='$nama', tgl_lahir='$tl', gender='$gender', email='$email' WHERE id='$id'";
        return $this->execute($query);
    }
}

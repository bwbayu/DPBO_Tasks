<?php


class QueryPasien extends DB
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

    function addPasien($data)
    {
        $nama = $data["nama"];
        $tl = $data["lahir"];
        $gender = $data["gender"];
        $email = $data["email"];

        $query = "INSERT INTO pasien values('', '$nama', '$tl', '$gender', '$email')";
        return $this->execute($query);
    }

    function updatePasien($data)
    {
        $id = $data['id'];
        $nama = $data["nama"];
        $tl = $data["lahir"];
        $gender = $data["gender"];
        $email = $data["email"];

        $query = "UPDATE pasien set nama='$nama', tgl_lahir='$tl', gender='$gender', email='$email' where id='$id'";
        return $this->execute($query);
    }
}

<?php

// class untuk query ke tabel tmodullolos
class QueryLolos extends DB
{
    function getLolos()
    {
        // Query mysql select data modul lolos
        $query = "SELECT * FROM tmodullolos";
        // Mengeksekusi query
        return $this->execute($query);
    }

    // menambahkan data ke tabel tmodullolos
    function addLolos($data)
    {
        $idmodul = $data["idmodul"];
        $judul = $data["judul"];
        $tgl_masuk = $data["tgl_masuk"];
        $namaPengirim = $data["namaPengirim"];
        $skor = $data["skor"];
        $insentif = $data["insentif"];

        $query = "INSERT INTO tmodullolos values('$idmodul', '$judul', '$tgl_masuk', '$namaPengirim', '$skor', '$insentif')";
        return $this->execute($query);
    }

    // mengupdate data ke tabel tmodullolos
    function updateLolos($data)
    {
        $idmodul = $data["idmodul"];
        $insentif = $data["insentif"];
        $query = "UPDATE tmodullolos SET insentif='$insentif' WHERE idmodul='$idmodul'";
        return $this->execute($query);
    }

    // menghapus data ke tabel tmodullolos
    function deleteLolos($id)
    {
        $query = "DELETE FROM tmodullolos WHERE idmodul = '$id'";
        return $this->execute($query);
    }
}

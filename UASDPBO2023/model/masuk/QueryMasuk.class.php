<?php

// class untuk query ke tabel tmodulmasuk
class QueryMasuk extends DB
{
    function getMasuk()
    {
        // Query mysql select data modul masuk
        $query = "SELECT * FROM tmodulmasuk";
        // Mengeksekusi query
        return $this->execute($query);
    }

    // menambahkan data ke tabel tmodulmasuk
    function addMasuk($data)
    {
        $idmodul = $data["idmodul"];
        $judul = $data["judul"];
        $tgl_masuk = $data["tgl_masuk"];
        $namaPengirim = $data["namaPengirim"];
        $skor = $data["skor"];
        $insentif = $data["insentif"];

        $query = "INSERT INTO tmodulmasuk values('$idmodul', '$judul', '$tgl_masuk', '$namaPengirim', '$skor', '$insentif')";
        return $this->execute($query);
    }

    // mengupdate data ke tabel tmodulmasuk
    function updateMasuk($data)
    {
        $idmodul = $data["idmodul"];
        $skor = $data["skor"];
        $query = "UPDATE tmodulmasuk SET skor='$skor' WHERE idmodul='$idmodul'";
        return $this->execute($query);
    }

    // menghapus data ke tabel tmodulmasuk
    function deleteMasuk($id)
    {
        $query = "DELETE FROM tmodulmasuk WHERE idmodul = '$id'";
        return $this->execute($query);
    }
}

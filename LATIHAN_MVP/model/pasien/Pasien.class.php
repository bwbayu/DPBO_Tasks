<?php

/******************************************
Asisten Pemrogaman 11 
 ******************************************/

class Pasien
{
	private string $id = ''; //id Pasien
	private string $nik = '';
	private string $nama = '';
	private string $tempat = '';
	private string $tl = '';
	private string $gender = '';
	private string $email = '';
	private string $telp = '';
	private string $foto = '';

	function __construct($id = '', $nik = '', $nama = '', $tempat = '', $tl = '', $gender = '', $email = '', $telp = '', $foto = '')
	{
		$this->id = $id;
		$this->nik = $nik;
		$this->nama = $nama;
		$this->tempat = $tempat;
		$this->tl = $tl;
		$this->gender = $gender;
		$this->email = $email;
		$this->telp = $telp;
		$this->foto = $foto;
	}

	function setId($id)
	{
		$this->id = $id;
	}
	function setNik($nik)
	{
		$this->nik = $nik;
	}
	function setNama($nama)
	{
		$this->nama = $nama;
	}
	function setTempat($tempat)
	{
		$this->tempat = $tempat;
	}
	function setTl($tl)
	{
		$this->tl = $tl;
	}
	function setGender($gender)
	{
		$this->gender = $gender;
	}
	function setEmail($email)
	{
		$this->email = $email;
	}
	function setTelp($telp)
	{
		$this->telp = $telp;
	}
	function setFoto($foto)
	{
		$this->foto = $foto;
	}

	function getId()
	{
		return $this->id;
	}
	function getNik()
	{
		return $this->nik;
	}
	function getNama()
	{
		return $this->nama;
	}
	function getTempat()
	{
		return $this->tempat;
	}
	function getTl()
	{
		return $this->tl;
	}
	function getGender()
	{
		return $this->gender;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getTelp()
	{
		return $this->telp;
	}
	function getFoto()
	{
		return $this->foto;
	}
}

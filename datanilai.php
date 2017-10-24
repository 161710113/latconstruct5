<?php
	class data{
	public $nama;
	public $nilai;
	public $kkm;
	public $pelajaran;

		public function __construct($nama,$nilai,$kkm,$pelajaran)
	{
	$this -> nama = $nama;
	$this -> nilai = $nilai;
	$this -> kkm = $kkm;
	$this -> pelajaran = $pelajaran;	
	}
	public function get_nama()
	{
		return $this -> nama;
	}
	public function get_nilai()
	{
		return $this -> nilai;
	}
	public function get_kkm()
	{
		return $this -> kkm;
	}
	public function get_pelajaran()
	{
		return $this -> pelajaran;
	}
	}
?>
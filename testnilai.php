<?php
require_once "datanilai.php";
$data = new data ('Haikal M','80','75','Matematika');
echo "Nama Siswa : " . $data->get_nama()."<br>";
echo "Mendapat Nilai " . $data->get_nilai()."<br>";
echo "KKM nya " . $data->get_kkm()."<br>";
echo "Di pelajaran " . $data->get_pelajaran()."<br>";
?>
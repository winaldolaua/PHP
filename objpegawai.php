<?php 
require 'Pegawai.php';

$arhan = new Pegawai('0123','Arhantara', 'Manager', 'Budha', 'Sudah Menikah');
$zafi = new Pegawai('0322', 'Zafina', 'Staff', 'Islam', 'Sudah Menikah');
$john = new Pegawai('1011', 'Johnathan', 'Kabag', 'Kristen', 'Sudah Menikah');
$yoga = new Pegawai('2840', 'Yoga', 'Asisten', 'Islam', 'Belum Menikah');
$bambang = new Pegawai('3630', 'bambang', 'Staff', 'Kristen', 'Belum Menikah');

echo '<h3 align="center">'.Pegawai::JUDUL.'</h3>';

$arhan->mencetak();
$zafi->mencetak();
$john->mencetak();
$yoga->mencetak();
$bambang->mencetak();
echo 'Jumlah Pegawai: '.Pegawai::$jml;
?>
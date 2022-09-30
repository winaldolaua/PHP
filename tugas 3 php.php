<?php
$m1 = ['nim'=>'123','nama'=>'Andi','nilai'=>55];
$m2 = ['nim'=>'132','nama'=>'Irfan','nilai'=>78];
$m3 = ['nim'=>'211','nama'=>'Intan','nilai'=>92];
$m4 = ['nim'=>'233','nama'=>'Bagas','nilai'=>0];
$m5 = ['nim'=>'145','nama'=>'Arif','nilai'=>15];
$m6 = ['nim'=>'156','nama'=>'Berlian','nilai'=>45];
$m7 = ['nim'=>'122','nama'=>'Anisa','nilai'=>65];
$m8 = ['nim'=>'111','nama'=>'Lina','nilai'=>80];
$m9 = ['nim'=>'223','nama'=>'Amir','nilai'=>58];
$m10 = ['nim'=>'113','nama'=>'Sinta','nilai'=>65];

$array_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Peringkat'];
 
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$nilai_m = array_column($mahasiswa,'nilai');

$total_nilai = array_sum($nilai_m);
$jumlah_nilai = count($nilai_m);
$max_nilai = max($nilai_m);
$min_nilai = min($nilai_m);
$rata2 = $total_nilai / $jumlah_nilai;

$keterangan = [
    'Jumlah Siswa'=>$jumlah_nilai,
    'Total Nilai'=>$total_nilai,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata2'=>$rata2
    ];
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container px-5 my-5">
       
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <?php 
                    foreach($array_judul as $jdl){ 
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                    $nilaim = $mhs['nilai'];
                    
                    $keterangan_lulus = ($nilaim >= 60) ? 'Lulus' : 'Tidak Lulus';

                    if($nilaim >= 85 && $nilaim <= 100) $grade = 'A';
                        else if($nilaim >= 75 && $nilaim < 85) $grade = 'B';
                        else if($nilaim >= 65 && $nilaim < 75) $grade = 'C';
                        else if($nilaim >= 40 && $nilaim < 65) $grade = 'D';
                        else if($nilaim >= 0 && $nilaim < 40) $grade = 'E';
                        else $grade = '';

                    switch ($grade) {
                        case 'A': $predikat = 'Memuaskan'; break;
                        case 'B': $predikat = 'Baik'; break;
                        case 'C': $predikat = 'Cukup'; break;
                        case 'D': $predikat = 'Kurang'; break;
                        case 'E': $predikat = 'Buruk'; break;
                        default: $predikat = '';
                    }
                    ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $keterangan_lulus ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>

            <tfoot>
                <?php
                foreach ($keterangan as $ket => $sum) {
                    ?>
                <tr>
                    <th colspan="4"><?= $ket ?></th>
                    <th><?= $sum ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </div>
</body>    
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Menampilkan informasi pribadi
$nis = "2233274";
$nama = "Tiska Aurilia p.p";
$alamat = "sriwulan rt 02 rw 01";
$telepon = "081227952030";
$email = "tiskapesek4@gmail.com";

echo "<h1>Informasi Pribadi</h1>";
echo "<p>NIS : $nis</p>";
echo "<p>Nama : $nama</p>";
echo "<p>Alamat : $alamat</p>";
echo "<p>Telepon : $telepon</p>";
echo "<p>Email : $email</p>";
?>


<form action="index.php" method="GET">
NilaiTugas: <input type="text" name="tugas"><br>
NilaiUts: <input type="text" name="uts"><br>
NilaiUas: <input type="text" name="uas"><br>
<input type="submit">

<?php


$tugas = $_GET["tugas"]; 
$uts = $_GET["uts"];   
$uas = $_GET["uas"];  


$tugas_persen = 20; 
$uts_persen = 35;   
$uas_persen = 45;   


$nilai_akhir = ($tugas * $tugas_persen / 100) + ($uts * $uts_persen / 100) + ($uas * $uas_persen / 100);

// Tentukan grade
if ($nilai_akhir >= 85) {
    $grade = 'A';
} elseif ($nilai_akhir >= 68.5) {
    $grade = 'B';
} elseif ($nilai_akhir >= 58.5) {
    $grade = 'C';
} elseif ($nilai_akhir >= 40) {
    $grade = 'D';
} else {
    $grade = 'E';
}

// Menampilkan hasil
echo "<h2>Hasil Perhitungan Nilai</h2>";
echo "<p>NIS : $nis</p>";
echo "<p>Nama : $nama</p>";
echo "<p>N. Tugas : $tugas</p>";
echo "<p>N. UTS : $uts</p>";
echo "<p>N. UAS : $uas</p>";
echo "<p>N. Akhir : $nilai_akhir</p>";
echo "<p>N. Huruf : $grade</p>";
?>

</form>
</body>
</html>
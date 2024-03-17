<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 3</title>
</head>
<body>
    <h2>Latihan Pemrograman Web 2</h2>

<form method="POST">
    <label for="name">Nama :</label>
    <input type="text" name="nama"> <br><br>
    <label for="date">Tanggal lahir :</label>
    <input type="date" name="date"> <br><br>
    <label for="pekerjaan">Pekerjaan :</label>
    <select name="pekerjaan">
        <option value="Karyawan">Karyawan</option>
        <option value="Guru">Guru</option>
        <option value="Dokter">Dokter</option>
    </select><br><br>
    <input type="submit" value="Kirim!"> <br><br>
</form>

<?php 
$nama = $_POST['nama'];
$tanggalLahir = date("d F Y", strtotime($_POST['date']));
$pekerjaan = $_POST['pekerjaan'];
$tahunlahir = date("Y", strtotime($_POST['date']));
$tahunsekarang = date('Y');
$umur = $tahunsekarang - $tahunlahir; 

switch ($pekerjaan) {
    case "Dokter":
       $gaji = '7.000.000';
       break;
    case "Karyawan":
       $gaji = '5.000.000';
       break;
    case "Guru":
       $gaji = '3.000.000';
       break;
    default:
       $gaji = 0;
}


echo 'Nama : ' . $nama . '<br>';
echo 'Tanggal Lahir : ' . $tanggalLahir . '<br>';
echo 'Umur : ' . $umur . '<br>';
echo 'Pekerjaan : ' . $pekerjaan . '<br>';
echo 'Gaji Perbulan : ' . $gaji;


?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo 'hello world';
    ?>

    <h2>Menggunakan Variable</h2>
    <?php 
    $nama = 'Rizky';
    $nim = 312210576;
    echo 'Nama : '. $nama . '<br>';
    echo 'Nim  : '. $nim;
    ?>

    <h2>Predefine Variable</h2>
    <?php
    echo 'Selamat Datang '.$_GET['nama'];
    ?>

    <h2>Form Input</h2>
    <form action="" method="post">
        <label>Nama :</label>
        <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>

    <?php
    echo 'Selamat Datang ' . $_POST['nama'] . '<br>';
    ?>

    <h2>Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo 'Gaji sebelum Pajak = Rp. ' . $gaji . '<br>';
    echo 'Gaji yang dibawa pulang = Rp. '. $thp .'<br><br>';
    ?>

    <h2>Condition</h2>
    <h3>If Else</h3>
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
        echo "Minggu <br>";
    } elseif ($nama_hari == "Monday") {
        echo "Senin <br>";
    } else {
        echo "Selasa <br>";
    }
    ?>


    <h3>Switch Case</h3>
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
    }
    ?>

    <h2>Loop</h2>
    <h3>Perulangan For</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
    
    <h3>Perulangan While</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
    ?>
    
    <h3>Perulangan dowhile</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
    ?>
</body>
</html>
<?php

    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $pesan = $_POST["pesan"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #263449;
        }

        .result-card {
            width: 90%;
            max-width: 600px;
            margin: 55px auto;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }

        h1 {
            color: #244b70;
            font-size: 26px;
            margin: 0 0 12px;
        }

        .thanks {
            color: #596579;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 18px;
            background: #57b7f3;
            color: black;
            text-decoration: none;
            border-radius: 6px;
        }

        .button:hover {
            background: #57b7f3;
        }

    </style>
</head>
<body>

<div class="result-card">
    <h2>Pesan Berhasil Dikirim</h2>

    <p class="thanks">
        Terima kasih, <?php echo ($nama); ?>!
    </p>

    <p>Nama: <?php echo ($nama); ?></p>
    <p>Kelas: <?php echo ($kelas); ?></p>
    <p>Pesan/Kesan: <?php echo ($pesan); ?></p>

    <a class="button" href="index.php">Kembali ke Halaman Utama</a>

</div>
</body>
</html>
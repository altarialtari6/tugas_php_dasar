<?php

    $nim = $_GET["nim"];
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email = $_GET["email"];
    $nilai = $_GET["nilai"];
    $grade = $_GET["grade"];
    $status = $_GET["status"];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #263449;
        }

        .card {
            width: 90%;
            max-width: 650px;
            margin: 60px auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
        }

        .heading {
            padding: 25px;
            background: #244b70;
            color: white;
        }

        .heading h1 {
            margin: 0 0 8px;
            font-size: 25px;
        }

        .heading p {
            margin: 0;
            color: #e1eaf3;
        }

        .body-card {
            padding: 25px;
        }

        .button {
            display: inline-block;
            margin-top: 25px;
            padding: 11px 17px;
            background: #244b70;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .button:hover {
            background: #173652;
        }

    </style>
</head>
<body>

<div class="card">
    <div class="heading">
        <h1>Detail Mahasiswa</h1>
        <p>Informasi lengkap mahasiswa</p>
    </div>

    <div class="body-card">
        <p>NIM : <?php echo ($nim); ?></p>
        <p>Nama : <?php echo ($nama); ?></p>
        <p>Jurusan : <?php echo ($jurusan); ?></p>
        <p>Email : <?php echo ($email); ?></p>
        <p>Nilai : <?php echo ($nilai); ?></p>
        <p>Grade : <?php echo ($grade); ?></p>
        <p>Status : <?php echo ($status); ?></p>

        <a  class="button" href="index.php">Kembali</a>
    </div>
</div>

</body>
</html>
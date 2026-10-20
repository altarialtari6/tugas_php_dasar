<?php
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "andi@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Budi Santoso",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "budi@upi.edu",
        "nilai" => 75
    ],
    [
        "nim" => "25003",
        "nama" => "Citra Lestari",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "citra@upi.edu",
        "nilai" => 65
    ],
    [
        "nim" => "25004",
        "nama" => "Dina Amelia",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "dina@upi.edu",
        "nilai" => 90
    ],
    [
        "nim" => "25005",
        "nama" => "Eko Saputra",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "eko@upi.edu",
        "nilai" => 55
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #263449;
        }

        .container {
            width: 92%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .header {
            background: #244b70;
            color: white;
            padding: 28px;
            border-radius: 12px 12px 0 0;
        }

        .header h1 {
            margin: 0 0 10px;
            font-size: 27px;
        }

        .header p {
            margin: 0;
            color: #e1eaf3;
            line-height: 1.6;
        }

        .content {
            background: white;
            padding: 25px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .info {
            margin-bottom: 20px;
            color: #596579;
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th, td {
            padding: 14px 12px;
            border-bottom: 1px solid #e7ebf0;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #edf3f8;
            color: #244b70;
        }

        tr:hover td {
            background: #f8fafc;
        }


        .detail {
            display: inline-block;
            padding: 8px 12px;
            background: #244b70;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            white-space: nowrap;
        }

        .detail:hover {
            background: #173652;
        }

        .button {
            display: inline-block;
            padding: 12px 17px;
            background: #57b7f3;
            color: #101011;
            text-decoration: none;
            border-radius: 7px;
        }

        .button:hover {
            background: #57b7f3;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Daftar Mahasiswa</h1>
        <p>Informasi data mahasiswa dan hasil evaluasi nilai.</p>
    </div>

    <div class="content">
        <div class="info">
            Jumlah mahasiswa: <strong><?= count($mahasiswa); ?> orang</strong>
        </div>

        <div class="table-wrap">
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                foreach ($mahasiswa as $data) {
                    if ($data["nilai"] >= 80) {
                        $grade = "A";
                    } elseif ($data["nilai"] >= 70) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                    } else {
                        $status = "Tidak Lulus";
                    }
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["nim"]; ?></td>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["jurusan"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["nilai"]; ?></td>
                    <td><?php echo $grade; ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                        <a class="detail" href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"]; ?>&grade=<?= $grade; ?>&status=<?= ($status); ?>">Lihat Detail</a>
                    </td>
                </tr>
                <?php
                    $no++;
                 }
                ?>
            </tbody>
        </table>
        </div>
        
        <p>
            <a class="button" href="form_pesan.php">Isi Form Pesan</a>
        </p>
    </div>
</div>

</body>
</html>
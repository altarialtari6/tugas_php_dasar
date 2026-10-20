<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #263449;
        }

        .card {
            width: 90%;
            max-width: 600px;
            margin: 45px auto;
            padding: 28px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }

        h1 {
            margin-top: 0;
            color: #244b70;
            font-size: 26px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccd5df;
            border-radius: 6px;
            font: inherit;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #244b70;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        button, .back {
            display: inline-block;
            padding: 12px 18px;
            border: none;
            border-radius: 6px;
            background: #57b7f3;
            color: black;
            text-decoration: none;
            font: inherit;
            cursor: pointer;
        }

        button:hover, .back:hover {
            background: #57b7f3;
        }

        .back {
            margin-left: 7px;
            background: #57b7f3;
            color: #101011;
        }

        h1 {
            font-size: 23px;
        }

        button, .back {
            margin: 0 0 8px;
        }

    </style>
</head>
<body>
    <div class="card">
        <h2>Form Pesan Mahasiswa</h2>

    <form action="hasil_pesan.php" method="POST">
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap">
        </p>

        <p>
            <label>Kelas:</label>
            <input type="text" name="kelas" placeholder="Contoh: 2A">
        </p>

        <p>
            <label>Pesan/Kesan:</label>
            <textarea name="pesan" rows="4" cols="30" placeholder="Tuliskan pesan atau kesan Anda"></textarea>
        </p>

        <button type="submit">Kirim</button>

        <p>
        <a class="back" href="index.php">Kembali ke Halaman Utama</a>
        </p>
    </form>
    </div>

</body>
</html>
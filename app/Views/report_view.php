<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Siswa</title>
    <style>
        /* Tambahkan gaya Anda di sini */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .signature {
            position: absolute;
            bottom: 20px;
            left: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1><center>Laporan Siswa SMP N 1 Bukittinggi</center></h1>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Nomor Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Siswa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $index => $item): ?>
                <tr>
                    <td><?= $item['namasiswa'] ?></td>
                    <td><?= $item['nomorsiswa'] ?></td>
                    <td><?= $item['jenkel'] ?></td>
                    <td><?= $item['alamatsiswa'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div class="signature">
        <h4>Mengetahui</h4>
        <h4>Kepala Jorong</h4>
        <br><br>
        <h4>M Yunan</h4>
    </div>
</body>
</html>

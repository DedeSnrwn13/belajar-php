<?php
   $siswa = [
            ['nama' => 'Riki', 'kelas' => '2A', 'goldarah' => 'A'],
            ['nama' => 'Azli', 'kelas' => '2B', 'goldarah' => 'AB'],
            ['nama' => 'Benar', 'kelas' => '2C', 'goldarah' => 'O'],
            ['nama' => 'Sabar', 'kelas' => '2D', 'goldarah' => 'B'],
       ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Gol. Darah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $key => $data): ?>
                <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['goldarah']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Data JSON
$json = '[
    {"kota": "SEMARANG", "landmark": "LAWANG SEWU", "tarif": "20000"},
    {"kota": "YOGYAKARTA", "landmark": "PRAMBANAN", "tarif": "35000"},
    {"kota": "MAGELANG", "landmark": "BOROBUDUR", "tarif": "45000"},
    {"kota": "SURAKARTA", "landmark": "PGS", "tarif": "GRATIS"}
]';

// Decode ke array PHP
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan JSON ke Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h3>Hasil Decode JSON ke Tabel HTML</h3>
    <table>
        <tr>
            <th>KOTA</th>
            <th>LANDMARK</th>
            <th>TARIF</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['kota'] ?></td>
            <td><?= $row['landmark'] ?></td>
            <td><?= $row['tarif'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

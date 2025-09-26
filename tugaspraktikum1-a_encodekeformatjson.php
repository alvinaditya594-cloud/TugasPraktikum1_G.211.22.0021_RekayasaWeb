<?php
// Membuat variabel array
$data = [
    "nama" => "Alvin",
    "umur" => 21,
    "hobi" => ["Programming", "Gaming", "Membaca"]
];

// Encode ke format JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan hasil
echo "Hasil Encode JSON:<br>";
echo $jsonData;
?>

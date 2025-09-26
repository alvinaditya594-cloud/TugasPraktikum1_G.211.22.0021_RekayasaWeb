<?php
// Variabel JSON
$json = '{
    "nama": "Alvin",
    "umur": 21,
    "hobi": ["Programming", "Gaming", "Membaca"]
}';

// Decode ke PHP Object
$obj = json_decode($json);

// Decode ke PHP Array
$arr = json_decode($json, true);

// Akses nilai dari PHP Object
echo "Akses Object:<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi Pertama: " . $obj->hobi[0] . "<br><br>";

// Akses nilai dari PHP Array
echo "Akses Array:<br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Hobi Pertama: " . $arr["hobi"][0] . "<br>";
?>

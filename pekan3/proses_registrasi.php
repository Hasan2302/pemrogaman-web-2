<?php
$NIM = $_POST['NIM'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];

$skor_skill = array_sum($skills);

if ($skor_skill < 40) {
    $kategori_skill = "Kurang";
} elseif ($skor_skill < 60) {
    $kategori_skill = "Cukup";
} elseif ($skor_skill < 100) {
    $kategori_skill = "Baik";
} else {
    $kategori_skill = "Sangat Baik";
}

echo "NIM : $NIM <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "Program Studi : $program_studi <br>";
echo "Skill : ";
foreach ($skills as $key => $value) {
    echo "$key";
    if ($key !== array_key_last($skills)) {
        echo ", ";
    }
}
echo "<br>";
echo "Skor Skill : $skor_skill <br>";
echo "Kategori Skill : $kategori_skill <br>";
echo "Email : $nama@gmail.com";
?>

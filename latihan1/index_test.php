<?php

// Tipe Data
// Tipe data adalah klasifikasi data yang mengenalkan kompilor atau penerjemah bagaimana programmer    menggunakan data
// Tipe data pada PHP: 
// Integer: (Tipe data yang menyatakan nilai bulat)
// Float: (Tipe data yang menyatakan nilai desimal)
// String: (Tipe data yang menyatakan text dan karakter)
// Boolean: (Tipe data yang menyatakan benar atau salah)

// Integer
echo 12345;

// Float
echo 0.5;

// String
echo 'Kalimat';

// Boolean
echo true;

// Variabel
// Variabel adalah suatu tempat yang digunakan untuk menampung data
// Untuk membuat variabel tidak boleh diawal oleh angka atau simbol-simbol kecuali garis bawah ( _ )

$varA = "belajar php";
echo $varA;

// Array
// Array adalah sebuah variabel yang menampung lebih dari satu nilai
$array = [123, "belajar php", false, 0.5];
// Cara melihat isi dari Array
var_dump($array);
// Cara menampilkan data
echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];

// Cara lain untuk tampilkan array
$siswa = ["rizky", "zulfahmi", "ayat"];

$i = 0;
while ($i <= count($siswa) - 1) {
    echo $siswa[$i];
    $i++;
}

// Cara lebih simple lagi
$students = [
    "rizky" => 16, "zulfahmi" => 17, "ayat" => 17
];

foreach ($students as $name => $age) {
    echo "nama: " . $name . " dan umur: " . $age . "<br>";
}

// Menggunakan operator aritmatika
echo 1 + 2;
echo 1 - 2;
echo 1 / 2;
echo 1 * 2;
echo 2 % 2;
echo 2 ** 2; 

// Menggunakan operator logika
echo 1 == 1;
echo 1 != 1;
echo "a" === "a";
echo 1 === "1";
echo 1 >= 2;
echo 1 <= 2;
echo 1 + 1 == 2;

// Pengkondisian
if (2 % 2 == 2) {
    echo "Benar";
}

// Pengkondisian (if, else)
if (1 - 1 == 2) {
    echo "benar";
    
}else {
    echo "salah";
}

// Pengkondisian (if, elseif, else)
$pesanan = "ayam";
if ($pesanan == "ayam") {
    echo "Konsumen memesan ayam";
}elseif ($pesanan == "ikan") {
    echo "Konsumen memesan ikan";
}else {
    echo "Menu tidak tersedia";
}

// Kasus tampilkan Sangat baik jika nilai lebih besar dari 90, tampilkan baik jika nilai lebih besar dari 80 

// Switch
$jurusan = 1;
switch ($jurusan) {
    case 1:
        echo "Rpl";
        break;
    case 2:
        echo "Tkj";
        break;
    case 3:
        echo "MM";
        break;
    default:
        echo "Jurusan tidak tersedia";
        break;
}

// Pengulangan

// While
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}

// Do While
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 10);

// For
for ($i=1; $i <= 10; $i++) { 
    echo $i;
}

// Foreach
$siswa = ["fahmi", "ayat", "uden"];
foreach ($siswa as $nama) {
    echo $nama;
}

// Kasus (Tampilkan nilai genap dari 1 ... 10)

// Fungsi

$string = "Hello World";
echo $string;
echo strtolower($string);
echo strtoupper($string);

date_default_timezone_set("Asia/jakarta"); // untuk ubah timezone
echo date("l, d-m-Y H:i:s");

// Membuat fungsi
function pesan($nama_makanan) {
    switch (strtolower($nama_makanan)) {
        case "ayam":
            echo "Ayam segera disiapkan";
            break;
        case "ikan":
            echo "Ikan segera disiapkan";
            break;
        case 3:
            echo "Lembu segera disiapkan";
            break;
        default:
            echo "Menu tidak tersedia";
            break;
    }
}

pesan("ayam");

function ubahjadibesar($string) {
    return strtoupper($string);
}

echo ubahjadibesar("belajar php");


<?php
// Fungsi untuk menghitung rata-rata nilai mahasiswa
function hitungRataRata($nilai) {
    $jumlahNilai = array_sum($nilai);
    $jumlahMahasiswa = count($nilai);
    $rataRata = $jumlahNilai / $jumlahMahasiswa;
    return $rataRata;
}

// Fungsi untuk menentukan nilai tertinggi
function nilaiTertinggi($nilai) {
    return max($nilai);
}

// Fungsi untuk menentukan nilai terendah
function nilaiTerendah($nilai) {
    return min($nilai);
}

// Fungsi untuk menentukan status kelulusan mahasiswa
function statusKelulusan($rataRata) {
    if ($rataRata >= 60) {
        return "Lulus";
    } else {
        return "Gagal";
    }
}

// Nilai-nilai mahasiswa
$nilaiMahasiswa = [80, 75, 90, 65, 55];

// Memanggil fungsi-fungsi yang telah dibuat
$rataRata = hitungRataRata($nilaiMahasiswa);
$nilaiTertinggi = nilaiTertinggi($nilaiMahasiswa);
$nilaiTerendah = nilaiTerendah($nilaiMahasiswa);
$status = statusKelulusan($rataRata);

// Menampilkan hasil
echo "Nilai Mahasiswa: " . implode(", ", $nilaiMahasiswa) . "<br>";
echo "Rata-rata Nilai: " . number_format($rataRata, 2) . "<br>";
echo "Nilai Tertinggi: " . $nilaiTertinggi . "<br>";
echo "Nilai Terendah: " . $nilaiTerendah . "<br>";
echo "Status Kelulusan: " . $status . "<br>";
?>

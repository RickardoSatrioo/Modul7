<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acak Dadu</title>
</head>
<body>
    <h1>Acak Dadu</h1>
    <?php
        // Fungsi untuk menghasilkan angka acak antara 1 dan 6
        $dadu = rand(1, 6);
        // Menampilkan gambar dadu sesuai dengan angka acak
        echo "<img src='$dadu.png' alt='Dadu'>";
    ?>
    <!-- Tombol Refresh untuk mengacak dadu kembali -->
    <button onclick="window.location.reload();">Refresh</button>
</body>
</html>

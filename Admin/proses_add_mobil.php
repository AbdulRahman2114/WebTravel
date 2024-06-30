<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "travel";

// Membuat koneksi
$conn = new mysqli($server, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama_transport = $_POST["nm_transport"];
    $jenis = $_POST["jenis"];
    $jumlah_penumpang = $_POST["jumlah_penumpang"];
    $foto = $_POST["foto"];

    // Menyiapkan dan mengeksekusi query SQL untuk menambahkan data transportasi
    $sql = "INSERT INTO transport (nm_transport, jenis, jumlah_penumpang, foto) VALUES ('$nama_transport', '$jenis', '$jumlah_penumpang', '$foto')";

    if ($conn->query($sql) === TRUE) {
        // Mengarahkan pengguna kembali ke halaman mobil.php setelah data berhasil ditambahkan
        header("Location: index.php?data=transport");
        exit(); // Menghentikan eksekusi skrip setelah mengarahkan pengguna
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();

?>

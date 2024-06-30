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

// Query untuk mengambil data dari tabel transport
$sql = "SELECT * FROM transport";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .add-button {
            float: right;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2 class="mb-4">Data Mobil</h2>
    <a href="add_mobil.php" class="btn btn-primary mb-3 add-button">Add</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Jumlah Penumpang</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data dari setiap baris
                $no = 1; // Inisialisasi counter
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>"; // Increment counter
                    echo "<td>" . $row["nm_transport"] . "</td>";
                    echo "<td>" . $row["jenis"] . "</td>";
                    echo "<td>" . $row["jumlah_penumpang"] . "</td>";
                    echo "<td>" . $row["foto"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>

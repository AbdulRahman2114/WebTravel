<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan sanitasi
    $name = htmlspecialchars($_POST['name']);
    $tujuan = htmlspecialchars($_POST['tujuan']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $titik = htmlspecialchars($_POST['titik']); // Perbaikan: Mengubah 'tujuan' menjadi $tujuan
    
    // Nomor WhatsApp Anda
    $whatsappNumber = '6285363412082';
    
    // Buat URL WhatsApp dengan pesan yang diinginkan
    $whatsappURL = 'https://wa.me/' . $whatsappNumber . '?text=' .
    'Nama%20Saya:%20' . urlencode($name) . '%0A' .
    'Tujuan%20Saya:%20' . urlencode($tujuan) . '%0A' .
    'Jumlah%20Penumpang:%20' . urlencode($jumlah) . '%0A' .
    'Titik%20Jemput:%20' . urlencode($titik); // Perbaikan: Menambahkan titik koma di akhir pernyataan
    
    // Redirect ke URL WhatsApp
    header('Location: ' . $whatsappURL);
    exit();
}
?>

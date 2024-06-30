<?php
include"koneksi.php";
$tampil= "SELECT * FROM transport";
$result = mysqli_query($conn, $tampil)
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travel TI 4</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Rengat, Danau Raja</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+6285363412082</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>travelinformatika@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Berangkaaat...</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Nikmati Perjalanan Anda dengan Mobil Travel! Desain Inovatif, Kenyamanan Maksimal, dan Fasilitas Terbaik</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Mobil Travel: Perjalanan Nyaman dan Aman. Jelajahi Dunia dengan Kami!</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/4.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                    <h1 class="mb-4">Selamat Datang di <span class="text-primary">Berangkaaat...</span></h1>
                    <p class="mb-4">Kami adalah pilihan terbaik untuk perjalanan mobil Anda. Dengan mobil travel kami, Anda mendapatkan kenyamanan, keseruan, dan kebebasan untuk menjelajahi dunia dengan cara yang tak terlupakan. Desain inovatif, fasilitas lengkap, dan layanan terbaik kami dirancang untuk memenuhi semua kebutuhan Anda selama perjalanan. Jelajahi dunia dengan mobil travel kami, dan rasakan perjalanan yang tidak terlupakan.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemesanan Mudah</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pelayanan 24/7</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengiriman Tiket</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengembalian Dana</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Layanan Penjemputan dan Antar</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pelayanan Khusus untuk Penumpang dengan Kebutuhan Khusus</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Mobil</h6>
                <h1 class="mb-5">Daftar Transport</h1>
            </div>

            <div class="row g-4 justify-content-center">
            <?php
// Pastikan bahwa variabel $result sudah diinisialisasi dengan hasil query sebelumnya
while ($r = mysqli_fetch_array($result)) {
?>
    <div class="col-lg-4 col-md-6">
        <div class="package-item">
            <div class="overflow-hidden">
                <img class="img-fluid" src="img/<?php echo"$r[foto]"; ?>"class="img-fluid" alt="">
            </div>
            <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2">
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>Pekanbaru
                </small>
                <small class="flex-fill text-center border-end py-2">
                    <i class="fa fa-calendar-alt text-primary me-2"></i>1 hari
                </small>
                <small class="flex-fill text-center py-2">
                    <i class="fa fa-user text-primary me-2"></i><?= $r['jumlah_penumpang'] ?> Orang
                </small>
            </div>
            <div class="text-center p-4">
                <h3 class="mb-0"><?= $r['nm_transport'] ?></h3>
                <div class="mb-3">
                    <?= $r['jenis'] ?>
                </div>
                <p></p>
            </div>
        </div>
    </div>
<?php
}
?>

            </div>
        </div>
    </div>
    


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Pemesanan Online</h1>
                        <p class="mb-4">Mengemudi mobil di tempat-tempat yang menarik adalah salah satu pengalaman paling mengasyikkan yang bisa Anda nikmati. Mulai dari melintasi pegunungan yang menakjubkan hingga menjelajahi kota-kota pesisir yang indah, pilihan destinasi untuk liburan Anda tak terbatas.</p>
                        <p class="mb-4">Kini, dengan sistem pemesanan online kami, Anda bisa merencanakan perjalanan Anda dengan mudah dan cepat. Nikmati kebebasan untuk memilih tujuan impian Anda dan rasakan kegembiraan menjelajah tanpa batas.</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Baca Selengkapnya</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Pesan Perjalanan</h1>
                        <form id="bookingForm" action="process_booking.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" name="name" placeholder="Nama Anda">
                                        <label for="name">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="tujuan" name="tujuan" placeholder="Tujuan Anda">
                                        <label for="tujuan">Tujuan Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="jumlah" name="jumlah" placeholder="Jumlah Penumpang">
                                        <label for="jumlah">Jumlah penumpang</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="titik" name="titik" placeholder="Titik Jemput">
                                        <label for="titik">Titik Jemput</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Pesan Sekarang</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Pembayaran</h6>
                <h1 class="mb-5">Langkah Mudah</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 150px; height: 150px;">
                            <img src="img/5.jpg" alt="Nama Foto" class="img-fluid rounded-circle" style="width: 120px; height: 120px;">
                        </div>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <h5 class="mt-4">Pembayaran Online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Pembayaran online adalah transfer uang melalui internet, memungkinkan pengguna membayar tagihan atau pembelian tanpa kontak fisik dengan uang atau kartu kredit. Prosesnya melibatkan pemilihan metode pembayaran, memasukkan informasi pembayaran, konfirmasi, dan proses pembayaran, diikuti dengan konfirmasi pembayaran. Keamanan dan privasi sangat penting, dengan risiko penipuan dan pencurian data, sehingga penting untuk menggunakan situs web yang aman, memperbarui perangkat lunak keamanan, dan memeriksa detail situs web sebelum memasukkan informasi pribadi atau pembayaran.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Process Start -->


    


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimoni</h6>
                <h1 class="mb-5">Kepuasan Pelanggan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Fitri</h5>
                    <p>Rengat, INHU</p>
                    <p class="mb-0">Website ini sangat mudah digunakan, saya cepat menemukan informasi yang saya butuhkan untuk perjalanan saya. Saya sangat puas dengan kemudahan dan kecepatan pencarian.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rahman</h5>
                    <p>Tembilahan, INHIL</p>
                    <p class="mt-2 mb-0">Desain website yang menarik dan responsif membuat saya merasa nyaman saat mencari tiket dan informasi perjalanan. Saya sangat puas dengan pengalaman penggunaannya.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Vino</h5>
                    <p>Padang, SUMBAR</p>
                    <p class="mt-2 mb-0">Saya sangat puas dengan kualitas layanan pelanggan yang diberikan oleh website ini. Mereka selalu siap membantu dan memberikan solusi cepat untuk masalah yang saya hadapi.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Yuni</h5>
                    <p>Pekanbaru, PKU</p>
                    <p class="mt-2 mb-0">Website ini memudahkan saya dalam mengatur perjalanan saya, dari pemesanan tiket hingga informasi perjalanan. Saya merasa puas dengan kenyamanan dan kemudahan yang ditawarkan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
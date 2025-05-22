<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script>
    function navigateToProduct(dropdown) {
      const select = document.getElementById(dropdown);
      const url = dropdown.value;
      if (url) {
        window.location.href = url;
      }
    }
  </script>

  <style>
    .navbar {
      background-color: #042440;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar .nav-link,
    .navbar .navbar-brand {
      color: white;
    }

    .navbar .nav-link:hover,
    .navbar .navbar-brand:hover {
      color: #ffc107;
    }

    .dropdown-menu {
      background-color: #042440;
    }

    .dropdown-item {
      color: white;
    }

    body {
      padding-top: 70px;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 60px 10%;
      background: radial-gradient(circle at top left, #fdfbfb, #ebedee);
    }

    .hero-text h1 {
      font-size: 48px;
      margin: 0;
    }

    .hero-text p {
      font-size: 24px;
      color: #777;
    }

    .hero img {
      width: 300px;
      max-width: 100%;
    }

    section {
  min-height: 100vh;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.section-hero, .section-fitur {
  background-color: #fefefe;
  padding: 60px 10%;
}

.section-spesifikasi,
.section-kesimpulan {
  background-color: #042440;
  min-height: 100vh;
  box-sizing: border-box;
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      text-align: center;
    }


    .parent {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-template-rows: repeat(4, 1fr);
      gap: 6px;
    }

    .div1 {
      grid-column: span 2 / span 2;
    }

    .div4 {
      grid-column: span 2 / span 2;
      grid-column-start: 3;
    }

    .div5 {
      grid-column: span 2 / span 2;
      grid-column-start: 5;
    }

    .div6 {
      grid-column: span 2 / span 2;
      grid-column-start: 2;
      grid-row-start: 2;
    }

    .div7 {
      grid-column: span 2 / span 2;
      grid-column-start: 4;
      grid-row-start: 2;
    }

    .div8 {
      grid-column: span 2 / span 2;
      grid-row-start: 3;
    }

    .div9 {
      grid-column: span 2 / span 2;
      grid-column-start: 3;
      grid-row-start: 3;
    }

    .div10 {
      grid-column: span 2 / span 2;
      grid-column-start: 5;
      grid-row-start: 3;
    }

    /* .div12 {
      grid-column: span 2 / span 2;
      grid-column-start: 2;
      grid-row-start: 4;
    }

    .div13 {
      grid-column: span 2 / span 2;
      grid-column-start: 4;
      grid-row-start: 4;
    } */


    .workflow {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    .step {
      flex: 1 1 220px;
      background: linear-gradient(135deg, #e0eafc, #cfdef3);
      padding: 20px;
      border-radius: 20px;
      text-align: center;
    }

    .card p:last-child {
      font-size: 20px;
      color: #f5b301;
      margin-top: 10px;
    }

    .footer-right {
    text-align: right;
  }
   .footer-social {
    display: flex;
    justify-content: space-between;
    align-items: start;
    flex-wrap: wrap;
  }
  .social-column {
    display: flex;
    flex-direction: column;
    gap: 5px;
  }
  .social-column a {
    color: white;
    text-decoration: none;
  }

    .aos-up {
      opacity: 0;
      transform: translateY(50px);
      transition: all 1s ease;
    }

    .aos-up.aos-animate {
      opacity: 1;
      transform: translateY(0);
    }

    .aos-down {
      opacity: 0;
      transform: translateY(-50px);
      transition: all 1s ease;
    }

    .aos-down.aos-animate {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24">
        AppleTalk
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="../home/Home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Beranda.php">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="../home/Home.php#hal4">About</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="LoginAkun.php"><i class="bi bi-people-fill"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="s4">
 <!-- Hero Section -->
<section class="section-hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 hero-text">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <h1> Apple Watch Ultra 2</h1>
        </a>
         <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="se.php">Apple Watch SE (Generasi ke-2)</a></li>
          <li><a class="dropdown-item" href="s10.php">Apple Watch Series 10</a></li>
          <li><a class="dropdown-item" href="s9.php">Apple Watch Series 9</a></li>
          <li><a class="dropdown-item" href="ultra.php">Apple Watch Ultra</a></li>
          <li><a class="dropdown-item" href="s5.php">Apple Watch Series 5</a></li>
          <li><a class="dropdown-item" href="ultra2.php">Apple Watch Ultra 2</a></li>
          <li><a class="dropdown-item" href="nike.php">Apple Watch Nike</a></li>
          <li><a class="dropdown-item" href="s4.php">Apple Watch Series 4</a></li>
        </ul>
        <p><b>Harga: </b>Mulai dari Rp 14.999.000.</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="ultra2.png" alt="4" class="img-fluid">
      </div>
    </div>
  </div>
</section>

  <!-- Spesifikasi -->
  <section class="section-spesifikasi text-white" id="spesifikasi">
    <h2 class="section-title text-center">SPESIFIKASI</h2>
    <div class="parent">
      <div class="card div1"><b>Bahan & Warna: </b>Casing titanium Kelas 5; tersedia dalam warna Alami dan Hitam.</div>
      <div class="card div4"><b>Casing:</b>Ukuran 49 mm; tinggi 49 mm, lebar 44 mm, tebal 14,4 mm; berat 61,4 gram (alami) dan 61,8 gram (hitam); cocok untuk pergelangan tangan berukuran 130–210 mm.</div>
      <div class="card div5"><b>Layar: </b>Layar Retina LTPO OLED yang Selalu Aktif; layar kristal safir datar; kecerahan maksimum hingga 3.000 nit; kecerahan minimum 1 nit; 326 piksel per inci; area tampilan 1.185 mm²; resolusi 410 x 502 piksel; mode Malam menggunakan wajah jam Modular Ultra atau Wayfinder.</div>
      <div class="card div6"><b>Chip: </b>S9 SiP dengan prosesor dual-core 64-bit; Neural Engine 4-core; kapasitas 64 GB.</div>
      <div class="card div7"><b>Sensor: </b>Sensor jantung elektrik; sensor jantung optik generasi ketiga; sensor suhu; sensor Oksigen Darah; pengukur kedalaman dengan akurasi ±1 m; sensor suhu air; kompas; altimeter yang selalu aktif; akselerometer high-g; giroskop rentang dinamis tinggi; sensor cahaya sekitar.</div>
      <div class="card div8"><b>Konektivitas: </b>LTE dan UMTS; GPS L1+L5 frekuensi ganda yang presisi (GPS, GLONASS, Galileo, QZSS, dan BeiDou); Wi-Fi 4 (802.11n); Bluetooth 5.3; Chip Ultra Wideband generasi kedua; GymKit.</div>
      <div class="card div9"><b>Daya & Kekuatan Baterai: </b>Kekuatan baterai berhari-hari, termasuk penggunaan normal hingga 36 jam; hingga 72 jam dalam Mode Daya Rendah; baterai lithium-ion bawaan yang dapat diisi ulang; kemampuan pengisian daya cepat; pengisian daya hingga 80% dalam waktu sekitar 1 jam.</div>
      <div class="card div10"><b>Ketahanan: </b>Level tahan air 100 m menurut standar ISO 22810:2010; tahan debu level IP6X menurut standar IEC 60529; penyelaman scuba diving rekreasional EN13319 hingga kedalaman 40 m (akurasi ±1 m); diuji untuk MIL-STD 810H terhadap sub-bagian untuk ketinggian, suhu tinggi, suhu rendah, perubahan suhu ekstrem, perendaman, pembekuan dengan pencairan, hujan es dan hujan yang sangat dingin, serta guncangan dan getaran.</div>
      <!-- <div class="card div12"><b></b></div>
      <div class="card div13"><b></b></div> -->
    </div>
  </section>

  <!-- Fitur -->
  <section class="section-fitur">
    <h1 class="section-title text-center">FITUR</h1>
    <div class="workflow">
      <div class="step"><b>Kesehatan & Kebugaran</b><br> Aplikasi Oksigen Darah; Aplikasi EKG; Aplikasi Pelacakan Siklus dengan perkiraan ovulasi retrospektif; Aplikasi Detak Jantung; Pemberitahuan detak jantung rendah dan tinggi; Pemberitahuan ritme tidak teratur; Aplikasi Pengobatan; Aplikasi Kesadaran dengan pelacakan keadaan pikiran; Aplikasi Kebisingan; Aplikasi Tidur, termasuk tahap tidur.</div>
      <div class="step"><b>Keselamatan</b><br> Darurat SOS; Panggilan darurat internasional; Sirene; Deteksi Tabrakan; Deteksi Jatuh; Titik Jalan Ketersediaan Panggilan Darurat Terakhir; Pemantauan Kebisingan; Susuri.</div>
      <div class="step"><b>Fitur Lingkungan</b> <br>Casing titanium 100% daur ulang; penggunaan bahan daur ulang lainnya.</div>
    </div>
  </section>

  <!-- Kesimpulan -->
  <section class="section-kesimpulan text-center text-white">
    <h2 class="section-title">Kesimpulan</h2>
    <p class="text-center">Apple Watch Ultra 2 dirancang untuk kegiatan ekstrem dengan ketahanan superior dan fitur-fitur canggih, menjadikannya pilihan terbaik bagi pengguna yang membutuhkan smartwatch tangguh dan andal.</p>
  </section>
  </div>

  <!-- Coment Section -->
<section class="section" style="background: #f3f6fa;">
  <h2 class="section-title text-center">User Reviews</h2>
  <div class="grid mb-4">
    <div class="card">
      <h4>Andi</h4>
      <p>"Aplikasi ini sangat membantu dan mudah digunakan. Desainnya juga menarik!"</p>
      <p>⭐⭐⭐⭐⭐</p>
    </div>
    <div class="card">
      <h4>Sinta</h4>
      <p>"Fitur-fitur yang ditawarkan sangat lengkap untuk kebutuhan saya."</p>
      <p>⭐⭐⭐⭐</p>
    </div>
    <div class="card">
      <h4>Budi</h4>
      <p>"Pengalaman saya cukup baik, walaupun masih ada sedikit bug."</p>
      <p>⭐⭐⭐</p>
    </div>
  </div>

  <!-- Form Komentar -->
  <div class="container">
    <h4 class="text-center mb-3">Tinggalkan Komentar Anda</h4>
    <form id="commentForm">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="komentar" class="form-label">Komentar</label>
        <textarea class="form-control" id="komentar" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Kirim Komentar</button>
    </form>
  </div>
</section>

  <!-- Footer -->
<footer class="bg-dark text-white py-3">
  <div class="container footer-social">
    <div>
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
    <div class="footer-right">
      <p class="fw-bold mb-1">Follow us:</p>
      <div class="d-flex gap-4">
        <div class="social-column">
          <span>Creator 1</span>
          <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="#"><i class="bi bi-github"></i> GitHub</a>
        </div>
        <div class="social-column">
          <span>Creator 2</span>
          <a href="#"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="#"><i class="bi bi-github"></i> GitHub</a>
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- Script Bootstrap & AOS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <script>
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
      const sections = document.querySelectorAll('section');
      sections.forEach(section => {
        if (section.getBoundingClientRect().top < window.innerHeight && section.getBoundingClientRect().bottom > 0) {
          if (currentScroll > lastScrollTop) {
            section.classList.add('aos-up');
            section.classList.remove('aos-down');
          } else {
            section.classList.add('aos-down');
            section.classList.remove('aos-up');
          }
          section.classList.add('aos-animate');
        } else {
          section.classList.remove('aos-animate');
        }
      });
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    }, false);
  </script>
</body>

</html>
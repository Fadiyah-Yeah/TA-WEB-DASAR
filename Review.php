<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Produk</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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
      padding: 80px 10%;
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

    .section {
      padding: 60px 10%;
      height: 100vh;
      padding: 20px;
    }


    .section-title {
      text-align: center;
      font-size: 32px;
      margin-bottom: 40px;
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
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      text-align: center;
    }

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

    .portfolio {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 40px;
      margin-top: 30px;
    }

    .portfolio img {
      width: 200px;
      height: auto;
      border-radius: 12px;
    }

    /* .pricing {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .price-card {
      padding: 30px;
      border-radius: 20px;
      color: white;
      text-align: center;
      font-weight: bold;
    }

    .price1 { background: #ff6b6b; }
    .price2 { background: #4dabf7; }
    .price3 { background: #b197fc; }
    .price4 { background: #ffa94d; } */

    .card p:last-child {
      font-size: 20px;
      color: #f5b301;
      margin-top: 10px;
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
        Bootstrap
      </a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Beranda.php">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#hal5">About</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
             <a class="nav-link" href="LoginAkun.php"><i class="bi bi-people-fill"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
<section class="hero">
  <div class="hero-text">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <h1> NAMA MENU</h1>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" value="">iPhone</a></li>
            <li><a class="dropdown-item" value="">Macbook</a></li>
            <li><a class="dropdown-item" value="">iPad</a></li>
            <li><a class="dropdown-item" value="">Apple Watch</a></li>
            <li><a class="dropdown-item" value="">AirPods</a></li>
            <li><a class="dropdown-item" value="">Apple TV</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
    <p>Harga</p>
  </div>
  <img src="https://via.placeholder.com/300x300?text=Rocket+Illustration" alt="Rocket Illustration">
</section>

<!-- Spesifikasi -->
<section class="section">
  <h2 class="section-title">SPESIFIKASI</h2>
  <div class="grid">
    <div class="card"> blablabla</div>
  </div>
</section>

<!-- Fitur -->
<section class="section" style="background: linear-gradient(to bottom right, #fdfbfb, #e2ebf0);">
  <h2 class="section-title">FITUR</h2>
  <div class="workflow">
    <div class="step">1. Data Collection</div>
    <div class="step">2. Research</div>
    <div class="step">3. Analysis</div>
    <div class="step">4. Planning</div>
    <div class="step">5. Tech Stack Decision</div>
    <div class="step">6. UX/UI Design</div>
    <div class="step">7. MVP Creation</div>
    <div class="step">8. Programming</div>
    <div class="step">9. Testing</div>
    <div class="step">10. Deployment</div>
  </div>
</section>

<!-- Kesimpula -->
<section class="section">
  <h2 class="section-title">Kesimpulan</h2>
  <div class="portfolio">
    <img src="https://via.placeholder.com/200x400?text=App+1" alt="App 1">
    <img src="https://via.placeholder.com/200x400?text=App+2" alt="App 2">
  </div>
</section>

<!-- buat apalah nanti
<section class="section">
  <h2 class="section-title">Pricing Plans</h2>
  <div class="pricing">
    <div class="price-card price1">Basic</div>
    <div class="price-card price2">Standard</div>
    <div class="price-card price3">Pro</div>
    <div class="price-card price4">Enterprise</div>
  </div>
</section> -->

<!-- Coment -->
<section class="section" style="background: #f3f6fa;">
  <h2 class="section-title">User Reviews</h2>
  <div class="grid">
    <div class="card">
      <div class="card">
        <h4>Andi</h4>
        <p>"Aplikasi ini sangat membantu dan mudah digunakan. Desainnya juga menarik!"</p>
        <p>⭐⭐⭐⭐⭐</p>
      </div>
    </div>
    <div class="card">
      <div class="card">
        <h4>Sinta</h4>
        <p>"Fitur-fitur yang ditawarkan sangat lengkap untuk kebutuhan saya."</p>
        <p>⭐⭐⭐⭐</p>
      </div>
    </div>
    <div class="card">
      <div class="card">
        <h4>Budi</h4>
        <p>"Pengalaman saya cukup baik, walaupun masih ada sedikit bug."</p>
        <p>⭐⭐⭐</p>
      </div>
    </div>
  </div>
</section>
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2023 Your Company. All rights reserved.</p>
      <p>Follow us on:
        <a href="#" class="text-white">Facebook</a>,
        <a href="#" class="text-white">Twitter</a>,
        <a href="#" class="text-white">Instagram</a>
      </p>
    </div>
  </footer>

  <!-- Script Bootstrap & AOS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  
<script>
  let lastScrollTop = 0;
  window.addEventListener('scroll', function () {
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
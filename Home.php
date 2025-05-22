<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
    body {
      padding-top: 70px;
      font-family: 'Segoe UI', sans-serif;
       background-color: rgba(255, 255, 255, 0.2);
      background: linear-gradient(-45deg, #2F4156, #567C8D, #C8D9E6, #F5EFEB, #FFFFFF);
      justify-content: center;
      align-items: center;
    }
    section {
      height: 100vh;
      padding: 60px 20px;
    }
    .card {
      margin-right: auto;
      margin-left: auto;
      width: 65%;
      box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
      border-radius: 20px;
      backdrop-filter: blur(14px);
      background-color: rgba(255, 255, 255, 0.2);
      padding: 0%;
      text-align: justify;
    }
     
.parent {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(5, 1fr);
    gap: 8px;
}
    
/* .div1 {
    grid-column: span 2 / span 2;
    grid-row: span 5 / span 5;
}

.div2 {
    grid-column: span 2 / span 2;
    grid-row: span 5 / span 5;
    grid-column-start: 3;
} */
        
    .fixed-size-img {
    width: 3cm;
    height: 3cm;
    object-fit: cover;
    border-radius: 50%;
  }

  .creator-card {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
    text-align: center;
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

  .footer-right {
    text-align: right;
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
          <li class="nav-item"><a class="nav-link" href="../Beranda.php">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="#hal4">About</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="LoginAkun.php"><i class="bi bi-people-fill"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 <!-- Halaman 1 -->
<section id="hal1" class="hal1 d-flex align-items-center" data-aos="fade-up">
  <div class="container text-center">
    <br>
    <h1><b>"TALK About APPLE With AppleTalk"</b></h1>
    <p><!-- Review Apple produk mulai dari spesifikasi hingga fiturnya --> AppleTalk menyajikan ulasan mendalam mengenai produk Apple, dari spesifikasi hingga fitur yang ditawarkan.</p>
    <a href="#hal2" class="btn btn-primary">Let's Get Started</a>
  </div>
</section>

<!-- Halaman 2 -->
<section id="hal2" class="hal2 text-black py-5" data-aos="fade-right">
  <div class="container">
    <br><br>
    <div class="row align-items-center">
      <div class="text-center col-12">
        <h1 class="text-lg"><b>WHAT WE DO</b></h1>
       <p>Kami menyediakan ulasan produk Apple yang informatif dan objektif, bersumber dari referensi terpercaya untuk membantu Anda dalam mengenal lebih jauh tentang produk-produk Apple.</p>
    </div>
  </div>
</section>

<!-- Halaman 3 -->
<section id="hal3" class="hal3 py-5" data-aos="zoom-in">
  <div class="container">
    <h1 class="text-center mb-4">What We Post</h1>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="product.png" class="card-img-top" alt="Review">
          <div class="card-body">
            <h5 class="card-title">Review</h5>
            <p class="card-text">Website kami berisi ulasan mendalam tentang berbagai produk dari brand Apple.</p>
            <a href="#" class="btn btn-primary">See Reviews</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="logo.png" class="card-img-top" alt="News">
          <div class="card-body">
            <h5 class="card-title">News</h5>
            <p class="card-text">Kami juga menyajikan kabar terbaru dan update mengenai produk-produk Apple.</p>
            <a href="#" class="btn btn-primary">Read News</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <a href="#hal4" class="btn btn-primary">Learn More</a>
    </div>
  </div>
</section>

<!-- Halaman 4 -->
<section id="hal4" class="hal4 text-black py-5" data-aos="fade-left">
  <div class="container">
    <br><br><br>
    <h1 class="text-center">CREATOR</h1>
    <div class="row g-4 justify-content-center mt-4">
      <div class="col-12 col-md-5">
        <div class="creator-card h-100 d-flex flex-column align-items-center">
          <img src="contoh.png" class="fixed-size-img mb-3" alt="Creator 1">
          <h3>M.Shofa Azmi</h3>
          <h4>124240058</h4>
        </div>
      </div>
      <div class="col-12 col-md-5">
        <div class="creator-card h-100 d-flex flex-column align-items-center">
          <img src="contoh.png" class="fixed-size-img mb-3" alt="Creator 2">
          <h3>Fadiyah C.T</h3>
          <h4>124240041</h4>
        </div>
      </div>
    </div>
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
    AOS.init({
      duration: 1200,
      once: true
    });

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

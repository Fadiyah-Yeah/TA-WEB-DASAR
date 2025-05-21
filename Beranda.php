<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fabulous Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .navbar {
      padding: 1rem 2rem;
      background-color: #042440;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 1.6rem;
    }
     /* .navbar {
      background-color: #042440;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    } */
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
    }
    /* .dropdown-menu {
      background-color: #042440;
    }
    .dropdown-item {
      color: white;
    } */
    /* Hero Section */
    .hero-section {
      background: #2F4156;
      padding: 60px 0;
      color: white;
    }
    .hero-section .btn-shop {
      background: #567C8D;
      border: none;
      padding: 10px 25px;
      color: white;
      font-weight: 600;
      border-radius: 30px;
      transition: background 0.3s ease;
      color: white;
    }
    .hero-section .btn-shop:hover {
      background: #C8D9E6;
      color: white;
    }
    /* Watch Product circles */
    .watch-product .circle {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: #eee;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 2px 2px 8px rgb(0 0 0 / 0.1);
      cursor: pointer;
      margin: 0 10px;
      transition: transform 0.3s ease;
    }
    .watch-product .circle:hover {
      transform: scale(1.1);
      box-shadow: 2px 2px 15px rgb(0 0 0 / 0.3);
    }
    /* Fabulous Products cards */
    .fabulous-products .card {
      border: none;
      box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
      transition: transform 0.3s ease;
    }
    .fabulous-products .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgb(0 0 0 / 0.15);
    }
    .fabulous-products{
     background: #2F4156;
     Color: white;
    }
    .label-sale, .label-new {
      position: absolute;
      top: 10px;
      left: 10px;
      padding: 3px 8px;
      font-size: 0.75rem;
      font-weight: 600;
      border-radius: 20px;
      color: white;
    }
    .label-sale {
      background: #c44141;
    }
    .label-new {
      background: #41c455;
    }
      .cards-wrapper .card:nth-child(n+5) {
        display: none;
    }
    /* Show all cards when container has show-all */
    .cards-wrapper.show-all .card {
        display: block;
    }
     .cards-wrapper .card:nth-child(n+5) {
        display: none;
    }
    /* Show all cards when container has show-all */
    .cards-wrapper.show-all .card {
        display: block;
    }
    .btn-shop {
        background-color: #567C8D;
        color: white;
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: block;
        margin: 40px auto 20px auto;
        width: 150px;
        text-align: center;
    }
    .btn-shop:hover {
        background-color: #C8D9E6;
    }
    .btn-expand {
        width: 100% !important;
        transition: width 0.4s ease;
    }
    
    /* About Section */
    .about-section {
      padding: 60px 0;
    }
    .about-section img {
      max-width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgb(0 0 0 / 0.1);
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
          <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Beranda.php">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="Home.php#hal4">About</a></li>
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
  <section class="hero-section">
    <div class="container d-flex flex-wrap align-items-center justify-content-center">
      <div class="col-md-5 text-center text-md-start">
        <img src="https://i.ibb.co/b1Dfzmr/lemon-soda.png" alt="Fresh Lemon Soda" class="img-fluid" />
      </div>
      <div class="col-md-6 ps-md-5">
        <h6 class="text">Lemon Test In Town</h6>
        <h1 class="fw-bold">Fresh Lemon Soda</h1>
        <p class="mb-4">
          Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century.
        </p>
        <a href="Review.php"><button class="btn btn-shop">START NOW</button></a>
      </div>
    </div>
  </section>

  <!-- Watch Product -->
  <section class="watch-product py-5 text-center">
    <div class="container">
      <p class="text-uppercase text-muted mb-2">The Products</p>
      <h2 class="mb-4 fw-bold">Watch Product</h2>
      <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
        <div class="circle bg-primary text-white" title="Blueberry">
          <a href="Review.php"><img src="https://i.ibb.co/wKQhCb3/blueberry-can.png" alt="Blueberry" class="img-fluid" style="max-width: 60px;"></a>
          <div>iPhone</div>
        </div>
        <div class="circle bg-danger text-white" title="Cranberry">
          <a href=""><img src="https://i.ibb.co/GRW9mYm/cranberry-can.png" alt="Cranberry" class="img-fluid" style="max-width: 60px;"></a>
          <div>Macbook</div>
        </div>
        <div class="circle bg-info text-white" title="Rose White">
          <a href=""><img src="https://i.ibb.co/3CyB6R1/rosewhite-can.png" alt="Rose White" class="img-fluid" style="max-width: 60px;"></a>
          <div>iPad</div>
        </div>
        <div class="circle bg-warning text-white" title="Spice Mango">
          <a href="Watch.php"><img src="https://i.ibb.co/n0F1gZ3/spicemango-can.png" alt="Spice Mango" class="img-fluid" style="max-width: 60px;"></a>
          <div>Watch</div>
        </div>
        <div class="circle bg-danger text-white" title="Changer">
          <a href="Airpods.php"><img src="https://i.ibb.co/GRW9mYm/cranberry-can.png" alt="Changer" class="img-fluid" style="max-width: 60px;"></a>
          <div>Airpods</div>
        </div>
        <div class="circle bg-danger text-white" title="Changer">
          <a href="TV.php"><img src="https://i.ibb.co/GRW9mYm/cranberry-can.png" alt="Changer" class="img-fluid" style="max-width: 60px;"></a>
          <div>TV & Home</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fabulous Products -->
  <section class="fabulous-products py-5">
    <div class="container">
      <p class="text-uppercase text-muted mb-2">The Latest</p>
      <h2 class="mb-4 fw-bold">Fabulous Products</h2>
      <div class="row g-4">
        <!-- Product Card -->
        <div class="col-md-4 col-lg-3 position-relative">
          <div class="card">
            <span class="label-sale">Top</span>
            <img src="https://i.ibb.co/6NsZL0G/scotch-can.png" class="card-img-top" alt="Scotch" />
            <div class="card-body text-center">
              <h5 class="card-title">Scotch</h5>
              <p class="card-text">$96.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 position-relative">
          <div class="card">
            <span class="label-new">New</span>
            <img src="https://i.ibb.co/BTXct1L/spritz-can.png" class="card-img-top" alt="Spritz" />
            <div class="card-body text-center">
              <h5 class="card-title">Spritz</h5>
              <p class="card-text"><del>$65.00</del> <strong>$50.00</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 position-relative">
          <div class="card">
            <span class="label-new">New</span>
            <img src="https://i.ibb.co/xHGR2RD/manhatten-can.png" class="card-img-top" alt="Manhatten" />
            <div class="card-body text-center">
              <h5 class="card-title">Manhatten</h5>
              <p class="card-text"><del>$110.00</del> <strong>$90.00</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 position-relative">
          <div class="card">
            <span class="label-new">New</span>
            <img src="https://i.ibb.co/GFPZ3Hq/french75-can.png" class="card-img-top" alt="French 75" />
            <div class="card-body text-center">
              <h5 class="card-title">French 75</h5>
              <p class="card-text"><del>$75.00</del> <strong>$50.00</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 position-relative">
          <div class="card">
            <span class="label-new">New</span>
            <img src="https://i.ibb.co/4gRxT6b/whiskey-sour-can.png" class="card-img-top" alt="Whiskey Sour" />
            <div class="card-body text-center">
              <h5 class="card-title">Whiskey Sour</h5>
              <p class="card-text"><del>$45.00</del> <strong>$25.00</strong></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 position-relative">
          <div class="card">
            <span class="label-new">New</span>
            <img src="https://i.ibb.co/jGmR6Wx/mojito-can.png" class="card-img-top" alt="Mojito" />
            <div class="card-body text-center">
              <h5 class="card-title">Mojito</h5>
              <p class="card-text"><del>$25.00</del> <strong>$20.00</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <button class="btn btn-shop px-4">View All</button>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section">
    <div class="container d-flex flex-wrap align-items-center gap-5">
      <div class="col-md-6">
        <img src="https://i.ibb.co/7XqpbZm/hello-summer.png" alt="All About Fabulous" />
      </div>
      <div class="col-md-5">
        <p class="text-uppercase text-muted mb-2">The Products</p>
        <h2 class="mb-4 fw-bold">All About Fabulous</h2>
        <p class="mb-4 text-muted">
          Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry’s standard dummy text ever since the 1500s, to make a type specimen book.
        </p>
        <ul>
          <li>blablabla</li>
          <li>blablabla</li>
          <li>blablabla</li>
          <li>blablabla</li>
          <li>blablabla</li>
          <li>blablabla</li>
          <li>blablabla</li>
          <li>blablabla</li>
        </ul>
        <button class="btn btn-shop mt-3">View More</button>
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
<script>
    function toggleViewAll() {
        const container = document.getElementById('productCards');
        const btn = document.getElementById('btnViewAll');
        container.classList.toggle('show-all');

        if (container.classList.contains('show-all')) {
            btn.textContent = 'Collapse';
            btn.classList.add('btn-expand');
        } else {
            btn.textContent = 'View All';
            btn.classList.remove('btn-expand');
        }
    }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</body>
</html>

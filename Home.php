<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
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
    }
    /* .dropdown-menu {
      background-color: #042440;
    }
    .dropdown-item {
      color: white;
    } */
    section {
      height: 100vh;
      padding: 20px;
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

  <!-- hal 1 -->
  <section id="hal1" class="bg-light" data-aos="fade-up">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>QUOTES</h1>
          <p>SIMPLE TEXT DOWN HERE</p>
          <a href="#hal2" class="btn btn-primary">Let's Get Started</a>
        </div>
      </div>
    </div>
  </section>

  <!-- hal 2 -->
  <section id="hal2" class="bg-secondary text-white" data-aos="fade-right">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>JUDUL</h1>
          <p>SIMPLE TEXT DOWN HERE</p>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card my-md-5" style="width: 18rem;">
            <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Placeholder Image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- hal 3 -->
  <section id="hal3" class="bg-light py-5" data-aos="zoom-in">
    <div class="container">
      <h1 class="text-center mb-4">What We Review</h1>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="iPhone">
            <div class="card-body">
              <h5 class="card-title">iPhone</h5>
              <p class="card-text">Powerful performance with beautiful design and long-lasting battery.</p>
              <a href="#" class="btn btn-primary">See Reviews</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Apple Watch">
            <div class="card-body">
              <h5 class="card-title">Apple Watch</h5>
              <p class="card-text">Stay healthy and connected with stylish smart features.</p>
              <a href="#" class="btn btn-primary">See Reviews</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="MacBook">
            <div class="card-body">
              <h5 class="card-title">MacBook</h5>
              <p class="card-text">A laptop that redefines productivity, power, and portability.</p>
              <a href="#" class="btn btn-primary">See Reviews</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="#hal4" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </section>

  <!-- hal 4 -->
  <section id="hal4" class="bg-secondary text-white" data-aos="fade-left">
    <div class="container">
      <h1 class="text-center">Join Our Community</h1>
      <p class="text-center">Join our community to get the latest news and reviews.</p>
      <div class="text-center">
        <a href="#hal5" class="btn btn-primary">Join Now</a>
      </div>
    </div>
  </section>

  <!-- hal 5 -->
  <section id="hal5" class="bg-light" data-aos="fade-up">
    <div class="container">
      <h1 class="text-center">Contact Us</h1>
      <p class="text-center">For inquiries, please contact us at:</p>
      <p class="text-center">Email: <a href="mailto:info@example.com">info@example.com</a></p>
      <p class="text-center">Phone: <a href="tel:+1234567890">+1 234 567 890</a></p>
      <div class="text-center">
        <a href="#hal1" class="btn btn-primary">Back to Top</a>
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
<script>
  AOS.init({
    duration: 1200,
    once: true
  });
</script>
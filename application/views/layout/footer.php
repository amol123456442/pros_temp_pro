<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Footer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .footer-custom {
      /* background:
        url('assets/images/wave.svg'),
        url('../assets/images/wave.svg'); */
      /* background-repeat: no-repeat;
      background-position: center center;
      background-size: cover; */
      background-color: black;
      color:white;
      position: relative;
    }

    .footer-overlay {
      /* background-color: rgba(0, 0, 0, 0.75); */
      padding: 100px 0 30px;
    }

    .social-icon {
      font-size: 1.2rem;
      padding: 10px;
      border-radius: 50%;
      width: 42px;
      height: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .social-icon:hover {
      transform: scale(1.1);
      opacity: 0.85;
    }

    .social-facebook {
      background-color: #3b5998;
    }

    .social-twitter {
      background-color: #000000;
    }

    .social-linkedin {
      background-color: #0077b5;
    }

    .social-youtube {
      background-color: #ff0000;
    }

    footer ul li a {
      font-size: 0.95rem;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 15px;
      margin-top: 30px;
      text-align: center;
      font-size: 0.85rem;
    }

    @media (max-width: 767.98px) {
      .footer-custom .display-6 {
        font-size: 1.6rem;
      }

      .footer-bottom {
        font-size: 0.75rem;
      }
    }
  </style>
</head>

<body>

  <footer class="footer-custom">
    <div class="footer-overlay">
      <div class="container">

        <div class="row g-4">

          <!-- Logo and Social Icons -->
          <div class="col-12 col-md-6 col-lg-4">
            <h2 class="display-6 mb-3">LOGO</h2>
            <p class="mb-3">Empowering your digital journey with insights and innovation.</p>
            <div class="d-flex gap-3 mt-2">
              <a href="#" class="text-white social-icon social-facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-white social-icon social-twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="text-white social-icon social-linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-white social-icon social-youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <!-- Explore -->
          <div class="col-6 col-md-3 col-lg-2 ">
            <h5 class="mb-3">Explore</h5>
            <ul class="list-unstyled ">
              <li><a href="<?= base_url('footer/terms_of_use'); ?>" class="text-light text-decoration-none">Terms of Use</a></li>
              <li><a href="<?= base_url('footer/privacy_policy'); ?>" class="text-light text-decoration-none">Privacy Policy</a></li>
              <li><a href="<?= base_url('footer/c_policy'); ?>" class="text-light text-decoration-none">Copyright Policy</a></li>
              <li><a href="<?= base_url('footer/cookie_policy'); ?>" class="text-light text-decoration-none">Cookie Policy</a></li>
              <li><a href="<?= base_url('footer/do_not_sell_my_data'); ?>" class="text-light text-decoration-none">Do not sell my data</a></li>
              <li><a href="<?= base_url('/get_a_demo'); ?>" class="text-light text-decoration-none">Contact Us</a></li>
            </ul>
          </div>

          <!-- Publications -->
          <div class="col-6 col-md-3 col-lg-3">
            <h5 class="mb-3">Publications</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-light text-decoration-none">Explore All</a></li>
              <li><a href="#" class="text-light text-decoration-none">Developer</a></li>
              <li><a href="#" class="text-light text-decoration-none">TechForge</a></li>
              <li><a href="#" class="text-light text-decoration-none">TechWire Asia</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 col-lg-3">
            <!-- <h5 class="mb-3">Publications</h5> -->
            <div class="d-flex justify-content-between gap-3">
              <img src="https://alltake.com/assets/images/footer/gdpr.png" alt="" width="80px" height="80px">
              <img src="https://alltake.com/assets/images/footer/gdpr.png" alt="" width="80px" height="80px">
              <img src="https://alltake.com/assets/images/footer/gdpr.png" alt="" width="80px" height="80px">
              <img src="https://alltake.com/assets/images/footer/gdpr.png" alt="" width="80px" height="80px">
            </div>
          </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom mt-4">
          <p>&copy; 2025 Prospect Precise LLP. All rights reserved. | <a href="#" class="text-white text-decoration-underline">Back to Top</a></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
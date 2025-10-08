<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <style>
    .font_weight {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
    }

    .navbg {
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
      color: #254D70;
      position: relative;
      transition: background-color 0.3s ease, color 0.3s ease;
      border-radius: 5px;
      padding: 5px 10px;
      cursor: pointer;
    }

    .nav-link:hover,
    .nav-link:focus {
      text-decoration: underline;
      text-decoration-color: #007bff;
      text-decoration-thickness: 2px;
      text-underline-offset: 4px;
    }

    .nav-link.dropdown-toggle::after {
      display: none !important;
    }

    .dropdown-menu .dropdown-item:hover {
      background-color: #254D70;
      color: white;
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }

    .dropdown-menu {
      display: none;
      width: 900px;
      padding: 10px;
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap: 10px;
    }

    .grid-container.publishers {
      grid-template-columns: 1fr 1fr;
    }

    .grid-item {
      display: flex;
      align-items: center;
      padding: 10px;
      background: #f8f9fa;
      border-radius: 5px;
    }

    .grid-item img {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      object-fit: cover;
    }

    .grid-item-content {
      flex-grow: 1;
    }

    .grid-item h4 {
      margin: 0;
      font-size: 16px;
      color: #000;
    }

    .grid-item p {
      margin: 5px 0 0;
      font-size: 12px;
      color: #666;
    }

    .featured-section {
      width: 300px;
      background: #f1f3f5;
      padding: 10px;
      border-left: 1px solid #ddd;
    }

    .featured-item {
      margin-bottom: 10px;
    }

    .featured-item img {
      width: 100%;
      height: 100px;
      object-fit: cover;
      margin-bottom: 10px;
    }

    .featured-item h4 {
      font-size: 16px;
      margin: 5px 0;
    }

    .featured-item p {
      font-size: 12px;
      color: #666;
    }

    .podcast-link {
      position: relative;
      display: inline-block;
      padding-right: 40px;
    }

    .trending-badge {
      position: absolute;
      top: -10px;
      right: -25px;
      background-color: orange;
      color: white;
      font-size: 12px;
      padding: 2px 6px;
      border-radius: 3px;
      animation: blink 1s infinite;
    }

    @keyframes blink {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -1px;
      display: none;
    }

    .dropdown-submenu:hover>.dropdown-menu {
      display: block;
    }

    .search-container {
      position: relative;
      width: 250px;
    }

    .input-group {
      position: relative;
      width: 100%;
    }

    .form-control {
      height: 40px;
      padding-right: 40px;
      border-color: #ced4da;
    }

    .btn-link {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      border: none;
      background: none;
      z-index: 10;
      color: #6c757d;
    }

    .nav-link.dropdown-toggle {
      position: relative;
      padding-right: 25px;
    }

    .dropdown-icon {
      position: absolute;
      right: -13px;
      top: 50%;
      transform: translateY(-50%);
      transition: transform 0.3s ease;
    }

    @media (max-width: 991px) {
      .navbar-nav {
        flex-direction: column;
        align-items: stretch;
      }

      .nav-item {
        margin: 5px 0;
      }

      .dropdown-menu {
        width: 100%;
        position: static;
        box-shadow: none;
      }

      .grid-container,
      .grid-container.publishers {
        grid-template-columns: 1fr;
      }

      .featured-section {
        width: 100%;
        border-left: none;
        border-top: 1px solid #ddd;
        margin-top: 10px;
      }

      .search-container {
        width: 100%;
        margin-top: 10px;
      }

      .input-group {
        width: 100%;
      }

      .form-control {
        min-width: 0 !important;
        width: 100 !important;
        height: 36px;
        padding-right: 36px;
      }

      .btn-link {
        right: 8px;
      }

      .bi-search {
        font-size: 14px;
      }
    }

    @media (max-width: 576px) {
      .search-container {
        margin-top: 8px;
      }

      .form-control {
        height: 32px;
        padding: 6px 32px 6px 12px;
      }

      .btn-link {
        right: 6px;
      }

      .bi-search {
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbg navbar-expand-lg py-3 sticky-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <a class="navbar-brand me-5 text-dark" href="">
        <!-- <img src="https://prospectprecise.com/wp-content/uploads/2021/04/logo__3_-removebg-preview.png" width="130px"
          height="auto" alt=""> -->
        <h1>Logo</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
        <div class="d-flex w-100 justify-content-between align-items-center">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font_weight">
            <li class="nav-item mx-3">
              <a class="nav-link active text-dark" aria-current="page" href="<?= base_url(''); ?>">Home</a>
            </li>
            <li class="dropdown mx-3">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" aria-expanded="false">
                Services
                <i class="dropdown-icon bi bi-chevron-bar-down"></i>
              </a>
              <ul class="dropdown-menu border-0 bg-light">
                <li class="d-flex">
                  <div class="grid-container publishers">
                    <a href="<?= base_url('services/contentsyndication'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Content Syndication">
                        <div class="grid-item-content">
                          <h4>Content Syndication</h4>
                          <p>Distribute your content across multiple platforms to maximize reach.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('services/abm'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="ABM">
                        <div class="grid-item-content">
                          <h4>Account-Based Marketing</h4>
                          <p>Target high-value accounts with personalized marketing strategies.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('services/intent'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Intent">
                        <div class="grid-item-content">
                          <h4>Intent</h4>
                          <p>Leverage intent data to identify and engage potential customers.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('services/email'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Email">
                        <div class="grid-item-content">
                          <h4>Email</h4>
                          <p>Effective email campaigns to nurture leads and drive conversions.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="featured-section">
                    <div class="featured-item">
                      <img src="https://dummyimage.com/600x400/000/fff" alt="Webinar">
                      <h4>Webinar</h4>
                      <p>Unlock the Black Box of AI Discovery with Ye Scout →</p>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown mx-3">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" aria-expanded="false">
                Solutions
                <i class="dropdown-icon bi bi-chevron-bar-down"></i>
              </a>
              <ul class="dropdown-menu border-0 bg-light">
                <li class="d-flex">
                  <div class="grid-container publishers">
                    <a href="<?= base_url('solutions/industry_specific'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Industry Specific">
                        <div class="grid-item-content">
                          <h4>Industry Specific</h4>
                          <p>Tailored solutions to meet unique industry challenges.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('solutions/customer_stories'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Customer Stories">
                        <div class="grid-item-content">
                          <h4>Customer Stories</h4>
                          <p>Real success stories from our satisfied clients.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('solutions/budget_analysis'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Budget Analysis">
                        <div class="grid-item-content">
                          <h4>Budget Analysis</h4>
                          <p>Comprehensive audit and optimization of your current setup.</p>
                        </div>
                      </div>
                    </a>

                  </div>
                  <div class="featured-section">
                    <div class="featured-item">
                      <img src="https://dummyimage.com/600x400/000/fff" alt="Webinar">
                      <h4>Webinar</h4>
                      <p>Unlock the Black Box of AI Discovery with Ye Scout →</p>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown mx-3">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" aria-expanded="false">
                Company
                <i class="dropdown-icon bi bi-chevron-bar-down ms-4"></i>
              </a>
              <ul class="dropdown-menu border-0 bg-light">
                <li class="d-flex">
                  <div class="grid-container publishers">
                    <a href="<?= base_url('company/about'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="About">
                        <div class="grid-item-content">
                          <h4>About</h4>
                          <p>Learn about our mission, vision, and values.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('company/newsroom'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Newsroom">
                        <div class="grid-item-content">
                          <h4>Newsroom</h4>
                          <p>Stay updated with our latest news and announcements.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('company/blogs'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Blogs">
                        <div class="grid-item-content">
                          <h358>Blogs</h4>
                            <p>Explore our insightful articles and industry trends.</p>
                        </div>
                      </div>
                    </a>
                    <a href="<?= base_url('company/career'); ?>" class="text-decoration-none text-dark">
                      <div class="grid-item">
                        <img src="https://dummyimage.com/40x40/000/fff" alt="Careers">
                        <div class="grid-item-content">
                          <h4>Careers</h4>
                          <p>Join our team and grow with us.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="featured-section">
                    <div class="featured-item">
                      <img src="https://dummyimage.com/600x400/000/fff" alt="Webinar">
                      <h4>Webinar</h4>
                      <p>Unlock the Black Box of AI Discovery with Ye Scout →</p>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>

          <div class="search-container ms-auto position-relative">
            <form class="d-flex align-items-center" role="search">
              <div class="input-group">
                <input id="searchInput" class="form-control border-end-0 rounded-pill ps-3 pe-5" type="search"
                  placeholder="Search..." aria-label="Search" style="height: 40px; min-width: 250px;">
                <button class="btn btn-link text-muted position-absolute end-0 top-50 translate-middle-y me-2"
                  type="button" style="border: none; background: none; z-index: 10;">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>

</body>

</html>
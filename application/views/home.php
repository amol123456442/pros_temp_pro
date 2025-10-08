<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <?php $this->load->view('layout/common_links'); ?>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>
  <?php $this->load->view('layout/header'); ?>

  <!-- HERO SECTION START -->
  <div class="container-fluid hero-section">


    <div class="container">
      <div class="row align-items-center">
        <!-- Left Text -->
        <div class="col-md-6 hero-left">
          <h1 class="display-3">
            Turn Your <br><span class="text-info fw-bold">Digital Presence</span><br>into a Differentiator™
          </h1>
          <p class="mt-4 font_size_p me-5">
            The leading digital presence platform for multi-location brands to deliver consistent, accurate, and
            engaging experiences
          </p>
          <a href="#" class="btn btn-light mt-3 px-4 py-2 rounded-5"><span class="card_font">Get a Demo</span></a>
        </div>

        <!-- Right Image -->
        <div class="col-md-6 text-center mt-5 mt-md-0 hero-right">
          <div>
            <img src="assets/images/service_home_1.png" alt="UI Design" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- AI Animation Section -->
  <div class="container my-5 py-4 ai-section">
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-3"><span class="text-info">AI-powered tools</span> to increase efficiency</h2>
        <ul class="">
          <li class="mb-2">Deliver dynamic content in real-time</li>
          <li class="mb-2">Engage customers with personalization</li>
          <li class="mb-2">Automate workflows & save resources</li>
        </ul>
      </div>


      <!-- Right Animation Block -->
      <div class="col-md-6 position-relative">
        <div id="aiCard" class="bg-light p-4 rounded shadow text-center mb-3"
          style="opacity: 0; transform: scale(0.8);">
          <strong>Auto-Generated Insights</strong><br>
          <small class="text-muted">Just like magic!</small>

        </div>
        <div id="typingBox" class="bg-info text-white p-2 px-3 rounded-pill shadow"
          style="width: 0ch; overflow: hidden; white-space: nowrap; border-right: 2px solid white;">
          Fetching customer trend...
        </div>
      </div>
    </div>
  </div>
  <section class="wave-section">
    <!-- Top SVG Wave -->
    <div class="wave-top">
      <svg viewBox="0 0 1440 110" preserveAspectRatio="none" style="width: 100%; height: 100px;">
        <path fill="#f1f1f1" d="M0,100 C480,100 960,0 1440,0 L1440,0 L0,0 Z"></path>
      </svg>
    </div>

    <div class="content container py-4">
      <h2>Manage your global brand and local<br>presence across all digital channels from <span class="highlight">one
          platform</span></h2>
      <div class="tabs-container mt-4">
        <!-- Tab Menu -->
        <ul class="tabs">
          <li><a href="#tab1" class="active">Analytics</a></li>
          <li><a href="#tab2">Reports</a></li>
          <li><a href="#tab3">Performance</a></li>
          <li><a href="#tab4">Funds</a></li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content-wrapper text-dark">
          <div id="tab1" class="tab-content active">
            <div class="row">
              <div class="col-12 col-md-6 text-start">
                <h1 class="fs-3">Lorem ipsum dolor sit amet.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quam illum et mollitia cumque
                  culpa, ipsam molestias nisi porro sint.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, error?</p>
              </div>
              <div class="col-12 col-md-6 text-start">
                <img
                  src="https://thumbs.dreamstime.com/b/digital-marketing-word-cloud-hand-writing-concept-white-background-130434775.jpg"
                  class="img-fluid" alt="Analytics">
              </div>
            </div>
          </div>
          <div id="tab2" class="tab-content">
            <div class="row">
              <div class="col-12 col-md-6 text-start">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis culpa iusto molestiae doloribus
                  asperiores, vero corporis enim expedita neque molestias ut, distinctio ratione incidunt numquam qui,
                  deserunt sed.</p>
              </div>
              <div class="col-12 col-md-6 text-start">
                <img
                  src="https://www.opendesignsin.com/blog/wp-content/uploads/2020/03/Top-Digital-Marketing-Tools-Open-Designs-India.jpg"
                  class="img-fluid" alt="Reports">
              </div>
            </div>
          </div>
          <div id="tab3" class="tab-content">
            <div class="row">
              <div class="col-12 col-md-6 text-start">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis culpa iusto molestiae doloribus
                  asperiores, vero corporis enim expedita neque molestias ut, distinctio ratione incidunt numquam qui,
                  deserunt sed.</p>
              </div>
              <div class="col-12 col-md-6 text-start">
                <img
                  src="https://thumbs.dreamstime.com/b/digital-marketing-word-cloud-hand-writing-concept-white-background-130434775.jpg"
                  class="img-fluid" alt="Performance">
              </div>
            </div>
          </div>
          <div id="tab4" class="tab-content">
            <div class="row">
              <div class="col-12 col-md-6 text-start">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis culpa iusto molestiae doloribus
                  asperiores, vero corporis enim expedita neque molestias ut, distinctio ratione incidunt numquam qui,
                  deserunt sed.</p>
              </div>
              <div class="col-12 col-md-6 text-start">
                <img
                  src="https://www.opendesignsin.com/blog/wp-content/uploads/2020/03/Top-Digital-Marketing-Tools-Open-Designs-India.jpg"
                  class="img-fluid" alt="Funds">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content container">
      <h2 class="fs-2">Prospect is the industry leader in <br><span class="text-info fs-2 fw-bold">multi-location digital
          marketing</span></h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 justify-content-center mt-5">
        <div class="col">
          <div class="card rounded-0 border-0 custom-bg h-100">
            <h5 class="card-title text-dark text-start p-2">Listings</h5>
            <div class="custom-highlight p-2">
              <p class="fs-3">200 Billion</p>
              <p class="card-text">publisher network*</p>
            </div>
            <div>
              <p class="fs-6 py-1 text-dark">All publishers who send analytics data</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card rounded-0 border-0 custom-bg h-100">
            <h5 class="card-title text-dark text-start p-2">Pages</h5>
            <div class="custom-highlight p-2">
              <p class="fs-3">4.62 Billion</p>
              <p class="card-text">Page views*</p>
            </div>
            <div>
              <p class="fs-6 py-1 text-dark">All pages products incl. Knowledge tags</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card rounded-0 border-0 custom-bg h-100">
            <h5 class="card-title text-dark text-start p-2">Search</h5>
            <div class="custom-highlight p-2">
              <p class="fs-3">452 Million</p>
              <p class="card-text">Searches*</p>
            </div>
            <div>
              <p class="fs-6 py-1 text-dark">All production search experiences</p>
            </div>
          </div>
        </div>
        <div |class="col">
          <div class="card rounded-0 border-0 custom-bg h-100">
            <h5 class="card-title text-dark text-start p-2">API</h5>
            <div class="custom-highlight p-2">
              <p class="fs-3">16.8 Billion</p>
              <p class="card-text">Requests*</p>
            </div>
            <div>
              <p class="fs-6 py-1 text-dark">Consumer and platform API</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom SVG Wave -->
    <div class="wave-bottom">
      <svg viewBox="0 0 1440 110" preserveAspectRatio="none" style="width: 100%; height: 230px;">
        <path fill="#f1f1f1" d="M0,100 C480,0 960,10 1440,-90 L1440,110 L0,110 Z"></path>
      </svg>
    </div>
  </section>
  <!-- card section -->
  <section class="py-5 card_font position-relative"
    style="background-color:rgba(248, 249, 250, 0.31); overflow: hidden;">
    <!-- <div style="position: absolute; top: -1px; left: 0; width: 100%; z-index: 0;">
  <svg viewBox="0 0 1440 150" preserveAspectRatio="none" style="width: 100%; height: 150px;">
    <path fill="#ffffff" d="M0,150 C480,50 960,50 1440,150 L1440,0 L0,0 Z"></path>
  </svg>
</div> -->
    <div class="container text-center position-relative" style="z-index: 1;">
      <h2 class="mb-2 card_font"><span class="card_title">Unmatched Performance with Prospect </span> </h2>
      <p class="text-muted mb-4 card_font">Discover why top brands trust Prospect to elevate their digital presence.</p>
      <a href="#" class="btn btn-dark rounded-pill px-4 py-2 mb-5">View Case Studies</a>

      <div class="row g-4 text-start">
        <!-- Domino's -->
        <div class="col-lg-8">
          <div class="card h-100 modern-card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <img
                src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg"
                class="img-fluid" style="height: 40px;" alt="Domino's Logo">
              <i class="bi bi-arrow-right-circle-fill "></i>
            </div>
            <div class="card-content">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <p class="card-text-content px-3 card_font">See how Domino's streamlines listings and pages for nearly
                    7,000 U.S. franchise locations using Prospect's platform.</p>
                </div>
                <div class="col-lg-6">
                  <img
                    src="https://img.freepik.com/free-photo/digital-marketing-with-icons-business-people_53876-94833.jpg"
                    class="img-fluid rounded" height="250px" width="414px" alt="Domino's Case Study">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- First Financial Bank -->
        <div class="col-lg-4">
          <div class="card reveal-card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
              <img
                src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg"
                class="img-fluid" style="height: 40px;" alt="First Financial Bank Logo">
              <i class="bi bi-arrow-right-circle-fill "></i>
            </div>
            <img
              src="https://media.istockphoto.com/id/1443560890/photo/digital-marketing-business-technology-concept-website-advertisement-email-social-media.jpg?s=612x612&w=0&k=20&c=S7d_Mof_fEsM69inW540APogoXkz-eA23XE1AIhTaBA="
              class="reveal-image" alt="First Financial Bank Case Study">
            <div class="card-body text-start">
              <h5 class="card-title fw-bold display-2">225 %</h5>
              <p class="card-text fs-4">Increase in site search value</p>
              <!-- <a href="#" class="btn btn-dark rounded-5">Discover More</a> -->
            </div>
          </div>
        </div>

        <!-- Samsung -->
        <div class="col-lg-4">
          <div class="card reveal-card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
              <img
                src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg"
                class="img-fluid" style="height: 40px;" alt="Samsung Logo">
              <i class="bi bi-arrow-right-circle-fill"></i>

            </div>
            <img
              src="https://media.istockphoto.com/id/1443560890/photo/digital-marketing-business-technology-concept-website-advertisement-email-social-media.jpg?s=612x612&w=0&k=20&c=S7d_Mof_fEsM69inW540APogoXkz-eA23XE1AIhTaBA="
              class="reveal-image" alt="Samsung Case Study">
            <div class="card-body text-start">
              <div class="card-body text-start">
                <h5 class="card-title fw-bold display-2">33 %</h5>
                <p class="card-text fs-4">Increase incustomer satisfaction (CSAT)</p>
                <!-- <a href="#" class="btn btn-dark rounded-5">Discover More</a> -->
              </div>
            </div>
          </div>
        </div>

        <!-- Domino's (Repeated for Layout) -->
        <div class="col-lg-8">
          <div class="card h-100 modern-card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <img
                src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg"
                class="img-fluid" style="height: 40px;" alt="Domino's Logo">
              <i class="bi bi-arrow-right-circle-fill "></i>
            </div>
            <div class="card-content">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <p class="card-text-content px-3 card_font">See how Domino's streamlines listings and pages for nearly
                    7,000 U.S. franchise locations using Prospect's platform.</p>
                </div>
                <div class="col-lg-6">
                  <img
                    src="https://img.freepik.com/free-photo/digital-marketing-with-icons-business-people_53876-94833.jpg"
                    class="img-fluid rounded" height="250px" width="414px" alt="Domino's Case Study">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Logos -->
      <!-- <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 mt-5 brand-footer">
      <img src="https://engage-insights.biz/wp-content/uploads/2024/09/unnamed.png" alt="FedEx Logo" height="40px">
      <img src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg" alt="McDonald's Logo" height="40px">
      <img src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg" alt="Allstate Logo" height="40px">
      <img src="https://engage-insights.biz/wp-content/uploads/2024/09/unnamed.png" alt="Extra Space Storage Logo" height="40px">
      <img src="https://techintelpro.com/iomt-improving-the-vitality-of-smb-healthcare-companies/Images/tmo-logo-v4.svg" alt="First Financial Bank Logo" height="40px">
    </div> -->
    </div>
    <div style="position: absolute; bottom: -1px; left: 0; width: 100%; z-index: 0;">
      <svg viewBox="0 0 1440 150" preserveAspectRatio="none" style="width: 100%; height: 500px;">
        <path fill="#ffffff" d="M0,80 C480,100 960,100 1440,0 L1440,150 L0,150 Z"></path>
      </svg>
    </div>
  </section>

  <!-- AOS CSS -->

  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-5 text-info card_title ">Resources and recommendations</h2>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Card 1 -->
        <div class="col" data-aos="zoom-in-up" data-aos-delay="100">
          <div class="card h-100 border-0 shadow-sm rounded-0">
            <img
              src="https://redcomm.co.id/red-twill/medias/6a17c91d-1fe2-4473-a6c0-8c6d91453fdb/strategi-digital-marketing-terbaru.webp?w=1000&q=80"
              class="" alt="...">
            <div class="card-body d-flex flex-column">
              <p class="text-uppercase text-muted small mb-1">Blog Post</p>
              <h6 class="fw-semibold mb-2 flex-grow-1">Create and Deliver Content More Efficiently with Prospect Pages</h6>
              <p class="text-muted small mb-2">Jun 26, 2025</p>
              <a href="#" class="btn btn-sm btn-outline-dark rounded-pill mt-auto">Learn more</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col" data-aos="zoom-in-up" data-aos-delay="200">
          <div class="card h-100 border-0 shadow-sm rounded-0">
            <img
              src="https://redcomm.co.id/red-twill/medias/6a17c91d-1fe2-4473-a6c0-8c6d91453fdb/strategi-digital-marketing-terbaru.webp?w=1000&q=80"
              class="" alt="...">
            <div class="card-body d-flex flex-column">
              <p class="text-uppercase text-muted small mb-1">Blog Post</p>
              <h6 class="fw-semibold mb-2 flex-grow-1">Website Templates Get You To Your Customer Faster</h6>
              <p class="text-muted small mb-2">Jun 25, 2025</p>
              <a href="#" class="btn btn-sm btn-outline-dark rounded-pill mt-auto">Learn more</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col" data-aos="zoom-in-up" data-aos-delay="300">
          <div class="card h-100 border-0 shadow-sm rounded-0">
            <img
              src="https://redcomm.co.id/red-twill/medias/6a17c91d-1fe2-4473-a6c0-8c6d91453fdb/strategi-digital-marketing-terbaru.webp?w=1000&q=80"
              class="" alt="...">
            <div class="card-body d-flex flex-column">
              <p class="text-uppercase text-muted small mb-1">Blog Post</p>
              <h6 class="fw-semibold mb-2 flex-grow-1">5 Reasons Top Healthcare Orgs Are Using Social Media to Drive
                Growth</h6>
              <p class="text-muted small mb-2">Jun 25, 2025</p>
              <a href="#" class="btn btn-sm btn-outline-dark rounded-pill mt-auto">Learn more</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col" data-aos="zoom-in-up" data-aos-delay="400">
          <div class="card h-100 border-0 shadow-sm rounded-0">
            <img
              src="https://redcomm.co.id/red-twill/medias/6a17c91d-1fe2-4473-a6c0-8c6d91453fdb/strategi-digital-marketing-terbaru.webp?w=1000&q=80"
              class="" alt="...">
            <div class="card-body d-flex flex-column">
              <p class="text-uppercase text-muted small mb-1">Blog Post</p>
              <h6 class="fw-semibold mb-2 flex-grow-1">What Value Can Prospect Pages Add to Your Listings?</h6>
              <p class="text-muted small mb-2">Jun 24, 2025</p>
              <a href="#" class="btn btn-sm btn-outline-dark rounded-pill mt-auto">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="scroll-container">
      <div class="scroll-track">
        <!-- 1st Set -->
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
        <img
          src="https://techintelpro.com/Zendesk-CX-Trends-SMB-Report-2/sm-images/zendesk-logo-vector-removebg-preview.png"
          alt="">
        <img src="https://techintelpro.com/Gartner-Report-Executive-AI-Governance-Playbook/Images/Gartner.png" alt="">
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
        <img src="https://techintelpro.com/Gartner-Report-Executive-AI-Governance-Playbook/Images/Gartner.png" alt="">

        <!-- 2nd Set (duplicate) -->
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
        <img src="https://techintelpro.com/Gartner-Report-Executive-AI-Governance-Playbook/Images/Gartner.png" alt="">
        <img
          src="https://techintelpro.com/Zendesk-CX-Trends-SMB-Report-2/sm-images/zendesk-logo-vector-removebg-preview.png"
          alt="">
        <img src="https://techintelpro.com/Gartner-Report-Executive-AI-Governance-Playbook/Images/Gartner.png" alt="">
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
      </div>
      <div class="scroll-track">
        <!-- 1st Set -->
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
        <img
          src="https://techintelpro.com/Zendesk-CX-Trends-SMB-Report-2/sm-images/zendesk-logo-vector-removebg-preview.png"
          alt="">
        <img src="https://techintelpro.com/Gartner-Report-Executive-AI-Governance-Playbook/Images/Gartner.png" alt="">
        <img
          src="https://techintelpro.com/Zendesk-CX-Trends-SMB-Report-2/sm-images/zendesk-logo-vector-removebg-preview.png"
          alt="">
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">

        <!-- 2nd Set (duplicate) -->
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
        <img
          src="https://techintelpro.com/Zendesk-CX-Trends-SMB-Report-2/sm-images/zendesk-logo-vector-removebg-preview.png"
          alt="">
        <img src="https://techintelpro.com/Gartner-Report-Executive-AI-Governance-Playbook/Images/Gartner.png" alt="">
        <img
          src="https://techintelpro.com/Zendesk-CX-Trends-SMB-Report-2/sm-images/zendesk-logo-vector-removebg-preview.png"
          alt="">
        <img
          src="https://techintelpro.com/mulesoft-for-agentforce-explore-tools-for-building-smarter-agents-faster-2/Images/logo.png"
          alt="">
      </div>
    </div>
  </section>
  <section class="py-5 bg-light">
    <div class="container card_font">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <h3 class="mb-3 text-gradient bg-primary bg-opacity-10 p-2 d-inline-block rounded">Why Choose Us?</h3>
          <p class="text-muted">
            Empowering businesses with smart, scalable, and secure digital solutions tailored for long-term success.
          </p>
          <div class="d-flex align-items-start mb-3">
            <div class="me-3">
              <span class="badge bg-success rounded-circle p-3"><i class="bi bi-shield-check"></i></span>
            </div>
            <div>
              <h6 class="fw-semibold mb-1">Proven Track Record</h6>
              <p class="text-muted small mb-0">Trusted by Fortune 500 companies for delivering top-tier results.</p>
            </div>
          </div>

          <div class="d-flex align-items-start mb-3">
            <div class="me-3">
              <span class="badge bg-primary rounded-circle p-3"><i class="bi bi-gear-wide-connected"></i></span>
            </div>
            <div>
              <h6 class="fw-semibold mb-1">Flexible Architecture</h6>
              <p class="text-muted small mb-0">Solutions built to scale as your business grows.</p>
            </div>
          </div>

          <div class="d-flex align-items-start">
            <div class="me-3">
              <span class="badge bg-dark rounded-circle p-3"><i class="bi bi-headset"></i></span>
            </div>
            <div>
              <h6 class="fw-semibold mb-1">Dedicated Support</h6>
              <p class="text-muted small mb-0">24/7 expert assistance for seamless operations.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <?php $this->load->view('layout/footer'); ?>
  <?php $this->load->view('layout/common_scripts'); ?>

</body>

</html>
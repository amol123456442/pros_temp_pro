<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('layout/common_links'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Newsroom</title>
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-2 rounded-3">
                <li class="breadcrumb-item">
                    <a href="#" class="text-primary text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#" class="text-primary text-decoration-none">Library</a>
                </li>
                <li class="breadcrumb-item active text-secondary fw-medium" aria-current="page">Data</li>
            </ol>
        </nav>

        <div class="row d-flex align-items-center justify-content-center h-100 py-5">
            <div class="col-lg-12 text-center animate__animated animate__fadeIn">
                <h1 class="display-4 fw-bold mb-4 text-dark">
                    Welcome to --- Newsroom
                </h1>
                <p class="fs-4 text-muted mb-4">
                    Welcome to Yext's Newsroom, your one-stop source for industry updates, media coverage, and insights
                    into the changing digital landscape.
                </p>
                <a href="#" class="btn btn-dark mt-3 px-4 py-2 rounded-5">
                    <span class="card_font">Explore Newsroom</span>
                </a>
            </div>
        </div>
    </div>


    <!-- CLIENT SECTION -->
    <div class="container-fluid py-4" style="background-color:#FFFFFF;">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0" style="background-color:#FFFFFF;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_1.png" alt="Company News" class="img-fluid">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Company News</p>
                            <div class="mt-auto">
                                <a href="#"
                                    class="btn btn-outline-dark btn-sm rounded-pill px-4 d-inline-flex align-items-center justify-content-center gap-2">
                                    Learn More <i class="bi bi-arrow-right-circle-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0" style="background-color:#FFFFFF;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_2.png" alt="Company News" class="img-fluid">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Media Covorage</p>
                            <div class="mt-auto">
                                <a href="#"
                                    class="btn btn-outline-dark btn-sm rounded-pill px-4 d-inline-flex align-items-center justify-content-center gap-2">
                                    Learn More <i class="bi bi-arrow-right-circle-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0" style="background-color:#FFFFFF;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_1.png" alt="Company News" class="img-fluid">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Customer Stories</p>
                            <div class="mt-auto">
                                <a href="#"
                                    class="btn btn-outline-dark btn-sm rounded-pill px-4 d-inline-flex align-items-center justify-content-center gap-2">
                                    Learn More <i class="bi bi-arrow-right-circle-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0" style="background-color:#FFFFFF;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_2.png" alt="Company News" class="img-fluid">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Company News</p>
                            <div class="mt-auto">
                                <a href="#"
                                    class="btn btn-outline-dark btn-sm rounded-pill px-4 d-inline-flex align-items-center justify-content-center gap-2">
                                    Learn More <i class="bi bi-arrow-right-circle-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card section -->
   <div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Company News</h2>
    </div>

    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-lg-8">
            <div class="card mb-4 border-0 rounded-0 transition-all" 
                 style="transition: all 0.3s ease;" 
                 onmouseover="this.style.boxShadow='0 0.5rem 1rem rgba(0, 0, 0, 0.15)'" 
                 onmouseout="this.style.boxShadow='none'">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="https://techintelpro.com/uploads/Riskonnect.png" alt=""
                            class="img-fluid rounded-start news_img" style="height: 190px; object-fit: cover;">
                    </div>
                    <div class="col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="fs-4 card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Hic, repudiandae!</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic,
                                repudiandae! Lorem, ipsum.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 mt-auto">
                            <small class="text-muted">25 Jun 2025</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-8">
            <div class="card mb-4 border-0 rounded-0 transition-all" 
                 style="transition: all 0.3s ease;" 
                 onmouseover="this.style.boxShadow='0 0.5rem 1rem rgba(0, 0, 0, 0.15)'" 
                 onmouseout="this.style.boxShadow='none'">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="https://techintelpro.com/uploads/Riskonnect.png" alt=""
                            class="img-fluid rounded-start news_img" style="height: 190px; object-fit: cover;">
                    </div>
                    <div class="col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="fs-4 card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Hic, repudiandae!</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic,
                                repudiandae! Lorem, ipsum.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 mt-auto">
                            <small class="text-muted">25 Jun 2025</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-8">
            <div class="card mb-4 border-0 rounded-0 transition-all" 
                 style="transition: all 0.3s ease;" 
                 onmouseover="this.style.boxShadow='0 0.5rem 1rem rgba(0, 0, 0, 0.15)'" 
                 onmouseout="this.style.boxShadow='none'">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="https://techintelpro.com/uploads/Riskonnect.png" alt=""
                            class="img-fluid rounded-start news_img" style="height: 190px; object-fit: cover;">
                    </div>
                    <div class="col-md-9 d-flex flex-column">
                        <div class="card-body">
                            <h5 class="fs-4 card-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Hic, repudiandae!</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic,
                                repudiandae! Lorem, ipsum.</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 mt-auto">
                            <small class="text-muted">25 Jun 2025</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="py-5">
        <div class="container pb-5">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold text-dark">Media Coverage</h2>
              
            </div>

            <div class="row g-4">
                <!-- Insight 1 -->
                <div class="col-md-6 col-lg-3 ">
                    <div class="border rounded-0 h-100 overflow-hidden bg-light ">
                        <img src="https://dummyimage.com/600x400/000/fff"
                            class="img-fluid w-100" alt="ABM Strategy">
                        <div class="p-3">
                            <span class="badge bg-primary-subtle text-primary mb-2">ABM Guide</span>
                            <h6 class="fw-bold mb-2">5 Proven Tactics to Engage Key Decision-Makers</h6>
                            <p class="text-muted small mb-3">June 30, 2025</p>
                            <a href="#" class="text-decoration-none fw-medium text-dark">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Insight 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="border rounded-0 h-100 overflow-hidden bg-light">
                        <img src="https://dummyimage.com/600x400/000/fff"
                            class="img-fluid w-100" alt="Content Strategy">
                        <div class="p-3">
                            <span class="badge bg-success-subtle text-success mb-2">Case Study</span>
                            <h6 class="fw-bold mb-2">How a B2B SaaS Company Scaled with Personalized Campaigns</h6>
                            <p class="text-muted small mb-3">June 28, 2025</p>
                            <a href="#" class="text-decoration-none fw-medium text-dark">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Insight 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="border rounded-0 h-100 overflow-hidden bg-light">
                        <img src="https://dummyimage.com/600x400/000/fff"
                            class="img-fluid w-100" alt="SEO for ABM">
                        <div class="p-3">
                            <span class="badge bg-warning-subtle text-warning mb-2">Research</span>
                            <h6 class="fw-bold mb-2">Targeted SEO Tactics That Attract Enterprise Buyers</h6>
                            <p class="text-muted small mb-3">June 26, 2025</p>
                            <a href="#" class="text-decoration-none fw-medium text-dark">Read More →</a>
                        </div>
                    </div>
                </div>

                <!-- Insight 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="border rounded-0 h-100 overflow-hidden bg-light">
                        <img src="https://dummyimage.com/600x400/000/fff"
                            class="img-fluid w-100" alt="ABM Relationships">
                        <div class="p-3">
                            <span class="badge bg-danger-subtle text-danger mb-2">Opinion</span>
                            <h6 class="fw-bold mb-2">Building Lasting B2B Relationships Through Data</h6>
                            <p class="text-muted small mb-3">June 24, 2025</p>
                            <a href="#" class="text-decoration-none fw-medium text-dark">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid text-dark bg-info">
            <div class="row align-items-center py-5 px-3">
                <!-- Left Image -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="../assets/images/svg_img.png" alt="Illustration" width="200px" height="auto"
                        class="bounce-img" style="margin-top:-120px;">
                </div>

                <!-- Middle Text -->
                <div class="col-md-5 text-center text-md-start">
                    <p class="display-5 mb-0">We are just a click away</p>
                </div>

                <!-- Right Button -->
                <div class="col-md-3 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="btn btn-dark rounded-5 text-light fw-semibold px-4 py-2">Schedule A Meeting</a>
                </div>
            </div>
        </div>

    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/common_scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
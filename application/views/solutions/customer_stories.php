<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('layout/common_links'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Customer Stories</title>
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <!-- Breadcrumb Section -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb  p-3 rounded-3">
                <li class="breadcrumb-item">
                    <a href="#" class="text-primary text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#" class="text-primary text-decoration-none">Library</a>
                </li>
                <li class="breadcrumb-item active text-secondary" aria-current="page">Data</li>
            </ol>
        </nav>

        <!-- Hero Section -->
        <div class="">
            <div class="container text-center">
                <h1 class="display-4 fw-bold text-dark">Customer Stories</h1>
            </div>
        </div>

        <!-- Main Content Section -->
        <section class="container my-5">
            <div class="row">
                <!-- Left Column (Main Content) -->
                <div class="col-md-8">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://img.freepik.com/free-photo/corporate-management-strategy-solution-branding-concept_53876-167088.jpg" width="auto" height="460px" class="d-block w-100 rounded-3 shadow-sm" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.freepik.com/premium-photo/digital-design-businessman-show-increase-market-graphic_35761-546.jpg" width="auto" height="460px" class="d-block w-100 rounded-3 shadow-sm" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.freepik.com/premium-photo/digital-design-businessman-show-growth-graph-earning-with-digital-marketing-strategy_35761-549.jpg" class="d-block w-100 rounded-3 shadow-sm" width="auto" height="460px" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Right Column (Quick Tips) -->
                <div class="col-md-4">

                    <div id="tip1" class="list-group">
                        <!-- Tip 1 -->
                        <div class="list-group-item d-flex justify-content-start align-items-center mb-4 rounded-3 shadow-sm">
                            <img src="https://images.samsung.com/is/image/samsung/assets/global/about-us/brand/logo/300_186_3.png?$568_N_PNG$" class="img-fluid me-3 rounded" width="100" alt="">
                            <div>
                                <h6 class="mb-1 text-dark" id="tip1-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus modi voluptates quas beatae dolorem voluptate laborum voluptatibus ex consequatur! Quia.</h6>
                                <p class="mb-0 py-2 text-muted" id="tip1-desc">Within just a few months, Samsung experienced a significant lift in NPS and CSAT by launching a Prospect-powered Help Site. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <button class="btn btn-outline-dark w-100 mt-3 rounded-pill shadow">Read Customer Stories</button>
                            </div>
                        </div>
                        <!-- Tip 2 -->
                        <div class="list-group-item d-flex justify-content-start align-items-center mb-4 rounded-3 shadow-sm">
                            <img src="https://images.samsung.com/is/image/samsung/assets/global/about-us/brand/logo/300_186_3.png?$568_N_PNG$" class="img-fluid me-3 rounded" width="100" alt="">
                            <div>
                                <h6 class="mb-1 text-dark" id="tip2-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus modi voluptates quas beatae dolorem voluptate laborum voluptatibus ex consequatur! Quia.</h6>
                                <p class="mb-0 py-2 text-muted" id="tip2-desc">Within just a few months, Samsung experienced a significant lift in NPS and CSAT by launching a Prospect-powered Help Site.</p>
                                <button class="btn btn-outline-dark w-100 mt-3 rounded-pill shadow">Read Customer Stories</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid bg-light py-2">
    <div class="container">
            <div class=" mt-5 text-center bg-light">
            <h2 class="display-6 fw-bold text-dark mb-4">See how our customers are delivering better <br>results with Prospect</h2>

      
        </div>
    </div>
        <div class="container mt-5 ">
            <div class="row">
                <!-- Side Filters Section -->
                <div class="col-md-3">
                    <div class="card p-2 rounded-0">
                        <h5 class="fw-bold text-dark mb-4">Filters</h5>
                        <hr>

                        <!-- Accordion for Filters -->
                        <div class="accordion" id="filtersAccordion">

                            <!-- Solutions Name Section -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingSolutionsName">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#solutions-name" aria-expanded="false" aria-controls="solutions-name">
                                        <span class="text-dark">Customer Story Type</span>
                                    </button>
                                </h2>
                                <div id="solutions-name" class="accordion-collapse collapse" aria-labelledby="headingSolutionsName" data-bs-parent="#filtersAccordion">
                                    <div class="accordion-body">
                                        <input type="text" class="form-control mb-3 rounded-pill" placeholder="Search">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="solution1">
                                            <label class="form-check-label" for="solution1">Agent Desktop Search</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="solution2">
                                            <label class="form-check-label" for="solution2">Analytics</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="solution3">
                                            <label class="form-check-label" for="solution3">Chat</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Teams Section -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingTeams">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#teams" aria-expanded="false" aria-controls="teams">
                                        <span class="text-dark">Products Name</span>
                                    </button>
                                </h2>
                                <div id="teams" class="accordion-collapse collapse" aria-labelledby="headingTeams" data-bs-parent="#filtersAccordion">
                                    <div class="accordion-body">
                                        <input type="text" class="form-control mb-3 rounded-pill" placeholder="Search">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="team1">
                                            <label class="form-check-label" for="team1">Sales</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="team2">
                                            <label class="form-check-label" for="team2">Marketing</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Industry Name Section -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingIndustryName">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#industry-name" aria-expanded="false" aria-controls="industry-name">
                                        <span class="text-dark">Business Chalenges</span>
                                    </button>
                                </h2>
                                <div id="industry-name" class="accordion-collapse collapse" aria-labelledby="headingIndustryName" data-bs-parent="#filtersAccordion">
                                    <div class="accordion-body">
                                        <input type="text" class="form-control mb-3 rounded-pill" placeholder="Search">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="industry1">
                                            <label class="form-check-label" for="industry1">Healthcare</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="industry2">
                                            <label class="form-check-label" for="industry2">Finance</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Category Section -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header " id="headingBlogCategory">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#blog-category" aria-expanded="false" aria-controls="blog-category">
                                        <span class="text-dark">Industry Name</span>
                                    </button>
                                </h2>
                                <div id="blog-category" class="accordion-collapse collapse" aria-labelledby="headingBlogCategory" data-bs-parent="#filtersAccordion">
                                    <div class="accordion-body">
                                        <input type="text" class="form-control mb-3 rounded-pill" placeholder="Search">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="category1">
                                            <label class="form-check-label" for="category1">Technology</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="category2">
                                            <label class="form-check-label" for="category2">Business</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    

                        </div>

                        <!-- Reset Button -->
                        <button class="btn btn-outline-dark w-100 mt-3 rounded-pill">Reset</button>
                    </div>
                </div>

                <!-- Blog Posts Section -->
                <div class="col-md-9">
                    <div class="row">
                        <!-- Blog Post 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                   <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                   <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Blog Post 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Blog Post 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Post 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 rounded-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh0aUTBQYMO7MnsujFTQ5PcWs-qhfPcF6OwbhEOykLGtU7DpHkgqEXcgaVNRC7GsUTqpA&usqp=CAU" class="card-img-top rounded-0" alt="Card image">
                                <div class="card-body">
                                    <h5 class="card-title">Ask Prospect: Marketer's Top Google AI Questions, Answered</h5>
                                    <p class="card-text">Google’s AI features — Gemini, AI Overviews, AI Mode, and AI-organized results — are reshaping search. This Ask Prospect...</p>
                                    <p class="text-muted">Jul 3, 2025 | 7 min</p>
                                    <a href="#" class="btn fs-5ś">Learn More <i class="bi bi-arrow-right-circle-fill fs-6 mt-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center py-2">
                        <button class="btn btn-dark rounded-pill">
                            View More <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <div class="container-fluid py-5">
        <div class="text-center">
            <h2 class="display-5 fw-bold text-dark mb-4">Explore More Resources</h2>
        </div>
        <div class="container">
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4 ">
                    <div class="card h-100 border-0 border-end" style="background-color:#EEEFF0;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_1.png" alt="Company News" class="img-fluid rounded-5">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Events & Webinar</p>
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
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 border-end" style="background-color:#EEEFF0;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_2.png" alt="Company News" class="img-fluid rounded-5">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Blogs</p>
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
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0" style="background-color:#EEEFF0;">
                        <div class="card-body text-center d-flex flex-column">
                            <div class="mb-3">
                                <img src="../assets/images/card_1.png" alt="Company News" class="img-fluid rounded-5">
                            </div>
                            <p class="card-text display-6 fw-bold mb-4">Talks</p>
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

    <section>
        <div class="container-fluid text-dark bg-light mt-5">
            <div class="row align-items-center py-3 px-3">
                <!-- Left Image -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="../assets/images/svg_img.png" alt="Illustration" width="200px" height="auto"
                        class="bounce-img" style="margin-top:-130px;">
                </div>

                <!-- Middle Text -->
                <div class="col-md-5 text-center text-md-start">
                    <p class="fs-4 fw-bold mb-0">Turn your brand’s data into an AI strategy with a foundation that builds trust, visibility, and credibility. Yext helps your brand be found and chosen wherever customers are looking.</p>
                </div>

                <!-- Right Button -->
                <div class="col-md-3 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="btn btn-dark rounded-5 text-light fw-semibold px-4 py-2">GET A DEMO</a>

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
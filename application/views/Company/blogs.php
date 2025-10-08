<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('layout/common_links'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Blog</title>
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <!-- Breadcrumb Section -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-3 rounded-3">
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
        <div class="py-5">
            <div class="container text-center">
                <h1 class="display-4 fw-bold text-dark">Tomorrow's Trends Today</h1>
                <p class="lead text-muted">Stay ahead with insights and the latest news for marketers.</p>
            </div>
        </div>

        <!-- Main Content Section -->
        <section class="container my-5">
            <div class="row">
                <!-- Left Column (Main Content) -->
                <div class="col-md-8">

                    <img src="https://dummyimage.com/800x400/000/fff" class="img-fluid rounded mb-4 mt-5 shadow-lg" alt="Digital Marketing Trends">
                    <h2 class="text-dark mb-3"><u>Latest Search Trends Lorem ipsum dolor sit amet consectetur.</u></h2>
                    <p class="text-muted">Stay on top of the latest shifts in search engine algorithms and consumer behavior. Discover strategies to enhance your digital presence and grow your brand.</p>
                </div>

                <!-- Right Column (Quick Tips) -->
                <div class="col-md-4">
                    <h3 class="text-secondary">Quick Tips</h3>
                    <div class="list-group">
                        <!-- Tip 1 -->
                        <div class="list-group-item d-flex justify-content-start align-items-center mb-4">
                            <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid me-3 rounded" width="100" alt="">
                            <div>
                                <h5 class="mb-1">Tip 1: Optimize Your Website for Search</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, ex. Harum accusamus molestiae voluptatibus!</p>
                            </div>
                        </div>
                        <!-- Tip 2 -->
                        <div class="list-group-item d-flex justify-content-start align-items-center mb-4">
                            <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid me-3 rounded" width="100" alt="">
                            <div>
                                <h5 class="mb-1">Tip 2: Use AI to Enhance Marketing Strategy</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, ex. Harum accusamus molestiae voluptatibus!</p>
                            </div>
                        </div>
                        <!-- Tip 3 -->
                        <div class="list-group-item d-flex justify-content-start align-items-center">
                            <img src="https://dummyimage.com/600x400/000/fff" class="img-fluid me-3 rounded" width="100" alt="">
                            <div>
                                <h5 class="mb-1">Tip 3: Leverage Social Media for Engagement</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, ex. Harum accusamus molestiae voluptatibus!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-5 text-center">
        <h2 class="display-4 fw-bold text-dark mb-4">Filter Content by Your Industry</h2>
        <div class="dropdown">
            <button class="btn btn-outline-dark py-3 px-5 rounded-pill dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="display-6 fw-bold">All Posts</span>
            </button>
            <div>
                <ul class="dropdown-menu border-0 rounded-0" aria-labelledby="dropdownMenuButton" style="width: 271px;
    position: absolute;
    inset: 0px auto auto 0px;
    transform: translate(333px, 84px);">
                    <li><a class="dropdown-item fs-4" href="#">Marketing</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Customer Service</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Ecommerce</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Helthcare</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Financial</a></li>
                    <li><a class="dropdown-item fs-4" href="#">Service</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <h2 class="display-5 fw-bold text-dark mb-4">Industry Insights <i class="bi bi-arrow-right-circle-fill ms-2 fs-2"></i></h2>
        <p class="text-muted mb-4">Insights and news tailored to each business vertical.</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://img.freepik.com/free-photo/corporate-management-strategy-solution-branding-concept_53876-167088.jpg" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://media.istockphoto.com/id/974512548/photo/digital-marketing-new-startup-project-millennials-business-team-hands-at-work-with-financial.jpg?s=612x612&w=0&k=20&c=wQtH07ZMU6UwDKQd_Y6apNl41I6nYKSgQ-IyW8tAdF4=" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mt-5">
        <h2 class="display-5 fw-bold text-dark mb-4">Publisher Updates <i class="bi bi-arrow-right-circle-fill ms-2 fs-2"></i></h2>
        <p class="text-muted mb-4">How to respond when publishers make important changes.</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://patelson.com/wp-content/uploads/2023/07/Why-Digital-Marketing-is-Critical-to-Your-Organization-in-2017.jpg" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://media.istockphoto.com/id/974512548/photo/digital-marketing-new-startup-project-millennials-business-team-hands-at-work-with-financial.jpg?s=612x612&w=0&k=20&c=wQtH07ZMU6UwDKQd_Y6apNl41I6nYKSgQ-IyW8tAdF4=" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mt-5">
        <h2 class="display-5 fw-bold text-dark mb-4">Data Insights <i class="bi bi-arrow-right-circle-fill ms-2 fs-2"></i></h2>
        <p class="text-muted mb-4">The latest stats and research from our Prospect data team.</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://www.webhopers.com/wp-content/uploads/2022/02/Digital-marketing-company-in-Derabassi.jpeg" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://media.istockphoto.com/id/974512548/photo/digital-marketing-new-startup-project-millennials-business-team-hands-at-work-with-financial.jpg?s=612x612&w=0&k=20&c=wQtH07ZMU6UwDKQd_Y6apNl41I6nYKSgQ-IyW8tAdF4=" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mt-5">
        <h2 class="display-5 fw-bold text-dark mb-4">Product and Engineering <i class="bi bi-arrow-right-circle-fill ms-2 fs-2"></i></h2>
        <p class="text-muted mb-4">Insights and tips for building with Prospect — your way.</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://www.ducatindia.com/_next/image?url=https%3A%2F%2Fadmin.ducatindia.com%2Fblog%2F17188910296125467432_1726%20(1).jpg&w=1920&q=75    " class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://media.istockphoto.com/id/974512548/photo/digital-marketing-new-startup-project-millennials-business-team-hands-at-work-with-financial.jpg?s=612x612&w=0&k=20&c=wQtH07ZMU6UwDKQd_Y6apNl41I6nYKSgQ-IyW8tAdF4=" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container mt-5">
        <h2 class="display-5 fw-bold text-dark mb-4">Prospect Life<i class="bi bi-arrow-right-circle-fill ms-2 fs-2"></i></h2>
        <p class="text-muted mb-4">All the cultural and workplace happenings here at Prospect.</p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://www.ducatindia.com/_next/image?url=https%3A%2F%2Fadmin.ducatindia.com%2Fblog%2F17188910296125467432_1726%20(1).jpg&w=1920&q=75    " class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-0" style="background-color: #EEEFF0;">
                    <img src="https://media.istockphoto.com/id/974512548/photo/digital-marketing-new-startup-project-millennials-business-team-hands-at-work-with-financial.jpg?s=612x612&w=0&k=20&c=wQtH07ZMU6UwDKQd_Y6apNl41I6nYKSgQ-IyW8tAdF4=" class="card-img-top rounded-0" height="200px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title fs-3 fw-bold">Ask Prospect: Marketer's Top Google AI Questions, Answered</p>

                        <p class="text-muted"><i class="bi bi-alarm"></i> 7 min</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, aperiam!</p>
                        <p class="text-muted"> <i class="bi bi-alarm"></i> 5 min</p>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <div class="container-fluid bg-light py-2">

        <div class=" mt-5 text-center bg-light">
            <h2 class="display-4 fw-bold text-dark mb-4">Explore our blog for the latest stories.</h2>

            <div class="input-group my-5" style="max-width: 900px; margin: 0 auto;">
                <input class="form-control border-end-0 rounded-pill py-4" type="search" placeholder="Search..."
                    aria-label="Search" style="height: 40px; min-width: 400px;">
                <button class="btn btn-link text-muted position-absolute end-0 top-50 translate-middle-y me-2"
                    type="button" style="border: none; background: none; z-index: 10;">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
        <div class="container mt-5 ">
            <div class="row">
                <!-- Side Filters Section -->
                <div class="col-md-3">
                    <div class="card p-2 rounded-0">
                        <h5 class="fw-bold text-primary mb-4">Filters</h5>
                        <hr>

                        <!-- Accordion for Filters -->
                        <div class="accordion" id="filtersAccordion">

                            <!-- Solutions Name Section -->
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="headingSolutionsName">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#solutions-name" aria-expanded="false" aria-controls="solutions-name">
                                        <span class="text-dark">Solutions Name</span>
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
                                        <span class="text-dark">Teams</span>
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
                                        <span class="text-dark">Industry Name</span>
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
                                        <span class="text-dark">Blog Category Name</span>
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
            <h2 class="display-4 fw-bold text-dark mb-4">Explore More Content</h2>
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
                            <p class="card-text display-6 fw-bold mb-4">Publications</p>
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
            <div class="row align-items-center py-5 px-3">
                <!-- Left Image -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="../assets/images/svg_img.png" alt="Illustration" width="200px" height="auto"
                        class="bounce-img" style="margin-top:-120px;">
                </div>

                <!-- Middle Text -->
                <div class="col-md-5 text-center text-md-start">
                    <p class="display-6 fw-bold mb-0">Be the first to know about tomorrow's trends, today</p>
                </div>

                <!-- Right Button -->
                <div class="col-md-3 text-center text-md-end mt-3 mt-md-0">
                    <a href="#" class="btn btn-dark rounded-5 text-light fw-semibold px-4 py-2">Subscribe</a>

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
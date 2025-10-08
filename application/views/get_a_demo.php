<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('layout/common_links'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container py-5">
        <div class="row g-5 align-items-start">

            <!-- Left Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold">Schedule a demo!</h2>
                <p>
                    With one central platform, brands can turn their digital presence into a differentiator by delivering consistent, accurate, and engaging experiences to customers anywhere.
                </p>

                <h6 class="fw-semibold">What can you expect?</h6>
                <ul>
                    <li>A short call to align on your brand’s goals and pain points</li>
                    <li>Personalized consultation to identify gaps in your performance</li>
                    <li>Live demo of our platform to understand how it can integrate into your marketing, data, and AI strategies</li>
                </ul>

                <p>Ready to get started and turn your digital presence into a differentiator?</p>
            </div>

            <!-- Right Form -->
            <div class="col-lg-5">
                <div class="bg-white shadow rounded p-4">
                    <h5 class="fw-bold mb-4">Tell us About Yourself</h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Business Phone</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">How many locations do you have?</label>
                                <select class="form-select" required>
                                    <option selected disabled>Select...</option>
                                    <option>1-10</option>
                                    <option>11-50</option>
                                    <option>51+</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Job Role</label>
                                <select class="form-select" required>
                                    <option selected disabled>Select...</option>
                                    <option>Marketing</option>
                                    <option>IT</option>
                                    <option>Sales</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Country</label>
                                <select class="form-select" required>
                                    <option>India</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Are you looking to use this for yourself or your clients?</label>
                                <select class="form-select" required>
                                    <option selected disabled>Select...</option>
                                    <option>For myself</option>
                                    <option>For clients</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="optIn">
                                    <label class="form-check-label" for="optIn">
                                        I would like to receive tailored marketing communications.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark px-4 rounded-pill fw-semibold">Schedule My Demo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <img src="https://a.mktgcdn.com/p/c8Q3de6p4L_EqAVABg1cr2L0K05Huxni10oZDTWOdd4/1920x1080.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/common_scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('layout/common_links'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Do not sell my data</title>
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Do Not Sell My Personal Information</h2>
        </div>

        <div class="col-md-8 mx-auto">
            <p>
                Under the California Consumer Privacy Act (CCPA), California residents have the right to opt-out of the "sale" of their personal information. We are committed to respecting your privacy and providing you with clear options.
            </p>

            <p>
                While we do not sell personal information for monetary compensation, we may share data with third parties in ways that could be considered a "sale" under the CCPA. This includes information related to your activity on our website, which may be used by our partners to show you relevant ads on other websites.
            </p>

            <p>
                If you wish to opt out of this type of data sharing, you can do so by clicking the button below. Please note that opting out may affect the personalized experience you receive on our site and in advertisements.
            </p>

            <div class="text-center my-4">
                <a href="#" class="btn btn-danger btn-lg">Do Not Sell My Personal Information</a>
            </div>

            <p>
                You may also contact us by email at <a href="mailto:privacy@example.com">privacy@example.com</a> or write to us at:
            </p>

            <address>
                Privacy Office<br>
                Your Company Name<br>
                123 Privacy Lane<br>
                City, State ZIP<br>
                United States
            </address>

            <p>
                For more information about how we collect, use, and share personal data, please review our <a href="#">Privacy Policy</a>.
            </p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/common_scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
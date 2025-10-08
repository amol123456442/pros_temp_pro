<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('layout/common_links'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cookie Policy</title>
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Cookie Policy</h2>
        </div>

        <div class="col-md-8 mx-auto">
            <p>
                <strong>What Are Cookies and How Do We Use Them?</strong><br><br>
                Cookies are files that are stored on your computer's hard drive and are accessed by our server when you visit our website. We use cookies to personalize content, to offer social media functions and to analyze use of our website. Some cookies are necessary for the functioning of our website. These necessary cookies are always active and cannot be deactivated. For all other cookies we require your consent.
            </p>

            <p>
                <strong>On What Legal Basis Do We Use Cookies and Analytics?</strong><br><br>
                We use technically necessary cookies for the fulfilment of the existing contract of use with you (legal basis for processing: Art. 6 no. 1 lit. b) of the GDPR) because they serve the purpose of the technical implementation of the website’s use.<br>
                We use other cookies and analytics – with your consent – to adapt our website’s offerings according to your interests in order to make our website as user-friendly, safe and attractive as possible and to promote the sale of our products and services. This use will take place only with your prior consent (legal basis for processing: Art. 6 no. 1 lit. a) of the GDPR).
            </p>

            <p>
                <strong>What does Analytics mean and How do We Use It?</strong>
            </p>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php $this->load->view('layout/footer'); ?>
    <?php $this->load->view('layout/common_scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
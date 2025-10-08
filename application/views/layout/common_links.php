<!-- Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->


<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
  rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />


<!-- Home page css -->
<style>
  p {
    font-family: 'Poppins', sans-serif;

  }
  label {
    font-family: 'Poppins', sans-serif;

  }
    a {
    font-family: 'Poppins', sans-serif;

  }
  ul {
    font-family: 'Poppins', sans-serif;

  }
  h1 {
    font-family: 'Poppins', sans-serif;

  }

  h2 {
    font-family: 'Poppins', sans-serif;

  }

  body {
    font-family: 'Poppins', sans-serif;
    background-color: #EEEFF0 !important;
  }

  .hero-heading {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
  }


  .wave-section h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
  }

  .hero-section {
    background: radial-gradient(circle at 20% 50%, rgb(15, 68, 82), #0f0f0f 70%);
    color: white;
    padding: 100px 0 160px 0;
    position: relative;
    overflow: hidden;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
  }

  .ai-section {
    background: linear-gradient(to right, #f5fafd, #f1fdfd);
    border-radius: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
  }

  #typingBox {
    font-size: 16px;
    margin-top: 10px;
  }

  /* Wave Section */
  .wave-section {
    position: relative;
    background-color: #161616;
    color: white;
    text-align: center;
    padding: 100px 15px 80px;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    min-height: 100vh;
    /* Changed to min-height for flexibility */
  }

  /* Top wave (concave) */
  .wave-top {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    line-height: 0;
  }

  /* Bottom wave (convex) */
  .wave-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    line-height: 0;
  }

  .wave-section .content {
    position: relative;
    z-index: 1;
  }

  .wave-section h2 {
    font-size: 1.5rem;
    /* Reduced for mobile */
    font-weight: 400;
    line-height: 1.4;
  }

  .wave-section .highlight {
    color: #00b2e3;
    font-weight: bold;
  }

  .wave-section img {
    max-width: 100%;
    /* Ensure images are responsive */
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
  }

  /* Tab Container */
  .tabs-container {
    display: flex;
    flex-direction: column;
    /* Stack tabs vertically on mobile */
    max-width: 100%;
    margin: 0 auto;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .tabs {
    width: 100%;
    /* Full width on mobile */
    background: #2e2e2e;
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    /* Horizontal tabs on mobile */
    flex-wrap: wrap;
    /* Allow wrapping if needed */
  }

  .tabs li {
    margin: 0;
    flex: 1;
    /* Equal width for tabs */
  }

  .tabs a {
    display: block;
    color: #ccc;
    padding: 10px;
    text-decoration: none;
    transition: background 0.3s;
    text-align: center;
    font-size: 0.9rem;
    /* Smaller font for mobile */
  }

  .tabs a:hover,
  .tabs a.active {
    background: #00b2e3;
    color: white;
  }

  .tab-content-wrapper {
    flex: 1;
    padding: 20px;
    /* Reduced padding for mobile */
  }

  .tab-content {
    display: none;
  }

  .tab-content.active {
    display: block;
  }

  /* Card Section */
  .card {
    background: #f8f9fa;
    /* Light background for cards */
  }

  .custom-highlight {
    background: #e9ecef;
    /* Subtle highlight for card stats */
  }

  /* Media Queries for Responsiveness */
  @media (min-width: 768px) {
    .wave-section {
      padding: 120px 20px 100px;
    }

    .wave-section h2 {
      font-size: 1.8rem;
      /* Larger font for tablets and up */
    }

    .tabs-container {
      flex-direction: row;
      /* Horizontal layout for larger screens */
      max-width: 900px;
    }

    .tabs {
      width: 200px;
      flex-direction: column;
      /* Vertical tabs for larger screens */
      flex-wrap: nowrap;
    }

    .tabs a {
      padding: 15px;
      font-size: 1rem;
    }

    .tab-content-wrapper {
      padding: 40px;
    }
  }

  @media (min-width: 992px) {
    .wave-section h2 {
      font-size: 2rem;
      /* Larger font for desktops */
    }

    .wave-section img {
      max-width: 650px;
    }
  }

  .font_size_p {
    font-size: 1.8rem;
  }

  .custom-bg {
    background-color: rgba(240, 242, 245, 0.94);
    /* Light gray background similar to the image */
  }

  .custom-highlight {
    background: linear-gradient(90deg, rgba(233, 236, 239, 0.56) 0%, rgba(18, 107, 180, 0.64) 100%);
    color: black;
  }

  /* today */
  /* General Styles */


  .btn-gradient {
    background: linear-gradient(90deg, #007bff, #00d4ff);
    color: white;
    border: none;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
  }

  .btn-outline-gradient {
    border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box, linear-gradient(90deg, #007bff, #00d4ff) border-box;
    color: #007bff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .btn-outline-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
  }

  /* Modern Card Styles */
  .modern-card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .modern-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
  }

  .card-content {
    padding: 1.5rem;
  }

  .card-text-content {
    font-weight: 600;
    font-size: 1.25rem;
    line-height: 1.5;
    color: #111;
    font-family: 'Poppins', sans-serif;
    margin: 1rem 2rem;
  }

  /* Reveal Card Styles */
  .reveal-card {
    overflow: hidden;
    position: relative;
    height: 350px;
    border-radius: 12px;
    transition: all 0.5s ease;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
  }

  .reveal-card .reveal-image {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    opacity: 0;
    transform: scale(1.1);
    transition: all 0.6s ease;
    z-index: 1;
  }

  .reveal-card .card-body {
    position: relative;
    z-index: 2;
    background: transparent;
    padding: 1.5rem;
    transition: all 0.4s ease;
  }

  .reveal-card:hover .reveal-image {
    opacity: 1;
    transform: scale(1);
  }

  .reveal-card:hover .card-body {
    opacity: 0;
    transform: translateY(20px);
  }

  .reveal-card .card-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    color: #111;
  }

  .reveal-card .card-text {
    font-family: 'Poppins', sans-serif;
    color: #555;
  }

  /* Brand Footer */
  .brand-footer img {
    height: 40px;
    transition: transform 0.3s ease;
  }

  .brand-footer img:hover {
    transform: scale(1.1);
  }

  .bi-arrow-right-circle-fill {
    font-size: 2rem;
  }

  .card_font {
    font-family: 'Poppins', sans-serif;

  }

  .card_title {
    font-weight: 900;
    font-size: xxx-large;
  }

  .scroll-container {
    overflow: hidden;
    white-space: nowrap;
  }

  .scroll-track {
    display: inline-block;
    animation: scroll-left 30s linear infinite;
  }

  .scroll-track img {
    height: 60px;
    margin-right: 2rem;
    /* increase spacing between logos */
    vertical-align: middle;
  }

  @keyframes scroll-left {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }
</style>
<!-- content syndiaction -->
<style>
  .solution-card {
    transition: all 0.3s ease;
    border: none;
  }

  .solution-card:hover {
    /* box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15); */
    /* border: 1px solid #dee2e6; */
  }

  .card_bg {
    background: linear-gradient(135deg, rgba(0, 191, 255, 0.4), rgba(135, 206, 235, 0.2));
    backdrop-filter: blur(10px);
  }

  .card_bg:hover {
    background: white;
    border: 1px solid #dee2e6;
  }

  @keyframes bounce {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-15px);
    }
  }

  .bounce-img {
    animation: bounce 2s infinite;
  }
</style>

<!-- about us -->
<style>
  .timeline {
    position: relative;
    padding: 50px 0;
    background: #f9fafb;
  }

  .timeline::before {
    content: '';
    position: absolute;
    width: 2px;
    height: 100%;
    background-color: #ddd;
    left: 50%;
    top: 0;
    transform: translateX(-50%);
    z-index: 0;
  }

  .timeline-item {
    position: relative;
    padding: 30px 40px;
    margin-bottom: 60px;
    width: 45%;
    background: linear-gradient(135deg, rgba(248, 250, 252, 0.8), rgba(255, 255, 255, 0.7));
    border-radius: 20px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }

  .timeline-item.left {
    left: 5%;
  }

  .timeline-item.right {
    left: 50%;
  }

  .timeline-item .date {
    font-size: 22px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
  }

  .timeline-item .event {
    font-size: 16px;
    color: #555;
    line-height: 1.7;
    text-align: justify;
  }

  .timeline-item .icon {
    position: absolute;
    top: 15px;
    left: -20px;
    width: 45px;
    height: 45px;
    background-color: black;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .timeline-item.right .icon {
    right: -20px;
    left: auto;
  }

  .timeline-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px rgba(0, 0, 0, 0.2);
  }

  .timeline-item.left:hover,
  .timeline-item.right:hover {
    background-color: #e7f1ff;
  }

  .timeline-item .icon:hover {
    background-color: #34c0eb;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .timeline-item .icon i {
    font-size: 20px;
  }

  /* Colorful Icons */


  @media (max-width: 767px) {
    .timeline-item {
      width: 100%;
      left: 0;
      margin: 0 0 30px;
    }

    .timeline::before {
      left: 20px;
      transform: none;
    }
  }
</style>

<!-- blog page -->

<style>
  .custom-card-body {
    padding: 1.25rem;
  }

  .custom-header {
    font-size: 36px;
    font-weight: bold;
  }

  .custom-card-title {
    font-size: 18px;
    font-weight: bold;
  }

  .custom-card-subtitle {
    font-size: 14px;
    color: #6c757d;
  }

  .custom-card-img-top {
    max-height: 200px;
    object-fit: cover;
  }

  .custom-list-group-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .custom-badge {
    background-color: #007bff;
    color: white;
  }
</style>

<!-- Industry Specific -->
<style>
  .card-hover-effect {
    transition: all 0.3s ease;
  }

  .card-hover-effect:hover {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
  }

  .img-hover-scale {
    transition: transform 0.3s ease;
  }

  .img-hover-scale:hover {
    transform: scale(1.05);
  }
</style>
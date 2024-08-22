<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/styles.css">
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Slider -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide1.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Innovative Solutions</h5>
                    <p>Discover the latest in technology and innovation to transform your business.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slide2.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Expert Consulting</h5>
                    <p>Leverage our expert consultants to drive your business forward with tailored strategies.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/slide3.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Exceptional Support</h5>
                    <p>Experience top-notch customer support designed to resolve your issues quickly and efficiently.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Hero Section -->
    <section class="hero text-center my-5">
        <div class="container">
            <h1>Welcome to Your Company</h1>
            <p>We are dedicated to providing the best services to ensure your success.</p>
            <a href="contact.php" class="btn btn-primary">Get in Touch</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services text-center my-5">
        <div class="container">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/service1.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Service One</h5>
                            <p class="card-text">Our first service offers comprehensive solutions to meet your needs with efficiency and effectiveness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/service2.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Service Two</h5>
                            <p class="card-text">Our second service focuses on providing detailed analysis and strategies to enhance your business operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="images/service3.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Service Three</h5>
                            <p class="card-text">Our third service ensures you receive the best support and resources to achieve your goals effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials text-center my-5">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
					<img src="images/client1.png" class="img-fluid" alt="Client 1">
                        <p>"The solutions provided were exactly what we needed. The team was professional and highly efficient."</p>
                        <h5>Jane Doe</h5>
                        <p>CEO, Example Company</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
					<img src="images/client2.png" class="img-fluid" alt="Client 2">
                        <p>"Exceptional service and support. The expertise of the consultants made a significant impact on our project."</p>
                        <h5>John Smith</h5>
                        <p>Project Manager, Another Company</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
					<img src="images/client3.png" class="img-fluid" alt="Client 3">
                        <p>"Outstanding customer support! They were always available and ready to help with our concerns."</p>
                        <h5>Emily Johnson</h5>
                        <p>Founder, Startup Inc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>

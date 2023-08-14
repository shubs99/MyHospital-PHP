<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHospital - Home</title>
    <link rel="stylesheet" href="style.css">
    <!--  Bootstrap CSS link  -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">MyHospital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="usersDropdown">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doctors.php">Doctors</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="appointment.php">Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- First Section -->
<section class="py-5 first-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Welcome to MyHospital</h1>
                <p>We provide high-quality medical services to our patients. A patient first philosophy drives our decision making 
                    at our organization.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="py-5 text-center second-section">
    <div class="container">
        <h2 class="mb-4">Our Services</h2>
        <div class="row">
            <div class="col-md-6 mb-8">
                <div class="card service-card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="img/emergency.jpg" alt="Service 1 Image" class="card-img">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="card-title">Emergency</h4>
                                <p class="card-text">Any emergency ? We are just a call away</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card service-card ">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="img/scan.jpg" alt="Service 1 Image" class="card-img">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="card-title">Scans/X-Ray</h4>
                                <p class="card-text">Our centers are equipped with the latest machines for X-rays, CT-Scan, MRI's etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card service-card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="img/diagnostic.png" alt="Service 1 Image" class="card-img">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="card-title">Diagnostic</h4>
                                <p class="card-text">Our state of the art Diagnostic centers, now available for home services too. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card service-card">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <img src="img/ambulance.jpg" alt="Service 1 Image" class="card-img">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h4 class="card-title">Ambulance</h4>
                                <p class="card-text">We provide 24/7 Ambulance facilities upto a distance of 10km</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Third Section -->
<section class="py-5 third-section">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <form action="process_contact.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="query" class="form-label">Query</label>
                <textarea class="form-control" id="query" name="query" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>




 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

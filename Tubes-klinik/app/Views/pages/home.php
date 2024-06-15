<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Klinik Kesehatan XYZ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Klinik XYZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#staff">Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Klinik XYZ</h1>
        <p class="lead">Your Health, Our Priority</p>
        <a class="btn btn-primary btn-lg" href="#contact" role="button">Get in Touch</a>
    </div>

    <!-- Services Section -->
    <div id="services" class="container mt-5">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="service1.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Description of service 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="service2.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Description of service 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="service3.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Description of service 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Staff Section -->
    <div id="staff" class="container mt-5">
        <h2 class="text-center mb-4">Our Staff</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="staff1.jpg" class="card-img-top" alt="Staff 1">
                    <div class="card-body">
                        <h5 class="card-title">Staff 1</h5>
                        <p class="card-text">Position and brief bio of staff 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="staff2.jpg" class="card-img-top" alt="Staff 2">
                    <div class="card-body">
                        <h5 class="card-title">Staff 2</h5>
                        <p class="card-text">Position and brief bio of staff 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="staff3.jpg" class="card-img-top" alt="Staff 3">
                    <div class="card-body">
                        <h5 class="card-title">Staff 3</h5>
                        <p class="card-text">Position and brief bio of staff 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="container mt-5 mb-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Your name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Your email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputMessage">Message</label>
                <textarea class="form-control" id="inputMessage" rows="4" placeholder="Your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 bg-light">
        <p>&copy; 2023 Klinik XYZ. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
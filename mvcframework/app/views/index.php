<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="../../public/css/css.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">FLY.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URLROOT; ?>/reservation/reservation">Reservation</a>
                        </li>
                        <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/Users/logout" class="btn btn-dark">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Domestic-flights.jpg" alt="vol">
                </div>
                <div class="carousel-item">
                    <img src="img/International-flights.jpg" alt="form">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
        <div class="card-section">
            <div class="container">
                <div class="card-block bg-white mb30">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- section-title -->
                            <div class="all">
                                
                                <div class="section-title mb-0">
                                    <h2>All about Hike. We share our knowledge on blog</h2>
                                    <p>Our approach is very simple: we define your problem and give the best solution. </p>
                                </div>
                            </div>
                            <!-- /.section-title -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-plane fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">lorem </h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">lorem</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">lorem</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5" id="custom-cards">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row row-cols-3 align-items-stretch py-5">
                    <div class="col">
                        <div class="card">
                            <!-- Card image -->
                           
                            <!-- Card body -->
                            <div class="card-body">
                                <h5 class="h2 card-title mb-0">Get started with Argon</h5>
                                <small class="text-muted">by John Snow on Oct 29th at 10:23 AM</small>
                                <p class="card-text mt-4">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                                <a href="#!" class="btn btn-link px-0">View article</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <!-- Card image -->
                            
                            <!-- Card body -->
                            <div class="card-body">
                                <h5 class="h2 card-title mb-0">Get started with Argon</h5>
                                <small class="text-muted">by John Snow on Oct 29th at 10:23 AM</small>
                                <p class="card-text mt-4">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                                <a href="#!" class="btn btn-link px-0">View article</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <!-- Card image -->
                            
                            <!-- Card body -->
                            <div class="card-body">
                                <h5 class="h2 card-title mb-0">Get started with Argon</h5>
                                <small class="text-muted">by John Snow on Oct 29th at 10:23 AM</small>
                                <p class="card-text mt-4">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                                <a href="#!" class="btn btn-link px-0">View article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright ©FLY.</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">AYA NAIT-IAZ</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>
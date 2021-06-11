<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Reservation Page</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="../public/css/reservation.css" rel="stylesheet" />
  <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

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
  <div class="card-section">
    <div class="container">
    the reservations 
    </div>
  </div>
  
            <!-- Card image -->
            <!-- List group -->
            <h3>Reservation</h3>
            <!-- Card body -->
            <?php
    // echo $data['title'];
    // print_r($data['flights']);
    foreach($data['flights'] as  $flights):
      ?>
      <div class="row">

        <div class="card col-6 d-flex justify-content-center">
          <div class="card-body">
     
              <h3 class="card-title mb-3"> Fly :<?php
          print_r($flights->id_fly);
          ?></h3>
            <!-- <p class="card-text mb-4" -->
              
          <h6 class="card-text mb-4">
          <?php 
          echo ' Date de depart: ' . date('F j h:m' , strtotime($flights->dateDerpart))  
          ?>
          </h6>
          <h6 class="card-text mb-4">
          <?php 
          echo ' Date d\'arriver: ' . date('F j h:m' , strtotime($flights->dateArrivee))  
          ?>
          </h6>
          <h6 class="card-text mb-4">
          <?php 
          echo ' Lieu de depart: ' . $flights->lieuDepart
          ?>
          </h6>
          <h6 class="card-text mb-4">
          <?php 
          echo ' Lieu d\'arriver: ' . $flights->lieuArriver
          ?>
          </h6>
          <h6 class="card-text mb-4">
          <?php 
          echo ' Prix: ' . $flights->prix;
          ?>
          </h6>
          <a class="btn btn-primary" href="<?php echo URLROOT; ?>/reservation/create/<?php echo $flights->id_fly; ?>">reserver</a>
        </div>
        </div>
      </div>
    
      <?php 
        endforeach ;
      ?>
     

  
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-left">Copyright ©FLY.</div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-lg-4 text-lg-right">
          <a class="mr-3" href="#">Privacy Policy</a>
          <a href="#!">AYA NAIT-IAZ</a>
        </div>
      </div>
    </div>
  </footer>
</body>
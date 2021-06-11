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
  <link href="../public/css/suivires.css" rel="stylesheet" />
  <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

 
  <div class="card">
            <!-- Card image -->
            <!-- List group -->
            <h3>Reservation</h3>
            <!-- Card body -->
      <div class="card-body">
      <?php
    // echo $data['title'];
    foreach($data['resrv'] as  $resrv):
      // print_r($data['resrv']);
    ?>
    <div class="card">
  <div class="card-body">
              <h2 class="card-title mb-3"> ID du passenger :<?php
          print_r($resrv->id_pass);
        ?></h2>
           
              
      <h6 class="card-text  mb-4">
        <?php 
          echo ' ID Fly : ' . $resrv->id_res  
        ?>
      </h6>
      <h6 class="card-text  mb-4">
        <?php 
          echo ' Nom ' . $resrv->nom  
        ?>
      </h6>
      <h6 class="card-text mb-4">
        <?php
          echo 'Cin ' . $resrv->cin
        ?>
      </h6>
      <h6 class="card-text mb-4">
        <?php 
          echo ' Birthdate ' . $resrv->birthday
        ?>
    
      </h6>
  </div>
</div>
     
      
            <?php 
      endforeach ;
    ?>
    <a href="<?php echo URLROOT; ?>/dashboard/index" class="btn btn-primary">back to dashboard</a> 
  </div>


  
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
          <a class="mr-3" href="#!">Privacy Policy</a>
          <a href="#!">AYA NAIT-IAZ</a>
        </div>
      </div>
    </div>
  </footer>
</body>
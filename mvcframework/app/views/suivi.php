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
  <link href="../public/css/resrvationsuivi.css" rel="stylesheet" />
  <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

  <div class="card-section">
    <div class="container">
      <div class="card-block bg-white mb30">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  ml-auto mr-auto">
            <h4 class="card-title">Reservation</h4>
           
            <?php
            foreach($data['suivi'] as  $suivi):
            ?> 
            <div class="card">
              
              <h2 class="card-title mb-3"> ID de Passenger :<?php
                print_r($suivi->id_pass);
              ?>
              </h2>
           
              
              <h6 class="card-text mb-4">
                <?php
                  echo ' Nom ' . $suivi->nom
                ?>
              </h6>
              <h6 class="card-text mb-4">
                <?php
                  echo 'cin ' . $suivi->cin
                ?>
              </h6>
              <h6 class="card-text mb-4">
                <?php 
                  echo ' birthday ' . $suivi->birthday
                ?>
              </h6>
              <h6 class="card-text mb-4">
                <?php 
                  echo ' id du reservation' . $suivi->id_res
                ?>
              </h6>
              
                    <div class="bouttons">
                    
                      <form action="<?php echo URLROOT; ?>/Passengers/delete/" method="POST">
                          <button type="submit" name="submit" value="<?=$suivi->id_pass?>" rel="tooltip" class="btn btn-danger btn-icon btn-sm">
                            Remove 
                          </button>
                      </form>

                    
                    

                      <a href="<?php echo URLROOT; ?>/reservation/reservation" type="submit" name="submit" rel="tooltip" class="btn btn-primary btn-icon btn-sm">
                            Return
                      </a>
                    
      
                    </div>
                

            </div>
    
            <?php 
              endforeach;
            ?>
          </div>
        </div>
      </div>
    </div>
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
</html>

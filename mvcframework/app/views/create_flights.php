<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
   integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="crflight.css">
  <title>Document</title>
</head>

<body>
  

  <div class="container">
     <div class=" text-center mt-5 ">
        <h1>Create Flight</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form action="<?php echo URLROOT; ?>/Flights/store" method="POST" class="card-form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="form_control">Date de départ</label> 
                                           <input type="date" class="form-control" id="dateDerpart" name="dateDerpart" placeholder="Date D"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                          <label for="form_lastname">Date d'arrivé *</label> 
                                          <input type="date" class="form-control" id="dateArrivee" name="dateArrivee" placeholder="Date A">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="form_email">Départ*</label> 
                                           <input type="text" class="form-control" id="lieuDepart" name="lieuDepart" placeholder="Depart">
                                        </div>
                                        <div class="form-group">
                                           <label for="form_email"> Arrivé*</label> 
                                           <input type="text" class="form-control" id="lieuArriver" name="lieuArriver" placeholder="Arrivé">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> 
                                          <label for="form_need">Prix *</label> 
                                          <input type="number" class="form-control" id="prix" name="prix" value="" min="1" max="10000" placeholder="Pice">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-md-12"> 
                                      <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Confirm"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>


</body>

</html>
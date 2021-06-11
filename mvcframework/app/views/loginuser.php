<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <link href="../public/css/login.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <title>Document</title>
</head>

<body>
<form action="<?php echo URLROOT;?>/Users/login" method="POST">

  <div class="container register-form">
    <div class="form">
          <h1>Login User</h1>
      <div class="form-content">
        <div class="row">
          <div class="col-md-6">
            
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email *"  />
            </div>
          
          </div>
          <div class="col-md-6">

            <div class="form-group">
              <input type="password"  name="password" class="form-control" placeholder="Your Password *" v />
            </div>
          </div>
          
          </div>
          <button type="submit" class="btnSubmit">Submit</button>
        </div>
      </div>
    </div>
  </div>
  
</form> 

</body>
</html>
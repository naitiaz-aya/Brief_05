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
  <link href="../public/css/css.css" rel="stylesheet" />
  <title>Dashboard</title>
</head>

<body>

<a href="<?php echo URLROOT; ?>/Admins/logout" class="btn btn-dark">Logout</a>
  
  <div class="col-lg-9 py-3 overflow-auto main">
    <div class="container ">

      <div class="header pb-6">

        <!-- Card stats -->
        <div class="row m-40">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                    <span class="h2 font-weight-bold mb-0">350,897</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                    <span class="h2 font-weight-bold mb-0">2,356</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-chart-pie-35"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                    <span class="h2 font-weight-bold mb-0">924</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-chart-bar-32"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span class="text-nowrap">Since last month</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="row">
      <div class="col-md-9 ml-auto mr-auto p">
        <!-- <div class="card"> -->
          <h1>The reservations <a href="<?php echo URLROOT; ?>/reservation/resrv" class="btn btn-dark">View</a></h1>
          
        <!-- </div> -->
      </div>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-9 ml-auto mr-auto pb-7">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Flights Table</h4>
            <a href="<?php echo URLROOT; ?>/Flights/create" class="btn btn-dark">add</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-success">
                  <th class="text-center">
                    #
                  </th>
                  <th>
                    Date de départ
                  </th>
                  <th>
                    Date d'arrivée
                  </th>
                  <th class="text-center">
                    Lieu de départ
                  </th>
                  <th class="text-right">
                    Lieu d'arrivé
                  </th>
                  <th class="text-right">
                    prix
                  </th>
                  <th class="text-right">
                    Actions
                  </th>
                </thead>
                <tbody>
                  <?php
                  foreach ($data['flights'] as $flights) :
                  ?>
                    <tr>

                      <td class="text-center">
                        <?php
                        echo $flights->id_fly;
                        ?>
                      </td>
                      <td>
                        <?php
                        echo  date('F j h:m', strtotime($flights->dateDerpart));
                        ?>
                      </td>
                      <td>
                        <?php
                        echo  date('F j h:m', strtotime($flights->dateArrivee));
                        ?>
                      </td>
                      <td class="text-center">
                        <?php
                        echo  $flights->lieuDepart;
                        ?>
                      </td>
                      <td class="text-right">
                        <?php
                        echo  $flights->lieuArriver;
                        ?>
                      </td>
                      <td class="text-right">
                        <?php
                        echo $flights->prix;
                        ?>
                      </td>
                      <td class="text-right">

                       
                        <form action="<?php echo URLROOT; ?>/Flights/delete/" method="POST">
                        <button type="submit" name="submit" value="<?=$flights->id_fly?>" rel="tooltip" class="btn btn-danger btn-icon btn-sm">
                          <i class="fa fa-times"></i>
                        </button>
                        </form>
                      </td>
                    </tr>


                  <?php
                  endforeach;
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</body>

</html>
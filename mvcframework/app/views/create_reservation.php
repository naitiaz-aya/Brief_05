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
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>Reserver</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form action="<?php echo URLROOT; ?>/reservation/store" method="POST" class="card-form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_control">Id du vol : <?php echo $data['id']; ?></label>
                                                <input type="text" class="form-control col-3" name="id_fly" hidden value="<?php echo $data['id']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="form_email">Nom : <?php echo $data['user']->nom; ?></label>
                                                <input type="text" class="form-control" id="nom" name="NomUser" hidden placeholder="NomUser"  value="<?php echo $data['user']->nom; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">CIN : <?php echo $data['user']->Cin; ?></label>
                                                <input type="text" class="form-control" id="cin" name="cinUser" hidden placeholder="cinUser" type="date"  class="form-control" value="<?php echo $data['user']->Cin; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label for="form_email"> Nombre de place</label>
                                                <input type="number" class="form-control" id="nbr_place" name="nbr_place" value="" min="1" max="10" placeholder="Nombre de place">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        
                                        </div>
                                        
                                    </div>
                                    <div class="row">

                                        
                                    </div>
                                </div>
                            <div id="passengerContainer" class="col-md-6" method="POST" action="/resrvation/store">
                            
                            
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const nbPlaceInput = document.querySelector("#nbr_place");
        const passenger = document.querySelector("#passengerContainer");
        console.log(passenger);
        nbPlaceInput.addEventListener('input', function() {
            passenger.innerHTML = ""
            for (let index = 0; index < nbPlaceInput.value; index++) {
                let div = document.createElement('div')
                div.setAttribute("class", 'row')
                div.innerHTML = `
                    <h1>Passenger ${index+1}</h1>
                    <div class="col-md-12">
                        <div class="form-group">
                    <label for="form-group">CIN :</label> 
                        <input type="text"  class="form-control"  name="cin[]"  > 
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom :</label> 
                            <input type="text" class="form-control" id="nom" name="nom[]" placeholder="Nom" >
                        </div>
                        <div class="form-group">
                            <label for="birthday">BIRTHDAY :</label> 
                            <input type="date" class="form-control" id="birthday" name="birthday[]" placeholder="birthday">
                        </div>
                    </div>
                                        `
                passenger.appendChild(div)

            }
            let div = document.createElement('div')
            div.setAttribute("class", 'col-md-12')
            div.innerHTML = `<input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Confirm">`
            passenger.appendChild(div)
        })
    </script>
</body>

</html>
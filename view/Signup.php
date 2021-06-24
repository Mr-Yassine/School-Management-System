<!DOCTYPE html>

<html>
  <head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="Description" content="Put your description here.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    

    <!--  CSS -->
    <link rel="stylesheet" href="http://localhost/School-Management-System/public/css/style.css"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://localhost/School-Management-System/public/css/bootstrap.min.css"/>
    <i class="bi bi-bookmark-check-fill"></i>
    

    <!-- Font -->
    <script src="https://kit.fontawesome.com/1fdfe2e911.js" crossorigin="anonymous"></script>


    <title> Registeration page </title> 
    
    
  </head>

  <body class="bd">


    <div class="container d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="row">


                <div class="col-md-6">
                    <div class="form">
                    <form action="http://localhost/School-Management-System/signupCont/Ajout" method="post">
                        <h2>Registration</h2>
                        <div class="inputbox mt-3"> <span>Username</span> <input type="text" placeholder="Username" name="Username" class="form-control"> </div>
                        <div class="inputbox mt-3"> <span>Email</span> <input type="text" placeholder="Email" name="Email" class="form-control"> </div>
                        <div class="inputbox mt-3"> <span>Password</span> <input type="text" placeholder="*******" name="Password" class="form-control"> </div>
                        <div class="inputbox mt-3"> <span>Matiere</span> 
                             
                            <select  class="form-control" name="Matiere" id="">
                                <option selected>Matiere</option>
                                <option value="Matiere">
                                    <?php
                                        foreach ($result as $matiere)
                                        echo "<option value='".$matiere['Libelle']. "'>" . $matiere['Libelle'] . "</option>";
                                    ?>
                                </option>
                            </select>

                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-right"> <button class="btn btn-success register btn-block" name="register">Register</button> </div> <a href="http://localhost/gestion-emplois/LoginCont/index" class="login">Login</a>
                        </div>
                        <div class="form-check mt-2"> Remember me <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked></div>
                    </form>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="text-center mt-5"> <img src="http://localhost/School-Management-System/public/images/registration.png" width="400"> </div>
                </div>
            </div>
        </div>
    </div>





    <!-- JS & JQuery -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/all.js"></script>


  </body>
</html>

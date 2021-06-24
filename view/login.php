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


    <title> Log-In </title> 
    
    
  </head>

  <body class="lg">


    <div class="container d-flex justify-content-center">


        <div class="card mx-5 my-5">
            <div class="card-body py-2 px-2">
                <h2 class="card-heading py-3 px-5">Log In</h2>  

                <div class="d-flex justify-content-center">

                    <form action="http://localhost/School-Management-System/loginCont/auth" method="post">

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Enter username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                        
                        <div class="form-group row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group"><button type="submit" class="btn btn-primary mb-2" name="login">log In</button></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><a href="http://localhost/School-Management-System/signupCont/index" class="forgot">Create new account</a></div>
                            </div>
                        </div>

                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>

                    </form>

                    <div class="col-md-4">
                        <img class="img-fluid" src="http://localhost/School-Management-System/public/images/login.svg">
                    </div>
                </div>
            </div>
        </div>

    </div>







    <!-- JS & JQuery -->
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.min.js"></script>

  </body>
</html>

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
    

</head>

<body>




<div class="row">

<div class="d-flex justify-content-between">

  <h2 class="card-heading py-3 px-5">Espace Enseignant</h2>
  <div class="col-md-2">

    <form action="http://localhost/School-Management-System/loginCont/logout" method="post">
      <button type="submit" id="lg_home" class="btn btn-danger mb-2" name="logout">log Out</button>
    </form>

  </div>

</div>


<div class="d-flex justify-content-around">

  <!-- List group -->       
    <div class="col-md-3 list-group" id="myList" role="tablist">
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/School-Management-System/reservationCont/index" role="tab">Home</a>
        <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/ReservationCont/reservation" role="tab">Reseravation des Salles</a>
        
    </div>

    <div class="col-md-4">
      <img id="ens_img" class="img-fluid" src="http://localhost/School-Management-System/public/images/teacher.jpg">
    </div>


</div>




</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/main.js"></script>
</body>

</html>

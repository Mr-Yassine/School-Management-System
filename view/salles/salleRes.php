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

<div class="d-flex">

  <div class="col-md-3" id="myList1" role="tablist">
    
    <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/reservationCont/index" role="tab">Home</a>
    <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/School-Management-System/ReservationCont/reservation" role="tab">Reseravation des Salles</a>
        
  </div>

  <div class="col-md-8 m-sm-4 ">
    <div class="d-flex justify-content-between">
      <h1 class="font-weight-bold">
        Reservez votre salle
      </h1>
      <div class="col-md-2">
          <form action="http://localhost/School-Management-System/loginCont/logout" method="post">
            <button type="submit" class="btn btn-danger mb-2" name="logout">log Out</button>
          </form>
      </div>
    </div>
  <br>

  <form action="http://localhost/School-Management-System/ReservationCont/Ajout" method="POST" class="card card-body">
      
    <div class="d-flex">
      <select class="form-control" id="salle" name="salle">
        <option value="0" disabled selected>
          Choix des Salles
        </option>
        
        <?php foreach($salles as $salle): ?>
          <option value="<?= $salle["Libelle"] ?>"><?= $salle["Libelle"] ?></option>
        <?php endforeach; ?>
                          
      </select>

      <div class="col-md-1">
      </div>

      <input type="text" name="capacite" class="form-control" id="capacite"  placeholder="Capacite">
     

      <div class="col-md-1">
      </div>
          
      <input type="date" min="<?=  date("Y/m/d") ?>" name="date" id="date"  class="form-control">

      <div class="col-md-1">
      </div>

      <select name="heure"  id="horraire" class="form-control mr-2">
          <option disabled selected> Choix d'horraire </option>
          <option value="8-10">8-10</option>
          <option value="10-12">10-12</option>
          <option value="14-16">14-16</option>
          <option value="16-18">16-18</option>
          </option>
      </select>

    </div><br>

    <div class="col text-center">
      <input class="btn btn-primary  col-md-3" name="submit" type="submit" value="Reserver">
    </div>
    
  </form>

  <br><br>

  <table class="table caption-top">
    
    <caption class="sRes_tit">les salles reservé  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
          </svg>
    </caption>
    
    <thead>
      <tr>
        <th></th>
        <th scope="col">Salle</th>
        <th scope="col">Capacite</th>
        <th scope="col">Date</th>
        <th scope="col">Heure</th>
        
        <th scope="col">Action</th>
      </tr>               
    </thead>
                
    <tbody id="body">

      <tr>
        <?php foreach($cours as $cour): ?>
        <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
          </svg>
        </td>
        <td><?= $cour["Salle"] ?></td>
        <td><?= $cour["Capacite"] ?></td>
        <td><?= $cour["Date"] ?></td>
        <td><?= $cour["Heure"] ?></td>         
        <td> 
        <form action="http://localhost/School-Management-System/ReservationCont/delete" method="post">
          <input type="hidden" name="IdCours" value="<?= $cour ['IdCours']  ?>">
          <button type="submit" class="btn btn-danger" name="delete">Annuler</button>
        </form>
        </td>
      </tr>
      <?php endforeach; ?>
      
    </tbody>
  </table>



</div>
	
<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/main.js"></script>
</body>

</html>

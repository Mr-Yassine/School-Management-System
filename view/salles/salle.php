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
    <i class="bi bi-plus-square-fill"></i>


    <!-- Font -->
    <script src="https://kit.fontawesome.com/1fdfe2e911.js" crossorigin="anonymous"></script>


    <title> Salles </title> 
    
    
  </head>

<body>


  <div class="d-flex">

  

    <div class="col-md-3" id="myList1" role="tablist">
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/homeCont/index" role="tab">Home</a>
      <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/School-Management-System/salleCont/salle" role="tab">Gestion des Salles</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/enseignantCont/enseignant" role="tab">Gestion des Enseignants</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/groupeCont/groupe" role="tab">Gestion des Groupes</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/matiereCont/matiere" role="tab">Gestion des Matieres</a>
    </div>

    
    
      <div class="col-md-8 m-sm-4 ">
        <div class="d-flex justify-content-between">
          <h1 class="text-center">Salles</h1>
          <div class="col-md-2">
              <form action="http://localhost/School-Management-System/loginCont/logout" method="post">
                <button type="submit" class="btn btn-danger mb-2" name="logout">log Out</button>
              </form>
          </div>
        </div>
      <br>

      <form action="http://localhost/School-Management-System/salleCont/Ajout" id="idForm" method="post" class="card card-body">
        
        <div class="d-flex">
          <div class="col-md-5">
            <input type="text" name="libelle" class="form-control" id="Libelle"  placeholder="Libelle">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
            <input type="text" name="capacite" class="form-control col-md-6" id="capacite" placeholder="Capacite">
          </div>

          <button onclick="add()" type="button" id="add_btn" class="btn btn-primary "><i
              class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
              </svg></i>
          </button>
          &nbsp;&nbsp;

        </div><br>

        <div class="col text-center">
          <input class="btn btn-primary  col-md-3" name="submit" type="submit" value="Submit">
        </div>

      </form>
      <br>

      
      <br>


      <table class="table text-center ">
        <thead>
          <tr>
            <th> Id </th>
            <th> Libelle </th>
            <th> Capacite </th>
            <th> Action </th>
          </tr>
        </thead>

        <tbody>
          
          <?php 
            foreach ($result as $salle){       
          ?>

            <tr>
              
                <?php if(isset($_POST["IdSalle"]) && $_POST["IdSalle"] ==  $salle ['IdSalle']): ?>

                
                    
                  <form action="http://localhost/School-Management-System/salleCont/update" id="idForm"  method="post">

                    <td> <?php echo $salle ['IdSalle']  ?></td>
                      <input  type="hidden" name="IdSalle" value="<?= $salle ['IdSalle'] ?>"/>
                    <td> <input type="text" name="libelle" value="<?= $salle ['Libelle'] ?>"/>  </td>
                    <td> <input type="text" name="capacite" value="<?= $salle ['Capacite'] ?>"><br></td>
                    
                    <td>
                      <button type="submit" class="btn btn-warning" name="update" >Update</button>
                    </td>
                  </form>
                  
                  
                <?php else:  ?>
                    
                    <td> <?php echo $salle ['IdSalle']  ?></td>
                    <td> <?php echo $salle ['Libelle'] ?></td>
                    <td> <?php echo $salle ['Capacite'] ?></td>
                    <td>
                      <div class="d-flex justify-content-end" id="action">

                        <form id="update" action="http://localhost/School-Management-System/salleCont/salle" method="post">
                          <input type="hidden" name="IdSalle" value="<?= $salle ['IdSalle']  ?>">
                          <button type="submit" class="btn btn-warning" name="update" >Update</button>
                        </form>&nbsp;
                        
                        <form action="http://localhost/School-Management-System/salleCont/delete" method="post">
                          <input type="hidden" name="IdSalle" value="<?= $salle ['IdSalle']  ?>">
                          <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                        </form>

                      </div>
                    </td>
                <?php endif; ?>

            
            </tr>
              

            <?php
            }?>
        </tbody>
      </table>


    </div>

  </div>



  <!-- JS & JQuery -->
  <script src="http://localhost/School-Management-System/public/js/bootstrap.min.js"></script>
  <script src="http://localhost/School-Management-System/public/js/jquery.min.js"></script>
  <script src="http://localhost/School-Management-System/public/js/all.js"></script>

</body>

<script>
  var i = 0;

  function add() {
      var idForm = document.getElementById('idForm');
      var Libelle = document.getElementById('Libelle').value;
      var capacite = document.getElementById('capacite').value;

      if (Libelle != '' && capacite != '') {

        idForm.innerHTML += 
        '<br><div class="d-flex"><div class="col-md-5"> <input type="text" name="Libelle' + i +
         '" class="form-control" value="' + Libelle + 
         '" placeholder="Libelle"> </div> <div class="col-md-1"></div> <div class="col-md-5"> <input type="number" name="capacite' + i +
         '" value="' + capacite + '" class="form-control col-md-6" placeholder="capacite"></div></div>';


        i++;

      } else {
        alert("please enter your data !!");
      }
  }
</script>

</html>

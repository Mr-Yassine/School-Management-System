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


    <!-- Font -->
    <script src="https://kit.fontawesome.com/1fdfe2e911.js" crossorigin="anonymous"></script>


    <title> Groupes </title> 
    
    
  </head>

<body>


  <div class="d-flex">


    <div class="col-md-3" id="myList1" role="tablist">
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/homeCont/index" role="tab">Home</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/salleCont/salle" role="tab">Gestion des Salles</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/enseignantCont/enseignant" role="tab">Gestion des Enseignants</a>
      <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/School-Management-System/groupeCont/groupe" role="tab">Gestion des Groupes</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/matiereCont/matiere" role="tab">Gestion des Matieres</a>
    </div>


    <div class="col-md-8 m-sm-4 ">
      
      <div class="d-flex justify-content-between">
        <h1 class="text-center">Groupes</h1>
        <div class="col-md-2">
          <form action="http://localhost/School-Management-System/loginCont/logout" method="post">
            <button type="submit" class="btn btn-primary mb-2" name="logout">log Out</button>
          </form>
        </div>
      </div>
      <br>

      <form action="http://localhost/School-Management-System/groupeCont/Ajout" method="post" class="card card-body">
        
        <div class="d-flex">
          <div class="col-md-6">
            <input type="text" name="libelle" class="form-control" placeholder="Libelle">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
            <input type="text" name="effectif" class="form-control col-md-6" placeholder="Effectif">
          </div>&nbsp;&nbsp;

        </div><br>

        <div class="col text-center">
          <input class="btn btn-primary  col-md-3" name="submit" type="submit" value="Submit">
        </div>
      </form><br>


      <table class="table text-center ">
        <thead>
          <tr>
            <th> Id </th>
            <th> Libelle </th>
            <th> Effectif </th>
            <th> Action </th>
          </tr>
        </thead>

        <tbody>
          
          <?php 
            foreach ($result as $groupe){       
          ?>

            <tr>
              
                <?php if(isset($_POST["IdGrp"]) && $_POST["IdGrp"] ==  $groupe ['IdGrp']): ?>

                
                    
                  <form action="http://localhost/School-Management-System/groupeCont/update" method="post">

                    <td> <?php echo $groupe ['IdGrp']  ?></td>
                      <input  type="hidden" name="IdGrp" value="<?= $groupe ['IdGrp'] ?>"/>
                    <td> <input type="text" name="libelle" value="<?= $groupe ['Libelle'] ?>"/>  </td>
                    <td> <input type="text" name="effectif" value="<?= $groupe ['Effectif'] ?>"><br></td>
                    
                    <td>
                      <button type="submit" class="btn btn-warning" name="update" >Update</button>
                    </td>
                  </form>
                  
                  
                <?php else:  ?>
                    
                    <td> <?php echo $groupe ['IdGrp']  ?></td>
                    <td> <?php echo $groupe ['Libelle'] ?></td>
                    <td> <?php echo $groupe ['Effectif'] ?></td>
                    <td>
                      <div class="d-flex justify-content-end" id="action">

                        <form id="update" action="http://localhost/School-Management-System/groupeCont/groupe" method="post">
                          <input type="hidden" name="IdGrp" value="<?= $groupe ['IdGrp']  ?>">
                          <button type="submit" class="btn btn-warning" name="update" >Update</button>
                        </form>&nbsp;
                        
                        <form action="http://localhost/School-Management-System/groupeCont/delete" method="post">
                          <input type="hidden" name="IdGrp" value="<?= $groupe ['IdGrp']  ?>">
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
  <script src="../public/js/bootstrap.min.js"></script>
  <script src="../public/js/jquery.min.js"></script>
  <script src="../public/js/all.js"></script>

</body>
</html>
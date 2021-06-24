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


    <title> Enseignants </title> 
    
    
  </head>

<body>


  <div class="d-flex">


    <div class="col-md-3" id="myList1" role="tablist">
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/homeCont/index" role="tab">Home</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/salleCont/salle" role="tab">Gestion des Salles</a>
      <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/School-Management-System/enseignantCont/enseignant" role="tab">Gestion des Enseignants</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/groupeCont/groupe" role="tab">Gestion des Groupes</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/matiereCont/matiere" role="tab">Gestion des Matieres</a>
    </div>


    <div class="col-md-8 m-sm-4 ">
      
      <div class="d-flex justify-content-between">
        <h1 class="text-center">Enseignants</h1>
        <div class="col-md-2">
          <form action="http://localhost/School-Management-System/loginCont/logout" method="post">
            <button type="submit" class="btn btn-primary mb-2" name="logout">log Out</button>
          </form>
        </div>
      </div>
      <br>

      <form action="http://localhost/School-Management-System/EnseignantCont/Ajout" method="post" class="card card-body">
        
        <div class="d-flex">
          <div class="col-md-5">
            <input type="text" name="Nom" class="form-control" placeholder="Nom">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <input type="text" name="Email" class="form-control col-md-6" placeholder="Email">
          </div>&nbsp;&nbsp;

        </div><br>

        <div class="d-flex">
          <div class="col-md-5">
            <input type="text" name="Password" class="form-control" placeholder="Password">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <input type="text" name="Matiere" class="form-control" placeholder="Matiere">
          </div>&nbsp;&nbsp;

        </div><br>

        <div class="col text-center">
          <input class="btn btn-primary  col-md-3" name="submit" type="submit" value="Submit">
        </div>
      </form><br>


      <table class="table text-center ">
        <thead>
          <tr>
            <th> IdEns </th>
            <th> Nom </th>
            <th> Email </th>
            <th> Password </th>
            <th> Matiere </th>
            <th> Action </th>
          </tr>
        </thead>


        <tbody>
            
            <?php
            
              foreach ($result as $enseignant){ 
                
            ?>

            <tr>
              
                <?php if(isset($_POST["IdEns"]) && $_POST["IdEns"] ==  $enseignant ['IdEns']):  ?>

                
                    
                  <form action="http://localhost/School-Management-System/EnseignantCont/update" method="post">


                    <td> <?php echo $enseignant ['IdEns'] ?></td>
                      <input  type="hidden" name="IdEns" value="<?= $enseignant ['IdEns'] ?>"/>  
                    <td> <input type="text" name="Nom" value="<?= $enseignant ['Nom'] ?>"/> </td>
                    <td> <input type="text" name="Email" value="<?= $enseignant ['Email'] ?>"/> </td>
                    <td> <input type="text" name="Password" value="<?= $enseignant ['Password'] ?>"/> </td>
                    <td> <input type="text" name="Matiere" value="<?= $enseignant ['Matiere'] ?>"/> </td>

                    <td>
                      <button type="submit" class="btn btn-warning" name="update" >Update</button>
                    </td>
                  </form>
                  
                  
                <?php else:  ?>
                    
                    <td> <?php echo $enseignant ['IdEns'] ?></td>
                    <td> <?php echo $enseignant ['Nom'] ?></td>
                    <td> <?php echo $enseignant ['Email'] ?></td>
                    <td> <?php echo $enseignant ['Password'] ?></td>
                    <td> <?php echo $enseignant ['Matiere'] ?></td>

                    <td>
                      <div class="d-flex justify-content-end" id="action">

                        <form id="update" action="http://localhost/School-Management-System/EnseignantCont/enseignant" method="post">
                          <input type="hidden" name="IdEns" value="<?= $enseignant ['IdEns']  ?>">
                          <button type="submit" class="btn btn-warning" name="update" >Update</button>
                        </form>&nbsp;
                        
                        <form action="http://localhost/School-Management-System/EnseignantCont/delete" method="post">
                          <input type="hidden" name="IdEns" value="<?= $enseignant ['IdEns']  ?>">
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
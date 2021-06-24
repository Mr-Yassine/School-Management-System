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


    <title> Matieres </title> 
    
    
  </head>

<body>


  <div class="d-flex">


    <div class="col-md-3" id="myList1" role="tablist">
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/homeCont/index" role="tab">Home</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/salleCont/salle" role="tab">Gestion des Salles</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/enseignantCont/enseignant" role="tab">Gestion des Enseignants</a>
      <a class="list-group-item list-group-item-action" data-toggle="list" href="http://localhost/School-Management-System/groupeCont/groupe" role="tab">Gestion des Groupes</a>
      <a class="list-group-item list-group-item-action active" data-toggle="list" href="http://localhost/School-Management-System/matiereCont/matiere" role="tab">Gestion des Matieres</a>
    </div>


    <div class="col-md-8 m-sm-4 ">
      
      <div class="d-flex justify-content-between">
        <h1 class="text-center">Matieres</h1>
        <div class="col-md-2">
          <form action="http://localhost/School-Management-System/loginCont/logout" method="post">
            <button type="submit" class="btn btn-primary mb-2" name="logout">log Out</button>
          </form>
        </div>
      </div>
      <br>

      <form action="http://localhost/School-Management-System/matiereCont/Ajout" method="post" class="card card-body">
        
        <div class="d-flex">
          <div class="col-md-6">
            <input type="text" name="libelle" class="form-control" placeholder="Libelle">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-5">
     
          <select name="enseignee" class="form-control custom-select custom-select-lg">

            <option value="0" disabled selected>
              Enseignée par...
            </option>

            <?php foreach($ens as $en): ?>
              <option value="<?= $en["Nom"] ?>"><?= $en["Nom"] ?></option>
            <?php endforeach; ?>

          </select>  


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
            <th> Enseignée par </th>
            <th> Action </th>
          </tr>
        </thead>

        <tbody>
          
          <?php 
            foreach ($result as $matiere){       
          ?>

            <tr>
              
                <?php if(isset($_POST["IdMat"]) && $_POST["IdMat"] ==  $matiere ['IdMat']): ?>

                
                    
                  <form action="http://localhost/School-Management-System/matiereCont/update" method="post">

                    <td> <?php echo $matiere ['IdMat']  ?></td>
                      <input  type="hidden" name="IdMat" value="<?= $matiere ['IdMat'] ?>"/>
                    <td> <input type="text" name="libelle" value="<?= $matiere ['Libelle'] ?>"/>  </td>
                    <td> 
                      <select name="enseignee" class="custom-select-lg">
                        <option value="0" disabled selected>
                          Enseignée par...
                        </option>

                        <?php foreach($ens as $en): ?>
                          <option value="<?= $en["Nom"] ?>"><?= $en["Nom"] ?></option>
                        <?php endforeach; ?>

                      </select> 
                      
                      <td>
                        <button type="submit" class="btn btn-warning" name="update" >Update</button>
                      </td>
                      
                    </td>
                  </form>
                  
                  
                <?php else:  ?>
                    
                    <td> <?php echo $matiere ['IdMat']  ?></td>
                    <td> <?php echo $matiere ['Libelle'] ?></td>
                    <td> <?php echo $matiere ['Enseignee'] ?></td>
                    <td>
                      <div class="d-flex justify-content-end" id="action">

                        <form id="update" action="http://localhost/School-Management-System/matiereCont/matiere" method="post">
                          <input type="hidden" name="IdMat" value="<?= $matiere ['IdMat']  ?>">
                          <button type="submit" class="btn btn-warning" name="update" >Update</button>
                        </form>&nbsp;
                        
                        <form action="http://localhost/School-Management-System/matiereCont/delete" method="post">
                          <input type="hidden" name="IdMat" value="<?= $matiere ['IdMat']  ?>">
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


var i = 0;

function add() {
    var idForm = document.getElementById('idForm');
    var Libelle = document.getElementById('Libelle').value;
    var capacite = document.getElementById('capacite').value;

    if (Libelle != '' && capacite != '') {
      idForm.innerHTML += '<br><div class="d-flex"><div class="col-md-5"><input type="text" name="Libelle' + i +
        '" class="form-control" value="' + Libelle +
        '" placeholder="Libelle"></div><div class="col-md-1"></div><div class="col-md-5"><input type="number" name="capacite' +
        i + '" value="' + capacite + '" class="form-control col-md-6" placeholder="capacite"></div></div>';


      i++;
    } else {
      alert("please enter your data !!");
    }
}

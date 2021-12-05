<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../autocompProfession.css">

<style>

* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
    background-color: #344BAB;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  border-radius:20px
}
select{
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius:20px
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius:20px
}
.dateemission{
   width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius:20px;
}
.fomr-container input[type=date]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius:20px
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.btn-creer{
    background-color: #344BAB !important;
    border-radius:20px;
    color:white

}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  border-radius:20px;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  border-radius:20px;
  color:white;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button class="open-button" onclick="openForm()">Créer un billet</button>

<div class="form-popup" id="myForm">
  <form method="POST" action="<?php if($_SESSION['pays']=='PARIS'){echo 'billetfrance.php';}elseif($_SESSION['pays']=="BRUXELLES"){echo 'billetbelgique.php';}elseif($_SESSION['pays']=="NEW YORK"){echo 'billetamerique.php';}elseif($_SESSION['pays']=="TORONTO"){echo 'billetcanada.php';}elseif($_SESSION['pays']=="COTONOU"){echo 'billetcotonou.php';}elseif($_SESSION['pays']=="FRANKFORT"){echo 'billetgermany.php';}elseif($_SESSION['pays']=="ROME"){echo 'billetitaly.php';}elseif($_SESSION['pays']=="LOME"){echo 'billetlome.php';}elseif($_SESSION['pays']=="ISTANBUL"){echo 'billetturquie.php';}elseif($_SESSION['pays']=="LONDRES"){echo 'billetuk.php';}elseif($_SESSION['pays']=="BAMACO"){echo 'billetmali.php';}elseif($_SESSION['pays']=="GUANGZHOU"){echo 'billetchine.php';}elseif($_SESSION['pays']=="DUBAI"){echo 'billetdubai.php';}elseif($_SESSION['pays']=="DAKAR"){echo 'billetsenegal.php';}elseif($_SESSION['pays']=="MADRID"){echo 'billetespagne.php';}elseif($_SESSION['pays']=="LOME"){echo 'billetlome.php';}?>" class="form-container" autocomplete="off">
          <label for="resident"><b>Resident ou Non</b></label><br>
    <select name="resident" id="">
        <option value="R">Résident</option>
        <option value="NR">Non Résident</option>
    </select>
    <br>

    <label for="nom"><b>Mandataire</b></label>
    <input type="text" placeholder="Nom et Prenom" name="nom" required>

    <label for="profession"><b>Profession</b></label>
    <div class="autocomplete" style="width:270px;"><input type="text" id="searchField"placeholder="Entrer la profession" name="profession" required></div>
    <label for="matricule"><b>Matricule</b></label>
    <input type="text" placeholder="Entrer Matricule" name="matricule" required>
    <label for="dateEmission"><b>Date Emission passport</b></label>
    <input type="date" class="dateemission"name="dateEmission" required></b> <br><br>
    <label for="paysEmission"><b>Pays d'émission du passport</b></label>
    <div class="autocomplete" style="width:270px;"><input type="text" id="searchFiel" placeholder="Pays d'Emission" name="paysEmission" required></div>

    <button type="submit" class="btn btn-creer">Créer</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function autocomplete(searchEle, arr) {
      var currentFocus;
      searchEle.addEventListener("input", function(e) {
         var divCreate,
         b,
         i,
         fieldVal = this.value;
         closeAllLists();
         if (!fieldVal) {
            return false;
         }
         currentFocus = -1;
         divCreate = document.createElement("DIV");
         divCreate.setAttribute("id", this.id + "autocomplete-list");
         divCreate.setAttribute("class", "autocomplete-items");
         this.parentNode.appendChild(divCreate);
         for (i = 0; i <arr.length; i++) {
            if ( arr[i].substr(0, fieldVal.length).toUpperCase() == fieldVal.toUpperCase() ) {
               b = document.createElement("DIV");
               b.innerHTML = "<strong>" + arr[i].substr(0, fieldVal.length) + "</strong>";
               b.innerHTML += arr[i].substr(fieldVal.length);
               b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
               b.addEventListener("click", function(e) {
                  searchEle.value = this.getElementsByTagName("input")[0].value;
                  closeAllLists();
               });
               divCreate.appendChild(b);
            }
         }
      });
      searchEle.addEventListener("keydown", function(e) {
         var autocompleteList = document.getElementById(
            this.id + "autocomplete-list"
         );
         if (autocompleteList)
            autocompleteList = autocompleteList.getElementsByTagName("div");
         if (e.keyCode == 40) {
            currentFocus++;
            addActive(autocompleteList);
         }
         else if (e.keyCode == 38) {
            //up
            currentFocus--;
            addActive(autocompleteList);
         }
         else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) {
               if (autocompleteList) autocompleteList[currentFocus].click();
            }
         }
      });
      function addActive(autocompleteList) {
         if (!autocompleteList) return false;
            removeActive(autocompleteList);
         if (currentFocus >= autocompleteList.length) currentFocus = 0;
         if (currentFocus < 0) currentFocus = autocompleteList.length - 1;
         autocompleteList[currentFocus].classList.add("autocomplete-active");
      }
      function removeActive(autocompleteList) {
         for (var i = 0; i < autocompleteList.length; i++) {
            autocompleteList[i].classList.remove("autocomplete-active");
         }
      }
      function closeAllLists(elmnt) {
         var autocompleteList = document.getElementsByClassName(
            "autocomplete-items"
         );
         for (var i = 0; i < autocompleteList.length; i++) {
            if (elmnt != autocompleteList[i] && elmnt != searchEle) {
               autocompleteList[i].parentNode.removeChild(autocompleteList[i]);
            }
         }
      }
      document.addEventListener("click", function(e) {
         closeAllLists(e.target);
      });
   }
   var profession = ["ETUDIANT","ENTREPRENEUR", "COMMERCANT", "INFORMATICIEN","COMPTABLE","ELEVE","MENAGERE","STUDENT", "APPLICANT","DRIVER","ASSISTANT DE SECURITE","INGENIEUR TELECOM","RESPONSABLE COMMERCIAL","CONSULTANT","AGENT D'AFFAIRE","OFFICIER RETRAITE","PILOTE","EMPLOYE DE SOCIETE","DIRECTEUR DE SOCIETE","REASSUREUR","ECONOMISTE","MECANICIEN",];
   var paysOr = ["CAMEROUN","FRANCE","CANADA","C.IVOIRE","SENEGAL","U.S.A","BELGIQUE","MALI","BURKINA FASO","NIGERIA","SUISSE","ESPAGNE","GUINEE CONAKRY","NIGER","CAIRE"];
   autocomplete(document.getElementById("searchField"), profession);
   autocomplete(document.getElementById("searchFiel"), paysOr);
</script>

</body>
</html>

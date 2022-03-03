<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <?php
    include("librairies.php")
    ?>
  </head>
  <body>
    
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 backsecond">

      <div class="backcolor">

        <div class="row text-center">
        <h1 Style="color:#10181b;">Identification</h1>
        </div>
                                    
      </div>
  
      <div class="col-md-12 col-sm-12 textup">
        LOGIN  <input type="text" id= "inputlog" class="form-control" name="login">   <!-- champs a remplir -->
      </div>

      <div class="col-md-12 col-sm-12 textup">
        PASSWORD  <input ype="text" id= "inputmdp" class="form-control" name="mdp"> <!-- champs a remplir -->
      </div>    
      
      <div class="col-md-12 col-sm-12 textup">
        <button class="btn btn-primary" id='connexion'>connexion</button> <br>
        <a href="mot_de_passe_oublie.php">Mot de passe oublié</a> 
        
        <div id="alerter" 
         class="alert alert-danger d-flex align-items-center" role="alert">
          Vous n'etes pas autorisé à rentrer !
        </div> 

        
      </div>

    </div>
                                       
                                        
  </body>
 
</html>




<script>
  $(document).ready(function() {
    $('#alerter').hide();
    
  });

  $('#connexion').click( function(){
    $('#alerter').show();
   
  });

  $('#connexion').click ( function(){ 

  var _loginrecup = document.getElementById ('inputlog').value;
  var _mdprecup = document.getElementById ('inputmdp').value;
  $.POST('ajax/control_connexion.php') , {login = _loginrecup , mdp = _mdprecup}, function (status){

    if(status == "bon")
    {
      $('#alerter').hide();
      location.href='accueil.php';
    }
  }
  else{
    $('#alerter').show();
  }
    
  });

});
  

</script> 


  
  
  
    
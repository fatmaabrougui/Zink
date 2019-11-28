<html>
<head>
  <title>
   L'EXCEPTION : Create an account
  </title>

<link rel="stylesheet" href="css/ajouter1.css">
<script type="text/javascript" src='ajouter1.js'></script>
 </head>
<body>

<div class="form-style-10">

<h1>Sign Up</h1>
    <div class="page-wrapper bg-dark p-t-100 p-b-50" style="padding-top:100px;">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="ajouter1.php" name="form" onsubmit="return valider() ;">
                        

           <div class="label-field">
                     
                        <div class="form-row">
                          <div class="inner-wrap">
                            <div class="name">Nom</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nom_client" id="nom" placeholder="Nom" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="inner-wrap">
                            <div class="name">Prenom</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="prenom_client" id="prenom" placeholder="Prenom"  required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="inner-wrap">
                            <div class="name">Mot de passe</div>
                            <div class="value">
                                <input class="input--style-6" type="password" name="password_client" id="mdp" placeholder="Mot de passe"  required>
                            </div>
                        </div>
                       <div class="form-row">
                        <div class="inner-wrap">
                            <div class="name">Confirmer Mot de passe</div>
                            <div class="value">
                                <input class="input--style-6" type="password" name="map_client" id="map" placeholder="Confirmer Mot de passe"  required>
                            </div>
                        </div>
                      
                        <div class="form-row">
                          <div class="inner-wrap">
                            <div class="name">Telephone</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="tel_client" id="tel" placeholder="+216"  required>
                            </div>
                        </div>

                        <div class="label-field">
                          
                        <div class="card-footer">
                    <center><button class="button button-block" type="submit" name="bouton">Ajouter</button></center>
                </div>

                <div class="card-footer">
                  
                   
             <center><button  type="button" value="Retour" onclick="history.go(-1)" class="button button-block">Retour</button></center>
                    
                </div>
                    </form>
               
                <div>
                <p></p>
              </div>

            </div>
        </div>
    </div>
</div>

 


    <?php
      if ( isset($_POST['nom_client']) AND isset($_POST['prenom_client'])AND isset($_POST['password_client']) AND isset($_POST['bouton']) AND isset($_POST['tel_client']))
      
      {
         
        
        
          
           $link = mysqli_connect("localhost", "root", "", "zink")or die("Impossible de se connecter : " . mysqli_error());
         
        // Check connection
        if($link === false)
        {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
         $nom_client=$_POST['nom_client'];
         $prenom_client=$_POST['prenom_client'];
         $password_client=$_POST['password_client'];
         
         //$map=$_POST['map'];
         $tel_client=$_POST['tel_client'];

        // Attempt delete query execution
         // descrp-salle esm l table
         $sql="insert into client (nom_client,prenom_client,password_client,tel_client) VALUES ('$nom_client','$prenom_client','$password_client','$tel_client')";
            if(mysqli_query($link, $sql))
                {
                ?>

                <script type="text/javascript">
                    alert("succeesfully posted");
                </script>    
                <?php 
                } 
            else
                {
                ?>
                 
                <?php 
                                      echo "Error: " .$sql. "<br>" . mysqli_error($link)."\n";

                    
                }
                    // Close connection
        mysqli_close($link);



        


      }
      else if ((!(isset($_POST['nom_client'])) OR !(isset($_POST['prenom_client']))OR !(isset($_POST['password_client']))  OR !(isset($_POST['tel_client'])))  AND isset($_POST['bouton']))
      
      {
        ?>



        <script type="text/javascript">
                   alert("Remplir Formulaire");
                </script>


  <?php

      }
      
      
      

      ?>
       

</body>
</html>

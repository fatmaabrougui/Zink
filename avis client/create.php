<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id_produit = $id_client =$nb_etoile = $commentaire ="";
$id_produit_err = $id_client_err = $nb_etoile_err = $commentaire_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // CONTROLE SAISIE TEXTE ************** 

        /*elseif(!filter_var($input_id_avis, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
         $id_avis_err = "Please enter a valid id_avis.";}*/

    
    // Validate id_produit
    $input_id_produit = trim($_POST["id_produit"]);
    if(empty($input_id_produit)){
        $id_produit_err = "Please enter an id_produit.";     
    } 
    elseif(!ctype_digit($input_id_produit)){
        $id_produit_err = "Please enter a positive integer value.";
    }else{
        $id_produit = $input_id_produit;
    }
    
    // Validate id_client
    $input_id_client = trim($_POST["id_client"]);
    if(empty($input_id_client)){
        $id_client_err = "Please enter the id_client.";     
    } 

    elseif(!ctype_digit($input_id_client)){
        $id_client_err = "Please enter a positive integer value.";
    }

    //CONTROLE SAISIE INT POSITIF **********

    /*elseif(!ctype_digit($input_id_client)){
        $id_client_err = "Please enter a positive integer value.";
    }*/

     else{
        $id_client = $input_id_client;
    }

        // Validate nb_etoile
        $input_nb_etoile= trim($_POST["nb_etoile"]);
        if(empty($input_nb_etoile)){
            $nb_etoile_err = "Please enter an nb_etoile.";     
        } 
        elseif(!ctype_digit($input_nb_etoile)){
            $nb_etoile_err = "Please enter a positive integer value.";
        }
        else{
            $nb_etoile = $input_nb_etoile;
        }

            // Validate commentaire
    $input_commentaire = trim($_POST["commentaire"]);
    if(empty($input_commentaire)){
        $commentaire_err = "Please enter an commentaire.";     
    } else{
        $commentaire = $input_commentaire;
    }
    

    // Check input errors before inserting in database
    if(empty($id_produit_err) && empty($id_client_err)&& empty($nb_etoile_err)&& empty($commentaire_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO avis_client (id_produit, id_client, nb_etoile, commentaire) VALUES (?, ?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiis", $param_id_produit, $param_id_client, $param_nb_etoile,$param_commentaire);
            
            // Set parameters
            $param_id_produit = $id_produit;
            $param_id_client = $id_client;
            $param_nb_etoile = $nb_etoile;
            $param_commentaire = $commentaire;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Veuillez remplire le formulaire pour ajouter un avis client à la base de données.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($id_produit_err)) ? 'has-error' : ''; ?>">
                            <label>id_produit</label>
                            <textarea name="id_produit" class="form-control"><?php echo $id_produit; ?></textarea>
                            <span class="help-block"><?php echo $id_produit_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($id_client_err)) ? 'has-error' : ''; ?>">
                            <label>id_client</label>
                            <input type="text" name="id_client" class="form-control" value="<?php echo $id_client; ?>">
                            <span class="help-block"><?php echo $id_client_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($nb_etoile_err)) ? 'has-error' : ''; ?>">
                            <label>nb_etoile</label>
                            <input type="text" name="nb_etoile" class="form-control" value="<?php echo $nb_etoile; ?>">
                            <span class="help-block"><?php echo $nb_etoile_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($commentaire_err)) ? 'has-error' : ''; ?>">
                            <label>commentaire</label>
                            <input type="text" name="commentaire" class="form-control" value="<?php echo $commentaire; ?>">
                            <span class="help-block"><?php echo $commentaire_err;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
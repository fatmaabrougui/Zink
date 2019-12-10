<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id_produit = $id_client = $nb_etoile = $commentaire = "";
$id_produit_err = $id_client_err =$nb_etoile_err =$commentaire_err = "";
 
// Processing form data when form is submitted

if(isset($_POST["id_avis"]) && !empty($_POST["id_avis"])){
    // Get hidden input value
    $id_avis = $_POST["id_avis"];

    
    // id avis
    //auto increment?
    /* elseif(!filter_var($input_id_avis, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name."; }*/ 

    //produit
    $input_id_produit = trim($_POST["id_produit"]);
    if(empty($input_id_produit)){
        $id_produit_err = "Please enter a product id.";
    }
        elseif(!ctype_digit($input_id_produit)){
            $id_produit_err = "Please enter a positive integer value.";
        }else{
        $id_produit = $input_id_produit;
    }
    
    // client
    $input_id_client = trim($_POST["id_client"]);
    if(empty($input_id_client)){
        $id_client_err = "Please enter a client id.";
    }
        elseif(!ctype_digit($input_id_client)){
            $id_client_err = "Please enter a positive integer value.";
        }else{
        $id_client = $input_id_client;
    }
//nb etoile
    $input_nb_etoile = trim($_POST["nb_etoile"]);
    if(empty($input_nb_etoile)){
        $nb_etoile_err = "Please enter a number of stars.";
    }
        elseif(!ctype_digit($input_nb_etoile)){
            $nb_etoile_err = "Please enter a positive integer value.";
        }else{
        $nb_etoile = $input_nb_etoile;
    }
//commentaire
    $input_commentaire = trim($_POST["commentaire"]);
    if(empty($input_commentaire)){
        $commentaire_err = "Please enter a comment.";
    }
       else{
        $commentaire = $input_commentaire;
    }

    // Check input errors before inserting in database
    if(empty($id_produit_err) && empty($id_client_err)&& empty($nb_etoile_err)&& empty($commentaire_err)){
        // Prepare an update statement
        $sql = "UPDATE avis_client SET id_produit=?, id_client=?, nb_etoile=?, commentaire=? WHERE id_avis=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiisi", $param_id_produit, $param_id_client,$param_nb_etoile,$param_commentaire, $param_id_avis);
            
            // Set parameters
            $param_id_produit = $id_produit;
            $param_id_client = $id_client;
            $param_nb_etoile = $nb_etoile;
            $param_commentaire = $commentaire;
            $param_id_avis = $id_avis;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id_avis"]) && !empty(trim($_GET["id_avis"]))){
        // Get URL parameter
        $id_avis =  trim($_GET["id_avis"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM avis_client WHERE id_avis = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id_avis);
            
            // Set parameters
            $param_id_avis = $id_avis;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $id_produit = $row["id_produit"];
                    $id_client = $row["id_client"];
                    $nb_etoile = $row["nb_etoile"];
                    $commentaire = $row["commentaire"];
                    
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Avis Client</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
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
                        <input type="hidden" name="id_avis" value="<?php echo $id_avis; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
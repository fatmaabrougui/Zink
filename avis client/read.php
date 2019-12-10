<?php
// Check existence of id parameter before processing further
if(isset($_GET["id_avis"]) && !empty(trim($_GET["id_avis"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM avis_client WHERE id_avis = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id_avis);
        
        // Set parameters
        $param_id_avis = trim($_GET["id_avis"]);
        
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
                // URL doesn't contain valid id parameter. Redirect to error page
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>Afficher Avis Client</h1>
                    </div>
                    <div class="form-group">
                        <label>id_produit</label>
                        <p class="form-control-static"><?php echo $row["id_produit"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>id_client</label>
                        <p class="form-control-static"><?php echo $row["id_client"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>nb_etoile</label>
                        <p class="form-control-static"><?php echo $row["nb_etoile"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>commentaire</label>
                        <p class="form-control-static"><?php echo $row["commentaire"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>